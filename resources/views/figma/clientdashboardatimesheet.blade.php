@extends('frontend.layouts.front-client-dashboard-layout')
 @section('content') <section class="client-dashboard mx-auto my-5">
  <div class="container">
    <div class="row">
      <div class="contact-project-area d-flex justify-content-between">
        <div class="project-time-sheet">
          <h2>Timesheet</h2>
        </div>
      </div>
    </div>
    <!-- short area start Here -->
    <div class="row ">
      <div class="short-by-area all-padding-client">
        <div class="select-date">
          <div class="date-item">

            <div class="study-level">
              <div class="calendar-box position-relative">
                <input class="timesheet-date" type="text" id="dateInput" placeholder="Current week (oct 23 2023 -  oct ..)">

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
                <option selected>Project status</option>
                <option value="1">Completed</option>
                <option value="2">Active</option>
              </select>
            </div>

          </div>
        </div>
        <div class="divided d-none"></div>
        <div class="search-by d-none">
          <form class="example search-form">
            <input type="text" placeholder="Search by contract, client, or company" name="search">
            <button type="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
          <button class="btn-download">
            <span class="material-symbols-outlined"> download </span>
            <span>CSV</span>
          </button>
        </div>
      </div>
    </div>
    <!-- short area start Here -->
    <!-- edit draft area start Here -->


    <div class="row">
      <div class="contact-hours-ara d-flex flex-column px-4">

          <div class="single-contact-hours-title d-flex  flex-row justify-content-start">
              <div class="contact-area">
              <span>Contact</span>
            </div>
            <div class="contact-hours">
              <span>Hours</span>
            </div>
            <div class="contact-amount">
              <span>Amount</span>
            </div>
            <div class="contact-payment">
              <span>Payment type</span>
            </div>
          </div>
          <div class="single-contact-hours">
              <h5 class="single-contact-title">Monday, Oct 23, 2023</h5>
          </div>

      </div>
    </div>

    <div class="row">
      <div class="all-contact-profile-policy-time d-flex">
        <div class="profile-policy-area d-flex g-1 contact-area">
          <div class="profile-policy-img">
            <img src="{{ asset('assets/frontend/img/cp1.png') }}" alt="contact Profile">
          </div>
          <div class="profile-professional d-flex flex-column">
            <div class="profile-single">
              <h6>Developing curriculum for Postgraduate public health unit</h6>
              <p>Professor Michel</p>
            </div>

          </div>
        </div>
        <div class="all-contact-rating-price d-flex flex-column align-items-start contact-hours justify-content-center ">
          <p class="escrow">07:45</p>
        </div>
        <div class="present-date d-flex justify-content-center flex-column contact-amount">
          <p class="mt-0">$456</p>
        </div>
        <div class=" all-contact-working-date d-flex flex-row justify-content-center gap-2 contact-payment align-items-center">
          <img src="{{ asset('assets/frontend/img/lastday/hourly-currency.png') }}" alt="contact Profile">
          <p>Hourly</p>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="all-contact-profile-policy-time d-flex">
        <div class="profile-policy-area d-flex g-1 contact-area">
          <div class="profile-policy-img">
            <img src="{{ asset('assets/frontend/img/cp2.png') }}" alt="contact Profile">
          </div>
          <div class="profile-professional d-flex flex-column">
            <div class="profile-single">
              <h6>Developing curriculum for Postgraduate public health unit</h6>
              <p>Professor Michel</p>
            </div>

          </div>
        </div>
        <div class="all-contact-rating-price d-flex flex-column align-items-start contact-hours justify-content-center ">
          <p class="escrow">07:45</p>
        </div>
        <div class="present-date d-flex justify-content-center flex-column contact-amount">
          <p class="mt-0">$456</p>
        </div>
        <div class=" all-contact-working-date d-flex flex-row justify-content-center gap-2 contact-payment align-items-center">
          <img src="{{ asset('assets/frontend/img/lastday/hourly-lock.png') }}" alt="contact Profile">
          <p>Fixed price</p>
        </div>
      </div>
      <div class="single-contact-hours px-4">
              <h5 class="single-contact-title">Monday, Oct 23, 2023</h5>
          </div>
    </div>





    <div class="row">
      <div class="all-contact-profile-policy-time d-flex">
        <div class="profile-policy-area d-flex g-1 contact-area">
          <div class="profile-policy-img">
            <img src="{{ asset('assets/frontend/img/cp3.png') }}" alt="contact Profile">
          </div>
          <div class="profile-professional d-flex flex-column">
            <div class="profile-single">
              <h6>Developing curriculum for Postgraduate public health unit</h6>
              <p>Professor Michel</p>
            </div>

          </div>
        </div>
        <div class="all-contact-rating-price d-flex flex-column align-items-start contact-hours justify-content-center ">
          <p class="escrow">07:45</p>
        </div>
        <div class="present-date d-flex justify-content-center flex-column contact-amount">
          <p class="mt-0">$456</p>
        </div>
        <div class=" all-contact-working-date d-flex flex-row justify-content-center gap-2 contact-payment align-items-center">
          <img src="{{ asset('assets/frontend/img/lastday/hourly-currency.png') }}" alt="contact Profile">
          <p>Hourly</p>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="all-contact-profile-policy-time d-flex">
        <div class="profile-policy-area d-flex g-1 contact-area">
          <div class="profile-policy-img">
            <img src="{{ asset('assets/frontend/img/cp4.png') }}" alt="contact Profile">
          </div>
          <div class="profile-professional d-flex flex-column">
            <div class="profile-single">
              <h6>Developing curriculum for Postgraduate public health unit</h6>
              <p>Professor Michel</p>
            </div>

          </div>
        </div>
        <div class="all-contact-rating-price d-flex flex-column align-items-start contact-hours justify-content-center ">
          <p class="escrow">07:45</p>
        </div>
        <div class="present-date d-flex justify-content-center flex-column contact-amount">
          <p class="mt-0">$456</p>
        </div>
        <div class=" all-contact-working-date d-flex flex-row justify-content-center gap-2 contact-payment align-items-center">
          <img src="{{ asset('assets/frontend/img/lastday/hourly-lock.png') }}" alt="contact Profile">
          <p>Fixed price</p>
        </div>
      </div>
      <div class="single-contact-hours px-4">
              <h5 class="single-contact-title">Monday, Oct 23, 2023</h5>
          </div>
    </div>


    <div class="row">
      <div class="all-contact-profile-policy-time d-flex">
        <div class="profile-policy-area d-flex g-1 contact-area">
          <div class="profile-policy-img">
            <img src="{{ asset('assets/frontend/img/cp5.png') }}" alt="contact Profile">
          </div>
          <div class="profile-professional d-flex flex-column">
            <div class="profile-single">
              <h6>Developing curriculum for Postgraduate public health unit</h6>
              <p>Professor Michel</p>
            </div>

          </div>
        </div>
        <div class="all-contact-rating-price d-flex flex-column align-items-start contact-hours justify-content-center ">
          <p class="escrow">07:45</p>
        </div>
        <div class="present-date d-flex justify-content-center flex-column contact-amount">
          <p class="mt-0">$456</p>
        </div>
        <div class=" all-contact-working-date d-flex flex-row justify-content-center gap-2 contact-payment align-items-center">
          <img src="{{ asset('assets/frontend/img/lastday/hourly-currency.png') }}" alt="contact Profile">
          <p>Hourly</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="all-contact-profile-policy-time d-flex">
        <div class="profile-policy-area d-flex g-1 contact-area">
          <div class="profile-policy-img">
            <img src="{{ asset('assets/frontend/img/cp5.png') }}" alt="contact Profile">
          </div>
          <div class="profile-professional d-flex flex-column">
            <div class="profile-single">
              <h6>Developing curriculum for Postgraduate public health unit</h6>
              <p>Professor Michel</p>
            </div>

          </div>
        </div>
        <div class="all-contact-rating-price d-flex flex-column align-items-start contact-hours justify-content-center ">
          <p class="escrow">07:45</p>
        </div>
        <div class="present-date d-flex justify-content-center flex-column contact-amount">
          <p class="mt-0">$456</p>
        </div>
        <div class=" all-contact-working-date d-flex flex-row justify-content-center gap-2 contact-payment align-items-center">
          <img src="{{ asset('assets/frontend/img/lastday/hourly-lock.png') }}" alt="contact Profile">
          <p>Fixed price</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="all-contact-profile-policy-time d-flex">
        <div class="profile-policy-area d-flex g-1 contact-area">
          <div class="profile-policy-img">
            <img src="{{ asset('assets/frontend/img/cp4.png') }}" alt="contact Profile">
          </div>
          <div class="profile-professional d-flex flex-column">
            <div class="profile-single">
              <h6>Developing curriculum for Postgraduate public health unit</h6>
              <p>Professor Michel</p>
            </div>

          </div>
        </div>
        <div class="all-contact-rating-price d-flex flex-column align-items-start contact-hours justify-content-center ">
          <p class="escrow">07:45</p>
        </div>
        <div class="present-date d-flex justify-content-center flex-column contact-amount">
          <p class="mt-0">$456</p>
        </div>
        <div class=" all-contact-working-date d-flex flex-row justify-content-center gap-2 contact-payment align-items-center">
          <img src="{{ asset('assets/frontend/img/lastday/hourly-lock.png') }}" alt="contact Profile">
          <p>Fixed Price</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="all-contact-profile-policy-time d-flex">
        <div class="profile-policy-area d-flex g-1 contact-area">
          <div class="profile-policy-img">
            <img src="{{ asset('assets/frontend/img/cp1.png') }}" alt="contact Profile">
          </div>
          <div class="profile-professional d-flex flex-column">
            <div class="profile-single">
              <h6>Developing curriculum for Postgraduate public health unit</h6>
              <p>Professor Michel</p>
            </div>

          </div>
        </div>
        <div class="all-contact-rating-price d-flex flex-column align-items-start contact-hours justify-content-center ">
          <p class="escrow">07:45</p>
        </div>
        <div class="present-date d-flex justify-content-center flex-column contact-amount">
          <p class="mt-0">$456</p>
        </div>
        <div class=" all-contact-working-date d-flex flex-row justify-content-center gap-2 contact-payment align-items-center">
          <img src="{{ asset('assets/frontend/img/lastday/hourly-lock.png') }}" alt="contact Profile">
          <p>Fixed Price</p>
        </div>
      </div>
    </div>
    <!-- Pagination start Here -->
    <div class="row pagination-padding d-none">
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
</section> @endsection