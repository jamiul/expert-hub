<div class="col-md-8">
    
    @foreach ($trainings as $training)
        <div class="right-sidebar">
            <input type="hidden" class="trainingDetailUrl" value="{{ route('find-training.details', $training->slug) }}"/>
            <div class="right-database">
                <div class="database-block">
                    <div class="database-contant">
                        <div class="database-img">
                            <img src="{{ asset('assets/frontend/img/find-training.png') }}"></img>
                        </div>
                        <div class="database-text">
                            <h4>
                                <a href="{{ route('find-training.details', $training->slug) }}">{{ $training->title }}</a>
                            </h4>
                            <span>Time in {{ $training->country?->name }} ({{ $training->country?->timezone }})</span>
                            <span>{{ $training->country?->name }}</span>
                        </div>
                    </div>
                    <div class="database-right">
                        @auth
                            <a class="data-icon {{ $training->userFavorite ? 'active' : '' }}" href="javascript:void(0)" wire:click="updateFavorite({{ $training->id }}, {{ $training->userFavorite ? 0 : 1 }})">
                                <img src="{{ asset('assets/frontend/img/like-icon.png') }}">
                            </a>    
                        @endauth
                        <div class="dopdown d-inline-block">
                            <!--  data-bs-toggle="modal" data-bs-target="#shareModel" -->
                            <a class="data-icon btnShareDetailTraining me-3" wire:ignore  href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('assets/frontend/img/share-icon.png') }}">
                            </a>
                            <ul class="dropdown-menu share__drop__menu" aria-labelledby="dropdownMenuLink">
                                <li>
                                    <a class="facebook d-flex gap-2 py-2 px-3 align-items-center" data-href="https://www.facebook.com/sharer/sharer.php?u={url}" target="blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="twitter d-flex gap-2 py-2 px-3 align-items-center" data-href="https://twitter.com/intent/tweet?&url={url}" target="blank">
                                        <i class="fa-brands fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="linkedin d-flex gap-2 py-2 px-3 align-items-center" data-href="http://www.linkedin.com/shareArticle?mini=true&url={url}" target="blank">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                        <span>Linkedin</span>
                                    </a>
                                </li> 
                            </ul>
                        </div>
                        <a class="database-button" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#staticBackdrop">{{ __('Registration') }}</a>
                    </div>
                </div>
                <div class="database-p">
                    <div class="text-truncate-3">
                        {!! $training->software_description !!}
                    </div>
                    <p>
                        <a href="javascript:void(0)" class="read-more-text">{{ __('Read More') }}</a>
                    </p>
                </div>
                <div class="deta-list">
                    <ul>
                        <li>{{ __('Seminar Dates') }}</li>
                        <li>
                            @foreach ($training->trainingDates as $index => $trainingDate)
                                {{ date('d M Y', strtotime($trainingDate->date_start)) }}
                                -
                                {{ date('d M Y', strtotime($trainingDate->date_end)) }}
                                
                                @if ($index != count($training->trainingDates) - 1)
                                    <br>
                                @endif
                            @endforeach
                            &nbsp;
                        </li>
                        <li>{{ __('Instructors') }}</li>
                        <li>
                            @foreach ($training->trainingInstructors as $index => $instructor)
                                @if ($index > 0)
                                |
                                @endif
                                <a href="{{ route('expert.details', $instructor->user->name) }}">{{ $instructor->user->name }}</a>
                            @endforeach
                            &nbsp;
                        </li>
                        <li>{{ __('Training Mode') }}</li>
                        <li class="textnone">
                            <a class="zoomcall" href="javascript:void(0)">
                                <img src="{{ asset('assets/frontend/img/zoom-icon.svg') }}"></img>
                                {{ $training->trainingMode?->name }}
                                </a>
                            </li>
                        <li>{{ __('Language') }}</li>
                        <li>{{ $training->language?->name }}&nbsp;</li>
                        <li>{{ __('Training Category') }}</li>
                        <li>{{ $training->projectCategory?->name }}&nbsp;</li>
                        <li>{{ __('Partner Institute') }}</li>
                        <li>
                            @foreach (explode(' | ', $training->partner_institute) as $index => $partner)
                                @if ($index > 0)
                                |
                                @endif
                                <a href="{{ route('expert.details', $partner) }}">{{ $partner }}</a>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach

    {{ $trainings->links() }}

    <!-- Modal Registration -->
    <div class="consultant-left-button">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ __('Schedule your consultation') }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="calendar-box" wire:ignore>
                            <input type="text" class="dateInput" placeholder="{{ __('Search by Date') }}">
                            <div class="calendar">
                                <div class="header">
                                    <button class="prevBtn">
                                        <i class="fa fa-angle-left"></i>
                                    </button>
                                    <h2 class="monthYear">{{ __('Month Year') }}</h2>
                                    <button class="nextBtn">
                                        <i class="fa fa-angle-right"></i>
                                    </button>
                                </div>
                                <div class="days daysContainer"></div>
                            </div>
                        </div>
                        <div class="calendar-wed">
                            <h3>Wednesday, 15th Oct</h3>
                            <ul>
                                <li><input type="text" placeholder="1:00 AM" name="fname"></li>
                                <li>
                                    <input type="text" placeholder="2:00 AM" name="fname">
                                    <a href="#">{{ __('Confirm') }}</a>
                                </li>
                                <li><input type="text" placeholder="3:00 AM" name="fname">
                                </li>
                                <li><input type="text" placeholder="4:00 AM" name="fname">
                                </li>
                                <li><input type="text" placeholder="4:00 AM" name="fname">
                                </li>
                                <li><input type="text" placeholder="4:00 AM" name="fname">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal share -->
    <!-- <div class="consultant-left-button">
        <div class="modal fade" id="shareModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="shareModelLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="share-links">
                            <li>
                                <a class="facebook" data-href="https://www.facebook.com/sharer/sharer.php?u={url}" target="blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a class="twitter" data-href="https://twitter.com/intent/tweet?&url={url}" target="blank">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="linkedin" data-href="http://www.linkedin.com/shareArticle?mini=true&url={url}" target="blank">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</div>