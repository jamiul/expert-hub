@props([
    'action',
])
<div class="bg-white shadow-lg p-40 mx-auto rounded">
    <div class="wep-modal-header">
        <h5 class="modal-title">{{ $title }}</h5>
        <button wire:click="$dispatch('modal.close')" type="button" class="btn-close" aria-label="Close"></button>
    </div>
    <form wire:submit="{{ $action }}">

        {{ $slot }}

        <div class="wep-modal-footer border-top pt-4 d-flex gap-3 justify-content-end mt-4">
            <button wire:click="$dispatch('modal.close')" type="button" class="btn btn-outline-light">Close</button>
            {{ $button }}
        </div>
    </form>
</div>
