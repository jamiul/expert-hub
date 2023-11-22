@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/expert-dashboard.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">
<!-- sub menu start -->
<nav class="bg-primary sub__nav">
      <div class="container">
         <ul class="d-flex ps-0 list-unstyled mb-0">
               <li class="me-3">
                  <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block">Active Contracts</a>
               </li>
               <li class="me-3">
                  <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block">All Contracts</a>
               </li>
               <li class="me-3">
                  <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block active">Work Diary</a>
               </li>
               <li class="me-3">
                  <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block">Job Offers</a>
               </li>
               <li class="me-3">
                  <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block">Saved Jobs</a>
               </li>
         </ul>
      </div>
   </nav>
   <!-- sub menu start -->
<main class="expert__dashboad diary__page py-5">
        <div class="container">
            <div class="main__content__wrapp py-50">
                <div class="px-40">
                    <div class="title__box d-flex align-items-center justify-content-between mb-3">
                        <h1 class="title mb-0 text-black">Work Dairy</h1>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#modalAddManualTime" class="btn btn-primary add__manual__btn d-inline-flex align-items-center">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0007 16.9999H7.33398V14.9999H15.0007V7.33325H17.0006V14.9999H24.6673V16.9999H17.0006V24.6665H15.0007V16.9999Z" fill="white"/>
                            </svg>
                            <span class="ps-2">Add Manual Time</span>
                        </button>
                    </div> 
                    <div class="row gx-4 gy-3 gy-md-0">
                        <div class="col-md-7">
                            <select name="project" id="project" class="form-select">
                                <option value="Policy Development Assistance Required for Chemical  Engineering Industry">Policy Development Assistance Required for Chemical  Engineering Industry</option>
                            </select>
                        </div> 
                        <div class="col-md-5">
                            <div class="left-sidebar p-0"> 
                                <div class="calendar-box">
                                    <input type="text" id="dateInput" placeholder="Today" class="datepicker form-control"
                                        style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgaWQ9ImV2ZW50X0ZJTEwwX3dnaHQ0MDBfR1JBRDBfb3BzejI0IDEiPgo8cGF0aCBpZD0iVmVjdG9yIiBkPSJNMTQuNSAxOEMxMy44IDE4IDEzLjIwODMgMTcuNzU4MyAxMi43MjUgMTcuMjc1QzEyLjI0MTcgMTYuNzkxNyAxMiAxNi4yIDEyIDE1LjVDMTIgMTQuOCAxMi4yNDE3IDE0LjIwODMgMTIuNzI1IDEzLjcyNUMxMy4yMDgzIDEzLjI0MTcgMTMuOCAxMyAxNC41IDEzQzE1LjIgMTMgMTUuNzkxNyAxMy4yNDE3IDE2LjI3NSAxMy43MjVDMTYuNzU4MyAxNC4yMDgzIDE3IDE0LjggMTcgMTUuNUMxNyAxNi4yIDE2Ljc1ODMgMTYuNzkxNyAxNi4yNzUgMTcuMjc1QzE1Ljc5MTcgMTcuNzU4MyAxNS4yIDE4IDE0LjUgMThaTTUgMjJDNC40NSAyMiAzLjk3OTE3IDIxLjgwNDIgMy41ODc1IDIxLjQxMjVDMy4xOTU4MyAyMS4wMjA4IDMgMjAuNTUgMyAyMFY2QzMgNS40NSAzLjE5NTgzIDQuOTc5MTcgMy41ODc1IDQuNTg3NUMzLjk3OTE3IDQuMTk1ODMgNC40NSA0IDUgNEg2VjJIOFY0SDE2VjJIMThWNEgxOUMxOS41NSA0IDIwLjAyMDggNC4xOTU4MyAyMC40MTI1IDQuNTg3NUMyMC44MDQyIDQuOTc5MTcgMjEgNS40NSAyMSA2VjIwQzIxIDIwLjU1IDIwLjgwNDIgMjEuMDIwOCAyMC40MTI1IDIxLjQxMjVDMjAuMDIwOCAyMS44MDQyIDE5LjU1IDIyIDE5IDIySDVaTTUgMjBIMTlWMTBINVYyMFpNNSA4SDE5VjZINVY4WiIgZmlsbD0iIzMwMzc0NCIvPgo8L2c+Cjwvc3ZnPgo=') ;" 
                                    >
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
                        </div>
                    </div><!--./row-->
                </div>

                <div class="border-top border-bottom mt-4 py-3 px-40"> 
                    <div class="row g-4">
                        <div class="col-md-7 d-flex flex-wrap align-items-center">
                            <p class="text-black lead fw-medium mb-0 me-4">Total: 3:20 hrs</p>
                            <div class="d-inline-flex">
                                <div class="d-inline-flex align-items-center me-3">
                                    <span class="tracked__dot success rounded-circle d-inline-block"></span>
                                    <span class="small text-black">Tracked (2:30 hrs)</span>
                                </div>
                                <div class="d-inline-flex align-items-center">
                                    <span class="tracked__dot warn rounded-circle d-inline-block"></span>
                                    <span class="small text-black">Manual (1:00 hrs)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5"> 
                            <div class="custom-select ms-auto" style="max-width: 225px;">
                                <select name="timezon" id="timezone" class="form-select">
                                    <option value="My time zone">My time zone</option>
                                    <option value="My time zone">My time zone</option>
                                    <option value="My time zone">UTC time / Client time</option>
                                </select>
                            </div>
                        </div>
                    </div><!--./row-->
                </div><!--.//info__item-->
              
                <div class="px-40 diary__row">
                    <div class="d-inline-flex">
                        <div class="d-inline-flex align-items-center me-3">
                            <span class="tracked__dot success rounded-circle d-inline-block"></span>
                            <span class="small text-black">4:40 AM - 5:30 AM (0:50 hrs)</span>
                        </div>
                        <div class="d-inline-flex align-items-center">
                            <span class="tracked__dot warn rounded-circle d-inline-block"></span>
                            <span class="small text-black">5:30 AM - 6:00 AM (0:10 hrs)</span>
                        </div>
                    </div>
                    <p class="small text-black mt-2 mb-3">Memo missing. Add it to get payment protection and let client know what you worked on. <a href="#" class="link fw-medium">Learn more</a> </p>

                    <div class="diaryCarousel owl-carousel">
                        <div class="diary__item">
                            <figure class="thumbnail__box  position-relative overflow-hidden"> 
                                <img src="https://cdn.dribbble.com/users/216748/screenshots/11352097/media/132c9b11227431ed05733ffde6992d7d.png?resize=400x0" class="img-fluid" alt="screenshot">
                                <div class="hover__caption position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center tranisition">
                                    <div class="w-100 text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#modalDiaryDetail" class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="4" height="12" viewBox="0 0 4 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 12C1.5875 12 1.23438 11.8531 0.940625 11.5594C0.646875 11.2656 0.5 10.9125 0.5 10.5C0.5 10.0875 0.646875 9.73438 0.940625 9.44063C1.23438 9.14688 1.5875 9 2 9C2.4125 9 2.76562 9.14688 3.05938 9.44063C3.35313 9.73438 3.5 10.0875 3.5 10.5C3.5 10.9125 3.35313 11.2656 3.05938 11.5594C2.76562 11.8531 2.4125 12 2 12ZM2 7.5C1.5875 7.5 1.23438 7.35313 0.940625 7.05938C0.646875 6.76563 0.5 6.4125 0.5 6C0.5 5.5875 0.646875 5.23438 0.940625 4.94063C1.23438 4.64688 1.5875 4.5 2 4.5C2.4125 4.5 2.76562 4.64688 3.05938 4.94063C3.35313 5.23438 3.5 5.5875 3.5 6C3.5 6.4125 3.35313 6.76563 3.05938 7.05938C2.76562 7.35313 2.4125 7.5 2 7.5ZM2 3C1.5875 3 1.23438 2.85313 0.940625 2.55938C0.646875 2.26562 0.5 1.9125 0.5 1.5C0.5 1.0875 0.646875 0.734375 0.940625 0.440625C1.23438 0.146875 1.5875 0 2 0C2.4125 0 2.76562 0.146875 3.05938 0.440625C3.35313 0.734375 3.5 1.0875 3.5 1.5C3.5 1.9125 3.35313 2.26562 3.05938 2.55938C2.76562 2.85313 2.4125 3 2 3Z" fill="#191D24"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48077 15.375C5.10674 15.375 4.78727 15.2425 4.52237 14.9776C4.25746 14.7127 4.125 14.3932 4.125 14.0192V4.49998H3.375V3.375H6.74998V2.71155H11.25V3.375H14.625V4.49998H13.875V14.0192C13.875 14.398 13.7437 14.7187 13.4812 14.9812C13.2187 15.2437 12.898 15.375 12.5192 15.375H5.48077ZM12.75 4.49998H5.24998V14.0192C5.24998 14.0865 5.27162 14.1418 5.31489 14.1851C5.35817 14.2283 5.41346 14.25 5.48077 14.25H12.5192C12.5769 14.25 12.6298 14.2259 12.6779 14.1779C12.7259 14.1298 12.75 14.0769 12.75 14.0192V4.49998ZM7.05289 12.75H8.17787V5.99998H7.05289V12.75ZM9.82209 12.75H10.9471V5.99998H9.82209V12.75Z" fill="#191D24"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </figure>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="fw-medium fs-12 time">4:40 AM</span>
                                <div class="minits_tags d-inline-flex">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                </div>
                            </div>
                        </div><!--.//item-->
                        <div class="diary__item">
                            <figure class="thumbnail__box  position-relative overflow-hidden"> 
                                <img src="https://is1-ssl.mzstatic.com/image/thumb/PurpleSource126/v4/b5/07/e9/b507e9dc-8552-8e19-7560-c7553e5cc0e2/28078fc8-14bc-4e90-a884-9aa4f6355ae2_ss5.jpg/643x0w.jpg" class="img-fluid" alt="screenshot">
                                <div class="hover__caption position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center tranisition">
                                    <div class="w-100 text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#modalDiaryDetail" class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="4" height="12" viewBox="0 0 4 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 12C1.5875 12 1.23438 11.8531 0.940625 11.5594C0.646875 11.2656 0.5 10.9125 0.5 10.5C0.5 10.0875 0.646875 9.73438 0.940625 9.44063C1.23438 9.14688 1.5875 9 2 9C2.4125 9 2.76562 9.14688 3.05938 9.44063C3.35313 9.73438 3.5 10.0875 3.5 10.5C3.5 10.9125 3.35313 11.2656 3.05938 11.5594C2.76562 11.8531 2.4125 12 2 12ZM2 7.5C1.5875 7.5 1.23438 7.35313 0.940625 7.05938C0.646875 6.76563 0.5 6.4125 0.5 6C0.5 5.5875 0.646875 5.23438 0.940625 4.94063C1.23438 4.64688 1.5875 4.5 2 4.5C2.4125 4.5 2.76562 4.64688 3.05938 4.94063C3.35313 5.23438 3.5 5.5875 3.5 6C3.5 6.4125 3.35313 6.76563 3.05938 7.05938C2.76562 7.35313 2.4125 7.5 2 7.5ZM2 3C1.5875 3 1.23438 2.85313 0.940625 2.55938C0.646875 2.26562 0.5 1.9125 0.5 1.5C0.5 1.0875 0.646875 0.734375 0.940625 0.440625C1.23438 0.146875 1.5875 0 2 0C2.4125 0 2.76562 0.146875 3.05938 0.440625C3.35313 0.734375 3.5 1.0875 3.5 1.5C3.5 1.9125 3.35313 2.26562 3.05938 2.55938C2.76562 2.85313 2.4125 3 2 3Z" fill="#191D24"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48077 15.375C5.10674 15.375 4.78727 15.2425 4.52237 14.9776C4.25746 14.7127 4.125 14.3932 4.125 14.0192V4.49998H3.375V3.375H6.74998V2.71155H11.25V3.375H14.625V4.49998H13.875V14.0192C13.875 14.398 13.7437 14.7187 13.4812 14.9812C13.2187 15.2437 12.898 15.375 12.5192 15.375H5.48077ZM12.75 4.49998H5.24998V14.0192C5.24998 14.0865 5.27162 14.1418 5.31489 14.1851C5.35817 14.2283 5.41346 14.25 5.48077 14.25H12.5192C12.5769 14.25 12.6298 14.2259 12.6779 14.1779C12.7259 14.1298 12.75 14.0769 12.75 14.0192V4.49998ZM7.05289 12.75H8.17787V5.99998H7.05289V12.75ZM9.82209 12.75H10.9471V5.99998H9.82209V12.75Z" fill="#191D24"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </figure>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="fw-medium fs-12 time">4:40 AM</span>
                                <div class="minits_tags d-inline-flex">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                </div>
                            </div>
                        </div><!--.//item-->
                        <div class="diary__item">
                            <figure class="thumbnail__box  position-relative overflow-hidden"> 
                                <img src="https://wallcal.app/my-assets/wallcal-monthly-view.png" class="img-fluid" alt="screenshot">
                                <div class="hover__caption position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center tranisition">
                                    <div class="w-100 text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#modalDiaryDetail" class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="4" height="12" viewBox="0 0 4 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 12C1.5875 12 1.23438 11.8531 0.940625 11.5594C0.646875 11.2656 0.5 10.9125 0.5 10.5C0.5 10.0875 0.646875 9.73438 0.940625 9.44063C1.23438 9.14688 1.5875 9 2 9C2.4125 9 2.76562 9.14688 3.05938 9.44063C3.35313 9.73438 3.5 10.0875 3.5 10.5C3.5 10.9125 3.35313 11.2656 3.05938 11.5594C2.76562 11.8531 2.4125 12 2 12ZM2 7.5C1.5875 7.5 1.23438 7.35313 0.940625 7.05938C0.646875 6.76563 0.5 6.4125 0.5 6C0.5 5.5875 0.646875 5.23438 0.940625 4.94063C1.23438 4.64688 1.5875 4.5 2 4.5C2.4125 4.5 2.76562 4.64688 3.05938 4.94063C3.35313 5.23438 3.5 5.5875 3.5 6C3.5 6.4125 3.35313 6.76563 3.05938 7.05938C2.76562 7.35313 2.4125 7.5 2 7.5ZM2 3C1.5875 3 1.23438 2.85313 0.940625 2.55938C0.646875 2.26562 0.5 1.9125 0.5 1.5C0.5 1.0875 0.646875 0.734375 0.940625 0.440625C1.23438 0.146875 1.5875 0 2 0C2.4125 0 2.76562 0.146875 3.05938 0.440625C3.35313 0.734375 3.5 1.0875 3.5 1.5C3.5 1.9125 3.35313 2.26562 3.05938 2.55938C2.76562 2.85313 2.4125 3 2 3Z" fill="#191D24"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48077 15.375C5.10674 15.375 4.78727 15.2425 4.52237 14.9776C4.25746 14.7127 4.125 14.3932 4.125 14.0192V4.49998H3.375V3.375H6.74998V2.71155H11.25V3.375H14.625V4.49998H13.875V14.0192C13.875 14.398 13.7437 14.7187 13.4812 14.9812C13.2187 15.2437 12.898 15.375 12.5192 15.375H5.48077ZM12.75 4.49998H5.24998V14.0192C5.24998 14.0865 5.27162 14.1418 5.31489 14.1851C5.35817 14.2283 5.41346 14.25 5.48077 14.25H12.5192C12.5769 14.25 12.6298 14.2259 12.6779 14.1779C12.7259 14.1298 12.75 14.0769 12.75 14.0192V4.49998ZM7.05289 12.75H8.17787V5.99998H7.05289V12.75ZM9.82209 12.75H10.9471V5.99998H9.82209V12.75Z" fill="#191D24"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </figure>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="fw-medium fs-12 time">4:40 AM</span>
                                <div class="minits_tags d-inline-flex">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                </div>
                            </div>
                        </div><!--.//item-->
                        <div class="diary__item">
                            <figure class="thumbnail__box  position-relative overflow-hidden"> 
                                <img src="https://www.lafemmenikitha.com/wp-content/uploads/2020/04/Screen-Shot-2020-04-21-at-7.45.07-AM-1024x863.png" class="img-fluid" alt="screenshot">
                                <div class="hover__caption position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center tranisition">
                                    <div class="w-100 text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#modalDiaryDetail" class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="4" height="12" viewBox="0 0 4 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 12C1.5875 12 1.23438 11.8531 0.940625 11.5594C0.646875 11.2656 0.5 10.9125 0.5 10.5C0.5 10.0875 0.646875 9.73438 0.940625 9.44063C1.23438 9.14688 1.5875 9 2 9C2.4125 9 2.76562 9.14688 3.05938 9.44063C3.35313 9.73438 3.5 10.0875 3.5 10.5C3.5 10.9125 3.35313 11.2656 3.05938 11.5594C2.76562 11.8531 2.4125 12 2 12ZM2 7.5C1.5875 7.5 1.23438 7.35313 0.940625 7.05938C0.646875 6.76563 0.5 6.4125 0.5 6C0.5 5.5875 0.646875 5.23438 0.940625 4.94063C1.23438 4.64688 1.5875 4.5 2 4.5C2.4125 4.5 2.76562 4.64688 3.05938 4.94063C3.35313 5.23438 3.5 5.5875 3.5 6C3.5 6.4125 3.35313 6.76563 3.05938 7.05938C2.76562 7.35313 2.4125 7.5 2 7.5ZM2 3C1.5875 3 1.23438 2.85313 0.940625 2.55938C0.646875 2.26562 0.5 1.9125 0.5 1.5C0.5 1.0875 0.646875 0.734375 0.940625 0.440625C1.23438 0.146875 1.5875 0 2 0C2.4125 0 2.76562 0.146875 3.05938 0.440625C3.35313 0.734375 3.5 1.0875 3.5 1.5C3.5 1.9125 3.35313 2.26562 3.05938 2.55938C2.76562 2.85313 2.4125 3 2 3Z" fill="#191D24"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48077 15.375C5.10674 15.375 4.78727 15.2425 4.52237 14.9776C4.25746 14.7127 4.125 14.3932 4.125 14.0192V4.49998H3.375V3.375H6.74998V2.71155H11.25V3.375H14.625V4.49998H13.875V14.0192C13.875 14.398 13.7437 14.7187 13.4812 14.9812C13.2187 15.2437 12.898 15.375 12.5192 15.375H5.48077ZM12.75 4.49998H5.24998V14.0192C5.24998 14.0865 5.27162 14.1418 5.31489 14.1851C5.35817 14.2283 5.41346 14.25 5.48077 14.25H12.5192C12.5769 14.25 12.6298 14.2259 12.6779 14.1779C12.7259 14.1298 12.75 14.0769 12.75 14.0192V4.49998ZM7.05289 12.75H8.17787V5.99998H7.05289V12.75ZM9.82209 12.75H10.9471V5.99998H9.82209V12.75Z" fill="#191D24"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </figure>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="fw-medium fs-12 time">4:40 AM</span>
                                <div class="minits_tags d-inline-flex">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                </div>
                            </div>
                        </div><!--.//item-->
                        <div class="diary__item">
                            <figure class="thumbnail__box  position-relative overflow-hidden"> 
                                <img src="https://cdn.dribbble.com/users/216748/screenshots/11352097/media/132c9b11227431ed05733ffde6992d7d.png?resize=400x0" class="img-fluid" alt="screenshot">
                                <div class="hover__caption position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center tranisition">
                                    <div class="w-100 text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#modalDiaryDetail" class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="4" height="12" viewBox="0 0 4 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 12C1.5875 12 1.23438 11.8531 0.940625 11.5594C0.646875 11.2656 0.5 10.9125 0.5 10.5C0.5 10.0875 0.646875 9.73438 0.940625 9.44063C1.23438 9.14688 1.5875 9 2 9C2.4125 9 2.76562 9.14688 3.05938 9.44063C3.35313 9.73438 3.5 10.0875 3.5 10.5C3.5 10.9125 3.35313 11.2656 3.05938 11.5594C2.76562 11.8531 2.4125 12 2 12ZM2 7.5C1.5875 7.5 1.23438 7.35313 0.940625 7.05938C0.646875 6.76563 0.5 6.4125 0.5 6C0.5 5.5875 0.646875 5.23438 0.940625 4.94063C1.23438 4.64688 1.5875 4.5 2 4.5C2.4125 4.5 2.76562 4.64688 3.05938 4.94063C3.35313 5.23438 3.5 5.5875 3.5 6C3.5 6.4125 3.35313 6.76563 3.05938 7.05938C2.76562 7.35313 2.4125 7.5 2 7.5ZM2 3C1.5875 3 1.23438 2.85313 0.940625 2.55938C0.646875 2.26562 0.5 1.9125 0.5 1.5C0.5 1.0875 0.646875 0.734375 0.940625 0.440625C1.23438 0.146875 1.5875 0 2 0C2.4125 0 2.76562 0.146875 3.05938 0.440625C3.35313 0.734375 3.5 1.0875 3.5 1.5C3.5 1.9125 3.35313 2.26562 3.05938 2.55938C2.76562 2.85313 2.4125 3 2 3Z" fill="#191D24"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48077 15.375C5.10674 15.375 4.78727 15.2425 4.52237 14.9776C4.25746 14.7127 4.125 14.3932 4.125 14.0192V4.49998H3.375V3.375H6.74998V2.71155H11.25V3.375H14.625V4.49998H13.875V14.0192C13.875 14.398 13.7437 14.7187 13.4812 14.9812C13.2187 15.2437 12.898 15.375 12.5192 15.375H5.48077ZM12.75 4.49998H5.24998V14.0192C5.24998 14.0865 5.27162 14.1418 5.31489 14.1851C5.35817 14.2283 5.41346 14.25 5.48077 14.25H12.5192C12.5769 14.25 12.6298 14.2259 12.6779 14.1779C12.7259 14.1298 12.75 14.0769 12.75 14.0192V4.49998ZM7.05289 12.75H8.17787V5.99998H7.05289V12.75ZM9.82209 12.75H10.9471V5.99998H9.82209V12.75Z" fill="#191D24"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </figure>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="fw-medium fs-12 time">4:40 AM</span>
                                <div class="minits_tags d-inline-flex">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                </div>
                            </div>
                        </div><!--.//item-->
                        <div class="diary__item">
                            <figure class="thumbnail__box  position-relative overflow-hidden"> 
                                <img src="https://media.istockphoto.com/id/1406172436/vector/calendar-line-icon-july-2023-important-event-schedule-checkmark-week-day-date-management.jpg?s=612x612&w=is&k=20&c=KrPS_UB0dTspMgyo6H0iN2ZzEvMP6Q139n5dJm0D218=" class="img-fluid" alt="screenshot">
                                <div class="hover__caption position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center tranisition">
                                    <div class="w-100 text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#modalDiaryDetail" class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="4" height="12" viewBox="0 0 4 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 12C1.5875 12 1.23438 11.8531 0.940625 11.5594C0.646875 11.2656 0.5 10.9125 0.5 10.5C0.5 10.0875 0.646875 9.73438 0.940625 9.44063C1.23438 9.14688 1.5875 9 2 9C2.4125 9 2.76562 9.14688 3.05938 9.44063C3.35313 9.73438 3.5 10.0875 3.5 10.5C3.5 10.9125 3.35313 11.2656 3.05938 11.5594C2.76562 11.8531 2.4125 12 2 12ZM2 7.5C1.5875 7.5 1.23438 7.35313 0.940625 7.05938C0.646875 6.76563 0.5 6.4125 0.5 6C0.5 5.5875 0.646875 5.23438 0.940625 4.94063C1.23438 4.64688 1.5875 4.5 2 4.5C2.4125 4.5 2.76562 4.64688 3.05938 4.94063C3.35313 5.23438 3.5 5.5875 3.5 6C3.5 6.4125 3.35313 6.76563 3.05938 7.05938C2.76562 7.35313 2.4125 7.5 2 7.5ZM2 3C1.5875 3 1.23438 2.85313 0.940625 2.55938C0.646875 2.26562 0.5 1.9125 0.5 1.5C0.5 1.0875 0.646875 0.734375 0.940625 0.440625C1.23438 0.146875 1.5875 0 2 0C2.4125 0 2.76562 0.146875 3.05938 0.440625C3.35313 0.734375 3.5 1.0875 3.5 1.5C3.5 1.9125 3.35313 2.26562 3.05938 2.55938C2.76562 2.85313 2.4125 3 2 3Z" fill="#191D24"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48077 15.375C5.10674 15.375 4.78727 15.2425 4.52237 14.9776C4.25746 14.7127 4.125 14.3932 4.125 14.0192V4.49998H3.375V3.375H6.74998V2.71155H11.25V3.375H14.625V4.49998H13.875V14.0192C13.875 14.398 13.7437 14.7187 13.4812 14.9812C13.2187 15.2437 12.898 15.375 12.5192 15.375H5.48077ZM12.75 4.49998H5.24998V14.0192C5.24998 14.0865 5.27162 14.1418 5.31489 14.1851C5.35817 14.2283 5.41346 14.25 5.48077 14.25H12.5192C12.5769 14.25 12.6298 14.2259 12.6779 14.1779C12.7259 14.1298 12.75 14.0769 12.75 14.0192V4.49998ZM7.05289 12.75H8.17787V5.99998H7.05289V12.75ZM9.82209 12.75H10.9471V5.99998H9.82209V12.75Z" fill="#191D24"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </figure>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="fw-medium fs-12 time">4:40 AM</span>
                                <div class="minits_tags d-inline-flex">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                </div>
                            </div>
                        </div><!--.//item-->
                        <div class="diary__item">
                            <figure class="thumbnail__box  position-relative overflow-hidden"> 
                                <img src="https://i.pinimg.com/736x/2f/6d/d7/2f6dd7356fd0368913c0761129d5d3c2.jpg" class="img-fluid" alt="screenshot">
                                <div class="hover__caption position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center tranisition">
                                    <div class="w-100 text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#modalDiaryDetail" class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="4" height="12" viewBox="0 0 4 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 12C1.5875 12 1.23438 11.8531 0.940625 11.5594C0.646875 11.2656 0.5 10.9125 0.5 10.5C0.5 10.0875 0.646875 9.73438 0.940625 9.44063C1.23438 9.14688 1.5875 9 2 9C2.4125 9 2.76562 9.14688 3.05938 9.44063C3.35313 9.73438 3.5 10.0875 3.5 10.5C3.5 10.9125 3.35313 11.2656 3.05938 11.5594C2.76562 11.8531 2.4125 12 2 12ZM2 7.5C1.5875 7.5 1.23438 7.35313 0.940625 7.05938C0.646875 6.76563 0.5 6.4125 0.5 6C0.5 5.5875 0.646875 5.23438 0.940625 4.94063C1.23438 4.64688 1.5875 4.5 2 4.5C2.4125 4.5 2.76562 4.64688 3.05938 4.94063C3.35313 5.23438 3.5 5.5875 3.5 6C3.5 6.4125 3.35313 6.76563 3.05938 7.05938C2.76562 7.35313 2.4125 7.5 2 7.5ZM2 3C1.5875 3 1.23438 2.85313 0.940625 2.55938C0.646875 2.26562 0.5 1.9125 0.5 1.5C0.5 1.0875 0.646875 0.734375 0.940625 0.440625C1.23438 0.146875 1.5875 0 2 0C2.4125 0 2.76562 0.146875 3.05938 0.440625C3.35313 0.734375 3.5 1.0875 3.5 1.5C3.5 1.9125 3.35313 2.26562 3.05938 2.55938C2.76562 2.85313 2.4125 3 2 3Z" fill="#191D24"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48077 15.375C5.10674 15.375 4.78727 15.2425 4.52237 14.9776C4.25746 14.7127 4.125 14.3932 4.125 14.0192V4.49998H3.375V3.375H6.74998V2.71155H11.25V3.375H14.625V4.49998H13.875V14.0192C13.875 14.398 13.7437 14.7187 13.4812 14.9812C13.2187 15.2437 12.898 15.375 12.5192 15.375H5.48077ZM12.75 4.49998H5.24998V14.0192C5.24998 14.0865 5.27162 14.1418 5.31489 14.1851C5.35817 14.2283 5.41346 14.25 5.48077 14.25H12.5192C12.5769 14.25 12.6298 14.2259 12.6779 14.1779C12.7259 14.1298 12.75 14.0769 12.75 14.0192V4.49998ZM7.05289 12.75H8.17787V5.99998H7.05289V12.75ZM9.82209 12.75H10.9471V5.99998H9.82209V12.75Z" fill="#191D24"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </figure>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="fw-medium fs-12 time">4:40 AM</span>
                                <div class="minits_tags d-inline-flex">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                </div>
                            </div>
                        </div><!--.//item-->
                        <div class="diary__item">
                            <figure class="thumbnail__box  position-relative overflow-hidden"> 
                                <img src="https://is1-ssl.mzstatic.com/image/thumb/PurpleSource116/v4/d4/66/6e/d4666e76-2ec0-4c87-9ef6-fb0dfe73455f/17e65d26-398a-4a6f-bc90-402e3d3cd8fc_ss6.jpg/643x0w.jpg" class="img-fluid" alt="screenshot">
                                <div class="hover__caption position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center tranisition">
                                    <div class="w-100 text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#modalDiaryDetail" class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="4" height="12" viewBox="0 0 4 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 12C1.5875 12 1.23438 11.8531 0.940625 11.5594C0.646875 11.2656 0.5 10.9125 0.5 10.5C0.5 10.0875 0.646875 9.73438 0.940625 9.44063C1.23438 9.14688 1.5875 9 2 9C2.4125 9 2.76562 9.14688 3.05938 9.44063C3.35313 9.73438 3.5 10.0875 3.5 10.5C3.5 10.9125 3.35313 11.2656 3.05938 11.5594C2.76562 11.8531 2.4125 12 2 12ZM2 7.5C1.5875 7.5 1.23438 7.35313 0.940625 7.05938C0.646875 6.76563 0.5 6.4125 0.5 6C0.5 5.5875 0.646875 5.23438 0.940625 4.94063C1.23438 4.64688 1.5875 4.5 2 4.5C2.4125 4.5 2.76562 4.64688 3.05938 4.94063C3.35313 5.23438 3.5 5.5875 3.5 6C3.5 6.4125 3.35313 6.76563 3.05938 7.05938C2.76562 7.35313 2.4125 7.5 2 7.5ZM2 3C1.5875 3 1.23438 2.85313 0.940625 2.55938C0.646875 2.26562 0.5 1.9125 0.5 1.5C0.5 1.0875 0.646875 0.734375 0.940625 0.440625C1.23438 0.146875 1.5875 0 2 0C2.4125 0 2.76562 0.146875 3.05938 0.440625C3.35313 0.734375 3.5 1.0875 3.5 1.5C3.5 1.9125 3.35313 2.26562 3.05938 2.55938C2.76562 2.85313 2.4125 3 2 3Z" fill="#191D24"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48077 15.375C5.10674 15.375 4.78727 15.2425 4.52237 14.9776C4.25746 14.7127 4.125 14.3932 4.125 14.0192V4.49998H3.375V3.375H6.74998V2.71155H11.25V3.375H14.625V4.49998H13.875V14.0192C13.875 14.398 13.7437 14.7187 13.4812 14.9812C13.2187 15.2437 12.898 15.375 12.5192 15.375H5.48077ZM12.75 4.49998H5.24998V14.0192C5.24998 14.0865 5.27162 14.1418 5.31489 14.1851C5.35817 14.2283 5.41346 14.25 5.48077 14.25H12.5192C12.5769 14.25 12.6298 14.2259 12.6779 14.1779C12.7259 14.1298 12.75 14.0769 12.75 14.0192V4.49998ZM7.05289 12.75H8.17787V5.99998H7.05289V12.75ZM9.82209 12.75H10.9471V5.99998H9.82209V12.75Z" fill="#191D24"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </figure>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="fw-medium fs-12 time">4:40 AM</span>
                                <div class="minits_tags d-inline-flex">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                </div>
                            </div>
                        </div><!--.//item-->
                    </div><!--.//carousel--> 
                </div><!--.//px-->

                <div class="px-40 diary__row">
                    <div class="d-inline-flex">
                        <div class="d-inline-flex align-items-center me-3">
                            <span class="tracked__dot success rounded-circle d-inline-block"></span>
                            <span class="small text-black">4:40 AM - 5:30 AM (0:50 hrs)</span>
                        </div>
                         
                    </div>
                    <p class="small text-black mt-2 mb-3">Memo missing. Add it to get payment protection and let client know what you worked on. <a href="#" class="link fw-medium">Learn more</a> </p>

                    <div class="diaryCarousel owl-carousel">
                        <div class="diary__item">
                            <figure class="thumbnail__box  position-relative overflow-hidden"> 
                                <img src="https://cdn.dribbble.com/users/216748/screenshots/11352097/media/132c9b11227431ed05733ffde6992d7d.png?resize=400x0" class="img-fluid" alt="screenshot">
                                <div class="hover__caption position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center tranisition">
                                    <div class="w-100 text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#modalDiaryDetail" class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="4" height="12" viewBox="0 0 4 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 12C1.5875 12 1.23438 11.8531 0.940625 11.5594C0.646875 11.2656 0.5 10.9125 0.5 10.5C0.5 10.0875 0.646875 9.73438 0.940625 9.44063C1.23438 9.14688 1.5875 9 2 9C2.4125 9 2.76562 9.14688 3.05938 9.44063C3.35313 9.73438 3.5 10.0875 3.5 10.5C3.5 10.9125 3.35313 11.2656 3.05938 11.5594C2.76562 11.8531 2.4125 12 2 12ZM2 7.5C1.5875 7.5 1.23438 7.35313 0.940625 7.05938C0.646875 6.76563 0.5 6.4125 0.5 6C0.5 5.5875 0.646875 5.23438 0.940625 4.94063C1.23438 4.64688 1.5875 4.5 2 4.5C2.4125 4.5 2.76562 4.64688 3.05938 4.94063C3.35313 5.23438 3.5 5.5875 3.5 6C3.5 6.4125 3.35313 6.76563 3.05938 7.05938C2.76562 7.35313 2.4125 7.5 2 7.5ZM2 3C1.5875 3 1.23438 2.85313 0.940625 2.55938C0.646875 2.26562 0.5 1.9125 0.5 1.5C0.5 1.0875 0.646875 0.734375 0.940625 0.440625C1.23438 0.146875 1.5875 0 2 0C2.4125 0 2.76562 0.146875 3.05938 0.440625C3.35313 0.734375 3.5 1.0875 3.5 1.5C3.5 1.9125 3.35313 2.26562 3.05938 2.55938C2.76562 2.85313 2.4125 3 2 3Z" fill="#191D24"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48077 15.375C5.10674 15.375 4.78727 15.2425 4.52237 14.9776C4.25746 14.7127 4.125 14.3932 4.125 14.0192V4.49998H3.375V3.375H6.74998V2.71155H11.25V3.375H14.625V4.49998H13.875V14.0192C13.875 14.398 13.7437 14.7187 13.4812 14.9812C13.2187 15.2437 12.898 15.375 12.5192 15.375H5.48077ZM12.75 4.49998H5.24998V14.0192C5.24998 14.0865 5.27162 14.1418 5.31489 14.1851C5.35817 14.2283 5.41346 14.25 5.48077 14.25H12.5192C12.5769 14.25 12.6298 14.2259 12.6779 14.1779C12.7259 14.1298 12.75 14.0769 12.75 14.0192V4.49998ZM7.05289 12.75H8.17787V5.99998H7.05289V12.75ZM9.82209 12.75H10.9471V5.99998H9.82209V12.75Z" fill="#191D24"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </figure>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="fw-medium fs-12 time">4:40 AM</span>
                                <div class="minits_tags d-inline-flex">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                </div>
                            </div>
                        </div><!--.//item-->
                        <div class="diary__item">
                            <figure class="thumbnail__box  position-relative overflow-hidden"> 
                                <img src="https://is1-ssl.mzstatic.com/image/thumb/PurpleSource126/v4/b5/07/e9/b507e9dc-8552-8e19-7560-c7553e5cc0e2/28078fc8-14bc-4e90-a884-9aa4f6355ae2_ss5.jpg/643x0w.jpg" class="img-fluid" alt="screenshot">
                                <div class="hover__caption position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center tranisition">
                                    <div class="w-100 text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#modalDiaryDetail" class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="4" height="12" viewBox="0 0 4 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 12C1.5875 12 1.23438 11.8531 0.940625 11.5594C0.646875 11.2656 0.5 10.9125 0.5 10.5C0.5 10.0875 0.646875 9.73438 0.940625 9.44063C1.23438 9.14688 1.5875 9 2 9C2.4125 9 2.76562 9.14688 3.05938 9.44063C3.35313 9.73438 3.5 10.0875 3.5 10.5C3.5 10.9125 3.35313 11.2656 3.05938 11.5594C2.76562 11.8531 2.4125 12 2 12ZM2 7.5C1.5875 7.5 1.23438 7.35313 0.940625 7.05938C0.646875 6.76563 0.5 6.4125 0.5 6C0.5 5.5875 0.646875 5.23438 0.940625 4.94063C1.23438 4.64688 1.5875 4.5 2 4.5C2.4125 4.5 2.76562 4.64688 3.05938 4.94063C3.35313 5.23438 3.5 5.5875 3.5 6C3.5 6.4125 3.35313 6.76563 3.05938 7.05938C2.76562 7.35313 2.4125 7.5 2 7.5ZM2 3C1.5875 3 1.23438 2.85313 0.940625 2.55938C0.646875 2.26562 0.5 1.9125 0.5 1.5C0.5 1.0875 0.646875 0.734375 0.940625 0.440625C1.23438 0.146875 1.5875 0 2 0C2.4125 0 2.76562 0.146875 3.05938 0.440625C3.35313 0.734375 3.5 1.0875 3.5 1.5C3.5 1.9125 3.35313 2.26562 3.05938 2.55938C2.76562 2.85313 2.4125 3 2 3Z" fill="#191D24"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48077 15.375C5.10674 15.375 4.78727 15.2425 4.52237 14.9776C4.25746 14.7127 4.125 14.3932 4.125 14.0192V4.49998H3.375V3.375H6.74998V2.71155H11.25V3.375H14.625V4.49998H13.875V14.0192C13.875 14.398 13.7437 14.7187 13.4812 14.9812C13.2187 15.2437 12.898 15.375 12.5192 15.375H5.48077ZM12.75 4.49998H5.24998V14.0192C5.24998 14.0865 5.27162 14.1418 5.31489 14.1851C5.35817 14.2283 5.41346 14.25 5.48077 14.25H12.5192C12.5769 14.25 12.6298 14.2259 12.6779 14.1779C12.7259 14.1298 12.75 14.0769 12.75 14.0192V4.49998ZM7.05289 12.75H8.17787V5.99998H7.05289V12.75ZM9.82209 12.75H10.9471V5.99998H9.82209V12.75Z" fill="#191D24"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </figure>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="fw-medium fs-12 time">4:40 AM</span>
                                <div class="minits_tags d-inline-flex">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                </div>
                            </div>
                        </div><!--.//item-->
                        <div class="diary__item">
                            <figure class="thumbnail__box  position-relative overflow-hidden"> 
                                <img src="https://wallcal.app/my-assets/wallcal-monthly-view.png" class="img-fluid" alt="screenshot">
                                <div class="hover__caption position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center tranisition">
                                    <div class="w-100 text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#modalDiaryDetail" class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="4" height="12" viewBox="0 0 4 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 12C1.5875 12 1.23438 11.8531 0.940625 11.5594C0.646875 11.2656 0.5 10.9125 0.5 10.5C0.5 10.0875 0.646875 9.73438 0.940625 9.44063C1.23438 9.14688 1.5875 9 2 9C2.4125 9 2.76562 9.14688 3.05938 9.44063C3.35313 9.73438 3.5 10.0875 3.5 10.5C3.5 10.9125 3.35313 11.2656 3.05938 11.5594C2.76562 11.8531 2.4125 12 2 12ZM2 7.5C1.5875 7.5 1.23438 7.35313 0.940625 7.05938C0.646875 6.76563 0.5 6.4125 0.5 6C0.5 5.5875 0.646875 5.23438 0.940625 4.94063C1.23438 4.64688 1.5875 4.5 2 4.5C2.4125 4.5 2.76562 4.64688 3.05938 4.94063C3.35313 5.23438 3.5 5.5875 3.5 6C3.5 6.4125 3.35313 6.76563 3.05938 7.05938C2.76562 7.35313 2.4125 7.5 2 7.5ZM2 3C1.5875 3 1.23438 2.85313 0.940625 2.55938C0.646875 2.26562 0.5 1.9125 0.5 1.5C0.5 1.0875 0.646875 0.734375 0.940625 0.440625C1.23438 0.146875 1.5875 0 2 0C2.4125 0 2.76562 0.146875 3.05938 0.440625C3.35313 0.734375 3.5 1.0875 3.5 1.5C3.5 1.9125 3.35313 2.26562 3.05938 2.55938C2.76562 2.85313 2.4125 3 2 3Z" fill="#191D24"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48077 15.375C5.10674 15.375 4.78727 15.2425 4.52237 14.9776C4.25746 14.7127 4.125 14.3932 4.125 14.0192V4.49998H3.375V3.375H6.74998V2.71155H11.25V3.375H14.625V4.49998H13.875V14.0192C13.875 14.398 13.7437 14.7187 13.4812 14.9812C13.2187 15.2437 12.898 15.375 12.5192 15.375H5.48077ZM12.75 4.49998H5.24998V14.0192C5.24998 14.0865 5.27162 14.1418 5.31489 14.1851C5.35817 14.2283 5.41346 14.25 5.48077 14.25H12.5192C12.5769 14.25 12.6298 14.2259 12.6779 14.1779C12.7259 14.1298 12.75 14.0769 12.75 14.0192V4.49998ZM7.05289 12.75H8.17787V5.99998H7.05289V12.75ZM9.82209 12.75H10.9471V5.99998H9.82209V12.75Z" fill="#191D24"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </figure>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="fw-medium fs-12 time">4:40 AM</span>
                                <div class="minits_tags d-inline-flex">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                </div>
                            </div>
                        </div><!--.//item-->
                        <div class="diary__item">
                            <figure class="thumbnail__box  position-relative overflow-hidden"> 
                                <img src="https://www.lafemmenikitha.com/wp-content/uploads/2020/04/Screen-Shot-2020-04-21-at-7.45.07-AM-1024x863.png" class="img-fluid" alt="screenshot">
                                <div class="hover__caption position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center tranisition">
                                    <div class="w-100 text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#modalDiaryDetail" class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="4" height="12" viewBox="0 0 4 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 12C1.5875 12 1.23438 11.8531 0.940625 11.5594C0.646875 11.2656 0.5 10.9125 0.5 10.5C0.5 10.0875 0.646875 9.73438 0.940625 9.44063C1.23438 9.14688 1.5875 9 2 9C2.4125 9 2.76562 9.14688 3.05938 9.44063C3.35313 9.73438 3.5 10.0875 3.5 10.5C3.5 10.9125 3.35313 11.2656 3.05938 11.5594C2.76562 11.8531 2.4125 12 2 12ZM2 7.5C1.5875 7.5 1.23438 7.35313 0.940625 7.05938C0.646875 6.76563 0.5 6.4125 0.5 6C0.5 5.5875 0.646875 5.23438 0.940625 4.94063C1.23438 4.64688 1.5875 4.5 2 4.5C2.4125 4.5 2.76562 4.64688 3.05938 4.94063C3.35313 5.23438 3.5 5.5875 3.5 6C3.5 6.4125 3.35313 6.76563 3.05938 7.05938C2.76562 7.35313 2.4125 7.5 2 7.5ZM2 3C1.5875 3 1.23438 2.85313 0.940625 2.55938C0.646875 2.26562 0.5 1.9125 0.5 1.5C0.5 1.0875 0.646875 0.734375 0.940625 0.440625C1.23438 0.146875 1.5875 0 2 0C2.4125 0 2.76562 0.146875 3.05938 0.440625C3.35313 0.734375 3.5 1.0875 3.5 1.5C3.5 1.9125 3.35313 2.26562 3.05938 2.55938C2.76562 2.85313 2.4125 3 2 3Z" fill="#191D24"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48077 15.375C5.10674 15.375 4.78727 15.2425 4.52237 14.9776C4.25746 14.7127 4.125 14.3932 4.125 14.0192V4.49998H3.375V3.375H6.74998V2.71155H11.25V3.375H14.625V4.49998H13.875V14.0192C13.875 14.398 13.7437 14.7187 13.4812 14.9812C13.2187 15.2437 12.898 15.375 12.5192 15.375H5.48077ZM12.75 4.49998H5.24998V14.0192C5.24998 14.0865 5.27162 14.1418 5.31489 14.1851C5.35817 14.2283 5.41346 14.25 5.48077 14.25H12.5192C12.5769 14.25 12.6298 14.2259 12.6779 14.1779C12.7259 14.1298 12.75 14.0769 12.75 14.0192V4.49998ZM7.05289 12.75H8.17787V5.99998H7.05289V12.75ZM9.82209 12.75H10.9471V5.99998H9.82209V12.75Z" fill="#191D24"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </figure>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="fw-medium fs-12 time">4:40 AM</span>
                                <div class="minits_tags d-inline-flex">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                </div>
                            </div>
                        </div><!--.//item-->
                        <div class="diary__item">
                            <figure class="thumbnail__box  position-relative overflow-hidden"> 
                                <img src="https://cdn.dribbble.com/users/216748/screenshots/11352097/media/132c9b11227431ed05733ffde6992d7d.png?resize=400x0" class="img-fluid" alt="screenshot">
                                <div class="hover__caption position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center tranisition">
                                    <div class="w-100 text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#modalDiaryDetail" class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="4" height="12" viewBox="0 0 4 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 12C1.5875 12 1.23438 11.8531 0.940625 11.5594C0.646875 11.2656 0.5 10.9125 0.5 10.5C0.5 10.0875 0.646875 9.73438 0.940625 9.44063C1.23438 9.14688 1.5875 9 2 9C2.4125 9 2.76562 9.14688 3.05938 9.44063C3.35313 9.73438 3.5 10.0875 3.5 10.5C3.5 10.9125 3.35313 11.2656 3.05938 11.5594C2.76562 11.8531 2.4125 12 2 12ZM2 7.5C1.5875 7.5 1.23438 7.35313 0.940625 7.05938C0.646875 6.76563 0.5 6.4125 0.5 6C0.5 5.5875 0.646875 5.23438 0.940625 4.94063C1.23438 4.64688 1.5875 4.5 2 4.5C2.4125 4.5 2.76562 4.64688 3.05938 4.94063C3.35313 5.23438 3.5 5.5875 3.5 6C3.5 6.4125 3.35313 6.76563 3.05938 7.05938C2.76562 7.35313 2.4125 7.5 2 7.5ZM2 3C1.5875 3 1.23438 2.85313 0.940625 2.55938C0.646875 2.26562 0.5 1.9125 0.5 1.5C0.5 1.0875 0.646875 0.734375 0.940625 0.440625C1.23438 0.146875 1.5875 0 2 0C2.4125 0 2.76562 0.146875 3.05938 0.440625C3.35313 0.734375 3.5 1.0875 3.5 1.5C3.5 1.9125 3.35313 2.26562 3.05938 2.55938C2.76562 2.85313 2.4125 3 2 3Z" fill="#191D24"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48077 15.375C5.10674 15.375 4.78727 15.2425 4.52237 14.9776C4.25746 14.7127 4.125 14.3932 4.125 14.0192V4.49998H3.375V3.375H6.74998V2.71155H11.25V3.375H14.625V4.49998H13.875V14.0192C13.875 14.398 13.7437 14.7187 13.4812 14.9812C13.2187 15.2437 12.898 15.375 12.5192 15.375H5.48077ZM12.75 4.49998H5.24998V14.0192C5.24998 14.0865 5.27162 14.1418 5.31489 14.1851C5.35817 14.2283 5.41346 14.25 5.48077 14.25H12.5192C12.5769 14.25 12.6298 14.2259 12.6779 14.1779C12.7259 14.1298 12.75 14.0769 12.75 14.0192V4.49998ZM7.05289 12.75H8.17787V5.99998H7.05289V12.75ZM9.82209 12.75H10.9471V5.99998H9.82209V12.75Z" fill="#191D24"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </figure>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="fw-medium fs-12 time">4:40 AM</span>
                                <div class="minits_tags d-inline-flex">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                </div>
                            </div>
                        </div><!--.//item-->
                        <div class="diary__item">
                            <figure class="thumbnail__box  position-relative overflow-hidden"> 
                                <img src="https://media.istockphoto.com/id/1406172436/vector/calendar-line-icon-july-2023-important-event-schedule-checkmark-week-day-date-management.jpg?s=612x612&w=is&k=20&c=KrPS_UB0dTspMgyo6H0iN2ZzEvMP6Q139n5dJm0D218=" class="img-fluid" alt="screenshot">
                                <div class="hover__caption position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center tranisition">
                                    <div class="w-100 text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#modalDiaryDetail" class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="4" height="12" viewBox="0 0 4 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 12C1.5875 12 1.23438 11.8531 0.940625 11.5594C0.646875 11.2656 0.5 10.9125 0.5 10.5C0.5 10.0875 0.646875 9.73438 0.940625 9.44063C1.23438 9.14688 1.5875 9 2 9C2.4125 9 2.76562 9.14688 3.05938 9.44063C3.35313 9.73438 3.5 10.0875 3.5 10.5C3.5 10.9125 3.35313 11.2656 3.05938 11.5594C2.76562 11.8531 2.4125 12 2 12ZM2 7.5C1.5875 7.5 1.23438 7.35313 0.940625 7.05938C0.646875 6.76563 0.5 6.4125 0.5 6C0.5 5.5875 0.646875 5.23438 0.940625 4.94063C1.23438 4.64688 1.5875 4.5 2 4.5C2.4125 4.5 2.76562 4.64688 3.05938 4.94063C3.35313 5.23438 3.5 5.5875 3.5 6C3.5 6.4125 3.35313 6.76563 3.05938 7.05938C2.76562 7.35313 2.4125 7.5 2 7.5ZM2 3C1.5875 3 1.23438 2.85313 0.940625 2.55938C0.646875 2.26562 0.5 1.9125 0.5 1.5C0.5 1.0875 0.646875 0.734375 0.940625 0.440625C1.23438 0.146875 1.5875 0 2 0C2.4125 0 2.76562 0.146875 3.05938 0.440625C3.35313 0.734375 3.5 1.0875 3.5 1.5C3.5 1.9125 3.35313 2.26562 3.05938 2.55938C2.76562 2.85313 2.4125 3 2 3Z" fill="#191D24"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48077 15.375C5.10674 15.375 4.78727 15.2425 4.52237 14.9776C4.25746 14.7127 4.125 14.3932 4.125 14.0192V4.49998H3.375V3.375H6.74998V2.71155H11.25V3.375H14.625V4.49998H13.875V14.0192C13.875 14.398 13.7437 14.7187 13.4812 14.9812C13.2187 15.2437 12.898 15.375 12.5192 15.375H5.48077ZM12.75 4.49998H5.24998V14.0192C5.24998 14.0865 5.27162 14.1418 5.31489 14.1851C5.35817 14.2283 5.41346 14.25 5.48077 14.25H12.5192C12.5769 14.25 12.6298 14.2259 12.6779 14.1779C12.7259 14.1298 12.75 14.0769 12.75 14.0192V4.49998ZM7.05289 12.75H8.17787V5.99998H7.05289V12.75ZM9.82209 12.75H10.9471V5.99998H9.82209V12.75Z" fill="#191D24"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </figure>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="fw-medium fs-12 time">4:40 AM</span>
                                <div class="minits_tags d-inline-flex">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                </div>
                            </div>
                        </div><!--.//item-->
                        <div class="diary__item">
                            <figure class="thumbnail__box  position-relative overflow-hidden"> 
                                <img src="https://i.pinimg.com/736x/2f/6d/d7/2f6dd7356fd0368913c0761129d5d3c2.jpg" class="img-fluid" alt="screenshot">
                                <div class="hover__caption position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center tranisition">
                                    <div class="w-100 text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#modalDiaryDetail" class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="4" height="12" viewBox="0 0 4 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 12C1.5875 12 1.23438 11.8531 0.940625 11.5594C0.646875 11.2656 0.5 10.9125 0.5 10.5C0.5 10.0875 0.646875 9.73438 0.940625 9.44063C1.23438 9.14688 1.5875 9 2 9C2.4125 9 2.76562 9.14688 3.05938 9.44063C3.35313 9.73438 3.5 10.0875 3.5 10.5C3.5 10.9125 3.35313 11.2656 3.05938 11.5594C2.76562 11.8531 2.4125 12 2 12ZM2 7.5C1.5875 7.5 1.23438 7.35313 0.940625 7.05938C0.646875 6.76563 0.5 6.4125 0.5 6C0.5 5.5875 0.646875 5.23438 0.940625 4.94063C1.23438 4.64688 1.5875 4.5 2 4.5C2.4125 4.5 2.76562 4.64688 3.05938 4.94063C3.35313 5.23438 3.5 5.5875 3.5 6C3.5 6.4125 3.35313 6.76563 3.05938 7.05938C2.76562 7.35313 2.4125 7.5 2 7.5ZM2 3C1.5875 3 1.23438 2.85313 0.940625 2.55938C0.646875 2.26562 0.5 1.9125 0.5 1.5C0.5 1.0875 0.646875 0.734375 0.940625 0.440625C1.23438 0.146875 1.5875 0 2 0C2.4125 0 2.76562 0.146875 3.05938 0.440625C3.35313 0.734375 3.5 1.0875 3.5 1.5C3.5 1.9125 3.35313 2.26562 3.05938 2.55938C2.76562 2.85313 2.4125 3 2 3Z" fill="#191D24"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48077 15.375C5.10674 15.375 4.78727 15.2425 4.52237 14.9776C4.25746 14.7127 4.125 14.3932 4.125 14.0192V4.49998H3.375V3.375H6.74998V2.71155H11.25V3.375H14.625V4.49998H13.875V14.0192C13.875 14.398 13.7437 14.7187 13.4812 14.9812C13.2187 15.2437 12.898 15.375 12.5192 15.375H5.48077ZM12.75 4.49998H5.24998V14.0192C5.24998 14.0865 5.27162 14.1418 5.31489 14.1851C5.35817 14.2283 5.41346 14.25 5.48077 14.25H12.5192C12.5769 14.25 12.6298 14.2259 12.6779 14.1779C12.7259 14.1298 12.75 14.0769 12.75 14.0192V4.49998ZM7.05289 12.75H8.17787V5.99998H7.05289V12.75ZM9.82209 12.75H10.9471V5.99998H9.82209V12.75Z" fill="#191D24"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </figure>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="fw-medium fs-12 time">4:40 AM</span>
                                <div class="minits_tags d-inline-flex">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                </div>
                            </div>
                        </div><!--.//item-->
                        <div class="diary__item">
                            <figure class="thumbnail__box  position-relative overflow-hidden"> 
                                <img src="https://is1-ssl.mzstatic.com/image/thumb/PurpleSource116/v4/d4/66/6e/d4666e76-2ec0-4c87-9ef6-fb0dfe73455f/17e65d26-398a-4a6f-bc90-402e3d3cd8fc_ss6.jpg/643x0w.jpg" class="img-fluid" alt="screenshot">
                                <div class="hover__caption position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center tranisition">
                                    <div class="w-100 text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#modalDiaryDetail" class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="4" height="12" viewBox="0 0 4 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 12C1.5875 12 1.23438 11.8531 0.940625 11.5594C0.646875 11.2656 0.5 10.9125 0.5 10.5C0.5 10.0875 0.646875 9.73438 0.940625 9.44063C1.23438 9.14688 1.5875 9 2 9C2.4125 9 2.76562 9.14688 3.05938 9.44063C3.35313 9.73438 3.5 10.0875 3.5 10.5C3.5 10.9125 3.35313 11.2656 3.05938 11.5594C2.76562 11.8531 2.4125 12 2 12ZM2 7.5C1.5875 7.5 1.23438 7.35313 0.940625 7.05938C0.646875 6.76563 0.5 6.4125 0.5 6C0.5 5.5875 0.646875 5.23438 0.940625 4.94063C1.23438 4.64688 1.5875 4.5 2 4.5C2.4125 4.5 2.76562 4.64688 3.05938 4.94063C3.35313 5.23438 3.5 5.5875 3.5 6C3.5 6.4125 3.35313 6.76563 3.05938 7.05938C2.76562 7.35313 2.4125 7.5 2 7.5ZM2 3C1.5875 3 1.23438 2.85313 0.940625 2.55938C0.646875 2.26562 0.5 1.9125 0.5 1.5C0.5 1.0875 0.646875 0.734375 0.940625 0.440625C1.23438 0.146875 1.5875 0 2 0C2.4125 0 2.76562 0.146875 3.05938 0.440625C3.35313 0.734375 3.5 1.0875 3.5 1.5C3.5 1.9125 3.35313 2.26562 3.05938 2.55938C2.76562 2.85313 2.4125 3 2 3Z" fill="#191D24"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn__fab p-0 d-inline-flex justify-content-center align-items-center">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48077 15.375C5.10674 15.375 4.78727 15.2425 4.52237 14.9776C4.25746 14.7127 4.125 14.3932 4.125 14.0192V4.49998H3.375V3.375H6.74998V2.71155H11.25V3.375H14.625V4.49998H13.875V14.0192C13.875 14.398 13.7437 14.7187 13.4812 14.9812C13.2187 15.2437 12.898 15.375 12.5192 15.375H5.48077ZM12.75 4.49998H5.24998V14.0192C5.24998 14.0865 5.27162 14.1418 5.31489 14.1851C5.35817 14.2283 5.41346 14.25 5.48077 14.25H12.5192C12.5769 14.25 12.6298 14.2259 12.6779 14.1779C12.7259 14.1298 12.75 14.0769 12.75 14.0192V4.49998ZM7.05289 12.75H8.17787V5.99998H7.05289V12.75ZM9.82209 12.75H10.9471V5.99998H9.82209V12.75Z" fill="#191D24"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </figure>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="fw-medium fs-12 time">4:40 AM</span>
                                <div class="minits_tags d-inline-flex">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                    <span class=""></span>
                                </div>
                            </div>
                        </div><!--.//item-->
                    </div><!--.//carousel--> 
                </div><!--.//px-->
                 
            </div><!--.//main__content-->
        </div><!--.//container-->
 
        
        <!-- Add Manual Time Modal --> 
        <div class="modal fade manual__time__modal" id="modalAddManualTime" tabindex="-1" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
                <div class="modal-content">
                    <div class="modal-header p-0 border-0">
                        <p class="title fw-medium text-dark mb-0" id="modalTitleId">Add Manual time</p>
                        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-0">
                        <form action="#" method="post" class="overflow-hidden">
                            <div class="form-group mb-32 left-sidebar p-0">
                                <label for="date" class="small text-black fw-medium mb-1">Date</label>
                                <div class="calendar-box">
                                    <input type="text" id="dateInput2" placeholder="Search by Date" class="datepicker form-control"
                                        style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgaWQ9ImV2ZW50X0ZJTEwwX3dnaHQ0MDBfR1JBRDBfb3BzejI0IDEiPgo8cGF0aCBpZD0iVmVjdG9yIiBkPSJNMTQuNSAxOEMxMy44IDE4IDEzLjIwODMgMTcuNzU4MyAxMi43MjUgMTcuMjc1QzEyLjI0MTcgMTYuNzkxNyAxMiAxNi4yIDEyIDE1LjVDMTIgMTQuOCAxMi4yNDE3IDE0LjIwODMgMTIuNzI1IDEzLjcyNUMxMy4yMDgzIDEzLjI0MTcgMTMuOCAxMyAxNC41IDEzQzE1LjIgMTMgMTUuNzkxNyAxMy4yNDE3IDE2LjI3NSAxMy43MjVDMTYuNzU4MyAxNC4yMDgzIDE3IDE0LjggMTcgMTUuNUMxNyAxNi4yIDE2Ljc1ODMgMTYuNzkxNyAxNi4yNzUgMTcuMjc1QzE1Ljc5MTcgMTcuNzU4MyAxNS4yIDE4IDE0LjUgMThaTTUgMjJDNC40NSAyMiAzLjk3OTE3IDIxLjgwNDIgMy41ODc1IDIxLjQxMjVDMy4xOTU4MyAyMS4wMjA4IDMgMjAuNTUgMyAyMFY2QzMgNS40NSAzLjE5NTgzIDQuOTc5MTcgMy41ODc1IDQuNTg3NUMzLjk3OTE3IDQuMTk1ODMgNC40NSA0IDUgNEg2VjJIOFY0SDE2VjJIMThWNEgxOUMxOS41NSA0IDIwLjAyMDggNC4xOTU4MyAyMC40MTI1IDQuNTg3NUMyMC44MDQyIDQuOTc5MTcgMjEgNS40NSAyMSA2VjIwQzIxIDIwLjU1IDIwLjgwNDIgMjEuMDIwOCAyMC40MTI1IDIxLjQxMjVDMjAuMDIwOCAyMS44MDQyIDE5LjU1IDIyIDE5IDIySDVaTTUgMjBIMTlWMTBINVYyMFpNNSA4SDE5VjZINVY4WiIgZmlsbD0iIzMwMzc0NCIvPgo8L2c+Cjwvc3ZnPgo=') ;" 
                                    >
                                    <div class="calendar" id="calendar2">
                                      <div class="header">
                                        <button id="prevBtn2"><i class="fa fa-angle-left"></i></button>
                                        <h2 id="monthYear2">Month Year</h2>
                                        <button id="nextBtn2"><i class="fa fa-angle-right"></i></button>
                                      </div>
                                      <div class="days" id="daysContainer2"></div>
                                    </div>
                                  </div>
                            </div>
                            <div class="form-group mb-32">
                                <label for="time" class="small text-black fw-medium mb-1">Time Zone</label>
                                <select name="timezon" id="timezon" class="form-select">
                                    <option value="UTC">UTC</option>
                                </select>
                            </div>
                            <div class="form-group mb-32">
                                <div class="row gx-4 gy-0">
                                    <div class="col-sm-6"> 
                                        <label for="start_time" class="small text-black fw-medium mb-1">Start Time</label>
                                        <select name="start_time" id="start_time" class="form-select">
                                            <option value="1:00 AM">1:00 AM</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6"> 
                                        <label for="end_time" class="small text-black fw-medium mb-1">End Time</label>
                                        <select name="end_time" id="end_time" class="form-select">
                                            <option value="1:00 AM">1:00 AM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="description" class="small text-black fw-medium mb-1">Description</label>
                                <textarea name="description" id="description" cols="30" rows="4" class="form-control h-auto" placeholder="Type your first name (max 200 words)"></textarea>
                            </div>
                            <div class="mb-32">
                                <p class="mb-0 small text-muted"><span class="fw-medium">Note:</span> Manual time does not qualify for Upwork Hourly Protection. Learn more</p>
                            </div>
                            <div class="border-top pt-4 text-end">
                                <button type="button" class="btn btn-outline-primary fw-medium px-4" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary fw-medium px-4 ms-2">Add Time</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Screenshot Details Modal --> 
        <div class="modal fade manual__time__modal diary__detail__modal" id="modalDiaryDetail" tabindex="-1" data-bs-keyboard="false" role="dialog" aria-labelledby="modalDiaryDetailTtitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
                <div class="modal-content">
                    <div class="modal-header p-0 border-0">
                        <p class="title fw-medium mb-0" id="modalDiaryDetailTtitle">Screenshot Details</p>
                        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-0">
                        <p class="small fw-medium text-muted mb-12">
                            <span class="text-success">Oct 19, 2023</span>  
                            <span>|</span>  
                            <span class="text-black">07:46 PM</span>
                        </p>

                        <figure class="rounded-4  position-relative overflow-hidden"> 
                            <img src="https://cdn.dribbble.com/users/216748/screenshots/11352097/media/132c9b11227431ed05733ffde6992d7d.png?resize=400x0" class="img-fluid w-100" alt="screenshot"> 
                        </figure>

                        <p class="small fw-medium text-black mb-4">
                            <span class="d-block" style="color: rgba(48, 55, 68, 0.70);">Active Project</span>
                            Policy Development Assistance Required for Chemical  Engineering Industry
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-1 border-bottom pb-2 mb-3">
                            <div>
                                <span class="fw-medium small time">Activity Level</span>
                                <span class="fw-medium small text-success d-block">Active 8 of 10 min</span>

                            </div>
                            <div class="minits_tags d-inline-flex">
                                <span class="active"></span>
                                <span class="active"></span>
                                <span class="active"></span>
                                <span class="active"></span>
                                <span class=""></span>
                                <span class=""></span>
                                <span class=""></span>
                            </div>
                        </div>

                        <table class="table mb-32">
                            <thead>
                                <th>Time</th>
                                <th>Keyboard</th>
                                <th>Mouse</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10:02:07 PM</td>
                                    <td>16</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>10:02:07 PM</td>
                                    <td>16</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>10:02:07 PM</td>
                                    <td>16</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>10:02:07 PM</td>
                                    <td>16</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>10:02:07 PM</td>
                                    <td>16</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>10:02:07 PM</td>
                                    <td>16</td>
                                    <td>30</td>
                                </tr>
                            </tbody>
                        </table>
                         
                        <div class="border-top pt-4 text-end">
                            <button type="button" class="btn btn-primary fw-medium px-4" data-bs-dismiss="modal">Close</button> 
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        
       
    </main>
