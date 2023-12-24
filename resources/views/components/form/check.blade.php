@props([
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'id' => $attributes->whereStartsWith('wire:model')->first(),
    'required' => false,
])
<div class="form-check-group {{ $attributes->get('class') }}">
    <input 
        type="checkbox"
        name="{{ $name }}" 
        id="{{ $id }}"
        class="form-check-field form-check-input{{ $errors->has($attributes->whereStartsWith('wire:model')->first()) ? ' has-error':'' }}"
        {{ $attributes->whereDoesntStartWith('class') }}
    >
    <label class="form-check-label" for="{{ $id }}">{{ $slot }} @if($required)<span class="form-input-required">*</span>@endif</label>
    @error($attributes->whereStartsWith('wire:model')->first())
        <div class="form-input-error-message w-100">{{ $message }}</div>
    @enderror
</div>