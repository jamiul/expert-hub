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
                                    <x-form.choice-static wire:model="titles" label="">
                                        <option value="Mr">All Transaction</option>
                                        <option value="Mrs">All Transaction</option>
                                        <option value="Dr">All Transaction</option>
                                        <option value="Prof">All Transaction</option>
                                    </x-form.choice-static>
                                </div>

                                <div class="short-by-select-reverse">
                                    <x-form.choice-static wire:model="titles" label="">
                                        <option value="All Experts">All Experts</option>
                                        <option value="All Experts">All Experts</option>
                                        <option value="All Experts">All Experts</option>
                                        <option value="All Experts">AAll Experts</option>
                                    </x-form.choice-static>
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
                                    <td style="vertical-align: middle;"><a href="#" class="edux-ref-id" data-bs-toggle="modal" data-bs-target="#eduxRefId">{{ $data->id }}</a></td>
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

    <div class="modal fade" id="eduxRefId" tabindex="-1" aria-labelledby="eduxRefId" aria-hidden="true">
        <div class="modal-dialog edux-modal-dialog">
            <div class="modal-content">
                <div class="modal-header px-4">
                    <h1 class="modal-title fs-5" id="eduxRefId">Transaction Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4">
                    <div class="edux-ref-content-area">
                        <div class="dingle-ref-content">
                            <span class="ref-id fw-medium">Reference ID </span>
                            <span class="ref-id fw-medium">Date</span>
                        </div>
                        <div class="dingle-ref-item">
                            <span class="ref-id">545678907</span>
                            <span class="ref-id">Oct 23, 2023</span>
                        </div>
                    </div>

                    <div class="edux-ref-content-area">
                        <div class="dingle-ref-content">
                            <span class="ref-id fw-medium">Client</span>
                            <span class="ref-id fw-medium">Expert</span>
                        </div>
                        <div class="dingle-ref-item">
                            <span class="ref-id">Dr. Fayad Tohme</span>
                            <span class="ref-id">Abu salaeh muhammad shaon</span>
                        </div>
                    </div>

                    <div class="edux-ref-content-area">
                        <div class="dingle-ref-content">
                            <span class="ref-id fw-medium">Type</span>
                            <span class="ref-id fw-medium">Amount</span>
                        </div>
                        <div class="dingle-ref-item">
                            <span class="ref-id">Fixed Price</span>
                            <span class="ref-id">$117.34</span>
                        </div>
                    </div>

                    <div class="edux-ref-content-area">
                        <div class="dingle-ref-content-main">
                            <span class="ref-id fw-medium">Description</span>
                            <p>Funding request for Developing Curriculum for Postgraduate Public Health Unit</p>

                        </div>
                    </div>

                    <div class="edux-ref-content-area border-0">
                        <div class="dingle-ref-content-download">
                            <span class="ref-id fw-medium">More info</span>
                            <p><a href=""  data-bs-toggle="modal" data-bs-target="#eduxInvoiceId">Download Invoice</a></p>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="eduxInvoiceId" tabindex="-1" aria-labelledby="eduxRefId" aria-hidden="true">
        <div class="modal-dialog edux-modal-dialog-invoice">
            <div class="modal-content">
                <div class="modal-header px-4">
                    <h1 class="modal-title fs-5" id="eduxRefId"><a href="#"> <img src="{{ asset('/assets/frontend/img/invoice-logo.png') }}"/>  </a></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4">
                    <div class="edux-ref-content-area border-0">

                        <div class="form-invoice">
                            <div class="dingle-ref-item-invoice">
                                <span class="ref-id fw-medium mb-2">From</span>
                                <span class="ref-id">Expert Gate </span>
                                <span class="ref-id">32 Erie Street, South Granville </span>
                                <span class="ref-id">NSW 2142, Australia</span>

                                <span class="ref-id fw-medium my-2">To</span>
                                <span class="ref-id">Expert Gate </span>
                                <span class="ref-id">32 Erie Street, South Granville </span>
                                <span class="ref-id">NSW 2142, Australia</span>
                            </div>
                            <div class="dingle-ref-item-invoice-price">
                                <span class="ref-id fw-medium mb-4">Invoice</span>
                                <p><span class="ref-id">Invoice #</span> <span>545678907</span></p>
                                <p><span class="ref-id">Date</span> <span>Oct 23, 2023</span></p>
                                <p><span class="ref-id">Due Date</span> <span>Oct 23, 2023</span></p>
                                <p><span class="ref-id">Total Amount</span> <span>$7.34</span></p>
                                <p><span class="ref-id">Total Due</span> <span>$7.34</span></p>
                            </div>
                        </div>

                    </div>

                    <div class="edux-ref-content-area border-0">
                        <div class="dingle-ref-content-total">
                            <span class="ref-id fw-medium">Description</span>
                            <span class="ref-id fw-medium">Amount / Balance</span>
                        </div>
                        <div class="dingle-ref-item-price-all">
                            <div class="dingle-ref-item-price">
                                <span class="ref-id">Funding request for Developing Curriculum for Postgraduate Public Health Unit</span>
                                <span class="ref-id fw-medium">$117.34</span>

                            </div>

                            <div class="dingle-ref-item-total-price">
                                <span class="ref-id">Total Amount</span>
                                <span class="ref-id fw-medium">$117.34</span>
                            </div>

                        </div>


                    </div>



                </div>

            </div>
        </div>
    </div>
</div>
