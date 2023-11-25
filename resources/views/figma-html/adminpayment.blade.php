@extends('frontend.layouts.front-admin-dashboard-layout') @section('content') <main class="main__layout d-flex">
  <!-- start left sidebar -->
  <div class="left__sidebar"> @include('figma-html/adminleftsidebar') </div>
  <!-- end left sidebar -->
  <div class="main__content__wrapper col">
    <!-- start header -->
    <div class="header__wrapper py-2 bg-white"> @include('figma-html/admintopbar') </div>
    <!-- end header -->
    <div class="content__wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <section class="admin-dashboard-area  mx-auto ">
              <div class="dashboard-inprogress-area">
                <div class="dashboard-inprogress">
                  <div class="admin-tab-nav-area d-flex flex-row justify-content-between">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item " role="presentation">
                        <button class=" admin-nav-link nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">In progress (3)</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link admin-nav-link" id="pills-complete-tab2" data-bs-toggle="pill" data-bs-target="#pills-contact-complete2" type="button" role="tab" aria-controls="pills-contact-completed" aria-selected="false">On hold (3)</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link admin-nav-link" id="pills-complete-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-complete" type="button" role="tab" aria-controls="pills-contact-completed" aria-selected="false">Completed (12)</button>
                      </li>
                    </ul>

                  </div>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

                    <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-12">
                            <section class="admin-dashboard-area-client  mx-auto ">
                              <div class="dashboard-inprogress-area">
                                <div class="dashboard-inprogress">
                                  <div class="admin-tab-nav-area-payment d-flex flex-row justify-content-between">
                                    <div class="admin-client-title">
                                      <h4>Project payment</h4>
                                    </div>
                                    <div class="short-by-area">
                                      <div class="select-date">
                                        <div class="date-item">
                                          <div class="study-level">
                                            <div class="calendar-box position-relative">
                                              <input type="text" id="dateInput" placeholder="Oct 23 2023">
                                              <p class=" position-absolute short-by-date">
                                                <span class="material-symbols-outlined">calendar_today</span>
                                              </p>
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
                                      <div class="search-by search-by-admin">
                                        <form class="example search-form">
                                          <input type="text" placeholder="Search by ID" name="search">
                                          <button type="submit">
                                            <i class="fa fa-search"></i>
                                          </button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-12">
                                      <div class="balance-table-area-admin d-flex flex-column">
                                        <table class="table table-hover transaction-all-payment">
                                          <thead class="t-history">
                                            <tr>
                                              <th scope="col" class="th-heading">
                                                <span><input class="form-check-input mt-0 admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"></span>
                                                 <span class="th-date">Date</span> 
                                                 <span class="material-symbols-outlined th-arrow">unfold_more </span>
                                              </th>
                                              <th scope="col">Project <br>ID</th>
                                              <th scope="col">Expert <br>  ID</th>
                                              <th scope="col">Client <br> ID</th>
                                              <th scope="col" class="th-project-value">Project <br> value</th>
                                              <th scope="col">GST</th>
                                              <th scope="col" class="th-project-expert">Expert <br> Income</th>
                                              <th scope="col" >Expert <br> marketplace fees <br> Expert (10% of expert <br> income)</th>
                                              <th scope="col"> Client <br> marketplace <br> fees Client (5%  <br>of project value)</th>
                                              <th scope="col">Client contract <br> initiation fee <br> (fixed) </th>
                                              <th scope="col">Payment type</th>
                                              <th scope="col"></th>
                                            </tr>
                                          </thead>
                                          <tbody class="">
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span >$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;"><span class="fixed-screw">Fixed escrow</span></td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>

                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span  class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;"><span class="hourly-screw">Hourly</span></td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span  class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;"><span class="hourly-screw">Hourly</span></td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span  class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;"><span class="hourly-screw">Hourly</span></td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span >$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;"><span class="hourly-screw">Hourly</span></td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span >$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;"><span class="hourly-screw">Hourly</span></td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span >$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;"><span class="hourly-screw">Hourly</span></td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;"><span class="hourly-screw">Hourly</span></td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span  class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;"><span class="hourly-screw">Hourly</span></td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                              <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;"> <span class="fixed-screw">Fixed escrow</span></td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;"> <span class="hourly-screw">Hourly</span></td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span >$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;" > <span class="fixed-screw">Fixed escrow</span></td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="tab-pane fade" id="pills-contact-complete2" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">


                    <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-12">
                            <section class="admin-dashboard-area-client  mx-auto ">
                              <div class="dashboard-inprogress-area">
                                <div class="dashboard-inprogress">
                                  <div class="admin-tab-nav-area-payment d-flex flex-row justify-content-between">
                                    <div class="admin-client-title">
                                      <h4>Project payment</h4>
                                    </div>
                                    <div class="short-by-area">
                                      <div class="select-date">
                                        <div class="date-item">
                                          <div class="study-level">
                                            <div class="calendar-box position-relative">
                                              <input type="text" id="dateInput" placeholder="Oct 23 2023">
                                              <p class=" position-absolute short-by-date">
                                                <span class="material-symbols-outlined">calendar_today</span>
                                              </p>
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
                                      <div class="search-by search-by-admin">
                                        <form class="example search-form">
                                          <input type="text" placeholder="Search by ID" name="search">
                                          <button type="submit">
                                            <i class="fa fa-search"></i>
                                          </button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-12">
                                      <div class="balance-table-area-admin d-flex flex-column">
                                        <table class="table table-hover transaction-all-payment">
                                          <thead class="t-history">
                                            <tr>
                                              <th scope="col" class="th-heading">
                                                <input class="form-check-input mt-0 admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> <span class="th-date">Date</span> <span class="material-symbols-outlined th-arrow">unfold_more </span>
                                              </th>
                                              <th scope="col">Project <br>ID</th>
                                              <th scope="col">Expert <br>  ID</th>
                                              <th scope="col">Client <br> ID</th>
                                              <th scope="col">Reason</th>
                                              <th scope="col" class="th-project-value">Project <br> value</th>
                                              <th scope="col">GST</th>
                                              <th scope="col" class="th-project-expert">Expert <br> Fees</th>
                                              <th scope="col" >Expert <br> marketplace fees <br> Expert (10% of expert <br> income)</th>
                                              <th scope="col"> Client <br> marketplace <br> fees Client (5%  <br>of project value)</th>
                                              <th scope="col">Client contract <br> initiation fee <br> (fixed) </th>
                                              <th scope="col">Payment type</th>
                                              <th scope="col"></th>
                                            </tr>
                                          </thead>
                                          <tbody class="">
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;"> <span class="discord-reason">Doc issue</span> </td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span >$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>

                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;"> <span class="discord-reason">Card decline</span> </td>
                                              <td style="vertical-align: middle;">
                                                <span  class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;"> <span class="discord-reason">Doc issue</span> </td>
                                              <td style="vertical-align: middle;">
                                                <span  class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;"> <span class="discord-reason">Card decline</span> </td>
                                              <td style="vertical-align: middle;">
                                                <span  class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;"> <span class="discord-reason">Card decline</span> </td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span >$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;"> <span class="discord-reason">Card decline</span> </td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span >$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;"> <span class="discord-reason">Doc issue</span> </td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span >$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;"> <span class="discord-reason">Doc issue</span> </td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;"> <span class="discord-reason">Card decline</span> </td>
                                              <td style="vertical-align: middle;">
                                                <span  class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;"> <span class="discord-reason">Card decline</span> </td>
                                              <td style="vertical-align: middle;">
                                              <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;"> <span class="discord-reason">Card decline</span> </td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;"> <span class="discord-reason">Doc issue</span> </td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span >$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                      </a>
                                                      <ul class="dropdown-menu admin-d-item">
                                                        <li>
                                                          <a class="dropdown-item " href="#">Hold</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Re-fund</a>
                                                        </li>
                                                        <li>
                                                          <a class="dropdown-item" href="#">Release</a>
                                                        </li>
                                                        
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>


                    </div>


                  
                    <div class="tab-pane fade" id="pills-contact-complete" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">


                       <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-12">
                            <section class="admin-dashboard-area-client  mx-auto ">
                              <div class="dashboard-inprogress-area">
                                <div class="dashboard-inprogress">
                                  <div class="admin-tab-nav-area-payment d-flex flex-row justify-content-between">
                                    <div class="admin-client-title">
                                      <h4>Project payment</h4>
                                    </div>
                                    <div class="short-by-area">
                                      <div class="select-date">
                                        <div class="date-item">
                                          <div class="study-level">
                                            <div class="calendar-box position-relative">
                                              <input type="text" id="dateInput" placeholder="Oct 23 2023">
                                              <p class=" position-absolute short-by-date">
                                                <span class="material-symbols-outlined">calendar_today</span>
                                              </p>
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
                                      <div class="search-by search-by-admin">
                                        <form class="example search-form">
                                          <input type="text" placeholder="Search by ID" name="search">
                                          <button type="submit">
                                            <i class="fa fa-search"></i>
                                          </button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-12">
                                      <div class="balance-table-area-admin d-flex flex-column">
                                        <table class="table table-hover transaction-all-payment">
                                          <thead class="t-history">
                                            <tr>
                                              <th scope="col" class="th-heading">
                                                <input class="form-check-input mt-0 admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> <span class="th-date">Date</span> <span class="material-symbols-outlined th-arrow">unfold_more </span>
                                              </th>
                                              <th scope="col">Project <br>ID</th>
                                              <th scope="col">Expert <br>  ID</th>
                                              <th scope="col">Client <br> ID</th>
                                              <th scope="col" class="th-project-value">Project <br> value</th>
                                              <th scope="col">GST</th>
                                              <th scope="col" class="th-project-expert">Expert <br> Fees</th>
                                              <th scope="col" >Expert <br> marketplace fees <br> Expert (10% of expert <br> income)</th>
                                              <th scope="col"> Client <br> marketplace <br> fees Client (5%  <br>of project value)</th>
                                              <th scope="col">Client contract <br> initiation fee <br> (fixed) </th>
                                              <th scope="col">Payment type</th>
                                              <th scope="col"></th>
                                            </tr>
                                          </thead>
                                          <tbody class="">
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span >$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img src="{{ asset('assets/frontend/img/admin/more.png') }}" alt="">
                                                      </a>
                                                      
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>

                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span  class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      <img src="{{ asset('assets/frontend/img/admin/more.png') }}" alt="">
                                                      </a>
                                                     
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span  class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      <img src="{{ asset('assets/frontend/img/admin/more.png') }}" alt="">
                                                      </a>
                                                     
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span  class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      <img src="{{ asset('assets/frontend/img/admin/more.png') }}" alt="">
                                                      </a>
                                                     
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span >$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      <img src="{{ asset('assets/frontend/img/admin/more.png') }}" alt="">
                                                      </a>
                                                     
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span >$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      <img src="{{ asset('assets/frontend/img/admin/more.png') }}" alt="">
                                                      </a>
                                                      
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span >$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      <img src="{{ asset('assets/frontend/img/admin/more.png') }}" alt="">
                                                      </a>
                                                     
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      <img src="{{ asset('assets/frontend/img/admin/more.png') }}" alt="">
                                                      </a>
                                                     
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span  class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      <img src="{{ asset('assets/frontend/img/admin/more.png') }}" alt="">
                                                      </a>
                                                    
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                              <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      <img src="{{ asset('assets/frontend/img/admin/more.png') }}" alt="">
                                                      </a>
                                                     
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span>$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      <img src="{{ asset('assets/frontend/img/admin/more.png') }}" alt="">
                                                      </a>
                                                     
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="vertical-align: middle;">
                                                <input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> 16 Nov, 2023
                                              </td>
                                              <td style="vertical-align: middle;">1009871</td>
                                              <td class="balance-text">13617</td>
                                              <td style="vertical-align: middle;">345785</td>
                                              <td style="vertical-align: middle;">
                                                <span class="spent-price">$500</span>
                                              </td>
                                              <td style="vertical-align: middle;">
                                                <span >$50</span>
                                              </td>
                                              <td style="vertical-align: middle;">$450</td>
                                              <td style="vertical-align: middle;">$50</td>
                                              <td style="vertical-align: middle;">$25</td>
                                              <td style="vertical-align: middle;">$3</td>
                                              <td style="vertical-align: middle;">Fixed escrow</td>

                                              <td style="vertical-align: middle;">
                                                <div class="policy-option">
                                                  <div class="draft-options">
                                                    <div class="dropdown">
                                                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      <img src="{{ asset('assets/frontend/img/admin/more.png') }}" alt="">
                                                      </a>
                                                     
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            



                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
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
            </section>
          </div>
        </div>
      </div>
    </div>
</main>
 @endsection