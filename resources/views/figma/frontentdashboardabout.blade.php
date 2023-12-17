@extends('frontend.layouts.front-admin-dashboard-layout')
@section('content')
<main class="main__layout d-flex">
<!-- start left sidebar -->
<div class="left__sidebar">
<div class="content">
@include('figma/adminleftsidebar')
</div><!--.//content-->
</div>
<!-- end left sidebar -->

<!-- start main body content -->
<div class="main__content__wrapper col">
<!-- start header -->
<div class="header__wrapper py-2 bg-white">
@include('figma/admintopbar')
</div>
<!-- end header -->

<div class="content__wrapper">
<div class="container-fluid">
    <div class="row">
        <!-- <div class="col-md-2">

        </div> -->
        <div class="col-md-12">
            <section class="frontend-dashboard-area  mx-auto ">
                <!-- <div class="container-fluid"> -->
                <div class="frontend-title-area">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="frontend-left-title">
                                <h4>About page</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="frontend-right-title">
                                <button class="save-update">View Page</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="academic-seller-area">
                <div class="container">
                        <div class="row">
                                <div class="col-12">
                                    <div class="academic-bar d-flex">
                                        <h3 class="seller-title">Page title</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="admin-blog-form-area">
                                        <div class="admin-form-content">
                                            <form action="">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col admin-sub-title position-relative">
                                                            <label for="subtitle" class="form-label  level-subtitle">subtitle</label>
                                                            <input id="subtitle" type="text" class="form-control admin-form-input " placeholder="Require steps" aria-label="First name">
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="form-floating admin-text-area position-relative">
                                                        <div class="upload-file">
                                                            <label class="btn btn-default btn-file d-flex justify-content-center flex-column basic-file-upload gap-2">
                                                            <span>
                                                                <input type="file" style="display: none;" required="">
                                                            </span>
                                                            <span class="edux-blog-upload"> <a href="#"><img src=" {{ asset('assets/frontend/img/upload-icon.png') }}"></a></span>
                                                            <h6 class="edux-click">Click to upload or drag & drop</h6>
                                                            <p>Drag & drop any images or documents that might be helpful in explaining your brief here</p>
                                                        </label>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="edux-frontend-left-title ">
                                                            <button class="edux-save-update">Save Update</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                </div>

                </div>
                <div class="academic-seller-area">

                    <div class="container">

                    <div class="row">
                        <div class="col-12">
                            <div class="academic-bar d-flex">
                                <h3 class="seller-title">About area</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="admin-blog-form-area">

                                <div class="admin-form-content">
                                    <form action="">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col admin-sub-title position-relative"> <label for="subtitle" class="form-label  level-subtitle">subtitle</label> <input id="subtitle" type="text" class="form-control admin-form-input " placeholder="Require steps" aria-label="First name"> </div>
                                                <div class="col admin-sub-title position-relative"> <label for="title" class="form-label  level-title">title</label> <input id="title" type="text" class="form-control admin-form-input admin-m-input" placeholder="Search Academic Expert Made Easy" aria-label="Last name"> </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-floating admin-text-area position-relative">
                                                <textarea class="form-control admin-area position-relative" placeholder="Leave a comment here" id="floatingTextarea">Welcome to EduExHub, your premier destination for connecting with top academic experts across a diverse spectrum of fields and disciplines. Whether you represent a higher education institution, a media organisation, or are an individual seeking expert guidance for your academic pursuits, EduExHub is your ultimate resource for empowerment.  </textarea>
                                                <span class="edux-word-count">0/1000</span>
                                                <label for="floatingTextarea" class=" admin-text-area-level position-absolute">Paragraph</label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="edux-frontend-left-title">
                                                    <button class="edux-save-update-spinner"> <span class="spinner" role="status" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                                        <path opacity="0.5" d="M12 2.31641C10.0222 2.31641 8.08879 2.9029 6.4443 4.00171C4.79981 5.10052 3.51809 6.66231 2.76121 8.48957C2.00433 10.3168 1.8063 12.3275 2.19215 14.2673C2.578 16.2071 3.53041 17.9889 4.92894 19.3875C6.32746 20.786 8.10929 21.7384 10.0491 22.1243C11.9889 22.5101 13.9996 22.3121 15.8268 21.5552C17.6541 20.7983 19.2159 19.5166 20.3147 17.8721C21.4135 16.2276 22 14.2942 22 12.3164C22 11.0032 21.7413 9.70283 21.2388 8.48957C20.7363 7.27632 19.9997 6.17392 19.0711 5.24534C18.1425 4.31675 17.0401 3.58016 15.8268 3.07761C14.6136 2.57506 13.3132 2.31641 12 2.31641ZM12 20.3164C10.4178 20.3164 8.87104 19.8472 7.55544 18.9682C6.23985 18.0891 5.21447 16.8397 4.60897 15.3779C4.00347 13.9161 3.84504 12.3075 4.15372 10.7557C4.4624 9.20384 5.22433 7.77837 6.34315 6.65955C7.46197 5.54073 8.88743 4.77881 10.4393 4.47012C11.9911 4.16144 13.5997 4.31987 15.0615 4.92537C16.5233 5.53087 17.7727 6.55625 18.6518 7.87184C19.5308 9.18744 20 10.7342 20 12.3164C20 14.4381 19.1572 16.473 17.6569 17.9733C16.1566 19.4736 14.1217 20.3164 12 20.3164Z" fill="white"/>
                                                        <path d="M20 12.3164H22C22 11.0032 21.7413 9.70283 21.2388 8.48957C20.7362 7.27632 19.9997 6.17392 19.0711 5.24534C18.1425 4.31675 17.0401 3.58016 15.8268 3.07761C14.6136 2.57506 13.3132 2.31641 12 2.31641V4.31641C14.1217 4.31641 16.1566 5.15926 17.6569 6.65955C19.1571 8.15984 20 10.1947 20 12.3164Z" fill="white"/>
                                                        </svg></span>Saving</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                </div>

                <div class="academic-seller-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="academic-bar d-flex">
                                    <h3 class="seller-title">Meet Our Experts</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="admin-blog-form-area">
                                    <div class="admin-form-content">
                                        <form action="">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col admin-sub-title position-relative"> <label for="subtitle" class="form-label  level-subtitle">subtitle</label> <input id="subtitle" type="text" class="form-control admin-form-input " placeholder="Require steps" aria-label="First name"> </div>
                                                    <div class="col admin-sub-title position-relative"> <label for="title" class="form-label  level-title">title</label> <input id="title" type="text" class="form-control admin-form-input admin-m-input" placeholder="Search Academic Expert Made Easy" aria-label="Last name"> </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="team  team-blog">
                        <div class="team-hire">
                        <div class="row">

                                    <div class="col-md-2 col-sm-6">
                                        <div class="team-block"> <a href="#">
                                                <div class="team-img position-relative"> <img src=" {{ asset('assets/frontend/img/team-1.png') }}"> <a class="blog-close position-absolute"> <img class="" src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}" alt="close"> </a> </div>
                                                <div class="hire-text">
                                                    <h4>Darrell Steward</h4>
                                                    <p>Accreditation Specialist</p>
                                                </div>
                                            </a> </div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <div class="team-block"> <a href="#">
                                                <div class="team-img position-relative"> <img src=" {{ asset('assets/frontend/img/team-2.png') }}"> <a class="blog-close position-absolute"> <img class="" src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}" alt="close"> </a> </div>
                                                <div class="hire-text">
                                                    <h4>Theresa Webb</h4>
                                                    <p>Industry Expert</p>
                                                </div>
                                            </a> </div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <div class="team-block"> <a href="#">
                                                <div class="team-img position-relative"> <img src=" {{ asset('assets/frontend/img/team-3.png') }}"> <a class="blog-close position-absolute"> <img class="" src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}" alt="close"> </a> </div>
                                                <div class="hire-text">
                                                    <h4>Marvin McKinney</h4>
                                                    <p>Policy Expert</p>
                                                </div>
                                            </a> </div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <div class="team-block"> <a href="#">
                                                <div class="team-img position-relative"> <img src=" {{ asset('assets/frontend/img/team-4.png') }}"> <a class="blog-close position-absolute"> <img class="" src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}" alt="close"> </a> </div>
                                                <div class="hire-text">
                                                    <h4>Marvin McKinney</h4>
                                                    <p>Curriculum Expert</p>
                                                </div>
                                            </a> </div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <div class="team-block"> <a href="#">
                                                <div class="team-img position-relative"> <img src=" {{ asset('assets/frontend/img/team-4.png') }}"> <a class="blog-close position-absolute"> <img class="" src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}" alt="close"> </a> </div>
                                                <div class="hire-text">
                                                    <h4>Marvin McKinney</h4>
                                                    <p>Curriculum Expert</p>
                                                </div>
                                            </a> </div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <div class="team-block"> <a href="#">
                                                <div class="team-img position-relative"> <img src=" {{ asset('assets/frontend/img/team-3.png') }}"> <a class="blog-close position-absolute"> <img class="" src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}" alt="close"> </a> </div>
                                                <div class="hire-text">
                                                    <h4>Marvin McKinney</h4>
                                                    <p>Policy Expert</p>
                                                </div>
                                            </a> </div>
                                    </div>


                                    <div class="row mt-5">
                                    <div class="col-md-2 col-sm-6">
                                        <div class="team-block"> <a href="#">
                                                <div class="team-img position-relative"> <img src=" {{ asset('assets/frontend/img/team-3.png') }}"> <a class="blog-close position-absolute"> <img class="" src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}" alt="close"> </a> </div>
                                                <div class="hire-text">
                                                    <h4>Marvin McKinney</h4>
                                                    <p>Policy Expert</p>
                                                </div>
                                            </a> </div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <div class="team-block">
                                            <div class="academic-single-item d-flex flex-column">
                                                <div class="admin-add-more"> <a href="#" > <span class="material-symbols-outlined" data-bs-toggle="modal" data-bs-target="#buildondemand">add</span> </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class="edux-frontend-left-title">
                                        <button class="save-update">Save Update</button>
                                    </div>
                                    </div>

                                </div>
                        </div>
                        </div>

                    </div>

                </div>


                <div class="academic-seller-area">

                <div class="container">

                    <div class="row">
                        <div class="col-12">
                            <div class="academic-bar d-flex">
                                <h3 class="seller-title">Our Mission</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="admin-blog-form-area">
                                <div class="admin-form-content">
                                    <form action="">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col admin-sub-title position-relative"> <label for="subtitle" class="form-label  level-subtitle">subtitle</label> <input id="subtitle" type="text" class="form-control admin-form-input " placeholder="Require steps" aria-label="First name"> </div>
                                                <div class="col admin-sub-title position-relative"> <label for="title" class="form-label  level-title">title</label> <input id="title" type="text" class="form-control admin-form-input  admin-m-input" placeholder="Search Academic Expert Made Easy" aria-label="Last name"> </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-floating admin-text-area position-relative"> <textarea class="form-control admin-area position-relative" placeholder="Leave a comment here" id="floatingTextarea">Welcome to EduExHub, your premier destination for connecting with top academic experts across a diverse spectrum of fields and disciplines. Whether you represent a higher education institution, a media organisation, or are an individual seeking expert guidance for your academic pursuits, EduExHub is your ultimate resource for empowerment.</textarea>
                                                <span class="edux-word-count">0/1000</span>
                                                <label for="floatingTextarea" class=" admin-text-area-level position-absolute">Paragraph</label> </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-4">
                    <div class="col-md-5">
                            <div class="mission-img overlay-edit position-relative">
                                 <img src="{{ asset('assets/frontend/img/mission-img.jpg') }}">
                                 <div class="overlay">
                                      <div class="overlay-content edux-overlay-content  admin-about-img">
                                            <a><img src="{{ asset('assets/frontend/img/admin/admin-edit.png') }}" alt=""></a>
                                      </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="edux-frontend-left-title">
                        <button class="save-update">Save Update</button>
                    </div>
                    </div>

                    </div>

                </div>


                <div class="academic-seller-area">
                    <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="academic-bar d-flex">
                                <h3 class="seller-title">What sets EduExHub Apart?</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="admin-blog-form-area">
                                <div class="admin-form-content">
                                    <form action="">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col admin-sub-title position-relative"> <label for="subtitle" class="form-label  level-subtitle">subtitle</label> <input id="subtitle" type="text" class="form-control admin-form-input " placeholder="Require steps" aria-label="First name"> </div>
                                                <div class="col admin-sub-title position-relative"> <label for="title" class="form-label level-title">title</label> <input id="title" type="text" class="form-control admin-form-input admin-m-input" placeholder="Search Academic Expert Made Easy" aria-label="Last name"> </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="eduexhub eduexhub-blog">
                        <div class="container p-1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="tabbable-panel tabbable-panel-blog">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation"> <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">For Clients</button> </li>
                                            <li class="nav-item" role="presentation"> <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" tabindex="-1">For Experts</button> </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="tab-block">
                                                            <div class="tab-img"> <img src="{{ asset('assets/frontend/img/tab-icon.png') }}"> </div>
                                                            <div class="tab-text">
                                                                <h3>A Wealth of Expertise</h3>
                                                                <p>EduExHub takes pride in its extensive and diverse network of distinguished academic experts spanning various fields and disciplines.</p> <a href="#">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="tab-block">
                                                            <div class="tab-img"> <img src="{{ asset('assets/frontend/img/tab-icon.png') }}"> </div>
                                                            <div class="tab-text">
                                                                <h3>Global Accessibility</h3>
                                                                <p>With our platform's global reach, users can tap into the expertise of top academic professionals from around the world.</p> <a href="#">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="tab-block">
                                                            <div class="tab-img"> <img src="{{ asset('assets/frontend/img/tab-icon.png') }}"> </div>
                                                            <div class="tab-text">
                                                                <h3>Comprehensive Support</h3>
                                                                <p>EduExHub offers an array of comprehensive services designed to meet a wide spectrum of needs. Whether users are embarking on course accreditations, curriculum development,</p> <a href="#">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="tab-block">
                                                            <div class="tab-img"> <img src="{{ asset('assets/frontend/img/tab-icon.png') }}"> </div>
                                                            <div class="tab-text">
                                                                <h3>Intuitive User Experience</h3>
                                                                <p>Our user-friendly interface and streamlined process cater to users with varying levels of technical proficiency. Posting academic projects has never been easier,</p> <a href="#">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="tab-block">
                                                            <div class="tab-img"> <img src="{{ asset('assets/frontend/img/tab-icon.png') }}"> </div>
                                                            <div class="tab-text">
                                                                <h3>Secure Transactions</h3>
                                                                <p>Security is paramount atEduExHub. To guarantee peace of mind for both users and experts, we hold payments in escrow until</p> <a href="#">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="tab-block">
                                                            <div class="tab-img"> <img src="{{ asset('assets/frontend/img/tab-icon.png') }}"> </div>
                                                            <div class="tab-text">
                                                                <h3>Intuitive User Experience</h3>
                                                                <p>Our user-friendly interface and streamlined process cater to users with varying levels of technical proficiency. Posting academic projects has never been easier,</p> <a href="#">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="tab-block">
                                                            <div class="tab-img"> <img src="{{ asset('assets/frontend/img/tab-icon.png') }}"> </div>
                                                            <div class="tab-text">
                                                                <h3>A Wealth of Expertise</h3>
                                                                <p>EduExHub takes pride in its extensive and diverse network of distinguished academic experts spanning various fields and disciplines.</p> <a href="#">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="tab-block">
                                                            <div class="tab-img"> <img src="{{ asset('assets/frontend/img/tab-icon.png') }}"> </div>
                                                            <div class="tab-text">
                                                                <h3>Global Accessibility</h3>
                                                                <p>With our platform's global reach, users can tap into the expertise of top academic professionals from around the world.</p> <a href="#">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="tab-block">
                                                            <div class="tab-img"> <img src="{{ asset('assets/frontend/img/tab-icon.png') }}"> </div>
                                                            <div class="tab-text">
                                                                <h3>Comprehensive Support</h3>
                                                                <p>EduExHub offers an array of comprehensive services designed to meet a wide spectrum of needs. Whether users are embarking on course accreditations, curriculum development,</p> <a href="#">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="tab-block">
                                                            <div class="tab-img"> <img src="{{ asset('assets/frontend/img/tab-icon.png') }}"> </div>
                                                            <div class="tab-text">
                                                                <h3>Intuitive User Experience</h3>
                                                                <p>Our user-friendly interface and streamlined process cater to users with varying levels of technical proficiency. Posting academic projects has never been easier,</p> <a href="#">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-4">
                            <div class="col-md-2">
                                    <div class="require-block">
                                        <div class="academic-single-item d-flex flex-column">
                                            <div class="admin-add-more"> <a href="#"> <span class="material-symbols-outlined" data-bs-toggle="modal" data-bs-target="#searchacademicWhatModal">add</span> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="edux-frontend-left-title">
                                    <button class="save-update">Save Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>


                <div class="academic-seller-area">
                    <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="academic-bar d-flex">
                                <h3 class="seller-title">Build on Demand Teams for your Education Institution</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">


                    <div class="col-md-12">
                            <div class="admin-blog-form-area">
                                <div class="admin-form-content">
                                    <form action="">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col admin-sub-title position-relative"> <label for="subtitle" class="form-label  level-subtitle">subtitle</label> <input id="subtitle" type="text" class="form-control admin-form-input " placeholder="Require steps" aria-label="First name"> </div>
                                                <div class="col admin-sub-title position-relative"> <label for="title" class="form-label  level-title">title</label> <input id="title" type="text" class="form-control admin-form-input admin-m-input" placeholder="Search Academic Expert Made Easy" aria-label="Last name"> </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-floating admin-text-area position-relative"> <textarea class="form-control admin-area position-relative" placeholder="Leave a comment here" id="floatingTextarea">Welcome to EduExHub, your premier destination for connecting with top academic experts across a diverse spectrum of fields and disciplines. Whether you represent a higher education institution, a media organisation, or are an individual seeking expert guidance for your academic pursuits, EduExHub is your ultimate resource for empowerment.</textarea>
                                                <span class="edux-word-count">0/1000</span>
                                                <label for="floatingTextarea" class=" admin-text-area-level position-absolute">Paragraph</label> </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="team  team-blog">
                        <div class="team-hire">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2 col-sm-6">
                                        <div class="team-block"> <a href="#">
                                                <div class="team-img position-relative"> <img src=" {{ asset('assets/frontend/img/team-1.png') }}"> <a class="blog-close position-absolute"> <img class="" src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}" alt="close"> </a> </div>
                                                <div class="hire-text">
                                                    <h4>Darrell Steward</h4>
                                                    <p>Accreditation Specialist</p>
                                                </div>
                                            </a> </div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <div class="team-block"> <a href="#">
                                                <div class="team-img position-relative"> <img src=" {{ asset('assets/frontend/img/team-2.png') }}"> <a class="blog-close position-absolute"> <img class="" src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}" alt="close"> </a> </div>
                                                <div class="hire-text">
                                                    <h4>Theresa Webb</h4>
                                                    <p>Industry Expert</p>
                                                </div>
                                            </a> </div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <div class="team-block"> <a href="#">
                                                <div class="team-img position-relative"> <img src=" {{ asset('assets/frontend/img/team-3.png') }}"> <a class="blog-close position-absolute"> <img class="" src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}" alt="close"> </a> </div>
                                                <div class="hire-text">
                                                    <h4>Marvin McKinney</h4>
                                                    <p>Policy Expert</p>
                                                </div>
                                            </a> </div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <div class="team-block"> <a href="#">
                                                <div class="team-img position-relative"> <img src=" {{ asset('assets/frontend/img/team-4.png') }}"> <a class="blog-close position-absolute"> <img class="" src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}" alt="close"> </a> </div>
                                                <div class="hire-text">
                                                    <h4>Marvin McKinney</h4>
                                                    <p>Curriculum Expert</p>
                                                </div>
                                            </a> </div>
                                    </div>

                                    <div class="col-md-2 col-sm-6">
                                        <div class="team-block"> <a href="#">
                                                <div class="team-img position-relative"> <img src=" {{ asset('assets/frontend/img/team-4.png') }}"> <a class="blog-close position-absolute"> <img class="" src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}" alt="close"> </a> </div>
                                                <div class="hire-text">
                                                    <h4>Marvin McKinney</h4>
                                                    <p>Curriculum Expert</p>
                                                </div>
                                            </a> </div>
                                    </div>


                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-2 col-sm-6">
                                        <div class="team-block">
                                            <div class="academic-single-item d-flex flex-column">
                                                <div class="admin-add-more"> <a href="#" > <span class="material-symbols-outlined" data-bs-toggle="modal" data-bs-target="#buildondemand">add</span> </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="edux-frontend-left-title">
                                    <button class="save-update">Save Update</button>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="academic-seller-area">
                    <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="academic-bar d-flex">
                                <h3 class="seller-title">Delivering World-Class Learning Outcomes at Scale</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="admin-blog-form-area">
                                <div class="admin-form-content">
                                    <form action="">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col admin-sub-title position-relative"> <label for="subtitle" class="form-label  level-subtitle">subtitle</label> <input id="subtitle" type="text" class="form-control admin-form-input " placeholder="Require steps" aria-label="First name"> </div>
                                                <div class="col admin-sub-title position-relative"> <label for="title" class="form-label  level-title">title</label> <input id="title" type="text" class="form-control admin-form-input admin-m-input" placeholder="Search Academic Expert Made Easy" aria-label="Last name"> </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-floating admin-text-area position-relative"> <textarea class="form-control admin-area position-relative" placeholder="Leave a comment here" id="floatingTextarea">Welcome to EduExHub, your premier destination for connecting with top academic experts across a diverse spectrum of fields and disciplines. Whether you represent a higher education institution, a media organisation, or are an individual seeking expert guidance for your academic pursuits, EduExHub is your ultimate resource for empowerment.</textarea>
                                                <span class="edux-word-count">0/1000</span>
                                                <label for="floatingTextarea" class=" admin-text-area-level position-absolute">Paragraph</label> </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        </div>
                        <div class="row mt-4">
                        <div class="col-md-5">
                            <div class="mission-img overlay-edit position-relative">
                                 <img src="{{ asset('assets/frontend/img/story-img.jpg') }}">
                                 <div class="overlay">
                                      <div class="overlay-content edux-overlay-content">
                                            <a ><img class="admin-about-img" src="{{ asset('assets/frontend/img/admin/admin-edit.png') }}" alt=""></a>
                                      </div>
                                    </div>
                            </div>

                            </div>
                        </div>
                        <div class="row">
                                <div class="edux-frontend-left-title">
                                    <button class="save-update">Save Update</button>
                                </div>
                            </div>
                    </div>

                </div>



        </div>
        </section>
    </div>
