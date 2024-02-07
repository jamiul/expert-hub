<x-modal.form action="submitDispute">
    <x-slot name="title">Dispute</x-slot>
    <div class="expert-small-card expert-card-has-bg mb-3 mt-2">
        <div class="expert-thumb">
            <img style="width: 40px" src="{{ $expert->picture }}"/>
        </div>
        <div class="expert-info">
            <p class="fw-medium project-expert-name mb-0">{{ $expert->user->full_name }}</p>
            <p class=" mb-0">{{ $expert->expertField->name }}</p>
        </div>
    </div>
    <x-form.input type="text" wire:model="project_title" label="Contract" disabled/>

    <x-form.select label="Reason for ending contract" wire:model="reason">
        <option value="">Select a reason</option>
        @foreach ($reasons as $key => $value)
            <option value="{{ $value }}">{{ $value }}</option>
        @endforeach
    </x-form.select>
    <x-form.countable-textarea wire:model="description" max="2000" label="Description "/>
    {{-- <x-form.check wire:model="terms">
        If any check thing we need
    </x-form.check> --}}
    <x-slot name="button">
        <button type="submit" class="btn btn-md btn-primary">Dispute</button>
    </x-slot>
</x-modal.form>