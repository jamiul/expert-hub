<div class="scholarship-database-filter-col">
    <div class="filter-widget mb-40">
        <div class="d-flex justify-content-between">
            <h4 class="h6 mb-0">Filter</h4>
            <button wire:click="resetFilter" class="btn btn-sm btn-link text-decoration-underline px-0 ">
                Clear filters
            </button>
        </div>
    </div>
    <div class="filter-widget mb-40">
        <h6 class="filter-widget-title">Study Area</h6>
        <div class="filter-widget-content">
            @foreach ($studyAreas as $studyArea)
            <x-form.check wire:change="filter" wire:model="studyArea" id="{{ $studyArea->name }}" value="{{ $studyArea->id }}">
                {{ $studyArea->name }}
            </x-form.check>
            @endforeach
        </div>
    </div>
    <div class="filter-widget mb-40">
        <h6 class="filter-widget-title">Student type</h6>
        <div class="filter-widget-content">
            @foreach ($studentTypes as $studentType)
            <x-form.check wire:change="filter" wire:model="studentType" id="{{ $studentType->value }}" value="{{ $studentType->value }}">
                {{ $studentType->value }}
            </x-form.check>
            @endforeach
        </div>
    </div>
    <div class="filter-widget mb-40">
        <h6 class="filter-widget-title">Scholarship type</h6>
        <div class="filter-widget-content">
            @foreach ($scholarshipTypes as $scholarshipType)
            <x-form.check wire:change="filter" wire:model="scholarshipType" id="{{ $scholarshipType->value }}" value="{{ $scholarshipType->value }}">
                {{ $scholarshipType->value }}
            </x-form.check>
            @endforeach
        </div>
    </div>
    <div class="filter-widget mb-40">
        <h6 class="filter-widget-title">Study Level</h6>
        <div class="filter-widget-content">
            @foreach($levels as $level)
                <x-form.check wire:change="filter" wire:model="level" id="{{ $level->value }}" value="{{ $level->value }}">
                    {{ $level->value }}
                </x-form.check>
            @endforeach
        </div>
    </div>
    
    
    <div class="filter-widget mb-40">
        <h6 class="filter-widget-title">Application Deadline</h6>
        <div class="filter-widget-content">
            <x-form.select label="" wire:change="filter" wire:model="applicationDeadline">
                <option value="">Select Year</option>
                @foreach ($years as $year)
                    <option value="{{ $year }}">{{ $year }}</option>
                @endforeach
            </x-form.select>
        </div>
    </div>
    <div class="filter-widget mb-40">
        <h6 class="filter-widget-title">University</h6>
        <div class="filter-widget-content">
            <x-form.autocomplete :searchResults="$universities" selectFunction="selectUniversity" removeFunction="removeUniversity" :selectedRecords="$selectedUniversities" label="" name="university" placeholder="Search by University"/>
        </div>
    </div>
    <div class="filter-widget mb-40">
        <h6 class="filter-widget-title">Location</h6>
        <div class="filter-widget-content">
            <x-form.autocomplete :searchResults="$countries" selectFunction="selectCountry" removeFunction="removeCountry" :selectedRecords="$selectedCountries" label="" name="country" placeholder="Search by Country"/>
        </div>
    </div>
</div>
