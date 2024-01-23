@extends('frontend.layouts.app')
@section('content')
    <!-- sub menu start -->
    <nav class="bg-primary sub__nav">
        <div class="container">
            <ul class="d-flex">
                <li class="me-3">
                    <a href="{{ route('client.payment.index') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Payment Methods</a>
                </li>
                <li class="me-3">
                    <a href="{{ route('client.payment.billing') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Billing Report</a>
                </li>
                {{-- todo: move to dymaic milestone --}}
                <li class="me-3">
                    <a href="{{ route('client.payment.pay') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Fund Milestone</a>
                </li>
                {{-- todo: move to dymaic milestone accept --}}
                <li class="me-3">
                    <a href="{{ route('client.payment.acceptMilestone') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Release Milestone</a>
                </li>
            </ul>
        </div><!--.//container-->
    </nav>
    <!-- sub menu end -->


    <section class="client-dashboard mx-auto my-5">
        <div class="container">
            <div class="row">
                <div class="history-report-area d-flex justify-content-between">
                    <div class="all-project history-report">
                        <h2>Transection History</h2>
                    </div>
                    <div>
                        Available Balance: ${{ number_format($user->profile->balance, 2) }}
                    </div>
                    <div>
                        Escrow Balance: ${{ number_format($user->profile->escrow_balance, 2) }}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="balance-table-area d-flex flex-column">
                        <table class="table table-hover transaction-all">
                            <thead class="t-history">
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Type</th>
                                <th scope="col">Description</th>
                                <th scope="col">Freelancer</th>
                                <th scope="col">Amount / Balance</th>
                                <th scope="col">Ref ID</th>
                            </tr>
                            </thead>
                            <tbody class="">
                            @foreach($transactions as $data)

                                <tr>
                                    <td style="vertical-align: middle;">{{ $data->created_at->format('M d, Y') }}</td>
                                    <td style="vertical-align: middle;">{{ $data->type }}</td>
                                    <td class="balance-text">{{ $data->description }}</td>
                                    <td style="vertical-align: middle;">{{ @$data->expert->first_name }} {{ @$data->expert->last_name }}</td>
                                    <td style="vertical-align: middle;">
                                        <span class="fw-bold">
                                            $
                                            @if($data->charge_type == 'debit')
                                                ({{ number_format($data->amount, 2) }})
                                            @elseif($data->charge_type == 'credit')
                                                {{ number_format($data->amount, 2) }}
                                            @endif
                                             /
                                        </span> ${{ number_format($data->balance, 2) }}
                                    </td>
                                    <td style="vertical-align: middle;">{{ $data->id }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

{{--                        {{ $transactions->links() }}--}}

                    </div>
                </div>
            </div>

        </div>
    </section>

    <script>

    </script>
@endsection
