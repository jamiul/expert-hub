@extends('frontend.layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                @include('frontend.user.expert.inc.sidebar')

                <div class="aiz-user-panel w-100">
                    <div class="aiz-titlebar mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="fs-16 fw-700">{{ translate('Create new training') }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="w-100">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">{{ translate('Training Information') }}</h5>
                            </div>
                            {{-- @dd(route('training-consultant.store')); --}}
                            <div class="card-body">
                                <form id="add_form" class="form-horizontal"
                                    action="{{ route('training-consultant.store') }}" method="POST">
                                    {{-- <form class="form-horizontal" action="{{ route('training-consultant.store') }}" method="POST"> --}}
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">
                                            {{ translate('Training Title') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="{{ translate('Training Title') }}"
                                                onkeyup="makeSlug(this.value)" id="title" name="title"
                                                class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <table class="table table-borderless mb-0" id="trainingDateTable">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label">
                                                                {{ translate('Training Date') }}
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-md-9">
                                                                <input type="text"
                                                                    placeholder="{{ translate('Select Date') }}"
                                                                    name="training_date[]" class="form-control"
                                                                    onfocus="(this.type='date')"
                                                                    onblur="(this.type='text')">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label">
                                                                {{ translate('Training Date Description') }}
                                                            </label>
                                                            <div class="col-md-9">
                                                                <textarea name="date_description[]" rows="5" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="form-group mb-4 text-left">
                                        <button type="button" class="btn btn-circle btn-info" id="addDate">
                                            {{ translate('Add Date') }}
                                        </button>
                                    </div>
                                    <!-- Training Category -->
                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Training Category') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <select class="form-control aiz-selectpicker" name="training_category"
                                                data-live-search="true" title="{{ translate('Select Training Category') }}">
                                                @foreach (getProjectCategory() as $category)
                                                    <option value="{{ $category['id'] }}">
                                                        {{ $category['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Training Mode -->
                                    <div class="form-group row" id="training_mode">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Training Mode') }}
                                            <span class="text-danger">*</span>

                                        </label>
                                        <div class="col-md-9">
                                            <select class="form-control aiz-selectpicker" name="training_mode_id"
                                                id="training_mode_id" data-live-search="true"
                                                title="{{ translate('Select Training Mode') }}">
                                                @foreach ($trainingMode as $mode)
                                                    <option value="{{ $mode['id'] }}">
                                                        {{ $mode['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row" id="level">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Software Package') }}
                                            <span class="text-danger">*</span>

                                        </label>
                                        <div class="col-md-9">
                                            <select class="form-control aiz-selectpicker" name="software_id"
                                                id="software_id" data-live-search="true"
                                                title="{{ translate('Select Software Package') }}">
                                                @foreach ($trainingSoftware as $software)
                                                    <option value="{{ $software->id }}">
                                                        {{ $software->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">
                                            {{ translate('Software Description') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <textarea name="software_description" rows="20" class="aiz-text-editor"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Language') }}
                                            <span class="text-danger">*</span>

                                        </label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="language_id" id="language_id"
                                                data-live-search="true" title="{{ translate('Select Language') }}">
                                                @foreach ($languages as $language)
                                                    <option value="{{ $language->id }}">
                                                        {{ $language->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">
                                            {{ translate('Organiser and certificate') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text"
                                                placeholder="{{ translate('Organiser and certificate') }}"
                                                id="organiser_certificate" name="organiser_certificate"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <!--Course Instructor -->
                                    <div class="form-group row" id="country">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Course Instructor') }}
                                            <span class="text-danger">*</span>

                                        </label>
                                        <div class="col-md-9">
                                            <select class="form-control aiz-selectpicker" name="user_id	" id="user_id	"
                                                data-live-search="true" title="{{ translate('Course Instructor') }}">
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">
                                                        {{ $user->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--Course Instructor-2 -->
                                    <div class="form-group row" id="country">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Course Instructor 2') }}
                                        </label>
                                        <div class="col-md-9">
                                            <select class="form-control aiz-selectpicker" name="training_instructors[]"
                                                id="user_id" data-live-search="true"
                                                title="{{ translate('Course Instructor 2') }}">
                                                <option value="">Select Training Instructor</option>
                                                @foreach (getCourseInstructors() as $instructor)
                                                    <option value="{{ $instructor['id'] }}">
                                                        {{ $instructor['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--Course Instructor-3 -->
                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Course Instructor 3') }}
                                        </label>
                                        <div class="col-md-9">
                                            <select class="form-control aiz-selectpicker" name="training_instructors[]"
                                                id="user_id" data-live-search="true"
                                                title="{{ translate('Course Instructor 3') }}">
                                                <option value="">Select Training Instructor</option>
                                                @foreach (getCourseInstructors() as $instructor)
                                                    <option value="{{ $instructor['id'] }}">
                                                        {{ $instructor['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Instructor Descriptions') }}
                                        </label>
                                        <div class="col-md-9">
                                            <textarea class="aiz-text-editor" name="instructor_descriptions"></textarea>
                                        </div>
                                    </div>

                                </div>
                                 {{-- attachments --}}
                            <div class="form-group row">
                                <label class="form-label col-md-3">{{ translate('Training Image') }}
                                <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <div class="input-group " data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse') }}</div>
                                        </div>
                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                        <input type="hidden" name="attachment" class="selected-files" required>
                                    </div>
                                    <div class="file-preview"></div>
                                </div>

                            </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">{{ translate('Slug') }}
                                            <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="{{ translate('Slug') }}" name="slug"
                                                id="slug" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Course objectives') }}
                                        </label>
                                        <div class="col-md-9">
                                            <textarea class="aiz-text-editor" name="course_objectives"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Learning outcomes') }}
                                        </label>
                                        <div class="col-md-9">
                                            <textarea class="aiz-text-editor" name="learning_outcomes"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Teaching and learning methods') }}
                                        </label>
                                        <div class="col-md-9">
                                            <textarea class="aiz-text-editor" name="teaching_learning_methods"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Teaching Resources') }}
                                        </label>
                                        <div class="col-md-9">
                                            <textarea class="aiz-text-editor" name="teaching_resources"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">
                                            {{ translate('Training Seat') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="number" placeholder="{{ translate('Seat No.') }}"
                                                name="seat" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- Training Status -->
                                    <div class="form-group row" id="status">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Training Status') }}
                                            <span class="text-danger">*</span>

                                        </label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="status" id="status"
                                                data-live-search="true" title="{{ translate('Training Status') }}">
                                                <option value="" selected>Select Training Status</option>
                                                <option value="private">Private</option>
                                                <option value="public">Public</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Zoom link -->
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">
                                            {{ translate('Zoom link') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="url" placeholder="{{ translate('Zoom Link') }}"
                                                name="zoom_link" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-right">
                                        <button type="submit" class="btn btn-primary">
                                            {{ translate('Save') }}
                                        </button>
                                    </div>

                            </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        function makeSlug(val) {
            let str = val;
            let output = str.replace(/\s+/g, '-').toLowerCase();
            $('#slug').val(output);
        }

        // add date dyanamic
        let add_date = 0;
        $('#addDate').click(function() {
            ++add_date;
            $('#trainingDateTable').append(
                '<tr><td><div class="form-group row"><label class="col-md-3 col-form-label">Training Date</label><div class="col-md-8"><input type="date" placeholder="Select Date" name="training_date[]" class="form-control"></div><div class="col-md"> <button type="button" class="btn btn-circle btn-danger" id="removeDate">X</button></div></div><div class="form-group row"><label class="col-md-3 col-form-label">Training Date Description</label><div class="col-md-9"><textarea name="date_description[]" rows="5"class="form-control"></textarea></div></div></td></tr>'
            );
        });

        $(document).on('click', '#removeDate', function() {
            console.log('remove');
            $(this).parents('tr').remove();
        });
    </script>
@endsection
