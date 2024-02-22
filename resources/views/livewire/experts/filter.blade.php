<div>
    <div class="filter-widget">
        <x-form.search class="input-field-md" wire:model.live.debounce="search" placeholder="Find Expert..."/>
    </div>
    <div class="filter-widget border-bottom">
        <div class="sidebar-title-wrapper">
            <h3 class="h6">Filter</h3>
            <button  wire:click="resetFilter" class="btn btn-filter-reset">
                Clear filters
            </button>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Expert Category</h4>
        <div class="widget-accordion use-scroll-content">
            @foreach ($expertFields as $expertField)
            <div x-data="{ isOpen: false }" class="widget-accordion-item" :class="{ 'accordion-item-active': isOpen }">
                <div class="widget-accordion-title" x-on:click="isOpen = !isOpen">
                    <x-form.check
                        wire:change="checkParentExpertField({{ $expertField }})"
                        wire:model="filterByExpertField"
                        class="m-0 gap-0"
                        id="{{ Str::slug($expertField->name) }}-{{ $expertField->id }}"
                        value="{{ $expertField->name }}"
                    />
                    {{ $expertField->name }}
                </div>
                <div class="widget-accordion-content" x-show="isOpen">
                    @foreach ($expertField->children as $child)
                        <x-form.check
                            wire:change="filter"
                            wire:model="fields"
                            id="{{ Str::slug($child->name) }}-{{ $child->id }}"
                            value="{{ $child->name }}"
                        >
                            {{ $child->name }}
                        </x-form.check>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Available for</h4>
        <div class="widget-content">
            <x-form.check wire:change="filter" wire:model="availableFor" id="consultation" value="{{ \App\Enums\AvailableFor::Consultation->value }}">
                Consultation
            </x-form.check>
            <x-form.check wire:change="filter" wire:model="availableFor" id="media" value="{{ \App\Enums\AvailableFor::MediaInterview->value }}">
                Media Interview
            </x-form.check>
            <x-form.check wire:change="filter" wire:model="availableFor" id="keynote" value="{{ \App\Enums\AvailableFor::KeynoteSpeaker->value }}">
                Keynote Speaker
            </x-form.check>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Location</h4>
        <x-form.autocomplete class="input-field-md" :searchResults="$countries" selectFunction="selectCountry" removeFunction="removeCountry" :selectedRecords="$selectedCountries" name="country" placeholder="Search by Country"/>
    </div>
{{--    <div class="filter-widget">--}}
{{--        <h4 class="widget-title">Hourly Rate (USD)</h4>--}}
{{--        <x-form.select x-on:change="window.scrollTo({top: 0, behavior: 'smooth'})" wire:change="filter" wire:model="hourlyRate" class="input-field-md">--}}
{{--            <option value="">Any hourly rate</option>--}}
{{--            <option value="50-100">$50-$100 /hour</option>--}}
{{--            <option value="101-150">$101-$150 /hour</option>--}}
{{--            <option value="151-200">$151-$200 /hour</option>--}}
{{--            <option value="201-250">$201-$250 /hour</option>--}}
{{--            <option value="251-300">$251-$300 /hour</option>--}}
{{--        </x-form.select>--}}
{{--    </div>--}}
</div>
