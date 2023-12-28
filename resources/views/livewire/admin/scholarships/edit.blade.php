<x-modal.form action="updateScholarship">
    <x-slot name="title">Edit Scholarship</x-slot>
    @include('livewire.admin.scholarships.form')
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">Update</button>
    </x-slot>
</x-modal.form>