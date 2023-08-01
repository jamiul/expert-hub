@extends('frontend.default.layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

@section('content')
<section class="py-4 py-lg-3">
  <div class="container-main-projects-banner">
    <div class="mb-4" style="background:#FCEBE5">
      <div class="row rounded-0 px-2 mx-4">
        <div class="col-lg-6 col-sm-12 my-auto">
          <h3 class="text-black fw-700 fs-30  ">Projects List</h3>
          <p class="fw-400 text-black fs-15 mb-2">All the Lorem Ipsum generators on the Internet tend to repeat.</p>
          <div class="input-group mb-3 mt-5">
            <form action="" method="GET" class="w-100">
              <input type="text" class="form-control position-relative z-0"
                placeholder="{{ translate('Search Keyword') }}" value="{{ $keyword }}" name="keyword"
                aria-label="Search" aria-describedby="searchButton" style="height: 60px;">
              <div class="input-group-append position-absolute"
                style="position:absolute;top: 5px;right: 9px;padding: 3px 0;">
                <button class="btn btn-primary" type="submit" id="searchButton" data-toggle="class-toggle"
                  data-target=".aiz-filter-sidebar">
                  Search
                </button>
              </div>
            </form>
          </div>

          <!-- <div class="d-flex align-items-center">
                        <button class="btn btn-sm btn-icon btn-soft-secondary d-lg-none flex-shrink-0 mr-2" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                            <i class="las la-filter text-black-50">SS</i>
                        </button>
                        <input type="text" class="form-control form-control-sm rounded-1" placeholder="{{ translate('Search Keyword') }}" value="{{ $keyword }}" name="keyword">
                    </div> -->
        </div>
        <div class="col-lg-6 col-sm-12">
          <img src="{{my_asset('assets/frontend/default/img/servicesList/Designer_Flatline.png')}}" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="container-main-projects">
    @if($keyword != null)
    <div class="row">
      <div class="col-xl-8 offset-xl-2 text-center">
        <h1 class="h5 mt-3 mt-lg-0 mb-5 fw-400">{{ translate('Total') }} <span class="fw-600">{{ $total }}</span>
          {{ translate('projects found for') }} <span class="fw-600">{{ $keyword }}</span>
        </h1>
      </div>
    </div>
    @endif


    <!-- project list and filter option start -->
    <form id="project-filter-form" action="" method="GET">
      <div class="row gutters-15">
        <!-- Sidebar -->
        <div class="col-xl-3 col-lg-4">
          <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-lg z-1035">
            <div class="card rounded-0 border-0 collapse-sidebar c-scrollbar-light shadow-none px-3 py-2"
              style="background: #F2F7F2;">
              <div class="card-header border-0 pl-lg-0">
                <h5 class="mb-0 fs-21 fw-700">{{ translate('Filter By') }}</h5>
                <button class="btn btn-sm p-2 d-lg-none filter-sidebar-thumb" data-toggle="class-toggle"
                  data-target=".aiz-filter-sidebar" type="button">
                  <i class="las la-times la-2x"></i>
                </button>
              </div>

              <!-- @foreach($categories as $category)
                            <span id="category_{{$category->id}}" class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                                {{$category ->name}} |<p onclick="removeCategory({{$category->id}})" class="m-0  d-inline fw-700">
                                    X</p>
                            </span>
                            @endforeach -->
              @foreach($categories as $category)
              <span id="category_{{$category->id}}"
                class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0">
                {{$category->name}} |
                <p onclick="removeCategory({{$category->id}})" class="m-0 d-inline fw-700">X</p>
              </span>
              @endforeach
              <div class="card-body pl-lg-0">


                <!-- <div class="w-200px mb-3">
                                    <select class="form-control form-control-sm aiz-selectpicker rounded-1" name="sort" onchange="applyFilter()">
                                        <option value="1" @if($sort=='1' ) selected @endif>{{ translate('Newest first') }}</option>
                                        <option value="2" @if($sort=='2' ) selected @endif>{{ translate('Lowest budget first') }}</option>
                                        <option value="3" @if($sort=='3' ) selected @endif>{{ translate('Highest budget first') }}</option>
                                        <option value="4" @if($sort=='4' ) selected @endif>{{ translate('Lowest bids first') }}</option>
                                        <option value="5" @if($sort=='5' ) selected @endif>{{ translate('Highest bids first') }}</option>
                                    </select>
                                </div> -->
                <!-- Categories -->
                <div class="mb-4">
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class=" pr-3">{{ translate('Categories') }}</span>
                  </h6>
                  <div class="">

                                        @foreach(\App\Models\ProjectCategory::all()->reverse() as $category)

                                        <label class="aiz-checkbox w-100">
                                            <input type="checkbox" name="category_id[]" onchange="applyFilter()" value="{{ $category->id }}" @if (in_array($category->id,$category_ids)) checked @endif >
                                            {{$category->name}}
                                            <span class="aiz-square-check"></span>
                                            <span class="float-right text-secondary fs-lg-16 fs-14"></span>
                                        </label>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Budget -->
                                <div class="mb-4">
                                    <h6 class="text-left mb-3 fs-14 fw-700">
                                        <span class=" pr-3">{{ translate('Project Type') }}</span>
                                    </h6>
                                    <!-- <!- - Fixed Price Projects - ->
                                    <div class="aiz-checkbox-list">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="projectType[]" value="Fixed" @if (in_array('Fixed', $projectType)) checked @endif onchange="applyFilter()"> {{ translate('Fixed Price') }}
                                            <span class="aiz-square-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                    </div>
                                    <div class="d-flex">
                                        <div>

                                            <input onchange="applyFilter()" class="p-2" name="fixed_min" placeholder="Min" value="{{ $fixed_min ? $fixed_min : '' }}" style="width:80px;margin-right:35px; height: 32px;border: 1px solid #c6c4c4;" type="number">

                                        </div>
                                        <p class="fs-16 fw-400 mb-0 d-flex justify-content-center align-items-center">to</p>
                                        <div>

                                            <input onchange="applyFilter()" class="p-2" name="fixed_max" placeholder="Max" value="{{ $fixed_max ? $fixed_max : '' }}" style="width:80px;margin-left:35px;height: 32px;border: 1px solid #c6c4c4;" type="number">
                                        </div>
                                    </div>
                                    <!- - Hourly Projects - ->
                                    <div class="aiz-checkbox-list mt-2">
                                        <label class="aiz-checkbox">
                                            <input onchange="applyFilter()" type="checkbox" name="projectType[]" value="Hourly" @if (in_array('Hourly', $projectType)) checked @endif> {{ translate('Hourly ') }}
                                            <span class="aiz-square-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                    </div>
                                    <div class="d-flex">
                                        <div>
                                            <input onchange="applyFilter()" name="hourly_min" class="p-2" placeholder="Min" value="{{ $hourly_min ? $hourly_min : '' }}" style="width:80px;margin-right:35px; height: 32px;border: 1px solid #c6c4c4;" type="number">
                                        </div>
                                        <p class="fs-16 fw-400 mb-0 d-flex justify-content-center align-items-center ">to</p>
                                        <div>

                                            <input onchange="applyFilter()" name="hourly_max" value="{{ $hourly_max ? $hourly_max : '' }}" class="p-2" placeholder="Max" style="width:80px;margin-left:35px;height: 32px;border: 1px solid #c6c4c4;" type="number">
                                        </div>
                                    </div> -->

                                    <!-- Fixed Price Projects -->
                                    <div class="aiz-checkbox-list">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="projectType[]" value="Fixed" @if (in_array('Fixed', $projectType)) checked @endif onchange="applyFilter()"> {{ translate('Fixed Price') }}
                                            <span class="aiz-square-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                    </div>
                                    <div class="d-flex">
                                        <div>
                                            <input onchange="applyFilter()" class="p-2" placeholder="Min" name="fixed_min" value="{{ $fixed_min ? $fixed_min : '' }}" style="width:80px;margin-right:35px; height: 32px;border: 1px solid #c6c4c4;" type="number">
                                        </div>
                                        <p class="fs-16 fw-400 mb-0 d-flex justify-content-center align-items-center">to</p>
                                        <div>
                                            <input onchange="applyFilter()" class="p-2" placeholder="Max" name="fixed_max" value="{{ $fixed_max ? $fixed_max : '' }}" style="width:80px;margin-left:35px;height: 32px;border: 1px solid #c6c4c4;" type="number">
                                        </div>
                                    </div>
                                    <!-- Hourly Projects -->
                                    <div class="aiz-checkbox-list mt-2">
                                        <label class="aiz-checkbox">
                                            <input onchange="applyFilter()" type="checkbox" name="projectType[]" value="Hourly" @if (in_array('Hourly', $projectType)) checked @endif> {{ translate('Hourly') }}
                                            <span class="aiz-square-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                    </div>
                                    <div class="d-flex">
                                        <div>
                                            <input onchange="applyFilter()" class="p-2" name="hourly_min" value="{{ $hourly_min ? $hourly_min : '' }}" placeholder="Min" style="width:80px;margin-right:35px; height: 32px;border: 1px solid #c6c4c4;" type="number">
                                        </div>
                                        <p class="fs-16 fw-400 mb-0 d-flex justify-content-center align-items-center">to</p>
                                        <div>
                                            <input onchange="applyFilter()" name="hourly_max" value="{{ $hourly_max ? $hourly_max : '' }}" class="p-2" placeholder="Max" style="width:80px;margin-left:35px;height: 32px;border: 1px solid #c6c4c4;" type="number">
                                        </div>
                                    </div>



                                </div>


                                    <!-- <!- - Project Type - ->
                                <div class="mb-5">
                                    <h6 class="text-left mb-3 fs-14 fw-700">
                                        <span class=" pr-3">{{ translate('Project Type') }}</span>
                                    </h6>
                                    <div class="aiz-checkbox-list">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="projectType[]" value="Fixed" @if (in_array('Fixed', $projectType)) checked @endif onchange="applyFilter()"> {{ translate('Fixed Price') }}
                                            <span class="aiz-square-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="projectType[]" value="Long Term" @if (in_array('Long Term', $projectType)) checked @endif onchange="applyFilter()"> {{ translate('Long Term') }}
                                            <span class="aiz-square-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                    </div>
                                </div>
                                <!- - Numbers of Bids - ->
                                <div class="mb-5">
                                    <h6 class="text-left mb-3 fs-14 fw-700">
                                        <span class="pr-3">{{ translate('Numbers of Bids') }}</span>
                                    </h6>
                                    <div class="aiz-radio-list">
                                        <label class="aiz-radio">
                                            <input type="radio" name="bids" value="" onchange="applyFilter()" @if ($bids=="" ) checked @endif>
                                            {{ translate('Any Number of bids') }}
                                            <span class="aiz-rounded-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                        <label class="aiz-radio">
                                            <input type="radio" name="bids" value="0-5" onchange="applyFilter()" @if ($bids=="0-5" ) checked @endif> {{ translate('0 to 5') }}
                                            <span class="aiz-rounded-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                        <label class="aiz-radio">
                                            <input type="radio" name="bids" value="5-10" onchange="applyFilter()" @if ($bids=="5-10" ) checked @endif> {{ translate('5 to 10') }}
                                            <span class="aiz-rounded-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                        <label class="aiz-radio">
                                            <input type="radio" name="bids" value="10-20" onchange="applyFilter()" @if ($bids=="10-20" ) checked @endif> {{ translate('10 to 20') }}
                                            <span class="aiz-rounded-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                        <label class="aiz-radio">
                                            <input type="radio" name="bids" value="20-30" onchange="applyFilter()" @if ($bids=="20-30" ) checked @endif> {{ translate('20 to 30') }}
                                            <span class="aiz-rounded-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                        <label class="aiz-radio">
                                            <input type="radio" name="bids" value="30+" onchange="applyFilter()" @if ($bids=="30+" ) checked @endif> {{ translate('30+') }}
                                            <span class="aiz-rounded-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                    </div>
                                </div> -->

                                    <!-- Skills -->

                                    <div class="mb-4">
                                        <!-- Countries -->
                                        <!-- <h6 class="text-left mb-3 fs-14 fw-700">
                                        <span class="pr-3">{{ translate('Skills') }}</span>
                                    </h6> -->
                                        <!-- <div class="mb-5" style="width: 245px;">
                                        <select class="select2 form-control aiz-selectpicker rounded-1" name="skill_id" onchange="applyFilter()" data-toggle="select2" data-live-search="true">
                                            <option value="">{{ translate('Skills') }}</option>
                                            @foreach (\App\Models\Skill::all() as $key => $skill)
                                            <option value="{{ $skill->id }}" @if (isset($skill_id) && $skill_id==$skill->id )
                                                selected
                                                @endif>{{ $skill->name }}</option>
                                            @endforeach
                                        </select>
                                    </div> -->
                                        <div class="">
                                            <h6 class="text-left mb-3 fs-14 fw-700">
                                                <span class="pr-3">{{ translate('Skills') }}</span>
                                            </h6>
                                            <div class="mb-5 border-bottom">
                                                <select class="select2 form-control aiz-selectpicker rounded-1" name="skill_id[]" onchange="applyFilter()" data-toggle="select2" data-live-search="true">

                                                    <option value="">{{ translate('Search skills') }}</option>
                                                    @foreach (\App\Models\Skill::all() as $key => $skill)
                                                    <option value="{{ $skill->id }}" @if (in_array($skill->id, (array)$skill_ids ))
                                                        selected
                                                        @endif>{{ $skill->name }}</option>
                                                    @endforeach
                                                </select>

                                                <div class="mt-3">
                                                    @foreach (\App\Models\ParentSkill::all() as $key => $parentSkill)
                                                    <a class="text-dark d-flex justify-content-start align-items-center mb-1" data-toggle="collapse" href="#skill_{{$parentSkill->id}}" role="button" aria-expanded="true" aria-controls="skill_{{ $parentSkill->id}}">
                                                        <label class="fas fa-plus " style="border: 1px solid gray;border-radius: 50%;height: 18px; width: 17px;align-items:center;margin: 0 5px 0 0;background: gray;color: white;display: flex;justify-content: center;align-content: center; font-size:9px"></label>
                                                        <p class="mb-0 fs-14 fw-500">{{ $parentSkill->name }}</p>
                                                    </a>
                                                    <div class="overflow-auto h-130px collapse " id="skill_{{$parentSkill->id}}">
                                                        @foreach (\App\Models\Skill::where('parent_skill_id', $parentSkill->id)->get() as $subSkill)
                                                        <div class=" w-200px child-skill-project-filtering">
                                                            <div class="mb-1 ">
                                                                <input type="checkbox" name="childSkill_id[]" id="{{$subSkill->id}}" value="{{$subSkill->id}}" class=" d-none" onchange="applyFilter()">
                                                                <label class="c-pointer fs-12 text-dark ml-3 fw-500 mb-0" for="{{$subSkill->id}}"> {{ $subSkill->name }}</label>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>


                                    </div>

                                    <!-- Price -->
                                    <!-- <input type="hidden" name="min_price" value="">
                                <input type="hidden" name="max_price" value="">
                                <h6 class="text-left mb-3 fs-14 fw-700">
                                    <span class=" pr-3">{{ translate('Price') }}</span>
                                </h6>
                                <div class="aiz-range-slider mb-5 px-3">
                                    <div id="input-slider-range" data-range-value-min="@if(\App\Models\Project::count() < 1) 0 @else {{ \App\Models\Project::min('price') }} @endif" data-range-value-max="@if(\App\Models\Project::count() < 1) 0 @else {{ \App\Models\Project::max('price') }} @endif">
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <span class="range-slider-value value-low fs-14 fw-600 opacity-70" @if (isset($min_price)) data-range-value-low="{{ $min_price }}" @elseif(count($projects)> 1 && $projects->min('price') >
                                                0)
                                                data-range-value-low="{{ $projects->min('price') }}"
                                                @else
                                                data-range-value-low="0"
                                                @endif
                                                id="input-slider-range-value-low"
                                                ></span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="range-slider-value value-high fs-14 fw-600 opacity-70" @if (isset($max_price)) data-range-value-high="{{ $max_price }}" @elseif(count($projects)> 1 && $projects->max('price')
                                                > 0)
                                                data-range-value-high="{{ $projects->max('price') }}"
                                                @else
                                                data-range-value-high="0"
                                                @endif
                                                id="input-slider-range-value-high"
                                                ></span>
                                        </div>
                                    </div>
                                </div> -->
                                    {{-- <div class="">
                                        <h6 class="separator text-left mb-3 fs-12 text-uppercase text-secondary">
                                            <span class=" pr-3">Client History</span>
                                        </h6>
                                        <div class="aiz-radio-list">
                                            <label class="aiz-radio">
                                                <input type="radio" name="radio3" checked="checked"> Any client history
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12">(200)</span>
                                            </label>
                                            <label class="aiz-radio">
                                                <input type="radio" name="radio3"> No hires
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12">(200)</span>
                                            </label>
                                            <label class="aiz-radio">
                                                <input type="radio" name="radio3"> 1 to 10 hires
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12">(200)</span>
                                            </label>
                                            <label class="aiz-radio">
                                                <input type="radio" name="radio3"> 10+ hires
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12">(200)</span>
                                            </label>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                        </div>
                    </div>

                    <!-- Project List -->
                    <div class="col-xl-9 col-lg-8 ">
                        <div class="card mb-lg-0 border-0">
                            <input type="hidden" name="type" value="project">
                            <!-- <div class="card-header">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-sm btn-icon btn-soft-secondary d-lg-none flex-shrink-0 mr-2" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                                    <i class="las la-filter"></i>
                                </button>
                                <input type="text" class="form-control form-control-sm rounded-1" placeholder="{{ translate('Search Keyword') }}" value="{{ $keyword }}" name="keyword">
                            </div>
                        </div> -->

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <p class="fw-500 fs-15 text-black mb-0"> <span class="text-black fw-600 fs-15">{{ $projects->count()}}</span> project available</p>
                                </div>
                                <div class="d-flex  ">
                                    <div class="" style="width:90px; ">
                                        <p class="fw-500 fs-15 text-black mb-0 mr-2 mt-2">Sort by</p>
                                    </div>

                                    <select class="form-control form-control-sm aiz-selectpicker rounded-1" name="sort" onchange="applyFilter()">
                                        <option value="1" @if($sort=='1' ) selected @endif>{{ translate('Newest first') }}</option>
                                        <option value="2" @if($sort=='2' ) selected @endif>{{ translate('Lowest budget first') }}</option>
                                        <option value="3" @if($sort=='3' ) selected @endif>{{ translate('Highest budget first') }}</option>
                                        <option value="4" @if($sort=='4' ) selected @endif>{{ translate('Lowest bids first') }}</option>
                                        <option value="5" @if($sort=='5' ) selected @endif>{{ translate('Highest bids first') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body p-0 border-0 ">

                                @foreach ($projects as $key => $project)
                                <a href="{{ route('project.details', $project->slug) }}" class="row card-project text-inherit px-3 py-4 all-scholarship-list" style="background: #F2F7F2; border-bottom:1px solid #ddd;">
                                    <div class="col-lg-1 p-0">
                                        <span class="avatar avatar-xs mb-lg-2" style="width:70px; height: 70px;">
                                            @if($project->image != null)
                                            <img src="{{ custom_asset($project->client->photo) }}">
                                            @else
                                            <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
                                            @endif
                                        </span>
                                    </div>
                                    <div class="col-lg-8  px-lg-3">
                                        <h5 class="h6 fw-700 lh-1-5"> {{$project->name}}</h5>
                                        <ul class="list-inline opacity-70 fs-12">
                                            <li class="list-inline-item">
                                                {{-- <i class="las la-clock opacity-40"></i> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                                    <g id="Group_22132" data-name="Group 22132" transform="translate(-365 -1963)">
                                                        <path id="Subtraction_5" data-name="Subtraction 5" d="M-13,12a6.007,6.007,0,0,1-6-6,6.007,6.007,0,0,1,6-6A6.007,6.007,0,0,1-7,6,6.006,6.006,0,0,1-13,12Zm-.5-9V7h.013l2.109,2.109.707-.706L-12.5,6.572V3Z" transform="translate(384 1963)" fill="#055846" />
                                                    </g>
                                                </svg>
                                                <span class="ml-1 fw-700" style="color:black;">{{ Carbon\Carbon::parse($project->created_at)->diffForHumans()}}</span>
                                            </li>
                                            <li class="list-inline-item">
                                                {{-- <i class="las la-stream opacity-40"></i> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11">
                                                    <g id="Group_23" data-name="Group 23" transform="translate(-498 -1963)">
                                                        <path id="Subtraction_2" data-name="Subtraction 2" d="M1.5,0h7a1.5,1.5,0,0,1,0,3h-7a1.5,1.5,0,0,1,0-3Z" transform="translate(498 1963)" fill="#055846" />
                                                        <path id="Subtraction_4" data-name="Subtraction 4" d="M1.5,0h5a1.5,1.5,0,0,1,0,3h-5a1.5,1.5,0,0,1,0-3Z" transform="translate(498 1971)" fill="#055846" />
                                                        <path id="Subtraction_3" data-name="Subtraction 3" d="M1.5,0h7a1.5,1.5,0,0,1,0,3h-7a1.5,1.5,0,0,1,0-3Z" transform="translate(500 1967)" fill="#055846" />
                                                    </g>
                                                </svg>
                                                <span class="ml-1 fw-700 fs-14" style="color:black;">@if ($project->project_category != null) {{ $project->project_category->name }} @endif</span>
                                            </li>
                                            <li class="list-inline-item">
                                                {{-- <i class="las la-handshake"></i> --}}
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.7426 15.1109H3.73374C3.23373 15.1073 2.75506 14.9078 2.40041 14.5554C2.22467 14.3806 2.08514 14.1728 1.98981 13.944C1.89448 13.7152 1.84522 13.4699 1.84485 13.222V4.12424C1.84234 3.93665 1.8772 3.75044 1.9474 3.57646C2.01761 3.40248 2.12174 3.24422 2.25374 3.11091L4.06708 1.30646C4.19913 1.17339 4.35634 1.06793 4.52954 0.996202C4.70275 0.924477 4.8885 0.887928 5.07596 0.888683H12.7426C13.1198 0.888683 13.4816 1.03852 13.7483 1.30524C14.015 1.57196 14.1649 1.93371 14.1649 2.31091V13.6887C14.1649 14.0659 14.015 14.4276 13.7483 14.6943C13.4816 14.9611 13.1198 15.1109 12.7426 15.1109ZM5.07596 1.83535C4.95107 1.83572 4.83134 1.88521 4.74263 1.97313L2.92485 3.79091C2.83734 3.87988 2.78792 3.99944 2.78708 4.12424V13.2131C2.78696 13.338 2.81166 13.4616 2.85972 13.5768C2.90779 13.692 2.97827 13.7965 3.06708 13.8842C3.24586 14.0607 3.48696 14.1597 3.73819 14.1598H12.7426C12.8051 14.1598 12.8669 14.1475 12.9246 14.1236C12.9823 14.0997 13.0347 14.0647 13.0789 14.0205C13.1231 13.9763 13.1581 13.9239 13.182 13.8662C13.2059 13.8085 13.2182 13.7467 13.2182 13.6842V2.31091C13.2182 2.18478 13.1681 2.06382 13.0789 1.97464C12.9897 1.88545 12.8688 1.83535 12.7426 1.83535H5.07596Z" fill="#055846" />
                                                    <path d="M4.67969 4.67969H11.3152V5.62635H4.67969V4.67969Z" fill="#055846" />
                                                    <path d="M4.67969 6.57812H11.3152V7.52479H4.67969V6.57812Z" fill="#055846" />
                                                    <path d="M4.67969 8.47559H7.99969V9.42225H4.67969V8.47559Z" fill="#055846" />
                                                    <path d="M4.67969 11.3203H9.42191V12.267H4.67969V11.3203Z" fill="#055846" />
                                                    <path d="M10.3691 11.3203H11.3158V12.267H10.3691V11.3203Z" fill="#055846" />
                                                </svg>

                                                <span class="ml-1  fw-700 fs-14" style="color:black;">
                                                    @if ($project->bids > 0)
                                                    {{ $project->bids }}+
                                                    @else
                                                    {{ $project->bids }}
                                                    @endif
                                                    Received</span>
                                            </li>
                                        </ul>
                                        <div class="text-muted lh-1-4 fs-14">
                                            <p> {{ \Illuminate\Support\Str::limit($project->excerpt, 260, $end = '...') }}
                                            </p>
                                        </div>
                                        <div>
                                            @foreach (json_decode($project->skills) as $key => $skill_id)
                                            @php
                                            $skill = \App\Models\Skill::find($skill_id);
                                            @endphp
                                            @if ($skill != null)
                                            <span class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light  border-0">{{ $skill->name }}</span>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-lg-3 flex-shrink-0 pt-4 pt-xl-0  d-flex flex-row-reverse flex-xl-column  align-items-center align-items-xl-end min-130px">

                                        <div class="btn d-flex justify-content-start align-items-center mt-2 py-2 fs-14 px-2 text-white" style="background-color:#275846; width:165px;">
                                            <img class=" px-1  " src=" {{url('/public/assets/find-consultant/budget.png')}}" alt="Image" style="width:30px; " /> {{ translate('Budget') }} {{ single_price($project->price) }}

                                        </div>

                                        <button href="{{ route('project.details', $project->slug) }}" type="button" class="btn d-flex justify-content-center align-items-center mt-2 py-2 fs-14 px-2 text-white" style="background-color:#275846; ">
                                            <img class=" px-1  " src=" {{url('/public/assets/find-consultant/logo-1.png')}}" alt="Image" style="width:36px; " />
                                            Send Proposal
                                            <img class=" px-1 " src=" {{url('/public/assets/home/arrow.png')}}" alt="Image" style="width:18px; " />
                                        </button>

                                    </div>
                                </a>
                                @endforeach

                            </div>
                            <div class="card-footer">
                                <div class="aiz-pagination aiz-pagination-center flex-grow-1">
                                    <ul class="pagination">
                                        {{ $projects->links() }}
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-2 d-flex justify-content-center mx-0">
                                <h5 class="fs-15 fw-500 text-black"> {{$projects->count()}} of {{$projects->total()}} projects available</h5>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</section>
<!-- <script>
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
        $('#project-filter-form').submit();
    }
</script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
  $('#project-filter-form').submit();
}
</script>

@endsection


@section('script')

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<script type="text/javascript">
function applyFilter() {
  $('#project-filter-form').submit();
}

function rangefilter(arg) {
  $('input[name=min_price]').val(arg[0]);
  $('input[name=max_price]').val(arg[1]);
  applyFilter();
};
</script>
@endsection
