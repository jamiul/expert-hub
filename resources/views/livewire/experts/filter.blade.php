<div class="page-sidebar">
    <div class="search-block">
        <x-form.search class="input-field-md" wire:model.live.debounce="search" placeholder="Find Expert..."/>
    </div>
    <div class="filter-widget border-bottom pt-3">
        <div class="d-flex justify-content-between">
            <h4 class="h6 mb-0">Filter</h4>
            <button wire:click="resetFilter" class="btn btn-sm btn-link text-decoration-underline px-0 ">
                Clear filters
            </button>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Experts by Field</h4>
        <div class="widget-accordion use-scroll-content">
            @foreach ($expertFields as $expertField)
            <div class="widget-accordion-item">
                <div class="widget-accordion-title" onclick="toggleAccordion(this)">
                    <x-form.check class="m-0 gap-0" wire:model="project-category" id="A"/>
                    {{ $expertField->name }}
                </div>
                <div class="widget-accordion-content">
                    @foreach ($expertField->children as $child)
                        <x-form.check wire:change="filter" wire:model="fields" id="{{ Str::slug($child->name) }}-{{ $child->id }}" value="{{ $child->name }}">
                            {{ $child->name }}
                        </x-form.check>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Expert Skillsets</h4>
        <div class="widget-accordion use-scroll-content">
            @foreach ($expertSkills as $expertSkill)
            <div class="widget-accordion-item">
                <div class="widget-accordion-title" onclick="toggleAccordion(this)">
                    <x-form.check class="m-0 gap-0" wire:model="project-category" id="A"/>
                    {{ $expertSkill->name }}
                </div>
                <div class="widget-accordion-content">
                    @foreach ($expertSkill->children as $child)
                        <x-form.check wire:change="filter" wire:model="skills" id="{{ Str::slug($child->name) }}-{{ $child->id }}" value="{{ $child->name }}">
                            {{ $child->name }}
                        </x-form.check>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Location</h4>
        <x-form.autocomplete class="input-field-md" :searchResults="$countries" selectFunction="selectCountry" removeFunction="removeCountry" :selectedRecords="$selectedCountries" name="country" placeholder="Search by Country"/>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Hourly Rate (USD)</h4>
        <x-form.select x-on:change="window.scrollTo({top: 0, behavior: 'smooth'})" wire:change="filter" wire:model="hourlyRate" class="input-field-md">
            <option value="">Any hourly rate</option>
            <option value="50-100">$50-$100 /hour</option>
            <option value="101-150">$101-$150 /hour</option>
            <option value="151-200">$151-$200 /hour</option>
            <option value="201-250">$201-$250 /hour</option>
            <option value="251-300">$251-$300 /hour</option>
        </x-form.select>
    </div>
</div>
