@extends('frontend.layouts.app')

@section('content')
    <section class="inner-page-banner">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="page-title-wrapper">
                        <h1>Welcome to ExpertGate, your ultimate resource for academic empowerment.</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/frontend/img/about-banner-img.png') }}"/>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section bg-white bb-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div style="margin-bottom: 24px" class="section-title-wrapper">
                        <h2 class="section-title">Info</h2>
                        <p class="section-title-lead">About us</p>
                    </div>
                    <p>
                        Welcome to ExpertGate, your one-stop platform for connecting with top academic experts across various fields and disciplines. We cater to diverse clients: universities, businesses, students, and media outlets.
                    </p>
                    <p>
                        For universities, ExpertGate is an invaluable resource for policy development, curriculum design, course accreditation, and program design expertise. Businesses and organisations can leverage our platform to find experts to assist with organisational policies, learning management systems, and project management. Students seeking to develop their research and writing skills or needing advice on scholarships will find the guidance they need from our experts. Media outlets can access our expert hub for media interviews or insights into various academic fields.
                    </p>
                    <p>
                        Our global platform transcends borders, providing an international perspective that's invaluable in addressing educational challenges and opportunities. We offer extensive services catering to a wide spectrum of needs, including curriculum development, policy formulation, scholarship advice, and complete educational project management.
                    </p>
                    <p>
                        Navigating our platform is easy, thanks to our intuitive user interface. You can effortlessly post academic projects, review expressions of interest from top academic experts, and make informed decisions aligned with your goals. Plus, we prioritise security by holding payments in escrow until project completion, ensuring satisfaction in every collaboration. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div style="margin-bottom: 18px" class="section-title-wrapper mx-auto text-center">
                        <h2 class="section-title">EXPERTS</h2>
                        <p class="section-title-lead">Meet Our Top Experts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    @livewire('experts.slider')
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="{{ route('find.experts') }}" style="width: 195px" class="btn btn-md btn-outline-primary border-2">View All</a>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section page-section-bg company-mission-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="section-image">
                        <img src="{{ asset('assets/frontend/img/company-mission.jpg') }}"/>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="section-content">
                        <div style="margin-bottom: 24px" class="section-title-wrapper">
                            <h2 class="section-title">OUR MISSION</h2>
                            <p class="section-title-lead">Bridging the Gap Between Academia and Industry</p>
                        </div>
                        <p>
                            ExpertGate's mission is to redefine collaboration between academia and industry to empower individuals, educational institutions, and industries. We strive to bridge the gap by offering a user-friendly platform that connects clients with expert solutions tailored to their specific needs. At the same time, we provide experts with diverse opportunities for impactful contributions and global recognition. Our commitment is to simplify access to academic and industry expertise, breaking down barriers and making world-class knowledge accessible to everyone, everywhere.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section speciality-section bg-white">
        <div class="container">
            <div style="" class="section-title-wrapper text-center mb-40">
                <h2 class="section-title">CHOOSE EXPERTGATE</h2>
                <p class="section-title-lead">Explore the expertise of our <br/> academic and industry leaders</p>
            </div>
            @livewire('about.apart-set')
        </div>
    </section>
    <section class="page-section team-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-title-wrapper">
                        <h2 class="section-title">AVAILABILITY & SECURITY</h2>
                        <p class="section-title-lead">We’re There Every Step of The Way</p>
                        <p class="section-title-summary">
                            Our platform provides a seamless journey from project posting to completion, ensuring you
                            find the perfect match for your needs. With our escrow payment system, your funds are held
                            securely until you're satisfied with the project's outcome.
                        </p>
                         <a href="{{ route('find.experts') }}" class="btn btn-primary btn-md">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    @livewire('about.team')
                </div>
            </div>
        </div>
    </section>
    <section class="page-section bg-white company-story">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div style="margin-bottom: 24px" class="section-title-wrapper">
                        <h2 class="section-title">OUR STORY</h2>
                        <p class="section-title-lead">Unlocking Academic Expertise</p>
                    </div>
                    <div class="section-content">
                        <p>
                            ExpertGate was founded by Dr. Mohammad Riyadh and Mrs. Jannat Bahar CA. Their collective experience of over two decades in academia, industry, and the Australian government and their struggle to find academic experts for a university accreditation process sparked the idea for ExpertGate.
                        </p>
                        <p>
                            Mohammad and Jannat engaged with numerous academic and industry experts, revealing a significant gap in the market for a platform that promotes academic and industry expertise in one accessible place. ExpertGate is the solution they envisioned, benefiting universities in curriculum development or course design, industries advancing their LMS or improving staff soft skills, or a higher degree student refining their research skills.
                        </p>
                        <p>
                            Recognising the limitations of existing professional networking platforms, Mohammad and Jannat dreamt of a dedicated space where academics and industry experts could easily showcase their expertise.
                        </p>
                        <p>
                            ExpertGate goes beyond the conventional marketplace model, offering a holistic solution to diverse academic needs. It simplifies the process of posting academic projects and enables informed decision-making by reviewing expressions of interest from top experts. Security is a priority, with a system that holds payments in escrow until project completion.
                        </p>
                        <p>
                            ExpertGate is an innovative solution connecting individuals, institutions, and media organisations with the expertise to navigate global education and industry. Join us on a journey to unlock academic expertise effortlessly.
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="section-image">
                        <img src="{{ asset('assets/frontend/img/company-story.jpg') }}"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('bottom_scripts')
    @vite('resources/js/about-us.js')
@endpush
