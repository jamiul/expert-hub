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
                    <p class=" position-absolute short-by-date"><span class="material-symbols-outlined">calendar_today</span></p>
                  <div class="calendar" id="calendar">
                    <div class="header">
                      <button id="prevBtn"><i class="fa fa-angle-left"></i></button>
                      <h2 id="monthYear">Month Year</h2>
                      <button id="nextBtn"><i class="fa fa-angle-right"></i></button>
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
              <i class="fa fa-search"></i>
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
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
              </a>
              <ul class="dropdown-menu dropdown-show">
                <li>
                  <a class="dropdown-item dropdown-heading" data-bs-toggle="modal" data-bs-target="#editposting" href="#">View Job Posting</a>
                </li>
                <li>
                  <a class="dropdown-item dropdown-heading " data-bs-toggle="modal" data-bs-target="#editpostingcustomize" href="#">Edit Posting</a>
                </li>
                <li>
                  <a class="dropdown-item dropdown-heading "data-bs-toggle="modal" data-bs-target="#removeposting" href="#">Remove Posting   </a>
                </li>
                <li>
                  <a class="dropdown-item dropdown-heading " href="#">Invite Experts</a>
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
          <button class="btn-edit-draft">Edit Draft</button>
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
            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
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
            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
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
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
              </a>
              <ul class="dropdown-menu dropdown-show">
                <li>
                  <a class="dropdown-item dropdown-heading" href="#">Invite Experts</a>
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
          <button class="btn-edit-draft">Edit Draft</button>
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
            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
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
            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
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
            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
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
