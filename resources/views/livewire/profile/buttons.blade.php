<div class="timeline-button">
    <div class="timeline-btn">
        @if($currentStep > 1)
        <button class="button button-sm button-outline-primary" wire:click="back"><i class="fa fa-arrow-left"></i>Back</button>
        @endif
    </div>
    <div class="timeline-btn2">
        @if($currentStep < 6)
        <button class="button button-sm button-outline-primary" wire:click="next">Next</button>
        @endif
    </div>
</div>