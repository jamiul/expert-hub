@props([
    'name',
    'label',
    'id' => $name,
    'required' => false,
    'options' => [],
    'inline' => false,
])

<div class="form-radio-group @if($inline) form-radio-inline @endif">
    <label class="form-radio-label">{{ $label }} @if($required)<span class="form-input-required">*</span>@endif</label>
    <div class="form-radio-options">
        @foreach ($options as $key => $value)
            <div class="form-radio-option">
                <input 
                    type="radio"
                    wire:model="{{ $name }}" 
                    name="{{ $name }}" 
                    id="{{ $value }}"
                    {{ $attributes->merge(['class' => 'form-radio-field form-check-input' . ($errors->has($name) ? ' has-error':'')]) }}
                    value="{{ $key }}"
                >
                <label class="form-radio-title" for="{{ $value }}">{{ $value }}</label>
            </div>
        @endforeach
    </div>
    @error($name)
        <div class="form-input-error-message">{{ $message }}</div>
    @enderror
</div>