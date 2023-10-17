<?php

use App\Mail\EmailManager;
use App\Models\ChatThread;
use App\Models\ConsultantCategory;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Language;
use App\Models\PageOptimization;
use App\Models\ParentSkill;
use App\Models\ProjectCategory;
use App\Models\SitePage;
use App\Models\Skill;
use App\Models\SystemConfiguration;
use App\Models\TrainingMode;
use App\Models\TrainingSoftware;
use App\Models\Translation;
use App\Models\Upload;
use App\Models\User;

if (!function_exists('areActiveRoutes')) {
    function areActiveRoutes(array $routes, $output = "active")
    {
        foreach ($routes as $route) {
            if (Route::currentRouteName() == $route) {
                return $output;
            }
        }
    }
}

function saveJSONFile($code, $data)
{
    ksort($data);
    $jsonData = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents(base_path('resources/lang/' . $code . '.json'), stripslashes($jsonData));
}

function openJSONFile($code)
{
    $jsonString = [];
    if (File::exists(base_path('resources/lang/' . $code . '.json'))) {
        $jsonString = file_get_contents(base_path('resources/lang/' . $code . '.json'));
        $jsonString = json_decode($jsonString, true);
    }
    return $jsonString;
}


//formats currency
if (!function_exists('formatPrice')) {
    function formatPrice($price)
    {
        if (SystemConfiguration::where('type', 'symbol_format')->first()->value == 1) {
            return currencySymbol() . number_format($price, SystemConfiguration::where('type', 'no_of_decimals')->first()->value);
        }
        return number_format($price, SystemConfiguration::where('type', 'no_of_decimals')->first()->value) . currencySymbol();
    }
}

//formats price to home default price with convertion
if (!function_exists('singlePrice')) {
    function singlePrice($price)
    {
        return formatPrice(convertPrice($price));
    }
}

//converts currency to home default currency
if (!function_exists('convertPrice')) {
    function convertPrice($price)
    {
        $businessSettings = SystemConfiguration::where('type', 'system_default_currency')->first();
        if ($businessSettings != null) {
            $currency = Currency::find($businessSettings->value);
            $price = floatval($price) / floatval($currency->exchange_rate);
        }

        $price = floatval($price) * floatval($currency->exchange_rate);

        return $price;
    }
}

if (!function_exists('currencySymbol')) {
    function currencySymbol()
    {
        $code = Currency::findOrFail(SystemConfiguration::where('type', 'system_default_currency')->first()->value)->code;
        $currency = Currency::where('code', $code)->first();
        return $currency->symbol;
    }
}

function formatBytes($bytes)
{
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);


    return round($bytes) . ' ' . $units[$pow];
}

if (!function_exists('formatRating')) {
    function formatRating($avg)
    {
        if ($avg == null) {
            return number_format(0, 2);
        }
        return number_format($avg, 2);
    }
}

if (!function_exists('renderStarRating')) {
    function renderStarRating($rating, $maxRating = 5)
    {
        $fullStar = "<i class='las la-star active'></i>";
        $halfStar = "<i class='las la-star half'></i>";
        $emptyStar = "<i class = 'las la-star'></i>";
        $rating = $rating <= $maxRating ? $rating : $maxRating;

        $fullStarCount = (int)$rating;
        $halfStarCount = ceil($rating) - $fullStarCount;
        $emptyStarCount = $maxRating - $fullStarCount - $halfStarCount;

        $html = str_repeat($fullStar, $fullStarCount);
        $html .= str_repeat($halfStar, $halfStarCount);
        $html .= str_repeat($emptyStar, $emptyStarCount);
        echo $html;
    }
}

if (!function_exists('getAverageRating')) {
    function getAverageRating($id)
    {
        try {
            return \App\Models\UserProfile::where('user_id', $id)->first()->rating;
        } catch (\Exception $e) {
            return 0;
        }
    }
}

if (!function_exists('getNumberOfReview')) {
    function getNumberOfReview($id)
    {
        return count(\App\Models\Review::where('published', 1)->where('reviewed_user_id', $id)->get());
    }
}

if (!function_exists('getUserRole')) {
    function getUserRole()
    {
        try {
            return auth()->user()->user_type;
        } catch (Exception $e) {
            return null;
        }
    }
}

if (!function_exists('isAdmin')) {
    function isAdmin()
    {
        return getUserRole() == "admin" ? 1 : 0;
    }
}