</div>

 </div><!--.//content-->
    </div>
        <!-- end body content -->
</main><!--.//main_layout-->



<!-- ================================= add expert Modal start ====================================================-->
<div class="modal fade" id="expireSlider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog add-expert-modal">
        <div class="modal-content add-expert-content">
            <div class="modal-header border-0"> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div>
            <div class="modal-body pt-0">
                <div class="add-expert-modal-area">
                    <h1 class="modal-title fs-5 m-expert-title" id="exampleModalLabel">Add Expert</h1>
                    <div class="admin-text-search position-relative"> <span class="img-admin-search position-absolute"><img src="{{ asset('assets/frontend/img/admin-search.png') }}"> </span>
                    <select class="form-select top-input-control" aria-label="Default select example">
                            <option selected>Search expert by na...</option>
                            <option value="1">Professor Miles Esther</option>
                            <option value="2"> enny Wilson</option>
                            <option value="3">Leslie Alexander</option>
                            <option value="4">Leslie Alexander</option>
                        </select>
                      </div>
                    <div class="add-expert-single-item position-relative">
                        <div class="right-sidebar">
                            <div class="right-database">
                                <div class="database-block database-blog">
                                    <div class="database-contant">
                                        <div class="database-img"> <img src="{{ asset('assets/frontend/img/admin/ex1.png') }}"> </div>
                                        <div class="database-text admin-text">
                                            <h4> <a href="#">Professor Michael Kassiou</a> </h4> <span>Agricultural Engineering Expert</span> <span>University of Sydney</span> <span>Australia</span>
                                            <div class="consultant-reviw modal-consultant-review">
                                                <ul>
                                                    <li> <strong>$200</strong> / hr </li>
                                                    <li> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </li>
                                                </ul>
                                            </div>
                                            <div class="projects-slider">
                                                <div id="carouselExampleIndicators" class="carousel slide">
                                                    <div class="carousel-indicators"> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                                            <h4 class="light-weight active">
                                                                <p> <img src="{{ asset('assets/frontend/img/admin/activelight.png') }}" alt=""> </p>
                                                                <p> keynote speaker</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                                                            <h4 class="more-read more-read-blog">
                                                                <p>+12 More</p>
                                                            </h4>
                                                        </button> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-job add-expert-post position-absolute"> <button class="btn btn-postjob d-flex justify-content-center  align-items-center"> <span class="material-symbols-outlined">add</span> <span>Add expert </span> </button> </div>
                    </div>
                    <div class="add-expert-single-item position-relative">
                        <div class="right-sidebar">
                            <div class="right-database">
                                <div class="database-block database-blog">
                                    <div class="database-contant">
                                        <div class="database-img"> <img src="{{ asset('assets/frontend/img/admin/ex3.png') }}"> </div>
                                        <div class="database-text admin-text">
                                            <h4> <a href="#">Professor Michael Kassiou</a> </h4> <span>Agricultural Engineering Expert</span> <span>University of Sydney</span> <span>Australia</span>
                                            <div class="consultant-reviw modal-consultant-review">
                                                <ul>
                                                    <li> <strong>$200</strong> / hr </li>
                                                    <li> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </li>
                                                </ul>
                                            </div>
                                            <div class="projects-slider">
                                                <div id="carouselExampleIndicators" class="carousel slide">
                                                    <div class="carousel-indicators"> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                                            <h4 class="light-weight active">
                                                                <p> <img src="{{ asset('assets/frontend/img/admin/zoom-icon.png') }}" alt=""> </p>
                                                                <p> keynote speaker</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                                                            <h4 class="more-read more-read-blog">
                                                                <p>+12 More</p>
                                                            </h4>
                                                        </button> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-job add-expert-post position-absolute"> <button class="btn btn-postjob d-flex justify-content-center  align-items-center"> <span class="material-symbols-outlined">add</span> <span>Add expert </span> </button> </div>
                    </div>
                    <div class="add-expert-single-item position-relative">
                        <div class="right-sidebar">
                            <div class="right-database">
                                <div class="database-block database-blog">
                                    <div class="database-contant">
                                        <div class="database-img"> <img src="{{ asset('assets/frontend/img/admin/ex2.png') }}"> </div>
                                        <div class="database-text admin-text">
                                            <h4> <a href="#">Professor Michael Kassiou</a> </h4> <span>Agricultural Engineering Expert</span> <span>University of Sydney</span> <span>Australia</span>
                                            <div class="consultant-reviw modal-consultant-review">
                                                <ul>
                                                    <li> <strong>$200</strong> / hr </li>
                                                    <li> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </li>
                                                </ul>
                                            </div>
                                            <div class="projects-slider">
                                                <div id="carouselExampleIndicators" class="carousel slide">
                                                    <div class="carousel-indicators"> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                                            <h4 class="light-weight active">
                                                                <p> <img src="{{ asset('assets/frontend/img/admin/zoom-icon.png') }}" alt=""> </p>
                                                                <p> keynote speaker</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                                                            <h4 class="more-read more-read-blog">
                                                                <p>+12 More</p>
                                                            </h4>
                                                        </button> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-job add-expert-post position-absolute"> <button class="btn btn-postjob d-flex justify-content-center  align-items-center" data-bs-toggle="modal" data-bs-target="#blogEditModal"> <span class="material-symbols-outlined">add</span> <span>Add expert </span> </button> </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-0"> <button type="button" class="btn btn-secondary btn-addexpert-cancel" data-bs-dismiss="modal">Cancel</button> </div>
        </div>
    </div>
