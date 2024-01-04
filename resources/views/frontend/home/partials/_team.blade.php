<div class="team">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <div class="team-text">
                    <div class="heading">
                        <h4>{{ Str::upper($aboutUsDTO->team_subtitle) }}</h4>
                        <h2>{{ Str::headline($aboutUsDTO->team_title) }}</h2>
                        <p>{!! nl2br(e($aboutUsDTO->team_description)) !!}</p>
                        <div class="team-button">
                        <button type="button" class="btn btn-primary edux-btn-primary">Get Started test</button>
                            <!-- <a href="#">Get Started test</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-6">
                <div class="team-hire">
                    <div class="row">
                        @forelse ($teamList as $team)
                            <div class="col-md-4 col-sm-6">
                                <div class="team-block">
                                    <a href="#">
                                        <div class="team-img">
                                            <img src="{{ $team->getFirstMediaUrl('picture') }}" />
                                        </div>
                                        <div class="hire-text">
                                            <h4>{{ $team->user->full_name }}</h4>
                                            <p>{{ $team->expertField ? $team->expertField->name : '' }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @empty
                            <p>No Data</p>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