if (!function_exists('isClient')) {
    function isClient()
    {
        return getUserRole() == "client" ? 1 : 0;
    }
}

if (!function_exists('isExpert')) {
    function isExpert()
    {
        return getUserRole() == "expert" ? 1 : 0;
    }
}

function translate($key, $lang = null)
{
    if ($lang == null) {
        $lang = App::getLocale();
    }

    $translationDef = Translation::where('lang', env('DEFAULT_LANGUAGE', 'en'))->where('lang_key', $key)->first();
    if ($translationDef == null) {
        $translationDef = new Translation;
        $translationDef->lang = env('DEFAULT_LANGUAGE', 'en');
        $translationDef->lang_key = $key;
        $translationDef->lang_value = $key;
        $translationDef->save();
    }

    //Check for session lang
    $translationLocale = Translation::where('lang_key', $key)->where('lang', $lang)->first();
    if ($translationLocale != null) {
        return $translationLocale->lang_value;
    } else {
        return $translationDef->lang_value;
    }
}

function getCompletedProjectsByExpert($id)
{
    return DB::table('projects')
        ->join('project_users', 'projects.id', '=', 'project_users.project_id')
        ->where('project_users.user_id', $id)
        ->where('projects.closed', 1)
        ->select('projects.id')
        ->distinct();
}

//return file uploaded via uploader
if (!function_exists('customAsset')) {
    function customAsset($id)
    {
        if (Upload::find($id) != null) {
            return asset(Upload::find($id)->file_name);
        }
        return null;
    }
}

if (!function_exists('systemEmail')) {
    function systemEmail()
    {
        return User::first()->email;
    }
}

if (!function_exists('getEmailByUserId')) {
    function getEmailByUserId($id)
    {
        $email = "";
        $user = User::find($id);
        if ($user != null) {
            $email = $user->email;
        }
        return $email;
    }
}


if (!function_exists('emailFooterText')) {
    function emailFooterText()
    {
        return env('APP_NAME') . " © 2020 All rights reserved";
    }
}

if (!function_exists('emailLogo')) {
    function emailLogo()
    {
        return customAsset(App\Models\SystemConfiguration::where('type', 'header_logo')->first()->value);
    }
}

