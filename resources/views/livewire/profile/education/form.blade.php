<x-form.choice name="institution" wire:model.change="form.institution" label="Name of Institution" searchPlaceholder="Type institution name">
    <option value="">Select Institution</option>
    @foreach ($institutions as $institution)
        <option value="{{ $institution->name }}">{{ $institution->name }}</option>
    @endforeach
</x-form.choice>
<x-form.choice name="degree" wire:model.change="form.degree" label="Degree" searchPlaceholder="Type degree name">
    <option value="">Select Degree</option>
    @foreach ($degrees as $degree)
        <option value="{{ $degree->name }}">{{ $degree->name }}</option>
    @endforeach
</x-form.choice>
<x-form.choice name="field" wire:model.change="form.field" label="Field of Study" searchPlaceholder="Type Field of Study">
    <option value="">Select Field of Study</option>
    @foreach ($fields as $field)
        <option value="{{ $field->name }}">{{ $field->name }}</option>
    @endforeach
</x-form.choice>
<div class="row">
    <div class="col-md-6">
        <x-form.choice name="start_year" wire:model.change="form.start_year" label="Start Year" searchPlaceholder="Type Year">
            <option value="">Select Year</option>
            @foreach ($years as $year)
                <option value="{{ $year }}">{{ $year }}</option>
            @endforeach
        </x-form.choice>
    </div>
    <div class="col-md-6">
        @if(!$this->form->currentEducation)
        <x-form.choice name="end_year" wire:model.change="form.end_year" label="End Year" searchPlaceholder="Type Year">
            <option value="">Select Year</option>
            @foreach ($years as $year)
                <option value="{{ $year }}">{{ $year }}</option>
            @endforeach
        </x-form.choice>
        @endif
    </div>
</div>
<x-form.check name="currentEducation" wire:model.live="form.currentEducation">
    I currently study here
</x-form.check>