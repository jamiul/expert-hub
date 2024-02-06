<x-modal.form action="submitPaymentGateway">
    <x-slot name="title">Add a bank account</x-slot>
    <x-form.select label="Country" wire:model="country">
        <option value="AU">Australia</option>
    </x-form.select>

    <x-form.select label="Currency" wire:model="currency">
        <option value="AUD">AUD</option>
    </x-form.select>

    <x-form.input type="text" label="Account Holder Name" wire:model="account_holder_name" placeholder="Write Full Name" />

    <x-form.select label="Account Holder Type" wire:model="account_holder_type">
        <option value="individual">Individual</option>
        <option value="company">Company</option>
    </x-form.select>

    <x-form.select label="Account Type" wire:model="account_type">
        <option value="savings">Savings</option>
        <option value="checking">Checking</option>
    </x-form.select>

    <x-form.input type="text" label="Routing Number" wire:model="routing_number" placeholder="1234 5678 9012 3456"/>
    <x-form.input type="text" label="Account Number" wire:model="account_number" placeholder="1234 5678 9012 3456"/>

    <x-slot name="button">
        <button type="submit" class="btn btn-md btn-primary">Add</button>
    </x-slot>
</x-modal.form>
