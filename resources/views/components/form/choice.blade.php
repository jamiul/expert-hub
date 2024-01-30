@assets
    @vite('resources/css/choices.css')
    @vite('resources/js/choices.min.js')
@endassets
@props([
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'label' => null,
    'id' => $attributes->whereStartsWith('wire:model')->first(),
    'required' => false,
    'search' => true,
    'placeholder' => 'Type here to select',
    'searchPlaceholder' => 'Search Here',
])
<div class="form-input-group form-multiselect @if($search) has-search @endif {{ $attributes->get('class') }} {{ $errors->has($attributes->whereStartsWith('wire:model')->first()) ? 'has-choice-error':'' }}">
<div
    wire:ignore
    x-data="{
        init() {
            this.$nextTick(() => {
                const element = this.$refs.{{ $name }};
                let choices = new Choices(element, {
                    removeItemButton:true,
                    placeholder:true,
                    search:false,
                    searchEnabled:'{{ $search }}',
                    shouldSort:false,
                    position:'bottom',
                    placeholderValue: '{{ $placeholder }}',
                    searchPlaceholderValue: '{{ $searchPlaceholder }}',
                    items: $wire.{{ $attributes->whereStartsWith('wire:model')->first() }},
                })
                element.addEventListener('change', function(){
                    $wire.{{ $attributes->whereStartsWith('wire:model')->first() }} = choices.getValue(true)
                })
            })
        }
    }"
>
    @if($label) <label class="form-input-label">{{ $label }} @if($required)<span class="form-input-required">*</span>@endif</label>@endif
    <div class="icon-field-wrapper">
        <select class="form-input-field" x-ref="{{ $name }}" name="{{ $name }}[]" {{ $attributes }}>
            {{ $slot }}
        </select>
    </div>
</div>
@error($attributes->whereStartsWith('wire:model')->first())
    <div class="form-input-error-message">{{ $message }}</div>
@enderror
</div>
