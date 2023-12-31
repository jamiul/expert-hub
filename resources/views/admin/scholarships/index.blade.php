@extends('frontend.layouts.front-admin-dashboard-layout')

@section('content')
<div class="admin-layout" sidebar-size="small">
    <!-- start header -->
    <div class="admin-header">
        @include('figma/admintopbar')
    </div>
    <!-- end header -->
    <!-- start left sidebar -->
    <div class="admin-sidebar">
        @include('figma/adminleftsidebar')
    </div>
    <!-- end left sidebar -->

    <main class="admin-content">
        <div class="container-fluid">
        @livewire('admin.scholarships.table')
        </div>
    </main>
</div>
<x-toaster/>
<script>
        function submenuTrigger(element, event) {
            event.preventDefault();
            element.parentElement.classList.toggle("active-sub-menu");
        }

        function toggleClasses(parentSelector, className) {
            var parentElement = document.querySelector(parentSelector);
            if (parentElement) {
                // Toggle the specified class on the parent element
                parentElement.classList.toggle(className);
            } else {
                console.error('Parent element not found!');
            }
        }

        function removeClass(elementSelector, className) {
            var element = document.querySelector(elementSelector);

            if (element) {
                // Remove the specified class from the element
                element.classList.remove(className);
            } else {
                console.error('Element not found!');
            }
        }
    </script>
@endsection
