
<div>
    <div class="form-group mb-3">
        <label>{{ translate('Project Name') }}</label>
        <input type="text" disabled value="{{ $cancelProject->project->name }}" class="form-control">
    </div>
</div>
<div>
    <div class="form-group mb-3">
        <label>{{ translate('Client Name') }}</label>
        <input type="text" disabled value="{{ $cancelProject->project->client->name }}" class="form-control">
    </div>
</div>
<div>
    <div class="form-group mb-3">
        <label>{{ translate('Request sent by') }}</label>
        <input type="text" disabled value="{{ $cancelProject->requested_user->name }}" class="form-control">
    </div>
</div>
@php
 $milestonePayments = \App\Models\MilestonePayment::where('project_id', $cancelProject->project_id)->where('paid_status',1)->get();
    $expertProfit = 0;
    $totalAmount = 0;
    foreach ($milestonePayments as $key =>$milestonePayment) {
        $expertProfit += $milestonePayment->expert_profit;
        $totalAmount += $milestonePayment->amount;
    }
@endphp
<div>
    <div class="form-group mb-3">
        <label>{{ translate('Total Paid by Client') }}</label>
        <input type="text" disabled value="{{ singlePrice($totalAmount) }}" class="form-control">
    </div>
</div>
<div>
    <div class="form-group mb-3">
        <label>{{ translate('Expert Profit') }}</label>
        <input type="text" disabled value="{{ singlePrice($expertProfit) }}" class="form-control">
    </div>
</div>

<div class="form-group mb-3">
    <label>{{ translate('Reason for cancellation') }}</label>
    <textarea class="form-control" rows="6" disabled>{{ $cancelProject->reason }}</textarea>
</div>

@if($cancelProject->project->cancel_status == 0)
<form class="form-horizontal" action="{{ route('cancel-project-request.request_accepted') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="project_id" name="project_id" value="{{ $cancelProject->project_id }}" required>
    <input type="hidden" id="cancel_by_user_id" name="cancel_by_user_id" value="{{ $cancelProject->requested_user_id }}" required>
    <input type="hidden" id="cancel_project_id" name="cancel_project_id" value="{{ $cancelProject->id }}" required>
    @if($totalAmount > 0)
    <div>
        <div class="form-group mb-3">
            <label>{{ translate('Refund Amount') }}</label>
            <div class="input-group mb-1">
                <input type="number" min="1" max="100" step="0.01" name="refund_percentage" value="{{ getSetting('refund_percentage_on_project_cancellation') }}" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text">%</span>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div>
        <div class="form-group mb-3 text-right">
            <button type="submit" class="btn btn-primary">{{translate('Approve This Request')}}</button>
        </div>
    </div>
</form>
@endif
