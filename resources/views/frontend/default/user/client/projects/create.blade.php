@extends('frontend.default.layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                @include('frontend.default.user.client.inc.sidebar')

                <div class="aiz-user-panel">
                    <div class="container-main-projects-banner ">
                        <div class="mb-4 mt-lg-1 py-lg-4" style="background:#275846">
                            <div class="row rounded-0 px-2 mx-4">
                                <div class="col-lg-8 col-sm-12 my-auto">
                                    <h3 class="text-white fw-700 fs-30  ">Available Academic Projects
                                    </h3>
                                    <p class="fw-400 text-white text-justify fs-18 mb-2">View available academic projects
                                        and bid on the
                                        ones that match your expertise.
                                    </p>
                                    <a href="register?type=2"
                                        class="btn rounded border site-font fs-20 mt-lg-3 frequently-qsn-title  text-white">Get Started</a>

                                </div>
                                <div class="col-lg-2 col-sm-12 "></div>
                                <div class="col-lg-2 col-sm-12 ">
                                    {{-- <img class=""
                                        src="{{ asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                                        alt=""> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aiz-titlebar mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                {{-- <h1 class="fs-16 fw-700">{{ translate('Post A New Project') }}</h1> --}}
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-2 border-gray-light">
                        {{-- <div class="card-header">
                            <h5 class="mb-0 h6">{{ translate('Post A New Project') }}</h5>
                        </div> --}}
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('projects.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">
                                        {{ translate('Project title') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name"
                                            placeholder="{{ translate('Enter project title') }}">
                                    </div>
                                </div>
                                {{-- Project description --}}
                                <div class="form-group u-summernote-editor">
                                    <label>
                                        {{ translate('Project description') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control aiz-text-editor" data-height="300" rows="3" name="description" required
                                        data-toolbar='[
                                        ["style", ["style"]],
                                        ["font", ["bold", "underline", "clear"]],
                                        ["fontsize", ["fontsize"]],
                                        ["para", ["ul", "ol", "paragraph"]]
                                    ]'>
                                    </textarea>
                                </div>
                                {{-- attachment --}}
                                <div class="form-group">
                                    <label class="form-label" for="signinSrEmail">{{ translate('File attachment') }}</label>
                                    <div class="input-group" data-toggle="aizuploader" data-multiple="true">
                                        <div class="input-group-prepend">
                                            <div
                                                class="input-group-text bg-soft-secondary font-weight-medium fw-700 text-black">
                                                {{ translate('Attach file') }}</div>
                                        </div>
                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                        <input type="hidden" name="attachments" class="selected-files">
                                    </div>
                                    <div class="file-preview"></div>
                                </div>
                                {{-- skill required --}}
                                <div class="form-group">
                                    <label>
                                        {{ translate('Skills required') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select multiple class="form-control aiz-selectpicker" name="skills[]" required
                                        data-live-search="true" data-placeholder="Select required skills"
                                        data-selected-text-format="count" id="countries">
                                        @foreach ($skills as $skill)
                                            <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- How do you want to pay? --}}
                                <div class="form-group">
                                    <div class="form-label mb-2 ">
                                        {{ translate('How do you want to pay?') }}
                                        <span class="text-danger">*</span>
                                    </div class="aiz-radio-inline">
                                    <div class="row">
                                        <div class="col-lg-4 card py-3 px-2 pr-0">
                                            @if ($client_package->fixed_limit > 0)
                                                <div class="custom-control custom-radio custom-control-inline ">
                                                    <input  type="radio" id="projectTypeFixed"
                                                        name="projectType" class="custom-control-input" value="Fixed"
                                                        checked>
                                                    <label class="custom-control-label fw-700 text-black fs-16"
                                                        for="projectTypeFixed">{{ translate('Pay fixed price') }}
                                                        <p class="fw-500 fs-14">
                                                            {{ translate('Hire based on an hourly rate and pay for hours billed. Best for ongoing work.') }}
                                                        </p>
                                                    </label>

                                                </div>
                                            @else
                                                <div class="alert alert-info custom-control-inline mb-0" role="alert">
                                                    {{ translate('Your fixed type project post limit is over.') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-4 card py-3 px-2 pl-0">
                                            @if ($client_package->long_term_limit > 0)
                                                <div class="custom-control custom-radio custom-control-inline ">
                                                    <input type="radio" id="projectTypeLong" name="projectType"
                                                        class="custom-control-input" value="hourly">
                                                    <label class="custom-control-label fw-700 text-black fs-16"
                                                        for="projectTypeLong">{{ translate('Pay by the hour') }}
                                                        <p class="fw-500 fs-14">
                                                            {{ translate('Agree on a price and release payment when the job is done. Best for one-off tasks.') }}
                                                        </p>
                                                    </label>
                                                </div>
                                            @else
                                                <div class="alert alert-info custom-control-inline mb-0" role="alert">
                                                    {{ translate('Your long term project post limit is over.') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        {{ translate('What is your estimated budget?') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    {{-- <div class="row">
                                        <div class="col-lg-3">
                                            <select class="form-control aiz-selectpicker" id="options"
                                                name="category_id" data-live-search="true" required>
                                                <option value="AUD">AUD</option>
                                                <option value="USD">USD</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-9">
                                            <select class="form-control aiz-selectpicker" id="choices"
                                                name="category_id" data-live-search="true" required>
                                                <option value="">Basic ($2 - 8 USD per hour) </option>
                                               <option value="">Moderate ($8 - 15 USD per hour) </option>
                                                <option value="">Standard ($15 - 25 USD per hour) </option>
                                                <option value="">Skilled ($25 - 50 USD per hour) </option>
                                                <option value="">Expert ($ 50 + per hour) </option>

                                            </select>
                                        </div>
                                    </div> --}}
                                    <div class="row px-3">
                                        <select  class="col-lg-2 px-0 form-control aiz-selectpicker" id="options" >
                                            <option value="AUD">AUD</option>
                                            <option value="USD">USD</option>
                                        </select>
                                        <div class="col-lg-1 px-0"></div>
                                        <select class="col-lg-9 px-0 form-control aiz-selectpicker" id="choices" >
                                            <option value="">Basic ($2 - 8 AUD per hour) </option>
                                            <option value="">Moderate ($8 - 15 AUD per hour) </option>
                                            <option value="">Standard ($15 - 25 AUD per hour) </option>
                                            <option value="">Skilled ($25 - 50 AUD per hour) </option>
                                            <option value="">Expert ($ 50+ AUD per hour) </option>
                                        </select>
                                    </div>


                                    {{-- <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" min="0" step="0.01" class="form-control"
                                                name="price" placeholder="{{ translate('Enter project budget') }}">
                                            <div class="input-group-append">
                                                <span class="input-group-text">$</span>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="form-group">
                                    <label>
                                        {{ translate('Project category') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control aiz-selectpicker" id="category_id" name="category_id"
                                        data-live-search="true" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label>
                                        {{ translate('Project summary') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control" rows="3" name="excerpt" required></textarea>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label>
                                        {{ translate('Skills required') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select multiple class="form-control aiz-selectpicker" name="skills[]" required data-live-search="true" data-placeholder="Select required skills" data-selected-text-format="count">
                                        @foreach ($skills as $skill)
                                            <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                {{-- <div class="form-group u-summernote-editor">
                                    <label>
                                        {{ translate('Project Details') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control aiz-text-editor" data-height="300" rows="3" name="description" required data-toolbar='[
                                        ["style", ["style"]],
                                        ["font", ["bold", "underline", "clear"]],
                                        ["fontsize", ["fontsize"]],
                                        ["para", ["ul", "ol", "paragraph"]]
                                    ]'>
                                    </textarea>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label class="form-label" for="signinSrEmail">{{ translate('File attachment') }}</label>
                                    <div class="input-group" data-toggle="aizuploader" data-multiple="true">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse') }}</div>
                                        </div>
                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                        <input type="hidden" name="attachments" class="selected-files">
                                    </div>
                                    <div class="file-preview"></div>
                                </div> --}}
                                <div class="text-right">
                                    @if ($client_package->fixed_limit > 0 || $client_package->fixed_limit > 0)
                                        <button type="submit"
                                            class="btn btn-primary transition-3d-hover mr-1 rounded-1">{{ translate('Post Project') }}</button>
                                    @else
                                        <div class="alert alert-info custom-control-inline mb-0" role="alert">
                                            {{ translate('Upgrade your Package.') }}
                                        </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Map your choices to your option value
        var lookup = {
            'AUD': ['Basic ($2 - 8 AUD per hour)', 'Moderate ($8 - 15 AUD per hour)', 'Standard ($15 - 25 AUD per hour)', 'Skilled ($25 - 50 AUD per hour)', 'Expert ($ 50+ AUD per hour)'],
            'USD': ['Basic ($2 - 8 USD per hour)', 'Moderate ($8 - 15 USD per hour)', 'Standard ($15 - 25 USD per hour)', 'Skilled ($25 - 50 USD per hour)', 'Expert ($ 50+ USD  per hour)'],
        };

        // When an option is changed, search the above for matching choices
        $('#options').on('change', function() {
            // Set selected option as variable
            var selectValue = $(this).val();

            // Empty the target field
            $('#choices').empty();

            // For each choice in the selected option
            for (i = 0; i < lookup[selectValue].length; i++) {
                // Output choice in the target field
                $('#choices').append("<option value='" + lookup[selectValue][i] + "'>" + lookup[selectValue][i] + "</option>");
            }

            // Refresh the select picker
            $('#choices').selectpicker('refresh');
        });

        // Initialize select pickers on page load
        $('.aiz-selectpicker').selectpicker();
    </script>
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
    <script>
        new MultiSelectTag('countries')  // id
    </script>

@endsection
@section('scripts')

@endsection
