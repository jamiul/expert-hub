@extends('frontend.layouts.front-admin-dashboard-layout')

@section('content')

    <main class="main__layout d-flex">
        <!-- start left sidebar -->
        <div class="left__sidebar">
            @include('figma/adminleftsidebar')
        </div>
        <!-- end left sidebar -->

        <div class="main__content__wrapper col">
            <!-- start header -->
            <div class="header__wrapper py-2 bg-white">
                @include('figma/admintopbar')
            </div>
            <!-- end header -->
            @livewire('admin.scholarships.table')
            <x-toaster/>
    </main>
@endsection
