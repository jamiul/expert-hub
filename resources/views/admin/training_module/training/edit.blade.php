@extends('admin.layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{ translate('Update Training Information') }}</h5>
                </div>
                <div class="card-body">
                    <form id="add_form" class="form-horizontal" action="{{ route('training.update', $training->id) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{ translate('Training Title') }}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $training->title }}" onkeyup="makeSlug(this.value)"
                                    id="title" name="title" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <table class="table table-borderless mb-0" id="trainingDateTable">
                                <tbody>
                                    @if (!$training->training_dates->isEmpty())
                                        @foreach ($training->training_dates as $trainingDate)
                                            {{-- @dd($trainingDate->training_date); --}}
                                            <tr>
                                                <td>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label">
                                                            {{ translate('Training Date') }}
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text"
                                                                value="{{ \Carbon\Carbon::parse($trainingDate->training_date)->format('Y/m/d') }}"
                                                                name="training_date[]" class="form-control"
                                                                onfocus="(this.type='date')" onblur="(this.type='text')">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label">
                                                            {{ translate('Training Date Description') }}
                                                        </label>
                                                        <div class="col-md-9">
                                                            <textarea name="date_description[]" rows="5" class="form-control">{{ $trainingDate->descriptions }}</textarea>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
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
                                <select class="form-control aiz-selectpicker" name="project_category_id"
                                    data-live-search="true">
                                    @foreach (getProjectCategory() as $category)
                                        <option value="{{ $category['id'] }}"
                                            {{ $category['id'] == $training->project_category_id ? 'selected' : '' }}>
                                            {{ $category['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Training Mode -->
                        <div class="form-group row mt-2" id="training_mode">
                            <label class="col-md-3 col-from-label mt-2">
                                {{ translate('Training Mode') }}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <select class="form-control" name="training_mode_id" id="training_mode_id"
                                    data-live-search="true">
                                    @foreach (getTrainingModes() as $trainingMode)
                                        <option value="{{ $trainingMode['id'] }}"
                                            {{ $trainingMode['id'] == $training->training_mode_id ? 'selected' : '' }}>
                                            {{ $trainingMode['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Training Software -->
                        <div class="form-group row" id="training_software">
                            <label class="col-md-3 col-from-label">
                                {{ translate('Software Package') }}
                                <span class="text-danger">*</span>

                            </label>
                            <div class="col-md-9">
                                <select class="form-control" name="training_software_id" id="training_software_id"
                                    data-live-search="true" title="{{ translate('Select Software Package') }}">
                                    @foreach (getTrainingSoftwares() as $trainingSoftware)
                                        <option value="{{ $trainingSoftware['id'] }}"
                                            {{ $trainingSoftware['id'] == $training->training_software_id ? 'selected' : '' }}>
                                            {{ $trainingSoftware['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- training Software Description -->
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">
                                {{ translate('Software Description') }}
                            </label>
                            <div class="col-md-9">
                                <textarea class="aiz-text-editor" name="software_description">{{ $training->software_description }}</textarea>
                            </div>
                        </div>
                        <!-- Training Language -->
                        <div class="form-group row" id="language">
                            <label class="col-md-3 col-from-label">
                                {{ translate('Language') }}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <select class="form-control" name="language_id" id="language_id" data-live-search="true"
                                    title="{{ translate('Select language') }}">
                                    @foreach (getLanguages() as $language)
                                        <option value="{{ $language['id'] }}"
                                            {{ $language['id'] == $training->language_id ? 'selected' : '' }}>
                                            {{ $language['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Organiser and Certificate -->
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{ translate('Organiser and Certificate') }}
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="{{ translate('Organiser and Certificate') }}"
                                    id="organiser_certificate" name="organiser_certificate"
                                    value="{{ $training->organiser_certificate }}" class="form-control">
                            </div>
                        </div>
                        {{-- @dd($training->training_instructors); --}}
                            <!--Course Instructors -->
                            @foreach ($training->training_instructors as $trainingInstructor)
                                <div class="form-group row" id="country">
                                    <label class="col-md-3 col-from-label">
                                        {{ translate('Course Instructor') }} {{ $loop->iteration }}
                                    </label>
                                    <div class="col-md-9">
                                        <select class="form-control aiz-selectpicker" name="training_instructors[]"
                                            id="user_id" data-live-search="true"
                                            title="{{ translate('Select Course Instructor') }} {{ $loop->iteration }}">
                                            <option value="">Select Training Instructor</option>
                                            @foreach (getCourseInstructors() as $instructor)
                                                <option value="{{ $instructor['id'] }}"
                                                    {{ $instructor['id'] == $trainingInstructor['user_id'] ? 'selected' : '' }}>
                                                    {{ $instructor['name'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endforeach
                            <!--Course Instructor Descriptions -->
                            <div class="form-group row">
                                <label class="col-md-3 col-from-label">
                                    {{ translate('Instructor Descriptions') }}
                                </label>
                                <div class="col-md-9">
                                    <textarea class="aiz-text-editor" name="instructor_descriptions">{{ $training->instructor_descriptions }}</textarea>
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
                                    <input type="hidden" name="attachment" class="selected-files" value="{{ $training->attachment }}" required>
                                </div>
                                <div class="file-preview"></div>
                            </div>

                        </div>
                        <!-- Training Slug -->
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">{{ translate('Slug') }}
                                <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $training->slug }}" id="slug" class="form-control"
                                    required>
                            </div>
                            <!-- Course objectives -->
                            <div class="form-group row">
                                <label class="col-md-3 col-from-label">
                                    {{ translate('Course objectives') }}
                                </label>
                                <div class="col-md-9">
                                    <textarea class="aiz-text-editor" name="course_objectives">{{ $training->course_objectives }}</textarea>
                                </div>
                            </div>

                            <!-- Learning outcomes -->
                            <div class="form-group row">
                                <label class="col-md-3 col-from-label">
                                    {{ translate('Learning outcomes') }}
                                </label>
                                <div class="col-md-9">
                                    <textarea class="aiz-text-editor" name="learning_outcomes">{{ $training->learning_outcomes }}</textarea>
                                </div>
                            </div>
                            <!-- Teaching and Learning Methods -->
                            <div class="form-group row">
                                <label class="col-md-3 col-from-label">
                                    {{ translate('Teaching and Learning Methods') }}
                                </label>
                                <div class="col-md-9">
                                    <textarea class="aiz-text-editor" name="teaching_learning_methods">{{ $training->teaching_learning_methods }}</textarea>
                                </div>
                            </div>
                            <!-- Teaching Resources -->
                            <div class="form-group row">
                                <label class="col-md-3 col-from-label">
                                    {{ translate('Teaching Resources') }}
                                </label>
                                <div class="col-md-9">
                                    <textarea class="aiz-text-editor" name="teaching_resources">{{ $training->teaching_resources }}</textarea>
                                </div>
                            </div>
                            <!-- Training Seat -->
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">
                                    {{ translate('Training Seat') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-md-9">
                                    <input type="number" value="{{ $training->seat }}" name="seat"
                                        class="form-control" required>
                                </div>
                            </div>

                            <!-- Training Status -->
                            <div class="form-group row" id="status">
                                <label class="col-md-3 col-from-label">
                                    {{ translate('Training Status') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-md-9">
                                    <select class="form-control" name="status" id="status" data-live-search="true"
                                        title="{{ translate('Training Status') }}" required>
                                        <option value="private" {{ $training->status == 'private' ? 'selected' : '' }}>
                                            Private
                                        </option>
                                        <option value="public" {{ $training->status == 'public' ? 'selected' : '' }}>Public
                                        </option>
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
                                    <input type="url" value="{{ $training->zoom_link }}" name="zoom_link"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="form-group mb-0 text-right">
                                <button type="submit" class="btn btn-primary">
                                    {{ translate('Update') }}
                                </button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
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