</div> <!-- add expert Modal End -->
<div class="modal fade" id="blogEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog add-expert-modal">
        <div class="modal-content add-expert-content">
            <div class="modal-header border-0"> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div>
            <div class="modal-body pt-0">
                <div class="add-expert-modal-area">
                    <h1 class="modal-title fs-5 m-expert-title" id="exampleModalLabel">Add Expert</h1>
                    <div class="admin-text-search position-relative"> <span class="img-admin-search position-absolute"><img src="{{ asset('assets/frontend/img/admin-search.png') }}"> </span> <select class="form-select top-input-control" aria-label="Default select example">
                            <option selected>Search expert by na...</option>
                            <option value="1">Professor Miles Esther</option>
                            <option value="2"> enny Wilson</option>
                            <option value="3">Leslie Alexander</option>
                            <option value="4">Leslie Alexander</option>
                        </select> </div>
                    <div class="add-expert-single-item position-relative">
                        <div class="right-sidebar">
                            <div class="right-database">
                                <div class="database-block database-blog">
                                    <div class="database-contant">
                                        <div class="database-img"> <img src="{{ asset('assets/frontend/img/admin/ex3.png') }}"> </div>
                                        <div class="database-text admin-text">
                                            <h4> <a href="#">Professor Michael Kassiou</a> </h4> <span>Agricultural Engineering Expert</span> <span>University of Sydney</span> <span>Australia</span>
                                            <div class="consultant-reviw modal-consultant-review">
                                                <ul>
                                                    <li> <strong>$200</strong> / hr </li>
                                                    <li> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </li>
                                                </ul>
                                            </div>
                                            <div class="projects-slider">
                                                <div id="carouselExampleIndicators" class="carousel slide">
                                                    <div class="carousel-indicators"> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                                            <h4 class="light-weight active">
                                                                <p> <img src="{{ asset('assets/frontend/img/admin/zoom-icon.png') }}" alt=""> </p>
                                                                <p> keynote speaker</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                                                            <h4 class="more-read more-read-blog">
                                                                <p>+12 More</p>
                                                            </h4>
                                                        </button> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-expert-single-item position-relative">
                        <div class="right-sidebar">
                            <div class="right-database">
                                <div class="database-block database-blog">
                                    <div class="database-contant">
                                        <div class="database-img"> <img src="{{ asset('assets/frontend/img/admin/ex2.png') }}"> </div>
                                        <div class="database-text admin-text">
                                            <h4> <a href="#">Professor Michael Kassiou</a> </h4> <span>Agricultural Engineering Expert</span> <span>University of Sydney</span> <span>Australia</span>
                                            <div class="consultant-reviw modal-consultant-review">
                                                <ul>
                                                    <li> <strong>$200</strong> / hr </li>
                                                    <li> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </li>
                                                </ul>
                                            </div>
                                            <div class="projects-slider">
                                                <div id="carouselExampleIndicators" class="carousel slide">
                                                    <div class="carousel-indicators"> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                                            <h4 class="light-weight active">
                                                                <p> <img src="{{ asset('assets/frontend/img/admin/zoom-icon.png') }}" alt=""> </p>
                                                                <p> keynote speaker</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                                                            <h4 class="more-read more-read-blog">
                                                                <p>+12 More</p>
                                                            </h4>
                                                        </button> </div>
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
            <div class="modal-footer border-0 pt-0"> <button type="button" class="btn btn-secondary btn-addexpert-cancel" data-bs-dismiss="modal">Cancel</button> <button type="button" class="btn btn-primary btn-expert-update">Update</button> </div>
        </div>
    </div>
