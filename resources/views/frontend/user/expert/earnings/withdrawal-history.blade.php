@extends('frontend.layouts.app')

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                @include('frontend.user.expert.inc.sidebar')

                <div class="aiz-user-panel">
                    <div class="aiz-titlebar mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="fs-16 fw-700">{{ translate('Your withdrawal history') }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-2 border-gray-light">
                            <div class="card-header">
                                <h5 class="mb-0 h6">{{ translate('Your withdrawal history') }}</h5>
                            </div>
                            <div class="card-body">

                                <table class="table aiz-table mb-0">
                                    <thead>
                                        <tr>
                                            <th data-breakpoints="">#</th>
                                            <th data-breakpoints="">{{ translate('Requested Amount') }}</th>
                                            <th data-breakpoints="">{{ translate('Paid Amount') }}</th>
                                            <th data-breakpoints="md">{{ translate('Payment Method') }}</th>
                                            <th data-breakpoints="md">{{ translate('Date') }}</th>
                                            <th data-breakpoints="md">{{ translate('Reciept') }}</th>
                                            <th data-breakpoints="lg">{{ translate('Status') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($withdrawRequests as $key => $withdrawRequest)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ singlePrice($withdrawRequest->requested_amount) }}</td>
                                                <td>{{ singlePrice($withdrawRequest->paid_amount) }}</td>
                                                <td>{{ $withdrawRequest->payment_method }}</td>
                                                <td>{{ $withdrawRequest->created_at }}</td>
                                                <td>
                                                    @if ($withdrawRequest->reciept != null)
                                                        <a href="{{ customAsset($withdrawRequest->reciept) }}" target="_blank" class="text-secondary">{{ translate('Show Reciept') }}</a>
                                                    @elseif(!$withdrawRequest->paid_status)
                                                        <span class="badge badge-inline badge-info">{{ translate('N/A') }}</span>
                                                    @else
                                                        <span class="badge badge-inline badge-info">{{ translate('No Reciept') }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($withdrawRequest->paid_status != 0)
                                                        <span class="badge badge-inline badge-success">{{ translate('Paid') }}</span>
                                                    @else
                                                        <span class="badge badge-inline badge-danger">{{ translate('Pending') }}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $withdrawRequests->links() }}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

@endsection
