@extends('admin.default.layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Scholarship University Information')}}</h5>
            </div>
            <div class="card-body">
                <form id="add_form" class="form-horizontal" action="{{ route('scholarship-university.update', $level->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Name')}}</label>
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('Name')}}" id="university_name" name="university_name" value="{{ $level->university_name }}" class="form-control" required>
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
