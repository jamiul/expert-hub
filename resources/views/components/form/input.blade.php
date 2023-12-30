@props([
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'label' => null,
    'id' => $attributes->whereStartsWith('wire:model')->first(),
    'required' => false,
])
<div class="form-input-group {{ $attributes->get('class') }}">
    @if($label) <label class="form-input-label">{{ $label }} @if($required)<span class="form-input-required">*</span>@endif</label>@endif
    <input
        name="{{ $name }}"
        id="{{ $id }}"
        class="form-input-field{{ $errors->has($attributes->whereStartsWith('wire:model')->first()) ? ' has-error':'' }}"
        {{ $attributes->whereDoesntStartWith('class') }}
        {{ $required ? 'required="required"' : '' }}
    >
    @error($attributes->whereStartsWith('wire:model')->first())
        <div class="form-input-error-message">{{ $message }}</div>
    @enderror
</div>
