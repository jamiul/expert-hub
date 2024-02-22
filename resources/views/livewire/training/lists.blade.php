<div class="page-content p-0">
    <div class="training-list">
        @forelse ($trainings as $training)
            <div class="training-card bb-1">
                <div class="training-card-title">
                    <h3 class="h6">
                        <a href="{{ route('trainings.show', $training) }}">
                            {{ $training->title }}
                        </a>
                    </h3>
                </div>
                <div class="training-card-action">
                    <button
                        wire:click="favourite({{ $training->id }})"
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
        @empty
        <x-empty />
        @endforelse
    </div>
    {{ $trainings->links() }}
</div>
