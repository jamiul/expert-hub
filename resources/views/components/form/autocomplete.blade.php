@props([
    'name',
    'label',
    'id' => $name,
    'disabled' => false,
    'readonly' => false,
    'results' => null
])
<div>
    <div class="form-input-group form-input-has-icon">
        <label class="form-input-label">{{ $label }}</label>
        <input 
            wire:model.debounce.500ms="{{ $name }}" 
            name="{{ $name }}" 
            id="{{ $id }}" 
            {{ $attributes->merge(['class' => 'form-input-field ' . ($errors->has($name) ? ' has-error':'')]) }} 
        >
        <span class="form-input-icon"><x-icon.search fill="#ccc"/></span>
        @error($name)
            <div class="error-message">{{ $message }}</div>
        @enderror
    </div>
    <div>
        @if($results)
        <ul>
            @forelse ($results as $result)
                <li wire:key="{{ $result->id }}" wire:click="select{{ ucfirst($name) }}('{{ $result->name }}')"> {{ $result->name }} </li>
            @empty
                <li>No results found</li>
            @endforelse
        </ul>
        @endif
    </div>
</div>