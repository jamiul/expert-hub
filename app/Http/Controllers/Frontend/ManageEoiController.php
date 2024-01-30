<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Eoi;
use App\Models\Project;
use Illuminate\Http\Request;

class ManageEoiController extends Controller
{
    public function index(Project $project)
    {
        return view('frontend.project.eoi.index', [
            'project' => $project,
        ]);
    }

    public function show(Project $project, Eoi $eoi)
    {
        return view('frontend.expert.profile.show',[
            'project' => $project,
            'eoi' => $eoi,
            'expert' => $eoi->expert,
        ]);
    }
}
