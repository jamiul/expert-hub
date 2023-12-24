<x-form.input type="text" label="Job Title" wire:model.blur="form.title" placeholder="Type job title"/>
<x-form.input type="text" label="Institute" wire:model.blur="form.institute" placeholder="Type institute name"/>
<x-form.input type="text" label="Address" wire:model.blur="form.address" placeholder="Type address"/>
<div class="row">
    <div class="col-md-6">
        <x-form.choice name="start_year" wire:model.change="form.start_year" label="Start Year" searchPlaceholder="Type Year">
            @foreach ($years as $year)
                <option value="">Select Year</option>
                <option value="{{ $year }}">{{ $year }}</option>
            @endforeach
        </x-form.choice>
    </div>
    <div class="col-md-6">
        @if(!$this->form->currentExperience)
        <x-form.choice name="end_year" wire:model.change="form.end_year" label="End Year" searchPlaceholder="Type Year">
            @foreach ($years as $year)
                <option value="">Select Year</option>
                <option value="{{ $year }}">{{ $year }}</option>
            @endforeach
        </x-form.choice>
        @endif
    </div>
</div>
<x-form.textarea label="Description" wire:model="form.description" placeholder="Type"/>
<x-form.check wire:model.live="form.currentExperience">
    I currently work here
</x-form.check>