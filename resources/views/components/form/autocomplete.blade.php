@props([
    'name',
    'label',
    'id' => $name,
    'disabled' => false,
    'readonly' => false,
    'searchResults',
    'selectFunction',
    'selectedRecords',
    'removeFunction',
])
<div class="form-input-group form-input-has-icon autocomplete-field" x-data="{ open: false }">
    <div class="autocomplete-field-wrapper">
        @if($label)<label class="form-input-label">{{ $label }}</label>@endif
        <input
            x-on:click="open = true"
            wire:model.live.debounce.500ms="{{ $name }}"
            name="{{ $name }}"
            id="{{ $id }}"
            {{ $attributes->merge(['class' => 'form-input-field ']) }}
        >
        <span class="form-input-icon"><x-icon.search fill="#ccc"/></span>
        @error($attributes->whereStartsWith('wire:model')->first())
            <div class="error-message">{{ $message }}</div>
        @enderror
    </div>
    <div class="autocomplete-field-suggestion">
        <ul class="" x-show="open" x-on:click.outside="open = false" x-on:keyup.escape.window="open = false">
            @forelse ($searchResults as $result)
                <li wire:key="{{ $result->id }}" x-on:click="open = false; $wire.{{ $selectFunction }}('{{ $result->name }}')"> {{ $result->name }} </li>
            @empty
                <li>No results found</li>
            @endforelse
        </ul>
    </div>
    <div class="autocomplete-field-results">
        <ul>
            @forelse ($selectedRecords as $record)
                <li>{{$record}} <i wire:click="{{ $removeFunction }}('{{$record}}')" class="icon-item-remove"></i></li>
            @empty
            @endforelse
        </ul>
    </div>
</div>
