<div class="page-sidebar">
    <div class="filter-widget border-bottom">
        <div class="d-flex justify-content-between">
            <h4 class="h6 mb-0">Filter</h4>
            <button wire:click="resetFilter" class="btn btn-sm btn-link text-decoration-underline px-0 ">
                Clear filters
            </button>
        </div>
    </div>
    <div class="filter-widget">
        <x-form.search class="input-field-md" wire:model.live.debounce="search" placeholder="Find Projects..."/>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Project by Categories</h4>
        <div class="widget-accordion use-scroll-content">

            @foreach ($projectCategories as $expertSkill)
            <div class="widget-accordion-item">
                <div class="widget-accordion-title" onclick="toggleAccordion(this)">
                    <x-form.check
                        class="m-0 gap-0"
                        wire:change="checkParent({{ $expertSkill }})"
                        wire:model="filterByCategories"
                        id="{{ Str::slug($expertSkill->name) }}-{{ $expertSkill->id }}"
                        value="{{ $expertSkill->name }}"
                    />
                    {{ $expertSkill->name }}
                </div>
                <div class="widget-accordion-content">
                    @foreach ($expertSkill->children as $child)
                        <x-form.check
                            wire:change="filter"
                            wire:model="skills"
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
        <h4 class="widget-title">Project Type</h4>
        <x-form.check class="mb-2" wire:change="filter" wire:model="projectTypes" value="fixed" id="fixed">
            Fixed Price
        </x-form.check>
        <div class="widget-field-row">
            <x-form.input class="input-field-md" type="text" wire:model="startAmount" placeholder="Min" />
            <x-form.input class="input-field-md" type="text" wire:model="endAmount" placeholder="Max" />
        </div>

        <x-form.check class="mb-2 mt-1" wire:change="filter" wire:model="projectTypes" value="hourly" id="hourly">
            Hourly
        </x-form.check>
        <div class="widget-field-row">
            <x-form.input class="input-field-md  mb-0" type="text" placeholder="Min" />
            <x-form.input class="input-field-md  mb-0" type="text" placeholder="Max" />
        </div>
    </div>
    <div class="filter-widget mb-40">
        <h6 class="filter-widget-title">Location</h6>
        <div class="filter-widget-content">
            <x-form.autocomplete class="input-field-md" :searchResults="$countries" selectFunction="selectCountry" removeFunction="removeCountry" :selectedRecords="$selectedCountries" name="country" placeholder="Search by Country"/>
        </div>
    </div>
</div>
