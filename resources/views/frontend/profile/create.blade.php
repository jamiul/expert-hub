@extends('frontend.layouts.front-layout')
@section('content')
    @include('frontend.home.register.partials._breadcrumb')
    @livewire('profile-wizard')
@endsection