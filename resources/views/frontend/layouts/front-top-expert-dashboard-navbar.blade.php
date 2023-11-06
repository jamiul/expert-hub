<link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/expert-header.css') }}">
<header class="expert-header">
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
               <li>
                  <a href="#">Profile</a>
               </li>
               <li>
                  <a href="#">Analytics</a>
               </li>
               <li>
                  <a href="#">My Services</a>
               </li>
               <li>
                  <a href="#">My Projects</a>
                  <span class="material-symbols-outlined"> expand_more </span>
               </li>
               <li>
                  <a href="#">Billing & Payments</a>
                  <span class="material-symbols-outlined"> expand_more </span>
               </li>
               <li>
                  <a href="#">Find Project</a>
               </li>
               <li>
                  <a href="#">Settings</a>
                  <span class="material-symbols-outlined"> expand_more </span>
               </li>
            </ul>
         </nav>
      </div>
   </div>
   <div class="top-search-area">
      <div class="search-area">
         <div class="input-group">
            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="I am looking for">
            <button class="btn dropdown-toggle no-hover" type="button" data-bs-toggle="dropdown" aria-expanded="false">Project <span class="material-symbols-outlined"> expand_more </span>
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
            <button class="btn top-search" type="button" id="button-addon2">
            <span>
            <i class="fa fa-search"></i>
            </span>
            </button>
         </div>
      </div>
      <div class="setting-area">
      <span class="msg">
         <a href="#">
         <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/message.svg') }}" alt="message">
         <span class="badge rounded-pill">1 </span>
         </a>
         </span>
         <span class="noti">
         <a href="#">
         <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/notification.svg') }}" alt="notification">
         <span class="badge rounded-pill">9+ </span>
         </a>
         </span>
         <span class="avatar">
         <a href="#">
         <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}" alt="avatar">
         </a>
         </span>
      </div>
   </div>
</header>
<!-- <div class="header-bar">
   <nav>
     <ul>
       <li>
         <a href="#" class="active-icon">All Projects <span class="material-symbols-outlined active"> arrow_drop_up </span>
         </a>
       </li>
       <li>
         <a href="#">All Contracts</a>
       </li>
       <li>
         <a href="#">Post a Job</a>
       </li>
     </ul>
   </nav>
   </div> -->