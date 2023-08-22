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
                            <h1 class="fs-16 fw-700">{{ translate('Edit seminar') }}</h1>
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 h6">{{translate('Seminar Information')}}</h5>
                        </div>
                        <div class="card-body">
                            <form id="add_form" class="form-horizontal" action="{{route('seminar.store')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">
                                        {{translate('Seminar Title')}}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="{{translate('Seminar Title')}}" onkeyup="makeSlug(this.value)" id="title" name="title" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <table class="table table-borderless mb-0" id="seminarDateTable">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label">
                                                            {{translate('Seminar Date')}}
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input
                                                                type="text"
                                                                placeholder="{{translate('Select Date')}}"
                                                                name="seminar_date[]"
                                                                class="form-control"
                                                                onfocus="(this.type='date')"
                                                                onblur="(this.type='text')"
                                                            >
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="form-group mb-4 text-left">
                                    <button
                                        type="button"
                                        class="btn btn-circle btn-info"
                                        id="addDate"
                                    >
                                        {{translate('Add Date')}}
                                    </button>
                                </div>

                                <div class="form-group row" id="category">
                                    <label class="col-md-3 col-from-label">
                                        {{translate('Seminar Mode')}}
                                        <span class="text-danger">*</span>

                                    </label>
                                    <div class="col-md-9">
                                        <select class="form-control aiz-selectpicker" name="category_id" id="category_id" data-live-search="true" title="{{ translate('Select Seminar Mode') }}">
                                            @foreach ($seminar_mode as $mode)
                                            <option value="{{ $mode->id }}">
                                                {{ $mode->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row" id="level">
                                    <label class="col-md-3 col-from-label">
                                        {{translate('Software Package')}}
                                        <span class="text-danger">*</span>

                                    </label>
                                    <div class="col-md-9">
                                        <select class="form-control aiz-selectpicker" name="level_id" id="level_id" data-live-search="true" title="{{ translate('Select Software Package') }}">

                                            @foreach ($seminar_software as $software)
                                            <option value="{{ $software->id }}">
                                                {{$software->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">
                                        {{translate('Software Description')}}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <textarea name="software_description" rows="5" class="form-control" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group row" id="university">
                                    <label class="col-md-3 col-from-label">
                                        {{translate('Language')}}
                                        <span class="text-danger">*</span>

                                    </label>
                                    <div class="col-md-9">
                                        <select class="form-control aiz-selectpicker" name="university_id" id="university_id" data-live-search="true" title="{{ translate('Select university') }}">

                                            @foreach ($languages as $language)
                                            <option value="{{ $language->id }}">
                                                {{$language->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">
                                        {{translate('Organiser and certificate')}}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="{{translate('Organiser and certificate')}}"  id="website_link" name="website_link" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row" id="country">
                                    <label class="col-md-3 col-from-label">
                                        {{translate('Course Instructor')}}
                                        <span class="text-danger">*</span>

                                    </label>
                                    <div class="col-md-9">
                                        <select class="form-control aiz-selectpicker" name="country_id" id="country_id" data-live-search="true" title="{{ translate('Course Instructor') }}" required>
                                            @foreach ($users as $user)
                                            <option value="{{ $user->id }}">
                                                {{$user->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">
                                        {{translate('Instructor Descriptions')}}
                                    </label>
                                    <div class="col-md-9">
                                        <textarea class="aiz-text-editor" name="course_schedule"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">{{translate('Slug')}}
                                        <span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="{{translate('Slug')}}" name="slug" id="slug" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">
                                        {{translate('Course objectives')}}
                                    </label>
                                    <div class="col-md-9">
                                        <textarea class="aiz-text-editor" name="course_objectives"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">
                                        {{translate('Learning outcomes')}}
                                    </label>
                                    <div class="col-md-9">
                                        <textarea class="aiz-text-editor" name="learning_outcomes"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">
                                        {{translate('Teaching and learning methods')}}
                                    </label>
                                    <div class="col-md-9">
                                        <textarea class="aiz-text-editor" name="teaching_learning_methods"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">
                                        {{translate('Teaching Resources')}}
                                    </label>
                                    <div class="col-md-9">
                                        <textarea class="aiz-text-editor" name="teaching_resources"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">
                                        {{translate('Seminar Seat')}}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <input type="number" placeholder="{{translate('Seat No.')}}" name="seat" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group mb-0 text-right">
                                    <button type="submit" class="btn btn-primary">
                                        {{translate('Save')}}
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
