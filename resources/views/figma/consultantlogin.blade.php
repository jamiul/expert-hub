@extends('frontend.layouts.front-layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/consultantreg.css') }}">
    <section class="exp-my2">
        <div class="py-4 py-lg-4">
            <div class="container">
                <div class="row clogin">
                    <div class="col-lg-5 col-md-7 mx-auto">
                        <form class="needs-validation" method="post">
                            <div class="card mb-4 rounded-3 shadow-sm py-3">
                                <div class="">
                                    <h4 class="mt-3 text-center mx-auto ff-colfaxbold">Join as an Expert or Client</h4>
                                </div>
                                <div class="card-body my-auto">
                                    <div class="position-relative">
                                        <input class="form-check-input typebtn" type="radio" name="usertype"
                                            id="eduexpert" value="eduexpert" checked>
                                        <label class="w-100 form-check-label typelabel" for="eduexpert">
                                            I'm an Expert
                                        </label>
                                    </div>
                                    <div class="position-relative">
                                        <input class="form-check-input typebtn" type="radio" name="usertype"
                                            id="media_eduexpert" value="media_eduexpert">
                                        <label class="w-100 form-check-label typelabel" for="media_eduexpert">
                                            I’m a Media Expert
                                        </label>
                                    </div>
                                    <div class="position-relative">
                                        <input class="form-check-input typebtn" type="radio" name="usertype"
                                            id="client" value="client">
                                        <label class="w-100 form-check-label typelabel" for="client">
                                            I'm a Client
                                        </label>
                                    </div>
                                    <button type="button"
                                        class="w-100 btn btn-lg btn-primary mt-3 btn-join ff-colfax">Create Account</button>
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
