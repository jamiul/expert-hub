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
                                            <button class="save-update" onclick="location.href='{{ url('about-us') }}'">View Page</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @livewire('admin.about.header')
                            @livewire('admin.about.area')
                            @livewire('admin.about.instructor')
                            @livewire('admin.about.mission')
                            @livewire('admin.about.apart')
                            @livewire('admin.about.team')
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
