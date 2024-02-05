<x-modal.form action="{{ $currentStep === 5 ? 'addConsultation' : '#' }}">
    <x-slot name="title">Add Consultation</x-slot>
    @include('livewire.profile.consultation.form')
    <x-slot name="button">
        <button wire:click="next" class="btn btn-primary {{ $currentStep === 5 ? 'd-none' : '' }}">Save & Continue</button>
        <button type="submit" class="btn btn-primary {{ $currentStep < 5 ? 'd-none' : '' }}">Save</button>
    </x-slot>
</x-modal.form>