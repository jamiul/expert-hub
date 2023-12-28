@extends('frontend.layouts.front-admin-dashboard-layout')

@section('content')

<main class="main__layout d-flex">
        <!-- start left sidebar -->
        <div class="left__sidebar">
           @include('figma/adminleftsidebar')
        </div>

        <!-- end left sidebar -->

        <div class="main__content__wrapper col">
             <!-- start header -->
            <div class="header__wrapper py-2 bg-white">

            @include('figma/admintopbar')

            </div>
            <!-- end header -->

<div class="content__wrapper">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
        <section class="admin-dashboard-area-client  mx-auto ">

          <div class="dashboard-inprogress-area">
                <div class="dashboard-inprogress">
                  <div class="admin-tab-nav-area-client d-flex flex-row justify-content-between">

                  <div class="admin-client-title">
                    <h4>Clients</h4>
                  </div>

                          <div class="short-by-area all-padding-admin-client">
                            <div class="select-date">
                              <div class="date-item">
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

                            <div class="search-by search-by-admin">
                              <form class="example search-form">
                                <input type="text" placeholder="Search by ID" name="search">
                                <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <path d="M19.6 21.5L13.3 15.2C12.8 15.6 12.225 15.9167 11.575 16.15C10.925 16.3833 10.2333 16.5 9.5 16.5C7.68333 16.5 6.14583 15.8708 4.8875 14.6125C3.62917 13.3542 3 11.8167 3 10C3 8.18333 3.62917 6.64583 4.8875 5.3875C6.14583 4.12917 7.68333 3.5 9.5 3.5C11.3167 3.5 12.8542 4.12917 14.1125 5.3875C15.3708 6.64583 16 8.18333 16 10C16 10.7333 15.8833 11.425 15.65 12.075C15.4167 12.725 15.1 13.3 14.7 13.8L21 20.1L19.6 21.5ZM9.5 14.5C10.75 14.5 11.8125 14.0625 12.6875 13.1875C13.5625 12.3125 14 11.25 14 10C14 8.75 13.5625 7.6875 12.6875 6.8125C11.8125 5.9375 10.75 5.5 9.5 5.5C8.25 5.5 7.1875 5.9375 6.3125 6.8125C5.4375 7.6875 5 8.75 5 10C5 11.25 5.4375 12.3125 6.3125 13.1875C7.1875 14.0625 8.25 14.5 9.5 14.5Z" fill="white"/>
                                </svg>
                                </button>
                              </form>

                            </div>
                      </div>

                </div>

          <div class="row">
      <div class="col-12">
        <div class="balance-table-area-admin d-flex flex-column table-responsive">
            <table class="table table-hover transaction-all table-responsive">
              <thead class="t-history">
                  <tr>
                    <th scope="col"><input class="form-check-input mt-0 admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date</th>
                    <th scope="col">Project Status</th>
                    <th scope="col">Total Spent</th>
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
                  <td style="vertical-align: middle;"><span class="ac-new" ac-completed>New</span></td>
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
                  <td style="vertical-align: middle;"><span class="ac-completed">Active</span></td>
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
                  <td style="vertical-align: middle;"><span class="ac-hiring">Inactive</span></td>
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
                  <td style="vertical-align: middle;"><span class="ac-new">New</span></td>
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
                  <td style="vertical-align: middle;"><span class="ac-completed">Active</span></td>
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
                  <td style="vertical-align: middle;"><span class="ac-hiring">Inactive</span></td>
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
                  <td style="vertical-align: middle;"><span class="ac-hiring">Inactive</span></td>
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
                  <td style="vertical-align: middle;"><span class="ac-hiring">Inactive</span></td>
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
                  <td style="vertical-align: middle;"><span class="ac-hiring">Inactive</span></td>
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
                  <td style="vertical-align: middle;"><span class="ac-hiring">Inactive</span></td>
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
                  <td style="vertical-align: middle;"><span class="ac-hiring">Inactive</span></td>
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
                  <td style="vertical-align: middle;"><span class="ac-hiring">Inactive</span></td>
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