</div>
<!--======================================= Expire Research Modal start here =================================-->


<!-- ================================= Build on Demand Modal start ====================================================-->
<div class="modal fade" id="buildondemand" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog add-expert-modal">
        <div class="modal-content add-expert-content">
            <div class="modal-header border-0"> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div>
            <div class="modal-body pt-0">
                <div class="add-expert-modal-area">
                    <h1 class="modal-title fs-5 m-expert-title" id="exampleModalLabel">Add Expert</h1>
                    <div class="admin-text-search position-relative"> <span class="img-admin-search position-absolute"><img src="{{ asset('assets/frontend/img/admin-search.png') }}"> </span>
                    <select class="form-select top-input-control" aria-label="Default select example">
                            <option selected>Search expert by na...</option>
                            <option value="1">Professor Miles Esther</option>
                            <option value="2"> enny Wilson</option>
                            <option value="3">Leslie Alexander</option>
                            <option value="4">Leslie Alexander</option>
                        </select>
                      </div>
                    <div class="add-expert-single-item position-relative">
                        <div class="right-sidebar">
                            <div class="right-database">
                                <div class="database-block database-blog">
                                    <div class="database-contant">
                                        <div class="database-img"> <img src="{{ asset('assets/frontend/img/admin/ex1.png') }}"> </div>
                                        <div class="database-text admin-text">
                                            <h4> <a href="#">Professor Michael Kassiou</a> </h4> <span>Agricultural Engineering Expert</span> <span>University of Sydney</span> <span>Australia</span>
                                            <div class="review rating-area consultant-reviw modal-consultant-review">
                                                    <ul class="all-project-rating">
                                                    <li> <strong>$200</strong> / hr </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        </ul>
                                                    </div>
                                            <div class="projects-slider">
                                                <div id="carouselExampleIndicators" class="carousel slide">
                                                    <div class="carousel-indicators"> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                                            <h4 class="light-weight active">
                                                                <p> <img src="{{ asset('assets/frontend/img/admin/activelight.png') }}" alt=""> </p>
                                                                <p> keynote speaker</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                                                            <h4 class="more-read more-read-blog">
                                                                <p>+12 More</p>
                                                            </h4>
                                                        </button> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-job add-expert-post position-absolute"> <button class="btn btn-postjob d-flex justify-content-center  align-items-center"> <span class="material-symbols-outlined">add</span> <span>Add expert </span> </button> </div>
                    </div>
                    <div class="add-expert-single-item position-relative">
                        <div class="right-sidebar">
                            <div class="right-database">
                                <div class="database-block database-blog">
                                    <div class="database-contant">
                                        <div class="database-img"> <img src="{{ asset('assets/frontend/img/admin/ex3.png') }}"> </div>
                                        <div class="database-text admin-text">
                                            <h4> <a href="#">Professor Michael Kassiou</a> </h4> <span>Agricultural Engineering Expert</span> <span>University of Sydney</span> <span>Australia</span>
                                            <div class="review rating-area consultant-reviw modal-consultant-review">
                                                    <ul class="all-project-rating">
                                                    <li> <strong>$200</strong> / hr </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        </ul>
                                                    </div>
                                            <div class="projects-slider">
                                                <div id="carouselExampleIndicators" class="carousel slide">
                                                    <div class="carousel-indicators"> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                                            <h4 class="light-weight active">
                                                                <p> <img src="{{ asset('assets/frontend/img/admin/zoom-icon.png') }}" alt=""> </p>
                                                                <p> keynote speaker</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                                                            <h4 class="more-read more-read-blog">
                                                                <p>+12 More</p>
                                                            </h4>
                                                        </button> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-job add-expert-post position-absolute"> <button class="btn btn-postjob d-flex justify-content-center  align-items-center"> <span class="material-symbols-outlined">add</span> <span>Add expert </span> </button> </div>
                    </div>
                    <div class="add-expert-single-item position-relative">
                        <div class="right-sidebar">
                            <div class="right-database">
                                <div class="database-block database-blog">
                                    <div class="database-contant">
                                        <div class="database-img"> <img src="{{ asset('assets/frontend/img/admin/ex2.png') }}"> </div>
                                        <div class="database-text admin-text">
                                            <h4> <a href="#">Professor Michael Kassiou</a> </h4> <span>Agricultural Engineering Expert</span> <span>University of Sydney</span> <span>Australia</span>
                                            <div class="review rating-area consultant-reviw modal-consultant-review">
                                                    <ul class="all-project-rating">
                                                    <li> <strong>$200</strong> / hr </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        </ul>
                                                    </div>
                                            <div class="projects-slider">
                                                <div id="carouselExampleIndicators" class="carousel slide">
                                                    <div class="carousel-indicators"> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                                            <h4 class="light-weight active">
                                                                <p> <img src="{{ asset('assets/frontend/img/admin/zoom-icon.png') }}" alt=""> </p>
                                                                <p> keynote speaker</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                                                            <h4 class="more-read more-read-blog">
                                                                <p>+12 More</p>
                                                            </h4>
                                                        </button> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-job add-expert-post position-absolute"> <button class="btn btn-postjob d-flex justify-content-center  align-items-center" data-bs-toggle="modal" data-bs-target="#buildondemandedit"> <span class="material-symbols-outlined">add</span> <span>Add expert </span> </button> </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-0"> <button type="button" class="btn btn-secondary btn-addexpert-cancel" data-bs-dismiss="modal">Cancel</button> </div>
        </div>
    </div>
