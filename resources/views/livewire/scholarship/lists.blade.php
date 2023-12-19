<div class="col-md-8">
    
    @forelse ($scholarships as $scholarship)
        <div class="right-sidebar">
            <input type="hidden" class="pageDetailUrl" value="{{ route('find.experts') }}"/>

            <div class="right-database">
                <div class="database-block">
                    <div class="database-contant">
                        <div class="database-img circle-img">
                            @if ($scholarship->university?->logo)
                                <img src="{{ asset($scholarship->university?->logo) }}"></img>
                            @else
                                <img src="{{asset('assets/frontend/img/database1.png')}}"></img>
                            @endif
                        </div>
                        <div class="database-text">
                            <h4>{{ $scholarship->title }}</h4>
                            @if (isset($scholarship->university->university_name))
                                <span>{{ $scholarship->university?->university_name }}</span>
                            @endif
                            @if (isset($scholarship->university->country->name))
                                <span>{{ $scholarship->university->country->name }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="database-right">
                        <a class="database-button" href="{{ route('find.experts') }}">{{ __('Find Experts') }}</a>
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
                        <li>
                            {{ $scholarship->deadline ? $scholarship->deadline->format('d F Y') : 'n/a' }}
                        </li>
                        <li>{{ __('Study area') }}</li>
                        <li>{{ $scholarship->eligibilities ? $scholarship->areas->implode('name', ', ') : 'n/a' }}</li>
                        <li>{{ __('Study Level') }}</li>
                        <li>{{ $scholarship->eligibilities ? $scholarship->eligibilities->implode('study_level', ', ') : 'n/a' }}</li>
                        <li>{{ __('Student type') }}</li>
                        <li>{{ $scholarship->student_type }}</li>
                        <li>{{ __('Scholarship Value') }}</li>
                        <li>{{ $scholarship->currency }} ${{ $scholarship->value }}</li>
                        <li>{{ __('Find supervisor') }}</li>
                        <li><a href="{{ $scholarship->supervisor_link }}">{{ __('Click Here') }}</a>&nbsp;</li>
                        <li>{{ __('Application Process') }}</li>
                        <li><a href="{{ $scholarship->application_process_link }}">{{ __('Click Here') }}</a></li>
                        <li>{{ __('Inquiry to Institution') }}</li>
                        <li>
                            <a href="mailto:{{ $scholarship->inquiry_institution }}">{{ $scholarship->inquiry_institution }}</a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @empty
        No records Found
    @endforelse

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