<link rel="stylesheet" href="{{ asset('assets/frontend/css/client-dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/experthire.css') }}">

<header class="client-header">
  <div class="top-nav-area">
    <div class="logo-area">
      <div class="logo">
        <a href="/">
          <img src="{{ asset('assets/frontend/img/logo.png') }}" />
        </a>
      </div>
    </div>
    <div class="nav-area">
      <nav>
        <ul>
          <li class="active">
            <a href="#" class="active">Projects</a>
            <span class="material-symbols-outlined"> expand_more </span>
          </li>
          <li>
            <a href="#">Experts</a>
            <span class="material-symbols-outlined"> expand_more </span>
          </li>
          <li>
            <a href="#">Billing & Payments</a>
            <span class="material-symbols-outlined"> expand_more </span>
          </li>
          <li>
            <a href="#">Message</a>
          </li>
          <li>
            <a href="#">Settings</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="top-search-area">
    <div class="search-area">
      <div class="input-group header-search-group">
        <input type="text" class="form-control search-input" aria-label="Text input with dropdown button" placeholder="I am looking for">
        <div class="border-right"></div>
        <button class="btn btn-outline-secondary dropdown-toggle border border-end-0 no-hover search-select" type="button" data-bs-toggle="dropdown" aria-expanded="false">Experts <span class="material-symbols-outlined"> expand_more </span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item" href="#">Action</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another action</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a class="dropdown-item" href="#">Separated link</a>
          </li>
        </ul>
        <button class="btn btn-outline-secondary top-search" type="button" id="button-addon2">
          <span>
            <i class="fa fa-search"></i>
          </span>
        </button>
      </div>
    </div>
    <div class="setting-area">
  <div class="dropdown">
    <span class="profile-bell position-relative dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><a href="#"><img src="{{ asset('assets/frontend/img/profile-messanger.png') }}" alt="message"> </a> <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border-light rounded-circle top-batch">1</span></span>
        <div class="dropdown-menu dropdown-menu-end message-setting-area">
        <span class="material-symbols-outlined active m-top-arrow-message"> arrow_drop_up </span>

        <div class="all-message-profile">
            <div class="single-message-area d-flex flex-column justify-content-between">
              <div class="single-message-item d-flex flex-row justify-content-between">
              <div class="profile-message-area d-flex flex-row align-items-center justify-content-center gap-2">
                  <div class="message-profile position-relative">
                        <a href="#"><img src="{{ asset('assets/frontend/img/message-profile.png') }}" alt="message profile"> <span class="indicator position-absolute"></span> </a>
                    </div>
                    <div class="message-text d-flex flex-column">
                      <h5>Prof. Michael Kassiou</h5>
                      <p>A wonderful serenity has taken ...</p>
                    </div>
                </div>

                <div class="message-count"> <p>5 mins ago</p> </div>
              </div>
            </div>

            <div class="single-message-area d-flex flex-column justify-content-between">
              <div class="single-message-item d-flex flex-row justify-content-between">
              <div class="profile-message-area d-flex flex-row align-items-center justify-content-center gap-2">
                  <div class="message-profile position-relative">
                        <a href="#"><img src="{{ asset('assets/frontend/img/message-profile2.png') }}" alt="message profile" > <span class="indicator position-absolute"></span> </a>
                    </div>
                    <div class="message-text d-flex flex-column">
                      <h5>Black, Marvin</h5>
                      <p>A wonderful serenity has taken ...</p>
                    </div>
                </div>

                <div class="message-count d-flex flex-column"> <p>5 mins ago</p> <p class="btn-details">Details</p> </div>
              </div>
            </div>

            <div class="single-message-area d-flex flex-column justify-content-between">
              <div class="single-message-item d-flex flex-row justify-content-between">
              <div class="profile-message-area d-flex flex-row align-items-center justify-content-center gap-2">
                  <div class="message-profile position-relative">
                        <a href="#"><img src="{{ asset('assets/frontend/img/message-profile3.png') }}" alt="message profile" > <span class="indicator position-absolute"></span> </a>
                    </div>
                    <div class="message-text d-flex flex-column">
                      <h5>Guy Hawkins</h5>
                      <p>A wonderful serenity has taken ...</p>
                    </div>
                </div>

                <div class="message-count"> <p>A day ago</p> </div>
              </div>
            </div>

            <div class="single-message-area d-flex flex-column justify-content-between">
              <div class="single-message-item d-flex flex-row justify-content-between">
              <div class="profile-message-area d-flex flex-row align-items-center justify-content-center gap-2">
                  <div class="message-profile position-relative">
                        <a href="#"><img src="{{ asset('assets/frontend/img/message-profile4.png') }}" alt="message profile" > <span class="indicator position-absolute"></span> </a>
                    </div>
                    <div class="message-text d-flex flex-column">
                      <h5>Floyd Miles</h5>
                      <p>A wonderful serenity has taken ...</p>
                    </div>
                </div>

                <div class="message-count"> <p>A day ago</p> </div>
              </div>
            </div>

            <div class="single-message-area d-flex flex-column justify-content-between">
              <div class="single-message-item d-flex flex-row justify-content-between">
              <div class="profile-message-area d-flex flex-row align-items-center justify-content-center gap-2">
                  <div class="message-profile position-relative">
                        <a href="#"><img src="{{ asset('assets/frontend/img/message-profile5.png') }}" alt="message profile" > <span class="indicator position-absolute"></span> </a>
                    </div>
                    <div class="message-text d-flex flex-column">
                      <h5>Floyd Miles</h5>
                      <p>A wonderful serenity has taken ...</p>
                    </div>
                </div>

                <div class="message-count"> <p>A day ago</p> </div>
              </div>
            </div>
            
            </div>

            
        <div class="tatal-message-count d-flex justify-content-center align-content-center gap-3">
          <span> <img src="{{ asset('assets/frontend/img/total-messge.png') }}" alt="total-message"> </span>
          <span class="view-all"> View All message </span>
        </div>

        </div>

    </div>

    <span class="profile-bell position-relative"> <img src="{{ asset('assets/frontend/img/profile-ring.png') }}" alt=""> <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-5 border-light rounded-circle top-batch">9+</span></span>

      <div class="dropdown">
            <span class="avatar dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <a href="#">
                <img src="{{ asset('assets/frontend/img/avatar.png') }}" alt="avatar">
              </a>
            </span>
            <div class="dropdown-menu top-profile-setting">
                  <span class="material-symbols-outlined active m-top-arrow"> arrow_drop_up </span>
                  <div class="profile-setting-photo d-flex flex-column justify-content-center align-items-center">
                      <a href="#" class="setting-img"> <img src="{{ asset('assets/frontend/img/profile.png') }}" alt="profile"> </a>
                      <h4>Dr. Darrell Steward</h4>
                      <p>Sydney Islamic business school</p>
                  </div>
                    <div class="profile-setting-option d-flex flex-column">
                      <div class="on-off">
                        <div class="btn-group btn-toggle  d-flex flex-row justify-content-between preview-setting"> 
                          <button class="btn btn-xs btn-success active btn-preview">Offline</button>
                          <button class="btn btn-xs btn-default  btn-preview">Online</button>
                        </div>
                      </div>
                      <div class="single-option d-flex flex-column">
                        <h6><a href="#"><span> <img src="{{ asset('assets/frontend/img/user.png') }}" alt=""> </span> <span class="s-profile">Profile</span></a> </h6>
                        <h6><a href="#"><span> <img src="{{ asset('assets/frontend/img/setting.png') }}" alt=""> </span> <span class="s-setting">Setting</span></a> </h6>
                        <h6 ><a href="#"><span> <img src="{{ asset('assets/frontend/img/logout.png') }}" alt=""> </span> <span class="s-logout">Logout</span></a> </h6>
                      </div>
                    </div>
            </div>
        </div>
    </div>
  </div>
</header>