<div>
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
                    <p>{{ $team2->expertField?->name }}</p>
                </div>
            </div>
        @endforeach
        <div class="clearfix"></div>
        @foreach ($teamList3 as $team3)
            <div class="expert-team-member">
                <div class="expert-team-member-img">
                    <a href="{{ route('expert.profile.show', $team3) }}">
                        <img src="{{ $team3->getFirstMediaUrl('picture') }}">
                    </a>
                </div>
                <div class="expert-team-member-info">
                    <h4>
                        <a href="{{ route('expert.profile.show', $team3) }}">{{ $team3->user->full_name }} </a>
                    </h4>
                    <p>{{ $team3->expertField?->name }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="expert-team-interview-notice">
        <img src="{{ asset('assets/frontend/img/interview-icon.png') }}">
        <p>You can hire experts directly here for <a href="{{ route('find.experts') }}">TV interview</a> or <a
                href="{{ route('find.experts') }}">Keynote Speakers</a></p>
    </div>
</div>
