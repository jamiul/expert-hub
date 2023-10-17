@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{ translate('All Categories') }}</h5>
                </div>
                <div class="card-body">
                    <table class="table aiz-table mb-0">
                        <thead>
                            <tr>
                                <th>{{ translate('ID') }}</th>
                                <th>{{ translate('Name') }}</th>
                                <th>{{ translate('Parent') }}</th>
                                <th>{{ translate('Description') }}</th>
                                <th>{{ translate('Icon') }}</th>
                                <th class="text-right">{{ translate('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($consultantCategories as $key => $consultantCategory)
                                <tr>
                                    <td>{{ $key + 1 + ($consultantCategories->currentPage() - 1) * $consultantCategories->perPage() }}
                                    </td>
                                    <td>{{ $consultantCategory->name }}</td>
                                    @php
                                        $parent = \App\Models\ProjectCategory::where('id', $consultantCategory->parent_id)->first();
                                    @endphp
                                    <td>
                                        @if ($parent != null)
                                            {{ $parent->name }}
                                        @else
                                            {{ translate('No Parent') }}
                                        @endif
                                    </td>
                                    <td>
                                        {{ $consultantCategory->description }}
                                    </td>
                                    <td>
                                        <div class="p-2 bg-secondary" style="width: fit-content;">
                                            <span class="avatar avatar-square avatar-xs">
                                                <img src="{{ customAsset($consultantCategory->photo) }}">
                                            </span>
                                        </div>
                                    </td>

                                    <td class="text-right">
                                        @can('project cat edit')
                                            <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                                href="{{ route('consultant-categories.edit', encrypt($consultantCategory->id)) }}"
                                                title="{{ translate('Edit') }}">
                                                <i class="las la-edit"></i>
                                            </a>
                                        @endcan
                                        @can('project cat delete')
                                            <a href="#"
                                                class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                                data-href="{{ route('consultant-categories.delete', $consultantCategory->id) }}"
                                                title="{{ translate('Delete') }}">
                                                <i class="las la-trash"></i>
                                            </a>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        {{ $consultantCategories->links() }}
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{ translate('Add New Category') }}</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('consultant-categories.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">{{ translate('Name') }}</label>
                            <input type="text" id="name" name="name"
                                placeholder="{{ translate('Category Name') }}" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="parent_id">{{ translate('Parent') }}</label>
                            <select class="select2 form-control aiz-selectpicker" name="parent_id" data-toggle="select2"
                                data-placeholder="Choose ..." data-live-search="true">
                                <option value="0">{{ translate('No Parent') }}</option>
                                @foreach (\App\Models\ProjectCategory::all() as $projectCat)
                                    <option value="{{ $projectCat->id }}">{{ $projectCat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">{{ translate('Description') }}</label>
                            <textarea type="text" rows="3" id="description" name="description"
                                placeholder="{{ translate('Write your text....') }}" class="form-control" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="image">{{ translate('Icon') }}</label>
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse') }}</div>
                                </div>
                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                <input type="hidden" name="photo" class="selected-files">
                            </div>

                            <small class="form-text text-muted">.svg {{ translate('file recommended') }}</small>
                        </div>
                        @can('project cat create')
                            <div class="form-group mb-3 text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Save New Category') }}</button>
                            </div>
                        @endcan

                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
@section('modal')
    @include('admin.partials.delete_modal')
@endsection