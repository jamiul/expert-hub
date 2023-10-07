@extends('admin.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form class="" id="project_payments" action="" method="GET">
                <div class="card-header row gutters-5">
                    <div class="col text-center text-md-left">
                        <h5 class="mb-md-0 h6">{{translate('Service Payments')}}</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search by project name" name="search" @isset($sortSearch) value="{{ $sortSearch }}" @endisset>
                            <div class="input-group-append">
                                <button class="btn btn-light" type="submit">
                                    <i class="las la-search la-rotate-270"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="card-body">
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ translate('Service') }}</th>
                            <th data-breakpoints="sm">{{ translate('Service Type') }}</th>
                            <th data-breakpoints="md">{{ translate('Client') }}</th>
                            <th data-breakpoints="md">{{ translate('Expert') }}</th>
                            <th>{{ translate('Amount') }}</th>
                            <th data-breakpoints="sm">{{ translate('My Earnings') }}</th>
                            <th data-breakpoints="sm">{{ translate('Expert Earnings') }}</th>
                            <th>{{ translate('Payment Method') }}</th>
                            @if (\App\Models\Addon::where('unique_identifier', 'offline_payment')->first() != null && \App\Models\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                              <th data-breakpoints="">{{ translate('Payment Type')}}</th>
                              <th data-breakpoints="md">{{ translate('Approval').' ( '.translate('For Manual Payment').' )'}}</th>
                            @endif
                            <th class="text-right">{{ translate('Date') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($servicePayments as $key => $servicePayment)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><a target="_blank" href="{{ route('service.show', $servicePayment->servicePackage->service->slug) }}">{{ $servicePayment->servicePackage->service->title }}</a></td>
                                <td>{{ ucfirst($servicePayment->servicePackage->service_type) }}</td>
                                <td>{{ $servicePayment->user->name }}</td>
                                <td>{{ $servicePayment->expert->name }}</td>
                                <td>{{ singlePrice($servicePayment->amount) }}</td>
                                <td>{{ singlePrice($servicePayment->admin_profit) }}</td>
                                <td>{{ singlePrice($servicePayment->expert_profit) }}</td>
                                <td>
                                    <span class="badge badge-inline badge-success">{{ translate('Paid via') }} {{ $servicePayment->payment_method }}</span>
                                </td>
                                @if (\App\Models\Addon::where('unique_identifier', 'offline_payment')->first() != null && \App\Models\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                                    <td>
                                      @if($servicePayment->offline_payment == 1)
                                          <span class="badge badge-inline badge-info">{{ translate('Manual') }}</span>
                                      @else
                                          <span class="badge badge-inline badge-success">{{ translate('Online') }}</span>
                                      @endif
                                    </td>
                                    @if($servicePayment->offline_payment == 1)
                                      <td>
                                          @if($servicePayment->approval == 1)
                                            <span class="badge badge-inline badge-success">{{ translate('Approved') }}</span>
                                          @else
                                            <span class="badge badge-inline badge-info">{{ translate('Pending') }}</span>
                                          @endif
                                      </td>
                                    @else
                                      <td></td>
                                    @endif
                                @endif
                                <td class="text-right">{{ $servicePayment->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="aiz-pagination aiz-pagination-center">
                    {{ $servicePayments->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
    @include('admin.partials.delete_modal')
@endsection
