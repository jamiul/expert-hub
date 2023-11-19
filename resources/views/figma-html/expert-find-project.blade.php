@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/expert-dashboard.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">
<div class="find-training find-projects databasepading">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <div class="left-sidebar">
            <div class="filter">
              <h5>Filter</h5>
              <a href="#">Clear filters</a>
            </div>
            <div class="search-block">
              <form class="example">
                <input type="text" placeholder="Search expert..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
            <div class="study-level">
              <h3>Project by Categories</h3>
              <div class="accordion">
                <div class="at-item">
                  <div class="at-title">
                    <h2>
                      <input type="checkbox" id="0">
                      <span for="0">Course Accreditations</span>
                    </h2>
                  </div>
                  <div class="at-tab" style="display: none;">
                    <ul>
                      <li>
                        <input type="checkbox" id="1">
                        <label for="1">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="2">
                        <label for="2">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="3">
                        <label for="3">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="4">
                        <label for="4">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="5">
                        <label for="5">Accreditation Review</label>
                      </li>
                      <li>
                        <input type="checkbox" id="6">
                        <label for="6">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="7">
                        <label for="7">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="8">
                        <label for="8">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="9">
                        <label for="9">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="10">
                        <label for="10">Accreditation Review</label>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="at-item">
                  <div class="at-title">
                    <h2>
                      <input type="checkbox" id="0">
                      <span for="0">Curriculum Development</span>
                    </h2>
                  </div>
                  <div class="at-tab" style="display: none;">
                    <ul>
                      <li>
                        <input type="checkbox" id="11">
                        <label for="11">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="12">
                        <label for="12">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="13">
                        <label for="13">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="14">
                        <label for="14">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="15">
                        <label for="15">Accreditation Review</label>
                      </li>
                      <li>
                        <input type="checkbox" id="16">
                        <label for="16">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="17">
                        <label for="17">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="18">
                        <label for="18">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="19">
                        <label for="19">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="20">
                        <label for="20">Accreditation Review</label>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="at-item">
                  <div class="at-title">
                    <h2>
                      <input type="checkbox" id="0">
                      <span for="0">Program Designers</span>
                    </h2>
                  </div>
                  <div class="at-tab" style="display: none;">
                    <ul>
                      <li>
                        <input type="checkbox" id="21">
                        <label for="21">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="22">
                        <label for="22">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="23">
                        <label for="23">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="24">
                        <label for="24">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="25">
                        <label for="25">Accreditation Review</label>
                      </li>
                      <li>
                        <input type="checkbox" id="26">
                        <label for="26">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="27">
                        <label for="27">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="28">
                        <label for="28">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="29">
                        <label for="29">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="30">
                        <label for="30">Accreditation Review</label>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="at-item">
                  <div class="at-title">
                    <h2>
                      <input type="checkbox" id="0">
                      <span for="0">LMS</span>
                    </h2>
                  </div>
                  <div class="at-tab" style="display: none;">
                    <ul>
                      <li>
                        <input type="checkbox" id="31">
                        <label for="31">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="32">
                        <label for="32">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="33">
                        <label for="33">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="34">
                        <label for="34">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="35">
                        <label for="35">Accreditation Review</label>
                      </li>
                      <li>
                        <input type="checkbox" id="36">
                        <label for="36">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="37">
                        <label for="37">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="38">
                        <label for="38">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="39">
                        <label for="39">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="40">
                        <label for="40">Accreditation Review</label>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="at-item">
                  <div class="at-title">
                    <h2>
                      <input type="checkbox" id="0">
                      <span for="0">Policy Development</span>
                    </h2>
                  </div>
                  <div class="at-tab" style="display: none;">
                    <ul>
                      <li>
                        <input type="checkbox" id="41">
                        <label for="41">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="42">
                        <label for="42">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="43">
                        <label for="43">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="44">
                        <label for="44">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="45">
                        <label for="45">Accreditation Review</label>
                      </li>
                      <li>
                        <input type="checkbox" id="46">
                        <label for="46">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="47">
                        <label for="47">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="48">
                        <label for="48">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="49">
                        <label for="49">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="50">
                        <label for="50">Accreditation Review</label>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="at-item">
                  <div class="at-title">
                    <h2>
                      <input type="checkbox" id="0">
                      <span for="0">Industry Expertise</span>
                    </h2>
                  </div>
                  <div class="at-tab" style="display: none;">
                    <ul>
                      <li>
                        <input type="checkbox" id="51">
                        <label for="51">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="52">
                        <label for="52">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="53">
                        <label for="53">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="54">
                        <label for="54">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="55">
                        <label for="55">Accreditation Review</label>
                      </li>
                      <li>
                        <input type="checkbox" id="56">
                        <label for="56">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="57">
                        <label for="57">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="58">
                        <label for="58">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="59">
                        <label for="59">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="60">
                        <label for="60">Accreditation Review</label>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="at-item">
                  <div class="at-title">
                    <h2>
                      <input type="checkbox" id="0">
                      <span for="0">Financial Management</span>
                    </h2>
                  </div>
                  <div class="at-tab" style="display: none;">
                    <ul>
                      <li>
                        <input type="checkbox" id="61">
                        <label for="61">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="62">
                        <label for="62">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="63">
                        <label for="63">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="64">
                        <label for="64">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="65">
                        <label for="65">Accreditation Review</label>
                      </li>
                      <li>
                        <input type="checkbox" id="66">
                        <label for="66">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="67">
                        <label for="67">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="68">
                        <label for="68">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="69">
                        <label for="69">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="70">
                        <label for="70">Accreditation Review</label>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="at-item">
                  <div class="at-title">
                    <h2>
                      <input type="checkbox" id="0">
                      <span for="0">Research and Analysis</span>
                    </h2>
                  </div>
                  <div class="at-tab" style="display: none;">
                    <ul>
                      <li>
                        <input type="checkbox" id="71">
                        <label for="71">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="72">
                        <label for="72">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="73">
                        <label for="73">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="74">
                        <label for="74">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="75">
                        <label for="75">Accreditation Review</label>
                      </li>
                      <li>
                        <input type="checkbox" id="76">
                        <label for="76">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="77">
                        <label for="77">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="78">
                        <label for="78">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="79">
                        <label for="79">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="80">
                        <label for="80">Accreditation Review</label>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="at-item">
                  <div class="at-title">
                    <h2>
                      <input type="checkbox" id="0">
                      <span for="0">Writing and Editing</span>
                    </h2>
                  </div>
                  <div class="at-tab" style="display: none;">
                    <ul>
                      <li>
                        <input type="checkbox" id="81">
                        <label for="81">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="82">
                        <label for="82">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="83">
                        <label for="83">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="84">
                        <label for="84">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="85">
                        <label for="85">Accreditation Review</label>
                      </li>
                      <li>
                        <input type="checkbox" id="86">
                        <label for="86">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="87">
                        <label for="87">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="88">
                        <label for="88">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="89">
                        <label for="89">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="90">
                        <label for="90">Accreditation Review</label>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="at-item">
                  <div class="at-title">
                    <h2>
                      <input type="checkbox" id="0">
                      <span for="0">Scholarships Assistance</span>
                    </h2>
                  </div>
                  <div class="at-tab" style="display: none;">
                    <ul>
                      <li>
                        <input type="checkbox" id="91">
                        <label for="91">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="92">
                        <label for="92">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="93">
                        <label for="93">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="94">
                        <label for="94">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="95">
                        <label for="95">Accreditation Review</label>
                      </li>
                      <li>
                        <input type="checkbox" id="96">
                        <label for="96">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="97">
                        <label for="97">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="98">
                        <label for="98">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="99">
                        <label for="99">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="100">
                        <label for="100">Accreditation Review</label>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="at-item">
                  <div class="at-title">
                    <h2>
                      <input type="checkbox" id="0">
                      <span for="0">International Edu Development</span>
                    </h2>
                  </div>
                  <div class="at-tab" style="display: none;">
                    <ul>
                      <li>
                        <input type="checkbox" id="101">
                        <label for="101">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="102">
                        <label for="102">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="103">
                        <label for="103">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="104">
                        <label for="104">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="105">
                        <label for="105">Accreditation Review</label>
                      </li>
                      <li>
                        <input type="checkbox" id="106">
                        <label for="106">Accreditation Documentation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="107">
                        <label for="107">Accreditation Process</label>
                      </li>
                      <li>
                        <input type="checkbox" id="108">
                        <label for="108">Accreditation Renewal</label>
                      </li>
                      <li>
                        <input type="checkbox" id="109">
                        <label for="109">Accreditation Reporting</label>
                      </li>
                      <li>
                        <input type="checkbox" id="110">
                        <label for="110">Accreditation Review</label>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="study-level">
              <h3>Project Type</h3>
              <div class="type-min">
                <ul>
                  <li>
                    <input type="checkbox" id="111">
                    <label for="111">Fixed Price</label>
                  </li>
                  <li>
                    <input type="text" placeholder="Min" name="fname">
                    <input type="text" placeholder="Max" name="fname">
                  </li>
                </ul>
              </div>
              <div class="type-min">
                <ul>
                  <li>
                    <input type="checkbox" id="112">
                    <label for="112">Hourly</label>
                  </li>
                  <li>
                    <input type="text" placeholder="Min" name="fname">
                    <input type="text" placeholder="Max" name="fname">
                  </li>
                </ul>
              </div>
            </div>
            <div class="study-level">
              <h3>Location</h3>
              <div class="location-select position-relative scroller">
                  <div class="position-relative">
                    <input type="text" placeholder="Search Country" id="locationInput" class="form-control locationInput" required>

                  </div>
                  
                  <div class="tags pt-3 pb-1">
                    <div class="tag d-inline-flex align-items-center rounded-pill ps-3 pe-2 py-1 me-2 mb-2 text-white fw-medium small lh-1">
                      <span>Bangladesh</span>
                      <button class="btn p-0 border-0 rounded-circle">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M4.79989 13.9904L4.00952 13.2L8.20952 9.00001L4.00952 4.80001L4.79989 4.00964L8.99989 8.20964L13.1999 4.00964L13.9903 4.80001L9.79026 9.00001L13.9903 13.2L13.1999 13.9904L8.99989 9.79038L4.79989 13.9904Z" fill="white"/>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="right-sidebar">
            <div class="right-database">
              <div class="database-block">
                <div class="database-contant">
                  <div class="database-img">
                    <img src="{{asset('assets/frontend/img/find-project-img.png')}}"></img>
                  </div>
                  <div class="database-text">
                    <h4>Developing curriculum for Postgraduate public health units</h4>
                  </div>
                </div>
              </div>
              <div class="find-projects-time">
                <div class="curriculum">
                  <ul>
                    <li><img src="{{ asset('assets/frontend/img/vector-icon.png')}}"></img>Curriculum development</li>
                    <li><img src="{{asset('assets/frontend/img/time-icon.png')}}"></img>15 hours ago</li>
                    <li><img src="{{asset('assets/frontend/img/site-icon.png')}}"></img>USA</li>
                  </ul>
                </div>
                <div class="curriculum-right">
                  <ul>
                    <li>Hourly: <span>$200.00</span></li>
                    <li><a class="data-icon"href="#"><img src="{{asset('assets/frontend/img/like-icon.png')}}"></a></li>
                  </ul>
                </div>
              </div>
              <div class="database-p">
                <p>Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities......<a href="#">More</a></p>
              </div>
                          <div class="projects-slider p-0">
                            <div class="tag__list d-flex flex-wrap mt-3">
                                <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a>
                                <a href="#" class="fs-13 fw-medium rounded-pill">Industry Treds Awareness</a>
                                <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a>
                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                <span class="collapse" id="contentTag1">
                                    <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                    <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                    <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                </span>
                                <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag1" aria-expanded="false" aria-controls="contentTag1">
                                    <span class="count">+12 More</span>
                                    <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less </span>
                                </a>
                            </div>
                          </div>
            </div>
          </div>
          <div class="right-sidebar">
            <div class="right-database">
              <div class="database-block">
                <div class="database-contant">
                  <div class="database-img">
                    <img src="{{asset('assets/frontend/img/find-project-img.png')}}"></img>
                  </div>
                  <div class="database-text">
                    <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                  </div>
                </div>
              </div>
              <div class="find-projects-time">
                <div class="curriculum">
                  <ul>
                    <li><img src="{{asset('assets/frontend/img/vector-icon.png')}}"></img>Policy Development</li>
                    <li><img src="{{asset('assets/frontend/img/time-icon.png')}}"></img>15 hours ago</li>
                    <li><img src="{{asset('assets/frontend/img/site-icon.png')}}"></img>UK</li>
                  </ul>
                </div>
                <div class="curriculum-right">
                  <ul>
                    <li>Hourly: <span>$200.00</span></li>
                    <li><a class="data-icon"href="#"><img src="{{asset('assets/frontend/img/like-icon.png')}}"></a></li>
                  </ul>
                </div>
              </div>
              <div class="database-p">
                <p>Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities......<a href="#">More</a></p>
              </div>
              <div class="projects-slider p-0">
                            <div class="tag__list d-flex flex-wrap mt-3">
                                <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a>
                                <a href="#" class="fs-13 fw-medium rounded-pill">Industry Treds Awareness</a>
                                <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a>
                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                <span class="collapse" id="contentTag2">
                                    <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                    <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                    <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                </span>
                                <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag2" aria-expanded="false" aria-controls="contentTag1">
                                    <span class="count">+12 More</span>
                                    <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less </span>
                                </a>
                            </div>
                          </div>
            </div>
          </div>
          <div class="right-sidebar">
            <div class="right-database">
              <div class="database-block">
                <div class="database-contant">
                  <div class="database-img">
                    <img src="{{asset('assets/frontend/img/find-project-img.png')}}"></img>
                  </div>
                  <div class="database-text">
                    <h4>LMS Expert required for Business Administration</h4>
                  </div>
                </div>
              </div>
              <div class="find-projects-time">
                <div class="curriculum">
                  <ul>
                    <li><img src="{{ asset('assets/frontend/img/vector-icon.png')}}"></img>LMS</li>
                    <li><img src="{{asset('assets/frontend/img/time-icon.png')}}"></img>15 hours ago</li>
                    <li><img src="{{asset('assets/frontend/img/site-icon.png')}}"></img>Canada</li>
                  </ul>
                </div>
                <div class="curriculum-right">
                  <ul>
                    <li>Hourly: <span>$200.00</span></li>
                    <li><a class="data-icon"href="#"><img src="{{asset('assets/frontend/img/like-icon.png')}}"></a></li>
                  </ul>
                </div>
              </div>
              <div class="database-p">
                <p>We are seeking a proficient LMS Expert to assist our higher degree institution in the field of Business Administration. Your primary task will be to provide expertise in implementing ...<a href="#">More</a></p>
              </div>
              <div class="projects-slider p-0">
                            <div class="tag__list d-flex flex-wrap mt-3">
                                <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a>
                                <a href="#" class="fs-13 fw-medium rounded-pill">Industry Treds Awareness</a>
                                <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a>
                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                <span class="collapse" id="contentTag3">
                                    <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                    <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                    <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                </span>
                                <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag3" aria-expanded="false" aria-controls="contentTag1">
                                    <span class="count">+12 More</span>
                                    <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less </span>
                                </a>
                            </div>
                          </div>
            </div>
          </div>
          <div class="right-sidebar">
            <div class="right-database">
              <div class="database-block">
                <div class="database-contant">
                  <div class="database-img">
                    <img src="{{asset('assets/frontend/img/find-project-img.png')}}"></img>
                  </div>
                  <div class="database-text">
                    <h4>Seeking Finance Guidance for Budgeting and Forecasting in Higher Education</h4>
                  </div>
                </div>
              </div>
              <div class="find-projects-time">
                <div class="curriculum">
                  <ul>
                    <li><img src="{{ asset('assets/frontend/img/vector-icon.png')}}"></img>Financial Management</li>
                    <li><img src="{{asset('assets/frontend/img/time-icon.png')}}"></img>15 hours ago</li>
                    <li><img src="{{asset('assets/frontend/img/site-icon.png')}}"></img>USA</li>
                  </ul>
                </div>
                <div class="curriculum-right">
                  <ul>
                    <li>Hourly: <span>$200.00</span></li>
                    <li><a class="data-icon"href="#"><img src="{{asset('assets/frontend/img/like-icon.png')}}"></a></li>
                  </ul>
                </div>
              </div>
              <div class="database-p">
                <p>We need a seasoned Finance Expert to provide invaluable guidance for our college's upcoming projects. Your mission is to collaborate with our finance team to develop robust forecasting ...<a href="#">More</a></p>
              </div>
              <div class="projects-slider p-0">
                            <div class="tag__list d-flex flex-wrap mt-3">
                                <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a>
                                <a href="#" class="fs-13 fw-medium rounded-pill">Industry Treds Awareness</a>
                                <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a>
                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                <span class="collapse" id="contentTag4">
                                    <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                    <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                    <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                </span>
                                <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag4" aria-expanded="false" aria-controls="contentTag1">
                                    <span class="count">+12 More</span>
                                    <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less </span>
                                </a>
                            </div>
                          </div>
            </div>
          </div>
          <div class="right-sidebar">
            <div class="right-database">
              <div class="database-block">
                <div class="database-contant">
                  <div class="database-img">
                    <img src="{{asset('assets/frontend/img/find-project-img.png')}}"></img>
                  </div>
                  <div class="database-text">
                    <h4>Expert in Environmental Economics for Academic Research</h4>
                  </div>
                </div>
              </div>
              <div class="find-projects-time">
                <div class="curriculum">
                  <ul>
                    <li><img src="{{ asset('assets/frontend/img/vector-icon.png')}}"></img>Research and Analysis</li>
                    <li><img src="{{asset('assets/frontend/img/time-icon.png')}}"></img>15 hours ago</li>
                    <li><img src="{{asset('assets/frontend/img/site-icon.png')}}"></img>Australia</li>
                  </ul>
                </div>
                <div class="curriculum-right">
                  <ul>
                    <li>Hourly: <span>$200.00</span></li>
                    <li><a class="data-icon"href="#"><img src="{{asset('assets/frontend/img/like-icon.png')}}"></a></li>
                  </ul>
                </div>
              </div>
              <div class="database-p">
                <p>Our   higher   degree   institution   is   seeking   an   accomplished   Expert   inEnvironmental Economics to lead a critical academic research project. Your rolewill involve spearheading groundbreaking ...<a href="#">More</a></p>
              </div>
              <div class="projects-slider p-0">
                            <div class="tag__list d-flex flex-wrap mt-3">
                                <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a>
                                <a href="#" class="fs-13 fw-medium rounded-pill">Industry Treds Awareness</a>
                                <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a>
                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                <span class="collapse" id="contentTag5">
                                    <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                    <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                    <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                </span>
                                <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag5" aria-expanded="false" aria-controls="contentTag1">
                                    <span class="count">+12 More</span>
                                    <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less </span>
                                </a>
                            </div>
                          </div>
            </div>
          </div>
          <div class="pagination">
            <div class="row">
              <div class="col-md-4">
                <div class="pagination-left">
                  Showing 1 to 8 of 100 entries
                </div>
              </div>
              <div class="col-md-8">
                <div class="pagination-right">
                  <div class="results">
                    <p>Results per page</p>
                    <select>
                      <option>0</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>
                  <ul>
                    <li><a href="#"><img src="{{asset('assets/frontend/img/pagination-left.png')}}"></img><img class="hover-icon"src="{{asset('assets/frontend/img/pagination-left-hover.png')}}"></img></a></li>
                    <li><a href="#"><i class="fa fa-caret-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                    <li><a href="#"><img src="{{asset('assets/frontend/img/pagination-right.png')}}"></img><img class="hover-icon"src="{{asset('assets/frontend/img/pagination-right-hover.png')}}"></img></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
@push('bottom_scripts')
    <script src="{{asset('assets/frontend/js/find-project.js')}}"></script>
@endpush
