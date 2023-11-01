@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.project.partials._details-breadcrumb')
    @include('frontend.project.partials._details-main')
    @include('frontend.project.partials._similar-project')
@endsection


@push('bottom_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
@endpush
