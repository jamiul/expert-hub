<x-modal.form action="updateEducation">
    <x-slot name="title">Edit Education</x-slot>
    @include('livewire.profile.education.form')
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">Save</button>
    </x-slot>
</x-modal.form>
