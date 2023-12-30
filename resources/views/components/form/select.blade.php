@props([
'name' => $attributes->whereStartsWith('wire:model')->first(),
'label' => null,
'id' => $attributes->whereStartsWith('wire:model')->first(),
'required' => false,
])

<div class="form-input-group {{ $attributes->get('class') }}">
    @if($label)<label class="form-input-label">{{ $label }} @if($required)<span
            class="form-input-required">*</span>@endif</label>@endif
    <div class="icon-field-wrapper">
        <select
            name="{{ $name }}"
            id="{{ $id }}"
            class="form-input-field form-select-field{{ $errors->has($attributes->whereStartsWith('wire:model')->first()) ? ' has-error':'' }}"
            {{ $attributes->whereDoesntStartWith('class') }}
            {{ $required ? 'required="required"' : '' }}
        >
            {{ $slot }}
        </select>
        <div class="form-input-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path
                    d="M11.9958 15.1774C11.8752 15.1774 11.7631 15.1581 11.6592 15.1197C11.5554 15.0812 11.4567 15.0152 11.3631 14.9216L6.86885 10.4274C6.73039 10.2889 6.65955 10.1149 6.65635 9.90527C6.65314 9.69567 6.72397 9.51844 6.86885 9.37357C7.01372 9.22869 7.18935 9.15625 7.39575 9.15625C7.60215 9.15625 7.77779 9.22869 7.92265 9.37357L11.9958 13.4466L16.0689 9.37357C16.2073 9.23511 16.3813 9.16427 16.591 9.16107C16.8006 9.15786 16.9778 9.22869 17.1227 9.37357C17.2675 9.51844 17.34 9.69407 17.34 9.90047C17.34 10.1069 17.2675 10.2825 17.1227 10.4274L12.6284 14.9216C12.5348 15.0152 12.4361 15.0812 12.3323 15.1197C12.2284 15.1581 12.1163 15.1774 11.9958 15.1774Z"
                    fill="#303744"/>
            </svg>
        </div>
    </div>

    @error($attributes->whereStartsWith('wire:model')->first())
    <div class="form-input-error-message">{{ $message }}</div>
    @enderror
</div>
