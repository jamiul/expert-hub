<div class="col-md-4 col-sm-4" x-data="ExpertisesStore" x-init="handleInit">
    <div class="left-sidebar">
        <div class="search-block">
            <div class="example box-search">
                <input type="text" placeholder="Search expert..." x-on:keyup="handleOnchangeSearch" name="search"
                    x-model="search">
                <button x-on:click="handleSearch" type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div>
        <div class="filter">
            <h5>Filter</h5>
            <span class="clear-filter" x-on:click="handleClearFilter">Clear filters</span>
        </div>
        <div class="study-level">
            <h3>Experts by Area</h3>
            <div class="accordion" id="acc__1">
                <template x-for="expertise in dataShowExpertsByArea" :key="expertise.id">
                    <div class="at-item">
                        <div class="at-title" x-on:click="handleActiveTab(expertise.name)"
                            :class="{ 'active': currentTabActive === expertise.name }">
                            <h2>
                                <input type="checkbox" style="display: block !important"
                                    :checked="selectedAllExpertsByArea.includes(expertise.id)"
                                    x-on:click="handleSelectedAll( event, 'selectedAllExpertsByArea', 'selectedExpertsByArea', expertise)"
                                    :id="'ExpertsByArea_' + expertise.id">
                                <div style="width: 100% ; height: 100%" x-text="expertise.name">
                                </div>
                            </h2>
                        </div>
                        <div class="at-tab" style="overflow: hidden; transition: all .2s ease; height: 0"
                            :style="{ 'height': currentTabActive === expertise.name ? 'auto' : '0px' }">
                            <ul>
                                <template x-for="expertiseChild in expertise.childrens" :key="expertiseChild.id"
                                    wire:ignore>
                                    <li>
                                        <input :checked="selectedExpertsByArea.includes(expertiseChild.id)"
                                            x-on:change="handleGetDataFilter('selectedAllExpertsByArea', 'selectedExpertsByArea', expertiseChild.id, expertise)"
                                            type="checkbox" name="categories"
                                            :id="'ExpertsByArea_' + expertise.id + '_' + expertiseChild.id" />
                                        <label :for="'ExpertsByArea_' + expertise.id + '_' + expertiseChild.id"
                                            x-text="expertiseChild.name">
                                        </label>
                                    </li>
                                </template>
                            </ul>
                        </div>
                    </div>
                </template>
            </div>

            <span x-on:click="handleShowMoreFiltersExpertise('Experts by Area')" class="btn-link fw-medium text-primary"
                style="margin-top: 10px; display:block" data-bs-toggle="collapse" role="button" aria-expanded="false"
                aria-controls="collapse01" x-text="showMoreFilters === 'Experts by Area' ? 'Less...' : 'More...'">
            </span>
        </div>

        <div class="study-level">
            <h3>Categories by Expertise</h3>
            <div class="accordion" id="acc__2">
                <template x-for="category in dataShowCategory" :key="category.id">
                    <div class="at-item">
                        <div class="at-title" x-on:click="handleActiveTab(category.name)"
                            :class="{ 'active': currentTabActive === category.name }">
                            <h2>
                                <input type="checkbox" style="display: block !important"
                                    :checked="selectedAllCategoriesByExpertise.includes(category.id)"
                                    x-on:click="handleSelectedAll( event, 'selectedAllCategoriesByExpertise', 'selectedCategoriesByExpertise', category)"
                                    :id="'CategoriesByExpertise_' + category.id">
                                <div style="width: 100%; height: 100%" x-text="category.name">
                                </div>
                            </h2>
                        </div>
                        <div class="at-tab" style="overflow: hidden; transition: all .2s ease; height: 0"
                            :style="{ 'height': currentTabActive === category.name ? 'auto' : '0px' }">
                            <ul>
                                <template x-for="categoryChild in category.childrens" :key="categoryChild.id"
                                    wire:ignore>
                                    <li>
                                        <input :checked="selectedCategoriesByExpertise.includes(categoryChild.id)"
                                            x-on:change="handleGetDataFilter('selectedAllCategoriesByExpertise', 'selectedCategoriesByExpertise', categoryChild.id, category)"
                                            type="checkbox" name="categories"
                                            :id="'CategoriesByExpertise_' + category.id + '_' + categoryChild.id" />
                                        <label :for="'CategoriesByExpertise_' + category.id + '_' + categoryChild.id"
                                            x-text="categoryChild.name">
                                        </label>
                                    </li>
                                </template>
                            </ul>
                        </div>
                    </div>
                </template>
                <span x-on:click="handleShowMoreFiltersCategory('Categories by Expertise')"
                    class="btn-link fw-medium text-primary" style="margin-top: 10px; display:block"
                    data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01"
                    x-text="showMoreFilters === 'Categories by Expertise' ? 'Less...' : 'More...'">
                </span>
            </div>
        </div>

        <div class="study-level study-level-media">
            <h3>Available for</h3>
            <ul>
                <li>
                    <input :checked="selectedAvailableFor === 'media_interview'"
                        x-on:change="handleGetAvaliableFor('media_interview')" type="checkbox" id="151">
                    <label for="151">Media Interview</label>
                </li>
                <li>
                    <input :checked="selectedAvailableFor === 'keynote_speaker'"
                        x-on:change="handleGetAvaliableFor('keynote_speaker')" type="checkbox" id="152">
                    <label for="152">Keynote Speaker</label>
                </li>
                <li>
                    <input :checked="selectedAvailableFor === 'consultation'"
                        x-on:change="handleGetAvaliableFor('consultation')" type="checkbox" id="153">
                    <label for="153">Consultation</label>
                </li>
            </ul>
        </div>
        <div class="study-level">
            <h3>Hourly Rate (USD)</h3>
            <div class="container-select" id="container-select">
                <div class="input-select" x-on:click="handleOpenSelect">
                    <span x-text="hourlyRate.label"></span>
                    <img class="" src="{{ asset('assets/frontend/img/pagination-right-hover.png') }}" />
                </div>
                <div x-show='isShowSelect' class="box-select">
                    <template x-for="select in dataSelect">
                        <div class="item-select" x-on:click="handleOpenChooseOption(select)">
                            <span x-text="select.label"></span>
                        </div>
                    </template>
                </div>
            </div>
        </div>
        <div class="study-level">
            <h3>Location</h3>
            <div class="container-select" id="container-select-location" style="margin-bottom: 10px">
                <div class="input-select" x-on:click="handleOpenSelectLocation">
                    <span>Search Country</span>
                    <img class="" src="{{ asset('assets/frontend/img/pagination-right-hover.png') }}" />
                </div>
                <div x-show='isShowSelectLocation' class="box-select">
                    <template x-for="location in dataLocation">
                        <div class="item-select" x-on:click="handleOpenChooseOptionLocation(location)">
                            <span x-text="location.name"></span>
                        </div>
                    </template>
                </div>
            </div>
            <template x-for="location in selectedLocation">
                <div style="background-color: blue"
                    class="tag d-inline-flex align-items-center rounded-pill ps-3 pe-2 py-1 me-2 mb-2 text-white fw-medium small lh-1">
                    <span x-text="location.name"></span>
                    <button class="btn p-0 border-0 rounded-circle" x-on:click="handleRemoveLocation(location.id)">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.79989 13.9904L4.00952 13.2L8.20952 9.00001L4.00952 4.80001L4.79989 4.00964L8.99989 8.20964L13.1999 4.00964L13.9903 4.80001L9.79026 9.00001L13.9903 13.2L13.1999 13.9904L8.99989 9.79038L4.79989 13.9904Z"
                                fill="white" />
                        </svg>
                    </button>
                </div>
            </template>
        </div>

        <div class="study-level study-level-media">
            <h3>Rating</h3>
            <div class="rating-group">
                <input class="rating__input rating__input--none" checked name="rating2" id="rating2-0" value="0"
                    type="radio">
                <label aria-label="0 stars" class="rating__label" for="rating2-0">&nbsp;</label>
                <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating2-05"><i
                        class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                <input :checked="rating === 0.5" x-on:change='handleFilterRating(0.5)' class="rating__input"
                    name="rating2" id="rating2-05" value="0.5" type="radio">
                <label aria-label="1 star" class="rating__label" for="rating2-10"><i
                        class="rating__icon rating__icon--star fa fa-star"></i></label>
                <input :checked="rating === 1" x-on:change='handleFilterRating(1)' class="rating__input" name="rating2"
                    id="rating2-10" value="1" type="radio">
                <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating2-15"><i
                        class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                <input :checked="rating === 1.5" x-on:change='handleFilterRating(1.5)' class="rating__input"
                    name="rating2" id="rating2-15" value="1.5" type="radio">
                <label aria-label="2 stars" class="rating__label" for="rating2-20"><i
                        class="rating__icon rating__icon--star fa fa-star"></i></label>
                <input :checked="rating === 2" x-on:change='handleFilterRating(2)' class="rating__input" name="rating2"
                    id="rating2-20" value="2" type="radio">
                <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating2-25"><i
                        class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                <input :checked="rating === 2.5" x-on:change='handleFilterRating(2.5)' class="rating__input"
                    name="rating2" id="rating2-25" value="2.5" type="radio">
                <label aria-label="3 stars" class="rating__label" for="rating2-30"><i
                        class="rating__icon rating__icon--star fa fa-star"></i></label>
                <input :checked="rating === 3" x-on:change='handleFilterRating(3)' class="rating__input" name="rating2"
                    id="rating2-30" value="3" type="radio">
                <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating2-35"><i
                        class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                <input :checked="rating === 3.5" x-on:change='handleFilterRating(3.5)' class="rating__input"
                    name="rating2" id="rating2-35" value="3.5" type="radio">
                <label aria-label="4 stars" class="rating__label" for="rating2-40"><i
                        class="rating__icon rating__icon--star fa fa-star"></i></label>
                <input :checked="rating === 4" x-on:change='handleFilterRating(4)' class="rating__input" name="rating2"
                    id="rating2-40" value="4" type="radio">
                <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating2-45"><i
                        class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                <input :checked="rating === 4.5" x-on:change='handleFilterRating(4.5)' class="rating__input"
                    name="rating2" id="rating2-45" value="4.5" type="radio">
                <label aria-label="5 stars" class="rating__label" for="rating2-50"><i
                        class="rating__icon rating__icon--star fa fa-star"></i></label>
                <input :checked="rating === 5" x-on:change='handleFilterRating(5)' class="rating__input" name="rating2"
                    id="rating2-50" value="5" type="radio">
            </div>

        </div>
    </div>
    <!--.//div-->

