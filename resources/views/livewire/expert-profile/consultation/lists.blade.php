<div class="consultant-prof edux-consultant-prof card card-24">
    <div class="d-flex gap-2 align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none">
            <path
                d="M3.99998 18.9999V7.99993V18.6922V18.5913V18.9999ZM4.3077 20.4999C3.80257 20.4999 3.375 20.3249 3.025 19.9749C2.675 19.6249 2.5 19.1973 2.5 18.6922V8.30765C2.5 7.80252 2.675 7.37495 3.025 7.02495C3.375 6.67495 3.80257 6.49995 4.3077 6.49995H8.5V4.80768C8.5 4.30256 8.675 3.875 9.025 3.525C9.375 3.175 9.80257 3 10.3077 3H13.6923C14.1974 3 14.625 3.175 14.975 3.525C15.325 3.875 15.5 4.30256 15.5 4.80768V6.49995H19.6923C20.1974 6.49995 20.625 6.67495 20.975 7.02495C21.325 7.37495 21.5 7.80252 21.5 8.30765V12.5442C21.2705 12.3852 21.0323 12.2474 20.7855 12.1307C20.5387 12.0141 20.2769 11.9102 20 11.8192V8.30765C20 8.2179 19.9711 8.14417 19.9134 8.08647C19.8557 8.02877 19.782 7.99993 19.6923 7.99993H4.3077C4.21795 7.99993 4.14423 8.02877 4.08653 8.08647C4.02883 8.14417 3.99998 8.2179 3.99998 8.30765V18.6922C3.99998 18.7819 4.02883 18.8557 4.08653 18.9134C4.14423 18.9711 4.21795 18.9999 4.3077 18.9999H11.575C11.6186 19.2666 11.676 19.5233 11.7471 19.7701C11.8183 20.0169 11.9064 20.2601 12.0116 20.4999H4.3077ZM9.99998 6.49995H14V4.80768C14 4.71793 13.9711 4.6442 13.9134 4.5865C13.8557 4.5288 13.782 4.49995 13.6923 4.49995H10.3077C10.218 4.49995 10.1442 4.5288 10.0865 4.5865C10.0288 4.6442 9.99998 4.71793 9.99998 4.80768V6.49995ZM18 22.4999C16.7513 22.4999 15.6891 22.0621 14.8135 21.1865C13.9378 20.3108 13.5 19.2486 13.5 17.9999C13.5 16.7512 13.9378 15.6891 14.8135 14.8134C15.6891 13.9378 16.7513 13.5 18 13.5C19.2487 13.5 20.3109 13.9378 21.1865 14.8134C22.0621 15.6891 22.5 16.7512 22.5 17.9999C22.5 19.2486 22.0621 20.3108 21.1865 21.1865C20.3109 22.0621 19.2487 22.4999 18 22.4999ZM18.4423 17.8191V15.0576H17.5577V18.1807L19.65 20.273L20.2731 19.6499L18.4423 17.8191Z"
                fill="#0036E3" />
        </svg>
        <h3 class="h5 mb-0">Consultation</h3>
        <button class="icon-btn">
            <x-icon.info fill="#C8C5D4" />
        </button>
    </div>
    @forelse($expert->consultation as $consultation)
        <div class="consultant-prof1 card-body border-0 {{ $loop->last ? '' : 'edux-border-bottom pt-3' }}">
            <div class="row">
                <div class="col-md-3">
                    <div class="prof-img">
                        <img
                            src="{{ $consultation->image }}"></img>
                            <button
                                wire:click="$dispatch('modal.open', { component: 'expert-profile.consultation.book', arguments: { consultation: {{ $consultation->id }} }})"
                                class="btn btn-primary btn-md w-100 mt-2"
                            >
                                Book Now
                            </button>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="prof-text">
                        <h6>{{ $consultation->expertField->name }}</h6>
                        <strong>
                            <p>${{ $consultation->hourly_rate }}/1 hrs</p>
                        </strong>
                        <div class="profp1">
                            <p class="mb-0">{{ $consultation->description }}</p>
                        </div>
                        <div class="user-profile-skills">
                            <ul>
                                @foreach ($consultation->skills as $skill)
                                    <li>{{ $skill->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <p>No data</p>
    @endforelse
</div>