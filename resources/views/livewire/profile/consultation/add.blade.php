<x-modal>
    <x-slot name="title">Add Consultation</x-slot>
    <form wire:submit="addConsultation">
        @include('livewire.profile.consultation.form')
        @if ($errors->has('form.error'))
            <div class="alert alert-danger">
                {{ $errors->first('form.error') }}
            </div>
        @endif
        <div class="wep-modal-footer border-top pt-4 d-flex gap-3 justify-content-end mt-4">
            <button wire:click="back" type="button" class="btn btn-outline-light">Back</button>
            <button type="button" wire:click="next" class="btn btn-primary {{ $currentStep === 5 ? 'd-none' : '' }}">
                {{ $currentStep === 4 ? 'Preview Service' : 'Save & Continue' }}
            </button>
            <button type="submit" class="btn btn-primary {{ $currentStep < 5 ? 'd-none' : '' }}">Create
                Service</button>
        </div>
    </form>
</x-modal>
