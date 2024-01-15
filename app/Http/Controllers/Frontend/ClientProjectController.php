<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ClientProjectController extends Controller
{
    public function show(Project $project)
    {
        return view('frontend.client.projects.show', [
            'project' => $project,
        ]);
    }
}
