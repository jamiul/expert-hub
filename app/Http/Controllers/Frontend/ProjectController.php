<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\OptionGroupEnum;
use App\Http\Requests\ProjectRequest;
use App\Models\Badge;
use App\Models\HireInvitation;
use App\Models\MilestonePayment;
use App\Models\Option;
use App\Models\Project;
use App\Models\ProjectBid;
use App\Models\ProjectCategory;
use App\Models\ProjectUser;
use App\Models\Skill;
use App\Models\UserBadge;
use App\Utility\EmailUtility;
use App\Utility\NotificationUtility;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function App\Http\Controllers\get_email_by_user_id;

class ProjectController extends Controller
{
    public function index()
    {
        return view('frontend.project.find-projects');
    }
    public function projectDetails(){
        return view('frontend.project.find-projects-details');
    }

    public function create()
    {
        return view('frontend.project.create');
    }
}
