

<x-modal>
    <x-slot name="title">Select Instructor </x-slot>
    <x-form.search label="" wire:model.live.debounce="instructorSearch"
                        placeholder="Search expert by name" />

                        @forelse($expertList as $expert)


                        <div class="project-expert-card border-bottom edux-project-expert-card position-relative">
                            <div class="project-expert-thumb">
                                <div class="expert-thumb-box">
                                    <img src="{{$expert->picture}}" class="rounded-circle" />
                                </div>
                            </div>
                            <div class="project-expert-details">
                                <div class="expert-card-header">
                                    <div class="expert-card-header-info eudx-expert-card-header-info">
                                        <h6 class="h6 project-expert-name mb-0">{{$expert->user->full_name}}</h6>
                                        <ul class="project-expert-meta mb-2">
                                            <li>{{$expert->expertField->name}}</li>                                            
                                            <li>{{$expert->user->country->name}}</li>
                                        </ul>
                                        <div class="d-flex align-items-center mb-1">
                                            <div><strong class="fw-medium fw-medium-currency">${{$expert->hourly_rate}} </strong>/ hr
                                            </div>
        
                                        </div>
        
                                    </div>
        
                                </div>
                                <div class="expert-card-body">
                                    <div class="tag-list eudx-tag-list" x-data="{ showAllTags: false, buttonText: ' + {{ $expert->expertises->count() - 4 }}' + ' More' }" :class="{ 'showing-less-tag': !showAllTags }">
                                        {{-- <a href="#" class="expert-profile-tag offer-consultation-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M12 20.9422C11.5987 20.9422 11.2439 20.8364 10.9356 20.6249C10.6272 20.4134 10.4115 20.1358 10.2884 19.7922H9.99997C9.59101 19.7922 9.23877 19.6445 8.94327 19.349C8.64776 19.0534 8.5 18.7012 8.5 18.2923V15.0115C7.49103 14.4 6.69712 13.5801 6.11827 12.5519C5.53942 11.5237 5.25 10.423 5.25 9.24998C5.25 7.36794 5.90448 5.77243 7.21345 4.46345C8.52243 3.15448 10.1179 2.5 12 2.5C13.882 2.5 15.4775 3.15448 16.7865 4.46345C18.0955 5.77243 18.75 7.36794 18.75 9.24998C18.75 10.4436 18.4605 11.5493 17.8817 12.5673C17.3028 13.5852 16.5089 14.4 15.5 15.0115V18.2923C15.5 18.7012 15.3522 19.0534 15.0567 19.349C14.7612 19.6445 14.4089 19.7922 14 19.7922H13.7115C13.5884 20.1358 13.3727 20.4134 13.0644 20.6249C12.7561 20.8364 12.4013 20.9422 12 20.9422ZM9.99997 18.2923H14V17.3538H9.99997V18.2923ZM9.99997 16.4692H14V15.5H9.99997V16.4692ZM9.79997 14H11.4038V11.0884L9.26153 8.94613L10.1 8.10768L12 10.0077L13.9 8.10768L14.7384 8.94613L12.5961 11.0884V14H14.2C15.1 13.5666 15.8333 12.9291 16.4 12.0875C16.9666 11.2458 17.25 10.3 17.25 9.24998C17.25 7.78331 16.7416 6.54164 15.725 5.52498C14.7083 4.50831 13.4666 3.99998 12 3.99998C10.5333 3.99998 9.29164 4.50831 8.27497 5.52498C7.25831 6.54164 6.74997 7.78331 6.74997 9.24998C6.74997 10.3 7.03331 11.2458 7.59997 12.0875C8.16664 12.9291 8.89997 13.5666 9.79997 14Z" fill="#0036E3" />
                                            </svg>Offer Keynote Speaker</a> --}}
                                            @foreach ($expert->expertises as $expertise)
                                        <a href="#" class="expert-profile-tag">{{ $expertise->name }}</a>
                                        @endforeach
                                        {{-- <a href="#" class="expert-profile-tag">Educational Research</a> --}}
                                        {{-- <a href="#" class="expert-profile-tag">+12 More</a> --}}
                                        @if ($expert->expertises->count() > 3)
                                        {{-- <a href="#" x-on:click="showAllTags = !showAllTags; buttonText = showAllTags ? 'Show Less' : ' + {{ $expert->expertises->count() - 4 }}' + ' More' " x-text="buttonText"  class="expert-profile-tag">+12 More</a> --}}
                                        <button x-on:click="showAllTags = !showAllTags; buttonText = showAllTags ? 'Show Less' : ' + {{ $expert->expertises->count() - 4 }}' + ' More' " x-text="buttonText" class="all-tags-trigger"></button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- <button type="button" class="btn eudx-btn-addback" wire:click="$dispatch('select-expert', { id: {{ $expert->id }} })" wire:click="$dispatchTo('training.create', 'select-expert', { id: {{ $expert->id }} })"> --}}
                            <button type="button" class="btn eudx-btn-addback" wire:click="$dispatch('select-expert', { id: {{ $expert->id }} })">
                            {{-- <button type="button" class="btn eudx-btn-addback" wire:click="$dispatch('select-experti', { id: {{ $expert->id }} })"> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.25 12.75H5.5V11.25H11.25V5.5H12.75V11.25H18.5V12.75H12.75V18.5H11.25V12.75Z" fill="white" />
                                </svg> Add expert </button>
                        </div>
        
                        @empty
        
                        @endforelse
</x-modal>