@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
      selElmnt = x[i].getElementsByTagName("select")[0];
      ll = selElmnt.length;
      /*for each element, create a new DIV that will act as the selected item:*/
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      x[i].appendChild(a);
      /*for each element, create a new DIV that will contain the option list:*/
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");
      for (j = 1; j < ll; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
              if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                yl = y.length;
                for (k = 0; k < yl; k++) {
                  y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
              }
            }
            h.click();
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener("click", function(e) {
          /*when the select box is clicked, close any other select boxes,
          and open/close the current select box:*/
          e.stopPropagation();
          closeAllSelect(this);
          this.nextSibling.classList.toggle("select-hide");
          this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {
      /*a function that will close all select boxes in the document,
      except the current select box:*/
      var x, y, i, xl, yl, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      xl = x.length;
      yl = y.length;
      for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i)
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }
      for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
</script>

<script>
    $(".diaryCarousel").owlCarousel({
        autoplay: false,
        autoplayHoverPause: true,
        smartSpeed: 550, 
        center: false,
        autoplayTimeout: 10000,
        autoplaySpeed: 3000,
        loop: true,
        margin: 16,
        items: 4,
        nav: true,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: { items: 1  },
            576: { items: 1 },
            768: { items: 3 },
            992: { items: 4.2 }, 
            1200: { items: 6.2 },  
        },
        navText: [
            '<i class="fa-solid fa-chevron-left"></i>',
            '<i class="fa-solid fa-chevron-right"></i>'
        ]
    });
