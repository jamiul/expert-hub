@extends('frontend.default.layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                @include('frontend.default.user.freelancer.inc.sidebar')
                <div class="w-100 ml-3">
                    <div class="aiz-titlebar text-left mt-2 mb-3">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <h1 class="h3">{{ translate('All Seminar') }}</h1>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('seminar-consultant.create') }}" class="btn btn-circle btn-info">
                                    <span>{{ translate('Add New Seminar') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <form class="" id="sort_blogs" action="" method="GET">
                            <div class="card-header row gutters-5">
                                <div class="col text-center text-md-left">
                                    <h5 class="mb-md-0 h6">{{ translate('All Seminar posts') }}</h5>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control form-control-sm" id="search"
                                            name="search"@isset($search) value="{{ $search }}" @endisset
                                            placeholder="{{ translate('Type & Enter') }}">
                                    </div>
                                </div>
                            </div>
                            </from>
                            <div class="card-body">
                                <table class="table mb-0 aiz-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ translate('Title') }}</th>
                                            {{-- <th data-breakpoints="lg">{{translate('Instructors')}}</th> --}}
                                            <th data-breakpoints="lg">{{ translate('Seminar Mode') }}</th>
                                            {{-- <th data-breakpoints="lg">{{translate('Date')}}</th> --}}
                                            <th data-breakpoints="lg">{{ translate('Software Package') }}</th>
                                            <th data-breakpoints="lg">{{ translate('Language') }}</th>
                                            <th data-breakpoints="lg">{{ translate('Status') }}</th>
                                            <th class="text-right">{{ translate('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($seminars as $key => $seminar)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>
                                                    {{ $seminar->title }}
                                                </td>
                                                <td>
                                                    {{ getSeminarModeName($seminar->seminar_mode_id) }}
                                                </td>
                                                <td>
                                                    {{ getSoftwarePackageName($seminar->seminar_software_id) }}
                                                </td>
                                                <td>
                                                    {{ getLanguageName($seminar->language_id) }}
                                                </td>
                                                <td>
                                                    {{ $seminar->status }}
                                                </td>
                                                <td class="text-right">
                                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                                        href="{{ route('seminar-consultant.edit', $seminar->id) }}"
                                                        title="{{ translate('Edit') }}">
                                                        <i class="las la-pen"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                                        data-toggle="modal" data-target="#delete-modal_{{ $seminar->id }}"
                                                        data-id={{ $seminar->id }}>
                                                        <i class="las la-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <!-- delete Modal -->
                                            <div id="delete-modal_{{ $seminar->id }}" class="modal fade">
                                                <div class="modal-dialog modal-sm modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title h6">
                                                                {{ translate('Delete Confirmation') }}</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <p class="mt-1">
                                                                {{ translate('Are you sure to delete this?') }}</p>
                                                            <form action="{{ route('seminar-consultant.destroy', $seminar->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button" class="btn btn-link mt-2"
                                                                    data-dismiss="modal">{{ translate('Cancel') }}</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal -->
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="aiz-pagination">

                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('modal')
    {{-- @include('admin.default.partials.delete_modal') --}}
@endsection
