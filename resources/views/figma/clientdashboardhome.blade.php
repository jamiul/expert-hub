
@extends('frontend.layouts.front-client-dashboard-layoutmain')
@section('content')
<section class="client-dashboard mx-auto my-5">
<div class="container">
<div class="row">
      <div class="job-area-top d-flex justify-content-between">
        <div class="all-project">
          <h2>Your workspace</h2>
        </div>
        <div class="all-project-post">
          <div class="all-project-post-content">
            <ul>
              <li><a href="#">All Project Posts</a></li>
              <li><a href="#">All Contracts</a></li>
            </ul>
          </div>
          <div class="job-post">
            <a href="/figma/jobposts"  class="btn edux-btn-primary">
                <span class="arrow-left">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M11.25 12.75H5.5V11.25H11.25V5.5H12.75V11.25H18.5V12.75H12.75V18.5H11.25V12.75Z" fill="white"/>
                </svg>
                </span> <span class="btn-text">Post a Job</span></a>
          </div>
        </div>
      </div>
  </div>


  <div class="row owlp-bottom mt-5">

      <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="owl-carousel owl-carouselfour owl-theme client-home-carousel">
        <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                  <div class="in-hiring">
                  <p class="btn-hiring">Hiring</p>
                  </div>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                        <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                      </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-show">
                        <li>
                          <a class="dropdown-item " href="#">Invite Experts</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">View Job Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Edit Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Remove Posting</a>
                        </li>
                      </ul>
                    </div>
                  </div>

              </div>

              <div class="developing-area">
                <div class="profile-single-area">
                  <div class="single-person">
                    <img src="{{ asset('assets/frontend/img/kk2.png') }}" />
                    <p class="single-designation">Prof. Michael Kassiou</p>
                </div>

                </div>
                <div class="profile-single-title">
                  <h3>Developing curriculum for Postgraduate...</h3>
                </div>
                <div class="profile-single-text">
                  <p>You have 35 new proposal</p>
                </div>

              </div>

              <div class="profile-single-button">
                  <button type="button" class="btn btn-fundmilestone">Review Proposal</button>
                </div>

            </div>
          </div>

          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                  <div class="in-progress">
                    <p class="btn-inprogress">In Progress</p>
                  </div>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                          <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                        </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-show">
                        <li>
                          <a class="dropdown-item " href="#">Invite Experts</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">View Job Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Edit Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Remove Posting</a>
                        </li>
                      </ul>
                    </div>
                  </div>

              </div>
              <div class="developing-area">
                <div class="profile-single-area">
                  <div class="single-person">
                    <img src="{{ asset('assets/frontend/img/kk1.png') }}" />
                    <p class="single-designation">Prof. Michael Kassiou</p>
                </div>

                </div>
                <div class="profile-single-title">
                  <h3>Developing curriculum for Postgraduate...</h3>
                </div>
                <div class="profile-single-text">
                  <p>Fund a new milestone for Paras to keep working</p>
                </div>

              </div>

              <div class="profile-single-button">
                  <button class="btn-fundmilestone">Fund & activate milestone</button>
                </div>

            </div>
          </div>



          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                <div class="on-hold">
                <p class="btn-onhold">On hold</p>
                </div>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                        <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                      </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-show">
                        <li>
                          <a class="dropdown-item " href="#">Invite Experts</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">View Job Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Edit Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Remove Posting</a>
                        </li>
                      </ul>
                    </div>
                  </div>

              </div>
              <div class="developing-area">
                <div class="profile-single-area">
                  <div class="single-person">
                    <img src="{{ asset('assets/frontend/img/kk3.png') }}" />
                    <p class="single-designation">Prof. Michael Kassiou</p>
                </div>

                </div>
                <div class="profile-single-title">
                  <h3>Developing curriculum for Postgraduate...</h3>
                </div>
                <div class="profile-single-text">
                  <p>You have 35 new proposal</p>
                </div>

              </div>
              <div class="profile-single-button">
                  <button class="btn-fundmilestone">Restart Contract</button>
                </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area card-with-gradient">
              <div class="inprogress-area">
                  <div class="completed"><p class="btn-complated">Completed</p></div>
                <div class="draft-options">
                    <div class="dropdown position-relative">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- <i class="fa fa-ellipsis-v" aria-hidden="true"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                        <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                      </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-show homedropdown">
                        <li>
                          <a class="dropdown-item " href="#">Invite Experts</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">View Job Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Edit Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Remove Posting</a>
                        </li>
                      </ul>
                    </div>
                  </div>

              </div>
              <div class="developing-area">
                <div class="profile-single-area">
                  <div class="single-person">
                    <img src="{{ asset('assets/frontend/img/kk4.png') }}" />
                    <p class="single-designation">Prof. Michael Kassiou</p>
                </div>

                </div>
                <div class="profile-single-title">
                  <h3>Developing curriculum for Postgraduate...</h3>
                </div>
                  <div class="rating-area">
                        <div class="profile-feedback">
                        <p>Feedback given</p>
                      </div>
                      <div class="rating-area">
                        <ul>
                          <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#0036E3"/>
                              </svg>
                              </a>
                          </li>
                          <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#0036E3"/>
                              </svg>
                              </a>
                          </li>
                          <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#0036E3"/>
                              </svg>
                              </a>
                          </li>


                          <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#0036E3"/>
                              </svg>
                              </a>
                          </li>

                          <li>
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#C8C5D4"/>
                              </svg>
                              </a>
                          </li>
                        </ul>
                      </div>
                  </div>
                <div class="profile-single-button">
                  <button class="btn-fundmilestone">Rehire</button>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                <div class="in-hiring">
                 <p class="btn-hiring">Hiring</p>
                </div>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                        <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                      </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-show">
                        <li>
                          <a class="dropdown-item " href="#">Invite Experts</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">View Job Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Edit Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Remove Posting</a>
                        </li>
                      </ul>
                    </div>
                  </div>

              </div>
              <div class="developing-area">
                <div class="profile-single-area">
                  <div class="single-person">
                    <img src="{{ asset('assets/frontend/img/kk2.png') }}" />
                    <p class="single-designation">Prof. Michael Kassiou</p>
                </div>

                </div>
                <div class="profile-single-title">
                  <h3>Developing curriculum for Postgraduate...</h3>
                </div>
                <div class="profile-single-text">
                  <p>You have 35 new proposal</p>
                </div>

              </div>
              <div class="profile-single-button">
                  <button class="btn-fundmilestone">Review Proposal</button>
                </div>
            </div>
          </div>


          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                <div class="in-progress"><p class="btn-inprogress">In Progress</p></div>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                        <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                      </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-show">
                        <li>
                          <a class="dropdown-item " href="#">Invite Experts</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">View Job Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Edit Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Remove Posting</a>
                        </li>
                      </ul>
                    </div>
                  </div>

              </div>
              <div class="developing-area">
                <div class="profile-single-area">
                  <div class="single-person">
                    <img src="{{ asset('assets/frontend/img/kk1.png') }}" />
                    <p class="single-designation">Prof. Michael Kassiou</p>
                </div>

                </div>
                <div class="profile-single-title">
                  <h3>Developing curriculum for Postgraduate...</h3>
                </div>
                <div class="profile-single-text">
                  <p>Fund a new milestone for Paras to keep working</p>
                </div>

              </div>
              <div class="profile-single-button">
                  <button class="btn-fundmilestone">Fund & activate milestone</button>
                </div>
            </div>
          </div>



          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                    <div class="on-hold"><p class="btn-onhold">On hold</p></div>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                        <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                      </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-show">
                        <li>
                          <a class="dropdown-item " href="#">Invite Experts</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">View Job Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Edit Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Remove Posting</a>
                        </li>
                      </ul>
                    </div>
                  </div>

              </div>
              <div class="developing-area">
                <div class="profile-single-area">
                  <div class="single-person">
                    <img src="{{ asset('assets/frontend/img/kk3.png') }}" />
                    <p class="single-designation">Prof. Michael Kassiou</p>
                </div>

                </div>
                <div class="profile-single-title">
                  <h3>Developing curriculum for Postgraduate...</h3>
                </div>
                <div class="profile-single-text">
                  <p>You have 35 new proposal</p>
                </div>
              </div>
              <div class="profile-single-button">
                  <button class="btn-fundmilestone">Restart Contract</button>
                </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area card-with-gradient">
              <div class="inprogress-area">
                <div class="completed"><p class="btn-complated">Completed</p></div>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                        <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                      </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-show">
                        <li>
                          <a class="dropdown-item " href="#">Invite Experts</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">View Job Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Edit Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Remove Posting</a>
                        </li>
                      </ul>
                    </div>
                  </div>

              </div>
              <div class="developing-area">
                <div class="profile-single-area">
                  <div class="single-person">
                    <img src="{{ asset('assets/frontend/img/kk4.png') }}" />
                    <p class="single-designation">Prof. Michael Kassiou</p>
                </div>

                </div>
                <div class="profile-single-title">
                  <h3>Developing curriculum for Postgraduate...</h3>
                </div>
                <div class="rating-area">
                        <div class="profile-feedback">
                        <p>Feedback given</p>
                      </div>
                      <div class="rating-area">
                        <ul>
                          <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#0036E3"/>
                              </svg>
                              </a>
                          </li>
                          <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#0036E3"/>
                              </svg>
                              </a>
                          </li>
                          <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#0036E3"/>
                              </svg>
                              </a>
                          </li>


                          <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#0036E3"/>
                              </svg>
                              </a>
                          </li>

                          <li>
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#C8C5D4"/>
                              </svg>
                              </a>
                          </li>
                        </ul>
                      </div>
                  </div>
                <div class="profile-single-button">
                  <button class="btn-fundmilestone">Rehire</button>
                </div>
              </div>
            </div>
          </div>
        <!-- </div> -->
        </div>

      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

      <div class="owl-carousel owl-carouselfour owl-theme client-home-carousel">

      <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                  <div class="in-hiring">
                  <p class="btn-hiring">Hiring</p>
                  </div>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                        <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                      </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-show">
                        <li>
                          <a class="dropdown-item " href="#">Invite Experts</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">View Job Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Edit Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Remove Posting</a>
                        </li>
                      </ul>
                    </div>
                  </div>

              </div>
              <div class="developing-area">
                <div class="profile-single-area">
                  <div class="single-person">
                    <img src="{{ asset('assets/frontend/img/kk2.png') }}" />
                    <p class="single-designation">Prof. Michael Kassiou</p>
                </div>

                </div>
                <div class="profile-single-title">
                  <h3>Developing curriculum for Postgraduate...</h3>
                </div>
                <div class="profile-single-text">
                  <p>You have 35 new proposal</p>
                </div>

              </div>
              <div class="profile-single-button">
                  <button class="btn-fundmilestone">Review Proposal</button>
                </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                  <div class="in-progress">
                    <p class="btn-inprogress">In Progress</p>
                  </div>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                        <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                      </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-show">
                        <li>
                          <a class="dropdown-item " href="#">Invite Experts</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">View Job Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Edit Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Remove Posting</a>
                        </li>
                      </ul>
                    </div>
                  </div>

              </div>
              <div class="developing-area">
                <div class="profile-single-area">
                  <div class="single-person">
                    <img src="{{ asset('assets/frontend/img/kk1.png') }}" />
                    <p class="single-designation">Prof. Michael Kassiou</p>
                </div>

                </div>
                <div class="profile-single-title">
                  <h3>Developing curriculum for Postgraduate...</h3>
                </div>
                <div class="profile-single-text">
                  <p>Fund a new milestone for Paras to keep working</p>
                </div>

              </div>
              <div class="profile-single-button">
                  <button class="btn-fundmilestone">Fund & activate milestone</button>
                </div>
            </div>
          </div>



          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                <div class="on-hold">
                <p class="btn-onhold">On hold</p>
                </div>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                        <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                      </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-show">
                        <li>
                          <a class="dropdown-item " href="#">Invite Experts</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">View Job Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Edit Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Remove Posting</a>
                        </li>
                      </ul>
                    </div>
                  </div>

              </div>
              <div class="developing-area">
                <div class="profile-single-area">
                  <div class="single-person">
                    <img src="{{ asset('assets/frontend/img/kk3.png') }}" />
                    <p class="single-designation">Prof. Michael Kassiou</p>
                </div>

                </div>
                <div class="profile-single-title">
                  <h3>Developing curriculum for Postgraduate...</h3>
                </div>
                <div class="profile-single-text">
                  <p>You have 35 new proposal</p>
                </div>

              </div>
              <div class="profile-single-button">
                  <button class="btn-fundmilestone">Restart Contract</button>
                </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area card-with-gradient">
              <div class="inprogress-area">
                  <div class="completed"><p class="btn-complated">Completed</p></div>
                <div class="draft-options">
                    <div class="dropdown position-relative">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                        <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                      </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-show homedropdown">
                        <li>
                          <a class="dropdown-item " href="#">Invite Experts</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">View Job Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Edit Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Remove Posting</a>
                        </li>
                      </ul>
                    </div>
                  </div>

              </div>
              <div class="developing-area">
                <div class="profile-single-area">
                  <div class="single-person">
                    <img src="{{ asset('assets/frontend/img/kk4.png') }}" />
                    <p class="single-designation">Prof. Michael Kassiou</p>
                </div>

                </div>
                <div class="profile-single-title">
                  <h3>Developing curriculum for Postgraduate...</h3>
                </div>
                <div class="rating-area">
                        <div class="profile-feedback">
                        <p>Feedback given</p>
                      </div>
                      <div class="rating-area">
                        <ul>
                          <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#0036E3"/>
                              </svg>
                              </a>
                          </li>
                          <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#0036E3"/>
                              </svg>
                              </a>
                          </li>
                          <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#0036E3"/>
                              </svg>
                              </a>
                          </li>


                          <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#0036E3"/>
                              </svg>
                              </a>
                          </li>

                          <li>
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#C8C5D4"/>
                              </svg>
                              </a>
                          </li>
                        </ul>
                      </div>
                  </div>
              </div>
              <div class="profile-single-button">
                  <button class="btn-fundmilestone">Rehire</button>
                </div>
            </div>
          </div>




          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                <div class="in-progress"><p class="btn-inprogress">In Progress</p></div>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                        <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                      </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-show">
                        <li>
                          <a class="dropdown-item " href="#">Invite Experts</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">View Job Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Edit Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Remove Posting</a>
                        </li>
                      </ul>
                    </div>
                  </div>

              </div>
              <div class="developing-area">
                <div class="profile-single-area">
                  <div class="single-person">
                    <img src="{{ asset('assets/frontend/img/kk1.png') }}" />
                    <p class="single-designation">Prof. Michael Kassiou</p>
                </div>

                </div>
                <div class="profile-single-title">
                  <h3>Developing curriculum for Postgraduate...</h3>
                </div>
                <div class="profile-single-text">
                  <p>Fund a new milestone for Paras to keep working</p>
                </div>

              </div>
              <div class="profile-single-button">
                  <button class="btn-fundmilestone">Fund & activate milestone</button>
                </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                <div class="in-hiring">
                 <p class="btn-hiring">Hiring</p>
                </div>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                        <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                      </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-show">
                        <li>
                          <a class="dropdown-item " href="#">Invite Experts</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">View Job Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Edit Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Remove Posting</a>
                        </li>
                      </ul>
                    </div>
                  </div>

              </div>
              <div class="developing-area">
                <div class="profile-single-area">
                  <div class="single-person">
                    <img src="{{ asset('assets/frontend/img/kk2.png') }}" />
                    <p class="single-designation">Prof. Michael Kassiou</p>
                </div>

                </div>
                <div class="profile-single-title">
                  <h3>Developing curriculum for Postgraduate...</h3>
                </div>
                <div class="profile-single-text">
                  <p>You have 35 new proposal</p>
                </div>
              </div>
              <div class="profile-single-button">
                  <button class="btn-fundmilestone">Review Proposal</button>
                </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                    <div class="on-hold"><p class="btn-onhold">On hold</p></div>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                        <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                      </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-show">
                        <li>
                          <a class="dropdown-item " href="#">Invite Experts</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">View Job Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Edit Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Remove Posting</a>
                        </li>
                      </ul>
                    </div>
                  </div>

              </div>
              <div class="developing-area">
                <div class="profile-single-area">
                  <div class="single-person">
                    <img src="{{ asset('assets/frontend/img/kk3.png') }}" />
                    <p class="single-designation">Prof. Michael Kassiou</p>
                </div>

                </div>
                <div class="profile-single-title">
                  <h3>Developing curriculum for Postgraduate...</h3>
                </div>
                <div class="profile-single-text">
                  <p>You have 35 new proposal</p>
                </div>

              </div>
              <div class="profile-single-button">
                  <button class="btn-fundmilestone">Restart Contract</button>
                </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area card-with-gradient">
              <div class="inprogress-area">
                <div class="completed"><p class="btn-complated">Completed</p></div>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                        <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                      </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-show">
                        <li>
                          <a class="dropdown-item " href="#">Invite Experts</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">View Job Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Edit Posting</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Remove Posting</a>
                        </li>
                      </ul>
                    </div>
                  </div>

              </div>
              <div class="developing-area">
                <div class="profile-single-area">
                  <div class="single-person">
                    <img src="{{ asset('assets/frontend/img/kk4.png') }}" />
                    <p class="single-designation">Prof. Michael Kassiou</p>
                </div>

                </div>
                <div class="profile-single-title">
                  <h3>Developing curriculum for Postgraduate...</h3>
                </div>
                <div class="rating-area">
                        <div class="profile-feedback">
                        <p>Feedback given</p>
                      </div>
                      <div class="rating-area">
                        <ul>
                          <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#0036E3"/>
                              </svg>
                              </a>
                          </li>
                          <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#0036E3"/>
                              </svg>
                              </a>
                          </li>
                          <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#0036E3"/>
                              </svg>
                              </a>
                          </li>


                          <li>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#0036E3"/>
                              </svg>
                              </a>
                          </li>

                          <li>
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.5002 14.3916L13.9585 16.4833C14.5918 16.8666 15.3668 16.3 15.2002 15.5833L14.2835 11.65L17.3418 8.99997C17.9002 8.51663 17.6002 7.59997 16.8668 7.54163L12.8419 7.19997L11.2668 3.4833C10.9835 2.8083 10.0168 2.8083 9.73352 3.4833L8.15852 7.19163L4.13352 7.5333C3.40018 7.59163 3.10018 8.5083 3.65852 8.99163L6.71685 11.6416L5.80018 15.575C5.63352 16.2916 6.40852 16.8583 7.04185 16.475L10.5002 14.3916Z" fill="#C8C5D4"/>
                              </svg>
                              </a>
                          </li>
                        </ul>
                      </div>
                  </div>
                <div class="profile-single-button">
                  <button class="btn-fundmilestone">Rehire</button>
                </div>
              </div>
            </div>
          </div>
        <!-- </div> -->
        </div>

      </div>
    </div>
  </div>

  <div class="row">


  <div class="academic-block academic-block-client">
      <div class="container px-5">
        <div class="heading client-heading">
          <h2>Upcoming Academic Training</h2>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="live-zoom">
              <div class="zoom-icon">
                <img src="{{ asset('assets/frontend/img/zoom-icon.png') }} " ></img>
                <h4>Live via Zoom</h4>
              </div>
              <p>Mon Aug 28 – Wed Aug 30, 2023, from 10am – 3pm daily (Australian Eastern Standard Time)</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="training">
              <h3>Statistics with R*</h3>
              <div class="training-text">
                <span>Instructor:</span>
                <a href="#">Cameron Williamson</a>
                <a href="#">Guy Hawkins</a>
              </div>
              <h6>Language: <span>French</span></h6>
            </div>
          </div>
          <div class="col-md-5">
            <div class="training-button">
              <a href="#" class="training-registered">Registered</a>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="live-zoom">
              <div class="zoom-icon">
                <img src="{{ asset('assets/frontend/img/zoom-icon.png') }}"></img>
                <h4>Live via Zoom</h4>
              </div>
              <p>Mon Aug 28 – Wed Aug 30, 2023, from 10am – 3pm daily (Australian Eastern Standard Time)</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="training">
              <h3>Longitudinal Data Analysis Using Stata</h3>
              <div class="training-text">
                <span>Instructor:</span>
                <a href="#">Marvin McKinney</a>
                <a href="#">Wade Warren</a>
              </div>
              <h6>Language: <span>French</span></h6>
            </div>
          </div>
          <div class="col-md-5">
            <div class="training-button">
              <a href="#">Registration</a>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="live-zoom">
              <div class="zoom-icon">
                <img src="{{ asset('assets/frontend/img/zoom-icon.png') }}"></img>
                <h4>Live via Zoom</h4>
              </div>
              <p>Mon Aug 28 – Wed Aug 30, 2023, from 10am – 3pm daily (Australian Eastern Standard Time)</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="training">
              <h3>Multilevel and Mixed Models Using Stata</h3>
              <div class="training-text">
                <span>Instructor:</span>
                <a href="#">Leslie Alexander</a>
                <a href="#">Jacob Jones</a>
              </div>
              <h6>Language: <span>French</span></h6>
            </div>
          </div>
          <div class="col-md-5">
            <div class="training-button">
              <a href="#">Registration</a>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


  <div class="row">
      <div class="all-job-area edux-all-job-area d-flex justify-content-between">
        <div class="all-project">
          <h2>Discover our Experts</h2>
        </div>
        <div class="view-all-expert">
          <button type="button" class="btn btn-primary edux-btn-primary">View All Experts</button>
        </div>
      </div>
  </div>
  <div class="row">
        <div class="owl-carousel owl-carouselfour  owl-theme rate-caurasel discover-carousel mb-4">
          <div class="item">
            <div class="single-card-area discover-gradient">
              <div class="developing-area">
                <div class="discover-single-area">
                  <div class="discover-single-person">
                    <div class="notify-img position-relative">
                    <img src="{{ asset('assets/frontend/img/k1.png') }}" />
                      <span class="notify-point-green"></span>
                    </div>
                    <div class="profile-single-title-vs">
                      <h3>Kathryn Murphy</h3>
                      <p class="single-designation">Accreditation Specialist </p>
                      <p class="single-university">Oxford University </p>
                    </div>
                    <div class="hourly-rate-area">
                      <span class="country-rate">Australia</span>
                      <span class="country-divided"></span>
                      <span class="country-rate">$200/hr</span>
                    </div>
                </div>
                </div>
                <div class="profile-single-button">
                  <button type="button" class="btn btn-fundmilestone btn-viewprofile">View Profile</button>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area">
              <div class="developing-area">
                <div class="discover-single-area">
                  <div class="discover-single-person">
                    <div class="notify-img position-relative">
                    <img src="{{ asset('assets/frontend/img/k2.png') }}" />
                      <span class="notify-point-gray"></span>
                    </div>
                    <div class="profile-single-title-vs">
                      <h3>Kathryn Murphy</h3>
                      <p class="single-designation">Accreditation Specialist </p>
                      <p class="single-university">Oxford University </p>
                    </div>
                    <div class="hourly-rate-area">
                      <span class="country-rate">UK</span>
                      <span class="country-divided"></span>
                      <span class="country-rate">$200/hr</span>
                    </div>
                </div>
                </div>
                <div class="profile-single-button">
                <button type="button" class="btn btn-fundmilestone btn-viewprofile">View Profile</button>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area">
              <div class="developing-area">
                <div class="discover-single-area">
                  <div class="discover-single-person">
                    <div class="notify-img position-relative">
                    <img src="{{ asset('assets/frontend/img/k3.png') }}" />
                      <span class="notify-point-yellow"></span>
                    </div>
                    <div class="profile-single-title-vs">
                      <h3>Kathryn Murphy</h3>
                      <p class="single-designation">Accreditation Specialist </p>
                      <p class="single-university">Oxford University </p>
                    </div>
                    <div class="hourly-rate-area">
                      <span class="country-rate">Canada</span>
                      <span class="country-divided"></span>
                      <span class="country-rate">$200/hr</span>
                    </div>
                </div>
                </div>
                <div class="profile-single-button">
                <button type="button" class="btn btn-fundmilestone btn-viewprofile">View Profile</button>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="single-card-area">
              <div class="developing-area">
                <div class="discover-single-area">
                  <div class="discover-single-person">
                    <div class="notify-img position-relative">
                    <img src="{{ asset('assets/frontend/img/k4.png') }}" />
                      <span class="notify-point-green"></span>
                    </div>
                    <div class="profile-single-title-vs">
                      <h3>Kathryn Murphy</h3>
                      <p class="single-designation">Accreditation Specialist </p>
                      <p class="single-university">Oxford University </p>
                    </div>
                    <div class="hourly-rate-area">
                      <span class="country-rate">Australia</span>
                      <span class="country-divided"></span>
                      <span class="country-rate">$200/hr</span>
                    </div>
                </div>
                </div>
                <div class="profile-single-button">
                <button type="button" class="btn btn-fundmilestone btn-viewprofile">View Profile</button>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="single-card-area">
              <div class="developing-area">
                <div class="discover-single-area">
                  <div class="discover-single-person">
                    <div class="notify-img position-relative">
                    <img src="{{ asset('assets/frontend/img/k1.png') }}" />
                      <span class="notify-point-green"></span>
                    </div>
                    <div class="profile-single-title-vs">
                      <h3>Kathryn Murphy</h3>
                      <p class="single-designation">Accreditation Specialist </p>
                      <p class="single-university">Oxford University </p>
                    </div>
                    <div class="hourly-rate-area">
                      <span class="country-rate">Australia</span>
                      <span class="country-divided"></span>
                      <span class="country-rate">$200/hr</span>
                    </div>
                </div>
                </div>
                <div class="profile-single-button">
                <button type="button" class="btn btn-fundmilestone btn-viewprofile">View Profile</button>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="single-card-area">
              <div class="developing-area">
                <div class="discover-single-area">
                  <div class="discover-single-person">
                    <div class="notify-img position-relative">
                    <img src="{{ asset('assets/frontend/img/k2.png') }}" />
                      <span class="notify-point-gray"></span>
                    </div>
                    <div class="profile-single-title-vs">
                      <h3>Kathryn Murphy</h3>
                      <p class="single-designation">Accreditation Specialist </p>
                      <p class="single-university">Oxford University </p>
                    </div>
                    <div class="hourly-rate-area">
                      <span class="country-rate">UK</span>
                      <span class="country-divided"></span>
                      <span class="country-rate">$200/hr</span>
                    </div>
                </div>
                </div>
                <div class="profile-single-button">
                <button type="button" class="btn btn-fundmilestone btn-viewprofile">View Profile</button>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="single-card-area">
              <div class="developing-area">
                <div class="discover-single-area">
                  <div class="discover-single-person">
                    <div class="notify-img position-relative">
                    <img src="{{ asset('assets/frontend/img/k3.png') }}" />
                      <span class="notify-point-yellow"></span>
                    </div>
                    <div class="profile-single-title-vs">
                      <h3>Kathryn Murphy</h3>
                      <p class="single-designation">Accreditation Specialist </p>
                      <p class="single-university">Oxford University </p>
                    </div>
                    <div class="hourly-rate-area">
                      <span class="country-rate">Canada</span>
                      <span class="country-divided"></span>
                      <span class="country-rate">$200/hr</span>
                    </div>
                </div>
                </div>
                <div class="profile-single-button">
                <button type="button" class="btn btn-fundmilestone btn-viewprofile">View Profile</button>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="single-card-area">
              <div class="developing-area">
                <div class="discover-single-area">
                  <div class="discover-single-person">
                    <div class="notify-img position-relative">
                    <img src="{{ asset('assets/frontend/img/k4.png') }}" />
                      <span class="notify-point-green"></span>
                    </div>
                    <div class="profile-single-title-vs">
                      <h3>Kathryn Murphy</h3>
                      <p class="single-designation">Accreditation Specialist </p>
                      <p class="single-university">Oxford University </p>
                    </div>
                    <div class="hourly-rate-area">
                      <span class="country-rate">Australia</span>
                      <span class="country-divided"></span>
                      <span class="country-rate">$200/hr</span>
                    </div>
                </div>
                </div>
                <div class="profile-single-button">
                <button type="button" class="btn btn-fundmilestone btn-viewprofile">View Profile</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
  </div>
