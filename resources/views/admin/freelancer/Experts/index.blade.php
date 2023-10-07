@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <h1 class="mb-0 h6">{{ translate('Experts list') }}</h1>
                </div>
                <div class="card-body">
                    <table class="table aiz-table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ translate('Experts') }}</th>
                                <th>{{ translate('Parent Expert') }}</th>
                                <th class="text-right">{{ translate('Options') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allExpertList as $key => $expert)
                                <tr>
                                    <td>{{ $key + 1 + ($allExpertList->currentPage() - 1) * $allExpertList->perPage() }}</td>

                                    <td>{{ $expert->name }}</td>

                                    @if ($expert->parent_id != null)

                                        <td >{{$expert->parent->name}}</td>
                                    @else
                                        <td> - </td>
                                    @endif
                                    <td class="text-right">
                                        <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                            href="{{ route('expertise.edit',($expert->id)) }}"
                                            title="{{ translate('Edit') }}">
                                            <i class="las la-edit"></i>
                                        </a>

                                        <a href="#"
                                            class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                            data-href="{{ route('expertise.delete', $expert->id) }}"
                                            title="{{ translate('Delete') }}">
                                            <i class="las la-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="aiz-pagination aiz-pagination-center">
                        {{ $allExpertList->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h1 class="mb-0 h6">{{ translate(' Add New Expertise') }}</h1>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('expertise.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">{{ translate('Name') }}</label>
                            <input type="text" id="name" name="name"
                                placeholder="{{ translate('Eg. wordpress') }}" class="form-control" required>
                        </div>
                        <div class="form-group mb-3 mt-4">
                            <select class="form-control aiz-selectpicker" name="parent_id" id="parent_id"
                                data-live-search="true" title="{{ translate('Select category') }}">
                                @foreach ($experts as $parent)
                                    <option value="{{ $parent->id }}">
                                        {{ $parent->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3 text-right">
                            <button type="submit" class="btn btn-primary">{{ translate('Add New Expert') }}</button>
                        </div>
                    </form>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div>
    </div>
@endsection
@section('modal')
    @include('admin.partials.delete_modal')
@endsection
