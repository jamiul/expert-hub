@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/expert-dashboard.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">
<div class="find-training find-projects databasepading pt-5">
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
                <input type="text" placeholder="Search by keyword" name="search" class="text-black">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>

              <div class="mb-3 search__suggestions__box">
                <div class="d-flex flex-wrap">
                  <div class="search__item d-inline-flex align-items-center me-2 mb-1 bg-primary text-white px-3 py-1 rounded-pill small fw-medium">
                    <span>Accreditation process</span>
                    <button class="btn p-0 border-0 position-relative">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M4.79818 13.9905L4.00781 13.2001L8.20781 9.00013L4.00781 4.80013L4.79818 4.00977L8.99818 8.20977L13.1982 4.00977L13.9886 4.80013L9.78855 9.00013L13.9886 13.2001L13.1982 13.9905L8.99818 9.7905L4.79818 13.9905Z" fill="white"/>
                      </svg>
                    </button>
                  </div>
                  <div class="search__item d-inline-flex align-items-center me-2 mb-1 bg-primary text-white px-3 py-1 rounded-pill small fw-medium">
                    <span>LMS</span>
                    <button class="btn p-0 border-0 position-relative">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M4.79818 13.9905L4.00781 13.2001L8.20781 9.00013L4.00781 4.80013L4.79818 4.00977L8.99818 8.20977L13.1982 4.00977L13.9886 4.80013L9.78855 9.00013L13.9886 13.2001L13.1982 13.9905L8.99818 9.7905L4.79818 13.9905Z" fill="white"/>
                      </svg>
                    </button>
                  </div>
                  <div class="search__item d-inline-flex align-items-center me-2 mb-1 bg-primary text-white px-3 py-1 rounded-pill small fw-medium">
                    <span>Fixed price</span>
                    <button class="btn p-0 border-0 position-relative">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M4.79818 13.9905L4.00781 13.2001L8.20781 9.00013L4.00781 4.80013L4.79818 4.00977L8.99818 8.20977L13.1982 4.00977L13.9886 4.80013L9.78855 9.00013L13.9886 13.2001L13.1982 13.9905L8.99818 9.7905L4.79818 13.9905Z" fill="white"/>
                      </svg>
                    </button>
                  </div>
                  <div class="search__item d-inline-flex align-items-center me-2 mb-1 bg-primary text-white px-3 py-1 rounded-pill small fw-medium">
                    <span>Australia</span>
                    <button class="btn p-0 border-0 position-relative">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M4.79818 13.9905L4.00781 13.2001L8.20781 9.00013L4.00781 4.80013L4.79818 4.00977L8.99818 8.20977L13.1982 4.00977L13.9886 4.80013L9.78855 9.00013L13.9886 13.2001L13.1982 13.9905L8.99818 9.7905L4.79818 13.9905Z" fill="white"/>
                      </svg>
                    </button>
                  </div>
                  <div class="search__item d-inline-flex align-items-center me-2 mb-1 bg-primary text-white px-3 py-1 rounded-pill small fw-medium">
                    <span>Industry expert</span>
                    <button class="btn p-0 border-0 position-relative">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M4.79818 13.9905L4.00781 13.2001L8.20781 9.00013L4.00781 4.80013L4.79818 4.00977L8.99818 8.20977L13.1982 4.00977L13.9886 4.80013L9.78855 9.00013L13.9886 13.2001L13.1982 13.9905L8.99818 9.7905L4.79818 13.9905Z" fill="white"/>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>

              <button class="btn btn-link clear__btn small fw-medium p-0">Clear Filters</button>

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
                    <h4>
                      <a href="#">Developing curriculum for Postgraduate public health units</a>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="find-projects-time">
                <div class="curriculum">
                  <ul>
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M17.0846 9.9999L13.7801 14.6761C13.6167 14.9091 13.4081 15.0907 13.1543 15.221C12.9006 15.3514 12.6295 15.4165 12.341 15.4165H4.42439C4.00879 15.4165 3.65382 15.2694 3.35949 14.975C3.06514 14.6807 2.91797 14.3257 2.91797 13.9101V6.08967C2.91797 5.67407 3.06514 5.31911 3.35949 5.02477C3.65382 4.73043 4.00879 4.58325 4.42439 4.58325H12.341C12.6348 4.58325 12.9073 4.6511 13.1583 4.78679C13.4094 4.92247 13.6167 5.10677 13.7801 5.33967L17.0846 9.9999ZM15.5558 9.9999L12.7417 6.04159C12.6989 5.98282 12.6415 5.93341 12.5694 5.89334C12.4973 5.85327 12.4212 5.83323 12.341 5.83323H4.42439C4.36027 5.83323 4.3015 5.85994 4.24807 5.91336C4.19466 5.96679 4.16795 6.02556 4.16795 6.08967V13.9101C4.16795 13.9742 4.19466 14.033 4.24807 14.0864C4.3015 14.1399 4.36027 14.1666 4.42439 14.1666H12.341C12.4212 14.1666 12.4973 14.1465 12.5694 14.1065C12.6415 14.0664 12.6989 14.017 12.7417 13.9582L15.5558 9.9999ZM4.16795 9.9999V14.1666V5.83323V9.9999Z" fill="#191D24" fill-opacity="0.4"/>
                      </svg>
                      <span class="ps-1">Curriculum development</span>
                    </li>
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M12.8929 13.7723L13.7711 12.8941L10.6237 9.7465V5.83323H9.3737V10.2531L12.8929 13.7723ZM10.0001 17.9165C8.90513 17.9165 7.87593 17.7088 6.91249 17.2932C5.94903 16.8777 5.11096 16.3137 4.39828 15.6013C3.68559 14.889 3.12137 14.0513 2.70564 13.0882C2.2899 12.1252 2.08203 11.0962 2.08203 10.0013C2.08203 8.90635 2.28981 7.87716 2.70536 6.91371C3.12092 5.95025 3.68488 5.11218 4.39724 4.3995C5.10961 3.68681 5.94732 3.12259 6.91034 2.70686C7.87336 2.29112 8.90234 2.08325 9.99728 2.08325C11.0922 2.08325 12.1214 2.29103 13.0849 2.70659C14.0483 3.12214 14.8864 3.6861 15.5991 4.39846C16.3118 5.11084 16.876 5.94854 17.2917 6.91157C17.7075 7.87458 17.9153 8.90356 17.9153 9.9985C17.9153 11.0934 17.7075 12.1226 17.292 13.0861C16.8764 14.0495 16.3125 14.8876 15.6001 15.6003C14.8877 16.313 14.05 16.8772 13.087 17.2929C12.124 17.7087 11.095 17.9165 10.0001 17.9165ZM9.99868 16.6666C11.8459 16.6666 13.4188 16.0173 14.7174 14.7186C16.016 13.42 16.6653 11.8471 16.6653 9.9999C16.6653 8.15268 16.016 6.57976 14.7174 5.28115C13.4188 3.98254 11.8459 3.33323 9.99868 3.33323C8.15145 3.33323 6.57854 3.98254 5.27993 5.28115C3.98132 6.57976 3.33201 8.15268 3.33201 9.9999C3.33201 11.8471 3.98132 13.42 5.27993 14.7186C6.57854 16.0173 8.15145 16.6666 9.99868 16.6666Z" fill="#191D24" fill-opacity="0.4"/>
                      </svg>
                      <span class="ps-1">15 hours ago</span>
                    </li>
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.99868 17.9165C8.91321 17.9165 7.88891 17.7085 6.92578 17.2923C5.96264 16.8762 5.12263 16.3097 4.40574 15.5928C3.68886 14.8759 3.12236 14.0359 2.70624 13.0728C2.2901 12.1097 2.08203 11.0854 2.08203 9.9999C2.08203 8.90589 2.2901 7.87945 2.70624 6.92059C3.12236 5.96172 3.68886 5.12385 4.40574 4.40696C5.12263 3.69009 5.96264 3.12359 6.92578 2.70746C7.88891 2.29132 8.91321 2.08325 9.99868 2.08325C11.0927 2.08325 12.1191 2.29132 13.078 2.70746C14.0369 3.12359 14.8747 3.69009 15.5916 4.40696C16.3085 5.12385 16.875 5.96172 17.2911 6.92059C17.7073 7.87945 17.9153 8.90589 17.9153 9.9999C17.9153 11.0854 17.7073 12.1097 17.2911 13.0728C16.875 14.0359 16.3085 14.8759 15.5916 15.5928C14.8747 16.3097 14.0369 16.8762 13.078 17.2923C12.1191 17.7085 11.0927 17.9165 9.99868 17.9165ZM9.99868 16.6489C10.4239 16.0848 10.7818 15.5159 11.0724 14.9422C11.363 14.3685 11.5997 13.7413 11.7823 13.0608H8.21501C8.40839 13.7627 8.64771 14.4005 8.93297 14.9743C9.21822 15.548 9.57345 16.1062 9.99868 16.6489ZM8.38493 16.4198C8.06548 15.9614 7.77862 15.4403 7.52434 14.8565C7.27007 14.2726 7.07241 13.674 6.93139 13.0608H4.10443C4.54461 13.9262 5.13489 14.6532 5.87528 15.2419C6.61568 15.8306 7.45223 16.2232 8.38493 16.4198ZM11.6124 16.4198C12.5451 16.2232 13.3817 15.8306 14.1221 15.2419C14.8625 14.6532 15.4527 13.9262 15.8929 13.0608H13.066C12.8982 13.6794 12.6872 14.2806 12.4329 14.8645C12.1787 15.4484 11.9052 15.9668 11.6124 16.4198ZM3.58041 11.8108H6.67818C6.62583 11.501 6.58791 11.1973 6.56441 10.8998C6.54091 10.6022 6.52916 10.3022 6.52916 9.9999C6.52916 9.69755 6.54091 9.3976 6.56441 9.10005C6.58791 8.8025 6.62583 8.49882 6.67818 8.18898H3.58041C3.50028 8.47211 3.43885 8.76645 3.39611 9.072C3.35338 9.37756 3.33201 9.68686 3.33201 9.9999C3.33201 10.3129 3.35338 10.6222 3.39611 10.9278C3.43885 11.2334 3.50028 11.5277 3.58041 11.8108ZM7.92816 11.8108H12.0692C12.1215 11.501 12.1595 11.2 12.183 10.9078C12.2065 10.6156 12.2182 10.3129 12.2182 9.9999C12.2182 9.68686 12.2065 9.38424 12.183 9.09204C12.1595 8.79984 12.1215 8.49882 12.0692 8.18898H7.92816C7.87581 8.49882 7.83788 8.79984 7.81436 9.09204C7.79086 9.38424 7.77911 9.68686 7.77911 9.9999C7.77911 10.3129 7.79086 10.6156 7.81436 10.9078C7.83788 11.2 7.87581 11.501 7.92816 11.8108ZM13.3192 11.8108H16.4169C16.4971 11.5277 16.5585 11.2334 16.6012 10.9278C16.644 10.6222 16.6653 10.3129 16.6653 9.9999C16.6653 9.68686 16.644 9.37756 16.6012 9.072C16.5585 8.76645 16.4971 8.47211 16.4169 8.18898H13.3192C13.3715 8.49882 13.4094 8.8025 13.4329 9.10005C13.4564 9.3976 13.4682 9.69755 13.4682 9.9999C13.4682 10.3022 13.4564 10.6022 13.4329 10.8998C13.4094 11.1973 13.3715 11.501 13.3192 11.8108ZM13.066 6.93902H15.8929C15.4474 6.06294 14.8611 5.3359 14.1341 4.7579C13.4071 4.17991 12.5665 3.78461 11.6124 3.572C11.9319 4.05704 12.2161 4.5875 12.465 5.16336C12.7139 5.73922 12.9143 6.33111 13.066 6.93902ZM8.21501 6.93902H11.7823C11.589 6.24244 11.3456 5.60061 11.0524 5.01352C10.7591 4.42645 10.4079 3.87223 9.99868 3.35086C9.58948 3.87223 9.23825 4.42645 8.94499 5.01352C8.65171 5.60061 8.40839 6.24244 8.21501 6.93902ZM4.10443 6.93902H6.93139C7.08309 6.33111 7.28342 5.73922 7.53236 5.16336C7.7813 4.5875 8.06548 4.05704 8.38493 3.572C7.42552 3.78461 6.58364 4.18125 5.85926 4.76192C5.1349 5.34259 4.54996 6.06829 4.10443 6.93902Z" fill="#191D24" fill-opacity="0.4"/>
                      </svg>
                      <span class="ps-1">USA</span>
                    </li>
                  </ul>
                </div>
                <div class="curriculum-right">
                  <ul>
                    <li>Hourly: <span class="text-muted">$200.00</span></li>
                    <li>
                      <a class="data-icon share" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z" fill="#0036E3"/>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a class="data-icon" href="#"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M16.5 3C19.5376 3 22 5.5 22 9C22 16 14.5 20 12 21.5C9.5 20 2 16 2 9C2 5.5 4.5 3 7.5 3C9.35997 3 11 4 12 5C13 4 14.64 3 16.5 3ZM12.9339 18.6038C13.8155 18.0485 14.61 17.4955 15.3549 16.9029C18.3337 14.533 20 11.9435 20 9C20 6.64076 18.463 5 16.5 5C15.4241 5 14.2593 5.56911 13.4142 6.41421L12 7.82843L10.5858 6.41421C9.74068 5.56911 8.5759 5 7.5 5C5.55906 5 4 6.6565 4 9C4 11.9435 5.66627 14.533 8.64514 16.9029C9.39 17.4955 10.1845 18.0485 11.0661 18.6038C11.3646 18.7919 11.6611 18.9729 12 19.1752C12.3389 18.9729 12.6354 18.7919 12.9339 18.6038Z" fill="#0036E3"/>
                        </svg>
                      </a>
                    </li>
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
                    <h4>
                      <a href="#">Policy Development Assistance Required for Chemical Engineering Industry</a>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="find-projects-time">
                <div class="curriculum">
                  <ul>
                  <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M17.0846 9.9999L13.7801 14.6761C13.6167 14.9091 13.4081 15.0907 13.1543 15.221C12.9006 15.3514 12.6295 15.4165 12.341 15.4165H4.42439C4.00879 15.4165 3.65382 15.2694 3.35949 14.975C3.06514 14.6807 2.91797 14.3257 2.91797 13.9101V6.08967C2.91797 5.67407 3.06514 5.31911 3.35949 5.02477C3.65382 4.73043 4.00879 4.58325 4.42439 4.58325H12.341C12.6348 4.58325 12.9073 4.6511 13.1583 4.78679C13.4094 4.92247 13.6167 5.10677 13.7801 5.33967L17.0846 9.9999ZM15.5558 9.9999L12.7417 6.04159C12.6989 5.98282 12.6415 5.93341 12.5694 5.89334C12.4973 5.85327 12.4212 5.83323 12.341 5.83323H4.42439C4.36027 5.83323 4.3015 5.85994 4.24807 5.91336C4.19466 5.96679 4.16795 6.02556 4.16795 6.08967V13.9101C4.16795 13.9742 4.19466 14.033 4.24807 14.0864C4.3015 14.1399 4.36027 14.1666 4.42439 14.1666H12.341C12.4212 14.1666 12.4973 14.1465 12.5694 14.1065C12.6415 14.0664 12.6989 14.017 12.7417 13.9582L15.5558 9.9999ZM4.16795 9.9999V14.1666V5.83323V9.9999Z" fill="#191D24" fill-opacity="0.4"/>
                      </svg>
                      <span class="ps-1">Curriculum development</span>
                    </li>
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M12.8929 13.7723L13.7711 12.8941L10.6237 9.7465V5.83323H9.3737V10.2531L12.8929 13.7723ZM10.0001 17.9165C8.90513 17.9165 7.87593 17.7088 6.91249 17.2932C5.94903 16.8777 5.11096 16.3137 4.39828 15.6013C3.68559 14.889 3.12137 14.0513 2.70564 13.0882C2.2899 12.1252 2.08203 11.0962 2.08203 10.0013C2.08203 8.90635 2.28981 7.87716 2.70536 6.91371C3.12092 5.95025 3.68488 5.11218 4.39724 4.3995C5.10961 3.68681 5.94732 3.12259 6.91034 2.70686C7.87336 2.29112 8.90234 2.08325 9.99728 2.08325C11.0922 2.08325 12.1214 2.29103 13.0849 2.70659C14.0483 3.12214 14.8864 3.6861 15.5991 4.39846C16.3118 5.11084 16.876 5.94854 17.2917 6.91157C17.7075 7.87458 17.9153 8.90356 17.9153 9.9985C17.9153 11.0934 17.7075 12.1226 17.292 13.0861C16.8764 14.0495 16.3125 14.8876 15.6001 15.6003C14.8877 16.313 14.05 16.8772 13.087 17.2929C12.124 17.7087 11.095 17.9165 10.0001 17.9165ZM9.99868 16.6666C11.8459 16.6666 13.4188 16.0173 14.7174 14.7186C16.016 13.42 16.6653 11.8471 16.6653 9.9999C16.6653 8.15268 16.016 6.57976 14.7174 5.28115C13.4188 3.98254 11.8459 3.33323 9.99868 3.33323C8.15145 3.33323 6.57854 3.98254 5.27993 5.28115C3.98132 6.57976 3.33201 8.15268 3.33201 9.9999C3.33201 11.8471 3.98132 13.42 5.27993 14.7186C6.57854 16.0173 8.15145 16.6666 9.99868 16.6666Z" fill="#191D24" fill-opacity="0.4"/>
                      </svg>
                      <span class="ps-1">15 hours ago</span>
                    </li>
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.99868 17.9165C8.91321 17.9165 7.88891 17.7085 6.92578 17.2923C5.96264 16.8762 5.12263 16.3097 4.40574 15.5928C3.68886 14.8759 3.12236 14.0359 2.70624 13.0728C2.2901 12.1097 2.08203 11.0854 2.08203 9.9999C2.08203 8.90589 2.2901 7.87945 2.70624 6.92059C3.12236 5.96172 3.68886 5.12385 4.40574 4.40696C5.12263 3.69009 5.96264 3.12359 6.92578 2.70746C7.88891 2.29132 8.91321 2.08325 9.99868 2.08325C11.0927 2.08325 12.1191 2.29132 13.078 2.70746C14.0369 3.12359 14.8747 3.69009 15.5916 4.40696C16.3085 5.12385 16.875 5.96172 17.2911 6.92059C17.7073 7.87945 17.9153 8.90589 17.9153 9.9999C17.9153 11.0854 17.7073 12.1097 17.2911 13.0728C16.875 14.0359 16.3085 14.8759 15.5916 15.5928C14.8747 16.3097 14.0369 16.8762 13.078 17.2923C12.1191 17.7085 11.0927 17.9165 9.99868 17.9165ZM9.99868 16.6489C10.4239 16.0848 10.7818 15.5159 11.0724 14.9422C11.363 14.3685 11.5997 13.7413 11.7823 13.0608H8.21501C8.40839 13.7627 8.64771 14.4005 8.93297 14.9743C9.21822 15.548 9.57345 16.1062 9.99868 16.6489ZM8.38493 16.4198C8.06548 15.9614 7.77862 15.4403 7.52434 14.8565C7.27007 14.2726 7.07241 13.674 6.93139 13.0608H4.10443C4.54461 13.9262 5.13489 14.6532 5.87528 15.2419C6.61568 15.8306 7.45223 16.2232 8.38493 16.4198ZM11.6124 16.4198C12.5451 16.2232 13.3817 15.8306 14.1221 15.2419C14.8625 14.6532 15.4527 13.9262 15.8929 13.0608H13.066C12.8982 13.6794 12.6872 14.2806 12.4329 14.8645C12.1787 15.4484 11.9052 15.9668 11.6124 16.4198ZM3.58041 11.8108H6.67818C6.62583 11.501 6.58791 11.1973 6.56441 10.8998C6.54091 10.6022 6.52916 10.3022 6.52916 9.9999C6.52916 9.69755 6.54091 9.3976 6.56441 9.10005C6.58791 8.8025 6.62583 8.49882 6.67818 8.18898H3.58041C3.50028 8.47211 3.43885 8.76645 3.39611 9.072C3.35338 9.37756 3.33201 9.68686 3.33201 9.9999C3.33201 10.3129 3.35338 10.6222 3.39611 10.9278C3.43885 11.2334 3.50028 11.5277 3.58041 11.8108ZM7.92816 11.8108H12.0692C12.1215 11.501 12.1595 11.2 12.183 10.9078C12.2065 10.6156 12.2182 10.3129 12.2182 9.9999C12.2182 9.68686 12.2065 9.38424 12.183 9.09204C12.1595 8.79984 12.1215 8.49882 12.0692 8.18898H7.92816C7.87581 8.49882 7.83788 8.79984 7.81436 9.09204C7.79086 9.38424 7.77911 9.68686 7.77911 9.9999C7.77911 10.3129 7.79086 10.6156 7.81436 10.9078C7.83788 11.2 7.87581 11.501 7.92816 11.8108ZM13.3192 11.8108H16.4169C16.4971 11.5277 16.5585 11.2334 16.6012 10.9278C16.644 10.6222 16.6653 10.3129 16.6653 9.9999C16.6653 9.68686 16.644 9.37756 16.6012 9.072C16.5585 8.76645 16.4971 8.47211 16.4169 8.18898H13.3192C13.3715 8.49882 13.4094 8.8025 13.4329 9.10005C13.4564 9.3976 13.4682 9.69755 13.4682 9.9999C13.4682 10.3022 13.4564 10.6022 13.4329 10.8998C13.4094 11.1973 13.3715 11.501 13.3192 11.8108ZM13.066 6.93902H15.8929C15.4474 6.06294 14.8611 5.3359 14.1341 4.7579C13.4071 4.17991 12.5665 3.78461 11.6124 3.572C11.9319 4.05704 12.2161 4.5875 12.465 5.16336C12.7139 5.73922 12.9143 6.33111 13.066 6.93902ZM8.21501 6.93902H11.7823C11.589 6.24244 11.3456 5.60061 11.0524 5.01352C10.7591 4.42645 10.4079 3.87223 9.99868 3.35086C9.58948 3.87223 9.23825 4.42645 8.94499 5.01352C8.65171 5.60061 8.40839 6.24244 8.21501 6.93902ZM4.10443 6.93902H6.93139C7.08309 6.33111 7.28342 5.73922 7.53236 5.16336C7.7813 4.5875 8.06548 4.05704 8.38493 3.572C7.42552 3.78461 6.58364 4.18125 5.85926 4.76192C5.1349 5.34259 4.54996 6.06829 4.10443 6.93902Z" fill="#191D24" fill-opacity="0.4"/>
                      </svg>
                      <span class="ps-1">USA</span>
                    </li>
                  </ul>
                </div>
                <div class="curriculum-right">
                <ul>
                    <li>Hourly: <span class="text-muted">$200.00</span></li>
                    <li>
                      <a class="data-icon share" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z" fill="#0036E3"/>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a class="data-icon" href="#"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M16.5 3C19.5376 3 22 5.5 22 9C22 16 14.5 20 12 21.5C9.5 20 2 16 2 9C2 5.5 4.5 3 7.5 3C9.35997 3 11 4 12 5C13 4 14.64 3 16.5 3ZM12.9339 18.6038C13.8155 18.0485 14.61 17.4955 15.3549 16.9029C18.3337 14.533 20 11.9435 20 9C20 6.64076 18.463 5 16.5 5C15.4241 5 14.2593 5.56911 13.4142 6.41421L12 7.82843L10.5858 6.41421C9.74068 5.56911 8.5759 5 7.5 5C5.55906 5 4 6.6565 4 9C4 11.9435 5.66627 14.533 8.64514 16.9029C9.39 17.4955 10.1845 18.0485 11.0661 18.6038C11.3646 18.7919 11.6611 18.9729 12 19.1752C12.3389 18.9729 12.6354 18.7919 12.9339 18.6038Z" fill="#0036E3"/>
                        </svg>
                      </a>
                    </li>
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
                    <h4>
                      <a href="#">LMS Expert required for Business Administration</a>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="find-projects-time">
                <div class="curriculum">
                  <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path d="M17.0846 9.9999L13.7801 14.6761C13.6167 14.9091 13.4081 15.0907 13.1543 15.221C12.9006 15.3514 12.6295 15.4165 12.341 15.4165H4.42439C4.00879 15.4165 3.65382 15.2694 3.35949 14.975C3.06514 14.6807 2.91797 14.3257 2.91797 13.9101V6.08967C2.91797 5.67407 3.06514 5.31911 3.35949 5.02477C3.65382 4.73043 4.00879 4.58325 4.42439 4.58325H12.341C12.6348 4.58325 12.9073 4.6511 13.1583 4.78679C13.4094 4.92247 13.6167 5.10677 13.7801 5.33967L17.0846 9.9999ZM15.5558 9.9999L12.7417 6.04159C12.6989 5.98282 12.6415 5.93341 12.5694 5.89334C12.4973 5.85327 12.4212 5.83323 12.341 5.83323H4.42439C4.36027 5.83323 4.3015 5.85994 4.24807 5.91336C4.19466 5.96679 4.16795 6.02556 4.16795 6.08967V13.9101C4.16795 13.9742 4.19466 14.033 4.24807 14.0864C4.3015 14.1399 4.36027 14.1666 4.42439 14.1666H12.341C12.4212 14.1666 12.4973 14.1465 12.5694 14.1065C12.6415 14.0664 12.6989 14.017 12.7417 13.9582L15.5558 9.9999ZM4.16795 9.9999V14.1666V5.83323V9.9999Z" fill="#191D24" fill-opacity="0.4"/>
                        </svg>
                        <span class="ps-1">Curriculum development</span>
                      </li>
                      <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path d="M12.8929 13.7723L13.7711 12.8941L10.6237 9.7465V5.83323H9.3737V10.2531L12.8929 13.7723ZM10.0001 17.9165C8.90513 17.9165 7.87593 17.7088 6.91249 17.2932C5.94903 16.8777 5.11096 16.3137 4.39828 15.6013C3.68559 14.889 3.12137 14.0513 2.70564 13.0882C2.2899 12.1252 2.08203 11.0962 2.08203 10.0013C2.08203 8.90635 2.28981 7.87716 2.70536 6.91371C3.12092 5.95025 3.68488 5.11218 4.39724 4.3995C5.10961 3.68681 5.94732 3.12259 6.91034 2.70686C7.87336 2.29112 8.90234 2.08325 9.99728 2.08325C11.0922 2.08325 12.1214 2.29103 13.0849 2.70659C14.0483 3.12214 14.8864 3.6861 15.5991 4.39846C16.3118 5.11084 16.876 5.94854 17.2917 6.91157C17.7075 7.87458 17.9153 8.90356 17.9153 9.9985C17.9153 11.0934 17.7075 12.1226 17.292 13.0861C16.8764 14.0495 16.3125 14.8876 15.6001 15.6003C14.8877 16.313 14.05 16.8772 13.087 17.2929C12.124 17.7087 11.095 17.9165 10.0001 17.9165ZM9.99868 16.6666C11.8459 16.6666 13.4188 16.0173 14.7174 14.7186C16.016 13.42 16.6653 11.8471 16.6653 9.9999C16.6653 8.15268 16.016 6.57976 14.7174 5.28115C13.4188 3.98254 11.8459 3.33323 9.99868 3.33323C8.15145 3.33323 6.57854 3.98254 5.27993 5.28115C3.98132 6.57976 3.33201 8.15268 3.33201 9.9999C3.33201 11.8471 3.98132 13.42 5.27993 14.7186C6.57854 16.0173 8.15145 16.6666 9.99868 16.6666Z" fill="#191D24" fill-opacity="0.4"/>
                        </svg>
                        <span class="ps-1">15 hours ago</span>
                      </li>
                      <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path d="M9.99868 17.9165C8.91321 17.9165 7.88891 17.7085 6.92578 17.2923C5.96264 16.8762 5.12263 16.3097 4.40574 15.5928C3.68886 14.8759 3.12236 14.0359 2.70624 13.0728C2.2901 12.1097 2.08203 11.0854 2.08203 9.9999C2.08203 8.90589 2.2901 7.87945 2.70624 6.92059C3.12236 5.96172 3.68886 5.12385 4.40574 4.40696C5.12263 3.69009 5.96264 3.12359 6.92578 2.70746C7.88891 2.29132 8.91321 2.08325 9.99868 2.08325C11.0927 2.08325 12.1191 2.29132 13.078 2.70746C14.0369 3.12359 14.8747 3.69009 15.5916 4.40696C16.3085 5.12385 16.875 5.96172 17.2911 6.92059C17.7073 7.87945 17.9153 8.90589 17.9153 9.9999C17.9153 11.0854 17.7073 12.1097 17.2911 13.0728C16.875 14.0359 16.3085 14.8759 15.5916 15.5928C14.8747 16.3097 14.0369 16.8762 13.078 17.2923C12.1191 17.7085 11.0927 17.9165 9.99868 17.9165ZM9.99868 16.6489C10.4239 16.0848 10.7818 15.5159 11.0724 14.9422C11.363 14.3685 11.5997 13.7413 11.7823 13.0608H8.21501C8.40839 13.7627 8.64771 14.4005 8.93297 14.9743C9.21822 15.548 9.57345 16.1062 9.99868 16.6489ZM8.38493 16.4198C8.06548 15.9614 7.77862 15.4403 7.52434 14.8565C7.27007 14.2726 7.07241 13.674 6.93139 13.0608H4.10443C4.54461 13.9262 5.13489 14.6532 5.87528 15.2419C6.61568 15.8306 7.45223 16.2232 8.38493 16.4198ZM11.6124 16.4198C12.5451 16.2232 13.3817 15.8306 14.1221 15.2419C14.8625 14.6532 15.4527 13.9262 15.8929 13.0608H13.066C12.8982 13.6794 12.6872 14.2806 12.4329 14.8645C12.1787 15.4484 11.9052 15.9668 11.6124 16.4198ZM3.58041 11.8108H6.67818C6.62583 11.501 6.58791 11.1973 6.56441 10.8998C6.54091 10.6022 6.52916 10.3022 6.52916 9.9999C6.52916 9.69755 6.54091 9.3976 6.56441 9.10005C6.58791 8.8025 6.62583 8.49882 6.67818 8.18898H3.58041C3.50028 8.47211 3.43885 8.76645 3.39611 9.072C3.35338 9.37756 3.33201 9.68686 3.33201 9.9999C3.33201 10.3129 3.35338 10.6222 3.39611 10.9278C3.43885 11.2334 3.50028 11.5277 3.58041 11.8108ZM7.92816 11.8108H12.0692C12.1215 11.501 12.1595 11.2 12.183 10.9078C12.2065 10.6156 12.2182 10.3129 12.2182 9.9999C12.2182 9.68686 12.2065 9.38424 12.183 9.09204C12.1595 8.79984 12.1215 8.49882 12.0692 8.18898H7.92816C7.87581 8.49882 7.83788 8.79984 7.81436 9.09204C7.79086 9.38424 7.77911 9.68686 7.77911 9.9999C7.77911 10.3129 7.79086 10.6156 7.81436 10.9078C7.83788 11.2 7.87581 11.501 7.92816 11.8108ZM13.3192 11.8108H16.4169C16.4971 11.5277 16.5585 11.2334 16.6012 10.9278C16.644 10.6222 16.6653 10.3129 16.6653 9.9999C16.6653 9.68686 16.644 9.37756 16.6012 9.072C16.5585 8.76645 16.4971 8.47211 16.4169 8.18898H13.3192C13.3715 8.49882 13.4094 8.8025 13.4329 9.10005C13.4564 9.3976 13.4682 9.69755 13.4682 9.9999C13.4682 10.3022 13.4564 10.6022 13.4329 10.8998C13.4094 11.1973 13.3715 11.501 13.3192 11.8108ZM13.066 6.93902H15.8929C15.4474 6.06294 14.8611 5.3359 14.1341 4.7579C13.4071 4.17991 12.5665 3.78461 11.6124 3.572C11.9319 4.05704 12.2161 4.5875 12.465 5.16336C12.7139 5.73922 12.9143 6.33111 13.066 6.93902ZM8.21501 6.93902H11.7823C11.589 6.24244 11.3456 5.60061 11.0524 5.01352C10.7591 4.42645 10.4079 3.87223 9.99868 3.35086C9.58948 3.87223 9.23825 4.42645 8.94499 5.01352C8.65171 5.60061 8.40839 6.24244 8.21501 6.93902ZM4.10443 6.93902H6.93139C7.08309 6.33111 7.28342 5.73922 7.53236 5.16336C7.7813 4.5875 8.06548 4.05704 8.38493 3.572C7.42552 3.78461 6.58364 4.18125 5.85926 4.76192C5.1349 5.34259 4.54996 6.06829 4.10443 6.93902Z" fill="#191D24" fill-opacity="0.4"/>
                        </svg>
                        <span class="ps-1">USA</span>
                      </li>
                  </ul>
                </div>
                <div class="curriculum-right">
                <ul>
                    <li>Hourly: <span class="text-muted">$200.00</span></li>
                    <li>
                      <a class="data-icon share" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z" fill="#0036E3"/>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a class="data-icon" href="#"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M16.5 3C19.5376 3 22 5.5 22 9C22 16 14.5 20 12 21.5C9.5 20 2 16 2 9C2 5.5 4.5 3 7.5 3C9.35997 3 11 4 12 5C13 4 14.64 3 16.5 3ZM12.9339 18.6038C13.8155 18.0485 14.61 17.4955 15.3549 16.9029C18.3337 14.533 20 11.9435 20 9C20 6.64076 18.463 5 16.5 5C15.4241 5 14.2593 5.56911 13.4142 6.41421L12 7.82843L10.5858 6.41421C9.74068 5.56911 8.5759 5 7.5 5C5.55906 5 4 6.6565 4 9C4 11.9435 5.66627 14.533 8.64514 16.9029C9.39 17.4955 10.1845 18.0485 11.0661 18.6038C11.3646 18.7919 11.6611 18.9729 12 19.1752C12.3389 18.9729 12.6354 18.7919 12.9339 18.6038Z" fill="#0036E3"/>
                        </svg>
                      </a>
                    </li>
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
                    <h4>
                      <a href="#">Seeking Finance Guidance for Budgeting and Forecasting in Higher Education</a>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="find-projects-time">
                <div class="curriculum">
                  <ul>
                  <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M17.0846 9.9999L13.7801 14.6761C13.6167 14.9091 13.4081 15.0907 13.1543 15.221C12.9006 15.3514 12.6295 15.4165 12.341 15.4165H4.42439C4.00879 15.4165 3.65382 15.2694 3.35949 14.975C3.06514 14.6807 2.91797 14.3257 2.91797 13.9101V6.08967C2.91797 5.67407 3.06514 5.31911 3.35949 5.02477C3.65382 4.73043 4.00879 4.58325 4.42439 4.58325H12.341C12.6348 4.58325 12.9073 4.6511 13.1583 4.78679C13.4094 4.92247 13.6167 5.10677 13.7801 5.33967L17.0846 9.9999ZM15.5558 9.9999L12.7417 6.04159C12.6989 5.98282 12.6415 5.93341 12.5694 5.89334C12.4973 5.85327 12.4212 5.83323 12.341 5.83323H4.42439C4.36027 5.83323 4.3015 5.85994 4.24807 5.91336C4.19466 5.96679 4.16795 6.02556 4.16795 6.08967V13.9101C4.16795 13.9742 4.19466 14.033 4.24807 14.0864C4.3015 14.1399 4.36027 14.1666 4.42439 14.1666H12.341C12.4212 14.1666 12.4973 14.1465 12.5694 14.1065C12.6415 14.0664 12.6989 14.017 12.7417 13.9582L15.5558 9.9999ZM4.16795 9.9999V14.1666V5.83323V9.9999Z" fill="#191D24" fill-opacity="0.4"/>
                      </svg>
                      <span class="ps-1">Curriculum development</span>
                    </li>
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M12.8929 13.7723L13.7711 12.8941L10.6237 9.7465V5.83323H9.3737V10.2531L12.8929 13.7723ZM10.0001 17.9165C8.90513 17.9165 7.87593 17.7088 6.91249 17.2932C5.94903 16.8777 5.11096 16.3137 4.39828 15.6013C3.68559 14.889 3.12137 14.0513 2.70564 13.0882C2.2899 12.1252 2.08203 11.0962 2.08203 10.0013C2.08203 8.90635 2.28981 7.87716 2.70536 6.91371C3.12092 5.95025 3.68488 5.11218 4.39724 4.3995C5.10961 3.68681 5.94732 3.12259 6.91034 2.70686C7.87336 2.29112 8.90234 2.08325 9.99728 2.08325C11.0922 2.08325 12.1214 2.29103 13.0849 2.70659C14.0483 3.12214 14.8864 3.6861 15.5991 4.39846C16.3118 5.11084 16.876 5.94854 17.2917 6.91157C17.7075 7.87458 17.9153 8.90356 17.9153 9.9985C17.9153 11.0934 17.7075 12.1226 17.292 13.0861C16.8764 14.0495 16.3125 14.8876 15.6001 15.6003C14.8877 16.313 14.05 16.8772 13.087 17.2929C12.124 17.7087 11.095 17.9165 10.0001 17.9165ZM9.99868 16.6666C11.8459 16.6666 13.4188 16.0173 14.7174 14.7186C16.016 13.42 16.6653 11.8471 16.6653 9.9999C16.6653 8.15268 16.016 6.57976 14.7174 5.28115C13.4188 3.98254 11.8459 3.33323 9.99868 3.33323C8.15145 3.33323 6.57854 3.98254 5.27993 5.28115C3.98132 6.57976 3.33201 8.15268 3.33201 9.9999C3.33201 11.8471 3.98132 13.42 5.27993 14.7186C6.57854 16.0173 8.15145 16.6666 9.99868 16.6666Z" fill="#191D24" fill-opacity="0.4"/>
                      </svg>
                      <span class="ps-1">15 hours ago</span>
                    </li>
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.99868 17.9165C8.91321 17.9165 7.88891 17.7085 6.92578 17.2923C5.96264 16.8762 5.12263 16.3097 4.40574 15.5928C3.68886 14.8759 3.12236 14.0359 2.70624 13.0728C2.2901 12.1097 2.08203 11.0854 2.08203 9.9999C2.08203 8.90589 2.2901 7.87945 2.70624 6.92059C3.12236 5.96172 3.68886 5.12385 4.40574 4.40696C5.12263 3.69009 5.96264 3.12359 6.92578 2.70746C7.88891 2.29132 8.91321 2.08325 9.99868 2.08325C11.0927 2.08325 12.1191 2.29132 13.078 2.70746C14.0369 3.12359 14.8747 3.69009 15.5916 4.40696C16.3085 5.12385 16.875 5.96172 17.2911 6.92059C17.7073 7.87945 17.9153 8.90589 17.9153 9.9999C17.9153 11.0854 17.7073 12.1097 17.2911 13.0728C16.875 14.0359 16.3085 14.8759 15.5916 15.5928C14.8747 16.3097 14.0369 16.8762 13.078 17.2923C12.1191 17.7085 11.0927 17.9165 9.99868 17.9165ZM9.99868 16.6489C10.4239 16.0848 10.7818 15.5159 11.0724 14.9422C11.363 14.3685 11.5997 13.7413 11.7823 13.0608H8.21501C8.40839 13.7627 8.64771 14.4005 8.93297 14.9743C9.21822 15.548 9.57345 16.1062 9.99868 16.6489ZM8.38493 16.4198C8.06548 15.9614 7.77862 15.4403 7.52434 14.8565C7.27007 14.2726 7.07241 13.674 6.93139 13.0608H4.10443C4.54461 13.9262 5.13489 14.6532 5.87528 15.2419C6.61568 15.8306 7.45223 16.2232 8.38493 16.4198ZM11.6124 16.4198C12.5451 16.2232 13.3817 15.8306 14.1221 15.2419C14.8625 14.6532 15.4527 13.9262 15.8929 13.0608H13.066C12.8982 13.6794 12.6872 14.2806 12.4329 14.8645C12.1787 15.4484 11.9052 15.9668 11.6124 16.4198ZM3.58041 11.8108H6.67818C6.62583 11.501 6.58791 11.1973 6.56441 10.8998C6.54091 10.6022 6.52916 10.3022 6.52916 9.9999C6.52916 9.69755 6.54091 9.3976 6.56441 9.10005C6.58791 8.8025 6.62583 8.49882 6.67818 8.18898H3.58041C3.50028 8.47211 3.43885 8.76645 3.39611 9.072C3.35338 9.37756 3.33201 9.68686 3.33201 9.9999C3.33201 10.3129 3.35338 10.6222 3.39611 10.9278C3.43885 11.2334 3.50028 11.5277 3.58041 11.8108ZM7.92816 11.8108H12.0692C12.1215 11.501 12.1595 11.2 12.183 10.9078C12.2065 10.6156 12.2182 10.3129 12.2182 9.9999C12.2182 9.68686 12.2065 9.38424 12.183 9.09204C12.1595 8.79984 12.1215 8.49882 12.0692 8.18898H7.92816C7.87581 8.49882 7.83788 8.79984 7.81436 9.09204C7.79086 9.38424 7.77911 9.68686 7.77911 9.9999C7.77911 10.3129 7.79086 10.6156 7.81436 10.9078C7.83788 11.2 7.87581 11.501 7.92816 11.8108ZM13.3192 11.8108H16.4169C16.4971 11.5277 16.5585 11.2334 16.6012 10.9278C16.644 10.6222 16.6653 10.3129 16.6653 9.9999C16.6653 9.68686 16.644 9.37756 16.6012 9.072C16.5585 8.76645 16.4971 8.47211 16.4169 8.18898H13.3192C13.3715 8.49882 13.4094 8.8025 13.4329 9.10005C13.4564 9.3976 13.4682 9.69755 13.4682 9.9999C13.4682 10.3022 13.4564 10.6022 13.4329 10.8998C13.4094 11.1973 13.3715 11.501 13.3192 11.8108ZM13.066 6.93902H15.8929C15.4474 6.06294 14.8611 5.3359 14.1341 4.7579C13.4071 4.17991 12.5665 3.78461 11.6124 3.572C11.9319 4.05704 12.2161 4.5875 12.465 5.16336C12.7139 5.73922 12.9143 6.33111 13.066 6.93902ZM8.21501 6.93902H11.7823C11.589 6.24244 11.3456 5.60061 11.0524 5.01352C10.7591 4.42645 10.4079 3.87223 9.99868 3.35086C9.58948 3.87223 9.23825 4.42645 8.94499 5.01352C8.65171 5.60061 8.40839 6.24244 8.21501 6.93902ZM4.10443 6.93902H6.93139C7.08309 6.33111 7.28342 5.73922 7.53236 5.16336C7.7813 4.5875 8.06548 4.05704 8.38493 3.572C7.42552 3.78461 6.58364 4.18125 5.85926 4.76192C5.1349 5.34259 4.54996 6.06829 4.10443 6.93902Z" fill="#191D24" fill-opacity="0.4"/>
                      </svg>
                      <span class="ps-1">USA</span>
                    </li>
                  </ul>
                </div>
                <div class="curriculum-right">
                  <ul>
                    <li>Hourly: <span class="text-muted">$200.00</span></li>
                    <li>
                      <a class="data-icon share" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z" fill="#0036E3"/>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a class="data-icon" href="#"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M16.5 3C19.5376 3 22 5.5 22 9C22 16 14.5 20 12 21.5C9.5 20 2 16 2 9C2 5.5 4.5 3 7.5 3C9.35997 3 11 4 12 5C13 4 14.64 3 16.5 3ZM12.9339 18.6038C13.8155 18.0485 14.61 17.4955 15.3549 16.9029C18.3337 14.533 20 11.9435 20 9C20 6.64076 18.463 5 16.5 5C15.4241 5 14.2593 5.56911 13.4142 6.41421L12 7.82843L10.5858 6.41421C9.74068 5.56911 8.5759 5 7.5 5C5.55906 5 4 6.6565 4 9C4 11.9435 5.66627 14.533 8.64514 16.9029C9.39 17.4955 10.1845 18.0485 11.0661 18.6038C11.3646 18.7919 11.6611 18.9729 12 19.1752C12.3389 18.9729 12.6354 18.7919 12.9339 18.6038Z" fill="#0036E3"/>
                        </svg>
                      </a>
                    </li>
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
                    <h4>
                      <a href="#">Expert in Environmental Economics for Academic Research</a>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="find-projects-time">
                <div class="curriculum">
                  <ul>
                  <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M17.0846 9.9999L13.7801 14.6761C13.6167 14.9091 13.4081 15.0907 13.1543 15.221C12.9006 15.3514 12.6295 15.4165 12.341 15.4165H4.42439C4.00879 15.4165 3.65382 15.2694 3.35949 14.975C3.06514 14.6807 2.91797 14.3257 2.91797 13.9101V6.08967C2.91797 5.67407 3.06514 5.31911 3.35949 5.02477C3.65382 4.73043 4.00879 4.58325 4.42439 4.58325H12.341C12.6348 4.58325 12.9073 4.6511 13.1583 4.78679C13.4094 4.92247 13.6167 5.10677 13.7801 5.33967L17.0846 9.9999ZM15.5558 9.9999L12.7417 6.04159C12.6989 5.98282 12.6415 5.93341 12.5694 5.89334C12.4973 5.85327 12.4212 5.83323 12.341 5.83323H4.42439C4.36027 5.83323 4.3015 5.85994 4.24807 5.91336C4.19466 5.96679 4.16795 6.02556 4.16795 6.08967V13.9101C4.16795 13.9742 4.19466 14.033 4.24807 14.0864C4.3015 14.1399 4.36027 14.1666 4.42439 14.1666H12.341C12.4212 14.1666 12.4973 14.1465 12.5694 14.1065C12.6415 14.0664 12.6989 14.017 12.7417 13.9582L15.5558 9.9999ZM4.16795 9.9999V14.1666V5.83323V9.9999Z" fill="#191D24" fill-opacity="0.4"/>
                      </svg>
                      <span class="ps-1">Curriculum development</span>
                    </li>
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M12.8929 13.7723L13.7711 12.8941L10.6237 9.7465V5.83323H9.3737V10.2531L12.8929 13.7723ZM10.0001 17.9165C8.90513 17.9165 7.87593 17.7088 6.91249 17.2932C5.94903 16.8777 5.11096 16.3137 4.39828 15.6013C3.68559 14.889 3.12137 14.0513 2.70564 13.0882C2.2899 12.1252 2.08203 11.0962 2.08203 10.0013C2.08203 8.90635 2.28981 7.87716 2.70536 6.91371C3.12092 5.95025 3.68488 5.11218 4.39724 4.3995C5.10961 3.68681 5.94732 3.12259 6.91034 2.70686C7.87336 2.29112 8.90234 2.08325 9.99728 2.08325C11.0922 2.08325 12.1214 2.29103 13.0849 2.70659C14.0483 3.12214 14.8864 3.6861 15.5991 4.39846C16.3118 5.11084 16.876 5.94854 17.2917 6.91157C17.7075 7.87458 17.9153 8.90356 17.9153 9.9985C17.9153 11.0934 17.7075 12.1226 17.292 13.0861C16.8764 14.0495 16.3125 14.8876 15.6001 15.6003C14.8877 16.313 14.05 16.8772 13.087 17.2929C12.124 17.7087 11.095 17.9165 10.0001 17.9165ZM9.99868 16.6666C11.8459 16.6666 13.4188 16.0173 14.7174 14.7186C16.016 13.42 16.6653 11.8471 16.6653 9.9999C16.6653 8.15268 16.016 6.57976 14.7174 5.28115C13.4188 3.98254 11.8459 3.33323 9.99868 3.33323C8.15145 3.33323 6.57854 3.98254 5.27993 5.28115C3.98132 6.57976 3.33201 8.15268 3.33201 9.9999C3.33201 11.8471 3.98132 13.42 5.27993 14.7186C6.57854 16.0173 8.15145 16.6666 9.99868 16.6666Z" fill="#191D24" fill-opacity="0.4"/>
                      </svg>
                      <span class="ps-1">15 hours ago</span>
                    </li>
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.99868 17.9165C8.91321 17.9165 7.88891 17.7085 6.92578 17.2923C5.96264 16.8762 5.12263 16.3097 4.40574 15.5928C3.68886 14.8759 3.12236 14.0359 2.70624 13.0728C2.2901 12.1097 2.08203 11.0854 2.08203 9.9999C2.08203 8.90589 2.2901 7.87945 2.70624 6.92059C3.12236 5.96172 3.68886 5.12385 4.40574 4.40696C5.12263 3.69009 5.96264 3.12359 6.92578 2.70746C7.88891 2.29132 8.91321 2.08325 9.99868 2.08325C11.0927 2.08325 12.1191 2.29132 13.078 2.70746C14.0369 3.12359 14.8747 3.69009 15.5916 4.40696C16.3085 5.12385 16.875 5.96172 17.2911 6.92059C17.7073 7.87945 17.9153 8.90589 17.9153 9.9999C17.9153 11.0854 17.7073 12.1097 17.2911 13.0728C16.875 14.0359 16.3085 14.8759 15.5916 15.5928C14.8747 16.3097 14.0369 16.8762 13.078 17.2923C12.1191 17.7085 11.0927 17.9165 9.99868 17.9165ZM9.99868 16.6489C10.4239 16.0848 10.7818 15.5159 11.0724 14.9422C11.363 14.3685 11.5997 13.7413 11.7823 13.0608H8.21501C8.40839 13.7627 8.64771 14.4005 8.93297 14.9743C9.21822 15.548 9.57345 16.1062 9.99868 16.6489ZM8.38493 16.4198C8.06548 15.9614 7.77862 15.4403 7.52434 14.8565C7.27007 14.2726 7.07241 13.674 6.93139 13.0608H4.10443C4.54461 13.9262 5.13489 14.6532 5.87528 15.2419C6.61568 15.8306 7.45223 16.2232 8.38493 16.4198ZM11.6124 16.4198C12.5451 16.2232 13.3817 15.8306 14.1221 15.2419C14.8625 14.6532 15.4527 13.9262 15.8929 13.0608H13.066C12.8982 13.6794 12.6872 14.2806 12.4329 14.8645C12.1787 15.4484 11.9052 15.9668 11.6124 16.4198ZM3.58041 11.8108H6.67818C6.62583 11.501 6.58791 11.1973 6.56441 10.8998C6.54091 10.6022 6.52916 10.3022 6.52916 9.9999C6.52916 9.69755 6.54091 9.3976 6.56441 9.10005C6.58791 8.8025 6.62583 8.49882 6.67818 8.18898H3.58041C3.50028 8.47211 3.43885 8.76645 3.39611 9.072C3.35338 9.37756 3.33201 9.68686 3.33201 9.9999C3.33201 10.3129 3.35338 10.6222 3.39611 10.9278C3.43885 11.2334 3.50028 11.5277 3.58041 11.8108ZM7.92816 11.8108H12.0692C12.1215 11.501 12.1595 11.2 12.183 10.9078C12.2065 10.6156 12.2182 10.3129 12.2182 9.9999C12.2182 9.68686 12.2065 9.38424 12.183 9.09204C12.1595 8.79984 12.1215 8.49882 12.0692 8.18898H7.92816C7.87581 8.49882 7.83788 8.79984 7.81436 9.09204C7.79086 9.38424 7.77911 9.68686 7.77911 9.9999C7.77911 10.3129 7.79086 10.6156 7.81436 10.9078C7.83788 11.2 7.87581 11.501 7.92816 11.8108ZM13.3192 11.8108H16.4169C16.4971 11.5277 16.5585 11.2334 16.6012 10.9278C16.644 10.6222 16.6653 10.3129 16.6653 9.9999C16.6653 9.68686 16.644 9.37756 16.6012 9.072C16.5585 8.76645 16.4971 8.47211 16.4169 8.18898H13.3192C13.3715 8.49882 13.4094 8.8025 13.4329 9.10005C13.4564 9.3976 13.4682 9.69755 13.4682 9.9999C13.4682 10.3022 13.4564 10.6022 13.4329 10.8998C13.4094 11.1973 13.3715 11.501 13.3192 11.8108ZM13.066 6.93902H15.8929C15.4474 6.06294 14.8611 5.3359 14.1341 4.7579C13.4071 4.17991 12.5665 3.78461 11.6124 3.572C11.9319 4.05704 12.2161 4.5875 12.465 5.16336C12.7139 5.73922 12.9143 6.33111 13.066 6.93902ZM8.21501 6.93902H11.7823C11.589 6.24244 11.3456 5.60061 11.0524 5.01352C10.7591 4.42645 10.4079 3.87223 9.99868 3.35086C9.58948 3.87223 9.23825 4.42645 8.94499 5.01352C8.65171 5.60061 8.40839 6.24244 8.21501 6.93902ZM4.10443 6.93902H6.93139C7.08309 6.33111 7.28342 5.73922 7.53236 5.16336C7.7813 4.5875 8.06548 4.05704 8.38493 3.572C7.42552 3.78461 6.58364 4.18125 5.85926 4.76192C5.1349 5.34259 4.54996 6.06829 4.10443 6.93902Z" fill="#191D24" fill-opacity="0.4"/>
                      </svg>
                      <span class="ps-1">USA</span>
                    </li>
                  </ul>
                </div>
                <div class="curriculum-right">
                  <ul>
                    <li>Hourly: <span class="text-muted">$200.00</span></li>
                    <li>
                      <a class="data-icon share" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z" fill="#0036E3"/>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a class="data-icon" href="#"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M16.5 3C19.5376 3 22 5.5 22 9C22 16 14.5 20 12 21.5C9.5 20 2 16 2 9C2 5.5 4.5 3 7.5 3C9.35997 3 11 4 12 5C13 4 14.64 3 16.5 3ZM12.9339 18.6038C13.8155 18.0485 14.61 17.4955 15.3549 16.9029C18.3337 14.533 20 11.9435 20 9C20 6.64076 18.463 5 16.5 5C15.4241 5 14.2593 5.56911 13.4142 6.41421L12 7.82843L10.5858 6.41421C9.74068 5.56911 8.5759 5 7.5 5C5.55906 5 4 6.6565 4 9C4 11.9435 5.66627 14.533 8.64514 16.9029C9.39 17.4955 10.1845 18.0485 11.0661 18.6038C11.3646 18.7919 11.6611 18.9729 12 19.1752C12.3389 18.9729 12.6354 18.7919 12.9339 18.6038Z" fill="#0036E3"/>
                        </svg>
                      </a>
                    </li>
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
    @vite('resources/js/find-project.js')
@endpush