if (!function_exists('sendEmailVerificationEmail')) {
    function sendEmailVerificationEmail()
    {
        $user = Auth::user();
        $user->verification_code = encrypt($user->id);
        $user->save();

        $array['view'] = 'emails.verification';
        $array['subject'] = translate('Email Verification');
        $array['from'] = env('MAIL_USERNAME');
        $array['content'] = 'Please click the button below to verify your email address.';
        $array['link'] = route('email.verification.confirmation', $user->verification_code);

        try {
            Mail::to($user->email)->queue(new EmailManager($array));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        flash(translate('Verification email has been sent. Please check your email.'))->success();
        return back();
    }
}

function timezones()
{
    $timezones = array(
        '(GMT-12:00) International Date Line West' => 'Pacific/Kwajalein',
        '(GMT-11:00) Midway Island' => 'Pacific/Midway',
        '(GMT-11:00) Samoa' => 'Pacific/Apia',
        '(GMT-10:00) Hawaii' => 'Pacific/Honolulu',
        '(GMT-09:00) Alaska' => 'America/Anchorage',
        '(GMT-08:00) Pacific Time (US & Canada)' => 'America/Los_Angeles',
        '(GMT-08:00) Tijuana' => 'America/Tijuana',
        '(GMT-07:00) Arizona' => 'America/Phoenix',
        '(GMT-07:00) Mountain Time (US & Canada)' => 'America/Denver',
        '(GMT-07:00) Chihuahua' => 'America/Chihuahua',
        '(GMT-07:00) La Paz' => 'America/Chihuahua',
        '(GMT-07:00) Mazatlan' => 'America/Mazatlan',
        '(GMT-06:00) Central Time (US & Canada)' => 'America/Chicago',
        '(GMT-06:00) Central America' => 'America/Managua',
        '(GMT-06:00) Guadalajara' => 'America/Mexico_City',
        '(GMT-06:00) Mexico City' => 'America/Mexico_City',
        '(GMT-06:00) Monterrey' => 'America/Monterrey',
        '(GMT-06:00) Saskatchewan' => 'America/Regina',
        '(GMT-05:00) Eastern Time (US & Canada)' => 'America/New_York',
        '(GMT-05:00) Indiana (East)' => 'America/Indiana/Indianapolis',
        '(GMT-05:00) Bogota' => 'America/Bogota',
        '(GMT-05:00) Lima' => 'America/Lima',
        '(GMT-05:00) Quito' => 'America/Bogota',
        '(GMT-04:00) Atlantic Time (Canada)' => 'America/Halifax',
        '(GMT-04:00) Caracas' => 'America/Caracas',
        '(GMT-04:00) La Paz' => 'America/La_Paz',
        '(GMT-04:00) Santiago' => 'America/Santiago',
        '(GMT-03:30) Newfoundland' => 'America/St_Johns',
        '(GMT-03:00) Brasilia' => 'America/Sao_Paulo',
        '(GMT-03:00) Buenos Aires' => 'America/Argentina/Buenos_Aires',
        '(GMT-03:00) Georgetown' => 'America/Argentina/Buenos_Aires',
        '(GMT-03:00) Greenland' => 'America/Godthab',
        '(GMT-02:00) Mid-Atlantic' => 'America/Noronha',
        '(GMT-01:00) Azores' => 'Atlantic/Azores',
        '(GMT-01:00) Cape Verde Is.' => 'Atlantic/Cape_Verde',
        '(GMT) Casablanca' => 'Africa/Casablanca',
        '(GMT) Dublin' => 'Europe/London',
        '(GMT) Edinburgh' => 'Europe/London',
        '(GMT) Lisbon' => 'Europe/Lisbon',
        '(GMT) London' => 'Europe/London',
        '(GMT) UTC' => 'UTC',
        '(GMT) Monrovia' => 'Africa/Monrovia',
        '(GMT+01:00) Amsterdam' => 'Europe/Amsterdam',
        '(GMT+01:00) Belgrade' => 'Europe/Belgrade',
        '(GMT+01:00) Berlin' => 'Europe/Berlin',
        '(GMT+01:00) Bern' => 'Europe/Berlin',
        '(GMT+01:00) Bratislava' => 'Europe/Bratislava',
        '(GMT+01:00) Brussels' => 'Europe/Brussels',
        '(GMT+01:00) Budapest' => 'Europe/Budapest',
        '(GMT+01:00) Copenhagen' => 'Europe/Copenhagen',
        '(GMT+01:00) Ljubljana' => 'Europe/Ljubljana',
        '(GMT+01:00) Madrid' => 'Europe/Madrid',
        '(GMT+01:00) Paris' => 'Europe/Paris',
        '(GMT+01:00) Prague' => 'Europe/Prague',
        '(GMT+01:00) Rome' => 'Europe/Rome',
        '(GMT+01:00) Sarajevo' => 'Europe/Sarajevo',
        '(GMT+01:00) Skopje' => 'Europe/Skopje',
        '(GMT+01:00) Stockholm' => 'Europe/Stockholm',
        '(GMT+01:00) Vienna' => 'Europe/Vienna',
        '(GMT+01:00) Warsaw' => 'Europe/Warsaw',
        '(GMT+01:00) West Central Africa' => 'Africa/Lagos',
        '(GMT+01:00) Zagreb' => 'Europe/Zagreb',
        '(GMT+02:00) Athens' => 'Europe/Athens',
        '(GMT+02:00) Bucharest' => 'Europe/Bucharest',
        '(GMT+02:00) Cairo' => 'Africa/Cairo',
        '(GMT+02:00) Harare' => 'Africa/Harare',
        '(GMT+02:00) Helsinki' => 'Europe/Helsinki',
        '(GMT+02:00) Istanbul' => 'Europe/Istanbul',
        '(GMT+02:00) Jerusalem' => 'Asia/Jerusalem',
        '(GMT+02:00) Kyev' => 'Europe/Kiev',
        '(GMT+02:00) Minsk' => 'Europe/Minsk',
        '(GMT+02:00) Pretoria' => 'Africa/Johannesburg',
        '(GMT+02:00) Riga' => 'Europe/Riga',
        '(GMT+02:00) Sofia' => 'Europe/Sofia',
        '(GMT+02:00) Tallinn' => 'Europe/Tallinn',
        '(GMT+02:00) Vilnius' => 'Europe/Vilnius',
        '(GMT+03:00) Baghdad' => 'Asia/Baghdad',
        '(GMT+03:00) Kuwait' => 'Asia/Kuwait',
        '(GMT+03:00) Moscow' => 'Europe/Moscow',
        '(GMT+03:00) Nairobi' => 'Africa/Nairobi',
        '(GMT+03:00) Riyadh' => 'Asia/Riyadh',
        '(GMT+03:00) St. Petersburg' => 'Europe/Moscow',
        '(GMT+03:00) Volgograd' => 'Europe/Volgograd',
        '(GMT+03:30) Tehran' => 'Asia/Tehran',
        '(GMT+04:00) Abu Dhabi' => 'Asia/Muscat',
        '(GMT+04:00) Baku' => 'Asia/Baku',
        '(GMT+04:00) Muscat' => 'Asia/Muscat',
        '(GMT+04:00) Tbilisi' => 'Asia/Tbilisi',
        '(GMT+04:00) Yerevan' => 'Asia/Yerevan',
        '(GMT+04:30) Kabul' => 'Asia/Kabul',
        '(GMT+05:00) Ekaterinburg' => 'Asia/Yekaterinburg',
        '(GMT+05:00) Islamabad' => 'Asia/Karachi',
        '(GMT+05:00) Karachi' => 'Asia/Karachi',
        '(GMT+05:00) Tashkent' => 'Asia/Tashkent',
        '(GMT+05:30) Chennai' => 'Asia/Kolkata',
        '(GMT+05:30) Kolkata' => 'Asia/Kolkata',
        '(GMT+05:30) Mumbai' => 'Asia/Kolkata',
        '(GMT+05:30) New Delhi' => 'Asia/Kolkata',
        '(GMT+05:45) Kathmandu' => 'Asia/Kathmandu',
        '(GMT+06:00) Almaty' => 'Asia/Almaty',
        '(GMT+06:00) Astana' => 'Asia/Dhaka',
        '(GMT+06:00) Dhaka' => 'Asia/Dhaka',
        '(GMT+06:00) Novosibirsk' => 'Asia/Novosibirsk',
        '(GMT+06:00) Sri Jayawardenepura' => 'Asia/Colombo',
        '(GMT+06:30) Rangoon' => 'Asia/Rangoon',
        '(GMT+07:00) Bangkok' => 'Asia/Bangkok',
        '(GMT+07:00) Hanoi' => 'Asia/Bangkok',
        '(GMT+07:00) Jakarta' => 'Asia/Jakarta',
        '(GMT+07:00) Krasnoyarsk' => 'Asia/Krasnoyarsk',
        '(GMT+08:00) Beijing' => 'Asia/Hong_Kong',
        '(GMT+08:00) Chongqing' => 'Asia/Chongqing',
        '(GMT+08:00) Hong Kong' => 'Asia/Hong_Kong',
        '(GMT+08:00) Irkutsk' => 'Asia/Irkutsk',
        '(GMT+08:00) Kuala Lumpur' => 'Asia/Kuala_Lumpur',
        '(GMT+08:00) Perth' => 'Australia/Perth',
        '(GMT+08:00) Singapore' => 'Asia/Singapore',
        '(GMT+08:00) Taipei' => 'Asia/Taipei',
        '(GMT+08:00) Ulaan Bataar' => 'Asia/Irkutsk',
        '(GMT+08:00) Urumqi' => 'Asia/Urumqi',
        '(GMT+09:00) Osaka' => 'Asia/Tokyo',
        '(GMT+09:00) Sapporo' => 'Asia/Tokyo',
        '(GMT+09:00) Seoul' => 'Asia/Seoul',
        '(GMT+09:00) Tokyo' => 'Asia/Tokyo',
        '(GMT+09:00) Yakutsk' => 'Asia/Yakutsk',
        '(GMT+09:30) Adelaide' => 'Australia/Adelaide',
        '(GMT+09:30) Darwin' => 'Australia/Darwin',
        '(GMT+10:00) Brisbane' => 'Australia/Brisbane',
        '(GMT+10:00) Canberra' => 'Australia/Sydney',
        '(GMT+10:00) Guam' => 'Pacific/Guam',
        '(GMT+10:00) Hobart' => 'Australia/Hobart',
        '(GMT+10:00) Melbourne' => 'Australia/Melbourne',
        '(GMT+10:00) Port Moresby' => 'Pacific/Port_Moresby',
        '(GMT+10:00) Sydney' => 'Australia/Sydney',
        '(GMT+10:00) Vladivostok' => 'Asia/Vladivostok',
        '(GMT+11:00) Magadan' => 'Asia/Magadan',
        '(GMT+11:00) New Caledonia' => 'Asia/Magadan',
        '(GMT+11:00) Solomon Is.' => 'Asia/Magadan',
        '(GMT+12:00) Auckland' => 'Pacific/Auckland',
        '(GMT+12:00) Fiji' => 'Pacific/Fiji',
        '(GMT+12:00) Kamchatka' => 'Asia/Kamchatka',
        '(GMT+12:00) Marshall Is.' => 'Pacific/Fiji',
        '(GMT+12:00) Wellington' => 'Pacific/Auckland',
        '(GMT+13:00) Nuku\'alofa' => 'Pacific/Tongatapu'
    );

    return $timezones;
}

if (!function_exists('appTimezone')) {
    function appTimezone()
    {
        return config('app.timezone');
    }
}

if (!function_exists('chatThreads')) {
    function chatThreads()
    {
        $data = array();
        if (Auth::check()) {
            foreach (ChatThread::where('sender_user_id', Auth::user()->id)->orWhere('receiver_user_id', Auth::user()->id)->get() as $key => $chatThread) {
                if (count($chatThread->chats()->where('sender_user_id', '!=', Auth::user()->id)->where('seen', 0)->get()) > 0) {
                    $data[] = $chatThread->id;
                }
            }
        }

        return $data;
    }
}

if (!function_exists('getSetting')) {
    function getSetting($key, $default = "")
    {
        $setting = \App\Utility\SettingsUtility::getSettingsValue($key);
        return $setting == "" ? $default : $setting;
    }
}

function hex2rgba($color, $opacity = false)
{

    $default = 'rgb(0,0,0)';

    //Return default if no color provided
    if (empty($color)) {
        return $default;
    }

    //Sanitize $color if "#" is provided
    if ($color[0] == '#') {
        $color = substr($color, 1);
    }

    //Check if color has 6 or 3 characters and get values
    if (strlen($color) == 6) {
        $hex = array($color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]);
    } elseif (strlen($color) == 3) {
        $hex = array($color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]);
    } else {
        return $default;
    }

    //Convert hexadec to rgb
    $rgb = array_map('hexdec', $hex);

    //Check if opacity is set(rgba or rgb)
    if ($opacity) {
        if (abs($opacity) > 1) {
            $opacity = 1.0;
        }
        $output = 'rgba(' . implode(",", $rgb) . ',' . $opacity . ')';
    } else {
        $output = 'rgb(' . implode(",", $rgb) . ')';
    }

    //Return rgb(a) color string
    return $output;
}

