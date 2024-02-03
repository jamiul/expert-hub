<section class="page-section speciality-section">
    <div class="container">
        <div style="" class="section-title-wrapper text-center mb-40">
            <h2 class="section-title">{{ Str::upper($subtitle) }}</h2>
            <p class="section-title-lead">{{ Str::headline($title) }}</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="tabbable-panel company-speciality-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button wire:click="$set('tab', 'expert')"
                                    class="nav-link {{ $tab == 'expert' ? 'active' : '' }}"
                                    type="button">
                                For Experts
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button wire:click="$set('tab', 'client')"
                                    class="nav-link {{ $tab == 'client' ? 'active' : '' }}"
                                    type="button">For Clients
                            </button>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show {{ $tab == 'client' ? 'active' : '' }}" id="home" role="tabpanel"
                             aria-labelledby="home-tab">

                            <div class="company-speciality-wrapper">
                                @if (count($aboutApart) > 0)
                                    @foreach ($aboutApart as $apart)
                                        @if ($apart->type == App\Enums\ProfileType::Client->value)
                                            <div class="company-speciality-card">

                                                <div class="company-speciality-icon">
                                                    <img src="{{ $apart->iconImage() }}" alt="">
                                                </div>
                                                <div class="company-speciality-content">
                                                    <h3>{{ $apart->set_title }}</h3>
                                                    @if ($showReadMoreButton === $apart->id)
                                                        <p>{{ $apart->description }}</p>
                                                        <a href="#eduexhub-set" wire:click="readLess">Show Less</a>
                                                    @else
                                                        <p>{{ Str::limit($apart->description, 100) }}</p>
                                                        <a href="#eduexhub-set" wire:click="readMore({{ $apart->id }})">Read
                                                            More</a>
                                                    @endif
                                                </div>

                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            <div class="text-center">
                                <a class="btn btn-md btn-primary" style="width: 218px" href="{{ route('auth.registration') }}">Get Started</a>
                            </div>
                        </div>
                        <div class="tab-pane fade show {{ $tab == 'expert' ? 'active' : '' }}" id="profile"
                             role="tabpanel"
                             aria-labelledby="profile-tab">
                            <div class="company-speciality-wrapper">
                                @if (count($aboutApart) > 0)
                                    @foreach ($aboutApart as $apart)
                                        @if ($apart->type == App\Enums\ProfileType::Expert->value)
                                            <div class="company-speciality-card">
                                                <div class="company-speciality-icon">
                                                    <img src="{{ $apart->iconImage() }}" alt="">
                                                </div>
                                                <div class="company-speciality-content">
                                                    <h3>{{ $apart->set_title }}</h3>
                                                    @if ($showReadMoreButton === $apart->id)
                                                        <p>{{ $apart->description }}</p>
                                                        <a href="#eduexhub-set" wire:click="readLess">Show Less</a>
                                                    @else
                                                        <p>{{ Str::limit($apart->description, 100) }}</p>
                                                        <a href="#eduexhub-set" wire:click="readMore({{ $apart->id }})">Read
                                                            More</a>
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            <div class="text-center">
                                <a class="btn btn-md btn-primary" style="width: 218px" href="{{ route('auth.registration') }}">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
