<div class="scholarship-database-content-col">
    <div class="scholarship-database-content-list">
        @forelse ($scholarships as $scholarship)
        <div class="scholarship-database-content-list-item">
            <div class="scholarship-university-logo">
                <div>
                    @if ($scholarship->university?->logo)
                        <img src="{{ asset($scholarship->university?->logo) }}"/>
                    @else
                        <img src="{{ asset('assets/university-logo/university_of_melbourne.png') }}"/>
                    @endif
                </div>
            </div>
            <div class="scholarship-university-info">
                <h3 class="h6 mb-1"> {{ $scholarship->title }} </h3>
                @if (isset($scholarship->university))
                <p class="mb-0 text-sm fw-medium">{{$scholarship->university->name}} | {{$scholarship->country?->name}}</p>
                @endif
            </div>
            <div class="scholarship-action">
                <div class="d-flex justify-content-end flex-wrap">
                    {{-- <button class="btn btn-outline-primary m-1">Find Consultants</button> --}}
                    <a class="btn btn-outline-primary m-1" href="{{ route('find.experts') }}">Find Experts</a>
                    <button wire:click="favourite({{ $scholarship->id }})" class="btn btn-outline-light m-1 {{ $scholarship->favourited() ? 'favourited' : ''}}">
                        <x-icon.favorite/>
                    </button>
                    <div class="dropdown">
                        <button class="btn btn-outline-light m-1" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <x-icon.share/>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <x-icon.linkedin/>Linkedin
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <x-icon.facebook/>Facebook
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <x-icon.copy/>Copy Link
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="scholarship-details">
                <div class="custom-table text-sm">
                    <div class="tr">
                        <div class="td">Application Deadline</div>
                        <div class="td">
                            {{ $scholarship->deadline ? $scholarship->deadline->format('d F Y') : 'Avaiable' }}
                        </div>
                    </div>
                    <div class="tr">
                        <div class="td">Study Area</div>
                        <div class="td">
                            {{ $scholarship->studyAreas->count() ? $scholarship->studyAreas->implode('name', ', ') : 'N/A' }}
                        </div>
                    </div>
                    <div class="tr">
                        <div class="td">Study Level</div>
                        <div class="td">
                            {{ $scholarship->studyLevels->count() ? $scholarship->studyLevels->implode('name.value', ', ') : 'N/A'}}
                        </div>
                    </div>
                    <div class="tr">
                        <div class="td">Student Type</div>
                        <div class="td">{{ $scholarship->student_type ? $scholarship->student_type : 'n/a' }}</div>
                    </div>
                    <div class="tr">
                        <div class="td">Scholarship Website</div>
                        <div class="td">
                            @if($scholarship->link)
                            <a class="text-decoration-underline" href="{{ $scholarship->link }}">Click Here</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        No records Found
        @endforelse
        <hr>
        <div class="text-center">
            {{ $scholarships->links() }}
        </div>
    </div>
</div>