// get hourly rate from constant file
function getHourlyRate()
{
    return config('constants.hourlyRate');
}

// get hourly rate name
function getHourlyRateName($key)
{
    if (isset(getHourlyRate()[$key])) {
        return getHourlyRate()[$key];
    }
}

// get country name by id
function getCountryName($countryID)
{
    return Country::where('id', $countryID)->value('name');
}

// get all durations
function getDurations(): array
{
    return config('constants.durations');
}

function getCustomEnv($envKey)
{
    return config($envKey) ?? env($envKey);
}

function convertSlug($name)
{
    $lowerCase = strtolower($name);
    $slug = str_replace(' ', '-', $lowerCase);

    return $slug;
}

// get consultant from users table
function getConsultants()
{
    return User::where('user_type', 'expert')->get()->toArray();
}

// get user roles
function getUserRoles()
{
    if (Auth::check()) {
        $roles = Auth::user()->roles->pluck('id', 'id');
        if ($roles) {
            return $roles->toArray();
        }
    }
    return [];
}

function isRoleConsultant()
{
}

function isRoleAdmin()
{
    if (in_array(config('constants.Admin.role_id'), getUserRoles())) {
        return true;
    }
    return false;
}

// get training mode name
function getTrainingModeName($id)
{
    $trainingMode = TrainingMode::where('id', $id)->first();

    return $trainingMode['name'];
}

