@extends('frontend.layouts.front-client-dashboard-layout')

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
          <span class="available-balance">Available Balance: <span class="available-currency">$879.98 </span> </span><span class="screw-balance">Available Balance: <span  class="available-currency">$879.98</span>  </span>
        </div>
    </div>


    <!-- short area start Here -->
    <div class="row">
      <div class="all-padding-bottom">
      <div class="short-by-area">
        <div class="select-date">
          <div class="date-item">

          <div class="study-level">
              <div class="calendar-box position-relative">
                <input type="text" id="dateInput" placeholder="Sep 24, 2023 - Oct 23, 2023 ">

                <div class="calendar" id="calendar">
                  <div class="header">
                    <button id="prevBtn">
                      <i class="fa fa-angle-left"></i>
                    </button>
                    <h2 id="monthYear">Month Year</h2>
                    <button id="nextBtn">
                      <i class="fa fa-angle-right"></i>
                    </button>
                  </div>
                  <div class="days" id="daysContainer"></div>
                </div>
              </div>
            </div>

            <div class="short-by-select-reverse">
              <select class="form-select according-select" aria-label="Default select example">
                <option selected>All transection</option>
                <option value="1">All transection</option>
                <option value="2">All transection</option>
              </select>
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
          <button class="btn-download"><span class="material-symbols-outlined">
          download
          </span><span>CSV</span>
        </button>
          </form>
          <button class="btn-download"><span class="material-symbols-outlined">
          download
          </span><span>invoices</span>
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
                    <th scope="col">Freelancer</th>
                    <th scope="col">Amount / Balance</th>
                    <th scope="col">Ref ID</th>
                  </tr>
              </thead>
              <tbody class="">
              <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Payment</td>
                  <td class="balance-text">Paid from PayPal  about the  name
jannatbahar6@gmail.com</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon</td>
                  <td style="vertical-align: middle;"><span class="fw-bold">$19.89 /</span> $126.00</td>
                  <td style="vertical-align: middle;">545678907</td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Payment</td>
                  <td class="balance-text">Paid from PayPal  about the  name
jannatbahar6@gmail.com</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon</td>
                  <td style="vertical-align: middle;"><span class="fw-bold">$19.89 /</span> $126.00</td>
                  <td style="vertical-align: middle;">545678907</td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Payment</td>
                  <td class="balance-text">Paid from PayPal  about the  name
jannatbahar6@gmail.com</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon</td>
                  <td style="vertical-align: middle;"><span class="fw-bold">$19.89 /</span> $126.00</td>
                  <td style="vertical-align: middle;">545678907</td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Payment</td>
                  <td class="balance-text">Paid from PayPal  about the  name
jannatbahar6@gmail.com</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon</td>
                  <td style="vertical-align: middle;"><span class="fw-bold">$19.89 /</span> $126.00</td>
                  <td style="vertical-align: middle;">545678907</td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Payment</td>
                  <td class="balance-text">Paid from PayPal  about the  name
jannatbahar6@gmail.com</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon</td>
                  <td style="vertical-align: middle;"><span class="fw-bold">$19.89 /</span> $126.00</td>
                  <td style="vertical-align: middle;">545678907</td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Payment</td>
                  <td class="balance-text">Paid from PayPal  about the  name
jannatbahar6@gmail.com</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon</td>
                  <td style="vertical-align: middle;"><span class="fw-bold">$19.89 /</span> $126.00</td>
                  <td style="vertical-align: middle;">545678907</td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Payment</td>
                  <td class="balance-text">Paid from PayPal  about the  name
jannatbahar6@gmail.com</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon</td>
                  <td style="vertical-align: middle;"><span class="fw-bold">$19.89 /</span> $126.00</td>
                  <td style="vertical-align: middle;">545678907</td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Payment</td>
                  <td class="balance-text">Paid from PayPal  about the  name
jannatbahar6@gmail.com</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon</td>
                  <td style="vertical-align: middle;"><span class="fw-bold">$19.89 /</span> $126.00</td>
                  <td style="vertical-align: middle;">545678907</td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Payment</td>
                  <td class="balance-text">Paid from PayPal  about the  name
jannatbahar6@gmail.com</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon</td>
                  <td style="vertical-align: middle;"><span class="fw-bold">$19.89 /</span> $126.00</td>
                  <td style="vertical-align: middle;">545678907</td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Payment</td>
                  <td class="balance-text">Paid from PayPal  about the  name
jannatbahar6@gmail.com</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon</td>
                  <td style="vertical-align: middle;"><span class="fw-bold">$19.89 /</span> $126.00</td>
                  <td style="vertical-align: middle;">545678907</td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Payment</td>
                  <td class="balance-text">Paid from PayPal  about the  name
jannatbahar6@gmail.com</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon</td>
                  <td style="vertical-align: middle;"><span class="fw-bold">$19.89 /</span> $126.00</td>
                  <td style="vertical-align: middle;">545678907</td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;">Oct 23, 2023</td>
                  <td style="vertical-align: middle;">Payment</td>
                  <td class="balance-text">Paid from PayPal  about the  name
jannatbahar6@gmail.com</td>
                  <td style="vertical-align: middle;">Abu salaeh muhammad shaon</td>
                  <td style="vertical-align: middle;"><span class="fw-bold">$19.89 /</span> $126.00</td>
                  <td style="vertical-align: middle;">545678907</td>
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



@endsection