</script>

<script>
const daysContainer = document.getElementById("daysContainer");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const monthYear = document.getElementById("monthYear");
const dateInput = document.getElementById("dateInput");
const calendar = document.getElementById("calendar");

let currentDate = new Date();
let selectedDate = null;

function handleDayClick(day) {
  selectedDate = new Date(
    currentDate.getFullYear(),
    currentDate.getMonth(),
    day
  );
  dateInput.value = selectedDate.toLocaleDateString("en-US");
  calendar.style.display = "none";
  renderCalendar();
}

function createDayElement(day) {
  const date = new Date(currentDate.getFullYear(), currentDate.getMonth(), day);
  const dayElement = document.createElement("div");
  dayElement.classList.add("day");

  if (date.toDateString() === new Date().toDateString()) {
    dayElement.classList.add("current");
  }
  if (selectedDate && date.toDateString() === selectedDate.toDateString()) {
    dayElement.classList.add("selected");
  }

  dayElement.textContent = day;
  dayElement.addEventListener("click", () => {
    handleDayClick(day);
  });
  daysContainer.appendChild(dayElement);
}

function renderCalendar() {
  daysContainer.innerHTML = "";
  const firstDay = new Date(
    currentDate.getFullYear(),
    currentDate.getMonth(),
    1
  );
  const lastDay = new Date(
    currentDate.getFullYear(),
    currentDate.getMonth() + 1,
    0
  );

  monthYear.textContent = `${currentDate.toLocaleString("default", {
    month: "long"
  })} ${currentDate.getFullYear()}`;

  for (let day = 1; day <= lastDay.getDate(); day++) {
    createDayElement(day);
  }
}

