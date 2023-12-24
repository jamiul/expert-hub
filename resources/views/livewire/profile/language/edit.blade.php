<x-modal.form action="updateLanguage">
    <x-slot name="title">Edit Language</x-slot>
    <div class="row">
        <div class="col-md-6">
            <x-form.input type="text" readonly label="Language" value="{{ $language?->name }}"/>
        </div>
        <div class="col-md-6">
            <x-form.select label="Proficiency" name="proficiency" wire:model.change="proficiency">
                <option value="">Select Proficiency</option>
                @foreach (App\Enums\LanguageProficiency::cases() as $proficiency)
                    <option value="{{ $proficiency->value }}">{{ $proficiency->value }}</option>
                @endforeach
            </x-form.select>
        </div>
    </div>
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">Save</button>
    </x-slot>
</x-modal.form>