<section class="page-section team-section">


    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">

                <div class="section-title-wrapper">
                    <h2 class="section-title">{{ Str::upper($team_subtitle) }}</h2>
                    <p class="section-title-lead">{{ Str::headline($team_title) }}</p>
                    <p class="section-title-summary">{!! nl2br(e($team_description)) !!}</p>

                    <x-button.link
                        href="{{ route('find.experts') }}"
                        class="btn btn-primary btn-md"
                        text="Get Started"
                    />
                </div>

            </div>
            <div class="col-lg-7">
                <div class="expert-team-building-wrapper">
                    @foreach ($teamList2 as $team2)

                        <div class="expert-team-member">

                            <div class="expert-team-member-img">
                                <a href="{{ route('expert.profile.show', $team2) }}">
                                    <img src="{{ $team2->getFirstMediaUrl('picture') }}">
                                </a>
                            </div>
                            <div class="expert-team-member-info">
                                <h4>
                                    <a href="{{ route('expert.profile.show', $team2) }}">{{ $team2->user->full_name }}</a>
                                </h4>
                                <p>{{ $team2->expertField ? $team2->expertField->parent->name : '' }}</p>
                            </div>


                        </div>
                    @endforeach
                    <div class="clearfix"></div>
                    @foreach ($teamList3 as $team3)

                        <div class="expert-team-member">

                            <div class="expert-team-member-img">
                                <a href="{{ route('expert.profile.show', $team3) }}"> <img
                                        src="{{ $team3->getFirstMediaUrl('picture') }}"> </a>
                            </div>
                            <div class="expert-team-member-info">
                                <h4>
                                    <a href="{{ route('expert.profile.show', $team3) }}">{{ $team3->user->full_name }} </a>
                                </h4>
                                <p>{{ $team3->expertField ? $team3->expertField->parent->name : '' }}</p>
                            </div>

                        </div>

                    @endforeach
                </div>

                <div class="expert-team-interview-notice">
                    <img src="{{ asset('assets/frontend/img/interview-icon.png') }}">
                    <p>You can hire experts directly here for <a href="#">TV interview</a> or <a
                            href="#">Keynote Speakers</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
