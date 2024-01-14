@props([
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'label' => null,
    'tooltip' => null,
    'id' => $attributes->whereStartsWith('wire:model')->first(),
    'required' => false,
])
<div class="form-input-group {{ $attributes->get('class') }}">
    @if($label) <label class="form-input-label">{{ $label }} @if($required)<span class="form-input-required">*</span>@endif
        @if($tooltip)
            <div class="tooltip-wrapper bottom-left">
                <x-icon.info fill="#BABABA"/>
                <span class="tooltip-content"> {{$tooltip}} </span>
            </div>
        @endif
    </label>@endif
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
