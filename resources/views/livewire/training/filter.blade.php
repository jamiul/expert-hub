<div class="page-sidebar">
    <div class="filter-widget border-bottom">
        <div class="sidebar-title-wrapper">
            <h3 class="h6">Filter</h3>
            <button wire:click="resetFilter" class="btn btn-filter-reset">
                Clear filters
            </button>
        </div>
    </div>
    <div class="filter-widget">
        <x-form.search class="input-field-md" wire:model.live.debounce="search" placeholder="Search by keyword"/>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Training by Categories</h4>
        <div class="widget-content">
            @foreach ($availableCategories as $name => $id)
            <x-form.check wire:change="filter" wire:model="categories" id="{{ $name }}" value="{{ $name }}">
                {{ $name }}
            </x-form.check>
            @endforeach
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Training Date</h4>
        <div class="widget-content">
            <x-form.flatpicker wire:change="filter" minDate="today" wire:model="date" class="input-field-md" Placeholder="Search by Date" name="datepicker"/>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Training Mode</h4>
        <div class="widget-content">
            <x-form.check wire:change="filter" wire:model="mode" id="zoom" value="{{ \App\Enums\TrainingMode::Zoom->value }}">
                Live via Zoom
            </x-form.check>
            <x-form.check wire:change="filter" wire:model="mode" id="face" value="{{ \App\Enums\TrainingMode::FaceToFace->value }}">
                Face-to-Face
            </x-form.check>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Language</h4>
        <div class="filter-widget-content">
            <x-form.autocomplete class="input-field-md" :searchResults="$languages" selectFunction="selectLanguage" removeFunction="removeLanguage" :selectedRecords="$selectedLanguages" name="language" placeholder="Search by Language"/>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Location</h4>
        <div class="filter-widget-content">
            <x-form.autocomplete class="input-field-md" :searchResults="$countries" selectFunction="selectCountry" removeFunction="removeCountry" :selectedRecords="$selectedCountries" name="country" placeholder="Search by Country"/>
        </div>
    </div>
</div>