</div>
<!--.//col-->

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('ExpertisesStore', () => ({
            search: '',
            currentTabActive: '',
            showMoreFilters: '',
            limitExpertsByArea: 5,
            dataExpertsByArea: @json($expertises),
            dataShowExpertsByArea: [],
            limitCategory: 5,
            dataCategory: @json($categories),
            dataLocation: @json($countries),
            dataShowCategory: [],
            selectedExpertsByArea: [],
            selectedAllExpertsByArea: [],
            selectedAllCategoriesByExpertise: [],
            selectedCategoriesByExpertise: [],
            selectedAvailableFor: [],
            selectedHourlyRate: [],
            selectedLocation: @json($location),
            rating: @json($rating),
            hourlyRate: {
                id: 1,
                value: 'all',
                label: 'Any hourly rate'
            },
            dataSelect: [],
            isShowSelect: false,
            isShowSelectLocation: false,
            handleInit() {
                this.dataSelect = [{
                        id: 1,
                        value: 'all',
                        label: 'Any hourly rate'
                    },
                    {
                        id: 2,
                        value: '50-100',
                        label: '$50-$100 / hour'
                    },
                    {
                        id: 3,
                        value: '101-150',
                        label: '$101-$150 / hour'
                    },
                    {
                        id: 4,
                        value: '151-200',
                        label: '$151-$200 / hour'
                    },
                    {
                        id: 5,
                        value: '201-250',
                        label: '$201-$250 / hour'
                    },
                    {
                        id: 6,
                        value: '251-300',
                        label: '$251-$300 / hour'
                    },
                    {
                        id: 6,
                        value: '300',
                        label: '> $300'
                    }
                ]

                if (this.selectedLocation.length > 0) {
                    const newLocation = []
                    Array.from(this.dataLocation).forEach(x => {
                        if (Array.from(this.selectedLocation).map(Number).includes(Object
                                .assign({}, x).id)) {
                            newLocation.push(Object.assign({}, x))
                        }
                    })
                    this.selectedLocation = newLocation;
                }

                document.addEventListener('click', (e) => {
                    const container_select = document.getElementById('container-select')
                    const container_select_location = document.getElementById(
                        'container-select-location')
                    if (!container_select.contains(e.target)) {
                        this.isShowSelect = false
                    }

                    if (!container_select_location.contains(e.target)) {
                        this.isShowSelectLocation = false
                    }
                })

                this.handleInitExpertsByArea()
                this.handleInitCategory()
            },
            handleOnchangeSearch(event) {
                if (event.target.value === '') {
                    this.handleSubmitFilter()
                }
            },
            handleOpenSelect() {
                this.isShowSelect = !this.isShowSelect
            },
            handleOpenChooseOption(data) {
                this.hourlyRate = data
                this.isShowSelect = false
                this.handleSubmitFilter()
            },
            handleGetAvaliableFor(data){
              if (!this.selectedAvailableFor.includes(data)) {
                 this.selectedAvailableFor.push(data)
              } else {
                this.selectedAvailableFor = this.selectedAvailableFor.filter(x => x !== data)
              }
              this.handleSubmitFilter()
            },
            handleCloseSelectLocation() {
                this.isShowSelectLocation = false
            },
            handleOpenSelectLocation() {
                this.isShowSelectLocation = !this.isShowSelectLocation
            },
            handleOpenChooseOptionLocation(data) {
                if (!this.selectedLocation.some(x => x.id === data.id)) {
                    this.selectedLocation.push(data)
                }
                this.isShowSelectLocation = false
                this.handleSubmitFilter()
            },
            handleInitExpertsByArea() {
                this.dataShowExpertsByArea = [];
                Array.from(this.dataExpertsByArea).forEach((data, index) => {
                    if (index < this.limitExpertsByArea) {
                        this.dataShowExpertsByArea.push(Object.assign({}, data));
                    }
                })
            },
            handleInitCategory() {
                this.dataShowCategory = []
                Array.from(this.dataCategory).forEach((data, index) => {
                    if (index < this.limitCategory) {
                        this.dataShowCategory.push(Object.assign({}, data));
                    }
                })

            },
            handleFilterRating(rating) {
                this.rating = rating;
                this.handleSubmitFilter()
            },
            handleRemoveLocation(id) {
                this.selectedLocation = this.selectedLocation.filter(x => x.id !== id)
                this.handleSubmitFilter()
            },
            handleActiveTab(data) {
                if (data !== this.currentTabActive) {
                    this.currentTabActive = data
                } else {
                    this.currentTabActive = ''
                }
            },
            handleGetHourlyRate() {
                alert(this.hourlyRate)
            },
            handleSearch() {
                this.handleSubmitFilter()
            },
            handleShowMoreFiltersExpertise(data) {
                if (data !== this.showMoreFilters) {
                    this.showMoreFilters = data
                    this.dataShowExpertsByArea = this.dataExpertsByArea;
                } else {
                    this.showMoreFilters = ''
                    this.dataShowExpertsByArea = []
                    this.handleInitExpertsByArea()
                }
                this.handleSubmitFilter()
            },
            handleShowMoreFiltersCategory(data) {
                if (data !== this.showMoreFilters) {
                    this.showMoreFilters = data
                    this.dataShowCategory = this.dataCategory;
                } else {
                    this.showMoreFilters = ''
                    this.dataShowCategory = []
                    this.handleInitCategory()
                }
                this.handleSubmitFilter()
            },
            handleGetDataFilter(nameParent, nameChild, dataChild, dataParent) {
                if (!this[nameChild].includes(dataChild)) {
                    this[nameChild].push(dataChild)
                } else {
                    this[nameChild] = this[nameChild].filter(x => x !== dataChild)
                }

                let count = 0;
                dataParent.childrens.forEach((child) => {
                    if (this[nameChild].includes(child.id)) {
                        count++
                    }
                })

                if (count === dataParent.childrens.length) {
                    this[nameParent].push(dataParent.id)
                } else {
                    this[nameParent] = this[nameParent].filter(x => x !== dataParent.id)
                }
                this.handleSubmitFilter()
            },
            handleSelectedAll(event, nameParent, nameChild, data) {
                event.stopPropagation()
                if (!this[nameParent].includes(data.id)) {
                    this.currentTabActive = data.name
                    this[nameParent].push(data.id)
                    data.childrens.forEach(item => !this[nameChild].includes(item.id) && this[
                        nameChild].push(item.id))
                } else {
                    this[nameParent] = this[nameParent].filter(x => x !== data.id)
                    data.childrens.forEach(item => {
                        this[nameChild] = this[nameChild].filter(x => x !== item.id)
                    })
                }
                this.handleSubmitFilter()
            },
            handleSubmitFilter() {
                const newLocation = []
                this.selectedLocation.forEach(item => newLocation.push(item.id))

                Livewire.dispatch('handleSubmitFilter', {
                    filters: {
                        search: this.search,
                        selectedExpertsByArea: this.selectedExpertsByArea,
                        selectedCategoriesByExpertise: this.selectedCategoriesByExpertise,
                        selectedAvailableFor: this.selectedAvailableFor,
                        selectedHourlyRate: this.hourlyRate.value === 'all' ? [] : [this
                            .hourlyRate.value
                        ],
                        selectedLocation: newLocation,
                        rating: this.rating,
                    }
                })
            },
            handleClearFilter() {
                this.selectedAllExpertsByArea = [],
                this.selectedAllCategoriesByExpertise = [],
                this.search = ''
                this.selectedExpertsByArea = []
                this.selectedCategoriesByExpertise = []
                this.selectedAvailableFor = []
                this.selectedHourlyRate = []
                this.selectedLocation = []
                this.rating = ''
                Livewire.dispatch('handleClearFilter')
            }
        }))
    })
</script>