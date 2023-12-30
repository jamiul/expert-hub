@props([
'name' => $attributes->whereStartsWith('wire:model')->first(),
'label' => null,
'id' => $attributes->whereStartsWith('wire:model')->first(),
'disabled' => false,
'readonly' => false,
])
<div class="form-input-group form-input-has-icon {{ $attributes->get('class') }}">
    @if($label)  <label class="form-input-label">{{ $label }}</label>@endif
    <div class="icon-field-wrapper">
        <input
            name="{{ $name }}"
            id="{{ $id }}"
            class="form-input-field{{ $errors->has($attributes->whereStartsWith('wire:model')->first()) ? ' has-error':'' }}"
            {{ $attributes->whereDoesntStartWith('class') }}
            {{ $disabled ? 'disabled=""' : '' }}
            {{ $readonly ? 'readonly=""' : '' }}
        >
        <span class="form-input-icon"><x-icon.search fill="#ccc"/></span>
    </div>
    @error($attributes->whereStartsWith('wire:model')->first())
    <div class="error-message">{{ $message }}</div>
    @enderror
</div>
