<div class="col-md-4 col-sm-4" x-data="filterStore">
    <div class="left-sidebar">
        <div class="filter">
            <h5>{{ __('Filter') }}</h5>
            <a href="javascript:void(0)" wire:click="resetFilter" id="resetFilter">{{ __('Clear filters') }}</a>
        </div>
        <div class="search-block">
            <form class="example" wire:submit.prevent="filter">
                <input type="text" wire:model="search" placeholder="{{ __('Search expert...') }}" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <div class="study-level">
            <h3>{{ __('Training by Categories') }}</h3>
            <div class="accordion">
                @foreach ($categories as $projectCategory)
                    <div class="at-item">
                        <div class="at-title" :class="{ 'active': currentTabActive === '{{ $projectCategory->name }}' }"
                            x-on:click="handleActiveTab('{{ $projectCategory->name }}')">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">{{ $projectCategory->name }}</span>
                            </h2>
                        </div>
                        <div class="at-tab"
                             style="overflow: hidden; transition: all .2s ease; height: 0"
                            :style="{ 'height': currentTabActive === '{{ $projectCategory->name }}' ? '200px' : '0px' }">
                            <ul>
                                @foreach ($projectCategory->childrens as $categoryChild)
                                    <li>
                                        <input type="checkbox" wire:change="filter" wire:model="skillCategories"
                                            name="categories" value="{{ $categoryChild->id }}"
                                            id="category_{{ $projectCategory->id }}_{{ $categoryChild->id }}">
                                        <label
                                            for="category_{{ $projectCategory->id }}_{{ $categoryChild->id }}">{{ $categoryChild->name }}</label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        <div class="study-level">
            <h3>{{ __('Training Date') }}</h3>
            <input type="text" wire:change="filter" wire:model="trainingDate" hidden id="inputDateFilter">
            <div class="calendar-box" id="filterTrainingDateWrap" wire:ignore>
                <input type="text" class="dateInput" placeholder="{{ __('Search by Date') }}" value="{{ request()->get('trainingDate') }}">
                <div class="calendar">
                    <div class="header">
                        <button class="prevBtn"><i class="fa fa-angle-left"></i></button>
                        <h2 class="monthYear">{{ __('Month Year') }}</h2>
                        <button class="nextBtn"><i class="fa fa-angle-right"></i></button>
                    </div>
                    <div class="days daysContainer"></div>
                </div>
            </div>
        </div>

        <div class="study-level study-level-media">
            <h3>{{ __('Training Mode') }}</h3>
            <ul>
                @foreach ($trainingModes as $trainingMode)
                    <li>
                        <input wire:change="filter" wire:model="trainingMode" type="checkbox" id="trainingMode_{{ $trainingMode->id }}" value="{{ $trainingMode->id }}">
                        <label for="trainingMode_{{ $trainingMode->id }}">{{ $trainingMode->name }}</label>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="study-level">
            <h3>{{ __('Language') }}</h3>
            <select wire:change="filter" wire:model="language" hidden id="selectLanguageFilter">
                <option>{{ __('Search language') }}</option>
                @foreach ($languages as $language)
                    <option value="{{ $language->id }}">{{ $language->name }}</option>
                @endforeach
            </select>
            <div class="custom-select" id="filterLanguageWrap" wire:ignore>
                <select>
                    <option>{{ __('Search language') }}</option>
                    @foreach ($languages as $language)
                        <option value="{{ $language->id }}" {{ request()->get('language') == $language->id ? 'selected' : '' }}>
                            {{ $language->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="study-level">
            <h3>{{ __('Location') }}</h3>
            <select wire:change="filter" wire:model="country" hidden id="selectLocationFilter" multiple>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
            <div class="location-select position-relative scroller" id="filterLocationWrap">
                <div class="position-relative">
                    <input type="text" placeholder="{{__('Search Country') }}" id="locationInput" class="form-control locationInput" data-list="{{ json_encode($countries) }}">
                </div>
                <div class="tags pt-3 pb-1">
                    @foreach ($countries as $country)
                        @if ($this->country && in_array($country->id, $this->country))
                            <div class="tag d-inline-flex align-items-center rounded-pill ps-3 pe-2 py-1 me-2 mb-2 text-white fw-medium small lh-1">
                                <span>{{ $country->name }}</span>
                                <button class="btn p-0 border-0 rounded-circle" data-id="{{ $country->id }}">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.79989 13.9904L4.00952 13.2L8.20952 9.00001L4.00952 4.80001L4.79989 4.00964L8.99989 8.20964L13.1999 4.00964L13.9903 4.80001L9.79026 9.00001L13.9903 13.2L13.1999 13.9904L8.99989 9.79038L4.79989 13.9904Z" fill="white"/>
                                    </svg>
                                </button>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>

@push('bottom_scripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.day', function(e) {
                if ($('#inputDateFilter').val() != $('#filterTrainingDateWrap .dateInput').val()) {
                    let selectedVal = $('#filterTrainingDateWrap > input').val();

                    var inputElement = document.getElementById('inputDateFilter');
                    inputElement.value = selectedVal;
                    inputElement.dispatchEvent(new Event('input'));
                    inputElement.dispatchEvent(new Event('change'));
                }
            });
            
            $(document).on('click', '#filterLanguageWrap .select-items div', function(e) {
                let selectedVal = $(this).attr('data-value');

                var selectElement = document.getElementById('selectLanguageFilter');
                selectElement.value = selectedVal;
                var event = new Event('change');
                selectElement.dispatchEvent(event);
            });

            $(document).on('click', '#filterLocationWrap .autocomplete-items > div', function(e) {
                var vals = $("#selectLocationFilter").val();
                vals.push($(this).find('input').attr('data-id'));
                $("#selectLocationFilter").val(vals);

                reloadLocationSelected();
            });

            $(document).on('click', '#filterLocationWrap .rounded-circle', function(e) {
                var vals = $("#selectLocationFilter").val();
                vals = vals.filter((item) => item != $(this).attr('data-id'));
                $("#selectLocationFilter").val(vals);

                reloadLocationSelected();
            });

            function reloadLocationSelected() {
                $('#filterLocationWrap .tags').empty();
                $("#selectLocationFilter :selected").map(function(i, el) {
                    $('#filterLocationWrap .tags').append('\
                        <div class="tag d-inline-flex align-items-center rounded-pill ps-3 pe-2 py-1 me-2 mb-2 text-white fw-medium small lh-1">\
                            <span>' + $(el).text() + '</span>\
                            <button class="btn p-0 border-0 rounded-circle" data-id="' + $(el).val() + '">\
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">\
                                    <path d="M4.79989 13.9904L4.00952 13.2L8.20952 9.00001L4.00952 4.80001L4.79989 4.00964L8.99989 8.20964L13.1999 4.00964L13.9903 4.80001L9.79026 9.00001L13.9903 13.2L13.1999 13.9904L8.99989 9.79038L4.79989 13.9904Z" fill="white"></path>\
                                </svg>\
                            </button>\
                        </div>'
                    );
                }).get();

                var event = new Event('change');
                document.getElementById('selectLocationFilter').dispatchEvent(event);
            }
        });

        document.addEventListener('alpine:init', () => {
            Alpine.data('filterStore', () => ({
                currentTabActive: '',
                handleActiveTab(data) {
                    if (data !== this.currentTabActive) {
                        this.currentTabActive = data
                    } else {
                        this.currentTabActive = ''
                    }
                }
            }))
        })
    </script>
@endpush