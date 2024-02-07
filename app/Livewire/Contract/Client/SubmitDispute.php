<?php

namespace App\Livewire\Contract\Client;

use App\Enums\ContractStatus;
use App\Enums\DisputeStatus;
use App\Models\Admin;
use App\Models\Contract;
use App\Models\Dispute;
use App\Notifications\AdminContractDisputeNotification;
use App\Notifications\ContractDisputeNotification;
use Illuminate\Support\Facades\Notification;
use WireElements\Pro\Components\Modal\Modal;

class SubmitDispute extends Modal
{
    public $contract;
    public $project_title;
    public $expert;
    public $reasons;
    public $reason;
    public $description;

    public function mount(Contract $contract)
    {
        $this->contract = $contract;
        $this->project_title = $contract->project->title;
        $this->expert = $contract->expert;
        $this->reasons = [
            'Problem working with expert',
            'I do not need the work completed',
            'Expert no longer available for this project',
        ];
    }

    public function submitDispute()
    {
        $this->validate();
        $this->contract->update([
            'status' => ContractStatus::Disputed,
        ]);
        //TODO Check milestone status when there will be dispute after Payment released
        Dispute::create([
            'contract_id' => $this->contract->id,
            'reason' => $this->reason,
            'description' => $this->description,
            'status' => DisputeStatus::Open,
        ]);
        toast('success', "Dispute Submitted Successfully!", $this);

        $this->expert->user->notify(new ContractDisputeNotification($this->contract));
        $admins = Admin::get();
        Notification::send($admins, new AdminContractDisputeNotification($this->contract));
        $this->dispatch('contract-disputed');
        $this->close();
    }

    public function rules()
    {
        return [
            'reason' => ['required'],
            'description' => ['required','min:100', 'max:2000'],
        ];
    }

    public function render()
    {
        return view('livewire.contract.client.submit-dispute');
    }
}
