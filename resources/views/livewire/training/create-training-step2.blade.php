<x-form.select wire:model="countryId" label="Country">
    <option>Choose</option>
    <option value="12">Australia</option>

</x-form.select>

<x-form.select wire:model="stateId" label="State">
    <option>Choose</option>
    @foreach ($states as $id => $name)
    <option value="{{ $id }}">{{ $name }}</option>
    @endforeach

</x-form.select>

<div class="seminar-date-area">

    <x-form.flatpicker label="Start Date" wire:model="startDate" name="datepicker" />
</div>


<div class="time-picker-area my-3">

    <x-form.timepicker label="Start time" name="timepicker" wire:model="startTime" />
</div>

<div class="seminar-date-area">
    <x-form.flatpicker label="End Date" wire:model="endDate" name="datepicker" />
</div>


<div class="time-picker-area my-3">
    <x-form.timepicker label="End time" name="timepicker" wire:model="endTime" />
</div>



<x-form.select label="Select Training Mode" wire:model="trainingMode">
    <option>Choose</option>
    @foreach (App\Enums\TrainingMode::cases() as $trainingMode)
    <option value="{{ $trainingMode->value }}">{{ $trainingMode->value }}</option>
    @endforeach
</x-form.select>

<x-form.input type="text" label="Zoom Link" wire:model="link" placeholder="Link" />

<x-form.select label="Select Training Language" wire:model="languageId">
    <option>Choose</option>
    @foreach ($languages as $language)
    <option value="{{ $language->id }}">{{ $language->name }}</option>
    @endforeach
    <!-- <option value="French">French</option>
                <option value="English">English</option>
                <option value="English">English</option>
                <option value="English">English</option>
                <option value="French">French</option> -->
</x-form.select>