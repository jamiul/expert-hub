<section class="my-60">
    <div class="container">
        <div class="title-page-wrapper">
            <div class="title-page-header pb-0">
                <h1 class="h5 mb-20">Favourites</h1>
            </div>
            <div x-data="{ activeTab: 'myFeed' }">
                <ul class="secondary-tab-nav border-top" id="myTab" role="tablist">
                    <li x-on:click="activeTab = 'myFeed'" class="tab-nav-item"
                        :class="{ 'active': activeTab === 'myFeed' }"> Experts </li>
                    <li x-on:click="activeTab = 'bestMatch'" class="tab-nav-item"
                        :class="{ 'active': activeTab === 'bestMatch' }"> Scholarships </li>
                    <li x-on:click="activeTab = 'savedJobs'" class="tab-nav-item"
                        :class="{ 'active': activeTab === 'savedJobs' }"> Academic Training </li>
                </ul>
                <div class="project-tab">
                    <div x-show="activeTab === 'myFeed'" class="tab-content">
                        <!-- Content for My Feed tab -->
                        @forelse($favouriteExperts as $expert)
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="expert-card border-bottom p-40">
                                        <div class="expert-card-header mb-2">
                                            <div class="expert-thumb">
                                                <div class="expert-thumb-box">
                                                    <img
                                                        src="{{ $expert->picture ?: getGravatar($expert->user->email) }}" />
                                                </div>
                                            </div>
                                            <!--expert-thumb-->
                                            <div class="expert-info">
                                                <div class="expert-profile-flag mb-2">Best Match</div>
                                                <a href="{{ route('expert.profile.show', $expert) }}">
                                                    <h3 class="h6 expert-name mb-0">{{ $expert->user->full_name }}</h3>
                                                </a>
                                                <ul class="expert-meta">
                                                    <li>{{ $expert->expertField->name }}</li>
                                                    <li>{{ $expert->user->country->name }}</li>
                                                </ul>
                                            </div>
                                            <!--expert-info-->
                                            <div class="expert-card-action">
                                                <button wire:click="favouriteProfile({{ $expert->id }})"
                                                    class="btn btn-icon btn-outline-light btn-favorite m-1 {{ $expert->favourited() ? 'favorited' : '' }}">
                                                    <span class="heart-line">
                                                        <x-icon.heart fill="#0036E3" />
                                                    </span>
                                                    <span class="heart-filled">
                                                        <x-icon.heart-filled fill="#0036E3" />
                                                    </span>
                                                </button>
                                                <button class="btn btn-md btn-outline-primary border-2"> Hire</button>
                                                @if (auth()->user()->profile->projects()->count() == 0)
                                                    <a href="{{ route('projects.create') }}"
                                                        class="btn btn-md btn-primary">Invite Project</a>
                                                @else
                                                    <button
                                                        wire:click="$dispatch('modal.open', {component: 'project.invite', arguments: {'expert': {{ $expert->id }}, 'project': {{ $project }}}})"
                                                        class="btn btn-md btn-primary">Invite Project
                                                    </button>
                                                @endif
                                                <!-- Button trigger modal -->
                                            </div>
                                        </div>
                                        <div class="expert-card-body">
                                            <div class="d-flex gap-3 align-items-center">
                                                <div>
                                                    <strong
                                                        class="fw-medium">${{ $expert->hourly_rate ?? '' }}</strong>/
                                                    hr
                                                </div>
                                                <div class="expert-profile-status"> Available now </div>
                                            </div>
                                            <div class="expert-summary py-3">
                                                <p class="mb-0 fw-medium">
                                                    {{ $expert->biography }}
                                                    <a href=""> more</a>
                                                </p>
                                            </div>
                                            <div class="tag-list light-tag-list" x-data="{ showAllTags: false, buttonText: ' + {{ $expert->expertises->count() - 4 }}' + ' More' }" :class="{ 'showing-less-tag': !showAllTags }">

                                                @if(count($expert->consultation) > 0)
                                                    <a href="{{ route('expert.profile.show', $expert) }}" class="expert-profile-tag offer-consultation-btn">
                                                        <x-icon.video fill="#0036E3"/>
                                                        Offer Consultation
                                                    </a>
                                                @endif

                                                @foreach ($expert->expertises as $expertise)
                                                    <span class="tag">{{ $expertise->name }}</span>
                                                @endforeach
                                                @if ($expert->expertises->count() > 4)
                                                    <button x-on:click="showAllTags = !showAllTags; buttonText = showAllTags ? 'Show Less' : ' + {{ $expert->expertises->count() - 4 }}' + ' More' " x-text="buttonText" class="all-tags-trigger"></button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <x-no-favourite />
                        @endforelse

                        {{ $favouriteExperts->onEachSide(1)->links() }}

                        @if(count($favouriteExperts) > 0)
                            <div class="view-all-training-btn-wrapper pb-40">
                                <a href="{{ route('find.experts') }}" class="btn btn-outline-primary border-2 btn-md">View
                                    all Experts</a>
                            </div>
                        @endif
                    </div>
                    <div x-show="activeTab === 'bestMatch'" class="tab-content">
                        @forelse($favouriteScholarships as $scholarship)
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="training-card p-40 border-bottom gap-2">
                                        <div class="training-card-trainer-wrapper justify-content-between">
                                            <div class="user-small-card">
                                                <div class="rounded-0">
                                                    @if ($scholarship->logo)
                                                        <img src="{{ asset($scholarship->logo) }}" />
                                                    @else
                                                        <img src="{{ asset('dummy-logo.png') }}" />
                                                    @endif
                                                </div>
                                                <div>
                                                    <a target="_blank" href="{{ $scholarship->link }}">
                                                        <h4 class="text-base mb-0">{{ $scholarship->title }}</h4>
                                                    </a>
                                                    <ul class="user-meta">
                                                        <li>{{ $scholarship->organization }}</li>
                                                        <li>{{ $scholarship->country?->name }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="training-card-action">
                                                <button wire:click="favouriteScholarship({{ $scholarship->id }})"
                                                    class="btn btn-md btn-icon btn-outline-light btn-favorite {{ $scholarship->favourited() ? 'favorited' : '' }}">
                                                    <span class="heart-line"> <x-icon.heart fill="#0036E3" /></span>
                                                    <span class="heart-filled"> <x-icon.heart-filled
                                                            fill="#0036E3" /></span>
                                                </button>
                                                <button class="btn btn-md btn-icon btn-outline-light" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <x-icon.share fill="#0036E3" />
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" target="_blank"
                                                                href="https://www.linkedin.com/sharing/share-offsite/?url=[URL]">
                                                                <x-icon.logo-linkedin /> Linkedin
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" target="_blank"
                                                                href="https://www.facebook.com/sharer/sharer.php?u=[URL]">
                                                                <x-icon.facebook /> Facebook
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item">
                                                                <span class="me-2">
                                                                    <x-icon.copy />
                                                                </span> Copy Link </a>
                                                        </li>
                                                    </ul>
                                                </button>
                                                <button class="btn btn-md btn-outline-primary border-2"> Find
                                                    Experts</button>
                                            </div>
                                            <div class="training-card-summary">
                                                <p class="mb-3">{{ Str::limit($scholarship->summary, 400) }}
                                                    @if (Str::length($scholarship->summary) > 400)
                                                        <a target="_blank" href="{{ $scholarship->link }}">more</a>
                                                    @endif
                                                </p>
                                                <div class="custom-table text-sm">
                                                    <div class="tr">
                                                        <div class="td">Grants page</div>
                                                        <div class="td fw-medium">
                                                            <a class="text-decoration-underline" target="_blank"" href="{{ $scholarship->link }}">Click</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <x-no-favourite />
                        @endforelse
                        {{ $favouriteScholarships->onEachSide(1)->links() }}
                        @if(count($favouriteScholarships) > 0)
                            <div class="view-all-training-btn-wrapper pb-40">
                                <a href="{{ route('scholarship-database') }}" class="btn btn-outline-primary border-2 btn-md">View
                                    all Scholarships</a>
                            </div>
                        @endif
                    </div>
                    <div x-show="activeTab === 'savedJobs'" class="tab-content">
                        @forelse($favouriteTrainings as $training)
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="training-card p-40 border-bottom">
                                        <div class="training-card-title">
                                            <h3 class="h6">
                                                <a href="{{ route('trainings.show', $training) }}">
                                                    {{ $training->title }}
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="training-card-action">
                                            <button
                                                wire:click="favouriteTraining({{ $training->id }})"
                                                class="btn btn-icon btn-outline-light btn-favorite m-1 {{ $training->favourited() ? 'favorited' : ''}}">
                                                <span class="heart-line"> <x-icon.heart fill="#0036E3" /></span>
                                                <span class="heart-filled"> <x-icon.heart-filled fill="#0036E3" /></span>
                                            </button>
                                            <button class="btn btn-md btn-icon btn-outline-light" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <x-icon.share fill="#0036E3" />
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item" target="_blank"
                                                            href="https://www.linkedin.com/sharing/share-offsite/?url=[URL]">
                                                            <x-icon.logo-linkedin />
                                                            Linkedin
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" target="_blank"
                                                            href="https://www.facebook.com/sharer/sharer.php?u=[URL]">
                                                            <x-icon.facebook />
                                                            Facebook
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item">
                                                            <span class="me-2">
                                                                <x-icon.copy />
                                                            </span>
                                                            Copy Link
                                                        </a>
                                                    </li>
                                                </ul>
                                            </button>
                                            <button class="btn btn-md btn-outline-primary border-2" wire:click="$dispatch('modal.open', {component: 'training.register' , arguments: {'training': {{$training}} } })"> Registration</button>
                                        </div>
                                        <div class="training-card-trainer-wrapper">
                                            @foreach ($training->instructors as $instructor)
                                                <div class="user-small-card">
                                                    <div>
                                                        <img src="{{ $instructor->picture }}" />
                                                    </div>
                                                    <div>
                                                        <h4 class="text-base mb-0">{{ $instructor->user->full_name }}</h4>
                                                        <ul class="user-meta">
                                                            <li>{{$instructor->expertField->name}}</li>
                                                            <li>{{ $instructor->user->country->name }}</li>
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
                                                    <div class="td fw-medium">Seminar Dates</div>
                                                    <div class="td">{{ $training->start_date->format('d M Y') }} -
                                                        {{ $training->end_date->format('d M Y') }}</div>
                                                </div>
                                                <div class="tr">
                                                    <div class="td fw-medium">Time & Location</div>
                                                    <div class="td">{{ $training->start_time }} AEST, {{ $training->state->name }}, {{ $training->country->name }}</div>
                                                </div>
                                                <div class="tr">
                                                    <div class="td fw-medium">Training Mode</div>
                                                    <div class="td">
                                                        <div class="d-flex align-items-center gap-2">
                                                            @if ($training->mode == \App\Enums\TrainingMode::Zoom)
                                                                <div>
                                                                    <x-icon.video />
                                                                </div>
                                                            @elseif($training->mode == \App\Enums\TrainingMode::FaceToFace)
                                                                <x-icon.face-to-face />
                                                            @endif
                                                            <div> {{ $training->mode }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tr">
                                                    <div class="td fw-medium">Language</div>
                                                    <div class="td">{{ $training->language->name }}</div>
                                                </div>
                                                <div class="tr">
                                                    <div class="td fw-medium">Training Category</div>
                                                    <div class="td">{{ $training->category->name }}</div>
                                                </div>
                                                <div class="tr">
                                                    <div class="td fw-medium">Training Fee</div>
                                                    <div class="td">USD {{ $training->fee }}</div>
                                                </div>
                                                <div class="tr">
                                                    <div class="td fw-medium">Partner Institute</div>
                                                    <div class="td">
                                                        @foreach ($training->partners as $partner)
                                                            <a class="text-decoration-underline" href="#">{{ $partner->name }}</a>
                                                            @if (!$loop->last)
                                                                |
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <x-no-favourite />
                        @endforelse

                        {{ $favouriteTrainings->onEachSide(1)->links() }}

                        @if(count($favouriteTrainings) > 0)
                            <div class="view-all-training-btn-wrapper pb-40">
                                <a href="{{ route('find.trainings') }}" class="btn btn-outline-primary border-2 btn-md">View all Training</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
