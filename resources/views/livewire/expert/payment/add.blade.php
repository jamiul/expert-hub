<x-modal>
    <x-slot name="title">Add New Bank Information</x-slot>
    <x-form.select label="Country" name="country" wire:model="title">
        <option value="AU">Australia</option>
    </x-form.select>

    <x-form.select label="Currency" name="currency" wire:model="title">
        <option value="AUD">AUD</option>
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
</x-modal>
