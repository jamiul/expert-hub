@extends('frontend.layouts.front-client-dashboard-layout')

@section('content')
<section class="client-dashboard mx-auto my-5">
  <div class="container">
    <div class="row">
      <div class="all-job-area all-job-area-board d-flex justify-content-between">
        <div class="all-project">
          <h2>All Projects</h2>
        </div>
        <div class="post-job d-flex justify-content-center">
          <button class="btn btn-postjob btn-postjob-dashboard">Post a Job</button>
        </div>
      </div>
    </div>
    <!-- short area start Here -->
    <div class="row ">
      <div class="short-by-area all-padding-client">
        <div class="select-date">
          <div class="date-item">
            <p>Sort By</p>
            <div class="study-level">
                <div class="calendar-box position-relative">
                  <input type="text" id="dateInput" placeholder="Start Date">
                  <div class="calendar" id="calendar">
                    <div class="header">
                      <button id="prevBtn"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
  <path d="M11.25 14L6.75 9.5L11.25 5" stroke="#5C5C5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></button>
                      <h2 id="monthYear">Month Year</h2>
                      <button id="nextBtn"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
  <path d="M6.75 14L11.25 9.5L6.75 5" stroke="#5C5C5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></button>
                    </div>
                    <div class="days" id="daysContainer"></div>
                  </div>
                </div>
              </div>

          </div>
          <div class="short-by-select">
            <select class="form-select according-select" aria-label="Default select example">
              <option selected>Ascending</option>
              <option value="1">Ascending</option>
              <option value="2">Ascending</option>
              <option value="3">Ascending</option>
            </select>
          </div>
        </div>
        <div class="divided"></div>
        <div class="search-by">
          <form class="example search-form">
            <input type="text" placeholder="Search by contract, client, or company" name="search">
            <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
              <path d="M19.6 21.5L13.3 15.2C12.8 15.6 12.225 15.9167 11.575 16.15C10.925 16.3833 10.2333 16.5 9.5 16.5C7.68333 16.5 6.14583 15.8708 4.8875 14.6125C3.62917 13.3542 3 11.8167 3 10C3 8.18333 3.62917 6.64583 4.8875 5.3875C6.14583 4.12917 7.68333 3.5 9.5 3.5C11.3167 3.5 12.8542 4.12917 14.1125 5.3875C15.3708 6.64583 16 8.18333 16 10C16 10.7333 15.8833 11.425 15.65 12.075C15.4167 12.725 15.1 13.3 14.7 13.8L21 20.1L19.6 21.5ZM9.5 14.5C10.75 14.5 11.8125 14.0625 12.6875 13.1875C13.5625 12.3125 14 11.25 14 10C14 8.75 13.5625 7.6875 12.6875 6.8125C11.8125 5.9375 10.75 5.5 9.5 5.5C8.25 5.5 7.1875 5.9375 6.3125 6.8125C5.4375 7.6875 5 8.75 5 10C5 11.25 5.4375 12.3125 6.3125 13.1875C7.1875 14.0625 8.25 14.5 9.5 14.5Z" fill="white"/>
            </svg>
            </button>
          </form>
        </div>
      </div>
    </div>
    <!-- short area start Here -->
    <!-- edit draft area start Here -->
    <div class="row all-border-bottom">
      <div class="col-7">
        <div class="edit-draft-left">
          <h6>LMS Expert required for Business Administration</h6>
          <button class="btn-edit-draft">Edit Draft</button>
        </div>
      </div>
      <div class="col-5">
        <div class="edit-draft-right">
          <div class="draft-hour">
            <span class="draft-color">Draft</span>
            <span class="hourly-color">Hourly</span>
          </div>
          <div class="draft-proposal">
            <span class="draft-color">Proposal</span>
            <span class="hourly-color">56 (48 new)</span>
          </div>
          <div class="draft-message">
            <span class="draft-color">Message</span>
            <span class="hourly-color">7</span>
          </div>
          <div class="draft-hire">
            <span class="draft-color">Hired</span>
            <span class="hourly-color">1</span>
          </div>
          <div class="draft-options">
            <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
              </svg>
              </a>
              <ul class="dropdown-menu dropdown-show">

                <li>
                  <a class="dropdown-item dropdown-heading active" data-bs-toggle="modal" data-bs-target="#editpostingcustomize" href="#">View Job Posting</a>
                </li>

                <li>
                  <a class="dropdown-item dropdown-heading " data-bs-toggle="modal" data-bs-target="#editpostingcustomize" href="#">Edit Posting</a>
                </li>

                <li>
                  <a class="dropdown-item dropdown-heading "data-bs-toggle="modal" data-bs-target="#removeposting" href="#">Remove Posting</a>
                </li>

                <li>
                  <a class="dropdown-item dropdown-heading">Invite Experts</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row all-border-bottom">
      <div class="col-7">
        <div class="edit-draft-left">
          <h6>LMS Expert required for Business Administration</h6>
          <button class="btn-edit-draft">View Proposal</button>
        </div>
      </div>
      <div class="col-5">
        <div class="edit-draft-right">
          <div class="draft-hour">
            <span class="draft-color">Public</span>
            <span class="hourly-color">Hourly</span>
          </div>
          <div class="draft-proposal">
            <span class="draft-color">Proposal</span>
            <span class="hourly-color">56 (48 new)</span>
          </div>
          <div class="draft-message">
            <span class="draft-color">Message</span>
            <span class="hourly-color">7</span>
          </div>
          <div class="draft-hire">
            <span class="draft-color">Hired</span>
            <span class="hourly-color">1</span>
          </div>
          <div class="draft-options">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
              </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="row all-border-bottom">
      <div class="col-7">
        <div class="edit-draft-left">
          <h6>LMS Expert required for Business Administration</h6>
          <button class="btn-edit-draft">View Proposal</button>
        </div>
      </div>
      <div class="col-5">
        <div class="edit-draft-right">
          <div class="draft-hour">
            <span class="draft-color">Public</span>
            <span class="hourly-color">Hourly</span>
          </div>
          <div class="draft-proposal">
            <span class="draft-color">Proposal</span>
            <span class="hourly-color">56 (48 new)</span>
          </div>
          <div class="draft-message">
            <span class="draft-color">Message</span>
            <span class="hourly-color">7</span>
          </div>
          <div class="draft-hire">
            <span class="draft-color">Hired</span>
            <span class="hourly-color">1</span>
          </div>
          <div class="draft-options">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
              </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="row all-border-bottom">
      <div class="col-7">
        <div class="edit-draft-left">
          <h6>LMS Expert required for Business Administration</h6>
          <button class="btn-edit-draft">View Proposal</button>
        </div>
      </div>
      <div class="col-5">
        <div class="edit-draft-right">
          <div class="draft-hour">
            <span class="draft-color">Public</span>
            <span class="hourly-color">Hourly</span>
          </div>
          <div class="draft-proposal">
            <span class="draft-color">Proposal</span>
            <span class="hourly-color">56 (48 new)</span>
          </div>
          <div class="draft-message">
            <span class="draft-color">Message</span>
            <span class="hourly-color">7</span>
          </div>
          <div class="draft-hire">
            <span class="draft-color">Hired</span>
            <span class="hourly-color">1</span>
          </div>
          <div class="draft-options">
            <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
              </svg>
              </a>
              <ul class="dropdown-menu dropdown-show">
                <li>
                  <a class="dropdown-item dropdown-heading active" href="#">Invite Experts</a>
                </li>
                <li>
                  <a class="dropdown-item dropdown-heading " href="#">View Job Posting</a>
                </li>
                <li>
                  <a class="dropdown-item dropdown-heading " href="#">Edit Posting</a>
                </li>
                <li>
                  <a class="dropdown-item dropdown-heading " href="#">Remove Posting</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row all-border-bottom">
      <div class="col-7">
        <div class="edit-draft-left">
          <h6>LMS Expert required for Business Administration</h6>
          <button class="btn-edit-draft">View Proposal</button>
        </div>
      </div>
      <div class="col-5">
        <div class="edit-draft-right">
          <div class="draft-hour">
            <span class="draft-color">Public</span>
            <span class="hourly-color">Hourly</span>
          </div>
          <div class="draft-proposal">
            <span class="draft-color">Proposal</span>
            <span class="hourly-color">56 (48 new)</span>
          </div>
          <div class="draft-message">
            <span class="draft-color">Message</span>
            <span class="hourly-color">7</span>
          </div>
          <div class="draft-hire">
            <span class="draft-color">Hired</span>
            <span class="hourly-color">1</span>
          </div>
          <div class="draft-options">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
              </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="row all-border-bottom">
      <div class="col-7">
        <div class="edit-draft-left">
          <h6>LMS Expert required for Business Administration</h6>
          <button class="btn-edit-draft">View Proposal</button>
        </div>
      </div>
      <div class="col-5">
        <div class="edit-draft-right">
          <div class="draft-hour">
            <span class="draft-color">Public</span>
            <span class="hourly-color">Hourly</span>
          </div>
          <div class="draft-proposal">
            <span class="draft-color">Proposal</span>
            <span class="hourly-color">56 (48 new)</span>
          </div>
          <div class="draft-message">
            <span class="draft-color">Message</span>
            <span class="hourly-color">7</span>
          </div>
          <div class="draft-hire">
            <span class="draft-color">Hired</span>
            <span class="hourly-color">1</span>
          </div>
          <div class="draft-options">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
              </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="row all-border-bottom">
      <div class="col-7">
        <div class="edit-draft-left">
          <h6>LMS Expert required for Business Administration</h6>
          <button class="btn-edit-draft">View Proposal</button>
        </div>
      </div>
      <div class="col-5">
        <div class="edit-draft-right">
          <div class="draft-hour">
            <span class="draft-color">Public</span>
            <span class="hourly-color">Hourly</span>
          </div>
          <div class="draft-proposal">
            <span class="draft-color">Proposal</span>
            <span class="hourly-color">56 (48 new)</span>
          </div>
          <div class="draft-message">
            <span class="draft-color">Message</span>
            <span class="hourly-color">7</span>
          </div>
          <div class="draft-hire">
            <span class="draft-color">Hired</span>
            <span class="hourly-color">1</span>
          </div>
          <div class="draft-options">
               <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
              </svg>
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
    <!-- Pagination start Here -->
  </div>
  <!-- edit draft area end Here -->

    <!-- Edit Option Modal start  -->

    <div class="modal fade" id="editposting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-body">
                 <div class="container  p-0">
                  <div class="row">
                    <div class="col-md-8  p-0">

                    <div class="health-unit-area d-flex flex-column">
                        <div class="health-unit-top-area d-flex flex-column">
                            <div class="heath-unit-title d-flex flex-row flex-wrap align-content-center">
                            <img class="health-img" src="{{ asset('assets/frontend/img/toppayment.png') }}" alt="client health">
                              <h4>Developing curriculum for Postgraduate public health unit</h4>
                            </div>
                            <div class="globe-area  d-flex flex-row align-content-center">
                              <p class="d-flex flex-row align-items-center align-content-center"> <img src="{{ asset('assets/frontend/img/time.png') }}" alt="client health"> <span>2 weeks ago</span>  </p>
                              <p class="d-flex flex-row align-content-center  align-items-center"> <img src="{{ asset('assets/frontend/img/globe.png') }}" alt="client health"><span> Curriculum development</span>  </p>
                            </div>
                        </div>
                        <div class="health-unit-bottom-area">
                          <div class="helth-text-area">
                              <p>Seeking an experienced Curriculum Developer to create a cutting-edge curriculum for our postgraduate public health unit. You will collaborate with our team to design a comprehensive curriculum that aligns with industry trends and academic standards. Your role involves conducting research, developing course materials, and crafting assessments that foster critical thinking and practical skills. The ideal candidate will have a strong background in public health education, and curriculum design. and a passion for advanced higher education. join us in shaping the future of public health education and making a lasting impact on students' careers.</p>
                          </div>
                          <div class="health-tab-area">
                            <h5>Required Skills</h5>
                              <div class="health-tab d-flex flex-row  flex-wrap ">
                                <span>Curriculum Editor</span>
                                <span>Assessment Specialist</span>
                                <span>E-Learning Developer</span>
                                <span>Curriculum Writer</span>
                                <span>Public Health Expertise</span>
                                <span>Curriculum Design</span>
                                <span>Research and Analysis</span>
                                <span>Policy Development</span>
                              </div>
                          </div>

                          <div class="attachment-area d-flex flex-column">
                              <h5>Attachments</h5>
                              <div class="attachment-name  d-flex flex-row">
                                <div class="single-name-attachment d-flex flex-column">
                                  <img src=" {{ asset('assets/frontend/img/attachment1.png') }} " alt="attachment">
                                  <h6>File name.jpg</h6>
                                  <p>1.3 MB</p>
                                </div>
                                <div class="single-name-attachment">
                                  <img src=" {{ asset('assets/frontend/img/attachment2.png') }} " alt="attachment">
                                  <h6>File name.jpg</h6>
                                  <p>1.3 MB</p>
                                </div>
                              </div>
                          </div>

                        </div>
                    </div>

                    </div>
                    <div class="col-md-4">
                      <div class="attachment-right-bar d-flex flex-column">
                        <div class="close-btn d-flex justify-content-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                          <div class="attament-fixed">
                            <h4><span>Fixed:</span>$200.00</h4>
                          </div>

                            <div class="about-free-all d-flex flex-column">
                                 <div class="single-all">
                                    <h5>About the client</h5>
                                 </div>

                                 <div class="single-all d-flex flex-row align-items-center  justify-content-start">
                                    <img src="{{ asset('assets/frontend/img/ester.png') }}" alt="">
                                    <p class="miles-all">Dr Miles Esther</p>
                                 </div>

                                 <div class="single-all d-flex flex-row ">
                                        <img src="{{ asset('assets/frontend/img/institution.png') }}" alt="">
                                        <div class="institution  d-flex flex-column">
                                          <h6>Institution</h6>
                                          <p>Sydney Islami business school </p>
                                      </div>

                                 </div>

                                 <div class="single-all d-flex flex-row">
                                    <img src="{{ asset('assets/frontend/img/globe.png') }}" alt="">
                                      <div class="institution d-flex flex-column">
                                        <h6>Austria</h6>
                                        <p>Sydney 9:20 pm</p>
                                      </div>
                                 </div>

                                 <div class="single-all d-flex flex-row">
                                    <img src="{{ asset('assets/frontend/img/bag.png') }}" alt="">
                                      <div class="institution d-flex flex-column">
                                        <h6>7 jobs posted</h6>
                                        <p>100% hire rate, 4 open jobs</p>
                                      </div>
                                 </div>

                                 <div class="chat-with-client">
                                  <button> <span> <img src=" {{ asset('assets/frontend/img/message-img.png') }} " alt="message"></span> Chat with Client</button>
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


    <div class="modal fade" id="editpostingcustomize" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-body">
                 <div class="container  p-0">
                  <div class="row m-border-bottom">
                    <div class="col-md-8  p-0">
                    <div class="health-unit-area d-flex flex-column ">

                        <div class="health-unit-top-eidt health-unit-top-area d-flex flex-row justify-content-between ">
                          <div class="edit-title d-flex flex-row justify-content-between">
                            <h5>LMS Expert required for Business Administration</h5>
                            <a href=""> <img src="{{ asset('assets/frontend/img/lastday/edit-modal.png') }}" alt=""> </a>
                          </div>
                          <div class="edit-active"> <span>Active</span> </div>
                        </div>

                        <div class="health-unit-bottom-area">
                          <div class="helth-text-area d-flex flex-column health-text-area-border position-relative ">
                            <h4 class=" position-absolute">Project Description</h4>
                              <p>Seeking an experienced Curriculum Developer to create a cutting-edge curriculum for our postgraduate public health unit. You will collaborate with our team to design a comprehensive curriculum that aligns with industry trends and academic standards. Your role involves conducting research, developing course materials, and crafting assessments that
                                <span class="text-count position-absolute">0/200</span>
                              </p>
                          </div>
                          <div class="health-tab-area">
                            <h5>Required Skills</h5>
                              <div class="skill-all-tag-edit d-flex flex-column">
                                <div class="health-tab-edit d-flex flex-row  flex-wrap ">
                                  <span>Architecture 1   <a href="" class=" close-icon"><img src=" {{ asset('assets/frontend/img/lastday/close-icon.png') }} " alt="attachment"></a>  </span>

                                  <span>Architecture 2 <a href="" span class=" close-icon"><img src=" {{ asset('assets/frontend/img/lastday/close-icon.png') }} " alt="attachment"></a>  </span>

                                  <span>LMS 2<a href="" class=" close-icon"><img src=" {{ asset('assets/frontend/img/lastday/close-icon.png') }} " alt="attachment"></a> </span>
                                </div>
                                <p>Type the skills & hit enter</p>
                              </div>

                              <p class="suggest-text"> <span class="suggest-skill">Suggestion skills:</span>  Curriculum Editor, E-Learning Developer, Curriculum Writer, Curriculum Design, Research and Analysis, skill development</p>

                          </div>

                          <div class="attachment-area d-flex flex-column">
                              <h5>Attachments</h5>
                              <div class="attachment-name  d-flex flex-row">
                                <div class="single-name-attachment d-flex flex-column">
                                  <img src=" {{ asset('assets/frontend/img/attachment1.png') }} " alt="attachment">
                                  <h6>File name.jpg</h6>
                                  <p>1.3 MB</p>
                                </div>
                                <div class="single-name-attachment">
                                  <img src=" {{ asset('assets/frontend/img/attachment2.png') }} " alt="attachment">
                                  <h6>File name.jpg</h6>
                                  <p>1.3 MB</p>
                                </div>
                              </div>
                          </div>

                        </div>
                    </div>

                    </div>
                    <div class="col-md-4">
                      <div class="attachment-right-bar d-flex flex-column">
                        <div class="close-btn d-flex justify-content-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                          <div class="attament-fixed ">
                            <h4 class="d-flex flex-row"><span>Hourly:</span> <span class="currency-edit"><p class="space-rate">$200.00</p> <a href="#" class="material-edit"> <img src="{{ asset('assets/frontend/img/lastday/edit-modal.png') }}" alt=""> </a></span></h4>
                          </div>

                            <div class="about-free-all d-flex flex-column">
                                 <div class="single-all">
                                    <h5>About the client</h5>
                                 </div>

                                 <div class="single-all d-flex flex-row align-items-center  justify-content-start">
                                    <img src="{{ asset('assets/frontend/img/ester.png') }}" alt="">
                                    <p class="miles-all">Dr Miles Esther</p>
                                 </div>

                                 <div class="single-all d-flex flex-row ">
                                        <img src="{{ asset('assets/frontend/img/institution.png') }}" alt="">
                                        <div class="institution  d-flex flex-column">
                                          <h6>Institution</h6>
                                          <p>Sydney Islami business school </p>
                                      </div>

                                 </div>

                                 <div class="single-all d-flex flex-row">
                                    <img src="{{ asset('assets/frontend/img/globe.png') }}" alt="">
                                      <div class="institution d-flex flex-column">
                                        <h6>Austria</h6>
                                        <p>Sydney 9:20 pm</p>
                                      </div>
                                 </div>

                                 <div class="single-all d-flex flex-row">
                                    <img src="{{ asset('assets/frontend/img/bag.png') }}" alt="">
                                      <div class="institution d-flex flex-column">
                                        <h6>7 jobs posted</h6>
                                        <p>100% hire rate, 4 open jobs</p>
                                      </div>
                                 </div>

                                 <div class="chat-with-client">
                                  <button> <span> <img src=" {{ asset('assets/frontend/img/message-img.png') }} " alt="message"></span> Chat with Client</button>
                                 </div>

                            </div>
                      </div>
                    </div>

                 </div>

                 <div class="row">
                    <div class="modal-all-button d-flex flex-row">
                      <button class="btn-cancel">Cancel</button>
                      <button class="btn-update">Update</button>
                    </div>
                 </div>

                </div>
              </div>
            </div>
          </div>
  </div>



  <div class="modal fade" id="removeposting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-body">
                 <div class="container  p-0">
                  <div class="row m-border-bottom">
                    <div class="col-md-8  p-0">
                    <div class="health-unit-area d-flex flex-column ">

                        <div class="health-unit-top-eidt health-unit-top-area d-flex flex-row justify-content-between ">
                          <div class="edit-title d-flex flex-row justify-content-between">
                            <h5>|Academic content writer</h5>
                            <a href=""> <img src="{{ asset('assets/frontend/img/lastday/edit-modal.png') }}" alt=""> </a>
                          </div>
                          <div class="edit-active"> <span>Active</span> </div>
                        </div>

                        <div class="health-unit-bottom-area">
                          <div class="helth-text-area d-flex flex-column health-text-area-border position-relative ">
                            <h4 class=" position-absolute">Project Description</h4>
                              <p>Seeking an experienced Curriculum Developer to create a cutting-edge curriculum for our postgraduate public health unit. You will collaborate with our team to design a comprehensive curriculum that aligns with industry trends and academic standards. Your role involves conducting research, developing course materials, and crafting assessments that
                                <span class="text-count position-absolute">0/200</span>
                              </p>
                          </div>
                          <div class="health-tab-area">
                            <h5>Required Skills</h5>
                              <div class="skill-all-tag-edit d-flex flex-column">
                                <div class="health-tab-edit d-flex flex-row  flex-wrap ">
                                  <span>Architecture 1   <a href="" class=" close-icon"><img src=" {{ asset('assets/frontend/img/lastday/close-icon.png') }} " alt="attachment"></a>  </span>

                                  <span>Architecture 2 <a href="" span class=" close-icon"><img src=" {{ asset('assets/frontend/img/lastday/close-icon.png') }} " alt="attachment"></a>  </span>

                                  <span>LMS 2<a href="" class=" close-icon"><img src=" {{ asset('assets/frontend/img/lastday/close-icon.png') }} " alt="attachment"></a> </span>
                                </div>
                                <p>|Ar</p>
                              </div>

                              <p class="suggest-text"> <span class="suggest-skill">Suggestion skills:</span>  Curriculum Editor, E-Learning Developer, Curriculum Writer, Curriculum Design, Research and Analysis, skill development</p>

                          </div>

                          <div class="attachment-area d-flex flex-column">
                              <h5>Attachments</h5>
                              <div class="attachment-name  d-flex flex-row">
                                <div class="single-name-attachment d-flex flex-column ">

                                 <div class="overlay-edit position-relative">
                                  <img src=" {{ asset('assets/frontend/img/attachment1.png') }} " alt="attachment">
                                    <div class="overlay">
                                      <div class="overlay-content">
                                            <a><img src="{{ asset('assets/frontend/img/lastday/edit-overlay.png') }}" alt=""></a>
                                            <a><img src="{{ asset('assets/frontend/img/lastday/delete-overlay.png') }}" alt=""></a>
                                      </div>
                                    </div>
                                 </div>

                                  <h6>File name.jpg</h6>
                                  <p>1.3 MB</p>
                                </div>

                                <div class="single-name-attachment d-flex flex-column ">
                                 <div class="overlay-edit position-relative">
                                  <img src=" {{ asset('assets/frontend/img/attachment2.png') }} " alt="attachment">
                                    <div class="overlay">
                                      <div class="overlay-content">
                                            <a><img src="{{ asset('assets/frontend/img/lastday/edit-overlay.png') }}" alt=""></a>
                                            <a><img src="{{ asset('assets/frontend/img/lastday/delete-overlay.png') }}" alt=""></a>
                                      </div>
                                    </div>
                                 </div>
                                  <h6>File name.jpg</h6>
                                  <p>1.3 MB</p>
                                </div>
                              </div>
                          </div>

                        </div>
                    </div>

                    </div>
                    <div class="col-md-4">
                      <div class="attachment-right-bar d-flex flex-column">
                        <div class="close-btn d-flex justify-content-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                          <div class="attament-fixed ">
                            <h4 class="d-flex flex-row"><span>Hourly:</span> <span class="currency-edit"><p class="space-rate">$200.00</p> <a href="#" class="material-edit"> <img src="{{ asset('assets/frontend/img/lastday/edit-modal.png') }}" alt=""> </a></span></h4>
                          </div>

                            <div class="about-free-all d-flex flex-column">
                                 <div class="single-all">
                                    <h5>About the client</h5>
                                 </div>

                                 <div class="single-all d-flex flex-row align-items-center  justify-content-start">
                                    <img src="{{ asset('assets/frontend/img/ester.png') }}" alt="">
                                    <p class="miles-all">Dr Miles Esther</p>
                                 </div>

                                 <div class="single-all d-flex flex-row ">
                                        <img src="{{ asset('assets/frontend/img/institution.png') }}" alt="">
                                        <div class="institution  d-flex flex-column">
                                          <h6>Institution</h6>
                                          <p>Sydney Islami business school </p>
                                      </div>

                                 </div>

                                 <div class="single-all d-flex flex-row">
                                    <img src="{{ asset('assets/frontend/img/globe.png') }}" alt="">
                                      <div class="institution d-flex flex-column">
                                        <h6>Austria</h6>
                                        <p>Sydney 9:20 pm</p>
                                      </div>
                                 </div>

                                 <div class="single-all d-flex flex-row">
                                    <img src="{{ asset('assets/frontend/img/bag.png') }}" alt="">
                                      <div class="institution d-flex flex-column">
                                        <h6>7 jobs posted</h6>
                                        <p>100% hire rate, 4 open jobs</p>
                                      </div>
                                 </div>

                                 <div class="chat-with-client">
                                  <button> <span> <img src=" {{ asset('assets/frontend/img/message-img.png') }} " alt="message"></span> Chat with Client</button>
                                 </div>

                            </div>
                      </div>
                    </div>

                 </div>

                 <div class="row">
                    <div class="modal-all-button d-flex flex-row">
                      <button class="btn-cancel">Cancel</button>
                      <button class="btn-update">Update</button>
                    </div>
                 </div>

                </div>
              </div>
            </div>
          </div>
  </div>



</section>
@endsection
