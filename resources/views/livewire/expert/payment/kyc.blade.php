<x-modal.form action="submitKYC">
    <x-slot name="title">Add missing information for {{ $user->first_name }} {{ $user->last_name }}</x-slot>
    <p>Receive payments, withdrawal are disabled for this account until more information is added for {{ $user->first_name }} {{ $user->last_name }}</p>

    <div wire:ignore.self class="tab-pane fade show active" id="pills-homeupdate" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
        @if(in_array('individual.first_name', $user->expert_kyc->requirements['currently_due']))
            <x-form.input type="text" label="First Name" wire:model="individual_first_name" placeholder="First Name" />
        @endif
        @if(in_array('individual.last_name', $user->expert_kyc->requirements['currently_due']))
            <x-form.input type="text" label="Last Name" wire:model="individual_last_name" placeholder="Last Name" />
        @endif
        @if(in_array('individual.dob.day', $user->expert_kyc->requirements['currently_due']))
            <x-form.flatpicker label="Date of Birth" wire:model="dob" />
        @endif
        @if(in_array('individual.address.line1', $user->expert_kyc->requirements['currently_due']))
            <x-form.input type="text" label="Address Line 1" wire:model="address_line1" placeholder="Address Line 1"/>
        @endif
        @if(in_array('individual.address.line2', $user->expert_kyc->requirements['currently_due']))
            <x-form.input type="text" label="Address Line 2" wire:model="address_line2" placeholder="Address Line 2"/>
        @endif
        @if(in_array('individual.address.city', $user->expert_kyc->requirements['currently_due']))
            <x-form.input type="text" label="City" wire:model="address_city" placeholder="City"/>
        @endif
        @if(in_array('individual.address.state', $user->expert_kyc->requirements['currently_due']))
            <x-form.choice wire:model="address_state" label="State">
                <option value="">Select State</option>
                @foreach ($availableStates as $state)
                    <option value="{{ $state->name }}">{{ $state->name }}</option>
                @endforeach
            </x-form.choice>
        @endif
        @if(in_array('individual.address.postal_code', $user->expert_kyc->requirements['currently_due']))
            <x-form.input type="text" label="Postcode" wire:model="address_postal_code" placeholder="Postcode"/>
        @endif
        @if(in_array('country', $user->expert_kyc->requirements['currently_due']))
            <x-form.choice readonly wire:model="address_country" label="Country">
                <option value="">Select Country</option>
                <option value="Australia">Australia</option>
            </x-form.choice>
        @endif

        @if(in_array('individual.phone', $user->expert_kyc->requirements['currently_due']))
            <x-form.input type="text" label="Phone number" wire:model="phone" placeholder="+61 111 111 111" />
        @endif
        @if(in_array('ssn_last_4', $user->expert_kyc->requirements['currently_due']))
            {{--                                <x-form.input type="text" label="Personal ID Number" wire:model="" placeholder="Type" />--}}
        @endif
        @if(in_array('individual.verification.document', $user->expert_kyc->requirements['currently_due']))
            <h6 class="mb-2 mt-5">Upload Identity Verification Document
                <div class="tooltip-wrapper bottom-left">
                    <i>
                        <x-icon.info fill="#0059C9"/>
                    </i>
                    <div class="tooltip-content">Upload Identity Verification Document eg: Passport, Driver Licence, Photo Card, Proof of Age card etc
                    </div>
                </div>
            </h6>

            <div class="row" wire:ignore>
                <div class="col-md-6">
                    <x-form.input type="file" label="Verification Document Front" wire:model="document_front" />
                    <p class="mt-2 mb-0 edux-supported-file">The uploaded file needs to be a color image (smaller than 8,000px by 8,000px), in JPG, PNG, or PDF format, and less than 10 MB in size.</p>
                    @error('document_front') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6">
                    <x-form.input type="file" label="Verification Document Back" wire:model="document_back" />
                    <p class="mt-2 mb-0 edux-supported-file">The uploaded file needs to be a color image (smaller than 8,000px by 8,000px), in JPG, PNG, or PDF format, and less than 10 MB in size.</span></p>
                    @error('document_back') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
        @endif

        @if(in_array('individual.verification.additional_document', $user->expert_kyc->requirements['currently_due']))
            <h6 class="mb-2 mt-5">Upload Additional Verification Document
                <div class="tooltip-wrapper bottom-left">
                    <i>
                        <x-icon.info fill="#0059C9"/>
                    </i>
                    <div class="tooltip-content">Upload Identity Verification Document eg: Passport, Driver Licence, Photo Card, Proof of Age card etc
                    </div>
                </div>
            </h6>

            <div class="row" wire:ignore>
                <div class="col-md-6">
                    <x-form.input type="file" label="Additional Document Front" wire:model="additional_document_front" />
                    <p class="mt-2 mb-0 edux-supported-file">The uploaded file needs to be a color image (smaller than 8,000px by 8,000px), in JPG, PNG, or PDF format, and less than 10 MB in size.</p>
                    @error('additional_document_front') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6">
                    <x-form.input type="file" label="Additional Document Back" wire:model="additional_document_back" />
                    <p class="mt-2 mb-0 edux-supported-file">The uploaded file needs to be a color image (smaller than 8,000px by 8,000px), in JPG, PNG, or PDF format, and less than 10 MB in size.</p>
                    @error('additional_document_back') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
        @endif
    </div>

    <x-slot name="button">
        <button type="submit" class="btn btn-md btn-primary">Submit</button>
    </x-slot>
</x-modal.form>
