@props([
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'label' => null,
    'id' => $attributes->whereStartsWith('wire:model')->first(),
    'required' => false,
    'options' => [],
    'inline' => false,
])

<div class="form-radio-group @if($inline) form-radio-inline @endif {{ $attributes->get('class') }}">
    <label class="form-radio-label">{{ $label }} @if($required)<span class="form-input-required">*</span>@endif</label>
    <div class="form-radio-options">
        @foreach ($options as $key => $value)
            <div class="form-radio-option">
                <input 
                    type="radio"
                    name="{{ $name }}" 
                    id="{{ $value }}"
                    class="form-radio-field form-check-input{{ $errors->has($attributes->whereStartsWith('wire:model')->first()) ? ' has-error':'' }}"
                    {{ $attributes->whereDoesntStartWith('class') }}
                    value="{{ $key }}"
                >
                <label class="form-radio-title" for="{{ $value }}">{{ $value }}</label>
            </div>
        @endforeach
    </div>
    @error($attributes->whereStartsWith('wire:model')->first())
        <div class="form-input-error-message">{{ $message }}</div>
    @enderror
</div>