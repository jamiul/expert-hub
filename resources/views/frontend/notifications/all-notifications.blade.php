@extends('frontend.layouts.app')
@section('content')
    <main class="main__layout d-flex">
        <div class="main__content__wrapper_register col">
            <div class="header__wrapper py-2 bg-white">
                @include('figma/admintopbarregister')
            </div>
        </div>
    </main>

    <div class="container">
        <div class="row">
            <div class="all-notification">
                <h4>Notification</h4>
            </div>


            <div class="col-md-12">
                <div class="separator"><span>Start New</span></div>

                <div class="alert edux-alert alert-success" role="alert">
                    <x-icon.check-circle/>
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true"><x-icon.close/></span>
                    </button>
                </div>
                <div class="alert edux-alert alert-warning" role="alert">
                    <x-icon.warning/>
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true"><x-icon.close/></span>
                    </button>
                </div>
                <div class="alert edux-alert alert-info" role="alert">
                    <x-icon.info/>
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true"><x-icon.close/></span>
                    </button>
                </div>
                <div class="alert edux-alert alert-danger" role="alert">
                    <x-icon.info/>
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true"><x-icon.close/></span>
                    </button>
                </div>



                <div class="separator"><span>End New</span></div>

                <div class="single-alert">
                    <div class="alert edux-alert-success  fade show d-flex justify-content-between" role="alert">
                        <div class="alert-item">
              <span class="alert-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path
                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM8 15L3 10L4.41 8.59L8 12.17L15.59 4.58L17 6L8 15Z"
                    fill="#5ABC76"/>
              </svg>
              </span>
                            <span class="alert-text">Your EOI has been submitted successfully!</span>
                        </div>
                        <button type="button" class="edux-btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <path
                                    d="M6.39953 18.6538L5.3457 17.6L10.9457 12L5.3457 6.40002L6.39953 5.34619L11.9995 10.9462L17.5995 5.34619L18.6534 6.40002L13.0534 12L18.6534 17.6L17.5995 18.6538L11.9995 13.0538L6.39953 18.6538Z"
                                    fill="black"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="single-alert">
                    <div class="alert edux-alert-warning  fade show d-flex justify-content-between" role="alert">
                        <div class="alert-item">
              <span class="alert-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path
                      d="M1 21L12 2L23 21H1ZM12 18C12.2833 18 12.5208 17.9042 12.7125 17.7125C12.9042 17.5208 13 17.2833 13 17C13 16.7167 12.9042 16.4792 12.7125 16.2875C12.5208 16.0958 12.2833 16 12 16C11.7167 16 11.4792 16.0958 11.2875 16.2875C11.0958 16.4792 11 16.7167 11 17C11 17.2833 11.0958 17.5208 11.2875 17.7125C11.4792 17.9042 11.7167 18 12 18ZM11 15H13V10H11V15Z"
                      fill="#E9B911"/>
                </svg>
              </span>
                            <span class="alert-text">Info message will go here!</span>
                        </div>
                        <button type="button" class="edux-btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <path
                                    d="M6.39953 18.6538L5.3457 17.6L10.9457 12L5.3457 6.40002L6.39953 5.34619L11.9995 10.9462L17.5995 5.34619L18.6534 6.40002L13.0534 12L18.6534 17.6L17.5995 18.6538L11.9995 13.0538L6.39953 18.6538Z"
                                    fill="black"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="single-alert">
                    <div class="alert edux-alert-info  fade show d-flex justify-content-between" role="alert">
                        <div class="alert-item">
              <span class="alert-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path
                      d="M11 17H13V11H11V17ZM12 9C12.2833 9 12.5208 8.90417 12.7125 8.7125C12.9042 8.52083 13 8.28333 13 8C13 7.71667 12.9042 7.47917 12.7125 7.2875C12.5208 7.09583 12.2833 7 12 7C11.7167 7 11.4792 7.09583 11.2875 7.2875C11.0958 7.47917 11 7.71667 11 8C11 8.28333 11.0958 8.52083 11.2875 8.7125C11.4792 8.90417 11.7167 9 12 9ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22Z"
                      fill="#0036E3"/>
                </svg>
              </span>
                            <span class="alert-text">info message will go here</span>
                        </div>
                        <button type="button" class="edux-btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <path
                                    d="M6.39953 18.6538L5.3457 17.6L10.9457 12L5.3457 6.40002L6.39953 5.34619L11.9995 10.9462L17.5995 5.34619L18.6534 6.40002L13.0534 12L18.6534 17.6L17.5995 18.6538L11.9995 13.0538L6.39953 18.6538Z"
                                    fill="black"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="single-alert">
                    <div class="alert edux-alert-error  fade show d-flex justify-content-between" role="alert">
                        <div class="alert-item">
              <span class="alert-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path
                      d="M11 17H13V11H11V17ZM12 9C12.2833 9 12.5208 8.90417 12.7125 8.7125C12.9042 8.52083 13 8.28333 13 8C13 7.71667 12.9042 7.47917 12.7125 7.2875C12.5208 7.09583 12.2833 7 12 7C11.7167 7 11.4792 7.09583 11.2875 7.2875C11.0958 7.47917 11 7.71667 11 8C11 8.28333 11.0958 8.52083 11.2875 8.7125C11.4792 8.90417 11.7167 9 12 9ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22Z"
                      fill="#FF0000"/>
                </svg>
              </span>
                            <span class="alert-text">Error message will go here</span>
                        </div>
                        <button type="button" class="edux-btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <path
                                    d="M6.39953 18.6538L5.3457 17.6L10.9457 12L5.3457 6.40002L6.39953 5.34619L11.9995 10.9462L17.5995 5.34619L18.6534 6.40002L13.0534 12L18.6534 17.6L17.5995 18.6538L11.9995 13.0538L6.39953 18.6538Z"
                                    fill="black"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="all-notification">
                <h4>Buttons</h4>
            </div>

            <div class="col-md-3">
                <div class="single-button">
                    <button type="button" class="btn btn-primary edux-btn-primary">Book a Consultation</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-button">
                    <button type="button" class="btn edux-btn-border-primary">Book a Consultation</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-button">
                    <button type="button" class="btn edux-btn-border-primary"> <span class="arrow-left"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                <path d="M7.825 13L13.425 18.6L12 20L4 12L12 4L13.425 5.4L7.825 11H20V13H7.825Z" fill="#0036E3"/>
              </svg></span> <span class="btn-text">Book a Consultation</span></button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-button">
                    <button type="button" class="btn edux-btn-primary"> <span class="arrow-left">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M11.25 12.75H5.5V11.25H11.25V5.5H12.75V11.25H18.5V12.75H12.75V18.5H11.25V12.75Z" fill="white"/>
              </svg>
              </span> <span class="btn-text">Book a Consultation</span></button>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="all-notification">
                <h4>Badge</h4>
            </div>

            <div class="col-md-5">
                <div class="register">
                    <div class="register-form">
                        <div class="edux-register-ac register-ac">
                            <div class="register-img">
                                <div class="register-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                         fill="none">
                                        <path
                                            d="M20.1893 25.9999L17.6872 28.4768C17.2247 28.9367 16.6616 29.1666 15.998 29.1666C15.3344 29.1666 14.7727 28.9367 14.3128 28.4768L11.8107 25.9999H8.4103C7.74747 25.9999 7.18006 25.7639 6.70806 25.2919C6.23604 24.8199 6.00003 24.2525 6.00003 23.5897V20.1893L3.52313 17.6871C3.06331 17.2246 2.8334 16.6616 2.8334 15.998C2.8334 15.3344 3.06331 14.7726 3.52313 14.3128L6.00003 11.8106V8.41027C6.00003 7.74745 6.23604 7.18004 6.70806 6.70804C7.18006 6.23602 7.74747 6.00001 8.4103 6.00001H11.8107L14.3128 3.52311C14.7753 3.06328 15.3384 2.83337 16.002 2.83337C16.6656 2.83337 17.2273 3.06328 17.6872 3.52311L20.1893 6.00001H23.5897C24.2525 6.00001 24.8199 6.23602 25.2919 6.70804C25.764 7.18004 26 7.74745 26 8.41027V11.8106L28.4769 14.3128C28.9367 14.7753 29.1666 15.3384 29.1666 16.002C29.1666 16.6656 28.9367 17.2273 28.4769 17.6871L26 20.1893V23.5897C26 24.2525 25.764 24.8199 25.2919 25.2919C24.8199 25.7639 24.2525 25.9999 23.5897 25.9999H20.1893ZM16 27.3333L19.3333 24H24V19.3333L27.3333 16L24 12.6666V7.99997H19.3333L16 4.66664L12.6667 7.99997H8V12.6666L4.66666 16L8 19.3333V24H12.6667L16 27.3333ZM16 19.0179L18.3667 20.4615C18.5855 20.5999 18.8064 20.5923 19.0295 20.4384C19.2525 20.2846 19.335 20.076 19.2769 19.8128L18.6487 17.1051L20.7589 15.283C20.9657 15.0978 21.0269 14.8812 20.9423 14.6333C20.8577 14.3854 20.6769 14.2504 20.4 14.2282L17.6385 13.9948L16.5487 11.4538C16.4473 11.2128 16.2646 11.0923 16.0008 11.0923C15.737 11.0923 15.5539 11.2128 15.4513 11.4538L14.3615 13.9948L11.6 14.2282C11.3231 14.2504 11.1423 14.3854 11.0577 14.6333C10.9731 14.8812 11.0342 15.0978 11.2411 15.283L13.3513 17.1051L12.7231 19.8128C12.665 20.076 12.7475 20.2846 12.9705 20.4384C13.1936 20.5923 13.4145 20.5999 13.6333 20.4615L16 19.0179Z"
                                            fill="#0036E3"/>
                                    </svg>
                                </div>
                                <h4>I’m an Expert</h4>
                            </div>
                            <div class="register-radio">
                                <input type="radio" name="same">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="batch-area">
                    <div class="single-batch">
                        <div class="edux-batch-success">
                            <span>Success</span>
                        </div>
                    </div>
                    <div class="single-batch">
                        <div class="edux-batch-onhold">
                            <span>On Hold</span>
                        </div>
                    </div>
                    <div class="single-batch">
                        <div class="edux-batch-progress">
                            <span>Progress</span>
                        </div>
                    </div>
                    <div class="single-batch">
                        <div class="edux-batch-reject">
                            <span>Reject</span>
                        </div>
                    </div>

                    <div class="single-batch">
                        <div class="edux-batch-draft">
                            <span>Draft</span>
                        </div>
                    </div>

                    <div class="single-batch">
                        <div class="edux-batch-active">
                            <span>Active</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-2">

                <div class="attherate-area">
                    <div class="single-rate">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12V13.45C22 14.4333 21.6625 15.2708 20.9875 15.9625C20.3125 16.6542 19.4833 17 18.5 17C17.9167 17 17.3667 16.875 16.85 16.625C16.3333 16.375 15.9 16.0167 15.55 15.55C15.0667 16.0333 14.5208 16.3958 13.9125 16.6375C13.3042 16.8792 12.6667 17 12 17C10.6167 17 9.4375 16.5125 8.4625 15.5375C7.4875 14.5625 7 13.3833 7 12C7 10.6167 7.4875 9.4375 8.4625 8.4625C9.4375 7.4875 10.6167 7 12 7C13.3833 7 14.5625 7.4875 15.5375 8.4625C16.5125 9.4375 17 10.6167 17 12V13.45C17 13.8833 17.1417 14.25 17.425 14.55C17.7083 14.85 18.0667 15 18.5 15C18.9333 15 19.2917 14.85 19.575 14.55C19.8583 14.25 20 13.8833 20 13.45V12C20 9.76667 19.225 7.875 17.675 6.325C16.125 4.775 14.2333 4 12 4C9.76667 4 7.875 4.775 6.325 6.325C4.775 7.875 4 9.76667 4 12C4 14.2333 4.775 16.125 6.325 17.675C7.875 19.225 9.76667 20 12 20H17V22H12ZM12 15C12.8333 15 13.5417 14.7083 14.125 14.125C14.7083 13.5417 15 12.8333 15 12C15 11.1667 14.7083 10.4583 14.125 9.875C13.5417 9.29167 12.8333 9 12 9C11.1667 9 10.4583 9.29167 9.875 9.875C9.29167 10.4583 9 11.1667 9 12C9 12.8333 9.29167 13.5417 9.875 14.125C10.4583 14.7083 11.1667 15 12 15Z"
                                fill="#303744" fill-opacity="0.5"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="batch-star-area-active">
                    <div class="single-batch">
                        <div class="edux-batch-active">
                            <span>Badge</span>
                        </div>
                    </div>
                </div>

                <div class="batch-star-area">
                    <ul>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                     fill="none">
                                    <path
                                        d="M8.00023 11.5133L10.7669 13.1867C11.2736 13.4933 11.8936 13.04 11.7602 12.4667L11.0269 9.31999L13.4736 7.19999C13.9202 6.81332 13.6802 6.07999 13.0936 6.03332L9.87356 5.75999L8.61356 2.78665C8.3869 2.24665 7.61356 2.24665 7.3869 2.78665L6.1269 5.75332L2.9069 6.02665C2.32023 6.07332 2.08023 6.80665 2.5269 7.19332L4.97356 9.31332L4.24023 12.46C4.1069 13.0333 4.7269 13.4867 5.23356 13.18L8.00023 11.5133Z"
                                        fill="#E9B911"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                     fill="none">
                                    <path
                                        d="M8.00023 11.5133L10.7669 13.1867C11.2736 13.4933 11.8936 13.04 11.7602 12.4667L11.0269 9.31999L13.4736 7.19999C13.9202 6.81332 13.6802 6.07999 13.0936 6.03332L9.87356 5.75999L8.61356 2.78665C8.3869 2.24665 7.61356 2.24665 7.3869 2.78665L6.1269 5.75332L2.9069 6.02665C2.32023 6.07332 2.08023 6.80665 2.5269 7.19332L4.97356 9.31332L4.24023 12.46C4.1069 13.0333 4.7269 13.4867 5.23356 13.18L8.00023 11.5133Z"
                                        fill="#E9B911"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                     fill="none">
                                    <path
                                        d="M8.00023 11.5133L10.7669 13.1867C11.2736 13.4933 11.8936 13.04 11.7602 12.4667L11.0269 9.31999L13.4736 7.19999C13.9202 6.81332 13.6802 6.07999 13.0936 6.03332L9.87356 5.75999L8.61356 2.78665C8.3869 2.24665 7.61356 2.24665 7.3869 2.78665L6.1269 5.75332L2.9069 6.02665C2.32023 6.07332 2.08023 6.80665 2.5269 7.19332L4.97356 9.31332L4.24023 12.46C4.1069 13.0333 4.7269 13.4867 5.23356 13.18L8.00023 11.5133Z"
                                        fill="#E9B911"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                     fill="none">
                                    <path
                                        d="M8.00023 11.5133L10.7669 13.1867C11.2736 13.4933 11.8936 13.04 11.7602 12.4667L11.0269 9.31999L13.4736 7.19999C13.9202 6.81332 13.6802 6.07999 13.0936 6.03332L9.87356 5.75999L8.61356 2.78665C8.3869 2.24665 7.61356 2.24665 7.3869 2.78665L6.1269 5.75332L2.9069 6.02665C2.32023 6.07332 2.08023 6.80665 2.5269 7.19332L4.97356 9.31332L4.24023 12.46C4.1069 13.0333 4.7269 13.4867 5.23356 13.18L8.00023 11.5133Z"
                                        fill="#E9B911"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                     fill="none">
                                    <path
                                        d="M8.00023 11.5133L10.7669 13.1867C11.2736 13.4933 11.8936 13.04 11.7602 12.4667L11.0269 9.31999L13.4736 7.19999C13.9202 6.81332 13.6802 6.07999 13.0936 6.03332L9.87356 5.75999L8.61356 2.78665C8.3869 2.24665 7.61356 2.24665 7.3869 2.78665L6.1269 5.75332L2.9069 6.02665C2.32023 6.07332 2.08023 6.80665 2.5269 7.19332L4.97356 9.31332L4.24023 12.46C4.1069 13.0333 4.7269 13.4867 5.23356 13.18L8.00023 11.5133Z"
                                        fill="#E9B911"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="all-notification">
                <h4>Chip, Tab, Switcher</h4>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-2">
                <div class="edux-single-clip">
                    <span>Sub item 2</span>
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                               fill="none">
            <path
                d="M6.3 12.75L9 10.05L11.7 12.75L12.75 11.7L10.05 9L12.75 6.3L11.7 5.25L9 7.95L6.3 5.25L5.25 6.3L7.95 9L5.25 11.7L6.3 12.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69688 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69688 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69688 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69688 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C10.675 15 12.0938 14.4188 13.2563 13.2563C14.4188 12.0938 15 10.675 15 9C15 7.325 14.4188 5.90625 13.2563 4.74375C12.0938 3.58125 10.675 3 9 3C7.325 3 5.90625 3.58125 4.74375 4.74375C3.58125 5.90625 3 7.325 3 9C3 10.675 3.58125 12.0938 4.74375 13.2563C5.90625 14.4188 7.325 15 9 15Z"
                fill="#303744" fill-opacity="0.49"/>
          </svg></span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="edux-single-clip edux-single-clip-width">
                    <span>Sub item 2</span>
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                               fill="none">
            <path
                d="M6.3 12.75L9 10.05L11.7 12.75L12.75 11.7L10.05 9L12.75 6.3L11.7 5.25L9 7.95L6.3 5.25L5.25 6.3L7.95 9L5.25 11.7L6.3 12.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69688 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69688 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69688 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69688 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C10.675 15 12.0938 14.4188 13.2563 13.2563C14.4188 12.0938 15 10.675 15 9C15 7.325 14.4188 5.90625 13.2563 4.74375C12.0938 3.58125 10.675 3 9 3C7.325 3 5.90625 3.58125 4.74375 4.74375C3.58125 5.90625 3 7.325 3 9C3 10.675 3.58125 12.0938 4.74375 13.2563C5.90625 14.4188 7.325 15 9 15Z"
                fill="#303744" fill-opacity="0.49"/>
          </svg></span>
                </div>
                <div class="edux-single-clip edux-single-clip-width-top mt-2">
                    <span>Sub item 2</span>
                    <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
            <path
                d="M6.3 12.75L9 10.05L11.7 12.75L12.75 11.7L10.05 9L12.75 6.3L11.7 5.25L9 7.95L6.3 5.25L5.25 6.3L7.95 9L5.25 11.7L6.3 12.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69688 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69688 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69688 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69688 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C10.675 15 12.0938 14.4188 13.2563 13.2563C14.4188 12.0938 15 10.675 15 9C15 7.325 14.4188 5.90625 13.2563 4.74375C12.0938 3.58125 10.675 3 9 3C7.325 3 5.90625 3.58125 4.74375 4.74375C3.58125 5.90625 3 7.325 3 9C3 10.675 3.58125 12.0938 4.74375 13.2563C5.90625 14.4188 7.325 15 9 15Z"
                fill="#191D24"/>
          </svg>
        </span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="edux-single-clip edux-btn-green">
                    <span>Sub item 2</span>
                    <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
              <path
                  d="M4.79965 13.9904L4.00928 13.2L8.20928 9.00001L4.00928 4.80001L4.79965 4.00964L8.99965 8.20964L13.1996 4.00964L13.99 4.80001L9.79002 9.00001L13.99 13.2L13.1996 13.9904L8.99965 9.79038L4.79965 13.9904Z"
                  fill="white"/>
            </svg>
              </span>
                </div>
                <div class="edux-single-clip edux-btn-green-width mt-2">
                    <span>Sub item 2</span>
                    <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
              <path
                  d="M4.79965 13.9904L4.00928 13.2L8.20928 9.00001L4.00928 4.80001L4.79965 4.00964L8.99965 8.20964L13.1996 4.00964L13.99 4.80001L9.79002 9.00001L13.99 13.2L13.1996 13.9904L8.99965 9.79038L4.79965 13.9904Z"
                  fill="white"/>
            </svg>
              </span>
                </div>
            </div>
            <div class="col-md-2">

                <div class="edux-all mb-2">
                    <span>All</span>
                </div>

                <div class="edux-all edux-all-bg ">
                    <span>All</span>
                </div>

            </div>
            <div class="col-md-2">
                <div class="edux-my-favorite mb-2">
                    <span>My Favorite </span>
                </div>

                <div class="edux-my-favorite edux-my-favorite-border ">
                    <span>My Favorite </span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="check-box-option">
                    <ul>
                        <li>
                            <div class="switch-button switch-button-sm">
                                <input type="checkbox" name="item1" id="item1" checked>
                                <span><label for="item1"></label></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="check-box-option mt-2">
                    <ul>
                        <li>
                            <div class="switch-button switch-button-sm">
                                <input type="checkbox" name="item1" id="item1">
                                <span><label for="item1"></label></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="row mb-5">
            <div class="col-md-4">
                <div class="edux-on-off">
                    <span>Offline</span>
                    <span class="online-active">Online</span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="edux-hourly-all">
                    <ul>
                        <li><a href="">
                                <div class="edux-all">
                                    <span>All</span>
                                </div>
                            </a>
                        </li>

                        <li><a href="">
                                <div class="edux-all edux-all-bg-hourly  ">
                                    <span>Hourly (5)</span>
                                </div>
                            </a></li>

                        <li><a href="">
                                <div class="edux-all edux-all-bg-hourly-large  ">
                                    <span>Active Milestones (2)</span>
                                </div>
                            </a></li>

                        <li><a href="">
                                <div class="edux-all edux-all-bg-hourly-large  ">
                                    <span>Awaiting Milestones (2)</span>
                                </div>
                            </a></li>

                        <li><a href="">
                                <div class="edux-all edux-all-bg-hourly-large  ">
                                    <span>Payment Requests (0)</span>
                                </div>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>




@endsection
