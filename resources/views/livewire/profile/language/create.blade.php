<x-modal.form action="addLanguage">
    <x-slot name="title">Add Language</x-slot>
    <div class="row">
        <div class="col-md-6">
            <x-form.choice label="Language" name="language_id" wire:model.change="language_id">
                <option value="">Select Language</option>
                @foreach ($availableLanguages as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </x-form.choice>
        </div>
        <div class="col-md-6">
            <x-form.select label="Proficiency" name="proficiency" wire:model.change="proficiency">
                <option value="">Select Proficiency</option>
                @foreach (App\Enums\LanguageProficiency::cases() as $proficiency)
                    <option value="{{ $proficiency->value }}">{{ $proficiency->value }}</option>
                @endforeach
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
                <option value="">10</option>
            </x-form.select>
        </div>
    </div>
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">Save</button>
    </x-slot>
</x-modal.form>
