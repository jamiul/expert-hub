<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
@props([
    'name',
    'label',
    'id' => $name,
    'required' => false,
    'placeholder' => 'Type here to select',
])

<div
    class="form-input-group form-multiselect"
    x-data="{
        init() {
            this.$nextTick(() => {
                const element = this.$refs.{{ $name }};
                let choices = new Choices(element, {
                    removeItemButton:true,
                    placeholder:true,
                    placeholderValue: '{{ $placeholder }}',
                    items: $wire.{{ $name }},
                })
                element.addEventListener('change', function(){
                    $wire.{{ $name }} = choices.getValue(true)
                })
            })
        }
    }"
>
    <label class="form-input-label">{{ $label }} @if($required)<span class="form-input-required">*</span>@endif</label>
    <select x-ref="{{ $name }}" name="{{ $name }}[]" wire:model="{{ $name }}" {{ $attributes }}>
        {{ $slot }}
    </select>
</div>