@extends('frontend.layouts.front-client-dashboard-layoutmain')
@section('content')
<div class="container-fluid p-0">
  <div class="edux-chatbox-area">
      <div class="edux-left-sidebar">
        <div class="left-top-search-area">
          <div class="left-sidebar p-0">
          <div class="search-block edux-search-block">
                <form class="example">
                    <input type="text" placeholder="Search people, group etc" name="search-left">
                    <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M19.6 21L13.3 14.7C12.8 15.1 12.225 15.4167 11.575 15.65C10.925 15.8833 10.2333 16 9.5 16C7.68333 16 6.14583 15.3708 4.8875 14.1125C3.62917 12.8542 3 11.3167 3 9.5C3 7.68333 3.62917 6.14583 4.8875 4.8875C6.14583 3.62917 7.68333 3 9.5 3C11.3167 3 12.8542 3.62917 14.1125 4.8875C15.3708 6.14583 16 7.68333 16 9.5C16 10.2333 15.8833 10.925 15.65 11.575C15.4167 12.225 15.1 12.8 14.7 13.3L21 19.6L19.6 21ZM9.5 14C10.75 14 11.8125 13.5625 12.6875 12.6875C13.5625 11.8125 14 10.75 14 9.5C14 8.25 13.5625 7.1875 12.6875 6.3125C11.8125 5.4375 10.75 5 9.5 5C8.25 5 7.1875 5.4375 6.3125 6.3125C5.4375 7.1875 5 8.25 5 9.5C5 10.75 5.4375 11.8125 6.3125 12.6875C7.1875 13.5625 8.25 14 9.5 14Z" fill="#303744" fill-opacity="0.3"/>
                    </svg>
                      </button>
                </form>
            </div>
          </div>
          <div class="search-expand">
            <div class="edux-draft-options">
              <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle edux-draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M6.17071 18C6.58254 16.8348 7.69378 16 9 16C10.3062 16 11.4175 16.8348 11.8293 18H22V20H11.8293C11.4175 21.1652 10.3062 22 9 22C7.69378 22 6.58254 21.1652 6.17071 20H2V18H6.17071ZM12.1707 11C12.5825 9.83481 13.6938 9 15 9C16.3062 9 17.4175 9.83481 17.8293 11H22V13H17.8293C17.4175 14.1652 16.3062 15 15 15C13.6938 15 12.5825 14.1652 12.1707 13H2V11H12.1707ZM6.17071 4C6.58254 2.83481 7.69378 2 9 2C10.3062 2 11.4175 2.83481 11.8293 4H22V6H11.8293C11.4175 7.16519 10.3062 8 9 8C7.69378 8 6.58254 7.16519 6.17071 6H2V4H6.17071ZM9 6C9.55228 6 10 5.55228 10 5C10 4.44772 9.55228 4 9 4C8.44772 4 8 4.44772 8 5C8 5.55228 8.44772 6 9 6ZM15 13C15.5523 13 16 12.5523 16 12C16 11.4477 15.5523 11 15 11C14.4477 11 14 11.4477 14 12C14 12.5523 14.4477 13 15 13ZM9 20C9.55228 20 10 19.5523 10 19C10 18.4477 9.55228 18 9 18C8.44772 18 8 18.4477 8 19C8 19.5523 8.44772 20 9 20Z" fill="#303744" fill-opacity="0.5"/>
                </svg>
                </a>
                <ul class="dropdown-menu dropdown-show edux-dropdown-show">

                  <li>
                    <a class="dropdown-item dropdown-heading active"  href="#">
                      <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path d="M7.95946 12.9295L15.1582 5.73077C15.2821 5.60684 15.4293 5.54353 15.5997 5.54085C15.7701 5.53819 15.9199 5.60149 16.0492 5.73077C16.1785 5.86003 16.2431 6.00853 16.2431 6.17627C16.2431 6.34399 16.1785 6.49249 16.0492 6.62177L8.48669 14.1842C8.33605 14.3349 8.16031 14.4102 7.95946 14.4102C7.75861 14.4102 7.58287 14.3349 7.43223 14.1842L3.95306 10.7051C3.82913 10.5812 3.76796 10.434 3.76956 10.2636C3.77117 10.0932 3.83661 9.94337 3.96587 9.8141C4.09515 9.68482 4.24365 9.62019 4.41137 9.62019C4.57911 9.62019 4.72761 9.68482 4.85687 9.8141L7.95946 12.9295Z" fill="#0036E3"/>
                        </svg>
                        </span>
                        <span>All</span>
                      </a>
                  </li>

                  <li>
                    <a class="dropdown-item dropdown-heading "  href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M5.92806 14.2627C5.71919 14.2627 5.5441 14.192 5.40281 14.0507C5.26152 13.9094 5.19088 13.7344 5.19088 13.5255V12.2755H15.5034L15.7678 12.54V4.9999H17.0178C17.2266 4.9999 17.4017 5.07054 17.543 5.21184C17.6843 5.35313 17.7549 5.5282 17.7549 5.73706V17.2114L14.8062 14.2627H5.92806ZM2.24219 13.5575V2.82044C2.24219 2.61156 2.31283 2.43648 2.45412 2.29519C2.59542 2.1539 2.7705 2.08325 2.97937 2.08325H13.364C13.5728 2.08325 13.7479 2.1539 13.8892 2.29519C14.0305 2.43648 14.1011 2.61156 14.1011 2.82044V9.87169C14.1011 10.0806 14.0305 10.2556 13.8892 10.3969C13.7479 10.5382 13.5728 10.6089 13.364 10.6089H5.19088L2.24219 13.5575ZM12.8511 9.35888V3.33323H3.49217V9.93586L4.06912 9.35888H12.8511Z" fill="#A1A0A5"/>
                    </svg></span> <span>Unread</span> </a>
                  </li>

                  <li>
                    <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M13.7513 2.5C16.2826 2.5 18.3346 4.58333 18.3346 7.5C18.3346 13.3333 12.0846 16.6667 10.0013 17.9167C7.91797 16.6667 1.66797 13.3333 1.66797 7.5C1.66797 4.58333 3.7513 2.5 6.2513 2.5C7.80128 2.5 9.16797 3.33333 10.0013 4.16667C10.8346 3.33333 12.2013 2.5 13.7513 2.5ZM10.7796 15.5032C11.5142 15.0404 12.1763 14.5796 12.7971 14.0858C15.2794 12.1108 16.668 9.95292 16.668 7.5C16.668 5.53397 15.3871 4.16667 13.7513 4.16667C12.8547 4.16667 11.8841 4.64092 11.1798 5.34517L10.0013 6.52369L8.8228 5.34517C8.11854 4.64092 7.14789 4.16667 6.2513 4.16667C4.63385 4.16667 3.33464 5.54708 3.33464 7.5C3.33464 9.95292 4.72319 12.1108 7.20559 14.0858C7.8263 14.5796 8.48839 15.0404 9.22305 15.5032C9.4718 15.6599 9.71889 15.8107 10.0013 15.9793C10.2837 15.8107 10.5308 15.6599 10.7796 15.5032Z" fill="#A1A0A5"/>
                  </svg></span> <span>Favourites</span> </a>
                  </li>

                  <li>
                    <a class="dropdown-item dropdown-heading"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M2.5013 8.33333H1.66797V3.33578C1.66797 2.87419 2.04739 2.5 2.49447 2.5H17.5081C17.9646 2.5 18.3346 2.8649 18.3346 3.33578V8.33333H17.5013V16.6679C17.5013 17.1275 17.1306 17.5 16.6735 17.5H3.32914C2.87194 17.5 2.5013 17.1271 2.5013 16.6679V8.33333ZM15.8346 8.33333H4.16797V15.8333H15.8346V8.33333ZM3.33464 4.16667V6.66667H16.668V4.16667H3.33464ZM7.5013 10H12.5013V11.6667H7.5013V10Z" fill="#A1A0A5"/>
                  </svg></span> <span>Archive</span> </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <button onclick="myFunction()" class="edux-button-click">
        <div class="edux-single-person-area">
            <div class="edux-single-person">
                <div class="single-person-avatar-img position-relative">
                    <img src="{{ asset('assets/frontend/img/chat-avatar.png') }}" alt="avatar">
                    <span class="edux-notify-point-green"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <circle cx="8" cy="8" r="7" fill="#369450" stroke="white" stroke-width="2"/>
                      </svg></span>
                </div>
                <div class="single-person-avatar-content">
                  <div class="avatar-title">
                    <h4>Black, Marvin</h4>
                    <p class="avatar-time">7: 30 am</p>
                  </div>

                  <p>A few words from the last </p>
                  <div class="message-count">
                    <p>message sent to the partner...</p>
                    <p class="avatar-count d-none">2</p>
                  </div>
                </div>
            </div>
        </div>
      </button>

        <div class="edux-single-person-area">
            <div class="edux-single-person">
                <div class="single-person-avatar-img position-relative">
                    <img src="{{ asset('assets/frontend/img/chat-avatar1.png') }}" alt="avatar">
                    <span class="edux-notify-point-green">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <circle cx="8" cy="8" r="7" fill="#BFBFBF" stroke="white" stroke-width="2"/>
                    </svg>
                    </span>
                </div>
                <div class="single-person-avatar-content">
                  <div class="avatar-title">
                    <h4>Black, Marvin</h4>
                    <p class="avatar-time">7: 30 am</p>
                  </div>

                  <p>A few words from the last </p>
                  <div class="message-count">
                    <p>message sent to the partner...</p>
                    <p class="avatar-count">2</p>
                  </div>
                </div>
            </div>
        </div>

        <div class="edux-single-person-area">
            <div class="edux-single-person">
                <div class="single-person-avatar-img position-relative">
                    <img src="{{ asset('assets/frontend/img/chat-avatar2.png') }}" alt="avatar">
                    <span class="edux-notify-point-green">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <circle cx="8" cy="8" r="7" fill="#DDC700" stroke="white" stroke-width="2"/>
                    </svg>
                    </span>
                </div>
                <div class="single-person-avatar-content">
                  <div class="avatar-title">
                    <h4>Black, Marvin</h4>
                    <p class="avatar-time">7: 30 am</p>
                  </div>

                  <p>A few words from the last </p>
                  <div class="message-count">
                    <p>message sent to the partner...</p>
                    <p class="avatar-count">2</p>
                  </div>
                </div>
            </div>
        </div>

        <div class="edux-single-person-area">
            <div class="edux-single-person">
                <div class="single-person-avatar-img position-relative">
                    <img src="{{ asset('assets/frontend/img/chat-avatar3.png') }}" alt="avatar">
                    <span class="edux-notify-point-green"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <circle cx="8" cy="8" r="7" fill="#369450" stroke="white" stroke-width="2"/>
                      </svg></span>
                </div>
                <div class="single-person-avatar-content">
                  <div class="avatar-title">
                    <h4>Black, Marvin</h4>
                    <p class="avatar-time">7: 30 am</p>
                  </div>

                  <p>A few words from the last </p>
                  <div class="message-count">
                    <p>message sent to the partner...</p>
                    <p class="avatar-count">2</p>
                  </div>
                </div>
            </div>
        </div>

        <div class="edux-single-person-area">
            <div class="edux-single-person">
                <div class="single-person-avatar-img position-relative">
                    <img src="{{ asset('assets/frontend/img/chat-avatar4.png') }}" alt="avatar">
                    <span class="edux-notify-point-green">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <circle cx="8" cy="8" r="7" fill="#BFBFBF" stroke="white" stroke-width="2"/>
                    </svg>
                    </span>
                </div>
                <div class="single-person-avatar-content">
                  <div class="avatar-title">
                    <h4>Black, Marvin</h4>
                    <p class="avatar-time">7: 30 am</p>
                  </div>

                  <p>A few words from the last </p>
                  <div class="message-count">
                    <p>message sent to the partner...</p>
                    <p class="avatar-count d-none">2</p>
                  </div>
                </div>
            </div>
        </div>
        <div class="edux-single-person-area">
            <div class="edux-single-person">
                <div class="single-person-avatar-img position-relative">
                    <img src="{{ asset('assets/frontend/img/chat-avatar2.png') }}" alt="avatar">
                    <span class="edux-notify-point-green">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <circle cx="8" cy="8" r="7" fill="#BFBFBF" stroke="white" stroke-width="2"/>
                    </svg>
                    </span>
                </div>
                <div class="single-person-avatar-content">
                  <div class="avatar-title">
                    <h4>Black, Marvin</h4>
                    <p class="avatar-time">7: 30 am</p>
                  </div>

                  <p>A few words from the last </p>
                  <div class="message-count">
                    <p>message sent to the partner...</p>
                    <p class="avatar-count d-none">2</p>
                  </div>
                </div>
            </div>
        </div>

        <div class="edux-single-person-area">
            <div class="edux-single-person">
                <div class="single-person-avatar-img position-relative">
                    <img src="{{ asset('assets/frontend/img/chat-avatar5.png') }}" alt="avatar">
                    <span class="edux-notify-point-green">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <circle cx="8" cy="8" r="7" fill="#BFBFBF" stroke="white" stroke-width="2"/>
                    </svg>
                    </span>
                </div>
                <div class="single-person-avatar-content">
                  <div class="avatar-title">
                    <h4>Black, Marvin</h4>
                    <p class="avatar-time">7: 30 am</p>
                  </div>

                  <p>A few words from the last </p>
                  <div class="message-count">
                    <p>message sent to the partner...</p>
                    <p class="avatar-count d-none">2</p>
                  </div>
                </div>
            </div>
        </div>

        <div class="edux-single-person-area">
            <div class="edux-single-person">
                <div class="single-person-avatar-img position-relative">
                    <img src="{{ asset('assets/frontend/img/chat-avatar6.png') }}" alt="avatar">
                    <span class="edux-notify-point-green">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <circle cx="8" cy="8" r="7" fill="#369450" stroke="white" stroke-width="2"/>
                      </svg>
                    </span>
                </div>
                <div class="single-person-avatar-content">
                  <div class="avatar-title">
                    <h4>Black, Marvin</h4>
                    <p class="avatar-time">7: 30 am</p>
                  </div>

                  <p>A few words from the last </p>
                  <div class="message-count">
                    <p>message sent to the partner...</p>
                    <p class="avatar-count d-none">2</p>
                  </div>
                </div>
            </div>
        </div>

        <div class="edux-single-person-area">
            <div class="edux-single-person">
                <div class="single-person-avatar-img position-relative">
                    <img src="{{ asset('assets/frontend/img/chat-avatar2.png') }}" alt="avatar">
                    <span class="edux-notify-point-green">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <circle cx="8" cy="8" r="7" fill="#DDC700" stroke="white" stroke-width="2"/>
                    </svg>
                    </span>
                </div>
                <div class="single-person-avatar-content">
                  <div class="avatar-title">
                    <h4>Black, Marvin</h4>
                    <p class="avatar-time">7: 30 am</p>
                  </div>

                  <p>A few words from the last </p>
                  <div class="message-count">
                    <p>message sent to the partner...</p>
                    <p class="avatar-count d-none">2</p>
                  </div>
                </div>
            </div>
        </div>

        <div class="edux-single-person-area">
            <div class="edux-single-person">
                <div class="single-person-avatar-img position-relative">
                    <img src="{{ asset('assets/frontend/img/chat-avatar1.png') }}" alt="avatar">
                    <span class="edux-notify-point-green"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <circle cx="8" cy="8" r="7" fill="#369450" stroke="white" stroke-width="2"/>
                      </svg></span>
                </div>
                <div class="single-person-avatar-content">
                  <div class="avatar-title">
                    <h4>Black, Marvin</h4>
                    <p class="avatar-time">7: 30 am</p>
                  </div>

                  <p>A few words from the last </p>
                  <div class="message-count">
                    <p>message sent to the partner...</p>
                    <p class="avatar-count d-none">2</p>
                  </div>
                </div>
            </div>
        </div>


      </div>

      <div class="edux-main-area">
          <div class="edux-middle-area">
            <div class="row m-0 p-0">
                <div class="middle-top-area">
                  <div class="middle-top-left">
                    <div class="middle-top-img">
                    <img src="{{ asset('assets/frontend/img/avatar-middle.png') }}" alt="avatar">
                    </div>
                    <div class="middle-top-text">
                        <h5>Miles, Esther</h5>
                        <p>Curriculum Expert </p>
                        <p>5:32 AM GMT+6  |  Australia</p>
                    </div>
                  </div>
                  <div class="middle-top-right">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M19.95 21C17.8667 21 15.8083 20.5458 13.775 19.6375C11.7417 18.7292 9.89167 17.4417 8.225 15.775C6.55833 14.1083 5.27083 12.2583 4.3625 10.225C3.45417 8.19167 3 6.13333 3 4.05C3 3.75 3.1 3.5 3.3 3.3C3.5 3.1 3.75 3 4.05 3H8.1C8.33333 3 8.54167 3.07917 8.725 3.2375C8.90833 3.39583 9.01667 3.58333 9.05 3.8L9.7 7.3C9.73333 7.56667 9.725 7.79167 9.675 7.975C9.625 8.15833 9.53333 8.31667 9.4 8.45L6.975 10.9C7.30833 11.5167 7.70417 12.1125 8.1625 12.6875C8.62083 13.2625 9.125 13.8167 9.675 14.35C10.1917 14.8667 10.7333 15.3458 11.3 15.7875C11.8667 16.2292 12.4667 16.6333 13.1 17L15.45 14.65C15.6 14.5 15.7958 14.3875 16.0375 14.3125C16.2792 14.2375 16.5167 14.2167 16.75 14.25L20.2 14.95C20.4333 15.0167 20.625 15.1375 20.775 15.3125C20.925 15.4875 21 15.6833 21 15.9V19.95C21 20.25 20.9 20.5 20.7 20.7C20.5 20.9 20.25 21 19.95 21ZM6.025 9L7.675 7.35L7.25 5H5.025C5.10833 5.68333 5.225 6.35833 5.375 7.025C5.525 7.69167 5.74167 8.35 6.025 9ZM14.975 17.95C15.625 18.2333 16.2875 18.4583 16.9625 18.625C17.6375 18.7917 18.3167 18.9 19 18.95V16.75L16.65 16.275L14.975 17.95Z" fill="#0036E3"/>
                    </svg></a>
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M9 16H11V13H14V11H11V8H9V11H6V13H9V16ZM4 20C3.45 20 2.97917 19.8042 2.5875 19.4125C2.19583 19.0208 2 18.55 2 18V6C2 5.45 2.19583 4.97917 2.5875 4.5875C2.97917 4.19583 3.45 4 4 4H16C16.55 4 17.0208 4.19583 17.4125 4.5875C17.8042 4.97917 18 5.45 18 6V10.5L22 6.5V17.5L18 13.5V18C18 18.55 17.8042 19.0208 17.4125 19.4125C17.0208 19.8042 16.55 20 16 20H4ZM4 18H16V6H4V18Z" fill="#0036E3"/>
                    </svg>
                    </a>
                  </div>
                </div>
            </div>

            <div class="row m-0 p-0">
              <div class="middle-menu-area">
                <nav>
                  <ul>
                    <li><a href="#">Book Expert</a></li>
                    <li><a href="#">Schedule a meeting</a></li>
                    <li><a href="#">View EOI</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>


          <div class="row p-0 m-0" id="myDIV">
            <div class="edux-chatbox-body-ara">

            <div class="edux-message-right">
            <div class="all-message-body">

              <div class="body-content">

                <div class="ctx-img">
                  <img src="{{ asset('assets/frontend/img/chat-avatar.png') }}" alt="avatar">
                </div>

                <div class="ctx-text-area">
                  <div class="ctx-title">
                      <span class="ctx-person">Michel Jhon</span>
                      <span class ="ctx-time">10:05 PM</span>
                  </div>
                  <div class="ctx-with-draft">
                      <div class="ctx-body">
                        <p>Hello! I'm looking for a freelancer to create a course plan for our upcoming university commerce conference scheduled for March 24. Can we set up a meeting to discuss this further?</p>
                      </div>
                        <div class="draft-options edux-draft-options-all">
                        <div class="dropdown">
                          <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
                          </svg>
                          </a>
                          <ul class="dropdown-menu dropdown-show">
                            <li>
                              <a class="dropdown-item dropdown-heading active" href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M4.29683 15.8334H5.32727L13.0437 8.11705L12.0132 7.08659L4.29683 14.803V15.8334ZM15.7167 7.21321L12.9042 4.4264L13.9908 3.33988C14.2354 3.09523 14.533 2.9729 14.8834 2.9729C15.2338 2.9729 15.5313 3.09523 15.776 3.33988L16.7904 4.35427C17.035 4.59893 17.1616 4.89219 17.1702 5.23407C17.1787 5.57594 17.0607 5.86921 16.816 6.11386L15.7167 7.21321ZM14.8129 8.12986L5.85931 17.0834H3.04688V14.2709L12.0004 5.3174L14.8129 8.12986ZM12.5244 7.59782L12.0132 7.08659L13.0437 8.11705L12.5244 7.59782Z" fill="#0036E3"/>
                            </svg></span> <span>Edit</span> </a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M7.5 15.0001C7.04167 15.0001 6.64931 14.8369 6.32292 14.5105C5.99653 14.1841 5.83333 13.7917 5.83333 13.3334V3.33341C5.83333 2.87508 5.99653 2.48272 6.32292 2.15633C6.64931 1.82994 7.04167 1.66675 7.5 1.66675H15C15.4583 1.66675 15.8507 1.82994 16.1771 2.15633C16.5035 2.48272 16.6667 2.87508 16.6667 3.33341V13.3334C16.6667 13.7917 16.5035 14.1841 16.1771 14.5105C15.8507 14.8369 15.4583 15.0001 15 15.0001H7.5ZM7.5 13.3334H15V3.33341H7.5V13.3334ZM4.16667 18.3334C3.70833 18.3334 3.31597 18.1702 2.98958 17.8438C2.66319 17.5174 2.5 17.1251 2.5 16.6667V5.00008H4.16667V16.6667H13.3333V18.3334H4.16667Z" fill="#191D24"/>
                            </svg></span> <span>Copy</span></a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M15.8333 15.8334V12.5001C15.8333 11.8056 15.5903 11.2154 15.1042 10.7292C14.6181 10.2431 14.0278 10.0001 13.3333 10.0001H5.6875L8.6875 13.0001L7.5 14.1667L2.5 9.16675L7.5 4.16675L8.6875 5.33341L5.6875 8.33341H13.3333C14.4861 8.33341 15.4688 8.73966 16.2812 9.55216C17.0938 10.3647 17.5 11.3473 17.5 12.5001V15.8334H15.8333Z" fill="#191D24"/>
                            </svg></span> <span>Reply</span> </a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M13.3346 14.1667L12.1471 13.0001L15.9805 9.16675L12.1471 5.33341L13.3346 4.16675L18.3346 9.16675L13.3346 14.1667ZM1.66797 15.8334V12.5001C1.66797 11.3473 2.07422 10.3647 2.88672 9.55216C3.69922 8.73966 4.68186 8.33341 5.83464 8.33341H10.9805L7.98047 5.33341L9.16797 4.16675L14.168 9.16675L9.16797 14.1667L7.98047 13.0001L10.9805 10.0001H5.83464C5.14019 10.0001 4.54991 10.2431 4.0638 10.7292C3.57769 11.2154 3.33464 11.8056 3.33464 12.5001V15.8334H1.66797Z" fill="#191D24"/>
                            </svg></span> <span>Forwards</span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                </div>
                </div>



              </div>

              <div class="body-content edux-margin-left">

                <div class="ctx-img">
                  <img src="{{ asset('assets/frontend/img/chat-avatar.png') }}" alt="avatar">
                </div>

                <div class="ctx-text-area">
                  <div class="ctx-title">
                      <span class="ctx-person">Michel Jhon</span>
                      <span class ="ctx-time">10:05 PM</span>
                  </div>

                  <div class="edux-with-option">
                      <div class="ctx-body">
                        <p>Hello! Of course, I'd be delighted to assist you in creating a course plan for your university commerce conference in March.</p>
                      </div>

                      <div class="draft-options  edux-draft-options-all">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                          <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
                        </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-show">
                            <li>
                              <a class="dropdown-item dropdown-heading active" href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M4.29683 15.8334H5.32727L13.0437 8.11705L12.0132 7.08659L4.29683 14.803V15.8334ZM15.7167 7.21321L12.9042 4.4264L13.9908 3.33988C14.2354 3.09523 14.533 2.9729 14.8834 2.9729C15.2338 2.9729 15.5313 3.09523 15.776 3.33988L16.7904 4.35427C17.035 4.59893 17.1616 4.89219 17.1702 5.23407C17.1787 5.57594 17.0607 5.86921 16.816 6.11386L15.7167 7.21321ZM14.8129 8.12986L5.85931 17.0834H3.04688V14.2709L12.0004 5.3174L14.8129 8.12986ZM12.5244 7.59782L12.0132 7.08659L13.0437 8.11705L12.5244 7.59782Z" fill="#0036E3"/>
                            </svg></span> <span>Edit</span> </a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M7.5 15.0001C7.04167 15.0001 6.64931 14.8369 6.32292 14.5105C5.99653 14.1841 5.83333 13.7917 5.83333 13.3334V3.33341C5.83333 2.87508 5.99653 2.48272 6.32292 2.15633C6.64931 1.82994 7.04167 1.66675 7.5 1.66675H15C15.4583 1.66675 15.8507 1.82994 16.1771 2.15633C16.5035 2.48272 16.6667 2.87508 16.6667 3.33341V13.3334C16.6667 13.7917 16.5035 14.1841 16.1771 14.5105C15.8507 14.8369 15.4583 15.0001 15 15.0001H7.5ZM7.5 13.3334H15V3.33341H7.5V13.3334ZM4.16667 18.3334C3.70833 18.3334 3.31597 18.1702 2.98958 17.8438C2.66319 17.5174 2.5 17.1251 2.5 16.6667V5.00008H4.16667V16.6667H13.3333V18.3334H4.16667Z" fill="#191D24"/>
                            </svg></span> <span>Copy</span></a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M15.8333 15.8334V12.5001C15.8333 11.8056 15.5903 11.2154 15.1042 10.7292C14.6181 10.2431 14.0278 10.0001 13.3333 10.0001H5.6875L8.6875 13.0001L7.5 14.1667L2.5 9.16675L7.5 4.16675L8.6875 5.33341L5.6875 8.33341H13.3333C14.4861 8.33341 15.4688 8.73966 16.2812 9.55216C17.0938 10.3647 17.5 11.3473 17.5 12.5001V15.8334H15.8333Z" fill="#191D24"/>
                            </svg></span> <span>Reply</span> </a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M13.3346 14.1667L12.1471 13.0001L15.9805 9.16675L12.1471 5.33341L13.3346 4.16675L18.3346 9.16675L13.3346 14.1667ZM1.66797 15.8334V12.5001C1.66797 11.3473 2.07422 10.3647 2.88672 9.55216C3.69922 8.73966 4.68186 8.33341 5.83464 8.33341H10.9805L7.98047 5.33341L9.16797 4.16675L14.168 9.16675L9.16797 14.1667L7.98047 13.0001L10.9805 10.0001H5.83464C5.14019 10.0001 4.54991 10.2431 4.0638 10.7292C3.57769 11.2154 3.33464 11.8056 3.33464 12.5001V15.8334H1.66797Z" fill="#191D24"/>
                            </svg></span> <span>Forwards</span></a>
                            </li>
                          </ul>
                      </div>
                    </div>
                </div>

                <div class="edux-with-option">
                      <div class="ctx-body">
                        <p>Hello! Of course, I'd be delighted to assist you in creating a course plan for your university commerce conference in March.</p>
                      </div>

                      <div class="draft-options  edux-draft-options-all">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                          <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
                        </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-show">
                            <li>
                              <a class="dropdown-item dropdown-heading active" href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M4.29683 15.8334H5.32727L13.0437 8.11705L12.0132 7.08659L4.29683 14.803V15.8334ZM15.7167 7.21321L12.9042 4.4264L13.9908 3.33988C14.2354 3.09523 14.533 2.9729 14.8834 2.9729C15.2338 2.9729 15.5313 3.09523 15.776 3.33988L16.7904 4.35427C17.035 4.59893 17.1616 4.89219 17.1702 5.23407C17.1787 5.57594 17.0607 5.86921 16.816 6.11386L15.7167 7.21321ZM14.8129 8.12986L5.85931 17.0834H3.04688V14.2709L12.0004 5.3174L14.8129 8.12986ZM12.5244 7.59782L12.0132 7.08659L13.0437 8.11705L12.5244 7.59782Z" fill="#0036E3"/>
                            </svg></span> <span>Edit</span> </a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M7.5 15.0001C7.04167 15.0001 6.64931 14.8369 6.32292 14.5105C5.99653 14.1841 5.83333 13.7917 5.83333 13.3334V3.33341C5.83333 2.87508 5.99653 2.48272 6.32292 2.15633C6.64931 1.82994 7.04167 1.66675 7.5 1.66675H15C15.4583 1.66675 15.8507 1.82994 16.1771 2.15633C16.5035 2.48272 16.6667 2.87508 16.6667 3.33341V13.3334C16.6667 13.7917 16.5035 14.1841 16.1771 14.5105C15.8507 14.8369 15.4583 15.0001 15 15.0001H7.5ZM7.5 13.3334H15V3.33341H7.5V13.3334ZM4.16667 18.3334C3.70833 18.3334 3.31597 18.1702 2.98958 17.8438C2.66319 17.5174 2.5 17.1251 2.5 16.6667V5.00008H4.16667V16.6667H13.3333V18.3334H4.16667Z" fill="#191D24"/>
                            </svg></span> <span>Copy</span></a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M15.8333 15.8334V12.5001C15.8333 11.8056 15.5903 11.2154 15.1042 10.7292C14.6181 10.2431 14.0278 10.0001 13.3333 10.0001H5.6875L8.6875 13.0001L7.5 14.1667L2.5 9.16675L7.5 4.16675L8.6875 5.33341L5.6875 8.33341H13.3333C14.4861 8.33341 15.4688 8.73966 16.2812 9.55216C17.0938 10.3647 17.5 11.3473 17.5 12.5001V15.8334H15.8333Z" fill="#191D24"/>
                            </svg></span> <span>Reply</span> </a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M13.3346 14.1667L12.1471 13.0001L15.9805 9.16675L12.1471 5.33341L13.3346 4.16675L18.3346 9.16675L13.3346 14.1667ZM1.66797 15.8334V12.5001C1.66797 11.3473 2.07422 10.3647 2.88672 9.55216C3.69922 8.73966 4.68186 8.33341 5.83464 8.33341H10.9805L7.98047 5.33341L9.16797 4.16675L14.168 9.16675L9.16797 14.1667L7.98047 13.0001L10.9805 10.0001H5.83464C5.14019 10.0001 4.54991 10.2431 4.0638 10.7292C3.57769 11.2154 3.33464 11.8056 3.33464 12.5001V15.8334H1.66797Z" fill="#191D24"/>
                            </svg></span> <span>Forwards</span></a>
                            </li>
                          </ul>
                      </div>
                    </div>
                </div>

                </div>



              </div>
              </div>



              <div class="all-message-body">

              <div class="body-content">

                <div class="ctx-img">
                  <img src="{{ asset('assets/frontend/img/chat-avatar.png') }}" alt="avatar">
                </div>

                <div class="ctx-text-area">
                  <div class="ctx-title">
                      <span class="ctx-person">Michel Jhon</span>
                      <span class ="ctx-time">10:05 PM</span>
                  </div>
                  <div class="ctx-with-draft">
                    <div class="ctx-body">
                      <p>Hello! I'm looking for a freelancer to create a course plan for our upcoming university commerce conference scheduled for March 24. Can we set up a meeting to discuss this further?</p>
                    </div>

                    <div class="draft-options  edux-draft-options-all">
                  <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
                    </svg>
                    </a>
                    <ul class="dropdown-menu dropdown-show">
                            <li>
                              <a class="dropdown-item dropdown-heading active" href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M4.29683 15.8334H5.32727L13.0437 8.11705L12.0132 7.08659L4.29683 14.803V15.8334ZM15.7167 7.21321L12.9042 4.4264L13.9908 3.33988C14.2354 3.09523 14.533 2.9729 14.8834 2.9729C15.2338 2.9729 15.5313 3.09523 15.776 3.33988L16.7904 4.35427C17.035 4.59893 17.1616 4.89219 17.1702 5.23407C17.1787 5.57594 17.0607 5.86921 16.816 6.11386L15.7167 7.21321ZM14.8129 8.12986L5.85931 17.0834H3.04688V14.2709L12.0004 5.3174L14.8129 8.12986ZM12.5244 7.59782L12.0132 7.08659L13.0437 8.11705L12.5244 7.59782Z" fill="#0036E3"/>
                            </svg></span> <span>Edit</span> </a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M7.5 15.0001C7.04167 15.0001 6.64931 14.8369 6.32292 14.5105C5.99653 14.1841 5.83333 13.7917 5.83333 13.3334V3.33341C5.83333 2.87508 5.99653 2.48272 6.32292 2.15633C6.64931 1.82994 7.04167 1.66675 7.5 1.66675H15C15.4583 1.66675 15.8507 1.82994 16.1771 2.15633C16.5035 2.48272 16.6667 2.87508 16.6667 3.33341V13.3334C16.6667 13.7917 16.5035 14.1841 16.1771 14.5105C15.8507 14.8369 15.4583 15.0001 15 15.0001H7.5ZM7.5 13.3334H15V3.33341H7.5V13.3334ZM4.16667 18.3334C3.70833 18.3334 3.31597 18.1702 2.98958 17.8438C2.66319 17.5174 2.5 17.1251 2.5 16.6667V5.00008H4.16667V16.6667H13.3333V18.3334H4.16667Z" fill="#191D24"/>
                            </svg></span> <span>Copy</span></a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M15.8333 15.8334V12.5001C15.8333 11.8056 15.5903 11.2154 15.1042 10.7292C14.6181 10.2431 14.0278 10.0001 13.3333 10.0001H5.6875L8.6875 13.0001L7.5 14.1667L2.5 9.16675L7.5 4.16675L8.6875 5.33341L5.6875 8.33341H13.3333C14.4861 8.33341 15.4688 8.73966 16.2812 9.55216C17.0938 10.3647 17.5 11.3473 17.5 12.5001V15.8334H15.8333Z" fill="#191D24"/>
                            </svg></span> <span>Reply</span> </a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M13.3346 14.1667L12.1471 13.0001L15.9805 9.16675L12.1471 5.33341L13.3346 4.16675L18.3346 9.16675L13.3346 14.1667ZM1.66797 15.8334V12.5001C1.66797 11.3473 2.07422 10.3647 2.88672 9.55216C3.69922 8.73966 4.68186 8.33341 5.83464 8.33341H10.9805L7.98047 5.33341L9.16797 4.16675L14.168 9.16675L9.16797 14.1667L7.98047 13.0001L10.9805 10.0001H5.83464C5.14019 10.0001 4.54991 10.2431 4.0638 10.7292C3.57769 11.2154 3.33464 11.8056 3.33464 12.5001V15.8334H1.66797Z" fill="#191D24"/>
                            </svg></span> <span>Forwards</span></a>
                            </li>
                          </ul>
                  </div>
                </div>

                  </div>
                </div>



              </div>

              <div class="body-content edux-margin-left">

                <div class="ctx-img">
                  <img src="{{ asset('assets/frontend/img/chat-avatar.png') }}" alt="avatar">
                </div>

                <div class="ctx-text-area">
                  <div class="ctx-title">
                      <span class="ctx-person">Michel Jhon</span>
                      <span class ="ctx-time">10:05 PM</span>
                  </div>

                  <div class="edux-with-option">
                      <div class="ctx-body">
                        <p>Hello! Of course, I'd be delighted to assist you in creating a course plan for your university commerce conference in March.</p>
                      </div>

                      <div class="draft-options edux-draft-options-all">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                          <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
                        </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-show">
                            <li>
                              <a class="dropdown-item dropdown-heading active" href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M4.29683 15.8334H5.32727L13.0437 8.11705L12.0132 7.08659L4.29683 14.803V15.8334ZM15.7167 7.21321L12.9042 4.4264L13.9908 3.33988C14.2354 3.09523 14.533 2.9729 14.8834 2.9729C15.2338 2.9729 15.5313 3.09523 15.776 3.33988L16.7904 4.35427C17.035 4.59893 17.1616 4.89219 17.1702 5.23407C17.1787 5.57594 17.0607 5.86921 16.816 6.11386L15.7167 7.21321ZM14.8129 8.12986L5.85931 17.0834H3.04688V14.2709L12.0004 5.3174L14.8129 8.12986ZM12.5244 7.59782L12.0132 7.08659L13.0437 8.11705L12.5244 7.59782Z" fill="#0036E3"/>
                            </svg></span> <span>Edit</span> </a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M7.5 15.0001C7.04167 15.0001 6.64931 14.8369 6.32292 14.5105C5.99653 14.1841 5.83333 13.7917 5.83333 13.3334V3.33341C5.83333 2.87508 5.99653 2.48272 6.32292 2.15633C6.64931 1.82994 7.04167 1.66675 7.5 1.66675H15C15.4583 1.66675 15.8507 1.82994 16.1771 2.15633C16.5035 2.48272 16.6667 2.87508 16.6667 3.33341V13.3334C16.6667 13.7917 16.5035 14.1841 16.1771 14.5105C15.8507 14.8369 15.4583 15.0001 15 15.0001H7.5ZM7.5 13.3334H15V3.33341H7.5V13.3334ZM4.16667 18.3334C3.70833 18.3334 3.31597 18.1702 2.98958 17.8438C2.66319 17.5174 2.5 17.1251 2.5 16.6667V5.00008H4.16667V16.6667H13.3333V18.3334H4.16667Z" fill="#191D24"/>
                            </svg></span> <span>Copy</span></a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M15.8333 15.8334V12.5001C15.8333 11.8056 15.5903 11.2154 15.1042 10.7292C14.6181 10.2431 14.0278 10.0001 13.3333 10.0001H5.6875L8.6875 13.0001L7.5 14.1667L2.5 9.16675L7.5 4.16675L8.6875 5.33341L5.6875 8.33341H13.3333C14.4861 8.33341 15.4688 8.73966 16.2812 9.55216C17.0938 10.3647 17.5 11.3473 17.5 12.5001V15.8334H15.8333Z" fill="#191D24"/>
                            </svg></span> <span>Reply</span> </a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M13.3346 14.1667L12.1471 13.0001L15.9805 9.16675L12.1471 5.33341L13.3346 4.16675L18.3346 9.16675L13.3346 14.1667ZM1.66797 15.8334V12.5001C1.66797 11.3473 2.07422 10.3647 2.88672 9.55216C3.69922 8.73966 4.68186 8.33341 5.83464 8.33341H10.9805L7.98047 5.33341L9.16797 4.16675L14.168 9.16675L9.16797 14.1667L7.98047 13.0001L10.9805 10.0001H5.83464C5.14019 10.0001 4.54991 10.2431 4.0638 10.7292C3.57769 11.2154 3.33464 11.8056 3.33464 12.5001V15.8334H1.66797Z" fill="#191D24"/>
                            </svg></span> <span>Forwards</span></a>
                            </li>
                          </ul>
                      </div>
                    </div>
                </div>

                <div class="edux-with-option">
                      <div class="ctx-body">
                        <p>Hello! Of course, I'd be delighted to assist you in creating a course plan for your university commerce conference in March.</p>
                      </div>

                      <div class="draft-options edux-draft-options-all">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                          <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
                        </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-show">
                            <li>
                              <a class="dropdown-item dropdown-heading active" href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M4.29683 15.8334H5.32727L13.0437 8.11705L12.0132 7.08659L4.29683 14.803V15.8334ZM15.7167 7.21321L12.9042 4.4264L13.9908 3.33988C14.2354 3.09523 14.533 2.9729 14.8834 2.9729C15.2338 2.9729 15.5313 3.09523 15.776 3.33988L16.7904 4.35427C17.035 4.59893 17.1616 4.89219 17.1702 5.23407C17.1787 5.57594 17.0607 5.86921 16.816 6.11386L15.7167 7.21321ZM14.8129 8.12986L5.85931 17.0834H3.04688V14.2709L12.0004 5.3174L14.8129 8.12986ZM12.5244 7.59782L12.0132 7.08659L13.0437 8.11705L12.5244 7.59782Z" fill="#0036E3"/>
                            </svg></span> <span>Edit</span> </a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M7.5 15.0001C7.04167 15.0001 6.64931 14.8369 6.32292 14.5105C5.99653 14.1841 5.83333 13.7917 5.83333 13.3334V3.33341C5.83333 2.87508 5.99653 2.48272 6.32292 2.15633C6.64931 1.82994 7.04167 1.66675 7.5 1.66675H15C15.4583 1.66675 15.8507 1.82994 16.1771 2.15633C16.5035 2.48272 16.6667 2.87508 16.6667 3.33341V13.3334C16.6667 13.7917 16.5035 14.1841 16.1771 14.5105C15.8507 14.8369 15.4583 15.0001 15 15.0001H7.5ZM7.5 13.3334H15V3.33341H7.5V13.3334ZM4.16667 18.3334C3.70833 18.3334 3.31597 18.1702 2.98958 17.8438C2.66319 17.5174 2.5 17.1251 2.5 16.6667V5.00008H4.16667V16.6667H13.3333V18.3334H4.16667Z" fill="#191D24"/>
                            </svg></span> <span>Copy</span></a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M15.8333 15.8334V12.5001C15.8333 11.8056 15.5903 11.2154 15.1042 10.7292C14.6181 10.2431 14.0278 10.0001 13.3333 10.0001H5.6875L8.6875 13.0001L7.5 14.1667L2.5 9.16675L7.5 4.16675L8.6875 5.33341L5.6875 8.33341H13.3333C14.4861 8.33341 15.4688 8.73966 16.2812 9.55216C17.0938 10.3647 17.5 11.3473 17.5 12.5001V15.8334H15.8333Z" fill="#191D24"/>
                            </svg></span> <span>Reply</span> </a>
                            </li>
                            <li>
                              <a class="dropdown-item dropdown-heading " href="#"> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M13.3346 14.1667L12.1471 13.0001L15.9805 9.16675L12.1471 5.33341L13.3346 4.16675L18.3346 9.16675L13.3346 14.1667ZM1.66797 15.8334V12.5001C1.66797 11.3473 2.07422 10.3647 2.88672 9.55216C3.69922 8.73966 4.68186 8.33341 5.83464 8.33341H10.9805L7.98047 5.33341L9.16797 4.16675L14.168 9.16675L9.16797 14.1667L7.98047 13.0001L10.9805 10.0001H5.83464C5.14019 10.0001 4.54991 10.2431 4.0638 10.7292C3.57769 11.2154 3.33464 11.8056 3.33464 12.5001V15.8334H1.66797Z" fill="#191D24"/>
                            </svg></span> <span>Forwards</span></a>
                            </li>
                          </ul>
                      </div>
                    </div>
                </div>
                </div>
              </div>

              <div class="edux-type-message position-relative">
                <textarea name="" id="" cols="30" rows="10" placeholder="Type your message..."></textarea>
                <div class="text-body-img">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M15.5 11C15.9167 11 16.2708 10.8542 16.5625 10.5625C16.8542 10.2708 17 9.91667 17 9.5C17 9.08333 16.8542 8.72917 16.5625 8.4375C16.2708 8.14583 15.9167 8 15.5 8C15.0833 8 14.7292 8.14583 14.4375 8.4375C14.1458 8.72917 14 9.08333 14 9.5C14 9.91667 14.1458 10.2708 14.4375 10.5625C14.7292 10.8542 15.0833 11 15.5 11ZM8.5 11C8.91667 11 9.27083 10.8542 9.5625 10.5625C9.85417 10.2708 10 9.91667 10 9.5C10 9.08333 9.85417 8.72917 9.5625 8.4375C9.27083 8.14583 8.91667 8 8.5 8C8.08333 8 7.72917 8.14583 7.4375 8.4375C7.14583 8.72917 7 9.08333 7 9.5C7 9.91667 7.14583 10.2708 7.4375 10.5625C7.72917 10.8542 8.08333 11 8.5 11ZM12 17.5C13.1333 17.5 14.1625 17.1792 15.0875 16.5375C16.0125 15.8958 16.6833 15.05 17.1 14H15.45C15.0833 14.6167 14.5958 15.1042 13.9875 15.4625C13.3792 15.8208 12.7167 16 12 16C11.2833 16 10.6208 15.8208 10.0125 15.4625C9.40417 15.1042 8.91667 14.6167 8.55 14H6.9C7.31667 15.05 7.9875 15.8958 8.9125 16.5375C9.8375 17.1792 10.8667 17.5 12 17.5ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22ZM12 20C14.2333 20 16.125 19.225 17.675 17.675C19.225 16.125 20 14.2333 20 12C20 9.76667 19.225 7.875 17.675 6.325C16.125 4.775 14.2333 4 12 4C9.76667 4 7.875 4.775 6.325 6.325C4.775 7.875 4 9.76667 4 12C4 14.2333 4.775 16.125 6.325 17.675C7.875 19.225 9.76667 20 12 20Z" fill="#191D24"/>
                </svg>
                </div>
                <div class="text-area-icon">
                    <div class="text-area-icon-left">
                    <ul>
                      <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M7.33984 18.625V5.375H12.2013C13.2206 5.375 14.142 5.69231 14.9657 6.32693C15.7895 6.96154 16.2013 7.81603 16.2013 8.89038C16.2013 9.63779 16.0209 10.2471 15.66 10.7183C15.2991 11.1894 14.9103 11.5314 14.4936 11.7442C15.0064 11.9211 15.4962 12.2708 15.9628 12.7933C16.4295 13.3157 16.6628 14.0192 16.6628 14.9038C16.6628 16.182 16.1917 17.1217 15.2494 17.723C14.3071 18.3243 13.3577 18.625 12.4013 18.625H7.33984ZM9.48977 16.6327H12.3206C13.1078 16.6327 13.6642 16.4141 13.9898 15.9769C14.3155 15.5397 14.4783 15.1205 14.4783 14.7192C14.4783 14.3179 14.3155 13.8987 13.9898 13.4615C13.6642 13.0243 13.0924 12.8057 12.2744 12.8057H9.48977V16.6327ZM9.48977 10.875H12.084C12.6917 10.875 13.1735 10.7013 13.5292 10.3539C13.885 10.0064 14.0629 9.59037 14.0629 9.10575C14.0629 8.59035 13.8748 8.16918 13.4985 7.84225C13.1222 7.51533 12.661 7.35188 12.1148 7.35188H9.48977V10.875Z" fill="#303744" fill-opacity="0.7"/>
                      </svg></a>
                      </li>
                      <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M5.39453 18.625V16.8173H9.21183L12.4522 7.18265H8.63493V5.375H17.7887V7.18265H14.2791L11.0387 16.8173H14.5483V18.625H5.39453Z" fill="#303744" fill-opacity="0.7"/>
                      </svg></a></li>
                      <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M5.34375 20.125V18.625H18.6514V20.125H5.34375ZM11.9976 16.5289C10.4425 16.5289 9.22868 16.0568 8.35625 15.1125C7.48382 14.1683 7.0476 12.9033 7.0476 11.3174V3.41357H8.9014V11.4097C8.9014 12.42 9.16999 13.2296 9.70718 13.8385C10.2444 14.4475 11.0078 14.752 11.9976 14.752C12.9873 14.752 13.7508 14.4475 14.288 13.8385C14.8252 13.2296 15.0938 12.42 15.0938 11.4097V3.41357H16.9476V11.3174C16.9476 12.9033 16.5113 14.1683 15.6389 15.1125C14.7665 16.0568 13.5527 16.5289 11.9976 16.5289Z" fill="#303744" fill-opacity="0.7"/>
                      </svg></a></li>
                      <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M7.99758 17.6538L2.34375 12L7.99758 6.34619L9.06678 7.41539L4.46678 12.0154L9.0514 16.6L7.99758 17.6538ZM15.9976 17.6538L14.9284 16.5846L19.5284 11.9846L14.9438 7.40002L15.9976 6.34619L21.6514 12L15.9976 17.6538Z" fill="#303744" fill-opacity="0.7"/>
                      </svg></a></li>

                    </ul>
                    </div>
                    <div class="text-area-icon-right">
                        <div class="left-send">
                          <ul>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12V13.45C22 14.4333 21.6625 15.2708 20.9875 15.9625C20.3125 16.6542 19.4833 17 18.5 17C17.9167 17 17.3667 16.875 16.85 16.625C16.3333 16.375 15.9 16.0167 15.55 15.55C15.0667 16.0333 14.5208 16.3958 13.9125 16.6375C13.3042 16.8792 12.6667 17 12 17C10.6167 17 9.4375 16.5125 8.4625 15.5375C7.4875 14.5625 7 13.3833 7 12C7 10.6167 7.4875 9.4375 8.4625 8.4625C9.4375 7.4875 10.6167 7 12 7C13.3833 7 14.5625 7.4875 15.5375 8.4625C16.5125 9.4375 17 10.6167 17 12V13.45C17 13.8833 17.1417 14.25 17.425 14.55C17.7083 14.85 18.0667 15 18.5 15C18.9333 15 19.2917 14.85 19.575 14.55C19.8583 14.25 20 13.8833 20 13.45V12C20 9.76667 19.225 7.875 17.675 6.325C16.125 4.775 14.2333 4 12 4C9.76667 4 7.875 4.775 6.325 6.325C4.775 7.875 4 9.76667 4 12C4 14.2333 4.775 16.125 6.325 17.675C7.875 19.225 9.76667 20 12 20H17V22H12ZM12 15C12.8333 15 13.5417 14.7083 14.125 14.125C14.7083 13.5417 15 12.8333 15 12C15 11.1667 14.7083 10.4583 14.125 9.875C13.5417 9.29167 12.8333 9 12 9C11.1667 9 10.4583 9.29167 9.875 9.875C9.29167 10.4583 9 11.1667 9 12C9 12.8333 9.29167 13.5417 9.875 14.125C10.4583 14.7083 11.1667 15 12 15Z" fill="#303744" fill-opacity="0.5"/>
                            </svg></a></li>
                            <li><a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M11.5 22C9.96667 22 8.66667 21.4667 7.6 20.4C6.53333 19.3333 6 18.0333 6 16.5V6C6 4.9 6.39167 3.95833 7.175 3.175C7.95833 2.39167 8.9 2 10 2C11.1 2 12.0417 2.39167 12.825 3.175C13.6083 3.95833 14 4.9 14 6V15.5C14 16.2 13.7583 16.7917 13.275 17.275C12.7917 17.7583 12.2 18 11.5 18C10.8 18 10.2083 17.7583 9.725 17.275C9.24167 16.7917 9 16.2 9 15.5V6H10.5V15.5C10.5 15.7833 10.5958 16.0208 10.7875 16.2125C10.9792 16.4042 11.2167 16.5 11.5 16.5C11.7833 16.5 12.0208 16.4042 12.2125 16.2125C12.4042 16.0208 12.5 15.7833 12.5 15.5V6C12.5 5.3 12.2583 4.70833 11.775 4.225C11.2917 3.74167 10.7 3.5 10 3.5C9.3 3.5 8.70833 3.74167 8.225 4.225C7.74167 4.70833 7.5 5.3 7.5 6V16.5C7.5 17.6 7.89167 18.5417 8.675 19.325C9.45833 20.1083 10.4 20.5 11.5 20.5C12.6 20.5 13.5417 20.1083 14.325 19.325C15.1083 18.5417 15.5 17.6 15.5 16.5V6H17V16.5C17 18.0333 16.4667 19.3333 15.4 20.4C14.3333 21.4667 13.0333 22 11.5 22Z" fill="#303744" fill-opacity="0.5"/>
                            </svg>
                            </a></li>

                            <li><a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M9.24922 22L8.84922 18.8C8.63255 18.7167 8.42839 18.6167 8.23672 18.5C8.04505 18.3833 7.85755 18.2583 7.67422 18.125L4.69922 19.375L1.94922 14.625L4.52422 12.675C4.50755 12.5583 4.49922 12.4458 4.49922 12.3375V11.6625C4.49922 11.5542 4.50755 11.4417 4.52422 11.325L1.94922 9.375L4.69922 4.625L7.67422 5.875C7.85755 5.74167 8.04922 5.61667 8.24922 5.5C8.44922 5.38333 8.64922 5.28333 8.84922 5.2L9.24922 2H14.7492L15.1492 5.2C15.3659 5.28333 15.5701 5.38333 15.7617 5.5C15.9534 5.61667 16.1409 5.74167 16.3242 5.875L19.2992 4.625L22.0492 9.375L19.4742 11.325C19.4909 11.4417 19.4992 11.5542 19.4992 11.6625V12.3375C19.4992 12.4458 19.4826 12.5583 19.4492 12.675L22.0242 14.625L19.2742 19.375L16.3242 18.125C16.1409 18.2583 15.9492 18.3833 15.7492 18.5C15.5492 18.6167 15.3492 18.7167 15.1492 18.8L14.7492 22H9.24922ZM10.9992 20H12.9742L13.3242 17.35C13.8409 17.2167 14.3201 17.0208 14.7617 16.7625C15.2034 16.5042 15.6076 16.1917 15.9742 15.825L18.4492 16.85L19.4242 15.15L17.2742 13.525C17.3576 13.2917 17.4159 13.0458 17.4492 12.7875C17.4826 12.5292 17.4992 12.2667 17.4992 12C17.4992 11.7333 17.4826 11.4708 17.4492 11.2125C17.4159 10.9542 17.3576 10.7083 17.2742 10.475L19.4242 8.85L18.4492 7.15L15.9742 8.2C15.6076 7.81667 15.2034 7.49583 14.7617 7.2375C14.3201 6.97917 13.8409 6.78333 13.3242 6.65L12.9992 4H11.0242L10.6742 6.65C10.1576 6.78333 9.67839 6.97917 9.23672 7.2375C8.79505 7.49583 8.39089 7.80833 8.02422 8.175L5.54922 7.15L4.57422 8.85L6.72422 10.45C6.64089 10.7 6.58255 10.95 6.54922 11.2C6.51589 11.45 6.49922 11.7167 6.49922 12C6.49922 12.2667 6.51589 12.525 6.54922 12.775C6.58255 13.025 6.64089 13.275 6.72422 13.525L4.57422 15.15L5.54922 16.85L8.02422 15.8C8.39089 16.1833 8.79505 16.5042 9.23672 16.7625C9.67839 17.0208 10.1576 17.2167 10.6742 17.35L10.9992 20ZM12.0492 15.5C13.0159 15.5 13.8409 15.1583 14.5242 14.475C15.2076 13.7917 15.5492 12.9667 15.5492 12C15.5492 11.0333 15.2076 10.2083 14.5242 9.525C13.8409 8.84167 13.0159 8.5 12.0492 8.5C11.0659 8.5 10.2367 8.84167 9.56172 9.525C8.88672 10.2083 8.54922 11.0333 8.54922 12C8.54922 12.9667 8.88672 13.7917 9.56172 14.475C10.2367 15.1583 11.0659 15.5 12.0492 15.5Z" fill="#303744" fill-opacity="0.5"/>
                              </svg>
                            </a></li>

                          </ul>
                        </div>
                        <div class="right-send">
                          <ul>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M3 20V4L22 12L3 20ZM5 17L16.85 12L5 7V10.5L11 12L5 13.5V17Z" fill="#0036E3"/>
                            </svg></a></li>
                          </ul>
                        </div>
                    </div>
                </div>
              </div>


              </div>
              </div>


              <div class="body-right-content">
                  <div class="middle-top-right-sidebar">
                      <div class="middle-top-img">
                      <img src="{{ asset('assets/frontend/img/avatar-middle.png') }}" alt="avatar">
                      </div>
                      <div class="middle-top-text">
                          <h5>Miles, Esther</h5>
                          <p>Curriculum Expert </p>
                          <p>5:32 AM GMT+6  |  Australia</p>

                          <div class="duex-message-marketing">
                            <div class="message-iconic">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M3.99998 18.9999V7.99993V18.6922V18.5913V18.9999ZM4.3077 20.4999C3.80257 20.4999 3.375 20.3249 3.025 19.9749C2.675 19.6249 2.5 19.1973 2.5 18.6922V8.30765C2.5 7.80252 2.675 7.37495 3.025 7.02495C3.375 6.67495 3.80257 6.49995 4.3077 6.49995H8.5V4.80768C8.5 4.30256 8.675 3.875 9.025 3.525C9.375 3.175 9.80257 3 10.3077 3H13.6923C14.1974 3 14.625 3.175 14.975 3.525C15.325 3.875 15.5 4.30256 15.5 4.80768V6.49995H19.6923C20.1974 6.49995 20.625 6.67495 20.975 7.02495C21.325 7.37495 21.5 7.80252 21.5 8.30765V12.5442C21.2705 12.3852 21.0323 12.2474 20.7855 12.1307C20.5387 12.0141 20.2769 11.9102 20 11.8192V8.30765C20 8.2179 19.9711 8.14417 19.9134 8.08647C19.8557 8.02877 19.782 7.99993 19.6923 7.99993H4.3077C4.21795 7.99993 4.14423 8.02877 4.08653 8.08647C4.02883 8.14417 3.99998 8.2179 3.99998 8.30765V18.6922C3.99998 18.7819 4.02883 18.8557 4.08653 18.9134C4.14423 18.9711 4.21795 18.9999 4.3077 18.9999H11.575C11.6186 19.2666 11.676 19.5233 11.7471 19.7701C11.8183 20.0169 11.9064 20.2601 12.0116 20.4999H4.3077ZM9.99998 6.49995H14V4.80768C14 4.71793 13.9711 4.6442 13.9134 4.5865C13.8557 4.5288 13.782 4.49995 13.6923 4.49995H10.3077C10.218 4.49995 10.1442 4.5288 10.0865 4.5865C10.0288 4.6442 9.99998 4.71793 9.99998 4.80768V6.49995ZM18 22.4999C16.7513 22.4999 15.6891 22.0621 14.8135 21.1865C13.9378 20.3108 13.5 19.2486 13.5 17.9999C13.5 16.7512 13.9378 15.6891 14.8135 14.8134C15.6891 13.9378 16.7513 13.5 18 13.5C19.2487 13.5 20.3109 13.9378 21.1865 14.8134C22.0621 15.6891 22.5 16.7512 22.5 17.9999C22.5 19.2486 22.0621 20.3108 21.1865 21.1865C20.3109 22.0621 19.2487 22.4999 18 22.4999ZM18.4423 17.8191V15.0576H17.5577V18.1807L19.65 20.273L20.2731 19.6499L18.4423 17.8191Z" fill="#C8C5D4"/>
                              </svg>
                            </div>
                            <div class="message-iconic-text">
                                <p>Marketing plan for our upcoming university commerce..</p>
                            </div>
                          </div>

                      </div>
                  </div>

                  <div class="files-links-area">
                      <div class="accordion" id="accordionExample">

                      <div class="accordion-item edux-accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="edux-btn-accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Files & Links
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">

                          <div class="accordion-body single-file-links">
                              <div class="duex-single-file-links">
                                <div class="message-iconic">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                    <path d="M7.29308 27.3334C6.61957 27.3334 6.04948 27.1 5.58281 26.6334C5.11615 26.1667 4.88281 25.5966 4.88281 24.9231V7.07702C4.88281 6.40351 5.11615 5.83341 5.58281 5.36675C6.04948 4.90008 6.61957 4.66675 7.29308 4.66675H25.1391C25.8127 4.66675 26.3827 4.90008 26.8494 5.36675C27.3161 5.83341 27.5494 6.40351 27.5494 7.07702V24.9231C27.5494 25.5966 27.3161 26.1667 26.8494 26.6334C26.3827 27.1 25.8127 27.3334 25.1391 27.3334H7.29308ZM7.29308 25.3334H25.1391C25.2417 25.3334 25.3358 25.2906 25.4212 25.2052C25.5067 25.1197 25.5494 25.0257 25.5494 24.9231V7.07702C25.5494 6.97444 25.5067 6.8804 25.4212 6.79492C25.3358 6.70945 25.2417 6.66672 25.1391 6.66672H7.29308C7.1905 6.66672 7.09647 6.70945 7.01098 6.79492C6.92551 6.8804 6.88278 6.97444 6.88278 7.07702V24.9231C6.88278 25.0257 6.92551 25.1197 7.01098 25.2052C7.09647 25.2906 7.1905 25.3334 7.29308 25.3334ZM9.21618 22.3334H23.3186L18.934 16.4872L15.1905 21.359L12.5238 17.9488L9.21618 22.3334Z" fill="#C8C5D5"/>
                                  </svg>
                                </div>
                                <div class="edux-message-iconic-text">
                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/ a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                    <div class="date-space">
                                      <span>40.00 KB</span>
                                      <span>Yesterday</span>
                                    </div>
                                </div>
                              </div>
                          </div>

                          <div class="accordion-body single-file-links">
                              <div class="duex-single-file-links">
                                <div class="message-iconic">
                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                  <path d="M14.8828 22.6666H9.54948C7.70504 22.6666 6.13281 22.0166 4.83281 20.7166C3.53281 19.4166 2.88281 17.8444 2.88281 15.9999C2.88281 14.1555 3.53281 12.5833 4.83281 11.2833C6.13281 9.98325 7.70504 9.33325 9.54948 9.33325H14.8828V11.9999H9.54948C8.43837 11.9999 7.49392 12.3888 6.71615 13.1666C5.93837 13.9444 5.54948 14.8888 5.54948 15.9999C5.54948 17.111 5.93837 18.0555 6.71615 18.8333C7.49392 19.611 8.43837 19.9999 9.54948 19.9999H14.8828V22.6666ZM10.8828 17.3333V14.6666H21.5495V17.3333H10.8828ZM17.5495 22.6666V19.9999H22.8828C23.9939 19.9999 24.9384 19.611 25.7161 18.8333C26.4939 18.0555 26.8828 17.111 26.8828 15.9999C26.8828 14.8888 26.4939 13.9444 25.7161 13.1666C24.9384 12.3888 23.9939 11.9999 22.8828 11.9999H17.5495V9.33325H22.8828C24.7273 9.33325 26.2995 9.98325 27.5995 11.2833C28.8995 12.5833 29.5495 14.1555 29.5495 15.9999C29.5495 17.8444 28.8995 19.4166 27.5995 20.7166C26.2995 22.0166 24.7273 22.6666 22.8828 22.6666H17.5495Z" fill="#C8C5D5"/>
                                </svg>
                                </div>
                                <div class="edux-message-iconic-text">
                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/ a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                    <div class="date-space">
                                      <span>40.00 KB</span>
                                      <span>01/10/2023</span>
                                    </div>
                                </div>
                              </div>
                          </div>
                          <div class="accordion-body single-file-links">
                              <div class="duex-single-file-links">
                                <div class="message-iconic">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                    <path d="M7.29308 27.3334C6.61957 27.3334 6.04948 27.1 5.58281 26.6334C5.11615 26.1667 4.88281 25.5966 4.88281 24.9231V7.07702C4.88281 6.40351 5.11615 5.83341 5.58281 5.36675C6.04948 4.90008 6.61957 4.66675 7.29308 4.66675H25.1391C25.8127 4.66675 26.3827 4.90008 26.8494 5.36675C27.3161 5.83341 27.5494 6.40351 27.5494 7.07702V24.9231C27.5494 25.5966 27.3161 26.1667 26.8494 26.6334C26.3827 27.1 25.8127 27.3334 25.1391 27.3334H7.29308ZM7.29308 25.3334H25.1391C25.2417 25.3334 25.3358 25.2906 25.4212 25.2052C25.5067 25.1197 25.5494 25.0257 25.5494 24.9231V7.07702C25.5494 6.97444 25.5067 6.8804 25.4212 6.79492C25.3358 6.70945 25.2417 6.66672 25.1391 6.66672H7.29308C7.1905 6.66672 7.09647 6.70945 7.01098 6.79492C6.92551 6.8804 6.88278 6.97444 6.88278 7.07702V24.9231C6.88278 25.0257 6.92551 25.1197 7.01098 25.2052C7.09647 25.2906 7.1905 25.3334 7.29308 25.3334ZM9.21618 22.3334H23.3186L18.934 16.4872L15.1905 21.359L12.5238 17.9488L9.21618 22.3334Z" fill="#C8C5D5"/>
                                  </svg>
                                </div>
                                <div class="edux-message-iconic-text">
                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/ a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                    <div class="date-space">
                                      <span>40.00 KB</span>
                                      <span>30/09/2023</span>
                                    </div>
                                </div>
                              </div>
                          </div>

                        </div>
                      </div>


                      <div class="accordion-item edux-accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="edux-btn-accordion collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          People
                          </button>

                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body single-file-links">
                              <div class="duex-single-file-links">
                                <div class="message-iconic">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                    <path d="M7.29308 27.3334C6.61957 27.3334 6.04948 27.1 5.58281 26.6334C5.11615 26.1667 4.88281 25.5966 4.88281 24.9231V7.07702C4.88281 6.40351 5.11615 5.83341 5.58281 5.36675C6.04948 4.90008 6.61957 4.66675 7.29308 4.66675H25.1391C25.8127 4.66675 26.3827 4.90008 26.8494 5.36675C27.3161 5.83341 27.5494 6.40351 27.5494 7.07702V24.9231C27.5494 25.5966 27.3161 26.1667 26.8494 26.6334C26.3827 27.1 25.8127 27.3334 25.1391 27.3334H7.29308ZM7.29308 25.3334H25.1391C25.2417 25.3334 25.3358 25.2906 25.4212 25.2052C25.5067 25.1197 25.5494 25.0257 25.5494 24.9231V7.07702C25.5494 6.97444 25.5067 6.8804 25.4212 6.79492C25.3358 6.70945 25.2417 6.66672 25.1391 6.66672H7.29308C7.1905 6.66672 7.09647 6.70945 7.01098 6.79492C6.92551 6.8804 6.88278 6.97444 6.88278 7.07702V24.9231C6.88278 25.0257 6.92551 25.1197 7.01098 25.2052C7.09647 25.2906 7.1905 25.3334 7.29308 25.3334ZM9.21618 22.3334H23.3186L18.934 16.4872L15.1905 21.359L12.5238 17.9488L9.21618 22.3334Z" fill="#C8C5D5"/>
                                  </svg>
                                </div>
                                <div class="edux-message-iconic-text">
                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/ a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                    <div class="date-space">
                                      <span>40.00 KB</span>
                                      <span>Yesterday</span>
                                    </div>
                                </div>
                              </div>
                          </div>


                          <div class="accordion-body single-file-links">
                              <div class="duex-single-file-links">
                                <div class="message-iconic">
                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                  <path d="M14.8828 22.6666H9.54948C7.70504 22.6666 6.13281 22.0166 4.83281 20.7166C3.53281 19.4166 2.88281 17.8444 2.88281 15.9999C2.88281 14.1555 3.53281 12.5833 4.83281 11.2833C6.13281 9.98325 7.70504 9.33325 9.54948 9.33325H14.8828V11.9999H9.54948C8.43837 11.9999 7.49392 12.3888 6.71615 13.1666C5.93837 13.9444 5.54948 14.8888 5.54948 15.9999C5.54948 17.111 5.93837 18.0555 6.71615 18.8333C7.49392 19.611 8.43837 19.9999 9.54948 19.9999H14.8828V22.6666ZM10.8828 17.3333V14.6666H21.5495V17.3333H10.8828ZM17.5495 22.6666V19.9999H22.8828C23.9939 19.9999 24.9384 19.611 25.7161 18.8333C26.4939 18.0555 26.8828 17.111 26.8828 15.9999C26.8828 14.8888 26.4939 13.9444 25.7161 13.1666C24.9384 12.3888 23.9939 11.9999 22.8828 11.9999H17.5495V9.33325H22.8828C24.7273 9.33325 26.2995 9.98325 27.5995 11.2833C28.8995 12.5833 29.5495 14.1555 29.5495 15.9999C29.5495 17.8444 28.8995 19.4166 27.5995 20.7166C26.2995 22.0166 24.7273 22.6666 22.8828 22.6666H17.5495Z" fill="#C8C5D5"/>
                                </svg>
                                </div>
                                <div class="edux-message-iconic-text">
                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/ a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                    <div class="date-space">
                                      <span>40.00 KB</span>
                                      <span>01/10/2023</span>
                                    </div>
                                </div>
                              </div>
                          </div>
                          <div class="accordion-body single-file-links">
                              <div class="duex-single-file-links">
                                <div class="message-iconic">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                    <path d="M7.29308 27.3334C6.61957 27.3334 6.04948 27.1 5.58281 26.6334C5.11615 26.1667 4.88281 25.5966 4.88281 24.9231V7.07702C4.88281 6.40351 5.11615 5.83341 5.58281 5.36675C6.04948 4.90008 6.61957 4.66675 7.29308 4.66675H25.1391C25.8127 4.66675 26.3827 4.90008 26.8494 5.36675C27.3161 5.83341 27.5494 6.40351 27.5494 7.07702V24.9231C27.5494 25.5966 27.3161 26.1667 26.8494 26.6334C26.3827 27.1 25.8127 27.3334 25.1391 27.3334H7.29308ZM7.29308 25.3334H25.1391C25.2417 25.3334 25.3358 25.2906 25.4212 25.2052C25.5067 25.1197 25.5494 25.0257 25.5494 24.9231V7.07702C25.5494 6.97444 25.5067 6.8804 25.4212 6.79492C25.3358 6.70945 25.2417 6.66672 25.1391 6.66672H7.29308C7.1905 6.66672 7.09647 6.70945 7.01098 6.79492C6.92551 6.8804 6.88278 6.97444 6.88278 7.07702V24.9231C6.88278 25.0257 6.92551 25.1197 7.01098 25.2052C7.09647 25.2906 7.1905 25.3334 7.29308 25.3334ZM9.21618 22.3334H23.3186L18.934 16.4872L15.1905 21.359L12.5238 17.9488L9.21618 22.3334Z" fill="#C8C5D5"/>
                                  </svg>
                                </div>
                                <div class="edux-message-iconic-text">
                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/ a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                    <div class="date-space">
                                      <span>40.00 KB</span>
                                      <span>30/09/2023</span>
                                    </div>
                                </div>
                              </div>
                          </div>

                        </div>
                      </div>

                      <div class="accordion-item edux-accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="edux-btn-accordion collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Personal Note
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body single-file-links">
                              <div class="duex-single-file-links">
                                <div class="message-iconic">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                    <path d="M7.29308 27.3334C6.61957 27.3334 6.04948 27.1 5.58281 26.6334C5.11615 26.1667 4.88281 25.5966 4.88281 24.9231V7.07702C4.88281 6.40351 5.11615 5.83341 5.58281 5.36675C6.04948 4.90008 6.61957 4.66675 7.29308 4.66675H25.1391C25.8127 4.66675 26.3827 4.90008 26.8494 5.36675C27.3161 5.83341 27.5494 6.40351 27.5494 7.07702V24.9231C27.5494 25.5966 27.3161 26.1667 26.8494 26.6334C26.3827 27.1 25.8127 27.3334 25.1391 27.3334H7.29308ZM7.29308 25.3334H25.1391C25.2417 25.3334 25.3358 25.2906 25.4212 25.2052C25.5067 25.1197 25.5494 25.0257 25.5494 24.9231V7.07702C25.5494 6.97444 25.5067 6.8804 25.4212 6.79492C25.3358 6.70945 25.2417 6.66672 25.1391 6.66672H7.29308C7.1905 6.66672 7.09647 6.70945 7.01098 6.79492C6.92551 6.8804 6.88278 6.97444 6.88278 7.07702V24.9231C6.88278 25.0257 6.92551 25.1197 7.01098 25.2052C7.09647 25.2906 7.1905 25.3334 7.29308 25.3334ZM9.21618 22.3334H23.3186L18.934 16.4872L15.1905 21.359L12.5238 17.9488L9.21618 22.3334Z" fill="#C8C5D5"/>
                                  </svg>
                                </div>
                                <div class="edux-message-iconic-text">
                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/ a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                    <div class="date-space">
                                      <span>40.00 KB</span>
                                      <span>Yesterday</span>
                                    </div>
                                </div>
                              </div>
                          </div>

                          <div class="accordion-body single-file-links">
                              <div class="duex-single-file-links">
                                <div class="message-iconic">
                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                  <path d="M14.8828 22.6666H9.54948C7.70504 22.6666 6.13281 22.0166 4.83281 20.7166C3.53281 19.4166 2.88281 17.8444 2.88281 15.9999C2.88281 14.1555 3.53281 12.5833 4.83281 11.2833C6.13281 9.98325 7.70504 9.33325 9.54948 9.33325H14.8828V11.9999H9.54948C8.43837 11.9999 7.49392 12.3888 6.71615 13.1666C5.93837 13.9444 5.54948 14.8888 5.54948 15.9999C5.54948 17.111 5.93837 18.0555 6.71615 18.8333C7.49392 19.611 8.43837 19.9999 9.54948 19.9999H14.8828V22.6666ZM10.8828 17.3333V14.6666H21.5495V17.3333H10.8828ZM17.5495 22.6666V19.9999H22.8828C23.9939 19.9999 24.9384 19.611 25.7161 18.8333C26.4939 18.0555 26.8828 17.111 26.8828 15.9999C26.8828 14.8888 26.4939 13.9444 25.7161 13.1666C24.9384 12.3888 23.9939 11.9999 22.8828 11.9999H17.5495V9.33325H22.8828C24.7273 9.33325 26.2995 9.98325 27.5995 11.2833C28.8995 12.5833 29.5495 14.1555 29.5495 15.9999C29.5495 17.8444 28.8995 19.4166 27.5995 20.7166C26.2995 22.0166 24.7273 22.6666 22.8828 22.6666H17.5495Z" fill="#C8C5D5"/>
                                </svg>
                                </div>
                                <div class="edux-message-iconic-text">
                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/ a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                    <div class="date-space">
                                      <span>40.00 KB</span>
                                      <span>01/10/2023</span>
                                    </div>
                                </div>
                              </div>
                          </div>
                          <div class="accordion-body single-file-links">
                              <div class="duex-single-file-links">
                                <div class="message-iconic">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                    <path d="M7.29308 27.3334C6.61957 27.3334 6.04948 27.1 5.58281 26.6334C5.11615 26.1667 4.88281 25.5966 4.88281 24.9231V7.07702C4.88281 6.40351 5.11615 5.83341 5.58281 5.36675C6.04948 4.90008 6.61957 4.66675 7.29308 4.66675H25.1391C25.8127 4.66675 26.3827 4.90008 26.8494 5.36675C27.3161 5.83341 27.5494 6.40351 27.5494 7.07702V24.9231C27.5494 25.5966 27.3161 26.1667 26.8494 26.6334C26.3827 27.1 25.8127 27.3334 25.1391 27.3334H7.29308ZM7.29308 25.3334H25.1391C25.2417 25.3334 25.3358 25.2906 25.4212 25.2052C25.5067 25.1197 25.5494 25.0257 25.5494 24.9231V7.07702C25.5494 6.97444 25.5067 6.8804 25.4212 6.79492C25.3358 6.70945 25.2417 6.66672 25.1391 6.66672H7.29308C7.1905 6.66672 7.09647 6.70945 7.01098 6.79492C6.92551 6.8804 6.88278 6.97444 6.88278 7.07702V24.9231C6.88278 25.0257 6.92551 25.1197 7.01098 25.2052C7.09647 25.2906 7.1905 25.3334 7.29308 25.3334ZM9.21618 22.3334H23.3186L18.934 16.4872L15.1905 21.359L12.5238 17.9488L9.21618 22.3334Z" fill="#C8C5D5"/>
                                  </svg>
                                </div>
                                <div class="edux-message-iconic-text">
                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/ a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                    <div class="date-space">
                                      <span>40.00 KB</span>
                                      <span>30/09/2023</span>
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



  </div>
</div>


@endsection


<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
