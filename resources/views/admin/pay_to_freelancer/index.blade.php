@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form class="" id="sort_expert_payment_list" action="" method="GET">
                    <div class="card-header row gutters-5">
                        <div class="col text-center text-md-left">
                            <h1 class="mb-0 h6">{{translate('Freelnacer Payments')}}</h1>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="{{ translate('Search by Name') }}" name="search" @isset($sortSearch) value="{{ $sortSearch }}" @endisset>
                                <div class="input-group-append">
                                    <button class="btn btn-light" type="submit">
                                        <i class="las la-search la-rotate-270"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <input type="text" class="aiz-date-range form-control" @isset($sortSearchByDate) value="{{ $sortSearchByDate }}" @endisset name="date" placeholder="{{ translate('Select time and Search') }}" data-advanced-range="true" autocomplete="off"/>
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
                                <th>{{translate('Payment By')}}</th>
                                <th>{{translate('Payment To')}}</th>
                                <th>{{translate('Paid Amount')}}</th>
                                <th data-breakpoints="md">{{translate('Paid Method')}}</th>
                                <th data-breakpoints="md">{{translate('Paid Status')}}</th>
                                <th data-breakpoints="md">{{translate('Paid At')}}</th>
                                <th data-breakpoints="md" class="text-right">{{translate('Reciept')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($payToExperts as $key => $payToExpert)
                                <tr>
                                    <td>{{ ($key+1) + ($payToExperts->currentPage() - 1)*$payToExperts->perPage() }}</td>
                                    @if ($payToExpert->admin != null)
                                        <td>
                                            {{$payToExpert->admin->name}}
                                        </td>
                                    @else
                                        <td>
                                            {{translate('Not Found')}}
                                        </td>
                                    @endif
                                    <td>
                                        @if ($payToExpert->user != null)
                                            {{$payToExpert->user->name}}
                                        @else
                                            {{translate('Not Found')}}
                                        @endif
                                    </td>
                                    <td>
                                        {{singlePrice($payToExpert->paid_amount)}}
                                    </td>
                                    <td>
                                        {{strtoupper($payToExpert->payment_method)}}
                                    </td>
                                    <td>
                                        @if ($payToExpert->paid_status != 0)
                                            <span class="badge badge-inline badge-primary">{{ translate('Paid') }}</span>
                                        @else
                                            <span class="badge badge-inline badge-danger">{{ translate('Non-Paid') }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        {{$payToExpert->created_at}}
                                    </td>
                                    <td class="text-right">
                                        @if ($payToExpert->reciept != null)
                                            <a href="{{ customAsset($payToExpert->reciept) }}" target="_blank" class="badge badge-inline badge-primary">{{ translate('Show Reciept') }}</a>
                                        @elseif(!$payToExpert->paid_status)
                                            <span class="badge badge-inline badge-secondary">N/A</span>
                                        @else
                                            <span class="badge badge-inline badge-secondary">{{ translate('No Reciept') }}</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="aiz-pagimation">
                        {{ $payToExperts->appends(request()->input())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
