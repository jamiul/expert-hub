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