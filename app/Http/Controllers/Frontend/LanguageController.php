<?php

namespace App\Http\Controllers\Frontend;

// use Symfony\Component\Console\Input\Input;
use App\Models\Language;
use App\Models\Translation;
use App\Rules\Lowercase;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Redirect;
use Session;
use Validator;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $rules = array();
    private $messages = array();

    public function __construct()
    {
        $this->middleware(['permission:show system languages setting'])->only('index');

        $this->rules = [
            'name' => [
                'required',
                'unique:languages,name',
                'max:255',
            ],
            'code' => [
                'required',
                'unique:languages,code',
                'max:2',
                new Lowercase,
            ],
        ];

        $this->messages = [
            'name.required' => translate('Name is required'),
            'name.unique' => translate('Name must be unique'),
            'name.max' => translate('Name must less than :max characters'),
            'code.required' => translate('Code is required'),
            'code.unique' => translate('Code must be unique'),
            'code.max' => translate('Code must less than :max characters'),

        ];
    }

    public function index()
    {
        $languages = Language::paginate(10);
        return view('admin.system_configurations.languages.index', compact('languages'));
    }

    public function changeLanguage($locale)
    {
        Session::put('locale', $locale);
        $language = Language::where('code', $locale)->first();
        flash(translate('Language changed to ') . $language->name)->success();
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $language = new Language;
        $language->name = $request->name;
        $language->code = $request->code;
        $language->rtl = isset($request->rtl) ? 1 : 0;
        $language->enable = 1;

        $rules = $this->rules;
        $messages = $this->messages;
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            flash(translate('Something went wrong'))->error();
            return Redirect::back()->withErrors($validator);
        }

        if ($language->save()) {
            // saveJSONFile($language->code, openJSONFile('en'));
            flash(translate('Language has been inserted successfully'))->success();
            return redirect()->route('languages.index');
        } else {
            flash(translate('Something went wrong'))->error();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function show(Request $request, $id)
    {
        $sortSearch = null;
        $language = Language::findOrFail(decrypt($id));
        $langKeys = Translation::where('lang', env('DEFAULT_LANGUAGE', 'en'));
        if ($request->has('search')) {
            $sortSearch = $request->search;
            $langKeys = $langKeys->where('lang_key', 'like', '%' . $sortSearch . '%');
        }
        $langKeys = $langKeys->paginate(50);
        return view('admin.system_configurations.languages.language_view', compact('language', 'lang_keys', 'sort_search'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $language = Language::findOrFail(decrypt($id));
        return view('admin.system_configurations.languages.edit', compact('language'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (env("DEMO_MODE") == "On") {
            flash(translate('This action is blocked in demo version!'))->error();
            return back();
        }

        $language = Language::findOrFail($id);
        $prevCode = $language->code;
        $language->name = $request->name;
        $language->code = $request->code;
        $language->rtl = isset($request->rtl) ? 1 : 0;

        $rules = $this->rules;
        $rules['name'] = [
            'required',
            Rule::unique('languages')->ignore($language->id),
            'max:255'
        ];
        $rules['code'] = [
            'required',
            Rule::unique('languages')->ignore($language->id),
            'max:2',
            new Lowercase,
        ];
        $messages = $this->messages;
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            flash(translate('Something went wrong'))->error();
            return Redirect::back()->withErrors($validator);
        }

        if ($language->save()) {
            // saveJSONFile($language->code, openJSONFile($prevCode));
            flash(translate('Language has been updated successfully'))->success();
            return redirect()->route('languages.index');
        } else {
            flash(translate('Something went wrong'))->error();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (env("DEMO_MODE") == "On") {
            flash(translate('This action is blocked in demo version!'))->error();
            return back();
        }
        $language = Language::findOrFail($id);
        if ($language->code != env('DEFAULT_LANGUAGE')) {
            $language->delete();
            flash(translate('Language has been deleted successfully'))->success();
            return redirect()->route('languages.index');
        } else {
            flash(translate('You can not delete default language'))->error();
            return back();
        }
    }

    public function keyValueStore(Request $request)
    {
        $language = Language::findOrFail($request->id);
        foreach ($request->values as $key => $value) {
            $translationDef = Translation::where('lang_key', $key)->where('lang', $language->code)->first();
            if ($translationDef == null) {
                $translationDef = new Translation;
                $translationDef->lang = $language->code;
                $translationDef->lang_key = $key;
                $translationDef->lang_value = $value;
                $translationDef->save();
            } else {
                $translationDef->lang_value = $value;
                $translationDef->save();
            }
        }
        flash(translate('Translations updated for ') . $language->name)->success();
        return back();
    }

    public function updateLanguageStatus(Request $request)
    {
        $language = Language::findOrFail($request->id);
        $language->enable = $request->status;
        $statusActiveCount = count(Language::where('enable', 1)->get());
        if ($request->status == 0) {
            if ($statusActiveCount == 1) {
                return 2;
            }
        }
        if ($language->save()) {
            return 1;
        }
        return 0;
    }
}
