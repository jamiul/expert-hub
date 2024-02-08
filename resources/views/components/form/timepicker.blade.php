@props([
'name' => $attributes->whereStartsWith('wire:model')->first(),
'label' => null,
'id' => $attributes->whereStartsWith('wire:model')->first(),
])
<div
    x-data="{
        value: ['{{date('Y/m/d')}}'],
        init() {
            let picker = flatpickr(this.$refs.picker, {
            enableTime: true,
            noCalendar: true,
            dateFormat: 'H:i',
            onChange: (date, dateString) => {
                this.value = dateString.split(' to ')
            }
        })
    this.$watch('value', () => picker.setDate(this.value))
},
}"
    class="form-input-group {{ $attributes->get('class') }}"
>
    @if($label) <label class="form-input-label">{{ $label }}
        {{-- @if($tooltip)
            <div class="tooltip-wrapper bottom-left">
                <x-icon.info fill="#BABABA"/>
                <span class="tooltip-content"> {{$tooltip}} </span>
            </div>
        @endif --}}
    </label>@endif
    <div class="icon-field-wrapper">
        <input
            type="text"
            class="form-input-field{{ $errors->has($attributes->whereStartsWith('wire:model')->first()) ? ' has-error':'' }}"
            x-ref="picker"
            {{ $attributes->whereDoesntStartWith('class') }}
        >
    </div>

    @error($attributes->whereStartsWith('wire:model')->first())
    <div class="form-input-error-message">{{ $message }}</div>
    @enderror
</div>
