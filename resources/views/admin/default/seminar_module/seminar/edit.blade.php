@extends('admin.default.layouts.app')
@section('content')

<div class="row">
  <div class="col-lg-8 mx-auto">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Update Seminar Information')}}</h5>
      </div>
      <div class="card-body">
        <form id="add_form" class="form-horizontal" action="{{ route('seminar.update',$seminar->id) }}"
          method="POST">
          @csrf
          @method('PATCH')

          <div class="form-group row">
            <label class="col-md-3 col-form-label">
                {{translate('Seminar Title')}}
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-9">
                <input
                  type="text"
                  value="{{ $seminar->title }}"
                  onkeyup="makeSlug(this.value)"
                  id="title"
                  name="title"
                  class="form-control"
                  required
                >
            </div>
        </div>

        <div class="form-group row mb-0">
          <table class="table table-borderless mb-0" id="seminarDateTable">
              <tbody>
                @if (! $seminar->seminar_dates->isEmpty())
                  @foreach ( $seminar->seminar_dates as $seminar_date)
                  {{-- @dd($seminar_date->seminar_date); --}}
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
                                      value="{{ \Carbon\Carbon::parse($seminar_date->seminar_date)->format('Y/m/d')}}"
                                      name="seminar_date[]"
                                      class="form-control"
                                      onfocus="(this.type='date')"
                                      onblur="(this.type='text')"
                                  >
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-3 col-form-label">
                                  {{translate('Seminar Date Description')}}
                              </label>
                              <div class="col-md-9">
                                  <textarea
                                      name="date_description[]"
                                      rows="5"
                                      class="form-control"
                                  >{{ $seminar_date->descriptions }}</textarea>
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
            <button
                type="button"
                class="btn btn-circle btn-info"
                id="addDate"
            >
                {{translate('Add Date')}}
            </button>
        </div>
          <!-- Seminar Mode -->
            <div class="form-group row" id="seminar_mode">
              <label class="col-md-3 col-from-label">
                  {{translate('Seminar Mode')}}
                  <span class="text-danger">*</span>

              </label>
              <div class="col-md-9">
                  <select
                      class="form-control"
                      name="seminar_mode_id"
                      id="seminar_mode_id"
                      data-live-search="true"
                  >
                      @foreach (getSeminarModes() as $seminar_mode)
                        <option value="{{ $seminar_mode['id'] }}" {{ $seminar_mode['id'] == $seminar->seminar_mode_id ? 'selected' : ''}}>
                            {{ $seminar_mode['name'] }}
                        </option>
                      @endforeach
                  </select>
              </div>
          </div>

          <div class="form-group mb-0 text-right">
            <button type="submit" class="btn btn-primary">
              {{translate('Update')}}
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