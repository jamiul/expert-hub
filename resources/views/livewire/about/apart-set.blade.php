<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                        <a href="#eduexhub-set" wire:click="readMore({{ $apart->id }})">Read More</a>
                                    @endif
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
                                        <a href="#eduexhub-set" wire:click="readMore({{ $apart->id }})">Read More</a>
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
