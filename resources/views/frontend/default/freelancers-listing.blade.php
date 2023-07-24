<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{my_asset('/assets/frontend/default/css/home.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">




</head>

<body>
  @extends('frontend.default.layouts.app')

  @section('content')
  <section class="mt-5">
    <div class="container-main-scholarship">
      @if ($keyword != null)
      <div class="row">
        <div class="col-xl-8 offset-xl-2 text-center">
          <h1 class="h5 mt-3 mt-lg-0 mb-5 fw-400">{{ translate('Total') }} <span class="fw-600">{{ $total }}</span>
            {{ translate('freelancers found for') }} <span class="fw-600">{{ $keyword }}</span></h1>
        </div>
      </div>
      @endif
      <form id="freelancer-filter-form" action="" method="GET">
        <div class="row gutters-10">
          <!-- Sidebar -->
          <div class="col-xl-3 col-lg-4 mb-5">
            <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-lg z-1035">
              <div class=" rounded-0 border-0 collapse-sidebar c-scrollbar-light p-10px" style="background: #F2F7F2;">
                <div class=" border-0 pl-lg-0">
                  <h5 class="my-3 fs-21 fw-700">{{ translate('Consultant for hire') }}</h5>
                  <button class="btn btn-sm p-2 d-lg-none filter-sidebar-thumb" data-toggle="class-toggle"
                    data-target=".aiz-filter-sidebar" type="button">
                    <i class="las la-times la-2x"></i>
                  </button>
                </div>

                @foreach($categories as $category)
                <span id="category_{{$category->id}}"
                  class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                  {{$category ->name}} |<p class="m-0  d-inline fw-700" onclick="removeCategory({{$category->id}})">
                    X</p>
                </span>
                @endforeach
                <!-- search bar  -->
                <input type="hidden" name="type" value="freelancer">
                <form class="" method="GET">
                  <div class=" d-flex align-items-center w-100">
                    <button class="btn btn-sm btn-icon btn-soft-secondary d-lg-none flex-shrink-0 mr-2"
                      data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                      <i class="las la-filter"></i>
                    </button>
                    <div class="input-group rounded-2">
                      <input type="text" class="form-control rounded  "
                        placeholder="{{ translate('Search for consultants') }}" name="keyword" value="{{ $keyword }}">
                      <button class="input-group-prepend rounded" type="submit">
                        <span class="input-group-text text-white border-left-0 rounded-right" : style="">
                          <i class="las la-search"></i>
                        </span>
                      </button>
                    </div>
                  </div>
                </form>
                <!-- categories  -->

                <h6 class="text-left mb-3 mt-lg-5  fs-14 fw-700">
                  <span class=" pr-3">{{ translate('Categories') }}</span>
                </h6>
                <div class="  border-bottom ">
                  @foreach(\App\Models\ProjectCategory::all() as $category)

                  <label class=" aiz-checkbox w-100">
                    <input type="checkbox" name="category_id[]" value="{{$category->id}}" onchange="applyFilter()"
                      @if(in_array($category->id, $category_id)) checked @endif >
                    {{$category->name}}
                    <span class="aiz-square-check"></span>
                    <span class="float-right text-secondary fs-lg-16 fs-14"></span>
                  </label>
                  @endforeach
                </div>

                <!-- Skills -->
                <div class="card-body pl-lg-0">
                  <div class="">
                    <h6 class="text-left mb-3 fs-14 fw-700">
                      <span class="pr-3">{{ translate('Skills') }}</span>
                    </h6>
                    <div class="mb-5 border-bottom">
                      <select class="select2 form-control aiz-selectpicker rounded-1" name="skill_id"
                        onchange="applyFilter()" data-toggle="select2" data-live-search="true">
                        <option value="">{{ translate('Search skills') }}</option>
                        @foreach (\App\Models\Skill::all() as $key => $skill)
                        <option value="{{ $skill->id }}" @if (isset($skill_id) && $skill_id==$skill->id )
                          selected
                          @endif>{{ $skill->name }}</option>
                        @endforeach
                      </select>
                      <p class="pt-3">
                        <a class="text-dark" data-toggle="collapse" href="#collapseExample" role="button"
                          aria-expanded="false" aria-controls="collapseExample">
                          Browse skills
                        </a>


                      </p>
                      <div class="collapse" id="collapseExample">
                        <div class="">
                          <nav id="navbar-example2" class="navbar navbar-light bg-light">
                          </nav>

                          <a class="text-dark" data-toggle="collapse" href="#Education" role="button"
                            aria-expanded="false" aria-controls="Education"> <label class="fas fa-plus border-round">
                              Education
                              Course Accreditations</label>
                          </a>

                          <div class="scroll collapse" id="Education">
                            <div class="">
                              <div class=" ">
                                <h6><a href="" class="fs-14">
                                    Instructional Designer</a></h6>
                                <h6> <a href="" class=" fs-14 ">
                                    Curriculum Developer</a></h6>
                                <h6><a href="" class="fs-14 ">Subject Matter Expert</a></h6>
                                <h6> <a href="" class="fs-14">Accreditation Specialist</a></h6>
                                <h6><a href="" class="fs-14  ">Education Consultant</a></h6>
                                <h6><a href="" class="fs-14  ">
                                    Learning Designer</a></h6>
                                <h6> <a href="" class="fs-14 ">
                                    Assessment Coordinator</a></h6>
                                <h6> <a href="" class="fs-14">
                                    Quality Assurance Analyst</a></h6>
                                <h6><a href="" class="fs-14  ">Content Writer </a></h6>
                                <h6> <a href="" class="fs-14  ">Researcher </a></h6>
                                <h6><a href="" class="fs-14">
                                    Project Manager</a></h6>
                                <h6><a href="" class="fs-14 ">E-Learning Developer</a></h6>
                                <h6> <a href="" class="fs-14  "> Instructional Technologist</a>
                                </h6>
                                <h6> <a href="" class="fs-14">Educational Psychologist</a></h6>
                                <h6><a href="" class="fs-14 "> Assessment Specialist</a></h6>
                                <h6> <a href="" class="fs-14 ">Multimedia Specialist</a></h6>
                                <h6> <a href="" class="fs-14 ">Graphic Designer</a></h6>
                                <h6> <a href="" class="fs-14  ">Data Analyst</a></h6>
                                <h6> <a href="" class="fs-14 ">Evaluation and Assessment
                                    Coordinator</a>
                                </h6>
                                <h6> <a href="" class="fs-14">Online Learning Coordinator</a>
                                </h6>
                              </div>
                            </div>

                          </div>
                          <div>
                            <a class="text-dark" data-toggle="collapse" href="#Development" role="button"
                              aria-expanded="false" aria-controls="Development"><label class="fas fa-plus"> Course
                                Curriculum Development</label>
                            </a>
                            <div class="scroll collapse" id="Development">
                              <div class=" py-2">
                                <h6> <a href="" class="fs-14  ">Curriculum Developer</a></h6>
                                <h6><a href="" class="fs-14  ">Instructional Designer</a></h6>
                                <h6><a href="" class="fs-14  ">Subject Matter Expert (SME)</a></h6>
                                <h6><a href="" class="fs-14  ">Education Consultant</a></h6>
                                <h6> <a href="" class="fs-14  ">Content Developer</a></h6>
                                <h6> <a href="" class="fs-14  ">Learning Experience Designer</a></h6>
                                <h6><a href="" class="fs-14  ">Curriculum Coordinator</a></h6>
                                <h6> <a href="" class="fs-14  ">Curriculum Writer</a></h6>
                                <h6><a href="" class="fs-14  ">Instructional Technologist</a></h6>
                                <h6> <a href="" class="fs-14  ">Educational Specialist</a></h6>
                                <h6> <a href="" class="fs-14  ">E-Learning Developer</a></h6>
                                <h6><a href="" class="fs-14  ">Assessment Specialist</a></h6>
                                <h6> <a href="" class="fs-14  ">Learning Designer</a></h6>
                                <h6> <a href="" class="fs-14  ">Curriculum Project Manager</a></h6>
                                <h6> <a href="" class="fs-14  ">Curriculum Editor</a></h6>
                                <h6> <a href="" class="fs-14  ">Curriculum Consultant</a></h6>
                                <h6> <a href="" class="fs-14  ">Curriculum Coordinator</a></h6>
                                <h6><a href="" class="fs-14  ">Instructional Materials Developer</a></h6>
                                <h6> <a href="" class="fs-14  ">Curriculum Integration Specialist</a></h6>
                                <h6> <a href="" class="fs-14  ">Curriculum Assessment Analyst</a></h6>
                              </div>
                            </div>
                          </div>


                          <div>
                            <a class="text-dark" data-toggle="collapse" href="#Management" role="button"
                              aria-expanded="false" aria-controls="Management">
                              <label class="fas fa-plus"> Learning Management Systems</label>
                            </a>
                            <div class="scroll collapse" id="Management">
                              <div class=" py-2">
                                <h6> <a href="" class="fs-14  "> LMS Developer</a></h6>
                                <h6> <a href="" class="fs-14  ">Instructional Designer</a></h6>
                                <h6><a href="" class="fs-14  "> UX/UI Designer</a></h6>
                                <h6><a href="" class="fs-14  "> Front-end Developer</a></h6>
                                <h6><a href="" class="fs-14  "> Back-end Developer</a></h6>
                                <h6> <a href="" class="fs-14  "> Full-stack Developer</a></h6>
                                <h6><a href="" class="fs-14  "> Software Engineer</a></h6>
                                <h6> <a href="" class="fs-14  "> System Administrator</a></h6>
                                <h6><a href="" class="fs-14  "> Database Administrator</a></h6>
                                <h6><a href="" class="fs-14  "> Project Manager</a></h6>
                                <h6><a href="" class="fs-14  "> Quality Assurance Analyst</a></h6>
                                <h6><a href="" class="fs-14  "> Content Developer </a></h6>
                                <h6><a href="" class="fs-14  "> Graphic Designer</a></h6>
                                <h6> <a href="" class="fs-14  "> Mobile App Developer</a></h6>
                                <h6><a href="" class="fs-14  "> Integration Specialist</a></h6>
                                <h6> <a href="" class="fs-14  "> Technical Writer</a></h6>
                                <h6> <a href="" class="fs-14  "> User Support Specialist</a></h6>
                                <h6> <a href="" class="fs-14  "> Data Analyst</a></h6>
                                <h6><a href="" class="fs-14  "> Training Coordinator</a></h6>
                                <h6> <a href="" class="fs-14  "> LMS Administrator</a></h6>
                              </div>
                            </div>
                          </div>


                          <div>
                            <a class="text-dark" data-toggle="collapse" href="#Writing" role="button"
                              aria-expanded="false" aria-controls="Writing"> <label class="fas fa-plus"> Writing and
                                Editing</label>
                            </a>
                            <div class="scroll collapse" id="Writing">
                              <div class=" py-2 ">
                                <h6><a href="" class="fs-14  ">Academic Writer</a></h6>
                                <h6><a href="" class="fs-14  ">Content Writer</a></h6>
                                <h6><a href="" class="fs-14  ">Copywriter</a></h6>
                                <h6><a href="" class="fs-14  ">Editor</a></h6>
                                <h6> <a href="" class="fs-14  ">Proofreader</a></h6>
                                <h6> <a href="" class="fs-14  ">Researcher</a></h6>
                                <h6> <a href="" class="fs-14  ">Subject Matter Expert</a></h6>
                                <h6> <a href="" class="fs-14  ">Curriculum Developer</a></h6>
                                <h6><a href="" class="fs-14  ">Instructional Designer</a></h6>
                                <h6><a href="" class="fs-14  ">Copy Editor</a></h6>
                                <h6><a href="" class="fs-14  ">Publishing Assistant</a></h6>
                                <h6> <a href="" class="fs-14  ">Editorial Assistant</a></h6>
                                <h6><a href="" class="fs-14  ">Technical Writer</a></h6>
                                <h6> <a href="" class="fs-14  ">Grant Writer</a></h6>
                                <h6><a href="" class="fs-14  ">Manuscript Editor</a></h6>
                                <h6> <a href="" class="fs-14  ">Citation Specialist</a></h6>
                                <h6> <a href="" class="fs-14  ">Academic Policy Writer</a></h6>
                                <h6><a href="" class="fs-14  ">Legal Writer</a></h6>
                                <h6>
                                  <a href="" class="fs-14  ">Language Editor</a>
                                </h6>
                                <h6> <a href="" class="fs-14  ">Freelance Writer/Editor</a></h6>
                              </div>
                            </div>
                          </div>

                          <div>

                            <a class="text-dark" data-toggle="collapse" href="#Research" role="button"
                              aria-expanded="false" aria-controls="Research"> <label class="fas fa-plus"> Research and
                                Analysis</label> </a>
                            <div class="scroll collapse" id="Research">
                              <div class=" py-2">
                                <h6> <a href="" class="fs-14  ">Confirmatory Factor Analysis(CFA)</a></h6>
                                <h6> <a href="" class="fs-14  ">Cross-Lagged Panel Models</a></h6>
                                <h6><a href="" class="fs-14  ">Demographic Methods</a></h6>
                                <h6> <a href="" class="fs-14  ">Discourse analysis</a></h6>
                                <h6><a href="" class="fs-14  ">Dynamic Panel Data Modeling</a></h6>
                                <h6> <a href="" class="fs-14  ">Dynamic SEM (DSEM)</a></h6>
                                <h6><a href="" class="fs-14  ">Ecological Momentary Assessment(EMA)</a>
                                </h6>
                                <h6><a href="" class="fs-14  ">Empirical Dynamic Modeling(EDM)</a></h6>
                                <h6> <a href="" class="fs-14  ">Experience Sampling Methods(ESM)</a></h6>
                                <h6><a href="" class="fs-14  ">Intensive Longitudinal Data Analysis</a>
                                </h6>
                                <h6><a href="" class="fs-14  ">Longitudinal Analysis</a></h6>
                                <h6><a href="" class="fs-14  ">Longitudinal SEM</a></h6>
                                <h6> <a href="" class="fs-14  ">Measurement Invariance Testing</a></h6>
                                <h6> <a href="" class="fs-14  ">Multilevel Modeling(MLM)</a></h6>
                                <h6> <a href="" class="fs-14  ">Multilevel Structural Equation
                                    Modeling(MSEM)</a>
                                </h6>
                                <h6> <a href="" class="fs-14  ">Panel Data Modeling</a></h6>
                                <h6><a href="" class="fs-14  ">Path Analysis</a></h6>
                                <h6> <a href="" class="fs-14  ">Qualitative data analysis</a></h6>
                                <h6> <a href="" class="fs-14  ">Quantitative data analysis</a></h6>
                                <h6><a href="" class="fs-14  ">Structural Equation Modeling(SEM)</a></h6>
                              </div>
                            </div>
                          </div>
                          <div>

                            <a class="text-dark" data-toggle="collapse" href="#Transcription" role="button"
                              aria-expanded="false" aria-controls="Transcription"><label class="fas fa-plus">
                                Transcription and
                                Translation</label></a>
                            <div class="scroll collapse" id="Transcription">
                              <div class="py-2">
                                <h6><a href="" class="fs-14  ">Academic Transcriber</a></h6>
                                <h6><a href="" class="fs-14  ">Academic Translator</a></h6>
                                <h6><a href="" class="fs-14  ">Language Specialist</a></h6>
                                <h6> <a href="" class="fs-14  ">Transcriptionist</a></h6>
                                <h6><a href="" class="fs-14  ">Language Services Coordinator</a></h6>
                                <h6> <a href="" class="fs-14  ">Translation Project Manager</a></h6>
                                <h6> <a href="" class="fs-14  ">Language Quality Assurance Specialist</a>
                                </h6>
                                <h6> <a href="" class="fs-14  ">Linguistics Researcher</a></h6>
                                <h6> <a href="" class="fs-14  ">Bilingual Research Assistant</a></h6>
                                <h6> <a href="" class="fs-14  ">Language Analyst</a></h6>
                                <h6><a href="" class="fs-14  ">Transcription Editor</a></h6>
                                <h6><a href="" class="fs-14  ">Multilingual Content Writer</a></h6>
                                <h6> <a href="" class="fs-14  ">Academic Proofreader</a></h6>
                                <h6> <a href="" class="fs-14  ">Language Instructor</a></h6>
                                <h6> <a href="" class="fs-14  ">Language Technology Specialist</a></h6>
                                <h6> <a href="" class="fs-14  ">Interpreting Services Coordinator</a></h6>
                                <h6><a href="" class="fs-14  ">Localization Specialist</a></h6>
                                <h6><a href="" class="fs-14  ">Language Data Analyst</a></h6>
                                <h6><a href="" class="fs-14  ">Academic Language Consultant</a></h6>
                                <h6> <a href="" class="fs-14  ">Language Services Administrator</a></h6>
                              </div>
                            </div>
                          </div>
                          <a class="text-dark" data-toggle="collapse" href="#Scholarship" role="button"
                            aria-expanded="false" aria-controls="Scholarship"> <label class="fas fa-plus"> Scholarship
                              Applications</label>
                          </a>
                          <div class="scroll collapse" id="Scholarship">
                            <div class=" py-2">
                              <h6> <a href="" class="fs-14  ">Academic Consultant</a></h6>
                              <h6> <a href="" class="fs-14  ">Scholarship Application Advisor</a></h6>
                              <h6><a href="" class="fs-14  ">Research Grant Consultant</a></h6>
                              <h6> <a href="" class="fs-14  ">Scholarship Specialist</a></h6>
                              <h6><a href="" class="fs-14  ">Grant Proposal Writer</a></h6>
                              <h6> <a href="" class="fs-14  ">Research Funding Consultant</a></h6>
                              <h6> <a href="" class="fs-14  ">Scholarship Application Reviewer</a></h6>
                              <h6><a href="" class="fs-14  ">Research Project Manager</a></h6>
                              <h6><a href="" class="fs-14  ">Funding Strategy Consultant</a></h6>
                              <h6> <a href="" class="fs-14  ">Grant Development Coordinator</a></h6>
                              <h6><a href="" class="fs-14  ">Research Scholarship Coach</a></h6>
                              <h6> <a href="" class="fs-14  ">Scholarship Application Coordinator</a>
                              </h6>
                              <h6> <a href="" class="fs-14  ">Grant Writing Specialist</a></h6>
                              <h6><a href="" class="fs-14  ">Research Funding Analyst</a></h6>
                              <h6><a href="" class="fs-14  ">Scholarship Program Manager</a></h6>
                              <h6><a href="" class="fs-14  ">Research Grant Administrator</a></h6>
                              <h6><a href="" class="fs-14  ">Funding Opportunities Researcher</a></h6>
                              <h6> <a href="" class="fs-14  ">Scholarship Application Assessor</a></h6>
                              <h6><a href="" class="fs-14  ">Academic Writing Consultant</a></h6>
                              <h6><a href="" class="fs-14  ">Supervisors Communications Specialist</a>
                              </h6>
                            </div>
                          </div>
                          <div>
                            <a class="text-dark fs-14" data-toggle="collapse" href="#Tutoring" role="button"
                              aria-expanded="false" aria-controls="Tutoring"> <label class="fas fa-plus"> Mentoring
                                and Tutoring</label></a>

                            <div class="scroll collapse" id="Tutoring">
                              <div class=" py-2 fs-14">
                                <h6> <a href="" class="fs-14  ">Uni Maths Tutor</a></h6>
                                <h6><a href="" class="fs-14  ">Uni Statistics Tutor</a></h6>
                                <h6><a href="" class="fs-14  ">Uni Science Tutor</a></h6>
                                <h6> <a href="" class="fs-14  ">Uni English Language Tutor</a></h6>
                                <h6> <a href="" class="fs-14  ">Uni English Tutor</a></h6>
                                <h6><a href="" class="fs-14  ">Uni Biology Tutor</a></h6>
                                <h6> <a href="" class="fs-14  ">Uni Chemistry Tutor</a></h6>
                                <h6> <a href="" class="fs-14  ">Uni Physics Tutor</a></h6>
                                <h6> <a href="" class="fs-14  ">Uni Computer Science Tutor</a></h6>
                                <h6> <a href="" class="fs-14  ">Uni Business Tutor</a></h6>
                                <h6><a href="" class="fs-14  ">High School Maths Tutor</a></h6>
                                <h6><a href="" class="fs-14  ">High School Statistics Tutor</a>
                                </h6>
                                <h6><a href="" class="fs-14  ">High School Science Tutor</a></h6>
                                <h6><a href="" class="fs-14  ">High School English Tutor</a></h6>
                                <h6> <a href="" class="fs-14  ">High School Biology Tutor</a></h6>
                                <h6><a href="" class="fs-14  ">High School Chemistry Tutor</a></h6>
                                <h6><a href="" class="fs-14  ">High School Physics Tutor</a></h6>
                                <h6> <a href="" class="fs-14  ">Academic Coach</a></h6>
                                <h6> <a href="" class="fs-14  ">Career Coach</a></h6>
                                <h6><a href="" class="fs-14  ">Peer Academic Advisor</a></h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="text-dark hide-all-btn" role="button">
                        Hide All
                      </a>
                    </div>

                  </div>

                  <!-- countries  -->
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class="pr-3">{{ translate('Countries') }}</span>
                  </h6>

                  <div class=" mb-5 ">
                    <div class=" py-2 border-bottom ">
                      <select class=" select2 form-control aiz-selectpicker rounded-1" name="country_id"
                        onchange="applyFilter()" data-toggle="select2" data-live-search="true">
                        <option value="">{{ translate('Search countries') }}</option>
                        @foreach (\App\Models\Country::all() as $key => $country)
                        <option value="{{ $country->id }}" @if (isset($country_id) && $country_id==$country->id )
                          selected
                          @endif>{{ $country->name }}</option>
                        @endforeach
                      </select>

                    </div>
                  </div>

                  <!-- Hourly rates -->
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class="pr-3">{{ translate('Hourly Rate (USD)') }}</span>
                  </h6>
                  <div class="mb-5 border-bottom">
                    <div class="mb-2 mt-3" style="width: 245px;">
                      <select multiple class="select2 form-control aiz-selectpicker rounded-1" data-toggle="select2"
                        data-live-search="true">
                        <option selected>
                          {{ translate('Any hourly rate') }}
                        </option>
                        <option>
                          < $10/hour </option>
                        </option>
                        $10-20/hour </option>
                        <option>
                          $20-30/hour </option>
                        </option>
                        <option>
                          $30-40/hour </option>
                        <option>
                          > $40/hour </option>

                      </select>

                    </div>
                  </div>



                  <!-- Rating -->
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class=" pr-3">{{ translate('Rating') }}</span>
                  </h6>
                  <div class="d-flex border-bottom">
                    <div class="star-widget">
                      <input type="radio" name="rate" id="rate-5" value="5" @if ($rate=='5' ) checked @endif
                        onchange="applyFilter()">
                      <label for="rate-5" class="fas fa-star"></label>
                      <input type="radio" name="rate" id="rate-4" value="4" @if ($rate=='4' ) checked @endif
                        onchange="applyFilter()">
                      <label for="rate-4" class="fas fa-star"></label>
                      <input type="radio" name="rate" id="rate-3" value="3" @if ($rate=='3' ) checked @endif
                        onchange="applyFilter()">
                      <label for="rate-3" class="fas fa-star"></label>
                      <input type="radio" name="rate" id="rate-2" value="2" @if ($rate=='2' ) checked @endif
                        onchange="applyFilter()">
                      <label for="rate-2" class="fas fa-star"></label>
                      <input type="radio" name="rate" id="rate-1" value="1" @if ($rate=='1' ) checked @endif
                        onchange="applyFilter()">
                      <label for="rate-1" class="fas fa-star"></label>
                      @if($rate)
                      <input type="radio" name="rate" id="rate-0" value="" onchange="applyFilter()" @if ($rate=='' )
                        checked @endif">
                      <label for="rate-0" class="fas fa-minus" style=" color:red !important; cursor:pointer;"></label>
                      @endif
                    </div>
                  </div>
                </div>

              </div>
              <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
                data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
            </div>
          </div>

          <!-- Freelancer List -->
          <div class="col-xl-9 col-lg-7">
            <div class="card mb-lg-0 rounded border-gray-light" style="background: #F2F7F2;">

              <div class="card-body p-0">
                @foreach ($freelancers as $key => $freelancer)
                @if ($freelancer->user != null)
                <a href="{{ route('freelancer.details', $freelancer->user->user_name) }}"
                  class="d-block d-xl-flex  text-inherit all-scholarship-list px-3 py-4 border-bottom">
                  <span class="avatar flex-shrink-0 mr-4">
                    @if ($freelancer->user->photo != null)
                    <img src="{{ custom_asset($freelancer->user->photo) }}" alt="{{ $freelancer->user->name }}">
                    @else
                    <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}"
                      alt="{{ $freelancer->user->name }}">
                    @endif
                    @if(Cache::has('user-is-online-' . $freelancer->user->id))
                    <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                    @else
                    <span class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                    @endif
                  </span>
                  <div class="flex-grow-1 ">
                    <div class="d-flex">
                      <h5 class=" fs-18 fw-700 mb-1">{{ $freelancer->user->name }}</h5>

                      @if ($freelancer->user->address->country->photo ==null)
                      @php
                      $flag_url="/public/assets/frontend/default/img/avatar-place.png";
                      @endphp
                      @else

                      @php
                      $flag_url=$freelancer->user->address->country->photo;
                      @endphp
                      @endif
                      <span>

                        <img class=" mx-2 " src="{{url($flag_url)}}"
                          alt="{{ $freelancer->user->address->country->name }}" style="width:21px; height:14px; " />
                      </span>
                    </div>

                    @if ($freelancer->specialistAt != null)
                    <p class="fs-16 ">{{ $freelancer->specialistAt->name }}</p>
                    @endif

                    <div class="d-flex text-dark fs-14 mb-3">
                      <div class="mr-2">
                        <span class="bg-rating p-1 text-white px-1 mr-1 fs-10" style="background:#95DF00;">
                          {{ formatRating(getAverageRating($freelancer->user->id)) }}
                        </span>
                        <span class="rating rating-md rating-mr-1">
                          {{ renderStarRating(getAverageRating($freelancer->user->id)) }}
                        </span>
                        <span>(0 Jobs)</span>
                        <span class="mx-2">
                          {{ count($freelancer->user->reviews) }} {{ translate('Reviews') }}
                        </span>

                        <span>
                          {{ single_price($freelancer->hourly_rate) }} USD per hour
                        </span>

                      </div>

                    </div>
                    <div class="text-dark lh-1-8">
                      <p class="text-truncate-3 fs-14">{{ $freelancer->bio }}</p>
                    </div>
                    @if($freelancer->skills != null)
                    <div>
                      @foreach (json_decode($freelancer->skills) as $key => $skill_id)
                      @php
                      $skill = \App\Models\Skill::find($skill_id);
                      @endphp
                      @if ($skill != null)
                      <span
                        class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">{{ $skill->name }}</span>
                      @endif
                      @endforeach
                    </div>
                    @endif
                  </div>
                  <div class="flex-shrink-0 pt-4 pt-xl-0 pl-xl-5 flex-xl-column w-lg-80px" style="">

                    <div class="d-flex w-100 mx-0">
                      <p class="btn btn-primary btn-sm  w-100  fw-700">

                        <img class=" px-1  " src=" {{url('/public/assets/find-consultant/logo-1.png')}}" alt="Image"
                          style="width:36px; " />
                        {{ translate('Hire me') }}

                      </p>
                    </div>
                    <div class="d-flex w-100 mx-0">
                      <p class="btn btn-primary btn-sm  w-100  fw-700">

                        <img class=" px-1  " src=" {{url('/public/assets/find-consultant/zoom.png')}}" alt="Image"
                          style="width:28px; " />
                        {{ translate('Zoom me') }}

                      </p>
                    </div>
                  </div>
                </a>
                @endif
                @endforeach
              </div>
              @if (!is_array($freelancers))
              <div class="card-footer">
                <div class="aiz-pagination aiz-pagination-center flex-grow-1">
                  <ul class="pagination">
                    {{ $freelancers->links() }}
                  </ul>
                </div>
              </div>
              @endif
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>



  <!--  this script to handle the "Hide All" button click -->
  <script>
  document.addEventListener("DOMContentLoaded", function() {
    const hideAllBtn = document.querySelector(".hide-all-btn");
    const categoryLinks = document.querySelectorAll(".category-link");
    const collapseExample = document.querySelector("#collapseExample");

    // Add click event listener to "Hide All" button
    hideAllBtn.addEventListener("click", function() {
      // If the category container is already collapsed, don't do anything
      if (!collapseExample.classList.contains("show")) {
        return;
      }

      // Toggle the collapse state of each category
      categoryLinks.forEach(function(link) {
        const target = document.querySelector(link.getAttribute("href"));
        if (target.classList.contains("show")) {
          link.click(); // This will collapse the category
        }
      });
    });
  });
  </script>

  <script>
  function removeCategory(categoryId) {

    var categoryElement = document.getElementById('category_' + categoryId);
    if (categoryElement) {
      categoryElement.parentNode.removeChild(categoryElement);

      // Uncheck the corresponding checkbox
      var checkbox = document.querySelector('input[name="category_id[]"][value="' + categoryId + '"]');
      if (checkbox) {
        checkbox.checked = false;
      }
    }
    $('#freelancer-filter-form').submit();
  }
  </script>
  @endsection

  @section('script')
  <script type="text/javascript">
  function applyFilter() {
    $('#freelancer-filter-form').submit();
  }

  function rangefilter(arg) {
    $('input[name=min_price]').val(arg[0]);
    $('input[name=max_price]').val(arg[1]);
    applyFilter();
  };
  </script>
  @endsection
</body>

</html>