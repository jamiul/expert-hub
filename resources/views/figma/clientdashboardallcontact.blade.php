@extends('frontend.layouts.front-client-dashboard-layout') @section('content') <section class="client-dashboard mx-auto my-5">
  <div class="container">
    <div class="row">
      <div class="contact-project-area d-flex justify-content-between">
        <div class="all-project">
          <h2>All Contracts</h2>
        </div>
      </div>
    </div>
    <!-- short area start Here -->
    <div class="row ">
      <div class="short-by-area all-padding-client">
        <div class="select-date">
          <div class="date-item">
            <p>Sort By</p>
            <div class="short-by-select-reverse">
              <select class="form-select according-select" aria-label="Default select example">
                <option selected>Project status</option>
                <option value="1">Completed</option>
                <option value="2">Active</option>
              </select>
            </div>
            <div class="study-level">
              <div class="calendar-box position-relative">
                <input type="text" id="dateInput" placeholder="Oct 23 2023">

                <div class="calendar" id="calendar">
                  <div class="header">
                    <button id="prevBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                      <path d="M11.25 14L6.75 9.5L11.25 5" stroke="#5C5C5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </button>
                    <h2 id="monthYear">Month Year</h2>
                    <button id="nextBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                      <path d="M6.75 14L11.25 9.5L6.75 5" stroke="#5C5C5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </button>
                  </div>
                  <div class="days" id="daysContainer"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="divided"></div>
        <div class="search-by">
          <form class="example search-form">
            <input type="text" placeholder="Search by contract, client, or company" name="search">
            <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
              <path d="M19.6 21.5L13.3 15.2C12.8 15.6 12.225 15.9167 11.575 16.15C10.925 16.3833 10.2333 16.5 9.5 16.5C7.68333 16.5 6.14583 15.8708 4.8875 14.6125C3.62917 13.3542 3 11.8167 3 10C3 8.18333 3.62917 6.64583 4.8875 5.3875C6.14583 4.12917 7.68333 3.5 9.5 3.5C11.3167 3.5 12.8542 4.12917 14.1125 5.3875C15.3708 6.64583 16 8.18333 16 10C16 10.7333 15.8833 11.425 15.65 12.075C15.4167 12.725 15.1 13.3 14.7 13.8L21 20.1L19.6 21.5ZM9.5 14.5C10.75 14.5 11.8125 14.0625 12.6875 13.1875C13.5625 12.3125 14 11.25 14 10C14 8.75 13.5625 7.6875 12.6875 6.8125C11.8125 5.9375 10.75 5.5 9.5 5.5C8.25 5.5 7.1875 5.9375 6.3125 6.8125C5.4375 7.6875 5 8.75 5 10C5 11.25 5.4375 12.3125 6.3125 13.1875C7.1875 14.0625 8.25 14.5 9.5 14.5Z" fill="white"/>
            </svg>
            </button>
          </form>
          <button class="btn-download">
            <span class="download-svg"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
              <path d="M12 16.5L7 11.5L8.4 10.05L11 12.65V4.5H13V12.65L15.6 10.05L17 11.5L12 16.5ZM6 20.5C5.45 20.5 4.97917 20.3042 4.5875 19.9125C4.19583 19.5208 4 19.05 4 18.5V15.5H6V18.5H18V15.5H20V18.5C20 19.05 19.8042 19.5208 19.4125 19.9125C19.0208 20.3042 18.55 20.5 18 20.5H6Z" fill="#0036E3"/>
            </svg>
            </span>
            <span class="csv-text">CSV</span>
          </button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="all-contact-profile-policy d-flex justify-content-between">
        <div class="profile-policy-area d-flex g-1">
          <div class="profile-policy-img">
            <img src="{{ asset('assets/frontend/img/cp1.png') }}" alt="contact Profile">
          </div>
          <div class="profile-professional d-flex flex-column">
            <div class="profile-single">
              <h6>Professor Michel</h6>
              <p>Fixed</p>
            </div>
            <div class="profile-single-policy">
              <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
            </div>
          </div>
        </div>
        <div class="all-contact-rating-price d-flex flex-column align-items-start contact-m-rating">
          <p>
            <span class="range-active">Active:</span> Waiting for you to fund a new milestone
          </p>
          <p class="currency">$2000.00</p>
          <p class="escrow">$500.00 in Escrow</p>
        </div>
        <div class="present-date d-flex justify-content-center flex-column">
          <p>Oct 4 - Present</p>
        </div>
        <div class=" all-contact-working-date d-flex flex-column justify-content-center">
          <button class="action-milestone-btn d-flex align-content-center justify-content-center">Active Milestone</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="all-contact-profile-policy d-flex justify-content-between">
        <div class="profile-policy-area d-flex  g-1">
          <div class="profile-policy-img">
            <img src="{{ asset('assets/frontend/img/cp2.png') }}" alt="contact Profile">
          </div>
          <div class="profile-professional d-flex flex-column">
            <div class="profile-single">
              <h6>Professor Michel</h6>
              <p>Fixed</p>
            </div>
            <div class="profile-single-policy">
              <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
            </div>
          </div>
        </div>
        <div class="all-contact-rating-price d-flex flex-column align-items-start contact-m-rating">
          <div class="rating-area">
            <ul class="all-project-rating">
              <li>
                <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                  <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                </svg>
                </a>
              </li>
              <li>
                <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                  <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                </svg>
                </a>
              </li>
              <li>
                <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                  <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                </svg>
                </a>
              </li>
              <li>
                <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                  <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                </svg>
                </a>
              </li>
              <li>
                <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                  <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                </svg>
                </a>
              </li>
            </ul>
          </div>
          <p class="currency">Completed</p>
          <p class="escrow">Budget: <span class="escrow-currency fw-bold">$200</span>
          </p>
        </div>
        <div class="present-date d-flex justify-content-center flex-column">
          <p>Oct 4 - Present</p>
        </div>
        <div class=" all-contact-working-date d-flex flex-column justify-content-center">
          <button class="action-milestone-btn d-flex align-content-center justify-content-center">Rehire</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="all-contact-profile-policy d-flex justify-content-between">
        <div class="profile-policy-area d-flex  g-1">
          <div class="profile-policy-img">
            <img src="{{ asset('assets/frontend/img/cp3.png') }}" alt="contact Profile">
          </div>
          <div class="profile-professional d-flex flex-column">
            <div class="profile-single">
              <h6>Professor Michel</h6>
              <p>Fixed</p>
            </div>
            <div class="profile-single-policy">
              <h4>LMS Expert required for Business Administration</h4>
            </div>
          </div>
        </div>
        <div class="all-contact-rating-price d-flex flex-column align-items-start contact-m-rating">
          <p>
            <span class="range-active">Active:</span> Waiting for you to fund a new milestone
          </p>
          <p class="currency">$2000.00</p>
          <p class="escrow">$500.00 in Escrow</p>
        </div>
        <div class="present-date d-flex justify-content-center flex-column">
          <p>Oct 4 - Present</p>
        </div>
        <div class=" all-contact-working-date d-flex flex-column justify-content-center">
          <button class="action-milestone-btn d-flex align-content-center justify-content-center">Active Milestone</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="all-contact-profile-policy d-flex justify-content-between">
        <div class="profile-policy-area d-flex  g-1">
          <div class="profile-policy-img">
            <img src="{{ asset('assets/frontend/img/cp4.png') }}" alt="contact Profile">
          </div>
          <div class="profile-professional d-flex flex-column">
            <div class="profile-single">
              <h6>Professor Michel</h6>
              <p>Fixed</p>
            </div>
            <div class="profile-single-policy">
              <h4>LMS Expert required for Business Administration</h4>
            </div>
          </div>
        </div>
        <div class="all-contact-rating-price d-flex flex-column align-items-start">
          <p>
            <span class="range-active">Active:</span> Waiting for you to fund a new milestone
          </p>
          <p class="currency">$2000.00</p>
          <p class="escrow">$500.00 in Escrow</p>
        </div>
        <div class="present-date d-flex justify-content-center flex-column">
          <p>Oct 4 - Present</p>
        </div>
        <div class=" all-contact-working-date d-flex flex-column justify-content-center">
          <button class="action-milestone-btn d-flex align-content-center justify-content-center">Active Milestone</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="all-contact-profile-policy d-flex justify-content-between">
        <div class="profile-policy-area d-flex  g-1">
          <div class="profile-policy-img">
            <img src="{{ asset('assets/frontend/img/cp5.png') }}" alt="contact Profile">
          </div>
          <div class="profile-professional d-flex flex-column">
            <div class="profile-single">
              <h6>Professor Michel</h6>
              <p>Fixed</p>
            </div>
            <div class="profile-single-policy">
              <h4>LMS Expert required for Business Administration</h4>
            </div>
          </div>
        </div>
        <div class="all-contact-rating-price d-flex flex-column align-items-start">
          <p>
            <span class="range-active">Active:</span> Waiting for you to fund a new milestone
          </p>
          <p class="currency">$2000.00</p>
          <p class="escrow">$500.00 in Escrow</p>
        </div>
        <div class="present-date d-flex justify-content-center flex-column">
          <p>Oct 4 - Present</p>
        </div>
        <div class=" all-contact-working-date d-flex flex-column justify-content-center">
          <button class="action-milestone-btn d-flex align-content-center justify-content-center">Active Milestone</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="all-contact-profile-policy d-flex justify-content-between">
        <div class="profile-policy-area d-flex  g-1">
          <div class="profile-policy-img">
            <img src="{{ asset('assets/frontend/img/cp4.png') }}" alt="contact Profile">
          </div>
          <div class="profile-professional d-flex flex-column">
            <div class="profile-single">
              <h6>Professor Michel</h6>
              <p>Fixed</p>
            </div>
            <div class="profile-single-policy">
              <h4>LMS Expert required for Business Administration</h4>
            </div>
          </div>
        </div>
        <div class="all-contact-rating-price d-flex flex-column align-items-start">
          <p>
            <span class="range-active">Active:</span> Waiting for you to fund a new milestone
          </p>
          <p class="currency">$2000.00</p>
          <p class="escrow">$500.00 in Escrow</p>
        </div>
        <div class="present-date d-flex justify-content-center flex-column">
          <p>Oct 4 - Present</p>
        </div>
        <div class=" all-contact-working-date d-flex flex-column justify-content-center">
          <button class="action-milestone-btn d-flex align-content-center justify-content-center">Active Milestone</button>
        </div>
      </div>
    </div>

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
    <!-- Pagination end Here -->
  </div>
  <!-- edit draft area end Here -->
  </div>
</section> @endsection