@props([
    'max' => 1000,
])
<div 
    {{-- wire:ignore.self --}}
    class="main-form position-relative" 
    x-data="{
        description: $wire.description,
        get characterCount() { 
            if(this.description == null){
                return 0
            }
            return this.description.length;
        }
    }"
>
    {{ $slot }}
    <span class="edux-word-count"><span x-text="characterCount">0</span>/{{ $max }}</span>
</div>