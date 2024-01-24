<x-modal.form action="addConsultation">
    <x-slot name="title">Add Consultation</x-slot>
    @include('livewire.profile.consultation.form')
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">Save</button>
    </x-slot>
</x-modal.form>