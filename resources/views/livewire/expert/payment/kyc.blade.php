<x-modal>
    <x-slot name="title"></x-slot>
    <form wire:submit="submitKYC">
        <ul class="nav nav-pills mb-3 over-view" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-homeupdate" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Required Fields</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profileupdate" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">All Fields</button>
            </li>
        </ul>


        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-homeupdate" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                @if(in_array('first_name', $expert_kyc->requirements['currently_due']))
                    <x-form.input type="text" label="First Name" wire:model="individual_first_name" placeholder="First Name" />
                @endif
                @if(in_array('last_name', $expert_kyc->requirements['currently_due']))
                    <x-form.input type="text" label="Last Name" wire:model="individual_last_name" placeholder="Last Name" />
                @endif
                @if(in_array('dob.day', $expert_kyc->requirements['currently_due']))
                    <x-form.flatpicker label="Date of Birth" wire:model="dob" />
                @endif
                @if(in_array('address.line1', $expert_kyc->requirements['currently_due']))
                    <x-form.input type="text" label="Address Line 1" wire:model="address_line1" placeholder="Address Line 1"/>
                @endif
                @if(in_array('address.line2', $expert_kyc->requirements['currently_due']))
                    <x-form.input type="text" label="Address Line 2" wire:model="address_line2" placeholder="Address Line 2"/>
                @endif
                @if(in_array('address.city', $expert_kyc->requirements['currently_due']))
                    <x-form.input type="text" label="City" wire:model="address_city" placeholder="City"/>
                @endif
                @if(in_array('address.state', $expert_kyc->requirements['currently_due']))
                    <x-form.choice wire:model="address_state" label="State">
                        <option value="">Select State</option>
                        @foreach ($availableStates as $state)
                            <option value="{{ $state->name }}">{{ $state->name }}</option>
                        @endforeach
                    </x-form.choice>
                @endif
                @if(in_array('address.postal_code', $expert_kyc->requirements['currently_due']))
                    <x-form.input type="text" label="Postcode" wire:model="address_postal_code" placeholder="Postcode"/>
                @endif
                @if(in_array('country', $expert_kyc->requirements['currently_due']))
                    <x-form.choice readonly wire:model="address_country" label="Country">
                        <option value="">Select Country</option>
                        <option value="Australia">Australia</option>
                    </x-form.choice>
                @endif

                @if(in_array('phone', $expert_kyc->requirements['currently_due']))
                    <x-form.input type="text" label="Phone number" wire:model="phone" placeholder="+61 111 111 111" />
                @endif
                @if(in_array('ssn_last_4', $expert_kyc->requirements['currently_due']))
                    {{--                                <x-form.input type="text" label="Personal ID Number" wire:model="" placeholder="Type" />--}}
                @endif
                @if(in_array('individual.verification.document', $expert_kyc->requirements['currently_due']))
                    <h6 class="mb-2 mt-5">Upload Identity Verification Document
                        <div class="tooltip-wrapper bottom-left">
                            <i>
                                <x-icon.info fill="#0059C9"/>
                            </i>
                            <div class="tooltip-content">Upload Identity Verification Document eg: Passport, Driver Licence, Photo Card, Proof of Age card etc
                            </div>
                        </div>
                    </h6>

                    <div class="row">
                        <div class="col-md-6">
                            <x-form.input type="file" label="Verification Document Front" wire:model="document_front" />
                            <p class="mt-2 mb-0 edux-supported-file">Supported files type: <span>jpg, png, pdf</span></p>
                            @error('document_front') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6">
                            <x-form.input type="file" label="Verification Document Back" wire:model="document_back" />
                            <p class="mt-2 mb-0 edux-supported-file">Supported files type: <span>jpg, png, pdf</span></p>
                            @error('document_back') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                @endif
            </div>
            <div class="tab-pane fade" id="pills-profileupdate" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <x-form.input type="text" label="First Name" wire:model="individual_first_name" placeholder="First Name" />

                <x-form.input type="text" label="Last Name" wire:model="individual_last_name" placeholder="Last Name" />

                <x-form.flatpicker label="Date of Birth" wire:model="dob" />

                <x-form.input type="text" label="Address Line 1" wire:model="address_line1" placeholder="Address Line 1"/>
                <x-form.input type="text" label="Address Line 2" wire:model="address_line2" placeholder="Address Line 2"/>
                <x-form.input type="text" label="City" wire:model="address_city" placeholder="City"/>
                <x-form.choice wire:model="address_state" label="State">
                    <option value="">Select State</option>
                    @foreach ($availableStates as $state)
                        <option value="{{ $state->name }}">{{ $state->name }}</option>
                    @endforeach
                </x-form.choice>
                <x-form.input type="text" label="Postcode" wire:model="address_postal_code" placeholder="Postcode"/>
                <x-form.choice readonly wire:model="address_country" label="Country">
                    <option value="">Select Country</option>
                    <option value="Australia">Australia</option>
                </x-form.choice>

                <x-form.input type="text" label="Phone number" wire:model="phone" placeholder="+61 111 111 111" />
                {{--                <x-form.input type="text" label="Personal ID Number" wire:model="type" placeholder="Type" />--}}

                <h6 class="mb-2 mt-5">Upload Identity Verification Document
                    <div class="tooltip-wrapper bottom-left">
                        <i>
                            <x-icon.info fill="#0059C9"/>
                        </i>
                        <div class="tooltip-content">Upload Identity Verification Document eg: Passport, Driver Licence, Photo Card, Proof of Age card etc
                        </div>
                    </div>
                </h6>

                <div class="row">
                    <div class="col-md-6">
                        <x-form.input type="file" label="Verification Document Front" wire:model="document_front_full" />
                        <p class="mt-2 mb-0 edux-supported-file">Supported files type: <span>jpg, png, pdf</span></p>
                        @error('document_front_full') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6">
                        <x-form.input type="file" label="Verification Document Back" wire:model="document_back_full" />
                        <p class="mt-2 mb-0 edux-supported-file">Supported files type: <span>jpg, png, pdf</span></p>
                        @error('document_back_full') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>

            </div>

        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</x-modal>
