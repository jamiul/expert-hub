<div class="progress-step-content ">
    <h6 class="mb-2">eKYC (electronic Know Your Customer) Info</h6>
    <p class="mb-4">Additional Information</p>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <div wire:ignore>
        <x-form.flatpicker label="Date of Birth" wire:model="dob"/>
    </div>
    <x-form.choice wire:model="country" label="Country">
        <option value="">Select Title</option>
        <option value="Mr">Mr</option>
        <option value="Mrs">Mrs</option>
        <option value="Dr">Dr</option>
        <option value="Prof">Prof</option>
    </x-form.choice>
    <x-form.choice wire:model="state" label="State">
        <option value="">Select State</option>
        <option value="Mr">Mr</option>
        <option value="Mrs">Mrs</option>
        <option value="Dr">Dr</option>
        <option value="Prof">Prof</option>
    </x-form.choice>
    <x-form.input type="text" label="City" wire:model="city" placeholder="City"/>
    <x-form.input type="text" label="Postcode" wire:model="postcode" placeholder="Postcode"/>
    <x-form.input type="text" label="Address Line 1" wire:model="address_line_1" placeholder="Address Line 1"/>
    <x-form.input type="text" label="Address Line 2" wire:model="address_line_2" placeholder="Address Line 2"/>
</div>
