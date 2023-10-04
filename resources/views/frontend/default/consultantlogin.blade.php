@extends('frontend.default.layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/consultantreg.css') }}">
    <section class="exp-login">
        <div class="py-4 py-lg-5">
            <div class="container">
                <div class="row clogin">
                    <div class="col-lg-5 col-md-7 mx-auto">
                        <form class="needs-validation" method="post">
                            <div class="card mb-4 rounded-3 shadow-sm pt-4 pb-4">
                                <img class="mb-4 mx-auto logo" src="{{ asset('assets/frontend/default/img/eduexhub.png') }}"
                                    alt="Edu Expert Hub" />
                                <div class="">
                                    <h4 class="mt-3 text-center mx-auto">Join as an Edu Expert or Client</h4>
                                </div>
                                <div class="card-body my-auto">
                                    <div class="custom-input-group first-input my-auto">
                                        <div class="mb-2 p-4 typetab selected-tab">
                                            <img class="icon"
                                                src="{{ asset('assets/frontend/default/img/experticon.png') }}"
                                                alt="Edu Expert" />
                                            <span class="bold-text">I'm an Edu Expert</span>
                                            <input type="radio" name="usertype" id="userexpert" class="checkbox"
                                                value="eduexpert" checked>
                                        </div>
                                    </div>
                                    <div class="custom-input-group mt-3">
                                        <div class="mb-2 p-4 typetab">
                                            <img class="icon"
                                                src="{{ asset('assets/frontend/default/img/experticon.png') }}"
                                                alt="Edu Client" />
                                            <span class="bold-text">I'm a Client</span>
                                            <input type="radio" name="usertype" id="usertype" value="client">
                                        </div>
                                    </div>
                                    <button type="button" class="w-100 btn btn-lg btn-primary mt-3 btn-join ff-colfax">Join
                                        as an Edu
                                        Expert</button>
                                </div>
                                <div class="text-center">
                                    <p class="text-muted mb-0">Already have an account, <a class="exp-signuplink"
                                            href="#">Sign In</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