function getSoftwarePackageName($id)
{
    $softwarePackage = TrainingSoftware::where('id', $id)->first();
    // return  $softwarePackage['name'];
    if ($softwarePackage) {
        return $softwarePackage->name;
    } else {
        return 'software_package not found';
    }
}

function getLanguageName($id)
{
    $language = Language::where('id', $id)->first();
    return $language['name'];
}

function getTrainingCategory($id)
{
    $category = ProjectCategory::where('id', $id)->first();
    return $category->name ?? null;
}

function getInstructorName($id)
{
    $instructor = User::where('user_type', 'expert')->where('id', $id)->first();

    return $instructor ? $instructor->name : null;
}

function getProjectCategory()
{
    return ProjectCategory::all()->sortByDesc("id")->toArray();
}

function getTrainingModes()
{
    return TrainingMode::all()->toArray();
}

function getTrainingSoftwares()
{
    return TrainingSoftware::all()->toArray();
}

function getLanguages()
{
    return Language::all()->toArray();
}

function getCourseInstructors()
{
    return User::where('user_type', 'expert')->get()->toArray();
}

function getConsultantCategory(): array
{
    return ConsultantCategory::all()->toArray();
}

function getSkills(): array
{
    return Skill::all()->sortByDesc("id")->toArray();
}

