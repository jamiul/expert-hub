@props([
    'action',
])
<div class="bg-white shadow-lg p-5 mx-auto rounded">
    <div class="modal-content">
        <div class="modal-header p-0 border-0">
            <h5 class="modal-title">{{ $title }}</h5>
            <button wire:click="$dispatch('modal.close')" type="button" class="btn-close" aria-label="Close"></button>
        </div>
        <form wire:submit="{{ $action }}">
            <div class="modal-body pt-3 px-0">
                {{ $slot }}       
            </div>
            <div class="modal-footer px-0 pb-0 pt-3">
                <button wire:click="$dispatch('modal.close')" type="button" class="btn btn-outline-light">Close</button>
                {{ $button }}
            </div>
        </form>
    </div>
</div>