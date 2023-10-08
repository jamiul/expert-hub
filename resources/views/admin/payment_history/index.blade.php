@extends('admin.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form class="" id="project_payments" action="" method="GET">
                <div class="card-header row gutters-5">
                    <div class="col text-center text-md-left">
                        <h5 class="mb-md-0 h6">{{translate('Project Payments')}}</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="{{ translate('Search by project name') }}" name="search" @isset($sortSearch) value="{{ $sortSearch }}" @endisset>
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
                            <th>{{ translate('Project') }}</th>
                            <th data-breakpoints="md">{{ translate('Client') }}</th>
                            <th data-breakpoints="md">{{ translate('Expert') }}</th>
                            <th>{{ translate('Amount') }}</th>
                            <th data-breakpoints="sm">{{ translate('My Earnings') }}</th>
                            <th data-breakpoints="sm">{{ translate('Expert Earnings') }}</th>
                            <th data-breakpoints="sm">{{ translate('Payment Status') }}</th>
                            @if (\App\Models\Addon::where('unique_identifier', 'offline_payment')->first() != null && \App\Models\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                              <th data-breakpoints="">{{ translate('Approval').' ( '.translate('For Manual Payment').' )'}}</th>
                            @endif
                            <th class="text-right">{{ translate('Date') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($milestonePayments as $key => $milestonePaymentId)
                            @php
                                $milestonePayment = \App\Models\MilestonePayment::find($milestonePaymentId->id);
                            @endphp
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $milestonePayment->project->name }}</td>
                                <td>{{ $milestonePayment->client->name }}</td>
                                <td>{{ $milestonePayment->expert->name }}</td>
                                <td>{{ singlePrice($milestonePayment->amount) }}</td>
                                <td>{{ singlePrice($milestonePayment->admin_profit) }}</td>
                                <td>{{ singlePrice($milestonePayment->expert_profit) }}</td>
                                <td>
                                    @if( $milestonePayment->paid_status == 1 )
                                        <span class="badge badge-inline badge-success">{{ translate('Paid via') }} {{ $milestonePayment->payment_method }}</span>
                                    @else
                                        <span class="badge badge-inline badge-secondary">{{ translate('Unpaid') }}</span>
                                    @endif
                                </td>
                                @if (\App\Models\Addon::where('unique_identifier', 'offline_payment')->first() != null && \App\Models\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                                    @if($milestonePayment->offline_payment == 1)
                                      <td>
                                          @if($milestonePayment->approval == 1)
                                            <span class="badge badge-inline badge-success">{{ translate('Approved') }}</span>
                                          @else
                                            <span class="badge badge-inline badge-info">{{ translate('Pending') }}</span>
                                          @endif
                                      </td>
                                    @else
                                      <td></td>
                                    @endif
                                @endif
                                <td class="text-right">{{ $milestonePayment->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="aiz-pagination aiz-pagination-center">
                    {{ $milestonePayments->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
    @include('admin.partials.delete_modal')
@endsection
