@props([
    'name',
    'label',
    'id' => $name,
    'rows' => 5,
    'required' => false,
])

<div class="form-input-group">
    <label class="form-input-label">{{ $label }} @if($required)<span class="form-input-required">*</span>@endif</label>
    <textarea 
        rows="{{ $rows }}"
        wire:model="{{ $name }}" 
        name="{{ $name }}" 
        id="{{ $id }}" 
        {{ $attributes->merge(['class' => 'form-input-field form-textarea-field' . ($errors->has($name) ? ' form-input-has-error':'')]) }} 
        {{ $required ? 'required="required"' : '' }}
    >
    </textarea>
    @error($name)
        <div class="form-input-error-message">{{ $message }}</div>
    @enderror
</div>