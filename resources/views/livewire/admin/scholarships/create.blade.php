<x-modal.form action="addEducation">
    <x-slot name="title">Add Education</x-slot>
    @include('livewire.admin.scholarships.form')
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">Save</button>
    </x-slot>
</x-modal.form>