@extends('frontend.layouts.app')

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                @include('frontend.user.client.inc.sidebar')

                <div class="aiz-user-panel">
                    <div class="aiz-titlebar mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="fs-16 fw-700">{{ translate('Edit Project') }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-2 border-gray-light">
                        <div class="card-header">
                            <h5 class="mb-0 h6">{{ translate('Update project info') }}</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('projects.update',$project->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                                @include('frontend.user.client.projects.form',[
                                    $project = $project,
                                    'buttonText' => 'Update Project'
                                ])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
