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
          </div>
        </div>
        <div class="divided"></div>
        <div class="search-by">
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
                  <i class="fa-solid fa-star"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa-solid fa-star"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa-solid fa-star"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa-solid fa-star"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa-solid fa-star default-star"></i>
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
        <div class=" all-contact-working-date">
          <button class="action-milestone-btn">Active Milestone</button>
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