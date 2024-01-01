<x-modal.form action="editApart">
    <x-slot name="title">Edit About Aparts</x-slot>
    @include('livewire.admin.about.aparts.form')
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">Update</button>
    </x-slot>
</x-modal.form>