<div>
    @error('selectedHours')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>
<ul class="progress-bar-nav-horizontal">
    <li class="{{ $currentStep > 1 ? 'done-item' : 'running-item' }}"><strong> Expertise </strong></li>
    <li class="{{ $currentStep > 2 ? 'done-item' : 'running-item' }}"><strong> Service fees </strong></li>
    <li class="{{ $currentStep > 3 ? 'done-item' : 'running-item' }}"><strong> Availability </strong></li>
    <li class="{{ $currentStep > 4 ? 'done-item' : 'running-item' }}"><strong> Summary </strong></li>
</ul>
<div class="progress-step-content mt-20">
    @if($currentStep === 1)
        @include('livewire.profile.consultation.expertise')
    @endif

    @if($currentStep === 2)
        @include('livewire.profile.consultation.service')
    @endif

    @if($currentStep === 3)
        @include('livewire.profile.consultation.availability')
    @endif

    @if($currentStep === 4)
        @include('livewire.profile.consultation.summary')
    @endif

    @if($currentStep === 5)
        @include('livewire.profile.consultation.preview')
    @endif
</div>
