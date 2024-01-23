<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return view('frontend.project.index');
    }

    public function create()
    {
        return view('frontend.project.create');
    }

    public function edit(Project $project)
    {
        return view('frontend.project.edit', [
            'project' => $project,
        ]);
    }

    public function show(Project $project)
    {
        $similarProjects = Project::query()
            ->where('expertise_id', $project->expertise_id)
            // ->orWhereHas('skills', function($query) use($project){
            //     $query->whereIn('expertise_id', $project->skills->pluck('id')->toArray());
            // })
            ->where('id', '!=' ,12)
            ->limit(3)
            ->get();
        $eoiAlreadySubmitted = $project->eois()->where('expert_id', auth()->user()->profile->id)->exists();
        return view('frontend.project.show',[
            'project' => $project,
            'similarProjects' => $similarProjects,
            'eoiAlreadySubmitted' => $eoiAlreadySubmitted,
        ]);
    }
}
