<x-form.choice name="expertise_id" wire:model.change="form.expertise_id" label="Consultation Title">
    <option value="">Select a consultation title</option>
    @foreach ($expertFields as $expertField)
        <optgroup label="# {{ $expertField->name }}">
            @foreach ($expertField->children as $child)
                <option value="{{ $child->id }}">{{ $child->name }}</option>
            @endforeach
        </optgroup>
    @endforeach
</x-form.choice>

<x-form.choice name="expertise_skills" wire:model="form.expertise_skills" label="Consultation Skillsets" multiple>
    @foreach ($expertSkills as $expertSkill)
        @foreach ($expertSkill->children as $child)
            <option value="{{ $child->id }}">{{ $child->name }}</option>
        @endforeach
    @endforeach
</x-form.choice>

<p class="skill-suggestion">
    Suggestion skills: <span>Curriculum Editor, E-Learning Developer,
        Curriculum Writer, Curriculum Design, Research and Analysis, skill development</span>
</p>