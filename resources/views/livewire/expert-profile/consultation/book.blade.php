<x-modal.form action="bookConsultation">
    <x-slot name="title">Booking A Curriculum development</x-slot>
    @include('livewire.expert-profile.consultation.form')
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">Book a Consultation</button>
    </x-slot>
</x-modal.form>