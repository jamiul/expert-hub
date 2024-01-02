<div class="col-md-4 col-sm-4">
    <div class="left-sidebar">
        <div class="search-block">
            <x-form.search class="input-field-md" wire:model.live.debounce="search" placeholder="Find Expert..."/>
        </div>
        <div class="filter">
            <h5>Filter</h5>
            <button wire:click="resetFilter" class="btn btn-sm btn-link text-decoration-underline px-0 ">
                Clear filters
            </button>
        </div>
        <div class="study-level">
            <h3>Location</h3>
            <x-form.autocomplete class="input-field-md" :searchResults="$countries" selectFunction="selectCountry" removeFunction="removeCountry" :selectedRecords="$selectedCountries" name="country" placeholder="Search by Country"/>
        </div>
        <div class="study-level">
            <h3>Hourly Rate (USD)</h3>
            <div class="d-flex justify-content-between">
                <div style="width: 45%">
                    <x-form.select label="Min" wire:change="filter" wire:model="minimumHourlyRate">
                        <option value="">Select</option>
                        <option value="100">100</option>
                        <option value="110">110</option>
                        <option value="120">120</option>
                    </x-form.select>
                </div>
                <div style="width: 45%">
                    <x-form.select label="Max" wire:change="filter" wire:model="maximumHourlyRate">
                        <option value="">Select</option>
                        <option value="150">150</option>
                        <option value="160">160</option>
                        <option value="200">200</option>
                    </x-form.select>
                </div>
            </div>
        </div>
        <div class="study-level">
            <h3>Experts by Area</h3>
            <div class="accordion" id="acc__1">
                @foreach ($expertFields as $expertField)
                <div class="at-item">
                    <div class="at-title">
                        <h2>
                            <input type="checkbox" id="0">
                            <span for="0">{{ $expertField->name }}</span>
                        </h2>
                    </div>
                    <div class="at-tab" style="display: none;">
                        <ul>
                            @foreach ($expertField->children as $child)
                            <li>
                                <x-form.check wire:change="filter" wire:model="fields" id="{{ Str::slug($child->name) }}-{{ $child->id }}" value="{{ $child->name }}">
                                    {{ $child->name }}
                                </x-form.check>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
                <div class="collapse" id="collapse01">
                    <div class="at-item">
                        <div class="at-title">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">Humanities</span>
                            </h2>
                        </div>
                        <div class="at-tab" style="display: none;">
                            <ul>
                                <li>
                                    <input type="checkbox" id="141">
                                    <label for="141">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="142">
                                    <label for="142">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="143">
                                    <label for="143">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="144">
                                    <label for="144">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="145">
                                    <label for="145">Accreditation Review</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="146">
                                    <label for="146">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="147">
                                    <label for="147">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="148">
                                    <label for="148">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="149">
                                    <label for="149">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="150">
                                    <label for="150">Accreditation Review</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <a class="btn-link fw-medium text-primary" data-bs-toggle="collapse" href="#collapse01" role="button" aria-expanded="false" aria-controls="collapse01">
                    More...
                </a>
            </div>
        </div>

        <div class="study-level">
            <h3>Categories by Expertise</h3>
            <div class="accordion" id="acc__1">
                @foreach ($expertSkills as $expertSkill)
                <div class="at-item">
                    <div class="at-title">
                        <h2>
                            <input type="checkbox" id="0">
                            <span for="0">{{ $expertSkill->name }}</span>
                        </h2>
                    </div>
                    <div class="at-tab" style="display: none;">
                        <ul>
                            @foreach ($expertSkill->children as $child)
                            <li>
                                <x-form.check wire:change="filter" wire:model="skills" id="{{ Str::slug($child->name) }}-{{ $child->id }}" value="{{ $child->name }}">
                                    {{ $child->name }}
                                </x-form.check>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
                <div class="collapse" id="collapse02">
                    <div class="at-item">
                        <div class="at-title">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">Computer Programming</span>
                            </h2>
                        </div>
                        <div class="at-tab" style="display: none;">
                            <ul>
                                <li>
                                    <input type="checkbox" id="51">
                                    <label for="51">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="52">
                                    <label for="52">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="53">
                                    <label for="53">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="54">
                                    <label for="54">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="55">
                                    <label for="55">Accreditation Review</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="56">
                                    <label for="56">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="57">
                                    <label for="57">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="58">
                                    <label for="58">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="59">
                                    <label for="59">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="60">
                                    <label for="60">Accreditation Review</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <a class="btn-link fw-medium text-primary" data-bs-toggle="collapse" href="#collapse02" role="button" aria-expanded="false" aria-controls="collapse02">
                    More...
                </a>
            </div>
        </div>
    </div>
</div>
