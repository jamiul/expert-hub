@extends('frontend.layouts.app')

@section('content')
<section class="my-60">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="sidebar-layout left-sidebar-layout find-projects-layout">

                    @livewire('find-projects.filter')
                    @livewire('find-projects.lists')

                </div>
            </div>
        </div>
    </div>
</section>
<div class="require-main find-projects-require-main project-instruction">
    <div class="container">
        <div class="heading">
            <h4>Require steps</h4>
            <h2>The Work you Want, All in the One Place</h2>
            <p>We are the largest, globally connected network of top academic talent, and we're prepared to tackle
                your most critical projects.</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="require-block">
                    <div class="require-arrow">
                        <img src="http://127.0.0.1:8000/assets/frontend/img/require-arrow.png">
                    </div>
                    <div class="require-img">
                        <img src="http://127.0.0.1:8000/assets/frontend/img/require1.png">
                        <img class="number" src="http://127.0.0.1:8000/assets/frontend/img/require-n1.png">
                    </div>
                    <div class="require-text">
                        <h3>Create a Profile</h3>
                        <p>Highlight your skills and experience, show your portfolio, and set your ideal pay
                            rate.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="require-block">
                    <div class="require-arrow">
                        <img src="http://127.0.0.1:8000/assets/frontend/img/require-arrow.png">
                    </div>
                    <div class="require-img">
                        <img src="http://127.0.0.1:8000/assets/frontend/img/require2.png">
                        <img class="number" src="http://127.0.0.1:8000/assets/frontend/img/require-n2.png">
                    </div>
                    <div class="require-text">
                        <h3>Submit Project <br> Interest</h3>
                        <p>Review expressions of interest from our network of academic experts who are interested in
                            working on your project.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="require-block">
                    <div class="require-arrow">
                        <img src="http://127.0.0.1:8000/assets/frontend/img/require-arrow.png">
                    </div>
                    <div class="require-img">
                        <img src="http://127.0.0.1:8000/assets/frontend/img/require3.png">
                        <img class="number" src="http://127.0.0.1:8000/assets/frontend/img/require-n3.png">
                    </div>
                    <div class="require-text">
                        <h3>Complete the <br> Project</h3>
                        <p>Check steps off as you finish and work with your client if you have questions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="require-block">
                    <div class="require-img">
                        <img src="http://127.0.0.1:8000/assets/frontend/img/require4.png">
                        <img class="number" src="http://127.0.0.1:8000/assets/frontend/img/require-n4.png">
                    </div>
                    <div class="require-text">
                        <h3>Get paid <br> securely</h3>
                        <p>Payment held in escrow until project is complete to your satisfection</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4">
        <div class="text-center">
            <a href="" class="btn btn-primary btn-md">Get Started</a>
        </div>
    </div>
</div>
@endsection

@push('bottom_scripts')
<script>
    function toggleAccordion(header) {
        header.classList.toggle("accordion-item-active");
        var content = header.nextElementSibling;
        content.style.display = (content.style.display === 'block') ? 'none' : 'block';
    }
</script>
@vite('resources/js/expert.js')
@vite('resources/js/find-project.js')
@endpush
