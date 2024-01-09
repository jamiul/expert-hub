@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-page-wrapper">
                        <div class="title-page-header">
                            <h1 class="h5 m-0">Notifications</h1>
                        </div>

                        @livewire('expert-notifications')

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