</div> <!-- add expert Modal End -->
<div class="modal fade" id="buildondemandedit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog add-expert-modal">
        <div class="modal-content add-expert-content">
            <div class="modal-header border-0"> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div>
            <div class="modal-body pt-0">
                <div class="add-expert-modal-area">
                    <h1 class="modal-title fs-5 m-expert-title" id="exampleModalLabel">Add Expert</h1>
                    <div class="admin-text-search position-relative"> <span class="img-admin-search position-absolute"><img src="{{ asset('assets/frontend/img/admin-search.png') }}"> </span> <select class="form-select top-input-control" aria-label="Default select example">
                            <option selected>Search expert by na...</option>
                            <option value="1">Professor Miles Esther</option>
                            <option value="2"> enny Wilson</option>
                            <option value="3">Leslie Alexander</option>
                            <option value="4">Leslie Alexander</option>
                        </select> </div>
                    <div class="add-expert-single-item position-relative">
                        <div class="right-sidebar">
                            <div class="right-database">
                                <div class="database-block database-blog">
                                    <div class="database-contant">
                                        <div class="database-img"> <img src="{{ asset('assets/frontend/img/admin/ex3.png') }}"> </div>
                                        <div class="database-text admin-text">
                                            <h4> <a href="#">Professor Michael Kassiou</a> </h4> <span>Agricultural Engineering Expert</span> <span>University of Sydney</span> <span>Australia</span>
                                            <div class="review rating-area consultant-reviw modal-consultant-review">
                                                    <ul class="all-project-rating">
                                                    <li> <strong>$200</strong> / hr </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        </ul>
                                                    </div>
                                            <div class="projects-slider">
                                                <div id="carouselExampleIndicators" class="carousel slide">
                                                    <div class="carousel-indicators"> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                                            <h4 class="light-weight active">
                                                                <p> <img src="{{ asset('assets/frontend/img/admin/zoom-icon.png') }}" alt=""> </p>
                                                                <p> keynote speaker</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                                                            <h4 class="more-read more-read-blog">
                                                                <p>+12 More</p>
                                                            </h4>
                                                        </button> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-expert-single-item position-relative">
                        <div class="right-sidebar">
                            <div class="right-database">
                                <div class="database-block database-blog">
                                    <div class="database-contant">
                                        <div class="database-img"> <img src="{{ asset('assets/frontend/img/admin/ex2.png') }}"> </div>
                                        <div class="database-text admin-text">
                                            <h4> <a href="#">Professor Michael Kassiou</a> </h4> <span>Agricultural Engineering Expert</span> <span>University of Sydney</span> <span>Australia</span>
                                            <div class="review rating-area consultant-reviw modal-consultant-review">
                                                    <ul class="all-project-rating">
                                                    <li> <strong>$200</strong> / hr </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        </ul>
                                                    </div>
                                            <div class="projects-slider">
                                                <div id="carouselExampleIndicators" class="carousel slide">
                                                    <div class="carousel-indicators"> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                                            <h4 class="light-weight active">
                                                                <p> <img src="{{ asset('assets/frontend/img/admin/zoom-icon.png') }}" alt=""> </p>
                                                                <p> keynote speaker</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational Research</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                            <h4 class="light-weight">
                                                                <p>Educational</p>
                                                            </h4>
                                                        </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                                                            <h4 class="more-read more-read-blog">
                                                                <p>+12 More</p>
                                                            </h4>
                                                        </button> </div>
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
            <div class="modal-footer border-0 pt-0"> <button type="button" class="btn btn-secondary btn-addexpert-cancel" data-bs-dismiss="modal">Cancel</button> <button type="button" class="btn btn-primary btn-expert-update">Update</button> </div>
        </div>
    </div>
</div>
<!--======================================= Expire Research Modal start here =================================-->




