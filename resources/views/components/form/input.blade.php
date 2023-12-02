@props([
    'name',
    'label',
    'id' => $name,
    'required' => false,
])
<div class="form-input-group">
    <label class="form-input-label">{{ $label }} @if($required)<span class="form-input-required">*</span>@endif</label>
    <input 
        wire:model="{{ $name }}" 
        name="{{ $name }}" 
        id="{{ $id }}" 
        {{ $attributes->merge(['class' => 'form-input-field ' . ($errors->has($name) ? ' has-error':'')]) }}
        {{ $required ? 'required="required"' : '' }}
    >
    @error($name)
        <div class="form-input-error-message">{{ $message }}</div>
    @enderror
</div>