<div class="form-input-group form-input-has-icon ">
    <div class="icon-field-wrapper">
        <input name="skill" id="skill" class="form-input-field" wire:model="skill"
            placeholder="Total slot">
        <span class="form-input-icon edux-slot-count"> 3 </span>
    </div>
</div>
<div class="mb-40">
    <div class="available-schedule-slot mb-40">
        <div wire:ignore>
            <x-form.flatpicker
            wire:model="form.date"
            wire:change="filterDate"
            label=""
            inline="true"
            name="datepicker"
            />
        </div>



        <div class="slot-item-area">
            <h6>{{ $form->formattedDate }}</h6>
            <div class="slot-item">
                @forelse ($form->availabeSlots as $day => $times)
                    @foreach ($times as $time)
                        <div
                            wire:click="setSlot('{{ $time }}')"
                            class="single-slot {{ in_array($time, $form->selectedTimes) ? 'slot-fill' : ''}}"
                        >
                            <span>{{ $time }}</span>
                        </div>
                    @endforeach
                @empty
                <p>No data</p>
                @endforelse

                {{-- <div class="multi-slot">
                    <div class="single-slot slot-border">
                        <span>1:00 AM</span>
                    </div>
                    <div class="single-slot slot-fill">
                        <span>1:00 AM</span>
                    </div>
                </div>
                <div class="single-slot">
                    <span>3:00 AM</span>
                </div>
                <div class="single-slot">
                    <span>4:00 AM</span>
                </div>
                <div class="single-slot">
                    <span>4:00 AM</span>
                </div>
                <div class="single-slot">
                    <span>4:00 AM</span>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<div class="edux-select-options position-relative d-none">
    <x-form.textarea label="Note" wire:model="bio" placeholder="Bio"> Select options
    </x-form.textarea>
    <span class="edux-total-select-count">0/200</span>
</div>
