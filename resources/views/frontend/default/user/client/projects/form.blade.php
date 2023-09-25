<div class="form-group">
    <label class="form-label">
        {{ translate('Project title') }}
        <span class="text-danger">*</span>
    </label>
    <div class="form-group">
        <input type="text" class="form-control" name="name"
            placeholder="{{ translate('Enter project title') }}" value="{{ old('name', $project->name) }}" required>
    </div>
    @error('name')
        <span class="invalid-feedback d-block" role="alert">
            {{ $message }}
        </span>
    @enderror
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
    {{ old('description', $project->description) }}
    </textarea>
    @error('description')
        <span class="invalid-feedback d-block" role="alert">
            {{ $message }}
        </span>
    @enderror
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
    <select name="skills[]" id="skills" multiple>
        @foreach ($skills as $skill)
            <option value="{{ $skill->id }}" @if(in_array($skill->id, old('skills', $project->skills ?? []))) selected @endif>{{ $skill->name }}</option>
        @endforeach
    </select>
    @error('skills')
        <span class="invalid-feedback d-block" role="alert">
            {{ $message }}
        </span>
    @enderror
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
                        name="type" class="custom-control-input" value="Fixed"
                        @if(old('type', $project->type) == 'Fixed') checked @endif>
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
                    <input type="radio" id="projectTypeLong" name="type"
                        class="custom-control-input" value="hourly"
                        @if(old('type', $project->type) == 'hourly') checked @endif>
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
    @error('type')
        <span class="invalid-feedback d-block" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="form-group">
    <label class="form-label">
        {{ translate('What is your estimated budget?') }}
        <span class="text-danger">*</span>
    </label>
    <div class="row px-3">
        <div class="py-2">
            <div class="form-check form-check-inline">
                <input class="form-check-input currency" type="radio" name="currency" id="USD" value="USD"
                @if(old('currency', $project->currency) == 'USD') checked @endif>
                <label class="form-check-label" for="USD">USD</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input currency" type="radio" name="currency" id="AUD" value="AUD"
                @if(old('currency', $project->currency) == 'AUD') checked @endif>
                <label class="form-check-label" for="AUD">AUD</label>
            </div>
            @error('currency')
                <span class="invalid-feedback d-block" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="col-lg-1 px-0"></div>
        <select class="col-lg-9 px-0 form-control aiz-selectpicker" name="budget" id="choices" >
            @if(old('currency', $project->currency) == 'AUD' || old('currency', $project->currency) == null)
                @foreach ($budget_aud as $budget)
                    <option value="{{ $budget }}" @if(old('budget', $project->budget) == $budget) selected @endif>{{ $budget }}</option>
                @endforeach
            @endif
            @if(old('currency', $project->currency) == 'USD')
                @foreach ($budget_usd as $budget)
                    <option value="{{ $budget }}" @if(old('budget', $project->budget) == $budget) selected @endif>{{ $budget }}</option>
                @endforeach
            @endif
        </select>
    </div>
    @error('budget')
        <span class="invalid-feedback d-block" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="form-group">
    <label>
        {{ translate('Project category') }}
        <span class="text-danger">*</span>
    </label>
    <select class="form-control aiz-selectpicker" id="category_id" name="project_category_id"
        data-live-search="true" required>
        @foreach ($categories as $category)
            <option value="">Select a project category</option>
            <option value="{{ $category->id }}" @if(old('project_category_id', $project->project_category_id) == $category->id) selected @endif>{{ $category->name }}</option>
        @endforeach
    </select>
    @error('project_category_id')
        <span class="invalid-feedback d-block" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="text-right">
    @if ($client_package->fixed_limit > 0 || $client_package->fixed_limit > 0)
        <button type="submit"
            class="btn btn-primary transition-3d-hover mr-1 rounded-1">{{ translate($buttonText) }}</button>
    @else
        <div class="alert alert-info custom-control-inline mb-0" role="alert">
            {{ translate('Upgrade your Package.') }}
        </div>
    @endif
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Map your choices to your option value
        var lookup = {
            'AUD': {!! json_encode($budget_aud) !!},
            'USD': {!! json_encode($budget_usd) !!},
        };

        // When an option is changed, search the above for matching choices
        $('.currency').on('change', function() {
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
        new MultiSelectTag('skills',{
            placeholder: 'Select some required skills'
        })  // id
    </script>