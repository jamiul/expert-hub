@extends('frontend.default.layouts.app')

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                @include('frontend.default.user.freelancer.inc.sidebar')

                <div class="aiz-user-panel">
                    <div class="aiz-titlebar mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="fs-16 fw-700">{{ translate('Update Seminar Information') }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="w-100">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">{{ translate('Seminar Information') }}</h5>
                            </div>
                            <div class="card-body">
                                <form id="add_form" class="form-horizontal"
                                    action="{{ route('seminar-consultant.update', $seminar->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">
                                            {{ translate('Seminar Title') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" value="{{ $seminar->title }}"
                                                onkeyup="makeSlug(this.value)" id="title" name="title"
                                                class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <table class="table table-borderless mb-0" id="seminarDateTable">
                                            <tbody>
                                                @if (!$seminar->seminar_dates->isEmpty())
                                                    @foreach ($seminar->seminar_dates as $seminar_date)
                                                        <tr>
                                                            <td>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 col-form-label">
                                                                        {{ translate('Seminar Date') }}
                                                                        <span class="text-danger">*</span>
                                                                    </label>
                                                                    <div class="col-md-9">
                                                                        <input type="text"
                                                                            value="{{ \Carbon\Carbon::parse($seminar_date->seminar_date)->format('Y/m/d') }}"
                                                                            name="seminar_date[]" class="form-control"
                                                                            onfocus="(this.type='date')"
                                                                            onblur="(this.type='text')">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 col-form-label">
                                                                        {{ translate('Seminar Date Description') }}
                                                                    </label>
                                                                    <div class="col-md-9">
                                                                        <textarea name="date_description[]" rows="5" class="form-control">{{ $seminar_date->descriptions }}</textarea>
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
                                    <!-- Seminar Category -->
                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Seminar Category') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <select class="form-control aiz-selectpicker" name="project_category_id"
                                                data-live-search="true">
                                                @foreach (getProjectCategory() as $category)
                                                    <option value="{{ $category['id'] }}"
                                                        {{ $category['id'] == $seminar->project_category_id ? 'selected' : '' }}>
                                                        {{ $category['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Seminar Mode -->
                                    <div class="form-group row" id="category">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Seminar Mode') }}
                                            <span class="text-danger">*</span>

                                        </label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="seminar_mode_id" id="seminar_mode_id"
                                                data-live-search="true">
                                                @foreach (getSeminarModes() as $seminar_mode)
                                                    <option value="{{ $seminar_mode['id'] }}"
                                                        {{ $seminar_mode['id'] == $seminar->seminar_mode_id ? 'selected' : '' }}>
                                                        {{ $seminar_mode['name'] }}
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
                                            <select class="form-control" name="seminar_software_id" id="seminar_software_id"
                                                data-live-search="true" title="{{ translate('Select Software Package') }}">
                                                @foreach (getSeminarSoftwares() as $seminar_software)
                                                    <option value="{{ $seminar_software['id'] }}"
                                                        {{ $seminar_software['id'] == $seminar->seminar_software_id ? 'selected' : '' }}>
                                                        {{ $seminar_software['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Seminar Software Description -->
                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Software Description') }}
                                        </label>
                                        <div class="col-md-9">
                                            <textarea class="aiz-text-editor" name="software_description">{{ $seminar->software_description }}</textarea>
                                        </div>
                                    </div>
                                    <!-- Seminar Language -->
                                    <div class="form-group row" id="language">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Language') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="language_id" id="language_id"
                                                data-live-search="true" title="{{ translate('Select language') }}">
                                                @foreach (getLanguages() as $language)
                                                    <option value="{{ $language['id'] }}"
                                                        {{ $language['id'] == $seminar->language_id ? 'selected' : '' }}>
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
                                            <input type="text"
                                                placeholder="{{ translate('Organiser and Certificate') }}"
                                                id="organiser_certificate" name="organiser_certificate"
                                                value="{{ $seminar->organiser_certificate }}" class="form-control">
                                        </div>
                                    </div>
                                    <!--Course Instructor -->
                                    <div class="form-group row" id="country">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Course Instructor') }}
                                            <span class="text-danger">*</span>

                                        </label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="user_id" id="user_id"
                                                data-live-search="true" title="{{ translate('Course Instructor') }}"
                                                required>
                                                @foreach (getCourseInstructors() as $instructor)
                                                    <option value="{{ $instructor['id'] }}"
                                                        {{ $instructor['id'] == $seminar->user_id ? 'selected' : '' }}>
                                                        {{ $instructor['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!--Course Instructor-2 -->
                                    @foreach ($seminar->seminar_instructors as $seminar_instructor)
                                        <div class="form-group row" id="country">
                                            <label class="col-md-3 col-from-label">
                                                {{ translate('Course Instructor') }} {{ $loop->iteration+1 }}
                                            </label>
                                            <div class="col-md-9">
                                                <select class="form-control aiz-selectpicker" name="seminar_instructors[]"
                                                    id="user_id" data-live-search="true"
                                                    title="{{ translate('Course Instructor 2') }}">
                                                    <option value="">Select Seminar Instructor</option>
                                                    @foreach (getCourseInstructors() as $instructor)
                                                        <option value="{{ $instructor['id'] }}"
                                                            {{ $instructor['id'] == $seminar_instructor['user_id'] ? 'selected' : '' }}>
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
                                            <textarea class="aiz-text-editor" name="instructor_descriptions">{{ $seminar->instructor_descriptions }}</textarea>
                                        </div>
                                    </div>

                                        {{-- attachments --}}
                            <div class="form-group row">
                                <label class="form-label col-md-3">{{ translate('Seminar Image') }}
                                <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <div class="input-group " data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse') }}</div>
                                        </div>
                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                        <input type="hidden" name="attachment" class="selected-files" value="{{ $seminar->attachment }}" required>
                                    </div>
                                    <div class="file-preview"></div>
                                </div>

                            </div>

                                    <!-- Seminar Slug -->
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">{{ translate('Slug') }}
                                            <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" value="{{ $seminar->slug }}" id="slug"
                                                class="form-control" required>
                                        </div>
                                    </div>

                                    <!-- Course objectives -->
                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Course objectives') }}
                                        </label>
                                        <div class="col-md-9">
                                            <textarea class="aiz-text-editor" name="course_objectives">{{ $seminar->course_objectives }}</textarea>
                                        </div>
                                    </div>

                                    <!-- Learning outcomes -->
                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Learning outcomes') }}
                                        </label>
                                        <div class="col-md-9">
                                            <textarea class="aiz-text-editor" name="learning_outcomes">{{ $seminar->learning_outcomes }}</textarea>
                                        </div>
                                    </div>

                                    <!-- Teaching and Learning Methods -->
                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Teaching and Learning Methods') }}
                                        </label>
                                        <div class="col-md-9">
                                            <textarea class="aiz-text-editor" name="teaching_learning_methods">{{ $seminar->teaching_learning_methods }}</textarea>
                                        </div>
                                    </div>

                                    <!-- Teaching Resources -->
                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Teaching Resources') }}
                                        </label>
                                        <div class="col-md-9">
                                            <textarea class="aiz-text-editor" name="teaching_resources">{{ $seminar->teaching_resources }}</textarea>
                                        </div>
                                    </div>

                                    <!-- Seminar Seat -->
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">
                                            {{ translate('Seminar Seat') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="number" value="{{ $seminar->seat }}" name="seat"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- Seminar Status -->
                                    <div class="form-group row" id="status">
                                        <label class="col-md-3 col-from-label">
                                            {{ translate('Seminar Status') }}
                                            <span class="text-danger">*</span>

                                        </label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="status" id="status"
                                                data-live-search="true" title="{{ translate('Seminar Status') }}"
                                                required>
                                                <option value="private"
                                                    {{ $seminar->status == 'private' ? 'selected' : '' }}>Private</option>
                                                <option value="public"
                                                    {{ $seminar->status == 'public' ? 'selected' : '' }}>Public</option>
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
                                            <input type="url" value="{{ $seminar->zoom_link }}" name="zoom_link"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-right">
                                        <button type="submit" class="btn btn-primary">
                                            {{ translate('Update') }}
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
