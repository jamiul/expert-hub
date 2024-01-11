<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class EoiController extends Controller
{
    public function create(Project $project)
    {
        return view('frontend.eoi.create', [
            'project' => $project
        ]);
    }
}
