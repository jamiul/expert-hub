@props([
    'name',
    'label',
    'id' => $name,
    'required' => false,
])

<div class="form-input-group">
    <label class="form-input-label">{{ $label }} @if($required)<span class="form-input-required">*</span>@endif</label>
    <select 
        wire:model="{{ $name }}" 
        name="{{ $name }}" 
        id="{{ $id }}"
        {{ $attributes->merge(['class' => 'form-input-field form-select-field' . ($errors->has($name) ? ' has-error':'')]) }}
        {{ $required ? 'required="required"' : '' }}
    >
        {{ $slot }}
    </select>
    @error($name)
        <div class="form-input-error-message">{{ $message }}</div>
    @enderror
</div>