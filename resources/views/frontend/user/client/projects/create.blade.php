@extends('frontend.layouts.app')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                @include('frontend.user.client.inc.sidebar')

                <div class="aiz-user-panel">
                    <div class="container-main-projects-banner ">
                        <div class="mb-4 mt-lg-1 py-lg-4" style="background:#275846">
                            <div class="row rounded-0 px-2 mx-4">
                                <div class="col-lg-8 col-sm-12 my-auto">
                                    <h3 class="text-white fw-700 fs-30  ">Available Academic Projects
                                    </h3>
                                    <p class="fw-400 text-white text-justify fs-18 mb-2">View available academic projects
                                        and bid on the
                                        ones that match your expertise.
                                    </p>
                                    <a href="register?type=2"
                                        class="btn rounded border site-font fs-20 mt-lg-3 frequently-qsn-title  text-white">Get Started</a>

                                </div>
                                <div class="col-lg-2 col-sm-12 "></div>
                                <div class="col-lg-2 col-sm-12 ">
                                    {{-- <img class=""
                                        src="{{ asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                                        alt=""> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aiz-titlebar mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                {{-- <h1 class="fs-16 fw-700">{{ translate('Post A New Project') }}</h1> --}}
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-2 border-gray-light">
                        {{-- <div class="card-header">
                            <h5 class="mb-0 h6">{{ translate('Post A New Project') }}</h5>
                        </div> --}}
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('projects.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @include('frontend.user.client.projects.form',[
                                    $project = new App\Models\Project(),
                                    'buttonText' => 'Post Project'
                                ])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')

@endsection
