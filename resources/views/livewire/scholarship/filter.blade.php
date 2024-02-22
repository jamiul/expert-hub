<div class="scholarship-database-filter-col page-sidebar">
    <div class="filter-widget">
        <x-form.search class="input-field-md" wire:model.live.debounce="search" placeholder="Search Scholarships"/>
    </div>
    <div class="filter-widget border-bottom">
        <div class="sidebar-title-wrapper">
            <h3 class="h6">Filter</h3>
            <button  wire:click="resetFilter" class="btn btn-filter-reset">
                Clear filters
            </button>
        </div>
        <ul class="ps-0">
            @foreach ($scholarshipType as $key => $value)
            <li wire:key="{{ $value }}" class="badge rounded-pill text-bg-primary">
                {{ $value }}
                <span wire:click="removeFilter('{{ $key }}')" class="cursor-pointer">
                    <x-icon.close width="18" height="18" fill="#fff"/>
                </span>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="filter-widget mb-40">
        <h6 class="filter-widget-title">Scholarship and Grant type</h6>
        <div class="filter-widget-content">
            @foreach ($scholarshipTypes as $scholarshipType)
            <x-form.check wire:change="filter" wire:model="scholarshipType" id="{{ $scholarshipType->value }}" value="{{ $scholarshipType->value }}">
                {{ $scholarshipType->value }}
            </x-form.check>
            @endforeach
        </div>
    </div>
    <div class="filter-widget mb-40">
        <h6 class="filter-widget-title">Location</h6>
        <div class="filter-widget-content">
            <x-form.autocomplete class="input-field-md" :searchResults="$countries" selectFunction="selectCountry" removeFunction="removeCountry" :selectedRecords="$selectedCountries" name="country" placeholder="Search by Country"/>
        </div>
    </div>
</div>
