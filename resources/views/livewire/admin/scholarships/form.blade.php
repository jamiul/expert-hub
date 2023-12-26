<x-form.input type="text" label="Scholarship Title" wire:model.blur="title" placeholder="Enter Title"/>
<x-form.input type="url" label="Scholarship Website" wire:model.blur="link" placeholder="Enter URL"/>
<x-form.choice label="Location" wire:model.change="country_id">
    <option value="">Select Country</option>
    @foreach ($countires as $country)
        <option value="{{ $country->id }}">{{ $country->name }}</option>
    @endforeach
</x-form.choice>
<x-form.choice label="University" wire:model.change="university_id">
    <option value="">Select University</option>
    @foreach ($universities as $university)
        <option value="{{ $university->id }}">{{ $university->name }}</option>
    @endforeach
</x-form.choice>
<x-form.input type="date" label="Deadline" name="type" placeholder="Pick Date"/>
<x-form.check name="automatic">
    Automatic Consideration
</x-form.check>
<x-form.select label="Study Area" name="title">
    <option value="">Select Area</option>
    <option value="Mr">Mr</option>
    <option value="Mrs">Mrs</option>
    <option value="Dr">Dr</option>
    <option value="Prof">Prof</option>
</x-form.select>
<x-form.select label="Student Type" name="title">
    <option value="">Select Type</option>
    <option value="Mr">Mr</option>
    <option value="Mrs">Mrs</option>
    <option value="Dr">Dr</option>
    <option value="Prof">Prof</option>
</x-form.select>
<x-form.select label="Study Level" name="title">
    <option value="">Select Level</option>
    <option value="Mr">Mr</option>
    <option value="Mrs">Mrs</option>
    <option value="Dr">Dr</option>
    <option value="Prof">Prof</option>
</x-form.select>
<p class="input-field-label mb-2">Scholarship Type</p>
<div class="d-flex gap-4">
    <x-form.check name="automatic">
        University
    </x-form.check>
    <x-form.check name="automatic">
        Govt
    </x-form.check>
    <x-form.check name="automatic">
        Project
    </x-form.check>
</div>