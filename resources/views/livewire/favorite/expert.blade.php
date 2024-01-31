<button wire:click="favorite" 
    class="btn btn-md btn-icon btn-outline-light btn-favorite {{ $expert->favourited() ? 'favorited' : ''}}">
    <span class="heart-line">
        <x-icon.heart/>
    </span>
<span class="heart-filled">
        <x-icon.heart-filled/>
    </span>
</button>