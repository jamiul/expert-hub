<div wire:ignore.self class="modal fade" id="instructorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog add-expert-modal">
        <div class="modal-content add-expert-content">
            <div class="modal-header border-0"> <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button> </div>
            <div class="modal-body pt-0">
                <div class="add-expert-modal-area">
                    <h1 class="modal-title fs-5 m-expert-title" id="exampleModalLabel">Add Expert</h1>
                    <div class="admin-text-search position-relative">
                        <x-form.search label="" wire:model.live.debounce.500ms="search" placeholder="Filter by experts.."/>
                    </div>
                    {{-- @dd($instructor_list); --}}
                    @if (count($instructors) > 0)
                        @foreach ($instructors as $instructor)
                        {{-- @dd($instructor->id) --}}
                            <div class="add-expert-single-item position-relative">
                                <div class="right-sidebar">
                                    <div class="right-database">
                                        <div class="database-block database-blog">
                                            <div class="database-contant">
                                                <div class="database-img"> <img
                                                        src="{{ asset('assets/frontend/img/admin/ex1.png') }}"> </div>
                                                <div class="database-text admin-text">
                                                    <h4> <a href="#">{{ $instructor->user->full_name }}</a> </h4>
                                                    <span>Agricultural Engineering Expert</span> <span>University of
                                                        Sydney</span> <span>Australia</span>
                                                    <div class="review rating-area consultant-reviw modal-consultant-review">
                                                        <ul class="all-project-rating">
                                                            <li> <strong>$200</strong> / hr </li>
                                                            <li>
                                                                <a href="#">
                                                                    <x-icon.star />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <x-icon.star />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <x-icon.star />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <x-icon.star />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <x-icon.star />
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="projects-slider">
                                                        <div id="carouselExampleIndicators" class="carousel slide">
                                                            <div class="carousel-indicators"> <button type="button"
                                                                    data-bs-target="#carouselExampleIndicators"
                                                                    data-bs-slide-to="2" aria-label="Slide 3">
                                                                    <h4 class="light-weight active">
                                                                        <p> <img src="{{ asset('assets/frontend/img/admin/activelight.png') }}"
                                                                                alt=""> </p>
                                                                        <p> keynote speaker</p>
                                                                    </h4>
                                                                </button> <button type="button"
                                                                    data-bs-target="#carouselExampleIndicators"
                                                                    data-bs-slide-to="2" aria-label="Slide 5">
                                                                    <h4 class="light-weight">
                                                                        <p>Educational Research</p>
                                                                    </h4>
                                                                </button> <button type="button"
                                                                    data-bs-target="#carouselExampleIndicators"
                                                                    data-bs-slide-to="2" aria-label="Slide 5">
                                                                    <h4 class="light-weight">
                                                                        <p>Educational Research</p>
                                                                    </h4>
                                                                </button> <button type="button"
                                                                    data-bs-target="#carouselExampleIndicators"
                                                                    data-bs-slide-to="2" aria-label="Slide 5">
                                                                    <h4 class="light-weight">
                                                                        <p>Educational</p>
                                                                    </h4>
                                                                </button> <button type="button"
                                                                    data-bs-target="#carouselExampleIndicators"
                                                                    data-bs-slide-to="2" aria-label="Slide 6">
                                                                    <h4 class="more-read more-read-blog">
                                                                        <p>+12 More</p>
                                                                    </h4>
                                                                </button> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-job add-expert-post position-absolute">
                                    <button class="btn btn-postjob d-flex justify-content-center align-items-center" wire:click="addExpert({{ $instructor->id }})">
                                        <span class="material-symbols-outlined">add</span>
                                        <span>Add expert</span>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
            <div class="modal-footer border-0 pt-0"> <button type="button"
                    class="btn btn-secondary btn-addexpert-cancel" data-bs-dismiss="modal">Cancel</button> </div>
        </div>
    </div>
</div>
