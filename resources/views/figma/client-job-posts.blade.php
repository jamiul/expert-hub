@extends('frontend.layouts.figma', ['header' => 'client'])

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="title-page-wrapper">
                <div class="title-page-header border-bottom">
                    <div class="d-flex justify-content-between align-items-center gap-3">
                        <div><h1 class="h5 m-0">All Project Posts</h1></div>
                        <div>
                            <a href="/figma/jobposts" class="btn btn-primary btn-md">Post a Job</a>
                        </div>
                    </div>
                    <div class="seller-admin-project-filter mt-20">
                        <x-form.flatpicker class="vertical-label input-field-md" label="Sort By" name="datepicker"/>
                         
                        <x-form.select class="input-field-md" wire:model="title">
                            <option value="Mr">Ascending</option>
                            <option value="Mrs">Descending</option>
                        </x-form.select>
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
                                                <a class="dropdown-item" href="/figma/project/client-job-post-view">View
                                                    Project</a>
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
                                                <a class="dropdown-item" href="/figma/project/client-job-post-view">View
                                                    Project</a>
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


    <div class="modal fade" id="editpostingcustomize" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="sidebar-layout right-sidebar-layout edit-client-job-post border-0">
                        <div class="page-sidebar">
                            <div class="sidebar-widget">
                                <x-form.input class="label-inline input-field-md" type="number" label="Hourly" wire:model="rate" placeholder="$200"/>
                            </div>

                            <div class="sidebar-widget">
                                <h4 class="widget-title">Job information</h4>
                                <div class="widget-content text-sm">
                                    <div class="d-flex gap-2 align-items-center py-1">
                                        <x-icon.graduation-cap fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">125</p>
                                            <p class="mb-0"> Bid</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 py-1">
                                        <x-icon.globe fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">15.45 </p>
                                            <p class="mb-0"> Average Bid</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h4 class="widget-title">About the client</h4>
                                <div class="widget-content text-sm">
                                    <div class="d-flex gap-2 align-items-center py-1">
                                        <x-icon.account-circle fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">Dr Miles Esther</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 py-1">
                                        <x-icon.graduation-cap fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">Institution</p>
                                            <p class="mb-0"> Sydney Islami business school</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 py-1">
                                        <x-icon.globe fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">Austria</p>
                                            <p class="mb-0"> Sydney 9:20 pm</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 py-1">
                                        <x-icon.briefcase fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">7 jobs posted</p>
                                            <p class="mb-0">100% hire rate, 4 open jobs</p>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="page-content">

                            <div class="edit-job-post-card">
                                <div class="project-details-title">
                                    <div class="form-input-group form-input-has-icon ">
                                        <input name="type" id="type" class="form-input-field" type="text" wire:model="type" placeholder="Type" value="Academic content writer">
                                       <span class="form-input-icon">
                                           <x-icon.edit/>
                                       </span>
                                    </div>
                                </div>
                                <x-form.textarea label="Project Description" wire:model="ProjectDescription"
                                                 placeholder="Project Description">Seeking an experienced Curriculum Developer to create a cutting-edge curriculum for our postgraduate public health unit. You will collaborate with our team to design a comprehensive curriculum that aligns with industry trends and academic standards. Your role involves conducting research, developing course materials, and crafting assessments that foster critical</x-form.textarea>

                                <div class="tag-input-textarea">
                                    <x-form.textarea label="Required Skills" wire:model="bio" placeholder=""/>
                                    <div class="tag-list">
                                        <span class="tag">Architecture 1 <x-icon.close-circle/> </span>
                                        <span class="tag">Architecture 2 <x-icon.close-circle/> </span>
                                        <span class="tag">LMS 2 <x-icon.close-circle/> </span>
                                    </div>
                                </div>
                                <p class="suggestion-skills text-sm">
                                    Suggestion skills:
                                    <strong>Curriculum Editor,</strong>
                                    <strong>E-Learning Developer,</strong>
                                    <strong>Curriculum Writer,</strong>
                                    <strong>Curriculum Design,</strong>
                                    <strong>Research and Analysis, </strong>
                                    <strong>Skill development </strong>
                                </p>

                                <p class="fw-medium mb-2">Attachments</p>
                                <div class="attachment-display-wrapper ">
                                    <div class="attachment-display-card attachment-edit-card">
                                        <div class="attachment-display-thumb">
                                            <img src="{{ asset('assets/frontend/img/attachment1.png') }}"/>
                                            <div class="attachment-edit-overly">
                                                <button class="icon-btn icon-btn-md"><x-icon.edit/></button>
                                                <button class="icon-btn icon-btn-md"><x-icon.delete  fill="#191D24"/></button>
                                            </div>
                                        </div>
                                        <div class="attachment-display-info">
                                            <h6 class="mb-1">File name.jpg</h6>
                                            <p class="m-0">1.3 MB</p>
                                        </div>
                                    </div>
                                    <div class="attachment-display-card attachment-edit-card">
                                        <div class="attachment-display-thumb">
                                            <img src="{{ asset('assets/frontend/img/attachment2.png') }}"/>
                                            <div class="attachment-edit-overly">
                                                <button class="icon-btn icon-btn-md"><x-icon.edit/></button>
                                                <button class="icon-btn icon-btn-md"><x-icon.delete fill="#191D24"/></button>
                                            </div>
                                        </div>
                                        <div class="attachment-display-info">
                                            <h6 class="mb-1">File name.jpg</h6>
                                            <p class="m-0">1.3 MB</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex gap-3 mt-20">
                                    <button style="width: 130px" class="btn btn-md btn-outline-primary">Cancel</button>
                                    <button style="width: 130px" class="btn btn-md btn-primary">Update</button>
                                </div>

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

                </div>
            </div>
        </div>
    </div>


    {{--    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>--}}
@endsection
