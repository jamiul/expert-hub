@extends('frontend.layouts.front-admin-dashboard-layout')

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <button type="button" class="edux-btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModalform" data-bs-whatever="@mdo"> <span
                            class="arrow-left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M11.25 12.75H5.5V11.25H11.25V5.5H12.75V11.25H18.5V12.75H12.75V18.5H11.25V12.75Z"
                                fill="white"></path>
                        </svg>
                        </span> <span class="btn-text">Post Scholarship</span>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">

                </div>
            </div>

        </div>
    </section>

    <!-- ===================== Scholarship post Modal start here ============================================= -->

    <div class="modal fade" id="exampleModalform" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h3 class="modal-title h5" id="exampleModalLabel">Post
                        Scholarship</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body px-0">
                    <form class="" action="">
                        
                        <x-form.input type="text" label="Scholarship Title" name="type" placeholder="Enter Title"
                                      value=""/>
                        <x-form.input type="url" label="Scholarship Website" name="type" placeholder="Enter URL"
                                      value=""/>
                        <x-form.select label="Location" name="title">
                            <option value="">Select Location</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Dr">Dr</option>
                            <option value="Prof">Prof</option>
                        </x-form.select>
                        <x-form.select label="University" name="title">
                            <option value="">Select University</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Dr">Dr</option>
                            <option value="Prof">Prof</option>
                        </x-form.select>
                        <x-form.input type="date" label="Deadline" name="type" placeholder="Pick Date"
                                      value=""/>
                        <x-form.check name="automatic">
                            Automatic Consideration
                        </x-form.check>
                        <x-form.select label="Study Area" name="title">
                            <option value="">Select Area</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Dr">Dr</option>
                            <option value="Prof">Prof</option>
                        </x-form.select>
                        <x-form.select label="Student Type" name="title">
                            <option value="">Select Type</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Dr">Dr</option>
                            <option value="Prof">Prof</option>
                        </x-form.select>
                        <x-form.select label="Study Level" name="title">
                            <option value="">Select Level</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Dr">Dr</option>
                            <option value="Prof">Prof</option>
                        </x-form.select>
                        <p class="input-field-label mb-2">Scholarship Type</p>
                        <div class="d-flex gap-4">
                            <x-form.check name="automatic">
                                University
                            </x-form.check>
                            <x-form.check name="automatic">
                                Govt
                            </x-form.check>
                            <x-form.check name="automatic">
                                Project
                            </x-form.check>
                        </div>

                    </form>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Create Scholarship</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModalformedit" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog edux-scholarship-modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 edux-scholarship-modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update
                        Scholarship</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body edux-scholarship-modal-body">
                    <div class="container">
                        <form class="row g-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label edux-label">Scholarship
                                    Title</label>
                                <input type="text" class="form-control edux-input-type"
                                       id="inputAddress"
                                       placeholder="Type scholarship name">
                            </div>
                            <div class="col-12 mt-4">
                                <label for="inputAddress2" class="form-label edux-label">Scholarship
                                    Url</label>
                                <input type="text" class="form-control edux-input-type"
                                       id="inputAddress2" placeholder="Add scholarship url">
                            </div>


                            <div class="col-md-6 mt-4">
                                <label for="inputEmail4" class="form-label edux-label">University</label>
                                <input type="text"
                                       class="form-control edux-input-type university-search"
                                       id="text" placeholder="Select university">
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="inputPassword4" class="form-label edux-label">Student
                                    Type</label>
                                <select id="inputState" class="form-select edux-input-type">
                                    <option selected>Select type</option>
                                    <option>Select type</option>
                                    <option>Select type</option>
                                    <option>Select type</option>
                                </select>
                            </div>


                            <div class="col-md-6 mt-4">
                                <label for="inputEmail4" class="form-label edux-label">Find
                                    Supervisor</label>
                                <input type="text" class="form-control edux-input-type"
                                       id="text"
                                       placeholder="Add university find supervisor url">
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="inputPassword4" class="form-label edux-label">Application
                                    Process</label>
                                <input type="text" class="form-control edux-input-type"
                                       id="text" placeholder="Add application process url">
                            </div>


                            <div class="col-md-6 mt-4">
                                <label for="inputEmail4" class="form-label edux-label">Scholarship
                                    Value</label>
                                <input type="number" class="form-control edux-input-type"
                                       id="text" placeholder="EX: $1000">
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="inputPassword4" class="form-label edux-label">Currency</label>
                                <select id="inputState" class="form-select edux-input-type">
                                    <option selected>Select currency</option>
                                    <option>Select currency</option>
                                    <option>Select currency</option>
                                    <option>Select currency</option>
                                </select>
                            </div>

                            <div class="col-12 mt-4">
                                <label for="inputAddress2" class="form-label edux-label">Study
                                    Level</label>
                                <select id="inputState" class="form-select edux-input-type">
                                    <option selected>Select options</option>
                                    <option>Select options</option>
                                    <option>Select options</option>
                                    <option>Select options</option>
                                </select>

                                <div class="edux-editable-content position-relative">
                                    <p><span>Bachelor's Degree</span> <span> <a
                                                href="#"><img
                                                    src="{{ asset('assets/frontend/img/space-delete.png') }}"
                                                    alt=""></a> </span></p>
                                    <p class="content-no-close"><span
                                            class="count-close-text">2</span> <span
                                            class="edux-count-close"> <a href="#"><img
                                                    src="{{ asset('assets/frontend/img/study-close.png') }}"
                                                    alt=""> </a> </span></p>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <label for="inputAddress2" class="form-label edux-label">Study
                                    Area</label>
                                <select id="inputState" class="form-select edux-input-type">
                                    <option selected>Select options</option>
                                    <option>Select options</option>
                                    <option>Select options</option>
                                    <option>Select options</option>
                                </select>
                            </div>


                            <div class="col-12 mt-4">
                                <p class="edux-fund-type">Fund Type</p>
                                <div class="row mt-2">
                                    <div class="col-md-3">
                                        <div class="form-check edux-form-check-scholarship">
                                            <input class="form-check-input" type="checkbox"
                                                   id="gridCheck">
                                            <label class="form-check-label edux-label"
                                                   for="gridCheck">
                                                University
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check edux-form-check-scholarship">
                                            <input class="form-check-input" type="checkbox"
                                                   id="gridCheck1">
                                            <label class="form-check-label edux-label"
                                                   for="gridCheck1">
                                                Govt
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check edux-form-check-scholarship">
                                            <input class="form-check-input" type="checkbox"
                                                   id="gridCheck2">
                                            <label class="form-check-label edux-label"
                                                   for="gridCheck2">
                                                Project
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="form-check edux-form-check-scholarship">
                                            <input class="form-check-input" type="checkbox"
                                                   id="gridCheck3">
                                            <label class="form-check-label edux-label"
                                                   for="gridCheck3">
                                                Automatic Consideration
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">

                                        <div class="select-date">
                                            <div class="date-item">
                                                <div class="study-level">
                                                    <div
                                                        class="calendar-box position-relative">
                                                        <input type="text"
                                                               class="edux-scholarship-datetype"
                                                               id="dateInput"
                                                               placeholder="Select deadline">
                                                        <div class="calendar" id="calendar">
                                                            <div class="header">
                                                                <button id="prevBtn">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="18"
                                                                        height="19"
                                                                        viewBox="0 0 18 19"
                                                                        fill="none">
                                                                        <path
                                                                            d="M11.25 14L6.75 9.5L11.25 5"
                                                                            stroke="#5C5C5C"
                                                                            stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"/>
                                                                    </svg>
                                                                </button>
                                                                <h2 id="monthYear">Month
                                                                    Year</h2>
                                                                <button id="nextBtn">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="18"
                                                                        height="19"
                                                                        viewBox="0 0 18 19"
                                                                        fill="none">
                                                                        <path
                                                                            d="M6.75 14L11.25 9.5L6.75 5"
                                                                            stroke="#5C5C5C"
                                                                            stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"/>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div class="days"
                                                                 id="daysContainer"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>


                </div>
                <div class="modal-footer edux-modal-footer">
                    <button type="button"
                            class="btn btn-secondary edux-btn-border-primary-cancel"
                            data-bs-dismiss="modal">Cancel
                    </button>
                    <button type="button" class="btn btn-primary edux-btn-primary-yes">
                        Update Scholarship
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ===================== Scholarship post Modal start here ============================================= -->

    <!-- ============================================== Modal End here =========================================-->


@endsection
