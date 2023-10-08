@extends('admin.layouts.app')
@section('content')
    <div class="aiz-titlebar text-left mt-2 mb-3">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('All Training Software') }}</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header d-block d-md-flex">
                    <h5 class="mb-0 h6">{{ translate('Software name') }}</h5>
                    <form class="" id="sort_trainings" action="" method="GET">
                        <div class="box-inline pad-rgt pull-left">
                            <div class="" style="min-width: 200px;">
                                <input type="text" class="form-control" id="search"
                                    name="search"@isset($search) value="{{ $search }}" @endisset
                                    placeholder="{{ translate('Type name & Enter') }}">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <table class="table aiz-table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ translate('Name') }}</th>
                                <th class="text-right">{{ translate('Options') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trainingSoftwares as $key => $trainingSoftware)
                            {{-- @dd($key); --}}
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $trainingSoftware->name }}</td>
                                    <td class="text-right">
                                        <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                            href="{{ url('admin/training-software/' . $trainingSoftware->id . '/edit') }}"
                                            title="{{ translate('Edit') }}">
                                            <i class="las la-edit"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        title="{{ translate('Delete') }}" onclick="$(this).find('form').submit();">
                                            <i class="las la-trash"></i>
                                            <form action="{{ route('training-software.delete', $trainingSoftware->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="aiz-pagination">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{ translate('Add New Software') }}</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('training-software.store') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">{{ translate('Name') }}</label>
                            <input type="text" id="name" name="name"
                                placeholder="{{ translate('Training Software') }}" class="form-control" required>
                        </div>
                        <div class="form-group mb-3 text-right">
                            <button type="submit"
                                class="btn btn-primary">{{ translate('Save New Software') }}</button>
                        </div>
                    </form>
                    {{-- {{ $trainings->links() }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection


@section('modal')
    @include('admin.partials.delete_modal')
@endsection
