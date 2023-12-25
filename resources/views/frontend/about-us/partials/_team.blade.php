<div class="team about-team">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <div class="team-text">
                    <div class="heading">
                        <h4>{{ $aboutUsDTO->team_subtitle }}</h4>
                        <h2>{{ $aboutUsDTO->team_title }}</h2>
                        <p>{!! nl2br(e($aboutUsDTO->team_description)) !!}</p>
                        <div class="team-button">
                            <a href="#">Find Experts</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-6">
                <div class="team-hire">
                    <div class="row">
                        @php
                            $item = 1;
                        @endphp

                        @foreach ($aboutUsDTO->team_list as $team)
                            @if ($item <= 2)
                                <div class="col-md-4 col-sm-6">
                                    <div class="team-block">
                                        <a href="#">
                                            <div class="team-img">
                                                <img src="{{ asset('assets/frontend/img/team-1.png') }}">
                                            </div>
                                            <div class="hire-text">
                                                <h4>{{ getFullNameByExpertID($team) }}</h4>
                                                <p>Accreditation Specialist</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif
                            @php $item++; @endphp
                        @endforeach
                    </div>
                    <div class="row">
                        @php $item2 = 1; @endphp
                        @foreach ($aboutUsDTO->team_list as $team)
                            @if ($item2 >= 3)
                                <div class="col-md-4 col-sm-6">
                                    <div class="team-block">
                                        <a href="#">
                                            <div class="team-img">
                                                <img src="{{ asset('assets/frontend/img/team-4.png') }}">
                                            </div>
                                            <div class="hire-text">
                                                <h4>{{ getFullNameByExpertID($team) }}</h4>
                                                <p>Curriculum Expert</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif
                            @php $item2++; @endphp
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
