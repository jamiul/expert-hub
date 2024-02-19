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
    <div class="d-flex">
        <div style="width:150px;">
            <x-form.select name="phone_country" wire:model="phone_country" id="">
            <option>Select</option>
            <option value="AU">AU</option>
            <option value="NZ">NZ</option>
            <option value="BD">BD</option>
            <option value="US">US</option>
            <option value="GB">GB</option>
            </x-form.select>
        </div>
        <input
            name="{{ $name }}"
            id="{{ $id }}"
            class="form-input-field{{ $errors->has($attributes->whereStartsWith('wire:model')->first()) ? ' has-error':'' }}"
            {{ $attributes->whereDoesntStartWith('class') }}
            {{ $required ? 'required="required"' : '' }}
        >
    </div>
    @error($attributes->whereStartsWith('wire:model')->first())
        <div class="form-input-error-message">{{ $message }}</div>
    @enderror
</div>
