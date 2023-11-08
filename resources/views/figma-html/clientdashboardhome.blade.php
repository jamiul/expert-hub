@extends('frontend.layouts.front-client-dashboard-layoutmain')

@section('content')

<section class="client-dashboard mx-auto my-5">

<div class="container">
<div class="row">
      <div class="all-job-area d-flex justify-content-between">
        <div class="all-project">
          <h2>Your workspace</h2>
        </div>
        <div class="post-job">
          <button class="btn btn-postjob"> <span class="addall"><span class="material-symbols-outlined">add</span></span> Post a Job</button>
        </div>
      </div>
  </div>

  <div class="row alljob-short">
    <div class="col">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active all-job-tab" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All Job post</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link all-job-tab" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">All Contracts</button>
      </li>
    </ul>
    </div>
    <div class="col">
      <div class="shorting-area">
        <p class="short-title">Short by :</p>
        <div class="short-option">
          <select class="form-select" aria-label="Default select example">
            <option selected>All</option>
            <option value="1">All</option>
            <option value="2">All</option>
            <option value="3">All</option>
          </select>
        </div>
      </div>
    </div>

  </div>

  <div class="row owlp-bottom">

      <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    
        <!-- <div class="row"> -->
        <div class="owl-carousel owl-theme client-home-carousel">
          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                <button class="btn-inprogress">In Progress</button>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
                <div class="profile-single-button">
                  <button class="btn-fundmilestone">Fund & activate milestone</button>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                <button class="btn-hiring">Hiring</button>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
                <div class="profile-single-button">
                  <button class="btn-fundmilestone">Review Proposal</button>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                <button class="btn-onhold">On hold</button>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
                <div class="profile-single-button">
                  <button class="btn-fundmilestone">Restart Contract</button>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area card-with-gradient">
              <div class="inprogress-area">
                <button class="btn-complated">Completed</button>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
                        <h6>Feedback given</h6>
                      </div>
                      <div class="rating-area">
                        <ul>
                          <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                          <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                          <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                          <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                          <li><a href="#"><i class="fa-solid fa-star default-star"></i></a></li>
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
                <button class="btn-inprogress">In Progress</button>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
                <div class="profile-single-button">
                  <button class="btn-fundmilestone">Fund & activate milestone</button>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                <button class="btn-hiring">Hiring</button>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
                <div class="profile-single-button">
                  <button class="btn-fundmilestone">Review Proposal</button>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                <button class="btn-onhold">On hold</button>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
                <div class="profile-single-button">
                  <button class="btn-fundmilestone">Restart Contract</button>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area card-with-gradient">
              <div class="inprogress-area">
                <button class="btn-complated">Completed</button>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
                        <h6>Feedback given</h6>
                      </div>
                      <div class="rating-area">
                        <ul>
                          <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                          <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                          <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                          <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                          <li><a href="#"><i class="fa-solid fa-star default-star"></i></a></li>
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
      <div class="owl-carousel owl-theme client-home-carousel">
          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                <button class="btn-inprogress">In Progress</button>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
                <div class="profile-single-button">
                  <button class="btn-fundmilestone">Fund & activate milestone</button>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                <button class="btn-hiring">Hiring</button>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
                  <p>Fund a new milestone for Paras to keep working</p>
                </div>
                <div class="profile-single-button">
                  <button class="btn-fundmilestone">Review Proposal</button>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                <button class="btn-onhold">On hold</button>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
                  <p>Fund a new milestone for Paras to keep working</p>
                </div>
                <div class="profile-single-button">
                  <button class="btn-fundmilestone">Restart Contract</button>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area card-with-gradient">
              <div class="inprogress-area">
                <button class="btn-complated">Completed</button>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
                <div class="profile-single-text">
                  <h6>Feedback given</h6>
                </div>
                <div class="rating-area">
                  <ul>
                    <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-star default-star"></i></a></li>
                  </ul>
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
                <button class="btn-inprogress">In Progress</button>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
                <div class="profile-single-button">
                  <button class="btn-fundmilestone">Fund & activate milestone</button>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                <button class="btn-hiring">Hiring</button>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
                  <p>Fund a new milestone for Paras to keep working</p>
                </div>
                <div class="profile-single-button">
                  <button class="btn-fundmilestone">Review Proposal</button>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area">
              <div class="inprogress-area">
                <button class="btn-onhold">On hold</button>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
                  <p>Fund a new milestone for Paras to keep working</p>
                </div>
                <div class="profile-single-button">
                  <button class="btn-fundmilestone">Restart Contract</button>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-card-area card-with-gradient">
              <div class="inprogress-area">
                <button class="btn-complated">Completed</button>
                <div class="draft-options">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
                <div class="profile-single-text">
                  <p>Fund a new milestone for Paras to keep working</p>
                </div>
                <div class="profile-single-button">
                  <button class="btn-fundmilestone">Rehire</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
      <div class="all-job-area d-flex justify-content-between">
        <div class="all-project">
          <h2>Discover our Experts</h2>
        </div>
        <div class="post-job">
          <button class="btn btn-postjob"> View All Experts</button>
        </div>
      </div>
  </div>
  <!-- owl carousel 2  Start Here -->
  <div class="row owlp-bottom">
        <div class="owl-carousel owl-theme rate-caurasel discover-carousel">
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
                  <button class="btn-viewprofile">View Profile</button>
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
                  <button class="btn-viewprofile">View Profile</button>
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
                  <button class="btn-viewprofile">View Profile</button>
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
                  <button class="btn-viewprofile">View Profile</button>
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
                  <button class="btn-viewprofile">View Profile</button>
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
                  <button class="btn-viewprofile">View Profile</button>
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
                  <button class="btn-viewprofile">View Profile</button>
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
                  <button class="btn-viewprofile">View Profile</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
  </div>
  <!-- owl carousel 2  Edn Here -->
</div>

</section>

<section class="team-area">
  <div class="container">
    <div class="row">
      <div class="col-5 p-0">
        <div class="single-team-text">
          <p>Team</p>
          <h3>Build on Demand Teams for your Education Institution</h3>
          <p class="hire-details">Hire in under 48 hours. Scale up or down, no strings attached. We offer flexible engagements from hourly to full-time.Hire in under 48 hours. Scale up or down, no strings attached. We offer flexible engagements from hourly to full-time. Hire in unde</p>
          <div class="post-job">
            <button class="btn btn-postjob">Get Started</button>
        </div>
        </div>
      </div>
      <div class="col-7 p-0">
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
