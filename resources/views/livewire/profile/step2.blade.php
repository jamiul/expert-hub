<div class="timeline-right">
    <div class="row">
        <div class="col-md-5">
            <h4>Expertises</h4>
            <div class="timeline-block">
                <div class="timeline-search">
                    <input class="@error('selectedExpertises') has-error @enderror" type="text" placeholder="Search by field of expertise" wire:keyup="searchExpertise" wire:model="expertise">
                    <button type="buttom"><i class="fa fa-search"></i></button>
                    @error('selectedExpertises')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                <div class="timeline-according">
                    <div class="at-item" style="max-height: 330px; overflow-y:scroll">
                        @foreach ($availableExpertises as $id => $name)
                            <span class="btn mb-2 border rounded-4 lh-sm pb-1 d-inline-flex" wire:click="addExpertise({{ $id }})">{{ $name }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <h4>Selected Expertises</h4>
            <div class="timeline-block py-3">
                <div class="timeline-according">
                    <div class="at-item" style="max-height: 418px; overflow-y:scroll">
                        @foreach ($selectedExpertises as $id => $name)
                            <span class="btn mb-2 border rounded-4 lh-sm pb-1 d-inline-flex align-items-center">{{ $name }} <img wire:click="removeExpertise({{ $id }})" class="ps-2" src="{{ asset('assets/frontend/img/close-i.png') }}"></span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('livewire.profile.buttons')
</div>