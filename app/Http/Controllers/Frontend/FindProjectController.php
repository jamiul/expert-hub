<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FindProjectController extends Controller
{
    public function index()
    {
        $title = "The Work you Want, All in the One Place";
        
        return view('frontend.find-projects.index', compact('title'));
    }
}
