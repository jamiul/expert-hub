<div class="eduexhub about-eduexhub" id="#eduexhub-set">
    <div class="container">
        <div class="heading">
            <h4>{{ Str::upper($aboutUsDTO->apart_subtitle) }}</h4>
            <h2>{{ Str::headline($aboutUsDTO->apart_title) }}</h2>
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
            @livewire('about.apart-set')
        </div>
        <div class="about-eduexhub-btn">
            <a href="#">Get Started</a>
        </div>
    </div>
</div>
