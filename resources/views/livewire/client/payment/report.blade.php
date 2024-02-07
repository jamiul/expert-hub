<div>
    <section class="client-dashboard mx-auto my-5">
        <div class="container">
            <div class="row">
                <div class="history-report-area d-flex justify-content-between">
                    <div class="all-project history-report">
                        <h2>Transaction History</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="balance-area">
                    <span class="available-balance">Balance: <span>${{ number_format($balance, 2) }}</span> </span>
                    <span class="screw-balance">Escrow Balance: <span>${{ number_format($escrow_balance, 2) }}</span>  </span>
                </div>
            </div>


            <!-- short area start Here -->
            <div class="row">
                <div class="all-padding-bottom">
                    <div class="short-by-area">
                        <div class="select-date">
                            <div class="date-item">

                                <div class="study-level-balance">
                                    <x-form.flatpicker label="" name="datepicker"/>
                                </div>

                                <div class="short-by-select-reverse">
                                    <x-form.select wire:model.change="type" label="">
                                        <option value="">All Transaction</option>
                                        @foreach($types as $type)
                                            <option>{{ $type->value }}</option>
                                        @endforeach
                                    </x-form.select>
                                </div>

                                <div class="short-by-select-reverse">
                                    <x-form.select wire:model.change="customer" label="">
                                        <option value="">All Experts</option>
                                        @foreach($experts as $expert)
                                            <option value="{{ $expert->expert_id }}">{{ @$expert->expert->fullname }}</option>
                                        @endforeach
                                    </x-form.select>
                                </div>

                            </div>

                        </div>
                        <div class="search-by justify-content-end">
                            <form class="example search-form d-none">
                                <input type="text" placeholder="Search by contract, client, or company" name="search">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                            <button class="btn-download">
            <span class="download-svg"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
              <path d="M12 16.5L7 11.5L8.4 10.05L11 12.65V4.5H13V12.65L15.6 10.05L17 11.5L12 16.5ZM6 20.5C5.45 20.5 4.97917 20.3042 4.5875 19.9125C4.19583 19.5208 4 19.05 4 18.5V15.5H6V18.5H18V15.5H20V18.5C20 19.05 19.8042 19.5208 19.4125 19.9125C19.0208 20.3042 18.55 20.5 18 20.5H6Z" fill="#0036E3"/>
            </svg>
            </span>
                                <span class="csv-text">CSV</span>
                            </button>

                            <button class="btn-download">
            <span class="download-svg"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
              <path d="M12 16.5L7 11.5L8.4 10.05L11 12.65V4.5H13V12.65L15.6 10.05L17 11.5L12 16.5ZM6 20.5C5.45 20.5 4.97917 20.3042 4.5875 19.9125C4.19583 19.5208 4 19.05 4 18.5V15.5H6V18.5H18V15.5H20V18.5C20 19.05 19.8042 19.5208 19.4125 19.9125C19.0208 20.3042 18.55 20.5 18 20.5H6Z" fill="#0036E3"/>
            </svg>
            </span>
                                <span class="csv-text">invoices</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- short area start Here -->

            <div class="row">
                <div class="col-12">
                    <div class="balance-table-area d-flex flex-column">
                        <table class="table table-hover transaction-all">
                            <thead class="t-history">
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Type</th>
                                <th scope="col">Description</th>
                                <th scope="col">Expert</th>
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
                                    <td style="vertical-align: middle;"><a href="#" onClick="Livewire.dispatch('modal.open', { component: 'client.payment.report.invoice', arguments: {transaction_id: {{ $data->id }} } })" class="edux-ref-id">{{ $data->id }}</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $transactions->onEachSide(1)->links() }}
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
