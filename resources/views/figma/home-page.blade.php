@extends('frontend.layouts.figma', ['header' => 'client'])
@section('content')
    <div class="product-slider">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
          <div class="carousel-w">
            <div class="hero-contant">
              <div class="hero-text">
                <h2>Connect With Top Academic <br>and Industry Experts</h2>
                <p>ExpertGate is an elite network of top academic and industry experts across the globe. We connect you with leaders in course accreditation, curriculum design, policy development, project management and more. Choose ExpertGate when your most pivotal academic and industry projects demand the best.</p>

                  <div class="hero-button d-flex gap-3">
                    <a href="#" class="btn btn-primary edux-btn-primary">Find an Expert</a>
                    <a href="#" class="btn edux-btn-border-primary">Become an Expert</a>
                  </div>

              </div>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
              <img src="{{ asset('assets/frontend/img/slider2.png') }}" alt="person">
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
              <img src="{{ asset('assets/frontend/img/slider3.png') }}" alt="person">
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
              <img src="{{ asset('assets/frontend/img/slider4.png') }}" alt="person">
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
              <img src="{{ asset('assets/frontend/img/slider5.png') }}" alt="person">
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
              <img src="{{ asset('assets/frontend/img/slider6.png') }}" alt="person">
                <div class="item-text">
                  <a href="#">
                    <img src="{{ asset('assets/frontend/img/map-img.png') }}" alt="person">
                    <h4>Theresa Webb</h4>
                    <p>Educational Assessment</p>
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
                  <img src="{{ asset('assets/frontend/img/slider2.png') }}" alt="person">
                </div>
                <div class="carousel-text">
                  <h4>Jenny Wilson</h4>
                  <p>Curriculum Development</p>
                  <a class="university-name">Harvard University</a>
                </div>
              </div>
            </button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
              <div class="carousel-con">
                <div class="carousel-img">
                <img src="{{ asset('assets/frontend/img/slider3.png') }}" alt="person">
                </div>
                <div class="carousel-text">
                  <h4>Bessie Cooper</h4>
                  <p>Research &amp; Analysis</p>
                  <a class="university-name">Harvard University</a>
                </div>
              </div>
            </button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
              <div class="carousel-con">
                <div class="carousel-img">
                <img src="{{ asset('assets/frontend/img/slider4.png') }}" alt="person">
                </div>
                <div class="carousel-text">
                  <h4>Jane Cooper</h4>
                  <p>Public Health</p>
                  <a class="university-name">Harvard University</a>
                </div>
              </div>
            </button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4">
              <div class="carousel-con">
                <div class="carousel-img">
                <img src="{{ asset('assets/frontend/img/slider5.png') }}" alt="person">
                </div>
                <div class="carousel-text">
                  <h4>Kristin Watson</h4>
                  <p>LMS Ecpert</p>
                  <a class="university-name">Harvard University</a>
                </div>
              </div>
            </button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5">
              <div class="carousel-con">
                <div class="carousel-img">
                <img src="{{ asset('assets/frontend/img/slider6.png') }}" alt="person">
                </div>
                <div class="carousel-text">
                  <h4>Theresa Webb</h4>
                  <p>Educational Assessment</p>
                  <a class="university-name">Harvard University</a>
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
          <h2>Navigating the ExpertGate Platform</h2>
          <p>Step into the largest global network of academic and industry experts, ready to tackle your most complex projects. Find the perfect expert for your project with our simple, four-step process.</p>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="require-block">
              <div class="require-arrow">
                <img src="{{ asset('assets/frontend/img/require-arrow.png') }}"></img>
              </div>
              <div class="require-img">
              <img src="{{ asset('assets/frontend/img/require1.png') }}" alt=""></img>
                <img class="number" src="{{ asset('assets/frontend/img/require-n1.png') }}" alt=""></img>
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
              <img class="" src="{{ asset('assets/frontend/img/require-arrow.png') }}" alt=""></img>
              </div>
              <div class="require-img">
              <img  src="{{ asset('assets/frontend/img/require2.png') }}" alt=""></img>
                <img class="number" src="{{ asset('assets/frontend/img/require-n2.png') }}" alt=""></img>
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
              <img class="" src="{{ asset('assets/frontend/img/require-arrow.png') }}" alt=""></img>
              </div>
              <div class="require-img">
               <img  src="{{ asset('assets/frontend/img/require3.png') }}" alt=""></img>
                <img class="number" src="{{ asset('assets/frontend/img/require-n3.png') }}" alt=""></img>
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
                <img  src="{{ asset('assets/frontend/img/require4.png') }}" alt=""></img>
                <img class="number" src="{{ asset('assets/frontend/img/require-n4.png') }}" alt=""></img>
              </div>
              <div class="require-text">
                <h3>Pay <br> Security</h3>
                <p>Payment held in escrow until project is complete to your satisfection</p>
              </div>
            </div>
          </div>

          <div class="text-center mt-5">
            <a href="" class="btn btn-primary btn-md eudx-btn-primary">Get Started</a>
        </div>

        </div>
      </div>
    </div>

    <div class="categories-main">
      <div class="container">
        <div class="heading">
          <h4>Categories</h4>
          <h2>Browse Experts by Category</h2>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="categories-block">
              <div class="categories-img">
                <a href="#"><img src="{{ asset('assets/frontend/img/categories1.jpg') }}" alt=""></img></a>
              </div>
              <div class="categories-text">
                <h3><a href="#">Curriculum Development</a></h3>
                <p>Assist in developing engaging, effective curricula tailored to your educational needs.</p>

              </div>

            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="categories-block">
              <div class="categories-img">
                <a href="#"> <img src="{{ asset('assets/frontend/img/categories2.jpg') }}" alt=""></img></a>
              </div>
              <div class="categories-text">
                <h3><a href="#">Course Accreditation</a></h3>
                <p>Help clients meet industry standards and gain official recognition for their programs.</p>

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
                <h3><a href="#">Learning Management System</a></h3>
                <p>Implement efficient Learning Management systems to streamline your educational processes.</p>
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
                <h3><a href="#">Policy Development</a></h3>
                <p>Provide valuable insights and guidance on policy development, analysis, and implementation.</p>
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
                <h3><a href="#">Research and Analysis</a></h3>
                <p>Offer rigorous research methodologies and data analysis to help you make informed decisions for business operations.</p>
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
                <h3><a href="#">Financial Management</a></h3>
                <p>Provide financial advice and strategies to optimise your organisation's financial health.</p>

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
                <p>Ensure your projects are executed efficiently, on time, and within budget.</p>
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
                <h3><a href="#">Grants and Scholarships</a></h3>
                <p>Guide you through scholarship opportunities and application processes for educational funding.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="categories-button">
          <a href="#">View All Categories</a>
        </div>
      </div>
    </div>

    <div class="experts-main d-none">
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
        <div class="experts-button mt-5">
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
                <h4>BUILD A TEAM</h4>
                <h2>Create an On-Demand <br> Team with ExpertGate</h2>
                <p>At ExpertGate, we not only provide access to a global network of academic and industry experts but also empower you to build your own expert team tailored to your project's needs. Whether it's for a university or an organisation, our platform simplifies the process of assembling a team of specialists, making it an easy, secure, and effective collaboration.
                </p>
                <div class="single-button">
                    <a href="#" class="btn btn-primary edux-btn-primary">Started</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7 col-sm-6 edux-team-margin-top">
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
              </div>
              <div class="row">
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

                <div class="about-team-interview ">
                <img src="{{ asset('assets/frontend/img/interview-icon.png') }}">
                <p>You can hire experts directly here for <a href="#">TV interview</a> or <a href="#">Keynote Speakers</a></p>
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
          <h4>CHOOSE EXPERTGATE</h4>
          <h2>Why Choose ExpertGate?</h2>
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

            <div class="text-center mt-5">
             <a href="" class="btn btn-primary btn-md eudx-btn-primary">Get Started</a>
            </div>
          </div>
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

    <div class="scholarship">
      <div class="container">
        <div class="heading">
          <h4>Scholarship</h4>
          <h2>Navigate top scholarships from the <br/> world’s best universities</h2>
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

    <div class="skillsets">
      <div class="container">
        <div class="heading">
          <h4>Experts</h4>
          <h2>Discover Our Expertise</h2>
        </div>
        <div class="tabbable-panel">
          <!-- <ul class="nav nav-tabs" id="myTab1" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab1" data-bs-toggle="tab" data-bs-target="#home1" type="button" role="tab" aria-controls="home" aria-selected="true">For Clients</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab1" data-bs-toggle="tab" data-bs-target="#profile1" type="button" role="tab" aria-controls="profile" aria-selected="false">For Experts</button>
            </li>
          </ul> -->
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="accordion">
                    <div class="at-item">
                      <div class="at-title active">
                        <h2>Architecture</h2>
                      </div>
                      <div class="at-tab" style="display: block;">
                       <div class="row">
                        <div class="col-md-6">
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
                        <div class="col-md-6">
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
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Agriculture</h2>
                      </div>
                      <div class="at-tab">
                       <div class="row">
                        <div class="col-md-6">
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
                        <div class="col-md-6">
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
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Art</h2>
                      </div>
                      <div class="at-tab">
                        <div class="row">
                          <div class="col-md-6">
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
                          <div class="col-md-6">
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
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Biology</h2>
                      </div>
                      <div class="at-tab">
                        <div class="row">
                          <div class="col-md-6">
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
                          <div class="col-md-6">
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
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Business</h2>
                      </div>
                      <div class="at-tab">
                        <div class="row">
                          <div class="col-md-6">
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
                          <div class="col-md-6">
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
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Chemistry</h2>
                      </div>
                      <div class="at-tab">
                        <div class="row">
                          <div class="col-md-6">
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
                          <div class="col-md-6">
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
                <div class="col-md-6 col-sm-6">
                  <div class="accordion">
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Computer Programming</h2>
                      </div>
                      <div class="at-tab">
                        <div class="row">
                          <div class="col-md-6">
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
                          <div class="col-md-6">
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
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Data Analysis</h2>
                      </div>
                      <div class="at-tab">
                        <div class="row">
                            <div class="col-md-6">
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
                            <div class="col-md-6">
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
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Design</h2>
                      </div>
                      <div class="at-tab">
                          <div class="row">
                            <div class="col-md-6">
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
                            <div class="col-md-6">
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
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Economics</h2>
                      </div>
                      <div class="at-tab">
                        <div class="row">
                            <div class="col-md-6">
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
                            <div class="col-md-6">
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
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Education</h2>
                      </div>
                      <div class="at-tab">
                        <div class="row">
                          <div class="col-md-6">
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
                          <div class="col-md-6">
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
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Electronic</h2>
                      </div>
                      <div class="at-tab">
                        <div class="row">
                          <div class="col-md-6">
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
                          <div class="col-md-6">
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
                    <div class="at-item">
                      <div class="at-title">
                        <h2>Physics</h2>
                      </div>
                      <div class="at-tab">
                        <div class="row">
                          <div class="col-md-6">
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
                          <div class="col-md-6">
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