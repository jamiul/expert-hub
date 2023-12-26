<x-modal.form action="addApart">
    <x-slot name="title">Add Apart Sets</x-slot>
    @include('livewire.admin.about.aparts.form')
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">Save</button>
    </x-slot>
</x-modal.form>
