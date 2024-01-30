<div class="homepage-main-slider-wrapper">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-6">
                <div class="hero-text">
                    <h2>Find a Top Academic <br> Expert for Your Project</h2>
                    <p>EduExHub is an exclusive platform featuring top academic experts across <br> diverse fields.
                        Whether it's a personal or institutional project</p>
                    <div class="hero-button d-flex gap-3">
                        <x-button.link
                            href="{{ route('find.experts') }}"
                            class="btn btn-primary edux-btn-primary"
                            text="Find Experts"
                        />
                        <x-button.link
                            href="{{ route('auth.login') }}"
                            class="btn edux-btn-border-primary"
                            text="Become an Expert"
                        />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="homepage-slider-main" class="owl-carousel homepage-slider-main">
                    @forelse ($experts as $expert)

                        <div class="homepage-slider-item">
                            <img src="{{ $expert->getFirstMediaUrl('picture') }}"/>
                            <div class="homepage-slider-content">
                                <a href="{{ route('expert.profile.show', $expert) }}">
                                    <img src="{{ asset('assets/frontend/img/map-img.png') }}"/>
                                    <h4>{{ $expert->user->full_name }}</h4>
                                    <p>{{ $expert->expertField ? $expert->expertField->parent->name : '' }}</p>
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
                                    <p>{{ $expert->expertField ? $expert->expertField->parent->name : '' }}</p>
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


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    jQuery(document).ready(function () {

        var bigimage = $("#homepage-slider-main");
        var thumbs = $("#homepage-slider-thumbnails");
        //var totalslides = 10;
        var syncedSecondary = true;

        bigimage
            .owlCarousel({
                items: 1,
                slideSpeed: 2000,
                nav: false,
                autoplay: true,
                dots: false,
                loop: true,
                responsiveRefreshRate: 200,
                navText: [
                    '<i class="fa fa-arrow-left" aria-hidden="true">Left</i>',
                    '<i class="fa fa-arrow-right" aria-hidden="true">Right</i>'
                ]
            })
            .on("changed.owl.carousel", syncPosition);

        thumbs
            .on("initialized.owl.carousel", function () {
                thumbs
                    .find(".owl-item")
                    .eq(0)
                    .addClass("current");
            })
            .owlCarousel({
                items: 5,
                dots: false,
                nav: true,
                navText: [
                    '<span class="material-symbols-outlined">chevron_left</span>',
                    '<span class="material-symbols-outlined">chevron_right</span>'
                ],
                smartSpeed: 200,
                slideSpeed: 500,
                slideBy: 1,
                responsiveRefreshRate: 100,
                margin: 23,
            })
            .on("changed.owl.carousel", syncPosition2);

        function syncPosition(el) {
            //if loop is set to false, then you have to uncomment the next line
            //var current = el.item.index;

            //to disable loop, comment this block
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }
            //to this
            thumbs
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = thumbs.find(".owl-item.active").length - 1;
            var start = thumbs
                .find(".owl-item.active")
                .first()
                .index();
            var end = thumbs
                .find(".owl-item.active")
                .last()
                .index();

            if (current > end) {
                thumbs.data("owl.carousel").to(current, 100, true);
            }
            if (current < start) {
                thumbs.data("owl.carousel").to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                bigimage.data("owl.carousel").to(number, 100, true);
            }
        }

        thumbs.on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = $(this).index();
            bigimage.data("owl.carousel").to(number, 300, true);
        });

    });
</script>
