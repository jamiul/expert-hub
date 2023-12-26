<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;

class ScholarshipController extends Controller
{
    public function index()
    {
        return view('admin.scholarships.index');
    }
}
