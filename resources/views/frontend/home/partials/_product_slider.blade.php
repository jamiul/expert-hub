<div class="product-slider">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
            <div class="carousel-w">
                <div class="hero-contant">
                    <div class="hero-text">
                        <h2>Find a Top Academic <br> Expert for Your Project</h2>
                        <p>EduExHub is an exclusive platform featuring top academic experts across <br> diverse fields. Whether it's a personal or institutional project</p>
                        <div class="hero-button">
                            <a href="{{ route('register') }}?type=2">Find an Expert</a>
                            <a href="{{ route('register') }}?type=1">Become an Expert</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/frontend/img/img2.png') }}"/>
                        <div class="item-text">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/img/map-img.png') }}"/>
                                <h4>Jenny Wilson</h4>
                                <p>Curriculum Development</p>
                                <h5>Oxford University</h5>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/frontend/img/img1.png') }}"/>
                        <div class="item-text">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/img/map-img.png') }}"/>
                                <h4>Bessie Cooper</h4>
                                <p>Research &amp; Analysis</p>
                                <h5>Oxford University</h5>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/frontend/img/img3.png') }}"/>
                        <div class="item-text">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/img/map-img.png') }}"/>
                                <h4>Jane Cooper</h4>
                                <p>Public Health</p>
                                <h5>Oxford University</h5>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/frontend/img/img4.png') }}"/>
                        <div class="item-text">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/img/map-img.png') }}"/>
                                <h4>Kristin Watson</h4>
                                <p>LMS Expert</p>
                                <h5>Oxford University</h5>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/frontend/img/img5.png') }}"/>
                        <div class="item-text">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/img/map-img.png') }}"/>
                                <h4>Theresa Webb</h4>
                                <p>Educational Assessment</p>
                                <h5>Oxford University</h5>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/frontend/img/img6.png') }}"/>
                        <div class="item-text">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/img/map-img.png') }}"/>
                                <h4>Arlene McCoy</h4>
                                <p>Research &amp; Analysis</p>
                                <h5>Oxford University</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                    <div class="carousel-con">
                        <div class="carousel-img">
                            <img src="{{ asset('assets/frontend/img/img2.png') }}"/>
                        </div>
                        <div class="carousel-text">
                            <h4>Jenny Wilson</h4>
                            <p>Curriculum Development</p>
                        </div>
                    </div>
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
                    <div class="carousel-con">
                        <div class="carousel-img">
                            <img src="{{ asset('assets/frontend/img/img1.png') }}"/>
                        </div>
                        <div class="carousel-text">
                            <h4>Bessie Cooper</h4>
                            <p>Research &amp; Analysis</p>
                        </div>
                    </div>
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                    <div class="carousel-con">
                        <div class="carousel-img">
                            <img src="{{ asset('assets/frontend/img/img3.png') }}"/>
                        </div>
                        <div class="carousel-text">
                            <h4>Jane Cooper</h4>
                            <p>Public Health</p>
                        </div>
                    </div>
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4">
                    <div class="carousel-con">
                        <div class="carousel-img">
                            <img src="{{ asset('assets/frontend/img/img4.png') }}"/>
                        </div>
                        <div class="carousel-text">
                            <h4>Kristin Watson</h4>
                            <p>LMS Ecpert</p>
                        </div>
                    </div>
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5">
                    <div class="carousel-con">
                        <div class="carousel-img">
                            <img src="{{ asset('assets/frontend/img/img5.png') }}"/>
                        </div>
                        <div class="carousel-text">
                            <h4>Theresa Webb</h4>
                            <p>Educational Assessment</p>
                        </div>
                    </div>
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6">
                    <div class="carousel-con">
                        <div class="carousel-img">
                            <img src="{{ asset('assets/frontend/img/img6.png') }}"/>
                        </div>
                        <div class="carousel-text">
                            <h4>Ariene McCoy</h4>
                            <p>Research &amp; Analysis</p>
                        </div>
                    </div>
                </button>
            </div>
            <div class="carousel-control">
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <i class="fa-solid fa-angle-left"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <i class="fa-solid fa-angle-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>
