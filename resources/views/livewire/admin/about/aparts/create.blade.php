<x-modal.form action="addApart">
    <x-slot name="title">Add Apart Sets</x-slot>
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
    @if ($errors->has('apart'))
        <div class="alert alert-danger">{{ $errors->first('apart') }}</div>
    @endif
    @include('livewire.admin.about.aparts.form')
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">Save</button>
    </x-slot>
</x-modal.form>
