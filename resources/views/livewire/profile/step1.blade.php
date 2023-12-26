<div class="progress-step-content  ">
    <h6 class="mb-2">Expert by Field</h6>
    <x-form.choice wire:model.change="expertise_id" label="">
        <option value="">Select Title</option>
        @foreach ($availableExpertFieldGroups as $group)
            <optgroup label="{{ $group->name }}">
                @foreach ($group->children as $child)
                    <option value="{{ $child->id }}">{{ $child->name }}</option>
                @endforeach
            </optgroup>
        @endforeach
    </x-form.choice>
    <h6 class="mb-2 mt-20">Expert skillset</h6>
    @error('selectedSkills')
    <div class="form-input-error-message">{{ $message }}</div>
    @enderror
    <div class="accordion-items-select-wrapper skillset-selection-area">
        <div class="card card-24">
            <div class="card-header bg-white">
                <x-form.search class="input-field-md" label="" name="skill" wire:model.live="skill"
                               placeholder="Search skillsets..."/>
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
    </div>
</div>
