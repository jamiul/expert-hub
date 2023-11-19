<div class="col-md-8">
    
    @foreach ($scholarships as $scholarship)
        <div class="right-sidebar">
            <input type="hidden" class="pageDetailUrl" value="{{ route('consultant') }}"/>

            <div class="right-database">
                <div class="database-block">
                    <div class="database-contant">
                        <div class="database-img">
                            @if ($scholarship->university?->logo)
                                <img src="{{ asset($scholarship->university?->logo) }}"></img>
                            @else
                                <img src="{{asset('assets/frontend/img/database1.png')}}"></img>
                            @endif
                        </div>
                        <div class="database-text">
                            <h4>{{ $scholarship->title }}</h4>
                            <span>{{ $scholarship->university?->university_name }}</span>
                        </div>
                    </div>
                    <div class="database-right">
                        <a class="database-button" href="{{ route('consultant') }}">{{ __('Find Consultants') }}</a>
                        @auth
                            <a class="data-icon {{ $scholarship->userFavorite ? 'active' : '' }}" href="javascript:void(0)" wire:click="updateFavorite({{ $scholarship->id }}, {{ $scholarship->userFavorite ? 0 : 1 }})">
                                <img src="{{ asset('assets/frontend/img/like-icon.png') }}">
                            </a>    
                        @endauth
                        <a class="data-icon btnShareDetailPage" href="javascript:void(0)" wire:ignore data-bs-toggle="modal" data-bs-target="#shareModel">
                            <img src="{{ asset('assets/frontend/img/share-icon.png') }}">
                        </a>
                    </div>
                </div>
                <div class="database-p">
                    <p>{{ $scholarship->short_description }}</p>
                </div>
                <div class="deta-list">
                    <ul>
                        <li>{{ __('Application Deadline') }}</li>
                        <li>{{ $scholarship->application_deadline }}&nbsp;</li>
                        <li>{{ __('Study area') }}</li>
                        <li>{{ $scholarship->study_area }}&nbsp;</li>
                        <li>{{ __('Study Level') }}</li>
                        <li>{{ $scholarship->level?->level_name }}&nbsp;</li>
                        <li>{{ __('Student type') }}</li>
                        <li>{{ $scholarship->student_type }}&nbsp;</li>
                        <li>{{ __('Scholarship Value') }}</li>
                        <li>{{ $scholarship->value }}&nbsp;</li>
                        <li>{{ __('Find supervisor') }}</li>
                        <li><a href="{{ $scholarship->find_supervisor }}">{{ __('Click Here') }}</a>&nbsp;</li>
                        <li>{{ __('Application Process') }}</li>
                        <li>
                            @if ($scholarship->application_process)
                                <a href="{{ $scholarship->application_process }}">{{ __('Click Here') }}</a>
                            @endif
                            &nbsp;
                        </li>
                        <li>{{ __('Inquiry to Institution') }}</li>
                        <li>
                            <a href="mailto:{{ $scholarship->inquiry_institution }}">{{ $scholarship->inquiry_institution }}</a>
                            &nbsp;
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach

    {{ $scholarships->links() }}

    <!-- Modal share -->
    <div class="consultant-left-button">
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
    </div>

</div>