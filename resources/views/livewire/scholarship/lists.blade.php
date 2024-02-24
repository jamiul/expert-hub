<div class="page-content p-0">
    <div class="scholarship-database-content-list">
        @forelse ($scholarships as $scholarship)
            <div class="scholarship-database-content-list-item">
                <div class="scholarship-university-logo">
                    @if ($scholarship->logo)
                        <img src="{{ asset($scholarship->logo) }}"/>
                    @else
                        <img src="{{ asset('dummy-logo.png') }}"/>
                    @endif
                </div>
                <div class="scholarship-university-info">
                    <a target="_blank" href="{{ $scholarship->link }}"><h3 class="h6 mb-1"> {{ $scholarship->title }} </h3></a>
                        <p class="mb-0 text-sm fw-medium">{{$scholarship->organization}} | {{$scholarship->country?->name}}</p>
                </div>
                <div class="scholarship-action">
                    <div class="d-flex justify-content-end flex-wrap">
                        <button wire:click="favourite({{ $scholarship->id }})"
                                class="btn btn-outline-light btn-favorite m-1 {{ $scholarship->favourited() ? 'favorited' : ''}}">
                            <span class="heart-line"> <x-icon.heart fill="#0036E3"/></span>
                            <span class="heart-filled"> <x-icon.heart-filled fill="#0036E3"/></span>
                        </button>
                        <div class="dropdown">
                            <button class="btn btn-outline-light m-1" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <x-icon.share/>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" target="_blank"
                                       href="https://linkedin.com/shareArticle?u={{ route('scholarship-database.show', $scholarship) }}">
                                        <x-icon.logo-linkedin/>
                                        Linkedin
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" target="_blank"
                                       href="https://www.facebook.com/sharer/sharer.php?u={{ route('scholarship-database.show', $scholarship) }}">
                                        <x-icon.facebook/>
                                        Facebook
                                    </a>
                                </li>
                                <li x-data="{ scholarshipUrl: '{{ route('scholarship-database.show', $scholarship) }}' }">
                                    <button class="dropdown-item" x-clipboard="scholarshipUrl">
                                        <x-icon.copy/>
                                        Copy Link
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <a class="btn btn-outline-primary border-2 m-1" href="{{ route('find.experts') }}">Find Experts</a>
                    </div>
                </div>
                <div class="scholarship-details">
                    <p class="text-sm">
                        {{ Str::limit($scholarship->summary, 400) }} @if(Str::length($scholarship->summary) > 400)<a target="_blank" href="{{ $scholarship->link }}">more</a> @endif
                    </p>
                    <div class="custom-table text-sm">
                        <div class="tr">
                            <div class="td">Scholarship Website</div>
                            <div class="td">
                                @if($scholarship->link)
                                    <a target="_blank" class="text-decoration-underline fw-medium"
                                       href="{{ $scholarship->link }}">Click Here</a>
                                @else
                                    N/A
                                @endif
                            </div>
                        </div>
                        <div class="tr">
                            <div class="td">Find Supervisors</div>
                            <div class="td">
                                @if($scholarship->supervisor_link)
                                    <a target="_blank" class="text-decoration-underline fw-medium"
                                       href="{{ $scholarship->supervisor_link }}">Click Here</a>
                                @else
                                    N/A
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <x-empty />
        @endforelse
        {{ $scholarships->links() }}
    </div>
</div>
