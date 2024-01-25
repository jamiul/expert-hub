@extends('frontend.layouts.figma', ['header' => 'default'])
@section('content')
    <div class="product-slider">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
          <div class="carousel-w">
            <div class="hero-contant">
              <div class="hero-text">
                <h2>Find a Top Academic <br> Expert for Your Project</h2>
                <p>EduExHub is an exclusive platform featuring top academic experts across <br> diverse fields. Whether it's a personal or institutional project</p>
                <div class="hero-button">
                  <a href="#">Find an Expert</a>
                  <a href="#">Become an Expert</a>
                </div>
              </div>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
              <img src="{{ asset('assets/frontend/img/img2.png') }}" alt="person">
                <div class="item-text">
                  <a href="#">
                    <img src="{{ asset('assets/frontend/img/map-img.png') }}" alt="person">
                    <h4>Jenny Wilson</h4>
                    <p>Curriculum Development</p>
                    <h5>Oxford University</h5>
                  </a>
                </div>
              </div>
              <div class="carousel-item">
              <img src="{{ asset('assets/frontend/img/img1.png') }}" alt="person">
                <div class="item-text">
                  <a href="#">
                    <img src="{{ asset('assets/frontend/img/map-img.png') }}" alt="person">
                    <h4>Bessie Cooper</h4>
                    <p>Research &amp; Analysis</p>
                    <h5>Oxford University</h5>
                  </a>
                </div>
              </div>
              <div class="carousel-item">
              <img src="{{ asset('assets/frontend/img/img3.png') }}" alt="person">
                <div class="item-text">
                  <a href="#">
                    <img src="{{ asset('assets/frontend/img/map-img.png') }}" alt="person">
                    <h4>Jane Cooper</h4>
                    <p>Public Health</p>
                    <h5>Oxford University</h5>
                  </a>
                </div>
              </div>
              <div class="carousel-item">
              <img src="{{ asset('assets/frontend/img/img4.png') }}" alt="person">
                <div class="item-text">
                  <a href="#">
                    <img src="{{ asset('assets/frontend/img/map-img.png') }}" alt="person">
                    <h4>Kristin Watson</h4>
                    <p>LMS Expert</p>
                    <h5>Oxford University</h5>
                  </a>
                </div>
              </div>
              <div class="carousel-item">
              <img src="{{ asset('assets/frontend/img/img5.png') }}" alt="person">
                <div class="item-text">
                  <a href="#">
                    <img src="{{ asset('assets/frontend/img/map-img.png') }}" alt="person">
                    <h4>Theresa Webb</h4>
                    <p>Educational Assessment</p>
                    <h5>Oxford University</h5>
                  </a>
                </div>
              </div>
              <div class="carousel-item">
              <img src="{{ asset('assets/frontend/img/img6.png') }}" alt="person">
                <div class="item-text">
                  <a href="#">
                    <img src="{{ asset('assets/frontend/img/map-img.png') }}" alt="person">
                    <h4>Arlene McCoy</h4>
                    <p>Research &amp; Analysis</p>
                    <h5>Oxford University</h5>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
              <div class="carousel-con">
                <div class="carousel-img">
                  <img src="{{ asset('assets/frontend/img/img2.png') }}" alt="person">
                </div>
                <div class="carousel-text">
                  <h4>Jenny Wilson</h4>
                  <p>Curriculum Development</p>
                </div>
              </div>
            </button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
              <div class="carousel-con">
                <div class="carousel-img">
                <img src="{{ asset('assets/frontend/img/img1.png') }}" alt="person">
                </div>
                <div class="carousel-text">
                  <h4>Bessie Cooper</h4>
                  <p>Research &amp; Analysis</p>
                </div>
              </div>
            </button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
              <div class="carousel-con">
                <div class="carousel-img">
                <img src="{{ asset('assets/frontend/img/img3.png') }}" alt="person">
                </div>
                <div class="carousel-text">
                  <h4>Jane Cooper</h4>
                  <p>Public Health</p>
                </div>
              </div>
            </button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4">
              <div class="carousel-con">
                <div class="carousel-img">
                <img src="{{ asset('assets/frontend/img/img4.png') }}" alt="person">
                </div>
                <div class="carousel-text">
                  <h4>Kristin Watson</h4>
                  <p>LMS Ecpert</p>
                </div>
              </div>
            </button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5">
              <div class="carousel-con">
                <div class="carousel-img">
                <img src="{{ asset('assets/frontend/img/img5.png') }}" alt="person">
                </div>
                <div class="carousel-text">
                  <h4>Theresa Webb</h4>
                  <p>Educational Assessment</p>
                </div>
              </div>
            </button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6">
              <div class="carousel-con">
                <div class="carousel-img">
                <img src="{{ asset('assets/frontend/img/img6.png') }}" alt="person">
                </div>
                <div class="carousel-text">
                  <h4>Ariene McCoy</h4>
                  <p>Research &amp; Analysis</p>
                </div>
              </div>
            </button>
          </div>
          <div class="carousel-control">

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="material-symbols-outlined">navigate_next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="require-main">
      <div class="container">
        <div class="heading">
          <h4>Require steps</h4>
          <h2>Search Academic Expert Made Easy</h2>
          <p>We are the largest, globally connected network of top academic talent, and we're prepared to tackle your most critical projects.</p>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="require-block">
              <div class="require-arrow">
                <img src="images/require-arrow.png"></img>
              </div>
              <div class="require-img">
                <img src="images/require1.png"></img>
                <img class="number"src="images/require-n1.png"></img>
              </div>
              <div class="require-text">
                <h3>Post Academic <br> Projects</h3>
                <p>Whether it is a personal, institutional project, or media interviews, our pool of top academic experts are here to assist.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="require-block">
              <div class="require-arrow">
                <img src="images/require-arrow.png"></img>
              </div>
              <div class="require-img">
                <img src="images/require2.png"></img>
                <img class="number"src="images/require-n2.png"></img>
              </div>
              <div class="require-text">
                <h3>Receive Project <br> Interest</h3>
                <p>Review expressions of interest from our network of academic experts who are interested in working on your project.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="require-block">
              <div class="require-arrow">
                <img src="images/require-arrow.png"></img>
              </div>
              <div class="require-img">
                <img src="images/require3.png"></img>
                <img class="number"src="images/require-n3.png"></img>
              </div>
              <div class="require-text">
                <h3>Select the Best <br> Match for you</h3>
                <p>Make an informed decision to choose the academic expert who best matches your project needs and objectives.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="require-block">
              <div class="require-img">
                <img src="images/require4.png"></img>
                <img class="number"src="images/require-n4.png"></img>
              </div>
              <div class="require-text">
                <h3>Pay <br> Security</h3>
                <p>Payment held in escrow until project is complete to your satisfection</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="experts-main">
      <div class="container">
        <div class="heading">
          <h4>Experts area</h4>
          <h2>Search Experts by Field</h2>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="experts-block">
              <div class="experts-img">
                <a href="#"><img src="{{ asset('assets/frontend/img/experts1.jpg') }}" alt=""></img> </a>
              </div>
              <div class="experts-text">
                <h3><a href="#">Agriculture</a></h3>
                <p>I am ready to serve you anything course related academics help. Don't hesitate me to contact.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="experts-block">
              <div class="experts-img">
                <a href="#"><img src="{{ asset('assets/frontend/img/experts2.jpg') }}" alt=""></img></img></a>
              </div>
              <div class="experts-text">
                <h3><a href="#">Architecture</a></h3>
                <p>I am ready to serve you anything course related academics help. Don't hesitate me to contact.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="experts-block">
              <div class="experts-img">
                <a href="#"><img src="{{ asset('assets/frontend/img/experts3.jpg') }}" alt=""></img></a>
              </div>
              <div class="experts-text">
                <h3><a href="#">Business</a></h3>
                <p>I am ready to serve you anything course related academics help. Don't hesitate me to contact.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="experts-block">
              <div class="experts-img">
                <a href="#"><img src="{{ asset('assets/frontend/img/experts4.jpg') }}" alt=""></img></a>
              </div>
              <div class="experts-text">
                <h3><a href="#">Engineering</a></h3>
                <p>I am ready to serve you anything course related academics help. Don't hesitate me to contact.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="experts-block">
              <div class="experts-img">
                <a href="#"><img src="{{ asset('assets/frontend/img/experts5.jpg') }}" alt=""></img></a>
              </div>
              <div class="experts-text">
                <h3><a href="#">Social Science</a></h3>
                <p>I am ready to serve you anything course related academics help. Don't hesitate me to contact.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="experts-block">
              <div class="experts-img">
                <a href="#"><img src="{{ asset('assets/frontend/img/experts6.jpg') }}" alt=""></img></a>
              </div>
              <div class="experts-text">
                <h3><a href="#">Medicine</a></h3>
                <p>I am ready to serve you anything course related academics help. Don't hesitate me to contact.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="experts-block">
              <div class="experts-img">
                <a href="#"><img src="{{ asset('assets/frontend/img/experts7.jpg') }}" alt=""></img></a>
              </div>
              <div class="experts-text">
                <h3><a href="#">Environmental Science</a></h3>
                <p>I am ready to serve you anything course related academics help. Don't hesitate me to contact.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="experts-block">
              <div class="experts-img">
                <a href="#"><img src="{{ asset('assets/frontend/img/experts8.jpg') }}" alt=""></img></a>
              </div>
              <div class="experts-text">
                <h3><a href="#">Science</a></h3>
                <p>I am ready to serve you anything course related academics help. Don't hesitate me to contact.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="experts-button">
          <a href="#">View All Categories</a>
        </div>
      </div>
    </div>
    <div class="categories-main">
      <div class="container">
        <div class="heading">
          <h4>Categories</h4>
          <h2>Browse Experts by Category <br> of Expertise</h2>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="categories-block">
              <div class="categories-img">
                <a href="#"><img src="{{ asset('assets/frontend/img/categories1.jpg') }}" alt=""></img></a>
              </div>
              <div class="categories-text">
                <h3><a href="#">Accreditation Specialist</a></h3>
                <div class="categories-review">
                  <div class="review">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="review-text">45 Review</div>
                </div>
              </div>
              <div class="categories-available">
                <div class="available-img">
                  <img src="{{ asset('assets/frontend/img/available-img.png') }}" alt=""></img>
                </div>
                <div class="available-text">+ 120 Available</div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="categories-block">
              <div class="categories-img">
                <a href="#"> <img src="{{ asset('assets/frontend/img/categories2.jpg') }}" alt=""></img></a>
              </div>
              <div class="categories-text">
                <h3><a href="#">Curriculum Experts</a></h3>
                <div class="categories-review">
                  <div class="review">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="review-text">45 Review</div>
                </div>
              </div>
              <div class="categories-available">
                <div class="available-img">
                <img src="{{ asset('assets/frontend/img/available-img.png') }}" alt=""></img>
                </div>
                <div class="available-text">+ 120 Available</div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="categories-block">
              <div class="categories-img">
                <a href="#">

                  <img src="{{ asset('assets/frontend/img/categories3.jpg') }}" alt=""></img>
                </a>
              </div>
              <div class="categories-text">
                <h3><a href="#">Program Designers</a></h3>
                <div class="categories-review">
                  <div class="review">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="review-text">45 Review</div>
                </div>
              </div>
              <div class="categories-available">
                <div class="available-img">
                  <img src="{{ asset('assets/frontend/img/available-img.png') }}" alt=""></img>
                </div>
                <div class="available-text">+ 120 Available</div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="categories-block">
              <div class="categories-img">
                <a href="#">
                  <img src="{{ asset('assets/frontend/img/categories4.jpg') }}" alt=""></img>
                </a>
              </div>
              <div class="categories-text">
                <h3><a href="#">LMS Experts</a></h3>
                <div class="categories-review">
                  <div class="review">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="review-text">45 Review</div>
                </div>
              </div>
              <div class="categories-available">
                <div class="available-img">
                  <img src="{{ asset('assets/frontend/img/available-img.png') }}" alt=""></img>
                </div>
                <div class="available-text">+ 120 Available</div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="categories-block">
              <div class="categories-img">
                <a href="#">
                  <img src="{{ asset('assets/frontend/img/categories5.jpg') }}" alt=""></img>
                </a>
              </div>
              <div class="categories-text">
                <h3><a href="#">Industry Experts</a></h3>
                <div class="categories-review">
                  <div class="review">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="review-text">45 Review</div>
                </div>
              </div>
              <div class="categories-available">
                <div class="available-img">
                <img src="{{ asset('assets/frontend/img/available-img.png') }}" alt=""></img>
                </div>
                <div class="available-text">+ 120 Available</div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="categories-block">
              <div class="categories-img">
                <a href="#">
                  <img src="{{ asset('assets/frontend/img/categories6.jpg') }}" alt=""></img>
                </a>
              </div>
              <div class="categories-text">
                <h3><a href="#">Finance Experts</a></h3>
                <div class="categories-review">
                  <div class="review">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="review-text">45 Review</div>
                </div>
              </div>
              <div class="categories-available">
                <div class="available-img">
                <img src="{{ asset('assets/frontend/img/available-img.png') }}" alt=""></img>
                </div>
                <div class="available-text">+ 120 Available</div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="categories-block">
              <div class="categories-img">
                <a href="#">
                  <img src="{{ asset('assets/frontend/img/categories7.jpg') }}" alt=""></img>
                </a>
              </div>
              <div class="categories-text">
                <h3><a href="#">Project Managers</a></h3>
                <div class="categories-review">
                  <div class="review">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="review-text">45 Review</div>
                </div>
              </div>
              <div class="categories-available">
                <div class="available-img">
                <img src="{{ asset('assets/frontend/img/available-img.png') }}" alt=""></img>
                </div>
                <div class="available-text">+ 120 Available</div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="categories-block">
              <div class="categories-img">
                <a href="#">
                  <img src="{{ asset('assets/frontend/img/categories8.jpg') }}" alt=""></img>
                </a>
              </div>
              <div class="categories-text">
                <h3><a href="#">Scholarships Advisor</a></h3>
                <div class="categories-review">
                  <div class="review">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="review-text">45 Review</div>
                </div>
              </div>
              <div class="categories-available">
                <div class="available-img">
                <img src="{{ asset('assets/frontend/img/available-img.png') }}" alt=""></img>
                </div>
                <div class="available-text">+ 120 Available</div>
              </div>
            </div>
          </div>
        </div>
        <div class="categories-button">
          <a href="#">View All Categories</a>
        </div>
      </div>
    </div>
    <div class="team">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-6">
            <div class="team-text">
              <div class="heading">
                <h4>Team</h4>
                <h2>Build on Demand <br> Teams for your <br> Education Institution</h2>
                <p>Hire in under 48 hours. Scale up or down, no strings attached. We offer flexible engagements from hourly to full-time.Hire in under 48 hours. Scale up or down, no strings attached. We offer flexible engagements from hourly to full-time.
                  Hire in under 48 hours. Scale up or
                </p>
                <div class="team-button">
                  <a href="#">Get Started</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7 col-sm-6">
            <div class="team-hire">
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="team-block">
                    <a href="#">
                      <div class="team-img">
                      <img src="{{ asset('assets/frontend/img/team-1.png') }}" alt=""></img>
                      </div>
                      <div class="hire-text">
                        <h4>Darrell Steward</h4>
                        <p>Accreditation Specialist</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="team-block">
                    <a href="#">
                      <div class="team-img">
                      <img src="{{ asset('assets/frontend/img/team-2.png') }}" alt=""></img>
                      </div>
                      <div class="hire-text">
                        <h4>Theresa Webb</h4>
                        <p>Industry Expert</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="team-block">
                    <a href="#">
                      <div class="team-img">
                      <img src="{{ asset('assets/frontend/img/team-3.png') }}" alt=""></img>
                      </div>
                      <div class="hire-text">
                        <h4>Marvin McKinney</h4>
                        <p>Policy Expert</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="team-block">
                    <a href="#">
                      <div class="team-img">
                      <img src="{{ asset('assets/frontend/img/team-4.png') }}" alt=""></img>
                      </div>
                      <div class="hire-text">
                        <h4>Marvin McKinney</h4>
                        <p>Curriculum Expert</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="team-block">
                    <a href="#">
                      <div class="team-img">
                      <img src="{{ asset('assets/frontend/img/team-5.png') }}" alt=""></img>
                      </div>
                      <div class="hire-text">
                        <h4>Marvin McKinney</h4>
                        <p>Finance Expert</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="team-block">
                    <a href="#">
                      <div class="team-img">
                      <img src="{{ asset('assets/frontend/img/team-3.png') }}" alt=""></img>
                      </div>
                      <div class="hire-text">
                        <h4>Marvin McKinney</h4>
                        <p>Program designer</p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="eduexhub">
      <div class="container">
        <div class="heading">
          <h4>Eduexhub sets</h4>
          <h2>What sets EduExHub Apart?</h2>
        </div>
        <div class="tabbable-panel">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">For Clients</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">For Experts</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="tab-block">
                    <div class="tab-img">
                      <img src="{{ asset('assets/frontend/img/tab-icon.png') }}" alt=""></img>
                    </div>
                    <div class="tab-text">
                      <h3>A Wealth of Expertise</h3>
                      <p>EduExHub takes pride in its extensive and diverse network of distinguished academic experts spanning various fields and disciplines.</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="tab-block">
                    <div class="tab-img">
                    <img src="{{ asset('assets/frontend/img/tab-icon.png') }}" alt=""></img>
                    </div>
                    <div class="tab-text">
                      <h3>Global Accessibility</h3>
                      <p>With our platform's global reach, users can tap into the expertise of top academic professionals from around the world.</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="tab-block">
                    <div class="tab-img">
                    <img src="{{ asset('assets/frontend/img/tab-icon.png') }}" alt=""></img>
                    </div>
                    <div class="tab-text">
                      <h3>Comprehensive Support</h3>
                      <p>EduExHub offers an array of comprehensive services designed to meet a wide spectrum of needs. Whether users are embarking on course accreditations, curriculum development,</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="tab-block">
                    <div class="tab-img">
                    <img src="{{ asset('assets/frontend/img/tab-icon.png') }}" alt=""></img>
                    </div>
                    <div class="tab-text">
                      <h3>Intuitive User Experience</h3>
                      <p>Our user-friendly interface and streamlined process cater to users with varying levels of technical proficiency. Posting academic projects has never been easier,</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="tab-block">
                    <div class="tab-img">
                    <img src="{{ asset('assets/frontend/img/tab-icon.png') }}" alt=""></img>
                    </div>
                    <div class="tab-text">
                      <h3>Secure Transactions</h3>
                      <p>Security is paramount atEduExHub. To guarantee peace of mind for both users and experts, we hold payments in escrow until</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="tab-block">
                    <div class="tab-img">
                    <img src="{{ asset('assets/frontend/img/tab-icon.png') }}" alt=""></img>
                    </div>
                    <div class="tab-text">
                      <h3>Intuitive User Experience</h3>
                      <p>Our user-friendly interface and streamlined process cater to users with varying levels of technical proficiency. Posting academic projects has never been easier,</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="tab-block">
                    <div class="tab-img">
                    <img src="{{ asset('assets/frontend/img/tab-icon.png') }}" alt=""></img>
                    </div>
                    <div class="tab-text">
                      <h3>A Wealth of Expertise</h3>
                      <p>EduExHub takes pride in its extensive and diverse network of distinguished academic experts spanning various fields and disciplines.</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="tab-block">
                    <div class="tab-img">
                    <img src="{{ asset('assets/frontend/img/tab-icon.png') }}" alt=""></img>
                    </div>
                    <div class="tab-text">
                      <h3>Global Accessibility</h3>
                      <p>With our platform's global reach, users can tap into the expertise of top academic professionals from around the world.</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="tab-block">
                    <div class="tab-img">
                    <img src="{{ asset('assets/frontend/img/tab-icon.png') }}" alt=""></img>
                    </div>
                    <div class="tab-text">
                      <h3>Comprehensive Support</h3>
                      <p>EduExHub offers an array of comprehensive services designed to meet a wide spectrum of needs. Whether users are embarking on course accreditations, curriculum development,</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="tab-block">
                    <div class="tab-img">
                    <img src="{{ asset('assets/frontend/img/tab-icon.png') }}" alt=""></img>
                    </div>
                    <div class="tab-text">
                      <h3>Intuitive User Experience</h3>
                      <p>Our user-friendly interface and streamlined process cater to users with varying levels of technical proficiency. Posting academic projects has never been easier,</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="scholarship">
      <div class="container">
        <div class="heading">
          <h4>Scholarship</h4>
          <h2>Explore Research Scholarships 2024</h2>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="scholarship-block">
              <div class="scholarship-img">
                <a href="#">
                  <img src="{{ asset('assets/frontend/img/scholarship1.jpg') }}" alt=""></img>
                </a>
              </div>
              <div class="scholarship-text">
                <a href="#">Melbourne University | Australia</a>
                <h4>Open for International & Domestic</h4>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="scholarship-block">
              <div class="scholarship-img">
                <a href="#">
                <img src="{{ asset('assets/frontend/img/scholarship2.jpg') }}" alt=""></img>
                </a>
              </div>
              <div class="scholarship-text">
                <a href="#">Western Sydney University | Australia</a>
                <h4>Open for International & Domestic</h4>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="scholarship-block">
              <div class="scholarship-img">
                <a href="#">
                <img src="{{ asset('assets/frontend/img/scholarship3.jpg') }}" alt=""></img>
                </a>
              </div>
              <div class="scholarship-text">
                <a href="#">University of Toronto | Canada</a>
                <h4>Open for International & Domestic</h4>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="scholarship-block">
              <div class="scholarship-img">
                <a href="#">
                <img src="{{ asset('assets/frontend/img/scholarship4.jpg') }}" alt=""></img>
                </a>
              </div>
              <div class="scholarship-text">
                <a href="#">University of California | USA</a>
                <h4>Open for International & Domestic</h4>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="scholarship-block margin">
              <div class="scholarship-img">
              <a href="#">
                <img src="{{ asset('assets/frontend/img/scholarship5.jpg') }}" alt=""></img>
                </a>
              </div>
              <div class="scholarship-text">
                <a href="#">University of New South Wales | Australia</a>
                <h4>Open for International & Domestic</h4>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="scholarship-block margin">
              <div class="scholarship-img">
              <a href="#">
                <img src="{{ asset('assets/frontend/img/scholarship6.jpg') }}" alt=""></img>
                </a>
              </div>
              <div class="scholarship-text">
                <a href="#">University of Sydney | Australia</a>
                <h4>Open for International & Domestic</h4>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="scholarship-block margin">
              <div class="scholarship-img">
              <a href="#">
                <img src="{{ asset('assets/frontend/img/scholarship7.jpg') }}" alt=""></img>
                </a>
              </div>
              <div class="scholarship-text">
                <a href="#">The University of Texas | USA</a>
                <h4>Open for International & Domestic</h4>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="scholarship-block margin">
              <div class="scholarship-img">
              <a href="#">
                <img src="{{ asset('assets/frontend/img/scholarship8.jpg') }}" alt=""></img>
                </a>
              </div>
              <div class="scholarship-text">
                <a href="#">University of Oxford | UK</a>
                <h4>Open for International & Domestic</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="scholarship-button">
          <a href="#">View all Scholarships 2024</a>
        </div>
      </div>
    </div>

    <div class="academic-block">
      <div class="container">
        <div class="heading">
          <h4>Academic training</h4>
          <h2>Upcoming Academic Training</h2>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="live-zoom">
              <div class="zoom-icon">
                <img src="{{ asset('assets/frontend/img/zoom-icon.png') }}" alt=""></img>

                <h4>Live via Zoom</h4>
              </div>
              <p>Mon Aug 28 – Wed Aug 30, 2023, from 10am – 3pm daily (Australian Eastern Standard Time)</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
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
              <a href="#">Registration</a>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="live-zoom">
              <div class="zoom-icon">
                <img src="images/zoom-icon.png"></img>
                <h4>Live via Zoom</h4>
              </div>
              <p>Mon Aug 28 – Wed Aug 30, 2023, from 10am – 3pm daily (Australian Eastern Standard Time)</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
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
          <div class="col-md-3 col-sm-6">
            <div class="live-zoom">
              <div class="zoom-icon">
                <img src="{{ asset('assets/frontend/img/zoom-icon.png') }}" alt=""></img>
                <h4>Live via Zoom</h4>
              </div>
              <p>Mon Aug 28 – Wed Aug 30, 2023, from 10am – 3pm daily (Australian Eastern Standard Time)</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
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
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="live-zoom">
              <div class="zoom-icon">
              <img src="{{ asset('assets/frontend/img/zoom-icon.png') }}" alt=""></img>
                <h4>Live via Zoom</h4>
              </div>
              <p>Mon Aug 28 – Wed Aug 30, 2023, from 10am – 3pm daily (Australian Eastern Standard Time)</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="training">
              <h3>Curriculum Development</h3>
              <div class="training-text">
                <span>Instructor:</span>
                <a href="#">Floyd Miles</a>
                <a href="#">Courtney Henry</a>
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
        <div class="row academic-border">
          <div class="col-md-3 col-sm-6">
            <div class="live-zoom">
              <div class="zoom-icon">
              <img src="{{ asset('assets/frontend/img/zoom-icon.png') }}" alt=""></img>
                <h4>Live via Zoom</h4>
              </div>
              <p>Mon Aug 28 – Wed Aug 30, 2023, from 10am – 3pm daily (Australian Eastern Standard Time)</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="training">
              <h3>LMS  Integration</h3>
              <div class="training-text">
                <span>Instructor:</span>
                <a href="#">Annette Black</a>
                <a href="#">Albert Flores</a>
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
        <div class="academic-button">
          <a href="#">View All Training</a>
        </div>
      </div>
    </div>


    <div class="skillsets">
      <div class="container">
        <div class="heading">
          <h4>Skillsets</h4>
          <h2>Discover Our Expert Skillsets</h2>
        </div>
        <div class="tabbable-panel">
          <ul class="nav nav-tabs" id="myTab1" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab1" data-bs-toggle="tab" data-bs-target="#home1" type="button" role="tab" aria-controls="home" aria-selected="true">For Clients</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab1" data-bs-toggle="tab" data-bs-target="#profile1" type="button" role="tab" aria-controls="profile" aria-selected="false">For Experts</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div class="accordion">
                    <div class="at-item">
                      <div class="at-title active">
                        <h2>Architecture</h2>
                      </div>
                      <div class="at-tab" style="display: block;">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Agriculture</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Art</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Biology</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Business</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Chemistry</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="accordion">
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Computer Programming</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Data Analysis</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Design</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Economics</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Education</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Electronic</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Physics</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="accordion">
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Engineering</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Social Science</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Environmental Science</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Nutrition</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Healthcare</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>History</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Science</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="accordion">
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Humanities</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Languages</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Law</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Literature</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Mathematics</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Medicine</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div class="accordion">
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Computer Programming</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Data Analysis</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Design</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Economics</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Education</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Electronic</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Physics</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="accordion">
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Computer Programming</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Data Analysis</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Design</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Economics</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Education</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Electronic</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Physics</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="accordion">
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Computer Programming</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Data Analysis</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Design</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Economics</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Education</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Electronic</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Physics</h2>
                      </div>
                      <div class="at-tab">
                        <ul>
                          <li><a href="#">Architecture History</a></li>
                          <li><a href="#">Architecture Restoration</a></li>
                          <li><a href="#">Construction</a></li>
                          <li><a href="#">Dynamics</a></li>
                          <li><a href="#">History</a></li>
                          <li><a href="#">Housing</a></li>
                          <li><a href="#">Infrastructure</a></li>
                          <li><a href="#">Physics</a></li>
                          <li><a href="#">Railway Engeering</a></li>
                          <li><a href="#">Religion</a></li>
                          <li><a href="#">Steel</a></li>
                          <li><a href="#">Transportation</a></li>
                          <li><a href="#">Vernacular Architecture</a></li>
                          <li><a href="#">World History</a></li>
                        </ul>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function () {
           $(".at-title").click(function () {
             $(this).toggleClass("active").next(".at-tab").slideToggle().parent().siblings().find(".at-tab").slideUp().prev().removeClass("active");
           });



             $(".carousel-inner .thumb").click(function () {
             if(!$(this).hasClass('active'))
             {
             $(".carousel-inner .thumb").removeClass("active");
             $(this).addClass("active");
             }
             });


           });


    </script>
  </body>
</html>


@endsection