<div class="card card-24">
    <div class="card-body">
        <div class="page-block-heading d-flex justify-content-between gap-3 mb-3">
            <div class="d-flex gap-2 align-items-center">
                <x-icon.user-tie />
                <h3 class="h5 mb-0">Biography</h3>
                <button class="icon-btn">
                    <x-icon.info fill="#C8C5D4" />
                </button>
            </div>
            @if (is_null($biography))
                <button type="button" class="icon-btn icon-btn-md border"
                    wire:click="$dispatch('modal.open', { component: 'profile.biography.create'})">
                    <x-icon.add />
                </button>
            @else
                <button wire:click="$dispatch('modal.open', { component: 'profile.biography.edit', arguments: { profile: {{ $profile->id }} }})" class="icon-btn icon-btn-md border">
                    <x-icon.edit />
                </button>
            @endif
        </div>
        <div class="my-2">
            <p>{!! nl2br(e($biography)) !!}</p>
        </div>
    </div>
</div>
