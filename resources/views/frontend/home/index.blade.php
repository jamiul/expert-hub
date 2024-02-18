@extends('frontend.layouts.app')

@section('content')
    @include('frontend.home.partials._product_slider')
    <div class="page-section work-steps-section">
        <div class="container">
            <div style="max-width: 725px; margin-bottom: 75px" class="section-title-wrapper text-center mx-auto">
                <h2 class="section-title">Required Steps</h2>
                <p class="section-title-lead">Navigating the ExpertGate Platform</p>
                <p class="section-title-summary">Step into the largest global network of academic and industry experts, ready to tackle your most complex projects. Find the perfect expert for your project with our simple, four-step process.</p>
            </div>
            <div class="work-steps-wrapper">
                <div class="work-steps-box">
                    <div class="work-steps-icon">
                        <span>1</span>
                        <img src="<?php echo e(asset('assets/frontend/img/step-post-project.svg')); ?>">
                    </div>
                    <div class="work-steps-content">
                        <h3 class="h6">Post Your Project</h3>
                        <p>Whether it's a university, organisational or personal project, our academic and industry experts are here to help.</p>
                    </div>
                </div> <!--work-steps-box-->
                <div class="work-steps-box">
                    <div class="work-steps-icon">
                        <span>2</span>
                        <img src="<?php echo e(asset('assets/frontend/img/step-interest.svg')); ?>">
                    </div>
                    <div class="work-steps-content">
                        <h3 class="h6">Expressions of Interest</h3>
                        <p>Highly-qualified academic and industry experts will express interest if they are available to contribute to your project.</p>
                    </div>
                </div> <!--work-steps-box-->
                <div class="work-steps-box">
                    <div class="work-steps-icon">
                        <span>3</span>
                        <img src="<?php echo e(asset('assets/frontend/img/step-perfect-match.svg')); ?>">
                    </div>
                    <div class="work-steps-content">
                        <h3 class="h6">Choose Your Perfect Match</h3>
                        <p>Make an informed choice by selecting the academic or industry expert who aligns best with your project requirements.</p>
                    </div>
                </div> <!--work-steps-box-->
                <div class="work-steps-box">
                    <div class="work-steps-icon">
                        <span>4</span>
                        <img src="<?php echo e(asset('assets/frontend/img/step-pay.svg')); ?>">
                    </div>
                    <div class="work-steps-content">
                        <h3 class="h6" style="max-width: 120px">Pay Securely</h3>
                        <p>Book with confidence as your payment is held securely in escrow until the project is completed to your satisfaction.</p>
                    </div>
                </div> <!--work-steps-box-->
            </div>
            <div style="margin-top: 36px" class="text-center">
                <a href="{{ route('auth.registration') }}" class="btn btn-primary btn-md" style="width: 218px">Get Started</a>
            </div>
        </div>
    </div>

    @include('frontend.home.partials._categories_main')
    <section class="page-section team-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-title-wrapper">
                        <h2 class="section-title">BUILD A TEAM</h2>
                        <p class="section-title-lead">Create an On-Demand Team with ExpertGate</p>
                        <p class="section-title-summary">At ExpertGate, we not only provide access to a global network of academic and industry experts but also empower you to build your own expert team tailored to your project's needs. Whether it's for a university or an organisation, our platform simplifies the process of assembling a team of specialists, making it an easy, secure, and effective collaboration.</p>
                        {{-- <a href="{{ route('find.experts') }}" class="btn btn-primary btn-md">Get Started</a> --}}
                    </div>
                </div>
                <div class="col-lg-7">
                    @livewire('about.team')
                </div>
            </div>
        </div>
    </section>
    
    @include('frontend.page-sections.why-choose')

    @include('frontend.home.partials._academic_block')
    <section class="page-section scholarship-section bg-white">
        @livewire('home.scholarship-list')
    </section>
    @livewire('skill-sets')
@endsection
