<x-modal.form action="addExperience">
    <x-slot name="title">Add Work Experience</x-slot>
    @include('livewire.profile.experience.form')
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">Save</button>
    </x-slot>
</x-modal.form>