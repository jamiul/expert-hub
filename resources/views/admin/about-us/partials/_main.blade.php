<main class="main__layout d-flex">
    <!-- start left sidebar -->
    <div class="left__sidebar">
        @include('admin.layouts.left-sidebar')
    </div>
    <!-- end left sidebar -->

    <!-- start main body content -->
    <div class="main__content__wrapper col">
        <!-- start header -->
        <div class="header__wrapper py-2 bg-white">
            @include('admin.layouts.nav')
        </div>
        <!-- end header -->

        <div class="content__wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <section class="frontend-dashboard-area mx-auto">
                            <!-- <div class="container-fluid"> -->
                            @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            @if (session()->has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <div class="frontend-title-area">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="frontend-left-title">
                                            <h4>About page</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="frontend-right-title">
                                            <button class="save-update">View Page</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @livewire('admin.about.header')
                            @livewire('admin.about.area')
                            @livewire('admin.about.instructor')
                            @livewire('admin.about.mission')
                            @livewire('admin.about.apart')
                            <div class="academic-seller-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="academic-bar d-flex">
                                                <h3 class="seller-title">Build on Demand Teams for your Education
                                                    Institution</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="admin-blog-form-area">
                                                <div class="admin-form-content">
                                                    <form action="">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col admin-sub-title position-relative">
                                                                    <label for="subtitle"
                                                                        class="form-label position-absolute level-subtitle">subtitle</label>
                                                                    <input id="subtitle" type="text"
                                                                        class="form-control admin-form-input "
                                                                        placeholder="Require steps"
                                                                        aria-label="First name">
                                                                </div>
                                                                <div class="col admin-sub-title position-relative">
                                                                    <label for="title"
                                                                        class="form-label position-absolute level-title">title</label>
                                                                    <input id="title" type="text"
                                                                        class="form-control admin-form-input admin-m-input"
                                                                        placeholder="Search Academic Expert Made Easy"
                                                                        aria-label="Last name">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div
                                                                    class="form-floating admin-text-area position-relative">
                                                                    <textarea class="form-control admin-area position-relative" placeholder="Leave a comment here" id="floatingTextarea">Welcome to EduExHub, your premier destination for connecting with top academic experts across a diverse spectrum of fields and disciplines. Whether you represent a higher education institution, a media organisation, or are an individual seeking expert guidance for your academic pursuits, EduExHub is your ultimate resource for empowerment.</textarea>
                                                                    <span class="edux-word-count">0/1000</span>
                                                                    <label for="floatingTextarea"
                                                                        class=" admin-text-area-level position-absolute">Paragraph</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="team  team-blog">
                                        <div class="team-hire">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-6">
                                                        <div class="team-block"> <a href="#">
                                                                <div class="team-img position-relative"> <img
                                                                        src=" {{ asset('assets/frontend/img/team-1.png') }}">
                                                                    <a class="blog-close position-absolute"> <img
                                                                            class=""
                                                                            src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}"
                                                                            alt="close"> </a>
                                                                </div>
                                                                <div class="hire-text">
                                                                    <h4>Darrell Steward</h4>
                                                                    <p>Accreditation Specialist</p>
                                                                </div>
                                                            </a> </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6">
                                                        <div class="team-block"> <a href="#">
                                                                <div class="team-img position-relative"> <img
                                                                        src=" {{ asset('assets/frontend/img/team-2.png') }}">
                                                                    <a class="blog-close position-absolute"> <img
                                                                            class=""
                                                                            src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}"
                                                                            alt="close"> </a>
                                                                </div>
                                                                <div class="hire-text">
                                                                    <h4>Theresa Webb</h4>
                                                                    <p>Industry Expert</p>
                                                                </div>
                                                            </a> </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6">
                                                        <div class="team-block"> <a href="#">
                                                                <div class="team-img position-relative"> <img
                                                                        src=" {{ asset('assets/frontend/img/team-3.png') }}">
                                                                    <a class="blog-close position-absolute"> <img
                                                                            class=""
                                                                            src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}"
                                                                            alt="close"> </a>
                                                                </div>
                                                                <div class="hire-text">
                                                                    <h4>Marvin McKinney</h4>
                                                                    <p>Policy Expert</p>
                                                                </div>
                                                            </a> </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6">
                                                        <div class="team-block"> <a href="#">
                                                                <div class="team-img position-relative"> <img
                                                                        src=" {{ asset('assets/frontend/img/team-4.png') }}">
                                                                    <a class="blog-close position-absolute"> <img
                                                                            class=""
                                                                            src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}"
                                                                            alt="close"> </a>
                                                                </div>
                                                                <div class="hire-text">
                                                                    <h4>Marvin McKinney</h4>
                                                                    <p>Curriculum Expert</p>
                                                                </div>
                                                            </a> </div>
                                                    </div>

                                                    <div class="col-md-2 col-sm-6">
                                                        <div class="team-block"> <a href="#">
                                                                <div class="team-img position-relative"> <img
                                                                        src=" {{ asset('assets/frontend/img/team-4.png') }}">
                                                                    <a class="blog-close position-absolute"> <img
                                                                            class=""
                                                                            src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}"
                                                                            alt="close"> </a>
                                                                </div>
                                                                <div class="hire-text">
                                                                    <h4>Marvin McKinney</h4>
                                                                    <p>Curriculum Expert</p>
                                                                </div>
                                                            </a> </div>
                                                    </div>


                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-md-2 col-sm-6">
                                                        <div class="team-block">
                                                            <div class="academic-single-item d-flex flex-column">
                                                                <div class="admin-add-more"> <a href="#"> <span
                                                                            class="material-symbols-outlined"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#buildondemand">add</span>
                                                                    </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="edux-frontend-left-title">
                                                        <button class="save-update">Save Update</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @livewire('admin.about.story')
                        </section>
                    </div>

                </div>
            </div>

        </div>
        <!--.//content-->
    </div>
    <!-- end body content -->
</main>
