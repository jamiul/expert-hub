<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Training;

class TrainingController extends Controller
{
    public function index()
    {
        return view('frontend.training.index');
    }

    public function show(Training $training)
    {
        return view('frontend.training.show', [
            'training' => $training,
        ]);
    }

    
}
