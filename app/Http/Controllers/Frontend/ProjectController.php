<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return view('frontend.project.find-projects');
    }

    public function create()
    {
        return view('frontend.project.create');
    }

    public function show(Project $project)
    {
        return view('frontend.project.show',[
            'project' => $project
        ]);
    }
}
