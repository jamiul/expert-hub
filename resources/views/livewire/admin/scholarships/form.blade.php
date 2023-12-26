<x-form.input type="text" label="Scholarship Title" wire:model.blur="form.title" placeholder="Enter Title"/>
<x-form.input type="url" label="Scholarship Website" wire:model.blur="form.link" placeholder="Enter URL"/>
<x-form.choice label="Location" name="country_id" wire:model.change="form.country_id">
    <option value="">Select Country</option>
    @foreach ($countries as $country)
        <option value="{{ $country->id }}">{{ $country->name }}</option>
    @endforeach
</x-form.choice>
<x-form.choice label="University" name="university_id" wire:model.change="form.university_id">
    <option value="">Select University</option>
    @foreach ($universities as $university)
        <option value="{{ $university->id }}">{{ $university->name }}</option>
    @endforeach
</x-form.choice>
<x-form.input type="date" label="Deadline" wire:model="form.deadline" placeholder="Pick Date"/>
<x-form.check name="form.automatic_consideration">
    Automatic Consideration
</x-form.check>
<x-form.choice label="Study Area" name="studyArea" wire:model="form.studyAreas" multiple>
    <option value="">Select Area</option>
    @foreach ($studyAreas as $studyArea)
    <option value="{{$studyArea->id}}">{{$studyArea->name}}</option>
    @endforeach
</x-form.choice>
<x-form.choice label="Student Type" name="student_type" wire:model="form.student_type">
    <option value="">Select Type</option>
    @foreach (\App\Enums\Scholarship\StudentType::cases() as $studentType)
    <option value="{{ $studentType->value }}">{{ $studentType->value }}</option>
    @endforeach
</x-form.choice>
<x-form.choice label="Study Level" name="studyLevels" wire:model="form.studyLevels" multiple>
    <option value="">Select Level</option>
    @foreach (\App\Enums\Scholarship\StudyLevel::cases() as $studyLavel)
    <option value="{{ $studyLavel->value }}">{{ $studyLavel->value }}</option>
    @endforeach
</x-form.choice>
<p class="input-field-label mb-2">Scholarship Type</p>
<div class="d-flex gap-4">
    @foreach (\App\Enums\Scholarship\FundType::cases() as $fundType)
    <x-form.check id="{{$fundType->value}}" value="{{$fundType->value}}" name="fundTypes" wire:model.live="form.fundTypes">
        {{$fundType->value}}
    </x-form.check>
    @endforeach
</div>