</div>

</section>

<section class="team-area">
  <div class="container">
    <div class="row">
      <div class="col-md-5 p-0">
        <div class="single-team-text">
          <p>Team</p>
          <h3>Build on Demand Teams for your Education Institution</h3>
          <p class="hire-details">Hire in under 48 hours. Scale up or down, no strings attached. We offer flexible engagements from hourly to full-time.Hire in under 48 hours. Scale up or down, no strings attached. We offer flexible engagements from hourly to full-time. Hire in unde</p>
          <div class="post-job">
            <button type="button" class="btn btn-primary edux-btn-primary">Get Started</button>
        </div>
        </div>
      </div>
      <div class="col-md-7 p-0">
      <div class="single-team-member-area">
        <div class="single-team-member-row">

          <div class="single-team-member">
            <div class="single-person-deniyel">
              <img src="{{ asset('assets/frontend/img/img6.png') }}" alt="person">
            </div>
            <div class="person-details">
              <h3>Darrell Steward</h3>
              <p>Accreditation Specialist</p>
            </div>
          </div>
          <div class="single-team-member">
            <div class="single-person-deniyel">
              <img src="{{ asset('assets/frontend/img/img4.png') }}" alt="person">
            </div>
            <div class="person-details">
              <h3>Darrell Steward</h3>
              <p>Accreditation Specialist</p>
            </div>
          </div>
          <div class="single-team-member">
            <div class="single-person-deniyel">
              <img src="{{ asset('assets/frontend/img/img5.png') }}" alt="person">
            </div>
            <div class="person-details">
              <h3>Darrell Steward</h3>
              <p>Accreditation Specialist</p>
            </div>
          </div>
        </div>
        <div class="single-team-member-row">

        <div class="single-team-member">
            <div class="single-person-deniyel">
              <img src="{{ asset('assets/frontend/img/img7.png') }}" alt="person">
            </div>
            <div class="person-details">
              <h3>Darrell Steward</h3>
              <p>Accreditation Specialist</p>
            </div>
          </div>
          <div class="single-team-member">
            <div class="single-person-deniyel">
              <img src="{{ asset('assets/frontend/img/img5.png') }}" alt="person">
            </div>
            <div class="person-details">
              <h3>Darrell Steward</h3>
              <p>Accreditation Specialist</p>
            </div>
          </div>
          <div class="single-team-member">
            <div class="single-person-deniyel">
              <img src="{{ asset('assets/frontend/img/img8.png') }}" alt="person">
            </div>
            <div class="person-details">
              <h3>Darrell Steward</h3>
              <p>Accreditation Specialist</p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>
@endsection
