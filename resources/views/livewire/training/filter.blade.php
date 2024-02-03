<div class="page-sidebar">
    <div class="filter-widget border-bottom">
        <div class="sidebar-title-wrapper">
            <h3 class="h6">Filter</h3>
            <button class="btn btn-filter-reset">
                Clear filters
            </button>
        </div>
    </div>
    <div class="filter-widget">
        <x-form.search class="input-field-md" wire:model="skill"
                        placeholder="Search by keyword"/>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Training by Categories</h4>
        <div class="widget-content">
            <x-form.check id="all">
                Curriculum Development
            </x-form.check>
            <x-form.check id="agriculture">
                Course Accreditation
            </x-form.check>
            <x-form.check id="architecture">
                Learning Management System
            </x-form.check>
            <x-form.check id="Business">
                Policy Development
            </x-form.check>
            <x-form.check id="Education">
                Research and Analysis
            </x-form.check>
            <x-form.check id="Engineering">
                Financial Management
            </x-form.check>
            <x-form.check id="EnvironmentalScience">
                Project Management
            </x-form.check>
            <x-form.check id="Medicine">
                Writing and Editing
            </x-form.check>
            <x-form.check id="Health">
                Grants and Scholarships
            </x-form.check>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Training Date</h4>
        <div class="widget-content">
            <x-form.flatpicker class="input-field-md" label="" name="datepicker"/>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Training Mode</h4>
        <div class="widget-content">
            <x-form.check id="all">
                Live via Zoom
            </x-form.check>
            <x-form.check id="agriculture">
                Face-to-Face
            </x-form.check>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="widget-title">Language</h4>
        <div class="filter-widget-content">
            <div class="form-input-group form-input-has-icon autocomplete-field input-field-md"
                    x-data="{ open: false }">
                <div class="autocomplete-field-wrapper">
                    <input x-on:click="open = true" wire:model.live.debounce.500ms="country"
                            name="country" id="country" class="form-input-field"
                            placeholder="Search Language">
                    <span class="form-input-icon">
                        <x-icon.search/>
                    </span>
                </div>
            </div>
        </div>
    </div>

    {{--                            <div class="filter-widget">--}}
    {{--                                <h4 class="widget-title">Location</h4>--}}
    {{--                                <x-form.autocomplete :searchResults="$countries" selectFunction="selectCountry" removeFunction="removeCountry" :selectedRecords="$selectedCountries" name="country" placeholder="Search by Country"/>--}}
    {{--                            </div>--}}
    <div class="filter-widget">
        <h4 class="widget-title">Location</h4>
        <div class="filter-widget-content">
            <div class="form-input-group form-input-has-icon autocomplete-field input-field-md"
                    x-data="{ open: false }">
                <div class="autocomplete-field-wrapper">
                    <input x-on:click="open = true" wire:model.live.debounce.500ms="country"
                            name="country" id="country" class="form-input-field"
                            placeholder="Search Country">
                    <span class="form-input-icon">
                        <x-icon.search/>
                    </span>
                </div>
                <div class="autocomplete-field-suggestion">
                    <ul class="" x-show="open" x-on:click.outside="open = false"
                        x-on:keyup.escape.window="open = false" style="">
                        <!--[if BLOCK]><![endif]-->
                        <li wire:key="1"
                            x-on:click="open = false; $wire.selectCountry('Afghanistan')">
                            Afghanistan
                        </li>
                        <li wire:key="2"
                            x-on:click="open = false; $wire.selectCountry('Albania')"> Albania
                        </li>
                        <li wire:key="3"
                            x-on:click="open = false; $wire.selectCountry('Algeria')"> Algeria
                        </li>
                        <li wire:key="4"
                            x-on:click="open = false; $wire.selectCountry('American Samoa')">
                            American Samoa
                        </li>
                        <li wire:key="5"
                            x-on:click="open = false; $wire.selectCountry('Andorra')"> Andorra
                        </li>
                        <!--[if ENDBLOCK]><![endif]-->
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>