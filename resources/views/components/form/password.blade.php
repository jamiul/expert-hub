@props([
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'label' => null,
    'id' => $attributes->whereStartsWith('wire:model')->first(),
    'required' => false,
])
<div
    class="form-input-group password-input {{ $attributes->get('class') }}"
    x-data="{ show: false }"
>
    @if($label) <label class="form-input-label">{{ $label }} @if($required)<span class="form-input-required">*</span>@endif</label>@endif
    <div class="icon-field-wrapper">
        <input
            name="{{ $name }}"
            id="{{ $id }}"
            class="form-input-field{{ $errors->has($attributes->whereStartsWith('wire:model')->first()) ? ' has-error':'' }}"
            {{ $attributes->whereDoesntStartWith('class') }}
            {{ $required ? 'required="required"' : '' }}
            :type="show ? 'text' : 'password'"
        >
        <span x-on:click="show = !show" class="form-input-icon">
            <span x-cloak x-show="show === false"><x-icon.visibility-off/></span>
            <span x-cloak x-show="show === true"><x-icon.visibility/></span></span>
        </span>
    </div>
    @error($attributes->whereStartsWith('wire:model')->first())
        <div class="form-input-error-message">{{ $message }}</div>
    @enderror
</div>
