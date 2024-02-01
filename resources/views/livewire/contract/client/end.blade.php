<x-modal.form action="endContract">
    <x-slot name="title">End contract</x-slot>
    <div class="expert-small-card expert-card-has-bg mb-3 mt-2">
        <div class="expert-thumb">
            <img style="width: 40px" src="{{ $expert->picture }}"/>
        </div>
        <div class="expert-info">
            <p class="fw-medium project-expert-name mb-0">{{ $expert->user->full_name }}</p>
            <p class=" mb-0">{{ $expert->expertField->name }}</p>
        </div>
    </div>
    <x-form.input type="text" label="Project" wire:model="project" disabled/>

    <x-form.select label="Reason for ending contract" wire:model="reason">
        <option value="">Select a reason</option>
        @foreach ($reasons as $key => $value)
            <option value="{{ $value }}">{{ $value }}</option>
        @endforeach
    </x-form.select>

    <p class="input-field-label mb-1">How much you likely to recommend this expert?</p>
    <div class="recommendation-input-wrapper">
        <div class="recommendation-input-labels">
            <div>😟 Not at all</div>
            <div>😃 Extremely Good</div>
        </div>
        <div class="recommendation-input-fields">
            <div><input type="radio" wire:model="recommendation" value="0" id="0"><label for="0">0</label></div>
            <div><input type="radio" wire:model="recommendation" value="1" id="1"><label for="1">1</label></div>
            <div><input type="radio" wire:model="recommendation" value="2" id="2"><label for="2">2</label></div>
            <div><input type="radio" wire:model="recommendation" value="3" id="3"><label for="3">3</label></div>
            <div><input type="radio" wire:model="recommendation" value="4" id="4"><label for="4">4</label></div>
            <div><input type="radio" wire:model="recommendation" value="5" id="5"><label for="5">5</label></div>
            <div><input type="radio" wire:model="recommendation" value="6" id="6"><label for="6">6</label></div>
            <div><input type="radio" wire:model="recommendation" value="7" id="7"><label for="7">7</label></div>
            <div><input type="radio" wire:model="recommendation" value="8" id="8"><label for="8">8</label></div>
            <div><input type="radio" wire:model="recommendation" value="9" id="9"><label for="9">9</label></div>
            <div><input type="radio" wire:model="recommendation" value="10" id="10"><label for="10">10</label></div>
        </div>
    </div>
    <div wire:ignore class="rating-input-wrapper my-3">
        <div class="rating-input-label">
            Feedback to Expert {{ $skill }}
        </div>
        <div class="rating-input-field-wrapper">
            <div class="rating-input-field" data-category="Skill">
                <input type="radio" wire:model="skill" value="1" id="skill-1" />
                <label for="skill-1" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>

                <input type="radio" wire:model="skill" value="2" id="skill-2" />
                <label for="skill-2" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>

                <input type="radio" wire:model="skill" value="3" id="skill-3" />
                <label for="skill-3" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>

                <input type="radio" wire:model="skill" value="4" id="skill-4" />
                <label for="skill-4" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>

                <input type="radio" wire:model="skill" value="5" id="skill-5" />
                <label for="skill-5" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>
            </div>
            <div> Skill</div>
        </div>

        <div class="rating-input-field-wrapper">
            <div class="rating-input-field" data-category="Availability">
                <input type="radio" wire:model="availability" value="1" id="availability-1" />
                <label for="availability-1" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>

                <input type="radio" wire:model="availability" value="2" id="availability-2" />
                <label for="availability-2" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>

                <input type="radio" wire:model="availability" value="3" id="availability-3" />
                <label for="availability-3" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>

                <input type="radio" wire:model="availability" value="4" id="availability-4" />
                <label for="availability-4" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>

                <input type="radio" wire:model="availability" value="5" id="availability-5" />
                <label for="availability-5" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>
            </div>
            <div> Availability</div>
        </div>

        <div class="rating-input-field-wrapper">
            <div class="rating-input-field" data-category="Communication">
                <input type="radio" wire:model="communication" value="1" id="communication-1" />
                <label for="communication-1" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>

                <input type="radio" wire:model="communication" value="2" id="communication-2" />
                <label for="communication-2" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>

                <input type="radio" wire:model="communication" value="3" id="communication-3" />
                <label for="communication-3" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>

                <input type="radio" wire:model="communication" value="4" id="communication-4" />
                <label for="communication-4" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>

                <input type="radio" wire:model="communication" value="5" id="communication-5" />
                <label for="communication-5" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>
            </div>
            <div> Communication</div>
        </div>

        <div class="rating-input-field-wrapper">
            <div class="rating-input-field" data-category="Deadlines">
                <input type="radio" wire:model="deadlines" value="1" id="availability-1" />
                <label for="deadlines-1" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>

                <input type="radio" wire:model="deadlines" value="2" id="deadlines-2" />
                <label for="deadlines-2" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>

                <input type="radio" wire:model="deadlines" value="3" id="deadlines-3" />
                <label for="deadlines-3" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>

                <input type="radio" wire:model="deadlines" value="4" id="deadlines-4" />
                <label for="deadlines-4" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>

                <input type="radio" wire:model="deadlines" value="5" id="deadlines-5" />
                <label for="deadlines-5" onclick="setRating(this)">
                    <x-icon.star-fill fill="#E7E5EF" />
                </label>
            </div>
            <div> Set Reasobavle Deadlines</div>
        </div>
        <div class="rating-input-total"> <span class="fw-medium">Total Score:</span>  <x-icon.star-fill width="16" height="16" fill="#EAA800"/> <span>5.0</span></div>
    </div>
    {{-- <x-form.check wire:model="terms">
        If any check thing we need
    </x-form.check> --}}
    <x-form.countable-textarea wire:model="feedback" max="1000" label="Share your experience with Expert"/>
    <x-slot name="button">
        <button type="submit" class="btn btn-md btn-primary">End Contract</button>
    </x-slot>
</x-modal.form>