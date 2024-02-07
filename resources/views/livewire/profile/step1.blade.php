<div class="progress-step-content  ">
    <h6 class="mb-2">Tell us about your area of experties</h6>
    <div class="pt-4">
        <x-form.select wire:model.live="expert_category_id" :search="false" label="Expert by Categories">
            <option value="">Select expert category</option>
            @foreach ($expertCategories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </x-form.select>
    </div>
    <div class="pt-4">
        <x-form.select wire:model.live="expertise_id" :search="false" label="Your Expertise">
            <option value="">Select Your Expertise</option>
            @foreach ($expertises as $expertise)
                <option value="{{ $expertise->id }}">{{ $expertise->name }}</option>
            @endforeach
        </x-form.select>
    </div>
    <div class="pt-4">
        <x-form.choice wire:model.live="skills" multiple label="Your Skillset">
            @foreach ($availableSkills as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </x-form.choice>
        <div class="text-sm">Suggestion skills:  <span class="text-sm fw-medium">Curriculum Editor, E-Learning Developer, Curriculum Writer, Curriculum Design, Research and Analysis, skill development</span></div>
    </div>
    <div class="service-fee-input-area pt-4">
        <div class="service-fee-input-row">
            <div class="service-fee-description">
                <p class="fw-medium mb-1">What is your preferred Hourly Rate</p>
            </div>
            <div class="service-fee-input">
                <div class="d-flex gap-4 align-items-center">
                    <div>
                        /hr
                    </div>
                    <div>
                        <x-form.input type="number" wire:model.blur="hourly_rate" placeholder="0.00"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @error('selectedSkills')
    <div class="form-input-error-message">{{ $message }}</div>
    @enderror --}}
    {{-- <div class="accordion-items-select-wrapper skillset-selection-area">
        <div class="card card-24">
            <div class="card-header bg-white">
                <x-form.search
                    class="input-field-md"
                    name="skill"
                    wire:model.live="skill"
                    placeholder="Search skillsets..."
                />
            </div>
            <div class="card-body py-3">

                @if(count($skillSearchResult) > 0)
                    <div class="skillset-search-suggestion">
                        @foreach ($skillSearchResult as $id => $name)

                            <button class="btn btn-light w-100" wire:click="addSkill({{ $id }})"
                                    wire:key="{{ Str::slug($name) }}">{{ $name }}</button>

                        @endforeach
                    </div>
                @else
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        @foreach ($availableSkillGroups as $skillId)
                            <div class="accordion-item" wire:key="{{ Str::slug($availableSkills[$skillId]['name']) }}">
                                <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#{{ Str::slug($availableSkills[$skillId]['name']) }}"
                                        aria-expanded="false"
                                        aria-controls="{{ Str::slug($availableSkills[$skillId]['name']) }}">
                                    {{ $availableSkills[$skillId]['name']}}
                                </button>
                                <div id="{{ Str::slug($availableSkills[$skillId]['name']) }}"
                                     class="accordion-collapse collapse"
                                     aria-labelledby="{{ Str::slug($availableSkills[$skillId]['name']) }}"
                                     data-bs-parent="#accordionFlushExample">
                                    @foreach ($availableSkills as $id => $skill)
                                        @if($skill['parent_id'] == $skillId)
                                            <button class="btn btn-light w-100" wire:click="addSkill({{ $id }})"
                                                    wire:key="{{ Str::slug($skill['name']) }}">{{ $skill['name'] }}</button>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

            </div>
        </div>
        <div class="card card-24">
            <div class="card-body">
                <ul class="button-list has-title">
                    @foreach ($selectedSkillGroups as $skillId)
                        <li class="button-list-title">
                            {{ $availableSkills[$skillId]['name']}}
                        </li>
                        @foreach ($selectedSkills as $id => $skill)
                            @if($skill['parent_id'] == $skillId)
                                <li class="button-list-item">
                                    {{ $skill['name'] }}
                                    <span wire:click="removeSkill({{ $id }})" class="button-list-icon">
                                        <x-icon.cancel/>
                                    </span>
                                </li>
                            @endif
                        @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
    </div> --}}
</div>
