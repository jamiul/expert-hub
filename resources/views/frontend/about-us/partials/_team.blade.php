<div class="team about-team">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <div class="team-text">
                    <div class="heading">
                        <h4>{{ Str::upper($aboutUsDTO->team_subtitle) }}</h4>
                        <h2>{{ Str::headline($aboutUsDTO->team_title) }}</h2>
                        <p>{!! nl2br(e($aboutUsDTO->team_description)) !!}</p>

                        <div class="single-button">
                            <a class="btn btn-primary edux-btn-primary">Find Experts</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-6">
                <div class="team-hire">
                    <div class="row">
                        @foreach ($teamList2 as $team2)
                            <div class="col-md-4 col-sm-6">
                                <div class="team-block">
                                    <a href="#">
                                        <div class="team-img">
                                            <img src="{{ $team2->getFirstMediaUrl('picture') }}">
                                        </div>
                                        <div class="hire-text">
                                            <h4>{{ $team2->user->full_name }}</h4>
                                            <p>{{ $team2->expertField ? $team2->expertField->name : '' }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        @foreach ($teamList3 as $team3)
                            <div class="col-md-4 col-sm-6">
                                <div class="team-block">
                                    <a href="#">
                                        <div class="team-img">
                                            <img src="{{ $team3->getFirstMediaUrl('picture') }}">
                                        </div>
                                        <div class="hire-text">
                                            <h4>{{ $team3->user->full_name }}</h4>
                                            <p>{{ $team3->expertField ? $team3->expertField->name : '' }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="about-team-interview ">
                    <img src="{{ asset('assets/frontend/img/interview-icon.png') }}">
                    <p>You can hire experts directly here for <a href="#">TV interview</a> or <a
                            href="#">Keynote Speakers</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
