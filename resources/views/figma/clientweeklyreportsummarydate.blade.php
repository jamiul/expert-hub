@extends('frontend.layouts.front-client-dashboard-layout')

@section('content')
<section class="client-dashboard mx-auto my-5">
  <div class="container">
    <div class="row">
      <div class="all-job-area d-flex justify-content-between">
        <div class="all-project">
          <h2>Weekly summary</h2>
        </div>
        <div class="post-job d-none">
          <button class="btn btn-postjob">Post a Job</button>
        </div>
      </div>
    </div>
    <!-- short area start Here -->
    <div class="row all-padding-bottom ">
      <div class="short-by-area">
        <div class="select-date-report">
          <div class="date-item">

          <div class="study-level">
                <div class="calendar-box position-relative">
                  <input type="text" id="dateInput" placeholder="Start Date">
                    <p class=" position-absolute short-by-date"><span class="material-symbols-outlined">calendar_today</span></p>
                  <div class="calendar" id="calendar">
                    <div class="header">
                      <button id="prevBtn"><i class="fa fa-angle-left"></i></button>
                      <h2 id="monthYear">Month Year</h2>
                      <button id="nextBtn"><i class="fa fa-angle-right"></i></button>
                    </div>
                    <div class="days" id="daysContainer"></div>
                  </div>
                </div>
              </div>

            <div class="short-by-select-reverse">
              <select class="form-select according-select" aria-label="Default select example">
                <option selected>All teams</option>
                <option value="1">All teams</option>
                <option value="2">All teams</option>
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
        </div>
      </div>
    </div>
    <!-- short area start Here -->
    <!-- edit draft area start Here -->
    <div class="row all-border-bottom">

    <div class="col-md-12">
      <div class="total-report-area">
        <h4>Hourly</h4>
      </div>

          <div class="report-area-border-summary ">
              <div class="hourly-rate-details d-flex flex-column">
                <div class="single-hourly-rate d-flex flex-column">
                  <span class="report-hour-top">Top 5 Activities</span>
                  <span class="report-currency-top">There is no data for the selected week</span>
                </div>
            </div>
          </div>

    </div>


    <div class="col-md-12 mt-4">
      <div class="total-report-area">
        <h4>Fixed</h4>
      </div>

          <div class="report-area-border-summary ">
              <div class="hourly-rate-details d-flex flex-column">
                <div class="single-hourly-rate d-flex flex-column">
                  <span class="report-hour-top">Top 5 Activities</span>
                  <span class="report-currency-top">There is no data for the selected week</span>
                </div>
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
