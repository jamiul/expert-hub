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
                        <a class="data-icon btnShareDetailTraining" href="javascript:void(0)" wire:ignore data-toggle="tooltip" title="{{ __('coppied') }}">
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

</div>