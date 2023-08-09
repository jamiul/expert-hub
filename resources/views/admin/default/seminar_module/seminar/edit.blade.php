@extends('admin.default.layouts.app')
@section('content')

<div class="row">
  <div class="col-lg-8 mx-auto">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Scholarship Information')}}</h5>
      </div>
      <div class="card-body">
        <form id="add_form" class="form-horizontal" action="{{ route('scholarship.update',$scholarship->id) }}"
          method="POST">
          @csrf
          @method('PATCH')
          <div class="form-group row">
            <label class="col-md-3 col-form-label">
              {{translate('Scholarship Title')}}
              <span class="text-danger">*</span>
            </label>
            <div class="col-md-9">
              <input type="text" placeholder="{{translate('Scholarship  Title')}}" onkeyup="makeSlug(this.value)"
                id="title" name="title" value="{{ $scholarship->title }}" class="form-control" required>
            </div>
          </div>
          <div class="form-group row" id="category">
            <label class="col-md-3 col-from-label">
              {{translate('Category')}}
              <span class="text-danger">*</span>
            </label>
            <div class="col-md-9">
              <select class="form-control aiz-selectpicker" name="category_id" id="category_id" data-live-search="true"
                title="{{ translate('Select category') }}" required
                data-selected="{{ optional($scholarship->category)->id }}">
                @foreach ($scholarship_categories as $category)
                <option value="{{ $category->id }}">
                  {{ $category->category_name }}
                </option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row" id="category">
            <label class="col-md-3 col-from-label">
              {{translate('Study Level')}}
              <span class="text-danger">*</span>
            </label>
            <div class="col-md-9">
              <select class="form-control aiz-selectpicker" name="level_id" id="level_id" data-live-search="true"
                title="{{ translate('Select study level') }}" required
                data-selected="{{ optional($scholarship->level)->id }}">
                @foreach ($scholarship_levels as $level)
                <option value="{{ $level->id }}">
                  {{$level->level_name }}
                </option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row" id="university">
            <label class="col-md-3 col-from-label">
              {{translate('University')}}
              <span class="text-danger">*</span>
            </label>
            <div class="col-md-9">
              <select class="form-control aiz-selectpicker" name="university_id" id="university_id"
                data-live-search="true" title="{{ translate('select university') }}" required
                data-selected="{{ optional($scholarship->university)->id }}">
                @foreach ($scholarship_universities as $university)
                <option value="{{ $university->id }}">
                  {{$university->university_name }}
                </option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label">
              {{translate('Website Link')}}
              <span class="text-danger">*</span>
            </label>
            <div class="col-md-9">
              <input type="text" placeholder="{{translate('website link')}}" id="website_link" name="website_link"
                value="{{ $scholarship->website_link }}" class="form-control" required>
            </div>
          </div>
          <div class="form-group row" id="country">
            <label class="col-md-3 col-from-label">
              {{translate('Country')}}
              <span class="text-danger">*</span>
            </label>
            <div class="col-md-9">
              <select class="form-control aiz-selectpicker" name="country_id" id="country_id" data-live-search="true"
                title="{{ translate('select Country') }}" required
                data-selected="{{ optional($scholarship->category)->id }}">
                @foreach ($scholarship_country as $country)
                <option value="{{ $country->id }}">
                  {{$country->country_name }}
                </option>
                @endforeach
              </select>
            </div>
          </div>
          <!-- <div class="form-group row" id="country">
                        <label class="col-md-3 col-from-label">
                            {{translate('Country')}}
                            <span class="text-danger">*</span>

                        </label>
                        <div class="col-md-9">
                            <select class="form-control aiz-selectpicker" name="country_id" id="country_id" data-live-search="true" title="{{ translate('Select Country') }}" data-selected="{{ optional($scholarship->category)->id }} " required>

                                @foreach ($scholarship_country as $country)
                                <option value="{{ $level->id }}">
                                    {{$country->country_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div> -->

          <div class="form-group row" id="city">
            <label class="col-md-3 col-from-label">
              {{translate('City')}}
              <span class="text-danger">*</span>

            </label>
            <div class="col-md-9">
              <select class="form-control aiz-selectpicker" name="city_id" id="city_id" data-live-search="true"
                title="{{ translate('Select City') }}" data-selected="{{ optional($scholarship->city)->id }}" required>

                @foreach ($scholarship_city as $city)
                <option value="{{$city->id}}">
                  {{$city->city_name }}
                </option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row" id="city">
            <label class="col-md-3 col-from-label">
              {{translate('Who can apply')}}
              <span class="text-danger">*</span>
            </label>
            <div class="col-md-9">
              <select class="form-control aiz-selectpicker" name="whoCanApply_id" id="whoCanApply_id"
                data-live-search="true" title="{{ translate('Who can apply') }} "
                data-selected="{{ optional($scholarship->whoCanApply)->id }}" required>
                @foreach ($scholarship_whoCanApply as $title)
                <option value="{{$title->id}}">
                  {{$title->title }}
                </option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row" id="qualification">
            <label class="col-md-3 col-from-label">
              {{translate('Qualification')}}
              <span class="text-danger">*</span>

            </label>
            <div class="col-md-9">
              <select class="form-control aiz-selectpicker" name="qualification_id" id="qualification_id"
                data-live-search="true" title="{{ translate('Select qualification') }}"
                data-selected="{{optional($scholarship->qualification)->id}}" required>
                @foreach ($scholarship_qualification as $qualification)
                <option value="{{$qualification->id}}">
                  {{$qualification->qualification_name }}
                </option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row" id="fieldOfStudy">
            <label class="col-md-3 col-from-label">
              {{translate('Field of study')}}
              <span class="text-danger">*</span>
            </label>

            <div class="col-md-9">
              <select multiple class="form-control aiz-selectpicker" name="fieldStudy_id[]" id="fieldStudy_id"
                data-live-search="true" title="{{ translate('Select qualification')}}"
                data-selected="{{optional($scholarship->fieldStudy)->id }}" required>
                @foreach ($scholarship_fieldStudy as $fieldStudy)
                <option value=" {{$fieldStudy->id}}">
                  {{$fieldStudy->name }}
                </option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Slug')}}</label>
            <div class="col-md-9">
              <input type="text" placeholder="{{translate('Slug')}}" name="slug" id="slug"
                value="{{ $scholarship->slug }}" class="form-control" required>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="signinSrEmail">
              {{translate('Banner')}}
              <small>(1300x650)</small>
            </label>
            <div class="col-md-9">
              <div class="input-group" data-toggle="aizuploader" data-type="image">
                <div class="input-group-prepend">
                  <div class="input-group-text bg-soft-secondary font-weight-medium">
                    {{ translate('Browse')}}
                  </div>
                </div>
                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                <input type="hidden" name="banner" class="selected-files" value="{{ $scholarship->banner }}">
              </div>
              <div class="file-preview box sm">
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-3 col-form-label">
              {{translate('Short Description')}}
              <span class="text-danger">*</span>
            </label>
            <div class="col-md-9">
              <textarea name="short_description" rows="5"
                class="form-control">{{ $scholarship->short_description }}</textarea>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-3 col-from-label">
              {{translate('Description')}}
            </label>
            <div class="col-md-9">
              <textarea class="aiz-text-editor" name="description">{{ $scholarship->description }}</textarea>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Meta Title')}}</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="meta_title" value="{{ $scholarship->meta_title }}"
                placeholder="{{translate('Meta Title')}}">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="signinSrEmail">
              {{translate('Meta Image')}}
              <small>(200x200)+</small>
            </label>
            <div class="col-md-9">
              <div class="input-group" data-toggle="aizuploader" data-type="image">
                <div class="input-group-prepend">
                  <div class="input-group-text bg-soft-secondary font-weight-medium">
                    {{ translate('Browse')}}
                  </div>
                </div>
                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                <input type="hidden" name="meta_img" class="selected-files" value="{{ $scholarship->meta_img }}">
              </div>
              <div class="file-preview box sm">
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Meta Description')}}</label>
            <div class="col-md-9">
              <textarea name="meta_description" rows="5"
                class="form-control">{{ $scholarship->meta_description }}</textarea>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-3 col-form-label">
              {{translate('Meta Keywords')}}
            </label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="meta_keywords" name="meta_keywords"
                value="{{ $scholarship->meta_keywords }}" placeholder="{{translate('Meta Keywords')}}">
            </div>
          </div>

          <div class="form-group mb-0 text-right">
            <button type="submit" class="btn btn-primary">
              {{translate('Save')}}
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
</script>
@endsection