prevBtn.addEventListener("click", () => {
  currentDate.setMonth(currentDate.getMonth() - 1);
  renderCalendar();
});

nextBtn.addEventListener("click", () => {
  currentDate.setMonth(currentDate.getMonth() + 1);
  renderCalendar();
});

dateInput.addEventListener("click", () => {
  calendar.style.display = "block";
  positionCalendar();
});

document.addEventListener("click", (event) => {
  if (!dateInput.contains(event.target) && !calendar.contains(event.target)) {
    calendar.style.display = "none";
  }
});

function positionCalendar() {
  const inputRect = dateInput.getBoundingClientRect();
  calendar.style.top = inputRect.bottom + "px";
  calendar.style.left = inputRect.left + "px";
}

window.addEventListener("resize", positionCalendar);

renderCalendar();
    
</script>

<script>
const daysContainer2 = document.getElementById("daysContainer2");
const prevBtn2 = document.getElementById("prevBtn2");
const nextBtn2 = document.getElementById("nextBtn2");
const monthYear2 = document.getElementById("monthYear2");
const dateInput2 = document.getElementById("dateInput2");
const calendar2 = document.getElementById("calendar2");

let currentDate2 = new Date();
let selectedDate2 = null;

function handleDayClick(day) {
  selectedDate2 = new Date(
    currentDate2.getFullYear(),
    currentDate2.getMonth(),
    day
  );
  dateInput2.value = selectedDate2.toLocaleDateString("en-US");
  calendar2.style.display = "none";
  renderCalendar2();
}

