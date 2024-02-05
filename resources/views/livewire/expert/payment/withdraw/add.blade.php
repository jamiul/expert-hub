<x-modal>
    <x-slot name="title"></x-slot>
    <form id="payment-form">
        <x-form.select label="Country" wire:model="title">
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

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</x-modal>
