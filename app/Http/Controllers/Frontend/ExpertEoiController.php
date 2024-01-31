<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpertEoiController extends Controller
{
    public function index()
    {
        return view('frontend.expert.eoi.index');
    }
}
