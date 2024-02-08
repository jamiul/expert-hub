@props([
'name' => $attributes->whereStartsWith('wire:model')->first(),
'label' => null,
'inline' => 'false',
'id' => $attributes->whereStartsWith('wire:model')->first(),
'required' => false,
'tooltip' => null,
'minDate' => null,
'maxDate' => null,
'dateRange' => false,
])
<div
    x-data="{
        value: ['{{now()->format('d M Y')}}'],
        init() {
            let picker = flatpickr(this.$refs.picker, {
            @if($dateRange)
            mode: 'range',
            @endif
            @if($minDate)
            minDate: '{{ $minDate }}',
            @endif
            @if($maxDate)
            maxDate: '{{ $maxDate }}',
            @endif
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
            class="form-input-required">*</span>@endif
        @if($tooltip)
            <div class="tooltip-wrapper bottom-left">
                <x-icon.info fill="#BABABA"/>
                <span class="tooltip-content"> {{$tooltip}} </span>
            </div>
        @endif
    </label>@endif
    <div class="icon-field-wrapper @if($inline == 'true') inline-calendar @endif">
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
