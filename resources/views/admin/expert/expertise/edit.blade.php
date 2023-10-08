@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card">
                <div class="card-header">
                    <h1 class="mb-0 h6">{{ translate('Edit Expertise') }}</h1>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('expertise.update', $expertise->id) }}" method="POST"
                        enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">{{ translate('Name') }}</label>
                            <input type="text" id="name" name="name" value="{{ $expertise->name }}"
                                class="form-control" required>
                        </div>
                        <div class="form-group mb-3 mt-4">
                            <select class="form-control aiz-selectpicker" name="parent_id" id="parent_id"
                                data-live-search="true" data-selected="{{ optional($expertise->parent)->id }}"
                                title="{{ translate('Select category') }}">
                                @foreach ($expertiseList as $parent)
                                    <option value="{{ $parent->id }}">
                                        {{ $parent->name }}
                                    </option>
                                @endforeach
                            </select>


                        </div>
                        <div class="form-group mb-3 text-right">
                            <button type="submit" class="btn btn-primary">{{ translate('Update expert') }}</button>
                        </div>
                    </form>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->
@endsection
