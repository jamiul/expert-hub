@extends('frontend.layouts.front-client-dashboard-layout')

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="title-page-wrapper">
                <div class="title-page-header border-bottom">
                    <div class="d-flex justify-content-between align-items-center gap-3">
                        <div><h1 class="h5 m-0">All Project Posts</h1></div>
                        <div>
                            <a href="" class="btn btn-primary btn-md">Post a Job</a>
                        </div>
                    </div>
                    <div class="seller-admin-project-filter mt-20">
                        <x-form.flatpicker class="vertical-label input-field-md" label="Sort By" name="datepicker"/>
                        <x-form.choice-static class="input-field-md" wire:model="titles">
                            <option value="Mr">Ascending</option>
                            <option value="Mrs">Descending</option>
                        </x-form.choice-static>
                        <div class="input-group">
                            <input type="text" class="input-field-control input-field-control-md"
                                   placeholder="Search by contract, client, or company">
                            <button class="btn btn-primary">
                                <x-icon.search/>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="title-page-body">
                    <div class="table-responsive">
                        <table class="table text-sm table-extra-padding seller-project-table">
                            <tr class="align-middle">
                                <td>
                                    <p class="mb-1 fw-medium">LMS Expert required for Business Administration</p>
                                    <p class="mb-1">Posted - Oct 10 2023</p>
                                    <a class="btn btn-outline-primary" href="">Edit Draft</a>
                                </td>
                                <td>
                                    <p class="mb-1">Draft</p>
                                    <p class="mb-1 fw-medium">Hourly</p>
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="icon-btn border" data-bs-toggle="dropdown" aria-expanded="false">
                                            <x-icon.three-dots/>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" data-bs-toggle="modal"
                                                   data-bs-target="#editpostingcustomize" href="#">Edit Posting</a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item" data-bs-toggle="modal"
                                                   data-bs-target="#removeposting" href="#">Remove Posting</a>
                                            </li>
                                        </ul>
                                    </div>

                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    <p class="mb-1 fw-medium">LMS Expert required for Business Administration</p>
                                    <p class="mb-1">Posted - Oct 10 2023</p>
                                    <a class="btn btn-outline-primary" href="">View Proposal</a>
                                </td>
                                <td>
                                    <p class="mb-1">Public</p>
                                    <p class="mb-1 fw-medium">Fixed</p>
                                </td>
                                <td>
                                    <p class="mb-1">Proposal</p>
                                    <p class="mb-1 fw-medium">56 (48 new)</p>
                                </td>
                                <td>
                                    <p class="mb-1">Message</p>
                                    <p class="mb-1 fw-medium">7</p>
                                </td>
                                <td>
                                    <p class="mb-1">Hired</p>
                                    <p class="mb-1 fw-medium">1</p>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="icon-btn border" data-bs-toggle="dropdown" aria-expanded="false">
                                            <x-icon.three-dots/>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item"  href="/figma/project/client-job-post-view">View Project</a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item" data-bs-toggle="modal"
                                                   data-bs-target="#editpostingcustomize" href="#">Edit Posting</a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item" data-bs-toggle="modal"
                                                   data-bs-target="#removeposting" href="#">Remove Posting</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    <p class="mb-1 fw-medium">LMS Expert required for Business Administration</p>
                                    <p class="mb-1">Posted - Oct 10 2023</p>
                                    <a class="btn btn-outline-primary" href="">Reuse posting</a>
                                </td>
                                <td>
                                    <p class="mb-1">Public</p>
                                    <p class="mb-1 fw-medium">Fixed</p>
                                </td>
                                <td>
                                    <p class="mb-1">Proposal</p>
                                    <p class="mb-1 fw-medium">56 (48 new)</p>
                                </td>
                                <td>
                                    <p class="mb-1">Message</p>
                                    <p class="mb-1 fw-medium">7</p>
                                </td>
                                <td>
                                    <p class="mb-1">Hired</p>
                                    <p class="mb-1 fw-medium">1</p>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="icon-btn border" data-bs-toggle="dropdown" aria-expanded="false">
                                            <x-icon.three-dots/>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item"  href="/figma/project/client-job-post-view">View Project</a>
                                            </li>

                                                <li>
                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                       data-bs-target="#editpostingcustomize" href="#">Edit Posting</a>
                                                </li>

                                                <li>
                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                       data-bs-target="#removeposting" href="#">Remove Posting</a>
                                                </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        </table>
                    </div>

                    <div class="text-center py-40">
                        Pagination here
                    </div>
                </div>
            </div>

        </div>
    </section>

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
                                        <div
                                            class="heath-unit-title d-flex flex-row flex-wrap align-content-center">
                                            <img class="health-img"
                                                 src="{{ asset('assets/frontend/img/toppayment.png') }}"
                                                 alt="client health">
                                            <h4>Developing curriculum for Postgraduate public health unit</h4>
                                        </div>
                                        <div class="globe-area  d-flex flex-row align-content-center">
                                            <p class="d-flex flex-row align-items-center align-content-center"><img
                                                    src="{{ asset('assets/frontend/img/time.png') }}"
                                                    alt="client health"> <span>2 weeks ago</span></p>
                                            <p class="d-flex flex-row align-content-center  align-items-center"><img
                                                    src="{{ asset('assets/frontend/img/globe.png') }}"
                                                    alt="client health"><span> Curriculum development</span></p>
                                        </div>
                                    </div>
                                    <div class="health-unit-bottom-area">
                                        <div class="helth-text-area">
                                            <p>Seeking an experienced Curriculum Developer to create a cutting-edge
                                                curriculum for our postgraduate public health unit. You will
                                                collaborate with our team to design a comprehensive curriculum that
                                                aligns with industry trends and academic standards. Your role
                                                involves conducting research, developing course materials, and
                                                crafting assessments that foster critical thinking and practical
                                                skills. The ideal candidate will have a strong background in public
                                                health education, and curriculum design. and a passion for advanced
                                                higher education. join us in shaping the future of public health
                                                education and making a lasting impact on students' careers.</p>
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
                                                    <img src=" {{ asset('assets/frontend/img/attachment1.png') }} "
                                                         alt="attachment">
                                                    <h6>File name.jpg</h6>
                                                    <p>1.3 MB</p>
                                                </div>
                                                <div class="single-name-attachment">
                                                    <img src=" {{ asset('assets/frontend/img/attachment2.png') }} "
                                                         alt="attachment">
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
                                    <div class="close-btn d-flex justify-content-end">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="attament-fixed">
                                        <h4><span>Fixed:</span>$200.00</h4>
                                    </div>

                                    <div class="about-free-all d-flex flex-column">
                                        <div class="single-all">
                                            <h5>About the client</h5>
                                        </div>

                                        <div
                                            class="single-all d-flex flex-row align-items-center  justify-content-start">
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
                                            <button><span> <img
                                                        src=" {{ asset('assets/frontend/img/message-img.png') }} "
                                                        alt="message"></span> Chat with Client
                                            </button>
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


    <div class="modal fade" id="editpostingcustomize" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container  p-0">
                        <div class="row m-border-bottom">
                            <div class="col-md-8  p-0">
                                <div class="health-unit-area d-flex flex-column ">

                                    <div
                                        class="health-unit-top-eidt health-unit-top-area d-flex flex-row justify-content-between ">
                                        <div class="edit-title d-flex flex-row justify-content-between">
                                            <h5>LMS Expert required for Business Administration</h5>
                                            <a href=""> <img
                                                    src="{{ asset('assets/frontend/img/lastday/edit-modal.png') }}"
                                                    alt=""> </a>
                                        </div>
                                        <div class="edit-active"><span>Active</span></div>
                                    </div>

                                    <div class="health-unit-bottom-area">
                                        <div
                                            class="helth-text-area d-flex flex-column health-text-area-border position-relative ">
                                            <h4 class=" position-absolute">Project Description</h4>
                                            <p>Seeking an experienced Curriculum Developer to create a cutting-edge
                                                curriculum for our postgraduate public health unit. You will
                                                collaborate with our team to design a comprehensive curriculum that
                                                aligns with industry trends and academic standards. Your role
                                                involves conducting research, developing course materials, and
                                                crafting assessments that
                                                <span class="text-count position-absolute">0/200</span>
                                            </p>
                                        </div>
                                        <div class="health-tab-area">
                                            <h5>Required Skills</h5>
                                            <div class="skill-all-tag-edit d-flex flex-column">
                                                <div class="health-tab-edit d-flex flex-row  flex-wrap ">
                                                        <span>Architecture 1   <a href="" class=" close-icon"><img
                                                                    src=" {{ asset('assets/frontend/img/lastday/close-icon.png') }} "
                                                                    alt="attachment"></a>  </span>

                                                    <span>Architecture 2 <a href="" span class=" close-icon"><img
                                                                src=" {{ asset('assets/frontend/img/lastday/close-icon.png') }} "
                                                                alt="attachment"></a>  </span>

                                                    <span>LMS 2<a href="" class=" close-icon"><img
                                                                src=" {{ asset('assets/frontend/img/lastday/close-icon.png') }} "
                                                                alt="attachment"></a> </span>
                                                </div>
                                                <p>Type the skills & hit enter</p>
                                            </div>

                                            <p class="suggest-text"><span
                                                    class="suggest-skill">Suggestion skills:</span> Curriculum
                                                Editor, E-Learning Developer, Curriculum Writer, Curriculum Design,
                                                Research and Analysis, skill development</p>

                                        </div>

                                        <div class="attachment-area d-flex flex-column">
                                            <h5>Attachments</h5>
                                            <div class="attachment-name  d-flex flex-row">
                                                <div class="single-name-attachment d-flex flex-column">
                                                    <img src=" {{ asset('assets/frontend/img/attachment1.png') }} "
                                                         alt="attachment">
                                                    <h6>File name.jpg</h6>
                                                    <p>1.3 MB</p>
                                                </div>
                                                <div class="single-name-attachment">
                                                    <img src=" {{ asset('assets/frontend/img/attachment2.png') }} "
                                                         alt="attachment">
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
                                    <div class="close-btn d-flex justify-content-end">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="attament-fixed ">
                                        <h4 class="d-flex flex-row"><span>Hourly:</span> <span
                                                class="currency-edit"><p class="space-rate">$200.00</p> <a href="#"
                                                                                                           class="material-edit"> <img
                                                        src="{{ asset('assets/frontend/img/lastday/edit-modal.png') }}"
                                                        alt=""> </a></span></h4>
                                    </div>

                                    <div class="about-free-all d-flex flex-column">
                                        <div class="single-all">
                                            <h5>About the client</h5>
                                        </div>

                                        <div
                                            class="single-all d-flex flex-row align-items-center  justify-content-start">
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
                                            <button><span> <img
                                                        src=" {{ asset('assets/frontend/img/message-img.png') }} "
                                                        alt="message"></span> Chat with Client
                                            </button>
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

                                    <div
                                        class="health-unit-top-eidt health-unit-top-area d-flex flex-row justify-content-between ">
                                        <div class="edit-title d-flex flex-row justify-content-between">
                                            <h5>|Academic content writer</h5>
                                            <a href=""> <img
                                                    src="{{ asset('assets/frontend/img/lastday/edit-modal.png') }}"
                                                    alt=""> </a>
                                        </div>
                                        <div class="edit-active"><span>Active</span></div>
                                    </div>

                                    <div class="health-unit-bottom-area">
                                        <div
                                            class="helth-text-area d-flex flex-column health-text-area-border position-relative ">
                                            <h4 class=" position-absolute">Project Description</h4>
                                            <p>Seeking an experienced Curriculum Developer to create a cutting-edge
                                                curriculum for our postgraduate public health unit. You will
                                                collaborate with our team to design a comprehensive curriculum that
                                                aligns with industry trends and academic standards. Your role
                                                involves conducting research, developing course materials, and
                                                crafting assessments that
                                                <span class="text-count position-absolute">0/200</span>
                                            </p>
                                        </div>
                                        <div class="health-tab-area">
                                            <h5>Required Skills</h5>
                                            <div class="skill-all-tag-edit d-flex flex-column">
                                                <div class="health-tab-edit d-flex flex-row  flex-wrap ">
                                                        <span>Architecture 1   <a href="" class=" close-icon"><img
                                                                    src=" {{ asset('assets/frontend/img/lastday/close-icon.png') }} "
                                                                    alt="attachment"></a>  </span>

                                                    <span>Architecture 2 <a href="" span class=" close-icon"><img
                                                                src=" {{ asset('assets/frontend/img/lastday/close-icon.png') }} "
                                                                alt="attachment"></a>  </span>

                                                    <span>LMS 2<a href="" class=" close-icon"><img
                                                                src=" {{ asset('assets/frontend/img/lastday/close-icon.png') }} "
                                                                alt="attachment"></a> </span>
                                                </div>
                                                <p>|Ar</p>
                                            </div>

                                            <p class="suggest-text"><span
                                                    class="suggest-skill">Suggestion skills:</span> Curriculum
                                                Editor, E-Learning Developer, Curriculum Writer, Curriculum Design,
                                                Research and Analysis, skill development</p>

                                        </div>

                                        <div class="attachment-area d-flex flex-column">
                                            <h5>Attachments</h5>
                                            <div class="attachment-name  d-flex flex-row">
                                                <div class="single-name-attachment d-flex flex-column ">

                                                    <div class="overlay-edit position-relative">
                                                        <img
                                                            src=" {{ asset('assets/frontend/img/attachment1.png') }} "
                                                            alt="attachment">
                                                        <div class="overlay">
                                                            <div class="overlay-content">
                                                                <a><img src="{{ asset('assets/frontend/img/lastday/edit-overlay.png') }}"
                                                                        alt=""></a>
                                                                <a><img src="{{ asset('assets/frontend/img/lastday/delete-overlay.png') }}"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h6>File name.jpg</h6>
                                                    <p>1.3 MB</p>
                                                </div>

                                                <div class="single-name-attachment d-flex flex-column ">
                                                    <div class="overlay-edit position-relative">
                                                        <img
                                                            src=" {{ asset('assets/frontend/img/attachment2.png') }} "
                                                            alt="attachment">
                                                        <div class="overlay">
                                                            <div class="overlay-content">
                                                                <a><img src="{{ asset('assets/frontend/img/lastday/edit-overlay.png') }}"
                                                                        alt=""></a>
                                                                <a><img src="{{ asset('assets/frontend/img/lastday/delete-overlay.png') }}"
                                                                        alt=""></a>
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
                                    <div class="close-btn d-flex justify-content-end">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="attament-fixed ">
                                        <h4 class="d-flex flex-row"><span>Hourly:</span> <span
                                                class="currency-edit"><p class="space-rate">$200.00</p> <a href="#"
                                                                                                           class="material-edit"> <img
                                                        src="{{ asset('assets/frontend/img/lastday/edit-modal.png') }}"
                                                        alt=""> </a></span></h4>
                                    </div>

                                    <div class="about-free-all d-flex flex-column">
                                        <div class="single-all">
                                            <h5>About the client</h5>
                                        </div>

                                        <div
                                            class="single-all d-flex flex-row align-items-center  justify-content-start">
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
                                            <button><span> <img
                                                        src=" {{ asset('assets/frontend/img/message-img.png') }} "
                                                        alt="message"></span> Chat with Client
                                            </button>
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


    {{--    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>--}}
@endsection
