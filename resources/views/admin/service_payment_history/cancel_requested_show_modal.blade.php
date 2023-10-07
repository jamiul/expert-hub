<div>
    <div class="form-group mb-3">
        <label>{{ translate('Service Title') }}</label>
        <input type="text" disabled value="{{  $requestedCancelService->servicePackage->service->title }}" class="form-control">
    </div>
</div>

<div>
    <div class="form-group mb-3">
        <label>{{ translate('Expert Name') }}</label>
        <input type="text" disabled value="{{ $requestedCancelService->expert->name }}" class="form-control">
    </div>
</div>
<div>
    <div class="form-group mb-3">
        <label>{{ translate('Request sent by') }}</label>
        <input type="text" disabled value="{{ $requestedCancelService->user->name }}" class="form-control">
    </div>
</div>

<div>
    <div class="form-group mb-3">
        <label>{{ translate('Expert Profit') }}</label>
        <input type="text" disabled value="{{ singlePrice($requestedCancelService->expert_profit) }}" class="form-control">
    </div>
</div>

<div class="form-group mb-3">
    <label>{{ translate('Reason for cancellation') }}</label>
    <textarea class="form-control" rows="6" disabled>{{ $requestedCancelService->cancel_reason }}</textarea>
</div>

@if($requestedCancelService->cancel_status == 0)
<form class="form-horizontal" action="{{ route('cancel-service-request.request_accepted') }}" method="POST">
    @csrf
    <input type="hidden" id="service_payment_id" name="service_payment_id" value="{{ $requestedCancelService->id }}" required>
    <div>
        <div class="form-group mb-3">
            <label>{{ translate('Refund Amount') }}</label>
            <div class="input-group mb-1">
                <input type="number" min="1" max="100" step="0.01" name="refund_percentage" value="{{ getSetting('refund_percentage_on_service_cancellation') }}" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text">%</span>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="form-group mb-3 text-right">
            <button type="submit" class="btn btn-primary">{{translate('Approve This Request')}}</button>
        </div>
    </div>
</form>
@endif
