@extends('admin.layouts.app')
@section('content')
    @include('admin.about-us.partials._main')
    <!--.//main_layout-->
    @include('admin.about-us.partials._modals')
    <x-toaster/>
@endsection
