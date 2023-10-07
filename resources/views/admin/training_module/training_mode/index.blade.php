@extends('admin.layouts.app')
@section('content')
<div class="aiz-titlebar text-left mt-2 mb-3">
  <div class="row align-items-center">
    <div class="col-md-6">
      <h1 class="h3">{{translate('All training modes')}}</h1>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-7">
    <div class="card">
      <div class="card-header d-block d-md-flex">
        <h5 class="mb-0 h6">{{ translate('Training Modes') }}</h5>
        <form class="" id="sort_categories" action="" method="GET">
          <div class="box-inline pad-rgt pull-left">
            <div class="" style="min-width: 200px;">
              <input type="text" class="form-control" id="search" name="search" @isset($search)
                value="{{ $search }}" @endisset placeholder="{{ translate('Type name & Enter') }}">
            </div>
          </div>
        </form>
      </div>
      <div class="card-body">
        <table class="table aiz-table mb-0">
          <thead>
            <tr>
              <th>#</th>
              <th>{{translate('Name')}}</th>
              <th class="text-right">{{translate('Options')}}</th>
            </tr>
          </thead>
          <tbody>
            @foreach($trainingModes as $key => $trainingMode)

            <tr>
              <td>{{ $key+1 }}</td>
              <td>{{ $trainingMode->name	 }}</td>

              <td class="text-right">
                <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                  href="{{url('admin/training-mode/'.$trainingMode->id.'/edit')}}" title="{{ translate('Edit') }}">
                  <i class="las la-edit"></i>
                </a>
                <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                  title="{{ translate('Delete') }}" onclick="$(this).find('form').submit();">
                  <i class="las la-trash"></i>
                  <form action="{{ route('training-mode.delete', $trainingMode->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                </form>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-5">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0 h6">{{ translate('Add Training Mode') }}</h5>
      </div>
      <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('training-mode.store') }}">
          @csrf
          <div class="form-group mb-3">
            <label for="name">{{translate('Name')}}</label>
            <input type="text" id="mode_name_id" name="name" placeholder="{{ translate('Training Mode Name') }}"
              class="form-control" required>
          </div>
          <div class="form-group mb-3 text-right">
            <button type="submit" class="btn btn-primary">{{translate('Save  New Training Mode')}}</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

@endsection

@section('modal')
@include('admin.partials.delete_modal')
@endsection
