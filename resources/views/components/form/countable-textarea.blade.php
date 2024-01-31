@props([
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'label' => null,
    'id' => $attributes->whereStartsWith('wire:model')->first(),
    'rows' => 5,
    'required' => false,
    'max' => 1000,
    'model' => $attributes->whereStartsWith('wire:model')->first(),
])

<div class="form-input-group {{ $attributes->get('class') }}"
    x-data="{
        {{ $model }}: $wire.{{ $attributes->whereStartsWith('wire:model')->first() }},
        get characterCount() { 
            if(this.{{ $model }} == null){
                return 0
            }
            return this.{{ $model }}.length;
        }
    }">
    @if($label)  <label class="form-input-label">{{ $label }} @if($required)<span class="form-input-required">*</span>@endif</label>@endif
    <textarea
        x-model={{ $model }}
        rows="{{ $rows }}"
        name="{{ $name }}"
        id="{{ $id }}"
        class="form-input-field form-textarea-field{{ $errors->has($attributes->whereStartsWith('wire:model')->first()) ? ' has-error':'' }}"
        {{ $attributes->whereDoesntStartWith('class') }}
        {{ $required ? 'required="required"' : '' }}
    >{{ $slot }}</textarea>
    <span class="edux-word-count"><span x-text="characterCount">0</span>/{{ $max }}</span>
    @error($attributes->whereStartsWith('wire:model')->first())
        <div class="form-input-error-message">{{ $message }}</div>
    @enderror
</div>
