@foreach ($instructors as $instructor)
    <div class="expert-card py-3">
        <div class="expert-card-header mb-2">
            <div class="expert-thumb">
                <div class="expert-thumb-box">
                    <img src="{{ $instructor->picture }}" />
                </div>
            </div> <!--expert-thumb-->
            <div class="expert-info">
                <h3 class="h6 expert-name mb-0">{{ $instructor->user->full_name ?? '' }}</h3>
                <ul class="expert-meta">
                    <li>{{ $instructor->expertField->name }}</li>
                    <li>{{ $instructor->user->country?->name }}</li>
                </ul>

            </div><!--expert-info-->
            <div class="expert-card-action">
                <button wire:click="favouriteIntructor({{ $instructor->id }})"
                    class="btn btn-icon btn-outline-light btn-favorite m-1 {{ $instructor->favourited() ? 'favorited' : '' }}">
                    <span class="heart-line"> <x-icon.heart fill="#0036E3" /></span>
                    <span class="heart-filled"> <x-icon.heart-filled fill="#0036E3" /></span>
                </button>
                <button class="btn btn-md btn-icon btn-outline-light">
                    <x-icon.message-line />
                </button>
                <button class="btn btn-md btn-outline-primary border-2"> Invite Project</button>
            </div>
        </div>
        <div class="expert-card-body">
            <div class="expert-summary py-3">
                <p class="mb-0">{{ $instructor->biography ?? '' }}</p>
            </div>
        </div>
    </div>
@endforeach
