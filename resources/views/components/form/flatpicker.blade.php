<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@props([
'name' => $attributes->whereStartsWith('wire:model')->first(),
'label' => null,
'inline' => 'false',
'id' => $attributes->whereStartsWith('wire:model')->first(),
'required' => false,
])
<div
    x-data="{
        value: ['{{date('Y/m/d')}}'],
        init() {
            let picker = flatpickr(this.$refs.picker, {
                {{-- mode: 'range', --}}
        dateFormat: 'd M Y',
        defaultDate: this.value,
        inline: {{ $inline }},
        onChange: (date, dateString) => {
            this.value = dateString.split(' to ')
        }
    })

    this.$watch('value', () => picker.setDate(this.value))
},
}"
    class="form-input-group {{ $attributes->get('class') }}"
>
    @if($label) <label class="form-input-label">{{ $label }} @if($required)<span
            class="form-input-required">*</span>@endif</label>@endif
    <div class="icon-field-wrapper">
        <input
            type="text"
            class="form-input-field{{ $errors->has($attributes->whereStartsWith('wire:model')->first()) ? ' has-error':'' }}"
            x-ref="picker"
            {{ $attributes->whereDoesntStartWith('class') }}
            {{ $required ? 'required="required"' : '' }}
        >
        @if($inline == 'false')
        <span class="form-input-icon">
            <x-icon.calender/>
        </span>
        @endif
    </div>

    @error($attributes->whereStartsWith('wire:model')->first())
    <div class="form-input-error-message">{{ $message }}</div>
    @enderror
</div>