<div class="modal fade" id="exploreResearchSlider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog add-expert-modal">
        <div class="modal-content add-expert-content">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add scholarship</h1> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0 ">
                <div class="add-expert-modal-area">
                    <div class="admin-text-search position-relative"> <span class="img-admin-search position-absolute"><img src="{{ asset('assets/frontend/img/admin-search.png') }}"> </span> <select class="form-select top-input-control" aria-label="Default select example">
                            <option selected="">Search expert by na...</option>
                            <option value="1">Professor Miles Esther</option>
                            <option value="2"> enny Wilson</option>
                            <option value="3">Leslie Alexander</option>
                            <option value="4">Leslie Alexander</option>
                        </select> </div>
                    <div class="add-expert-single-item position-relative">
                        <div class="right-sidebar">
                            <div class="right-database">
                                <div class="database-block">
                                    <div class="database-contant databasesce">
                                        <div class="database-img"> <img src="{{ asset('assets/frontend/img/database2.png') }}"> </div>
                                        <div class="database-text">
                                            <h4> <a href="#">Post Graduate Research Scholarships</a> </h4> <span>Western Sydney University</span> <span>Australia</span>
                                            <div class="trining-dateline">
                                                <div class="single-dateline">
                                                    <p>Application Deadline</p>
                                                    <p class="p-rote">16 February 2024 - 28 Mar 2024</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p>Study area</p>
                                                    <p class="p-rote"> All</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p>Study Level</p>
                                                    <p class="p-rote">Master of Philosophy, Doctors of Philosophy, Master by research </p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p>Student type</p>
                                                    <p class="p-rote"> Domestic</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p>Scholarship Value</p>
                                                    <p class="p-rote"> $45,000 / Yearly</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-job add-expert-post position-absolute"> <button class="btn btn-postjob d-flex justify-content-center  align-items-center"> <span class="material-symbols-outlined">add</span> <span>Add training </span> </button> </div>
                    </div>
                    <div class="add-expert-single-item position-relative">
                        <div class="right-sidebar">
                            <div class="right-database">
                                <div class="database-block">
                                    <div class="database-contant databasesce">
                                        <div class="database-img"> <img src="{{ asset('assets/frontend/img/database2.png') }}"> </div>
                                        <div class="database-text">
                                            <h4> <a href="#">Post Graduate Research Scholarships</a> </h4> <span>Western Sydney University</span> <span>Australia</span>
                                            <div class="trining-dateline">
                                                <div class="single-dateline">
                                                    <p>Application Deadline</p>
                                                    <p class="p-rote">16 February 2024 - 28 Mar 2024</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p>Study area</p>
                                                    <p class="p-rote"> All</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p>Study Level</p>
                                                    <p class="p-rote">Master of Philosophy, Doctors of Philosophy, Master by research </p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p>Student type</p>
                                                    <p class="p-rote"> Domestic</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p>Scholarship Value</p>
                                                    <p class="p-rote"> $45,000 / Yearly</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-job add-expert-post position-absolute"> <button class="btn btn-postjob d-flex justify-content-center  align-items-center" data-bs-toggle="modal" data-bs-target="#exploreResearchEditSlider"> <span class="material-symbols-outlined">add</span> <span>Add training </span> </button> </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-0"> <button type="button" class="btn btn-secondary btn-addexpert-cancel" data-bs-dismiss="modal">Cancel</button> </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exploreResearchEditSlider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog add-expert-modal">
        <div class="modal-content add-expert-content">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add scholarship</h1> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0 ">
                <div class="add-expert-modal-area">
                    <div class="admin-text-search position-relative"> <span class="img-admin-search position-absolute"><img src="{{ asset('assets/frontend/img/admin-search.png') }}"> </span> <select class="form-select top-input-control" aria-label="Default select example">
                            <option selected="">Search expert by na...</option>
                            <option value="1">Professor Miles Esther</option>
                            <option value="2"> enny Wilson</option>
                            <option value="3">Leslie Alexander</option>
                            <option value="4">Leslie Alexander</option>
                        </select> </div>
                    <div class="add-expert-single-item position-relative">
                        <div class="right-sidebar">
                            <div class="right-database">
                                <div class="database-block">
                                    <div class="database-contant databasesce">
                                        <div class="database-img"> <img src="{{ asset('assets/frontend/img/database2.png') }}"> </div>
                                        <div class="database-text">
                                            <h4> <a href="#">Post Graduate Research Scholarships</a> </h4> <span>Western Sydney University</span> <span>Australia</span>
                                            <div class="trining-dateline">
                                                <div class="single-dateline">
                                                    <p>Application Deadline</p>
                                                    <p class="p-rote">16 February 2024 - 28 Mar 2024</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p>Study area</p>
                                                    <p class="p-rote"> All</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p>Study Level</p>
                                                    <p class="p-rote">Master of Philosophy, Doctors of Philosophy, Master by research </p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p>Student type</p>
                                                    <p class="p-rote"> Domestic</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p>Scholarship Value</p>
                                                    <p class="p-rote"> $45,000 / Yearly</p>
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
            <div class="modal-footer border-0 pt-0"> <button type="button" class="btn btn-secondary btn-addexpert-cancel" data-bs-dismiss="modal">Cancel</button> <button type="button" class="btn btn-primary btn-expert-update">Update</button> </div>
        </div>
    </div>
</div>
<!--======================================= Expire Research Modal end here  =================================-->
<!--======================================= Expire Research Modal start here =================================-->
<div class="modal fade" id="upcomingSlider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog add-expert-modal">
        <div class="modal-content add-expert-content">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Trining</h1> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0 ">
                <div class="add-expert-modal-area">
                    <div class="admin-text-search position-relative"> <span class="img-admin-search position-absolute"><img src="{{ asset('assets/frontend/img/admin-search.png') }}"> </span> <select class="form-select top-input-control" aria-label="Default select example">
                            <option selected="">Multilevel Modelling: A Second Course</option>
                            <option value="1">Foundations of PLS-SEM Using SmartPLS 4</option>
                            <option value="2"> Multilevel and Mixed Models Using Stata</option>
                            <option value="3">Data Wrangling with R*</option>
                        </select> </div>
                    <div class="add-expert-single-item position-relative">
                        <div class="right-sidebar">
                            <div class="right-database">
                                <div class="database-block">
                                    <div class="database-contant databasesce">
                                        <div class="database-img"> <img src="{{ asset('assets/frontend/img/foundation.png') }}"> </div>
                                        <div class="database-text  dataset-title">
                                            <h4> <a href="#">Multilevel Modeling: A Second Course</a> </h4> <span>Chicago (CDT)</span> <span class="border-right-none">USA</span>
                                            <div class="trining-dateline">
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Seminar Dates</p>
                                                    <p class="p-rote">23 January 2024 - 28 April 2024</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Instructors</p>
                                                    <p class="p-rote p-rote-text fw-bold"> Prof. Michel jhon | Dr. Nathon rainbot</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Training Mode</p>
                                                    <p class="p-rote d-flex align-items-center p-rote-text"> <span class="border-right-none"><img src="{{ asset('assets/frontend/img/admin/ad-group.png') }}"> </span> <span class="p-rote-text fw-bold">Face to Face</span> </p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Language</p>
                                                    <p class="p-rote"> French</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Training Category:</p>
                                                    <p class="p-rote"> Research and Analysis</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Partner Institute</p>
                                                    <p class="p-rote p-rote-text fw-bold">Western Sydney University | Oxford University</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-job add-expert-post position-absolute"> <button class="btn btn-postjob d-flex justify-content-center  align-items-center"> <span class="material-symbols-outlined">add</span> <span>Add training </span> </button> </div>
                    </div>
                    <div class="add-expert-single-item position-relative">
                        <div class="right-sidebar">
                            <div class="right-database">
                                <div class="database-block">
                                    <div class="database-contant databasesce">
                                        <div class="database-img"> <img src="{{ asset('assets/frontend/img/foundation.png') }}"> </div>
                                        <div class="database-text  dataset-title">
                                            <h4> <a href="#">Multilevel Modeling: A Second Course</a> </h4> <span>Chicago (CDT)</span> <span class="border-right-none">USA</span>
                                            <div class="trining-dateline">
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Seminar Dates</p>
                                                    <p class="p-rote">23 January 2024 - 28 April 2024</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Instructors</p>
                                                    <p class="p-rote p-rote-text fw-bold"> Prof. Michel jhon | Dr. Nathon rainbot</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Training Mode</p>
                                                    <p class="p-rote d-flex align-items-center p-rote-text"> <span class="border-right-none"><img src="{{ asset('assets/frontend/img/admin/ad-group.png') }}"> </span> <span class="p-rote-text fw-bold">Face to Face</span> </p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Language</p>
                                                    <p class="p-rote"> French</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Training Category:</p>
                                                    <p class="p-rote"> Research and Analysis</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Partner Institute</p>
                                                    <p class="p-rote p-rote-text fw-bold">Western Sydney University | Oxford University</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-job add-expert-post position-absolute"> <button class="btn btn-postjob d-flex justify-content-center  align-items-center" data-bs-toggle="modal" data-bs-target="#upcomingSliderEdit"> <span class="material-symbols-outlined">add</span> <span>Add training </span> </button> </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-0"> <button type="button" class="btn btn-secondary btn-addexpert-cancel" data-bs-dismiss="modal">Cancel</button> </div>
        </div>
    </div>
