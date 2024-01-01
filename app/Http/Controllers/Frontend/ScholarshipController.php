<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Scholarship;

class ScholarshipController extends Controller
{
    public function index()
    {
        return view('frontend.scholarship.index');
    }

    public function show(Scholarship $scholarship)
    {
        return view('frontend.scholarship.show', [
            'scholarship' => $scholarship
        ]);
    }
}
