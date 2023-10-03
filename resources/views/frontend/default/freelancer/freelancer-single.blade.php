@extends('frontend.default.layouts.app')
@push('top_styles')
    <link rel="stylesheet" href="{{ asset('assets/frontend/default/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font/site-font/Colfax-Black.otf') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/default/css/single-Profile.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100&display=swap" rel="stylesheet">
@endpush
@section('content')
    <div class="position-relative freelancer-Profile-main-section border-bottom">
        @include('frontend.default.freelancer.breadcrumb')

        <div class="container rounded-1 mt-5">
            <div class="">
                <div class="row">
                    <div class="col-lg-5 col-xl-4 col-md-4 col-12 shadow-right-xl shadow-sm pr-0 h-50 p-0 m-0">
                        @include('frontend.default.freelancer.left-side')
                    </div>
                    <div class="col-lg-7 col-xl-8 col-12 pl-lg-3 col-md-8 col-12 mt-3 mt-lg-0  mt-md-0">
                        @include('frontend.default.freelancer.right-side')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('modal')
    @include('frontend.default.partials.bookmark_remove_modal')
@endsection

@push('script')
    {{-- script added here  --}}
    <script>
        function updateTime() {
            const localTimeElement = document.getElementById('local-time');
            const currentDate = new Date();

            const options = {
                hour: 'numeric',
                minute: 'numeric',
                // second: 'numeric'
            };
            const localTimeString = currentDate.toLocaleTimeString(undefined, options);

            localTimeElement.textContent = localTimeString + ' local Time ';

            // Set the interval to update the time every second
            setTimeout(updateTime, 1000);
        }

        // Call the function to update the time initially
        updateTime();
    </script>
@endpush