</div>
<div class="modal fade" id="upcomingSliderEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog add-expert-modal">
        <div class="modal-content add-expert-content">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Trining</h1> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0 ">
                <div class="add-expert-modal-area">
                    <div class="admin-text-search position-relative"> <span class="img-admin-search position-absolute"><img src="{{ asset('assets/frontend/img/admin-search.png') }}"> </span> <select class="form-select top-input-control" aria-label="Default select example">
                            <option selected="">Multilevel Modelling: A Second Course</option>
                            <option value="1">Foundations of PLS-SEM Using SmartPLS 4</option>
                            <option value="2"> Multilevel and Mixed Models Using Stata</option>
                            <option value="3">Data Wrangling with R*</option>
                        </select> </div>
                    <div class="add-expert-single-item position-relative">
                        <div class="right-sidebar">
                            <div class="right-database">
                                <div class="database-block">
                                    <div class="database-contant databasesce">
                                        <div class="database-img"> <img src="{{ asset('assets/frontend/img/foundation.png') }}"> </div>
                                        <div class="database-text  dataset-title">
                                            <h4> <a href="#">Multilevel Modeling: A Second Course</a> </h4> <span>Chicago (CDT)</span> <span class="border-right-none">USA</span>
                                            <div class="trining-dateline">
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Seminar Dates</p>
                                                    <p class="p-rote">23 January 2024 - 28 April 2024</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Instructors</p>
                                                    <p class="p-rote p-rote-text fw-bold"> Prof. Michel jhon | Dr. Nathon rainbot</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Training Mode</p>
                                                    <p class="p-rote d-flex align-items-center p-rote-text"> <span class="border-right-none"><img src="{{ asset('assets/frontend/img/admin/ad-group.png') }}"> </span> <span class="p-rote-text fw-bold">Face to Face</span> </p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Language</p>
                                                    <p class="p-rote"> French</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Training Category:</p>
                                                    <p class="p-rote"> Research and Analysis</p>
                                                </div>
                                                <div class="single-dateline">
                                                    <p class="p-rote-text">Partner Institute</p>
                                                    <p class="p-rote p-rote-text fw-bold">Western Sydney University | Oxford University</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-3"> <button type="button" class="btn btn-secondary btn-addexpert-cancel" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-expert-update">Update</button> </div>
            </div>
        </div>
    </div>
