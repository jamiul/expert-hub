<x-modal.form action="updateMessage">
    <x-slot name="title">Edit Message</x-slot>
    <x-form.textarea label="" wire:model="updatedMessage" placeholder=""> {{$message->content}} </x-form.textarea>
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">Save</button>
    </x-slot>
</x-modal.form>