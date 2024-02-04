<x-modal>
    <x-slot name="title"></x-slot>
    <form id="payment-form">
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

                <x-form.flatpicker label="Date of birth" name="datepicker"/>

                <x-form.select label="Home Address" wire:model="title">
                    <option value="">Select Country</option>
                    <option value="Mr">Select Country</option>
                    <option value="Mrs">Select Country</option>
                    <option value="Dr">Select Country</option>
                    <option value="Prof">Select Country</option>
                </x-form.select>

                <x-form.select label="Currency" wire:model="title">
                    <option value="">Select Currency</option>
                    <option value="Select Currency">Select Currency</option>
                    <option value="Select Currency">Select Currency</option>
                    <option value="Select Currency">Select Currency</option>
                    <option value="Select Currency">Select Currency</option>
                </x-form.select>

                <x-form.input type="text" label="Account Holder Name" wire:model="type" placeholder="Type" value="Write Full Name"/>

                <x-form.select label="Account Holder Type" wire:model="title">
                    <option value="">individual</option>
                    <option value="Account Holder Type">Account Holder Type</option>
                    <option value="Account Holder Type">Account Holder Type</option>
                    <option value="Account Holder Type">Account Holder Type</option>
                    <option value="Account Holder Type">Account Holder Type</option>
                </x-form.select>

                <x-form.select label="Account Type" wire:model="title">
                    <option value="">savings</option>
                    <option value="Account Type">Account Type</option>
                    <option value="Account Type">Account Type</option>
                    <option value="Account Type">Account Type</option>
                    <option value="Account Type">Account Type</option>
                </x-form.select>
                <x-form.input type="text" label="Routing Number" wire:model="type" placeholder="Type" value="1234 5678 9012 3456"/>
                <x-form.input type="text" label="Account Number" wire:model="type" placeholder="Type" value="1234 5678 9012 3456"/>

                <!-- Button area End Here -->

            </div>
            <div class="tab-pane fade" id="pills-profileupdate" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

                <x-form.select label="Legal Name" wire:model="title">
                    <option value="">Full Name</option>
                    <option value="Mr">Select Country</option>
                    <option value="Mrs">Select Country</option>
                    <option value="Dr">Select Country</option>
                    <option value="Prof">Select Country</option>
                </x-form.select>

                <x-form.select label="Email Address" wire:model="title">
                    <option value="">Email Address</option>
                    <option value="Select Currency">Select Currency</option>
                    <option value="Select Currency">Select Currency</option>
                    <option value="Select Currency">Select Currency</option>
                    <option value="Select Currency">Select Currency</option>
                </x-form.select>

                <x-form.input type="text" label="Account Holder Name" wire:model="type" placeholder="Type" value="Write Full Name"/>

                <x-form.select label="Account Holder Type" wire:model="title">
                    <option value="">individual</option>
                    <option value="Account Holder Type">Account Holder Type</option>
                    <option value="Account Holder Type">Account Holder Type</option>
                    <option value="Account Holder Type">Account Holder Type</option>
                    <option value="Account Holder Type">Account Holder Type</option>
                </x-form.select>

                <x-form.input type="text" label="" wire:model="type" placeholder="Type" value="Address Line 1"/>
                <x-form.input type="text" label="" wire:model="type" placeholder="Type" value="Address Line 2"/>
                <x-form.input type="text" label="" wire:model="type" placeholder="Type" value="City"/>
                <x-form.select label="Account Type" wire:model="title">
                    <option value="">State</option>
                    <option value="Account Type">Account Type</option>
                    <option value="Account Type">Account Type</option>
                    <option value="Account Type">Account Type</option>
                    <option value="Account Type">Account Type</option>
                </x-form.select>
                <x-form.input type="text" label="" wire:model="type" placeholder="Type" value="Postal Code"/>

                <x-form.select label="Account Type" wire:model="title">
                    <option value="">savings</option>
                    <option value="Account Type">Account Type</option>
                    <option value="Account Type">Account Type</option>
                    <option value="Account Type">Account Type</option>
                    <option value="Account Type">Account Type</option>
                </x-form.select>
                <x-form.input type="text" label="Routing Number" wire:model="type" placeholder="Type" value="1234 5678 9012 3456"/>
                <x-form.input type="text" label="Account Number" wire:model="type" placeholder="Type" value="1234 5678 9012 3456"/>
                <x-form.input type="text" label="Phone number" wire:model="type" placeholder="Type" value="1234 5678 9012 3456"/>
                <x-form.input type="text" label="Personal ID Number" wire:model="type" placeholder="Type" value="1234 5678 9012 3456"/>


                <h6 class="mb-2 mt-5">Upload Consultation Service Picture
                    <div class="tooltip-wrapper bottom-left">
                        <i>
                            <x-icon.info fill="#0059C9"/>
                        </i>
                        <div class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Eum, placeat!
                        </div>
                    </div>
                </h6>

                <div class="row">
                    <div class="col-md-6">
                        <div class="image-upload-flat">
                            <label for="upload-file" class="text-center">
                                <span> <x-icon.document-upload fill="#0059C999"/> </span>
                                <span class="fw-medium">Click to upload Front Side</span>
                                <span class="text-sm">Drag & drop any images or documents that might be helpful in explaining your brief here</span>

                            </label>
                            <input type="file" id="upload-file" class="d-none">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-upload-flat">
                            <label for="upload-file" class="text-center">
                                <span> <x-icon.document-upload fill="#0059C999"/> </span>
                                <span class="fw-medium">Click to upload Back Side</span>
                                <span class="text-sm">Drag & drop any images or documents that might be helpful in explaining your brief here </span>

                            </label>
                            <input type="file" id="upload-file" class="d-none">
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</x-modal>
