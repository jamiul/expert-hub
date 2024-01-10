<div class="container">
    <div class="heading">
        <h4>{{ Str::upper($subtitle) }}</h4>
        <h2>{{ Str::headline($title) }}</h2>
    </div>
    <div class="tabbable-panel">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button wire:click="$set('tab', 'client')" class="nav-link {{ $tab == 'client' ? 'active' : '' }}" type="button">For Clients</button>
            </li>
            <li class="nav-item" role="presentation">
                <button wire:click="$set('tab', 'expert')" class="nav-link {{ $tab == 'expert' ? 'active' : '' }}" type="button">
                    For Experts
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show {{ $tab == 'client' ? 'active' : '' }}" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    @if (count($aboutApart) > 0)
                        @foreach ($aboutApart as $apart)
                            @if ($apart->type == App\Enums\ProfileType::Client->value)
                                <div class="col-md-6 col-sm-6">
                                    <div class="tab-block">
                                        <div class="tab-img">
                                            <img src="{{ $apart->iconImage() }}" alt="">
                                        </div>
                                        <div class="tab-text">
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
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="tab-pane fade show {{ $tab == 'expert' ? 'active' : '' }}" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    @if (count($aboutApart) > 0)
                        @foreach ($aboutApart as $apart)
                            @if ($apart->type == App\Enums\ProfileType::Expert->value)
                                <div class="col-md-6 col-sm-6">
                                    <div class="tab-block">
                                        <div class="tab-img">
                                            <img src="{{ $apart->iconImage() }}" alt="">
                                        </div>
                                        <div class="tab-text">
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
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="single-button d-flex justify-content-center">
            <x-button.link
                href="{{ route('auth.login') }}"
                class="btn btn-primary edux-btn-primary"
                text="Get Started"
            />
        </div>
    </div>
</div>
