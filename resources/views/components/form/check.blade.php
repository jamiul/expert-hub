@props([
    'name',
    'id' => $name,
    'required' => false,
])
<div class="form-check-group">
    <input 
        type="checkbox"
        wire:model="{{ $name }}" 
        name="{{ $name }}" 
        id="{{ $id }}"
        {{ $attributes->merge(['class' => 'form-check-field form-check-input' . ($errors->has($name) ? ' has-error':'')]) }}
    >
    <label class="form-check-label" for="{{ $id }}">{{ $slot }} @if($required)<span class="form-input-required">*</span>@endif</label>
    @error($name)
        <div class="form-input-error-message w-100">{{ $message }}</div>
    @enderror
</div>