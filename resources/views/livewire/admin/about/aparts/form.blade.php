<span class="text-danger" wire.model.blur="form.msg"></span>
<x-form.input type="text" label="Apart Title" wire:model.blur="form.set_title" placeholder="Add title here"/>
<x-form.textarea label="Description" wire:model.blur="form.description" placeholder="Description"/>
<x-form.select label="Type" wire:model.blur="form.type">
    <option selected>Select type</option>
    <option value="{{ App\Enums\ProfileType::Client->value }}">Client</option>
    <option value="{{ App\Enums\ProfileType::Expert->value }}">Expert</option>
</x-form.select>
<div class="input-group mb-3">
    <label class="input-group-text" for="iconFile">Add Icon</label>
    <input type="file" class="form-control" id="iconFile" wire:model.blur="form.icon">
    @error('icon')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>