function getSkillsByID($id): array
{
    $skill = Skill::find($id);

    if ($skill !== null) {
        return $skill->toArray();
    } else {
        return [];
    }
}

function getParentSkills(): array
{
    return Skill::whereNull('parent_id')->sortByDesc("id")->get()->toArray();
}

function getSubSkills($id): object
{
    return Skill::where('parent_id', $id)->get();
}

function getCountry(): \Illuminate\Support\Collection
{
    return Country::all();
}

if (!function_exists('formatTrainingDate')) {
    function formatTrainingDate($date)
    {
        $startDate = Carbon::parse($date)->format('D M j');
        $endDate = Carbon::parse($date)->addDays(2)->format('D M j, Y');
        $startTime = '10am';
        $endTime = '3pm';
        $timezone = 'Australian Eastern Standard Time';

        return "{$startDate} – {$endDate}, from {$startTime} – {$endTime} daily ({$timezone})";
    }
}

function getExpertPhoto($expert)
{
    $imgUrl = asset('assets/frontend/default/img/avatar-place.png'); // Default image URL

    if ($expert && $expert->user && $expert->user->address && $expert->user->address->country) {
        // Check if each level exists before accessing 'photo'
        $country = $expert->user->address->country;

        if ($country->photo != null) {
            $imgUrl = $country->photo;
        }
    }

    return $imgUrl;
}

if (!function_exists('getCurrentUrl')) {
    function getCurrentUrl()
    {
        return request()->fullUrl();
    }
}

function getUrls()
{
    $data = array();
    $remainingUrl = '';
    $baseUrl = config('app.url');
    $fullUrl = getCurrentUrl();
    $baseParts = parse_url($baseUrl);
    $fullParts = parse_url($fullUrl);

    if ($baseParts['host'] === $fullParts['host']) {
        if (!empty($fullParts['path']) && !empty($baseParts['path'])) {
            $remainingUrl = rtrim($fullParts['path'], '/');
            $remainingUrl = str_replace($baseParts['path'], '', $remainingUrl);
        }
    }

    if ($remainingUrl == '') {
        $defaultdata = PageOptimization::where('id', 1)->get();
        if ($defaultdata->isNotEmpty()) {
            $data['title'] = $defaultdata[0]->title;
            $data['keyword'] = $defaultdata[0]->keyword;
            $data['description'] = $defaultdata[0]->description;
        }
    } else {
        $pageoptimizations = SitePage::with('description')->where('url', 'like', $remainingUrl . '%')->get();
        if ($pageoptimizations->isEmpty()) {
            $defaultdata = PageOptimization::where('id', 1)->get();
            if ($defaultdata->isNotEmpty()) {
                $data['title'] = $defaultdata[0]->title;
                $data['keyword'] = $defaultdata[0]->keyword;
                $data['description'] = $defaultdata[0]->description;
            }
        } else {
            if ($pageoptimizations[0]->description->isNotEmpty()) {
                $data['title'] = $pageoptimizations[0]->description->title;
                $data['keyword'] = $pageoptimizations[0]->description->keyword;
                $data['description'] = $pageoptimizations[0]->description->description;
            } else {
                $defaultdata = PageOptimization::where('id', 1)->get();
                if ($defaultdata->isNotEmpty()) {
                    $data['title'] = $defaultdata[0]->title;
                    $data['keyword'] = $defaultdata[0]->keyword;
                    $data['description'] = $defaultdata[0]->description;
                }
            }
        }
    }

    return $data;
}