<div class="about-slider">
    <div class="container">
        <div class="heading">
            <h4>{{ $aboutUsDTO->instructor_subtitle }}</h4>
            <h2>{{ $aboutUsDTO->instructor_title }}</h2>
        </div>
        <div id="owl-carousel" class="owl-carousel owl-theme">
            @if(count($aboutUsDTO->instructor_list) > 0)
                @foreach(($aboutUsDTO->instructor_list) as $instrctor)
                    <div class="item">
                        <div class="carousel-img">
                            <img src="{{ asset('assets/frontend/img/find-trad1.png') }}">
                        </div>
                        <div class="carousel-text">
                            <h4>{{ getFullNameByExpertID($instrctor) }}</h4>
                            <p>Accreditation Specialist</p>
                            <h5>Oxford University</h5>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
</div>
