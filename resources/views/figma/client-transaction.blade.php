@extends('frontend.layouts.figma', ['header' => 'client'])

@section('content')
<section class="client-dashboard mx-auto my-5">
  <div class="container">
    <div class="row">
      <div class="history-report-area d-flex justify-content-between">
        <div class="all-project history-report">
          <h2>Transection History</h2>
        </div>

      </div>
    </div>

    <div class="row">
        <div class="balance-area">
          <span class="available-balance">Balance: <span>00.00</span> </span><span class="screw-balance">Escrow Balance: <span>$100.00</span>  </span>
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
              <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">GST</td>
                  <td class="balance-text">GST for Fixed Price Ref ID 545678907</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon</td>
                  <td style="vertical-align: middle;"><span>($0.70)</span> <br/> $0.00</td>
                  <td style="vertical-align: middle;"><a href="#" class="edux-ref-id" data-bs-toggle="modal" data-bs-target="#eduxRefId">545678905</a></td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Payment Gateway Fee</td>
                  <td class="balance-text">Payment Gateway Fee for Fixed Price Ref ID 545678907</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon Mohammad</td>
                  <td style="vertical-align: middle;"><span>($6.64)</span> <br/> $0.70</td>
                  <td style="vertical-align: middle;"><a href="#" class="edux-ref-id" data-bs-toggle="modal" data-bs-target="#eduxRefId">545678904</a></td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Contract Initialisation Fee</td>
                  <td class="balance-text">Contract Initialisation Fee for Fixed Price-Ref ID 545678907</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon</td>
                  <td style="vertical-align: middle;"><span>($3.00)</span> <br/> $7.34</td>
                  <td style="vertical-align: middle;"><a href="#" class="edux-ref-id" data-bs-toggle="modal" data-bs-target="#eduxRefId">545678903</a></td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Market Place Fee</td>
                  <td class="balance-text">Funding request for Fixed Price - Ref ID 545678907</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon</td>
                  <td style="vertical-align: middle;"><span>($7.00)</span><br/> $10.34</td>
                  <td style="vertical-align: middle;"><a href="#" class="edux-ref-id" data-bs-toggle="modal" data-bs-target="#eduxRefId">545678902</a></td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Fixed Price (Project Value)</td>
                  <td class="balance-text">Funding request for Developing Curriculum for Postgraduate Public Health Unit</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon</td>
                  <td style="vertical-align: middle;"><span>($100.00)</span> <br/>$17.34</td>
                  <td style="vertical-align: middle;"><a href="#" class="edux-ref-id" data-bs-toggle="modal" data-bs-target="#eduxRefId">545678901</a></td>
                </tr>

                <tr class="edux-middle-border">
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Payment</td>
                  <td class="balance-text">Paid from Mastercard 0026 to escrow for funding request 545678907</td>
                  <td style="vertical-align: middle;"></td>
                  <td style="vertical-align: middle;"><span>$117.34</span> <br/> $117.34</td>
                  <td style="vertical-align: middle;"><a href="#" class="edux-ref-id" data-bs-toggle="modal" data-bs-target="#eduxRefId">545678909</a></td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Refund</td>
                  <td class="balance-text">Refund for ref #545678907</td>
                  <td style="vertical-align: middle;">Michael Kassiou</td>
                  <td style="vertical-align: middle;"><span>$218.4 </span> <br/>$0.00</td>
                  <td style="vertical-align: middle;"><a href="#" class="edux-ref-id" data-bs-toggle="modal" data-bs-target="#eduxRefId">545678907</a></td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">GST</td>
                  <td class="balance-text">GST for Fixed Price - Ref ID 16</td>
                  <td style="vertical-align: middle;">Michael Kassiou</td>
                  <td style="vertical-align: middle;"><span>$(1.40)</span> <br/>$0.00</td>
                  <td style="vertical-align: middle;"><a href="#" class="edux-ref-id" data-bs-toggle="modal" data-bs-target="#eduxRefId">545678907</a></td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Payment Gateway Fee</td>
                  <td class="balance-text">Payment Gateway Fee for Fixed Price-Ref ID 16</td>
                  <td style="vertical-align: middle;">Michael Kassiou</td>
                  <td style="vertical-align: middle;"><span>$(13.10)</span>  <br/> $1.40</td>
                  <td style="vertical-align: middle;"><a href="#" class="edux-ref-id" data-bs-toggle="modal" data-bs-target="#eduxRefId">545678907</a></td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Contract Initialisasion Fee</td>
                  <td class="balance-text">Contract Initialisation Fee for Fixed Price-Ref ID 16</td>
                  <td style="vertical-align: middle;">Michael Kassiou</td>
                  <td style="vertical-align: middle;"><span>$(3.00)</span> <br>$14.50</td>
                  <td style="vertical-align: middle;"><a href="#" class="edux-ref-id" data-bs-toggle="modal" data-bs-target="#eduxRefId">545678907</a></td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Service Fee</td>
                  <td class="balance-text">Funding request for Fixed Price - Ref ID 16</td>
                  <td style="vertical-align: middle;">Michael Kassiou</td>
                  <td style="vertical-align: middle;"><span>$(14.00)</span> <br/>$17.50</td>
                  <td style="vertical-align: middle;"><a href="#" class="edux-ref-id" data-bs-toggle="modal" data-bs-target="#eduxRefId">545678907</a></td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Fixed Price</td>
                  <td class="balance-text">Funding request for Policy development assistance required for Chemical Engineering Industry</td>
                  <td style="vertical-align: middle;">Michael Kassiou</td>
                  <td style="vertical-align: middle;"><span>$(200.00)</span> <br/>$31.50</td>
                  <td style="vertical-align: middle;"><a href="#" class="edux-ref-id" data-bs-toggle="modal" data-bs-target="#eduxRefId">545678907</a></td>
                </tr>

                <tr class="edux-middle-border">
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Payment</td>
                  <td class="balance-text">Paid from Mastercard 0026 to escrow for funding request xxxXXXXXX</td>
                  <td style="vertical-align: middle;"></td>
                  <td style="vertical-align: middle;"><span>$231.50</span> <br/>$231.50</td>
                  <td style="vertical-align: middle;"><a href="" class="edux-ref-id" data-bs-toggle="modal" data-bs-target="#eduxRefId">545678907</a></td>
                </tr>
              </tbody>
            </table>

        </div>
      </div>
    </div>


    <!-- edit draft area start Here -->





    <!-- Pagination start Here -->
    <div class="row pagination-padding">
      <div class="pagination-area">
        <div class="pagination-left">
          <p>Showing 1 to 8 of 100 entries</p>
        </div>
        <div class="pagination-right">
          <div class="pagination-count">
            <div class="row g-3 align-items-center">
              <div class="col-auto">
                <label for="inputPassword6" class="col-form-label result-perpage">Results per page</label>
              </div>
              <div class="col-auto">
                <select class="form-select" aria-label="Default select example">
                  <option selected>5</option>
                  <option value="1">4</option>
                  <option value="2">3</option>
                  <option value="3">2</option>
                  <option value="3">1</option>
                </select>
              </div>
            </div>
          </div>
          <div class="pagination-next-prev">
            <ul class="pagination">
              <li class="page-item ">
                <a class="page-link">
                  <span class="material-symbols-outlined"> skip_previous </span>
                </a>
              </li>
              <li class="page-item ">
                <a class="page-link">
                  <span class="material-symbols-outlined"> arrow_left </span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item " aria-current="page">
                <a class="page-link">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <span class="material-symbols-outlined"> arrow_right </span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <span class="material-symbols-outlined"> skip_next </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Pagination start Here -->
  </div>
  <!-- edit draft area end Here -->
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




@endsection
