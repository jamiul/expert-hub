@extends('frontend.layouts.front-client-dashboard-layout')
@section('content')
<div class="find-consultant databasepading">
      <div class="container">
        <div class="row">

        <div class="col-md-4 col-sm-4">
                <div class="left-sidebar">
                    <div class="search-block">
                        <form class="example">
                            <input type="text" placeholder="Search consultant..." name="search">
                            <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M19.6 21L13.3 14.7C12.8 15.1 12.225 15.4167 11.575 15.65C10.925 15.8833 10.2333 16 9.5 16C7.68333 16 6.14583 15.3708 4.8875 14.1125C3.62917 12.8542 3 11.3167 3 9.5C3 7.68333 3.62917 6.14583 4.8875 4.8875C6.14583 3.62917 7.68333 3 9.5 3C11.3167 3 12.8542 3.62917 14.1125 4.8875C15.3708 6.14583 16 7.68333 16 9.5C16 10.2333 15.8833 10.925 15.65 11.575C15.4167 12.225 15.1 12.8 14.7 13.3L21 19.6L19.6 21ZM9.5 14C10.75 14 11.8125 13.5625 12.6875 12.6875C13.5625 11.8125 14 10.75 14 9.5C14 8.25 13.5625 7.1875 12.6875 6.3125C11.8125 5.4375 10.75 5 9.5 5C8.25 5 7.1875 5.4375 6.3125 6.3125C5.4375 7.1875 5 8.25 5 9.5C5 10.75 5.4375 11.8125 6.3125 12.6875C7.1875 13.5625 8.25 14 9.5 14Z" fill="#303744"/>
                              </svg>
                            </button>
                        </form>
                    </div>
                    <div class="filter">
                        <h5>Filter</h5>
                        <a href="#">Clear filters</a>
                    </div>
                    <div class="study-level">
                        <h3>Consultant by Categories</h3>
                        <div class="accordion">
                            <div class="at-item">
                                <div class="at-title">
                                    <h2>
                                        <input type="checkbox" id="0">
                                        <span for="0">Accreditation Specialists</span>
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
                                        <span for="0">Curriculum Experts</span>
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
                                        <span for="0">LMS Experts</span>
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
                                        <span for="0">Industry Experts</span>
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
                                        <span for="0">Finance Experts</span>
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
                                        <span for="0">Policy Experts</span>
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
                                        <span for="0">Project Managers</span>
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
                                        <span for="0">Research and Analysis</span>
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
                                        <span for="0">Writing and Editing</span>
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
                                        <span for="0">Scholarships Advisors</span>
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
                            <div class="at-item">
                                <div class="at-title">
                                    <h2>
                                        <input type="checkbox" id="0">
                                        <span for="0">International Education Experts</span>
                                    </h2>
                                </div>
                                <div class="at-tab" style="display: none;">
                                    <ul>
                                        <li>
                                            <input type="checkbox" id="111">
                                            <label for="111">Accreditation Documentation</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="112">
                                            <label for="112">Accreditation Process</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="113">
                                            <label for="113">Accreditation Renewal</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="114">
                                            <label for="114">Accreditation Reporting</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="115">
                                            <label for="115">Accreditation Review</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="116">
                                            <label for="116">Accreditation Documentation</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="117">
                                            <label for="117">Accreditation Process</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="118">
                                            <label for="118">Accreditation Renewal</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="119">
                                            <label for="119">Accreditation Reporting</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="120">
                                            <label for="120">Accreditation Review</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="study-level">
                        <h3>Hourly Rate (USD)</h3>
                        <div class="custom-select">
                            <select>
                                <option>Any hourly rate</option>
                                <option>$50-$100 / hour</option>
                                <option>$101-$150 / hour</option>
                                <option>$151-$200 / hour</option>
                                <option>$201-$250 / hour</option>
                                <option>$251-$300 / hour</option>
                                <option>> $300</option>
                            </select>
                        </div>
                    </div>
                    <div class="study-level study-level-media">
                        <h3>Available for</h3>
                        <ul>
                            <li>
                                <input type="checkbox" id="121">
                                <label for="121">Consultation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="122">
                                <label for="122">Keynote speaker</label>
                            </li>
                            <li>
                                <input type="checkbox" id="123">
                                <label for="123">Media Interview</label>
                            </li>
                        </ul>
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
                      <img src="{{ asset('assets/frontend/img/consultant1.png') }}">
                    </div>
                    <div class="database-text">
                      <h4><a href="#">Professor Michael Kassiou</a></h4>
                      <span>Agricultural Engineering Expert</span>
                      <span>University of Sydney</span>
                      <span>Australia</span>
                    </div>
                  </div>
                  <div class="database-right">
                    <a class="data-icon" href="#"><img src="{{ asset('assets/frontend/img/like-icon.png') }}"></a>
                    <a class="data-icon" href="#"><img src=" {{ asset('assets/frontend/img/share-icon.png') }}"></a>
                  </div>
                </div>
                <div class="consultant-reviw">
                  <ul>
                    <li><strong>$200</strong> / hr</li>
                    <li>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </li>
                  </ul>
                </div>
                <div class="database-p">
                  <p>Prof. Miles esther is an accomplished Curriculum Development Specialist with a distinguished career in education and a track record of providing consultation services.</p>
                </div>
                <div class="projects-slider">
                  <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                        <h4>Communication Skills</h4>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 4">
                        <h4>Industry Trends Awareness</h4>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                        <h4>Educational Research</h4>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                        <h4>System Research</h4>
                      </button>
                      </button>

                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                        <h4 class="more-read">+12 More</h4>
                      </button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="right-sidebar">
              <div class="right-database">
                <div class="database-block">
                  <div class="database-contant">
                    <div class="database-img">
                      <img src="{{ asset('assets/frontend/img/consultant2.png') }}">
                    </div>
                    <div class="database-text">
                      <h4><a href="#">Professor Miles Esther</a></h4>
                      <span>Communication Studies Expert</span>
                      <span>Monash University</span>
                      <span>Australia</span>
                    </div>
                  </div>
                  <div class="database-right">
                    <a class="data-icon" href="#"><img src="{{ asset('assets/frontend/img/like-icon.png') }}"></a>
                    <a class="data-icon" href="#"><img src=" {{ asset('assets/frontend/img/share-icon.png') }}"></a>
                  </div>
                </div>
                <div class="consultant-reviw">
                  <ul>
                    <li><strong>$300</strong> / hr</li>
                    <li>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </li>
                  </ul>
                </div>
                <div class="database-p">
                <p>Prof. Miles esther is an accomplished Curriculum Development Specialist with a distinguished career in education and a track record of providing consultation services.</p>
                </div>
                <div class="projects-slider">
                  <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                        <h4>Communication Skills</h4>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 4">
                        <h4>Industry Trends Awareness</h4>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                        <h4>Educational Research</h4>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                        <h4>System Research</h4>
                      </button>
                      </button>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                        <h4 class="more-read">+12 More</h4>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="right-sidebar">
              <div class="right-database">
                <div class="database-block">
                  <div class="database-contant">
                    <div class="database-img">
                      <img src="{{ asset('assets/frontend/img/consultant3.png') }}">
                    </div>
                    <div class="database-text">
                      <h4><a href="#">Professor Miles Esther</a></h4>
                      <span>Communication Studies Expert</span>
                      <span>University of New South Wales</span>
                      <span>Australia</span>
                    </div>
                  </div>
                  <div class="database-right">
                    <a class="data-icon" href="#"><img src="{{ asset('assets/frontend/img/like-icon.png') }}"></a>
                    <a class="data-icon" href="#"><img src=" {{ asset('assets/frontend/img/share-icon.png') }}"></a>
                  </div>
                </div>
                <div class="consultant-reviw">
                  <ul>
                    <li><strong>$300</strong> / hr</li>
                    <li>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </li>
                  </ul>
                </div>
                <div class="database-p">
                <p>Prof. Miles esther is an accomplished Curriculum Development Specialist with a distinguished career in education and a track record of providing consultation services.</p>
                </div>
                <div class="projects-slider">
                  <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                        <h4>Communication Skills</h4>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 4">
                        <h4>Industry Trends Awareness</h4>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                        <h4>Educational Research</h4>
                      </button>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                        <h4>Industry Trends</h4>
                      </button>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                        <h4 class="more-read">+12 More</h4>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="right-sidebar">
              <div class="right-database">
                <div class="database-block">
                  <div class="database-contant">
                    <div class="database-img">
                      <img src="{{ asset('assets/frontend/img/consultant4.png') }}">
                    </div>
                    <div class="database-text">
                      <h4><a href="#">Professor Miles Esther</a></h4>
                      <span>Communication Studies Expert</span>
                      <span>University of New South Wales</span>
                      <span>Australia</span>
                    </div>
                  </div>
                  <div class="database-right">
                    <a class="data-icon" href="#"><img src="{{ asset('assets/frontend/img/like-icon.png') }}"></a>
                    <a class="data-icon" href="#"><img src=" {{ asset('assets/frontend/img/share-icon.png') }}"></a>
                  </div>
                </div>
                <div class="consultant-reviw">
                  <ul>
                    <li><strong>$300</strong> / hr</li>
                    <li>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </li>
                  </ul>
                </div>
                <div class="database-p">
                <p>Prof. Miles esther is an accomplished Curriculum Development Specialist with a distinguished career in education and a track record of providing consultation services.</p>
                </div>
                <div class="projects-slider">
                  <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                        <h4>Communication Skills</h4>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 4">
                        <h4>Industry Trends Awareness</h4>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                        <h4>Educational Research</h4>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                        <h4>System Research</h4>
                      </button>
                      </button>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                        <h4 class="more-read">+12 More</h4>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="right-sidebar">
              <div class="right-database">
                <div class="database-block">
                  <div class="database-contant">
                    <div class="database-img">
                      <img src="{{ asset('assets/frontend/img/consultant5.png') }}">
                    </div>
                    <div class="database-text">
                      <h4><a href="#">Professor Miles Esther</a></h4>
                      <span>Communication Studies Expert</span>
                      <span>University of New South Wales</span>
                      <span>Australia</span>
                    </div>
                  </div>
                  <div class="database-right">
                    <a class="data-icon" href="#"><img src="{{ asset('assets/frontend/img/like-icon.png') }}"></a>
                    <a class="data-icon" href="#"><img src=" {{ asset('assets/frontend/img/share-icon.png') }}"></a>
                  </div>
                </div>
                <div class="consultant-reviw">
                  <ul>
                    <li><strong>$300</strong> / hr</li>
                    <li>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </li>
                  </ul>
                </div>
                <div class="database-p">
                <p>Prof. Miles esther is an accomplished Curriculum Development Specialist with a distinguished career in education and a track record of providing consultation services.</p>
                </div>
                <div class="projects-slider">
                  <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                        <h4>Communication Skills</h4>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 4">
                        <h4>Industry Trends Awareness</h4>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                        <h4>Educational Research</h4>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                        <h4>System Research</h4>
                      </button>
                      </button>
                      </button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                        <h4 class="more-read">+12 More</h4>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ==================  Pagination start Here ============ -->
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
          </div>
        </div>
      </div>
    </div>



    <div class="about-slider about-slider-experts-database mt-4">
      <div class="container">
        <div class="heading">
          <h4>Instructor</h4>
          <h2>Meet Our Experts for Consultation</h2>
        </div>
        <div id="owl-carousel" class="owl-carousel owl-carouselfive owl-theme">
          <div class="item">
            <div class="carousel-img">
              <img src="{{ asset('assets/frontend/img/find-trad1.png') }}">
            </div>
            <div class="carousel-text">
              <h4>Darrell Steward</h4>
              <p>Accreditation Specialist</p>
              <h5>Oxford University</h5>
            </div>
          </div>
          <div class="item">
            <div class="carousel-img">
              <img src="{{ asset('assets/frontend/img/find-trad2.png') }}">
            </div>
            <div class="carousel-text">
              <h4>Theresa Webb</h4>
              <p>Industry Expert</p>
              <h5>Harvard University</h5>
            </div>
          </div>
          <div class="item">
            <div class="carousel-img">
              <img src="{{ asset('assets/frontend/img/find-trad3.png') }}">
            </div>
            <div class="carousel-text">
              <h4>Marvin McKinney</h4>
              <p>Policy Expert</p>
              <h5>Oxford University</h5>
            </div>
          </div>
          <div class="item">
            <div class="carousel-img">
              <img src="{{ asset('assets/frontend/img/find-trad4.png') }}">
            </div>
            <div class="carousel-text">
              <h4>Marvin McKinney</h4>
              <p>Policy Expert</p>
              <h5>Oxford University</h5>
            </div>
          </div>
          <div class="item">
            <div class="carousel-img">
              <img src="{{ asset('assets/frontend/img/find-trad5.png') }}">
            </div>
            <div class="carousel-text">
              <h4>Marvin McKinney</h4>
              <p>Policy Expert</p>
              <h5>Oxford University</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
