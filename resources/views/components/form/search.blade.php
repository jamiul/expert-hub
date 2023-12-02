@props([
    'name',
    'label',
    'id' => $name,
    'disabled' => false,
    'readonly' => false,
])
<div class="form-input-group form-input-has-icon">
    <label class="form-input-label">{{ $label }}</label>
    <input 
        wire:model="{{ $name }}" 
        name="{{ $name }}" 
        id="{{ $id }}" 
        {{ $attributes->merge(['class' => 'form-input-field ' . ($errors->has($name) ? ' has-error':'')]) }} 
        {{ $disabled ? 'disabled=""' : '' }} 
        {{ $readonly ? 'readonly=""' : '' }}
    >
    <span class="form-input-icon"><i class="fa fa-search"></i></span>
    @error($name)
        <div class="error-message">{{ $message }}</div>
    @enderror
</div>