<section class="page-section training-section">
    <div class="container">
        <div style="margin-bottom: 40px; max-width: 840px" class="section-title-wrapper text-center mx-auto">
            <h2 class="section-title">Upcoming Training</h2>
            <p class="section-title-lead">Elevate Your Skills With Training Led By Experts</p>
        </div>

        <div class="upcomming-training-wrapper">
            @foreach ($latestTrainings as $training)
            <div class="training-small-card bb-1 bt-1">
                <div class="training-small-card-schedule">
                    <p class="fw-medium">
                        @if($training->mode == \App\Enums\TrainingMode::Zoom)
                        <x-icon.video fill="#0036E3"/>
                        @elseif($training->mode == \App\Enums\TrainingMode::FaceToFace)
                        <x-icon.face-to-face fill="#0036E3"/>
                        @endif
                        {{ $training->mode }}
                    </p>
                    <p class="">{{ $training->start_date->format('d F Y') }} - {{ $training->end_date->format('d F Y') }}</p>
                    <p class="">{{ $training->start_time }} AEST, {{ $training->state->name }}, {{ $training->country->name }}</p>
                    <p class="">AUD {{ $training->fee }}</p>
                </div>
                <div class="training-small-card-info">
                    <h3 class="h6"><a href="{{ route('trainings.show', $training) }}">{{ $training->title }}</a></h3>
                    <div class="training-small-card-trainers">
                        @foreach ($training->instructors as $instructor)
                        <div class="user-small-card">
                            <div class="">
                                <img src="{{ $instructor->picture }}">
                            </div>
                            <div class="">
                                <h5 class="text-base mb-0">{{ $instructor->user->full_name ?? '' }}</h5>
                                <ul class="user-meta">
                                    <li>Melbourne University</li>
                                    <li>{{ $instructor->user->country?->name }}</li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="training-small-card-action">
                    <a href="#" class="btn btn-primary btn-md w-100 mb-2">Registration</a>
                    <a href="{{ route('trainings.show', $training) }}" class="btn btn-outline-primary btn-md w-100">Read More</a>
                </div>
            </div> <!--training-small-card-->
            @endforeach
        </div>
        <div class="view-all-training-btn-wrapper">
            <a href="{{ route('find.trainings') }}" class="btn btn-outline-primary border-2 btn-md">View All Training</a>
        </div>
    </div>
</section>
