<div class="page-content p-0">
    <div class="training-list">
        @foreach ($trainings as $training)
        <div class="training-card bb-1">
            <div class="training-card-title">
                <h3 class="h6">
                    <a href="/figma/training/training-details-view">
                        {{ $training->title }}
                    </a>
                </h3>
            </div>
            <div class="training-card-action">
                <button x-data="{ isFavorited: false }"
                        class="btn btn-md btn-icon btn-outline-light btn-favorite"
                        :class="{ 'favorited': isFavorited }"
                        @click="isFavorited = !isFavorited">
            <span class="heart-line">
                <x-icon.heart fill="#0036E3"/>
            </span>
                    <span class="heart-filled">
                        <x-icon.heart-filled/>
            </span>
                </button>
                <button class="btn btn-md btn-icon btn-outline-light" type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                    <x-icon.share fill="#0036E3"/>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" target="_blank"
                                href="https://www.linkedin.com/sharing/share-offsite/?url=[URL]">
                                <x-icon.linkedin/>
                                Linkedin
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" target="_blank"
                                href="https://www.facebook.com/sharer/sharer.php?u=[URL]">
                                <x-icon.facebook/>
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item">
                <span class="me-2">
                    <x-icon.copy/>
                </span>
                                Copy Link
                            </a>
                        </li>
                    </ul>
                </button>
                <button class="btn btn-md btn-outline-primary border-2"> Registration</button>
            </div>
            <div class="training-card-trainer-wrapper">
                @foreach ($training->instructors as $instructor)
                <div class="user-small-card">
                    <div>
                        <img src="{{ $instructor->profile->picture }}"/>
                    </div>
                    <div>
                        <h4 class="text-base mb-0">{{ $instructor->profile->user->full_name }}</h4>
                        <ul class="user-meta">
                            <li>{{ $instructor->profile->expertField->name }}</li>
                            <li>Melbourne University</li>
                            <li>{{ $instructor->profile->user->country->name }}</li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="training-card-description">
                <p class="mb-0">{{ $training->summary }}<a href="">More</a></p>
            </div>
            <div class="training-card-summary">
                <div class="custom-table text-sm">
                    <div class="tr">
                        <div class="td">Seminar Dates</div>
                        <div class="td fw-medium">{{ $training->start_date->format('d M Y') }} - {{ $training->end_date->format('d M Y') }}</div>
                    </div>
                    <div class="tr">
                        <div class="td">Time & Location</div>
                        <div class="td fw-medium">10.15am AEST, Sydney, Australia</div>
                    </div>
                    <div class="tr">
                        <div class="td">Training Mode</div>
                        <div class="td fw-medium">
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <x-icon.video/>
                                </div>
                                <div> {{ $training->mode }}</div>
                            </div>

                        </div>
                    </div>
                    <div class="tr">
                        <div class="td">Language</div>
                        <div class="td fw-medium">{{ $training->language->name }}</div>
                    </div>
                    <div class="tr">
                        <div class="td">Training Category</div>
                        <div class="td fw-medium">{{ $training->category->name }}</div>
                    </div>
                    <div class="tr">
                        <div class="td">Training Fee</div>
                        <div class="td fw-medium">USD {{ $training->fee }}</div>
                    </div>

                    <div class="tr">
                        <div class="td">Partner Institute</div>
                        <div class="td fw-medium">
                            @foreach ($training->partners as $partner)
                                <a class="text-decoration-underline" href="#">{{ $partner->university->name }}</a> @if (!$loop->last)|@endif
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="pagination">
        <div class="row">
            <div class="col-md-4">
                <div class="pagination-left">
                    Showing 1 to 6 of
                    11 results
                </div>
            </div>
            <div class="col-md-8">
                <div class="pagination-right">
                    <ul>
                        <li>
                            <x-icon.skip-previous/>
                        </li>
                        <li>
                            <x-icon.arrow-left/>
                        </li>
                        <li class="active"> 1</li>
                        <li> 2</li>
                        <li>
                            <x-icon.arrow-right/>
                        </li>
                        <li>
                            <x-icon.skip-next/>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>