<?php

namespace App\Livewire\Training;

use App\Enums\TrainingParticipantStatus;
use App\Models\Training;
use App\Models\TrainingParticipant;
use App\Models\User;
use WireElements\Pro\Components\Modal\Modal;

class Register extends Modal
{
    public $training;
    
    public function mount(Training $training)
    {
        $this->training= $training;
    }

    public function checkout()
    {
        if(!auth()->check()){
            toast('info', 'Login as Client to register Training');
            return redirect()->route('auth.login');
        }
        $user = User::find(auth()->user()->id);
        if($user->isExpert()){
            toast('info', 'Login as Client to register Training');
            return redirect()->route('home');
        }
        $participant = TrainingParticipant::create([
            'training_id' => $this->training->id,
            'client_id' => $user->profile->id,
            'amount' => $this->training->fee,
            'status' => TrainingParticipantStatus::Pending,
        ]);
        return redirect()->route('client.payment.pay', ['reference' => 'training', 'id' => $participant->id]);
    }

    public function render()
    {
        return view('livewire.training.register');
    }
}
