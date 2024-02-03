<div class="homepage-main-slider-wrapper">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-6">
                <div class="hero-text">
                    <h2>Find Top Academic and Industry Experts for your project</h2>
                    <p>ExpertGate is an elite network of top academic and industry experts across the globe. We connect you with leaders in course accreditation, curriculum design, policy development, project management and more. Choose ExpertGate when your most pivotal academic and industry projects demand the best.</p>
                    <div class="hero-button-wrapper">
                        <a href="{{ route('find.experts') }}" class="btn btn-primary btn-md">Find an Expert</a>
                        <a href="{{ route('auth.login') }}" class="btn btn-outline-primary border-2 btn-md">Become an Expert</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 home-main-slider-col">
                <div id="homepage-slider-main" class="owl-carousel homepage-slider-main">
                    @forelse ($experts as $expert)

                        <div class="homepage-slider-item">
                            <img src="{{ $expert->getFirstMediaUrl('picture') }}"/>
                            <div class="homepage-slider-content">
                                <a href="{{ route('expert.profile.show', $expert) }}">
                                    <div class="slider-map-wrapper">
                                        <img src="{{ asset('assets/frontend/img/map-img.png') }}"/>
                                        <div class="australia">Australia</div>
                                    </div>
                                    <h4>{{ $expert->user->full_name }}</h4>
                                    <p>{{ $expert->expertField?->name }}</p>
                                    <p class="text-primary">Oxford University</p>
                                </a>
                            </div>
                        </div>

                    @empty
                        <div>No data</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
<div class="homepage-slider-thumbnails-wrapper">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="homepage-slider-thumbnails-inner-wrapper">
                    <div id="homepage-slider-thumbnails" class="owl-carousel owl-theme homepage-slider-thumbnails">
                        @forelse ($experts as $expert)
                            <div class="homepage-slider-thumb-item">
                                <div class="">
                                    <img src="{{ $expert->getFirstMediaUrl('picture') }}"/>
                                </div>
                                <div class="">
                                    <h4>{{ $expert->user->full_name }}</h4>
                                    <p>{{ $expert->expertField?->name }}</p>
                                    <p class="text-primary">Oxford University</p>
                                </div>
                            </div>
                        @empty
                            <div>No data</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@push('bottom_scripts')
    <script>
        jQuery(document).ready(function () {

            var thumbSlider = $("#homepage-slider-thumbnails");
            var mainSlider = $("#homepage-slider-main");

            var slider1FirstSlideIndex;
            var prevIndex = 0;

            // slider1
            thumbSlider.owlCarousel({
                autoplay: true,
                loop: true,
                nav: true,
                center: true,
                smartSpeed: 800,
                dots: false,  // Enable dots navigation
                items: 5,    // Set the number of items to 5
                margin: 23,
                responsive: {
                    1200: {
                        items: 5,
                    },
                    900: {
                        items: 4,
                    },
                    600: {
                        items: 3,
                    },
                    0: {
                        items: 2
                    }
                },
                navText: [
                    '<span class="material-symbols-outlined">chevron_left</span>',
                    '<span class="material-symbols-outlined">chevron_right</span>'
                ],
                onInitialized: function (event) {
                    slider1FirstSlideIndex = event.item.index;
                },
                onTranslate: function (event) {
                    sliderSync(event);
                }
            });

            function sliderSync(event) {
                var index = event.item.index;
                var loop = event.relatedTarget.options.loop;
                var slider2CloneCount = event.relatedTarget.clones().length / 2;

                if(loop) {
                    if(index < slider1FirstSlideIndex) { // if active slide is clone
                        mainSlider.trigger('prev.owl.carousel');
                    } else {
                        mainSlider.trigger('to.owl.carousel', index - slider2CloneCount);
                    }

                    prevIndex = event.item.index; // to determine the direction

                } else {
                    mainSlider.trigger('to.owl.carousel', index);
                }
            }
            // Add click event handler to slider2 items
            mainSlider.on('click', '.owl-item', function(e){
                var index = $(this).index();
                thumbSlider.trigger('to.owl.carousel', index);
            });
            // slider2
            mainSlider.owlCarousel({
                loop: true,
                nav: false,
                dots: false,  // Enable dots navigation
                smartSpeed: 800,
                touchDrag: false,
                mouseDrag: false,
                pullDrag: false,
                items: 1
            });

        });

    </script>
@endpush