function createDayElement(day) {
  const date = new Date(currentDate2.getFullYear(), currentDate2.getMonth(), day);
  const dayElement = document.createElement("div");
  dayElement.classList.add("day");

  if (date.toDateString() === new Date().toDateString()) {
    dayElement.classList.add("current");
  }
  if (selectedDate2 && date.toDateString() === selectedDate2.toDateString()) {
    dayElement.classList.add("selected");
  }

  dayElement.textContent = day;
  dayElement.addEventListener("click", () => {
    handleDayClick(day);
  });
  daysContainer2.appendChild(dayElement);
}

function renderCalendar2() {
  daysContainer2.innerHTML = "";
  const firstDay = new Date(
    currentDate2.getFullYear(),
    currentDate2.getMonth(),
    1
  );
  const lastDay = new Date(
    currentDate2.getFullYear(),
    currentDate2.getMonth() + 1,
    0
  );

  monthYear2.textContent = `${currentDate2.toLocaleString("default", {
    month: "long"
  })} ${currentDate2.getFullYear()}`;

  for (let day = 1; day <= lastDay.getDate(); day++) {
    createDayElement(day);
  }
}

prevBtn2.addEventListener("click", () => {
  currentDate2.setMonth(currentDate2.getMonth() - 1);
  renderCalendar2();
});

nextBtn2.addEventListener("click", () => {
  currentDate2.setMonth(currentDate2.getMonth() + 1);
  renderCalendar2();
});

dateInput2.addEventListener("click", () => {
  calendar2.style.display = "block";
  positionCalendar2();
});

document.addEventListener("click", (event) => {
  if (!dateInput2.contains(event.target) && !calendar2.contains(event.target)) {
    calendar2.style.display = "none";
  }
});

function positionCalendar2() {
  const inputRect = dateInput2.getBoundingClientRect();
  calendar2.style.top = inputRect.bottom + "px";
  calendar2.style.left = inputRect.left + "px";
}

window.addEventListener("resize", positionCalendar2);

renderCalendar2();
    
</script>
@endpush
  