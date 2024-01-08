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

        <!-- <div class="content__wrapper"> -->
        <main class="admin-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <section class="admin-dashboard-area-client  mx-auto ">

                            <div class="dashboard-inprogress-area">
                                <div class="dashboard-inprogress">
                                    <div class="admin-tab-nav-area-client d-flex flex-row justify-content-between">

                                        <div class="admin-client-title">
                                            <h4>{{ __('admin.Notifications') }}</h4>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="balance-table-area-admin d-flex flex-column table-responsive">

                                                @livewire('admin.notifications')

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </section>
                    </div>
                </div>
            </div>
        </main>
    </div>


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
