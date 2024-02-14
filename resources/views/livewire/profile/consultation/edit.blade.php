<x-modal.form action="{{ $currentStep === 5 ? 'updateConsultation' : '#' }}">
    <x-slot name="title">Edit Consultation</x-slot>
    @include('livewire.profile.consultation.form')

    @if ($errors->has('form.error'))
        <div class="alert alert-danger">
            {{ $errors->first('form.error') }}
        </div>
    @endif


    {{-- @dd($errors) --}}
    <x-slot name="button">
        <button wire:click="back" type="button"
            class="btn btn-outline-light {{ $currentStep < 2 ? 'd-none' : '' }}">Back</button>
        <button wire:click="next" class="btn btn-primary {{ $currentStep === 5 ? 'd-none' : '' }}">
            {{ $currentStep === 4 ? 'Preview Service' : 'Save & Continue' }}
        </button>
        <button type="submit" class="btn btn-primary {{ $currentStep < 5 ? 'd-none' : '' }}">Update Service</button>
    </x-slot>
</x-modal.form>
