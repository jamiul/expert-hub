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
                            <h1 class="h3">{{translate('All Seminar')}}</h1>
                        </div>
                        <div class="col text-right">
                            <a href="{{ route('seminar.create') }}" class="btn btn-circle btn-info">
                                <span>{{translate('Add New Seminar')}}</span>
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
                                    <input type="text" class="form-control form-control-sm" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="{{ translate('Type & Enter') }}">
                                </div>
                            </div>
                        </div>
                        </from>
                        <div class="card-body">
                            <table class="table mb-0 aiz-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                      <th>{{translate('Title')}}</th>
                                        <th data-breakpoints="lg">{{translate('Instructors')}}</th>
                                        <th data-breakpoints="lg">{{translate('Seminar Mode')}}</th>
                                        <th data-breakpoints="lg">{{translate('Date')}}</th>
                                        <th data-breakpoints="lg">{{translate('Software Package')}}</th>
                                        <th data-breakpoints="lg">{{translate('Language')}}</th>
                                        <th class="text-right">{{translate('Options')}}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            Foundations of PLS-SEM Using SmartPLS 4
                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                            Mariola Moeyaert | Associate Professor of Statistics and Director | University at Albany
                                            Mahammad Riyadh | Associate Professor of Statistics and Director | University at Albany
                                        </td>
                                        <td>

                                            Wed Sep 6 – Fri Sep 8, 2023, from 10am – 3pm daily (Australian Eastern Standard Time)
                                        </td>
                                        <td>
                                            R
                                        </td>
                                        <td>
                                            <label class="aiz-switch aiz-switch-success mb-0">

                                                English
                                                <span></span>
                                            </label>
                                        </td>
                                        <td class="text-right">
                                            <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{ route('seminar.edit', 1) }}" title="{{ translate('Edit') }}">
                                                <i class="las la-pen"></i>
                                            </a>

                                            <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="#" title="{{ translate('Delete') }}">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>

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
    @include('admin.default.partials.delete_modal')
@endsection
