<div class="progress-step-content ">
    <h6 class="mb-2">eKYC (electronic Know Your Customer) Info</h6>
    <p class="mb-4">Additional Information</p>
    <x-form.flatpicker label="Date of Birth" wire:model="dob"/>
    <x-form.select wire:model="gender" label="Gender">
        <option value="">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </x-form.select>
    <x-form.input type="text" label="Address Line 1" wire:model="address_line_1" placeholder="Address Line 1"/>
    <x-form.input type="text" label="Address Line 2" wire:model="address_line_2" placeholder="Address Line 2"/>
    <x-form.input type="text" label="City" wire:model="city" placeholder="City"/>
    <x-form.choice wire:model="state" label="State">
        <option value="">Select State</option>
        @foreach ($availableStates as $state)
            <option value="{{ $state->name }}">{{ $state->name }}</option>
        @endforeach
    </x-form.choice>
    <x-form.input type="text" label="Postcode" wire:model="postcode" placeholder="Postcode"/>
    <x-form.input readonly wire:model="country" label="Country" value="{{ auth()->user()->country->name }}"/>
    <p class="mb-4">By registering your account, you agree to our Services Agreement and the Expert Payment Policy Agreement.</p>
</div>
