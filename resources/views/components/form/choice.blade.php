@assets
    @vite('resources/css/choices.css')
    @vite('resources/js/choices.min.js')
@endassets
@props([
'name',
'label',
'id' => $name,
'required' => false,
'placeholder' => 'Type here to select',
])

<div
    wire:ignore
    class="form-input-group form-multiselect"
    x-data="{
        init() {
            this.$nextTick(() => {
                const element = this.$refs.{{ $name }};
                let choices = new Choices(element, {
                    removeItemButton:true,
                    placeholder:true,
                    search:false,
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
    @if($label) <label class="form-input-label">{{ $label }} @if($required)<span class="form-input-required">*</span>@endif</label>@endif
    <div class="icon-field-wrapper">
        <select class="form-input-field" x-ref="{{ $name }}" name="{{ $name }}[]"
                wire:model="{{ $name }}" {{ $attributes }}>
            {{ $slot }}
        </select>
    </div>
</div>
@error($name)
    <div class="form-input-error-message">{{ $message }}</div>
@enderror
