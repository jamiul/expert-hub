@extends('frontend.layouts.front-layout')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start">
            @include('frontend.user.expert.inc.sidebar')
            <div class="aiz-user-panel">
                <div class="aiz-titlebar mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h1 class="fs-16 fw-700">{{ translate('Work Experience Edit') }}</h1>
                        </div>
                    </div>
                </div>
                <div class="card rounded-2 border-gray-light">
                    <div class="card-header">
                        <h4 class="h6 font-weight-medium mb-0">{{ translate('Work Experience') }}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user_profile.work_experience_update', $workExp->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label id="usernameLabel" class="form-label">{{ translate('Company Name') }}<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="company_name" value="{{ $workExp->company_name }}" placeholder="{{ translate('Company Name') }}" required>
                            </div>
                            <div class="form-group">
                                <label id="usernameLabel" class="form-label">{{ translate('Joining date') }}<span class="text-danger">*</span></label>
                                <input type="text" class="aiz-date-range form-control" name="start_date" placeholder="{{ translate('Select Date') }}" data-single="true" data-show-dropdown="true" autocomplete="off" value="{{ $workExp->start }}"/>
                            </div>
                            <div class="custom-control custom-checkbox form-group">
                                <input type="checkbox" class="custom-control-input" id="stylishCheckbox" name="present" @if ($workExp->present == '1') checked @endif data-show="checkedShow" data-target=".leaving-date">
                                <label class="custom-control-label" for="stylishCheckbox">{{ translate('currently working here') }}</label>
                            </div>
                            <div class="form-group leaving-date">
                                <label id="usernameLabel" class="form-label">{{ translate('Leaving date') }}</label>
                                <input type="text" class="aiz-date-range form-control" name="end_date" placeholder="{{ translate('Select Date') }}" data-single="true"  data-show-dropdown="true" autocomplete="off" value="{{ $workExp->end }}"/>
                            </div>
                            <div class="form-group">
                                <label id="usernameLabel" class="form-label">{{ translate('Company Website') }}</label>
                                <input type="text" class="form-control" name="company_website" value="{{ $workExp->company_website }}" placeholder="{{ translate('Company Website') }}">
                            </div>
                            <div class="form-group">
                                <label id="usernameLabel" class="form-label">{{ translate('Designation') }}<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="designation" value="{{ $workExp->designation }}" placeholder="{{ translate('Designation') }}" required>
                            </div>
                            <div class="form-group">
                                <label id="usernameLabel" class="form-label">{{ translate('Description') }}<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="description" value="{{ $workExp->description }}" placeholder="{{ translate('Description') }}" required>
                            </div>
                            <div class="form-group">
                                <label id="usernameLabel" class="form-label">{{ translate('Company Location') }}<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="location" value="{{ $workExp->location }}" placeholder="{{ translate('Company Location') }}" required>
                            </div>
                            <div class="mt-2 text-right">
                                <!-- Buttons -->
                                <button type="submit" class="btn btn-primary transition-3d-hover rounded-1">{{ translate('Update Work Experience') }}</button>
                                <!-- End Buttons -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Content Section -->
@endsection