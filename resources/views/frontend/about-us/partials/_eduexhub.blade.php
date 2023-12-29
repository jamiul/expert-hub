<div class="eduexhub about-eduexhub">
    <div class="container">
        <div class="heading">
            <h4>{{ $aboutUsDTO->apart_subtitle }}</h4>
            <h2>{{ capitalizedString($aboutUsDTO->apart_title) }}</h2>
        </div>
        <div class="tabbable-panel">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true">For Clients</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false" tabindex="-1">For
                        Experts</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        @if (count($aboutApart) > 0)
                            @foreach ($aboutApart as $apart)
                                @if ($apart->type == "Client")
                                    <div class="col-md-6 col-sm-6">
                                        <div class="tab-block">
                                            <div class="tab-img">
                                                <img src="{{ $apart->iconImage() }}" alt="">
                                            </div>
                                            <div class="tab-text">
                                                <h3>{{ $apart->set_title}}</h3>
                                                <p>{!! nl2br(e($apart->description)) !!}</p>
                                                <a href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        @if (count($aboutApart) > 0)
                            @foreach ($aboutApart as $apart)
                                @if ($apart->type == "Expert")
                                    <div class="col-md-6 col-sm-6">
                                        <div class="tab-block">
                                            <div class="tab-img">
                                                <img src="{{ $apart->iconImage() }}" alt="">
                                            </div>
                                            <div class="tab-text">
                                                <h3>{{ $apart->set_title}}</h3>
                                                <p>{!! nl2br(e($apart->description)) !!}</p>
                                                <a href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="about-eduexhub-btn">
            <a href="#">Get Started</a>
        </div>
    </div>
</div>
