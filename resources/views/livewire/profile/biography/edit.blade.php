<x-modal.form action="updateBiography">
    <x-slot name="title">Update Biography</x-slot>
    @include('livewire.profile.biography.form')
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">Save</button>
    </x-slot>
</x-modal.form>
