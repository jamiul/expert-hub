@props([
    'name',
    'label',
    'id' => $name,
    'disabled' => false,
    'readonly' => false,
    'results' => []
])
<div class="autocomplete-field-wrapper" x-data="{ open: false }">
    <div class="form-input-group form-input-has-icon">
        <label class="form-input-label">{{ $label }}</label>
        <input 
            x-on:click="open = true"
            wire:model.live.debounce.500ms="{{ $name }}" 
            name="{{ $name }}" 
            id="{{ $id }}" 
            {{ $attributes->merge(['class' => 'form-input-field ']) }} 
        >
        <span class="form-input-icon"><x-icon.search fill="#ccc"/></span>
        @error($name)
            <div class="error-message">{{ $message }}</div>
        @enderror
    </div>
    <div class="autocomplete-field-suggestion">
        <ul class="shadow py-2" x-show="open" x-on:click.outside="open = false" x-on:keyup.escape.window="open = false">
            @forelse ($results as $result)
                <li wire:key="{{ $result->id }}" x-on:click="open = false; $wire.select{{ ucfirst($name) }}('{{ $result->name }}')"> {{ $result->name }} </li>
            @empty
                <li>No results found</li>
            @endforelse
        </ul>
    </div>
</div>