</div>
    <!--======================================= Expire Research Modal end here  =================================-->
    <!--======================================= Upcoming Training Modal Start here  =================================-->
    <div class="modal fade" id="upcomingSlider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog add-expert-modal">
            <div class="modal-content add-expert-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Training</h1> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="add-expert-modal-area"> <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="add-expert-single-item position-relative">
                            <div class="right-sidebar">
                                <div class="right-database">
                                    <div class="database-block">
                                        <div class="database-contant">
                                            <div class="database-img"> <img src="{{ asset('assets/frontend/img/find-training.png') }}"> </div>
                                            <div class="database-text">
                                                <h4> <a href="#">Professor Michael Kassiou</a> </h4> <span>Agricultural Engineering Expert</span> <span>University of Sydney</span> <span>Australia</span>
                                                <div class="review rating-area consultant-reviw modal-consultant-review">
                                                    <ul class="all-project-rating">
                                                    <li> <strong>$200</strong> / hr </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        </ul>
                                                    </div>
                                                <div class="projects-slider">
                                                    <div id="carouselExampleIndicators" class="carousel slide">
                                                        <div class="carousel-indicators"> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                                                <h4 class="light-weight">
                                                                    <p> <img src="{{ asset('assets/frontend/img/interview-icon.png') }}" alt=""> </p>
                                                                    <p> keynote speaker</p>
                                                                </h4>
                                                            </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                                <h4>
                                                                    <p>Educational Research</p>
                                                                </h4>
                                                            </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                                <h4>
                                                                    <p>Educational Research</p>
                                                                </h4>
                                                            </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                                <h4>
                                                                    <p>Educational</p>
                                                                </h4>
                                                            </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                                                                <h4 class="more-read">
                                                                    <p>+12 More</p>
                                                                </h4>
                                                            </button> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-job add-expert-post position-absolute"> <button class="btn btn-postjob d-flex justify-content-center  align-items-center"> <span class="material-symbols-outlined">add</span> <span>Add expert </span> </button> </div>
                        </div>
                        <div class="add-expert-single-item position-relative">
                            <div class="right-sidebar">
                                <div class="right-database">
                                    <div class="database-block">
                                        <div class="database-contant">
                                            <div class="database-img"> <img src="{{ asset('assets/frontend/img/find-training.png') }}"> </div>
                                            <div class="database-text">
                                                <h4> <a href="#">Professor Michael Kassiou</a> </h4> <span>Agricultural Engineering Expert</span> <span>University of Sydney</span> <span>Australia</span>
                                                <div class="review rating-area consultant-reviw modal-consultant-review">
                                                    <ul class="all-project-rating">
                                                    <li> <strong>$200</strong> / hr </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        </ul>
                                                    </div>
                                                <div class="projects-slider">
                                                    <div id="carouselExampleIndicators" class="carousel slide">
                                                        <div class="carousel-indicators"> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                                                <h4 class="light-weight">
                                                                    <p> <img src="{{ asset('assets/frontend/img/interview-icon.png') }}" alt=""> </p>
                                                                    <p> keynote speaker</p>
                                                                </h4>
                                                            </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                                <h4>
                                                                    <p>Educational Research</p>
                                                                </h4>
                                                            </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                                <h4>
                                                                    <p>Educational Research</p>
                                                                </h4>
                                                            </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                                <h4>
                                                                    <p>Educational</p>
                                                                </h4>
                                                            </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                                                                <h4 class="more-read">
                                                                    <p>+12 More</p>
                                                                </h4>
                                                            </button> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-job add-expert-post position-absolute"> <button class="btn btn-postjob d-flex justify-content-center  align-items-center" data-bs-toggle="modal" data-bs-target="#upcomingSliderEdit"> <span class="material-symbols-outlined">add</span> <span>Add expert </span> </button> </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="upcomingSliderEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog add-expert-modal">
            <div class="modal-content add-expert-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Expert</h1> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="add-expert-modal-area"> <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="add-expert-single-item position-relative">
                            <div class="right-sidebar">
                                <div class="right-database">
                                    <div class="database-block">
                                        <div class="database-contant">
                                            <div class="database-img"> <img src="{{ asset('assets/frontend/img/find-training.png') }}"> </div>
                                            <div class="database-text">
                                                <h4> <a href="#">Professor Michael Kassiou</a> </h4> <span>Agricultural Engineering Expert</span> <span>University of Sydney</span> <span>Australia</span>
                                                <div class="review rating-area consultant-reviw modal-consultant-review">
                                                    <ul class="all-project-rating">
                                                    <li> <strong>$200</strong> / hr </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        </ul>
                                                    </div>
                                                <div class="projects-slider">
                                                    <div id="carouselExampleIndicators" class="carousel slide">
                                                        <div class="carousel-indicators"> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                                                <h4 class="light-weight">
                                                                    <p> <img src="{{ asset('assets/frontend/img/interview-icon.png') }}" alt=""> </p>
                                                                    <p> keynote speaker</p>
                                                                </h4>
                                                            </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                                <h4>
                                                                    <p>Educational Research</p>
                                                                </h4>
                                                            </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                                <h4>
                                                                    <p>Educational Research</p>
                                                                </h4>
                                                            </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 5">
                                                                <h4>
                                                                    <p>Educational</p>
                                                                </h4>
                                                            </button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 6">
                                                                <h4 class="more-read">
                                                                    <p>+12 More</p>
                                                                </h4>
                                                            </button> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-job add-expert-post position-absolute"> <button class="btn btn-postjob d-flex justify-content-center  align-items-center"> <span class="material-symbols-outlined">add</span> <span>Add expert </span> </button> </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Update</button> </div>
            </div>
        </div>
    </div>
    <!--======================================= Upcoming Training Modal end here  =================================-->
    <!--======================================= Search academic Modal start here =================================-->
    <div class="modal fade" id="searchacademicModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered add-step-modal">
            <div class="modal-content ">
                <div class="modal-header border-0"> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div>
                <div class="modal-body add-step-content">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Step</h1>
                    <form>
                        <div class="upload-file"> <label class="btn btn-default btn-file d-flex justify-content-between basic-file-upload"> <span class="file-icon"> Icon </span> <span><input type="file" style="display: none;" required></span> <span class="blog-upload"> Upload</span> </label> </div>
                        <div class="my-2"> <input type="text" class="form-control academic-title" id="recipient-name" placeholder="title"> </div>
                        <div class="mb-3"> <textarea class="form-control academic-text" id="message-text"> Description </textarea> </div>
                    </form>
                </div>
                <div class="modal-footer border-0 add-step-footer"> <button type="button" class="btn btn-primary btn-search-academy">Add</button> </div>
            </div>
        </div>
    </div>
    <!--======================================= Search academic Modal End here =================================-->
    <!--======================================= Search academic Modal start here =================================-->
    <div class="modal fade" id="searchacademicWhatModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered add-step-modal">
            <div class="modal-content ">
                <div class="modal-header border-0"> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div>
                <div class="modal-body add-step-content">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add details</h1>
                    <form>
                        <div class="my-2"> <input type="text" class="form-control academic-title" id="recipient-name" placeholder="title"> </div>
                        <div class="mb-3"> <textarea class="form-control academic-text" id="message-text"> Description </textarea> </div>
                    </form>
                </div>
                <div class="modal-footer border-0 add-step-footer"> <button type="button" class="btn btn-primary btn-search-academy">Add</button> </div>
            </div>
        </div>
    </div>
    <!--======================================= Search academic Modal End here =================================-->
    <!--======================================= Add this category start Here =================================-->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog add-expert-modal-category ">
            <div class="modal-content  add-expert-startapp">
                <div class="modal-header border-0"> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div>
                <div class="modal-body pt-0 m-top-title">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Fields</h1>
                    <div class="add-expert-modal-area">
                        <div class="admin-text-search position-relative"> <span class="img-admin-search position-absolute"><img src="{{ asset('assets/frontend/img/admin-search.png') }}"> </span> <select class="form-select top-input-control" aria-label="Default select example">
                                <option selected>Search expert by na...</option>
                                <option value="1">Professor Miles Esther</option>
                                <option value="2"> enny Wilson</option>
                                <option value="3">Leslie Alexander</option>
                                <option value="4">Leslie Alexander</option>
                            </select> </div>
                        <div class="col field-search">
                            <div class="experts-block">
                                <div class="experts-img position-relative"> <a href="#"> <img src="{{ asset('assets/frontend/img/experts3.jpg') }}"> </a> </div>
                                <div class="experts-text admin-exp-text">
                                    <h3>Business </h3>
                                    <p>I am ready to serve you anything course related academics help. Don't hesitate me to contact.</p>
                                </div>
                            </div>
                        </div>
                        <div class="post-job add-expert-post-category"> <button class="btn btn-postjob d-flex justify-content-center  align-items-center" data-bs-toggle="modal" data-bs-target="#addthisCategory"> <span class="material-symbols-outlined">add</span> <span>Add this category</span> </button> </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-secondary btn-addexpert-cancel" data-bs-dismiss="modal">Cancel</button> </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addthisCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog add-expert-modal-category ">
            <div class="modal-content  add-expert-startapp">
                <div class="modal-header border-0"> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div>
                <div class="modal-body pt-0 m-top-title">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Fields</h1>
                    <div class="add-expert-modal-area">
                        <div class="admin-text-search position-relative"> <span class="img-admin-search position-absolute"><img src="{{ asset('assets/frontend/img/admin-search.png') }}"> </span> <select class="form-select top-input-control" aria-label="Default select example">
                                <option selected>Search expert by na...</option>
                                <option value="1">Professor Miles Esther</option>
                                <option value="2"> enny Wilson</option>
                                <option value="3">Leslie Alexander</option>
                                <option value="4">Leslie Alexander</option>
                            </select> </div>
                        <div class="col field-search">
                            <div class="experts-block">
                                <div class="experts-img position-relative"> <a href="#"> <img src="{{ asset('assets/frontend/img/experts3.jpg') }}"> </a> </div>
                                <div class="experts-text admin-exp-text">
                                    <h3>Business </h3>
                                    <p>I am ready to serve you anything course related academics help. Don't hesitate me to contact.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-secondary btn-addexpert-cancel" data-bs-dismiss="modal">Cancel</button> <button type="button" class="btn btn-primary btn-expert-update">Update</button> </div>
            </div>
        </div>
    </div>
    <!--======================================= Browse Expert Modal Start Here =================================-->
    <div class="modal fade" id="addCategoryExpireModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog add-expert-modal-category ">
            <div class="modal-content add-expert-startapp">
                <div class="modal-header border-0"> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div>
                <div class="modal-body pt-0 m-top-title">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Category</h1>
                    <div class="add-expert-modal-area">
                        <div class="admin-text-search position-relative"> <span class="img-admin-search position-absolute"><img src="{{ asset('assets/frontend/img/admin-search.png') }}"> </span> <select class="form-select top-input-control" aria-label="Default select example">
                                <option selected>Search by Category</option>
                                <option value="1">Professor Miles Esther</option>
                                <option value="2"> enny Wilson</option>
                                <option value="3">Leslie Alexander</option>
                                <option value="4">Leslie Alexander</option>
                            </select> </div>
                        <div class="category-expire-item">
                            <div class="col">
                                <div class="categories-block">
                                    <div class="categories-img position-relative"> <a href="#"> <img src="{{ asset('assets/frontend/img/categories3.jpg') }}"> </a> </div>
                                    <div class="categories-text b-expert-text">
                                        <h3>Program Designers </h3>
                                        <div class="categories-review">
                                        <div class="review rating-area consultant-reviw modal-consultant-review">
                                                    <ul class="all-project-rating">
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        </ul>
                                                    </div>
                                            <div class="review-text">45 Review</div>
                                        </div>
                                    </div>
                                    <div class="categories-available d-flex align-items-start position-relative">
                                        <div class="available-img d-flex justify-content-start"> <img class=" position-absolute exp-category" src="{{ asset('assets/frontend/img/available-img1.png') }}"> <img class=" position-absolute exp-categorym" src="{{ asset('assets/frontend/img/available-img2.png') }}"> <img class=" position-absolute exp-categoryl" src="{{ asset('assets/frontend/img/available-img3.png') }}"> </div>
                                        <div class="available-text">+ 120 Available</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-job add-expert-post-category"> <button class="btn btn-postjob d-flex justify-content-center  align-items-center" data-bs-toggle="modal" data-bs-target="#addCategoryExpireModalAddition"> <span class="material-symbols-outlined">add</span> <span>Add this category</span> </button> </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-secondary btn-addexpert-cancel" data-bs-dismiss="modal">Cancel</button> </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addCategoryExpireModalAddition" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog add-expert-modal-category ">
            <div class="modal-content add-expert-startapp">
                <div class="modal-header border-0"> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div>
                <div class="modal-body pt-0 m-top-title">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Category</h1>
                    <div class="add-expert-modal-area">
                        <div class="admin-text-search position-relative"> <span class="img-admin-search position-absolute"><img src="{{ asset('assets/frontend/img/admin-search.png') }}"> </span> <select class="form-select top-input-control" aria-label="Default select example">
                                <option selected>Search by Category</option>
                                <option value="1">Professor Miles Esther</option>
                                <option value="2"> enny Wilson</option>
                                <option value="3">Leslie Alexander</option>
                                <option value="4">Leslie Alexander</option>
                            </select> </div>
                        <div class="category-expire-item">
                            <div class="col">
                                <div class="categories-block">
                                    <div class="categories-img position-relative"> <a href="#"> <img src="{{ asset('assets/frontend/img/categories3.jpg') }}"> </a> </div>
                                    <div class="categories-text b-expert-text">
                                        <h3>Program Designers </h3>
                                        <div class="categories-review">
                                        <div class="review rating-area consultant-reviw modal-consultant-review">
                                                    <ul class="all-project-rating">
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                                        </svg>
                                                        </a>
                                                        </li>
                                                        </ul>
                                                    </div>
                                            <div class="review-text">45 Review</div>
                                        </div>
                                    </div>
                                    <div class="categories-available d-flex align-items-start position-relative">
                                        <div class="available-img d-flex justify-content-start"> <img class=" position-absolute exp-category" src="{{ asset('assets/frontend/img/available-img1.png') }}"> <img class=" position-absolute exp-categorym" src="{{ asset('assets/frontend/img/available-img2.png') }}"> <img class=" position-absolute exp-categoryl" src="{{ asset('assets/frontend/img/available-img3.png') }}"> </div>
                                        <div class="available-text">+ 120 Available</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-secondary btn-addexpert-cancel" data-bs-dismiss="modal">Cancel</button> <button type="button" class="btn btn-primary btn-expert-update">Update</button> </div>
            </div>
        </div>
    </div>
    <!--======================================= Add this category End Here =================================-->
    @endsection