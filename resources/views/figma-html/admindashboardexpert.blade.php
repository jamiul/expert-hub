@extends('frontend.layouts.front-admin-dashboard-layout')

@section('content')

<main class="main__layout d-flex">
        <!-- start left sidebar -->
        <div class="left__sidebar"> 
           @include('figma-html/adminleftsidebar')
        </div>
        <!-- end left sidebar -->
        <div class="main__content__wrapper col">
             <!-- start header -->
            <div class="header__wrapper py-2 bg-white"> 
             @include('figma-html/admintopbar')
            </div>
            <!-- end header -->

<div class="content__wrapper">

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
        <section class="admin-dashboard-area-client  mx-auto ">

          <div class="dashboard-inprogress-area">
                <div class="dashboard-inprogress">
                  <div class="admin-tab-nav-area-admin d-flex flex-row justify-content-between">

                  <div class="admin-client-title">
                    <h4>Experts</h4>
                  </div>
                       
                          <div class="short-by-area all-padding-admin">
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
            <table class="table table-hover transaction-all">
              <thead class="t-history">
                  <tr>
                    <th scope="col"><input class="form-check-input mt-0 admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date</th>
                    <th scope="col">Project Status</th>
                    <th scope="col">Total Earned</th>
                    <th scope="col">Balance</th>
                    <th scope="col"></th>
                  </tr>
              </thead>
              <tbody class="">
              <tr>
                  <td style="vertical-align: middle;"><input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> #04947352 </td>
                  <td style="vertical-align: middle;">Michel Jhon</td>
                  <td class="balance-text">mmichel@gmail.com</td>
                  <td style="vertical-align: middle;">12/10/2023</td>
                  <td style="vertical-align: middle;"><span class="ac-completed" ac-completed>Completed</span></td>
                  <td style="vertical-align: middle;"><span class="spent-price">$67.00 </span></td>
                  <td style="vertical-align: middle;">$69787.00</td>
                  <td style="vertical-align: middle;">
                  <div class="policy-option">
                      <div class="draft-options">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu admin-d-item">
                          <li>
                            <a class="dropdown-item " href="#">View time sheet</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Message to client</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">View profile</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Contact expert</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Send to review team</a>
                          </li>

                        </ul>
                      </div>
                      </div>

                      </div>
                    </td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;"><input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> #04947352 </td>
                  <td style="vertical-align: middle;">Michel Jhon</td>
                  <td class="balance-text">mmichel@gmail.com</td>
                  <td style="vertical-align: middle;">12/10/2023</td>
                  <td style="vertical-align: middle;"><span class="ac-progress">In-Progress</span></td>
                  <td style="vertical-align: middle;"><span class="spent-price">$67.00 </span></td>
                  <td style="vertical-align: middle;">$69787.00</td>
                  <td style="vertical-align: middle;">
                  <div class="policy-option">
                      <div class="draft-options">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu admin-d-item">
                          <li>
                            <a class="dropdown-item " href="#">View time sheet</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Message to client</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">View profile</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Contact expert</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Send to review team</a>
                          </li>

                        </ul>
                      </div>
                      </div>

                      </div>
                    </td>
                </tr>


                <tr>
                  <td style="vertical-align: middle;"><input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> #04947352 </td>
                  <td style="vertical-align: middle;">Michel Jhon</td>
                  <td class="balance-text">mmichel@gmail.com</td>
                  <td style="vertical-align: middle;">12/10/2023</td>
                  <td style="vertical-align: middle;"><span class="ac-hold">On Hold</span></td>
                  <td style="vertical-align: middle;"><span class="spent-price">$67.00 </span></td>
                  <td style="vertical-align: middle;">$69787.00</td>
                  <td style="vertical-align: middle;">
                  <div class="policy-option">
                      <div class="draft-options">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu admin-d-item">
                          <li>
                            <a class="dropdown-item " href="#">View time sheet</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Message to client</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">View profile</a>
                          </li>

                          <li>
                            <a class="dropdown-item ad-unhold" href="#">Unhold</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Send to review team</a>
                          </li>

                        </ul>
                      </div>
                      </div>

                      </div>
                    </td>
                </tr>


                <tr>
                  <td style="vertical-align: middle;"><input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> #04947352 </td>
                  <td style="vertical-align: middle;">Michel Jhon</td>
                  <td class="balance-text">mmichel@gmail.com</td>
                  <td style="vertical-align: middle;">12/10/2023</td>
                  <td style="vertical-align: middle;"><span class="ac-hiring">Hiring</span></td>
                  <td style="vertical-align: middle;"><span class="spent-price">$67.00 </span></td>
                  <td style="vertical-align: middle;">$69787.00</td>
                  <td style="vertical-align: middle;">
                  <div class="policy-option">
                      <div class="draft-options">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu admin-d-item">
                          <li>
                            <a class="dropdown-item " href="#">View time sheet</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Message to client</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">View profile</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Contact expert</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Send to review team</a>
                          </li>

                        </ul>
                      </div>
                      </div>

                      </div>
                    </td>
                </tr>


                <tr>
                  <td style="vertical-align: middle;"><input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> #04947352 </td>
                  <td style="vertical-align: middle;">Michel Jhon</td>
                  <td class="balance-text">mmichel@gmail.com</td>
                  <td style="vertical-align: middle;">12/10/2023</td>
                  <td style="vertical-align: middle;"><span class="ac-completed">Completed</span></td>
                  <td style="vertical-align: middle;"><span class="spent-price">$67.00 </span></td>
                  <td style="vertical-align: middle;">$69787.00</td>
                  <td style="vertical-align: middle;">
                  <div class="policy-option">
                      <div class="draft-options">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu admin-d-item">
                          <li>
                            <a class="dropdown-item " href="#">View time sheet</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Message to client</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">View profile</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Contact expert</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Send to review team</a>
                          </li>

                        </ul>
                      </div>
                      </div>

                      </div>
                    </td>
                </tr>


                <tr>
                  <td style="vertical-align: middle;"><input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> #04947352 </td>
                  <td style="vertical-align: middle;">Michel Jhon</td>
                  <td class="balance-text">mmichel@gmail.com</td>
                  <td style="vertical-align: middle;">12/10/2023</td>
                  <td style="vertical-align: middle;"><span class="ac-hold">On Hold</span></td>
                  <td style="vertical-align: middle;"><span class="spent-price">$67.00 </span></td>
                  <td style="vertical-align: middle;">$69787.00</td>
                  <td style="vertical-align: middle;">
                  <div class="policy-option">
                      <div class="draft-options">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu admin-d-item">
                          <li>
                            <a class="dropdown-item " href="#">View time sheet</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Message to client</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">View profile</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Contact expert</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Send to review team</a>
                          </li>

                        </ul>
                      </div>
                      </div>

                      </div>
                    </td>
                </tr>


                <tr>
                  <td style="vertical-align: middle;"><input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> #04947352 </td>
                  <td style="vertical-align: middle;">Michel Jhon</td>
                  <td class="balance-text">mmichel@gmail.com</td>
                  <td style="vertical-align: middle;">12/10/2023</td>
                  <td style="vertical-align: middle;"><span class="ac-completed">Completed</span></td>
                  <td style="vertical-align: middle;"><span class="spent-price">$67.00 </span></td>
                  <td style="vertical-align: middle;">$69787.00</td>
                  <td style="vertical-align: middle;">
                  <div class="policy-option">
                      <div class="draft-options">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu admin-d-item">
                          <li>
                            <a class="dropdown-item " href="#">View time sheet</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Message to client</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">View profile</a>
                          </li>

                          <li>
                            <a class="dropdown-item ad-unhold" href="#" >Hold</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Send to review team</a>
                          </li>

                        </ul>
                      </div>
                      </div>

                      </div>
                    </td>
                </tr>


                <tr>
                  <td style="vertical-align: middle;"><input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> #04947352 </td>
                  <td style="vertical-align: middle;">Michel Jhon</td>
                  <td class="balance-text">mmichel@gmail.com</td>
                  <td style="vertical-align: middle;">12/10/2023</td>
                  <td style="vertical-align: middle;"><span class="ac-completed">Completed</span></td>
                  <td style="vertical-align: middle;"><span class="spent-price">$67.00 </span></td>
                  <td style="vertical-align: middle;">$69787.00</td>
                  <td style="vertical-align: middle;">
                  <div class="policy-option">
                      <div class="draft-options">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu admin-d-item">
                          <li>
                            <a class="dropdown-item " href="#">View time sheet</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Message to client</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">View profile</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Contact expert</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Send to review team</a>
                          </li>

                        </ul>
                      </div>
                      </div>

                      </div>
                    </td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;"><input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> #04947352 </td>
                  <td style="vertical-align: middle;">Michel Jhon</td>
                  <td class="balance-text">mmichel@gmail.com</td>
                  <td style="vertical-align: middle;">12/10/2023</td>
                  <td style="vertical-align: middle;"><span class="ac-completed">Completed</span></td>
                  <td style="vertical-align: middle;"><span class="spent-price">$67.00 </span></td>
                  <td style="vertical-align: middle;">$69787.00</td>
                  <td style="vertical-align: middle;">
                  <div class="policy-option">
                      <div class="draft-options">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu admin-d-item">
                          <li>
                            <a class="dropdown-item " href="#">View time sheet</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Message to client</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">View profile</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Contact expert</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Send to review team</a>
                          </li>

                        </ul>
                      </div>
                      </div>

                      </div>
                    </td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;"><input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> #04947352 </td>
                  <td style="vertical-align: middle;">Michel Jhon</td>
                  <td class="balance-text">mmichel@gmail.com</td>
                  <td style="vertical-align: middle;">12/10/2023</td>
                  <td style="vertical-align: middle;"><span class="ac-completed">Completed</span></td>
                  <td style="vertical-align: middle;"><span class="spent-price">$67.00 </span></td>
                  <td style="vertical-align: middle;">$69787.00</td>
                  <td style="vertical-align: middle;">
                  <div class="policy-option">
                      <div class="draft-options">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu admin-d-item">
                          <li>
                            <a class="dropdown-item " href="#">View time sheet</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Message to client</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">View profile</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Contact expert</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Send to review team</a>
                          </li>

                        </ul>
                      </div>
                      </div>

                      </div>
                    </td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;"><input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> #04947352 </td>
                  <td style="vertical-align: middle;">Michel Jhon</td>
                  <td class="balance-text">mmichel@gmail.com</td>
                  <td style="vertical-align: middle;">12/10/2023</td>
                  <td style="vertical-align: middle;"><span class="ac-hiring">Hiring</span></td>
                  <td style="vertical-align: middle;"><span class="spent-price">$67.00 </span></td>
                  <td style="vertical-align: middle;">$69787.00</td>
                  <td style="vertical-align: middle;">
                  <div class="policy-option">
                      <div class="draft-options">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu admin-d-item">
                          <li>
                            <a class="dropdown-item " href="#">View time sheet</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Message to client</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">View profile</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Contact expert</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Send to review team</a>
                          </li>

                        </ul>
                      </div>
                      </div>

                      </div>
                    </td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;"><input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> #04947352 </td>
                  <td style="vertical-align: middle;">Michel Jhon</td>
                  <td class="balance-text">mmichel@gmail.com</td>
                  <td style="vertical-align: middle;">12/10/2023</td>
                  <td style="vertical-align: middle;"><span class="ac-completed">Completed</span></td>
                  <td style="vertical-align: middle;"><span class="spent-price">$67.00 </span></td>
                  <td style="vertical-align: middle;">$69787.00</td>
                  <td style="vertical-align: middle;">
                  <div class="policy-option">
                      <div class="draft-options">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu admin-d-item">
                          <li>
                            <a class="dropdown-item " href="#">View time sheet</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Message to client</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">View profile</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Contact expert</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Send to review team</a>
                          </li>

                        </ul>
                      </div>
                      </div>

                      </div>
                    </td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;"><input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> #04947352 </td>
                  <td style="vertical-align: middle;">Michel Jhon</td>
                  <td class="balance-text">mmichel@gmail.com</td>
                  <td style="vertical-align: middle;">12/10/2023</td>
                  <td style="vertical-align: middle;"><span class="ac-completed">Completed</span></td>
                  <td style="vertical-align: middle;"><span class="spent-price">$67.00 </span></td>
                  <td style="vertical-align: middle;">$69787.00</td>
                  <td style="vertical-align: middle;">
                  <div class="policy-option">
                      <div class="draft-options">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu admin-d-item">
                          <li>
                            <a class="dropdown-item " href="#">View time sheet</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Message to client</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">View profile</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Contact expert</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Send to review team</a>
                          </li>

                        </ul>
                      </div>
                      </div>

                      </div>
                    </td>
                </tr>

                <tr>
                  <td style="vertical-align: middle;"><input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> #04947352 </td>
                  <td style="vertical-align: middle;">Michel Jhon</td>
                  <td class="balance-text">mmichel@gmail.com</td>
                  <td style="vertical-align: middle;">12/10/2023</td>
                  <td style="vertical-align: middle;"><span class="ac-completed">Completed</span></td>
                  <td style="vertical-align: middle;"><span class="spent-price">$67.00 </span></td>
                  <td style="vertical-align: middle;">$69787.00</td>
                  <td style="vertical-align: middle;">
                  <div class="policy-option">
                      <div class="draft-options">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu admin-d-item">
                          <li>
                            <a class="dropdown-item " href="#">View time sheet</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Message to client</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">View profile</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Contact expert</a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">Send to review team</a>
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
