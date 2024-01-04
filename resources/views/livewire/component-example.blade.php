<div>
    <div class="pb-4">
        <button class="btn btn-success" wire:click="showNotification('success')">Success Notification</button>
        <button class="btn btn-info" wire:click="showNotification('info')">Info Notification</button>
        <button class="btn btn-warning" wire:click="showNotification('warning')">Warning Notification</button>
        <button class="btn btn-danger" wire:click="showNotification('danger')">Danger Notification</button>
    </div>
    <form wire:submit="submit">
        <x-form.flatpicker label="Date picker" name="datepicker"/>
        <x-form.autocomplete :searchResults="$countries" selectFunction="selectCountry" removeFunction="removeCountry" :selectedRecords="$selectedCountries" name="country" placeholder="Search by Country"/>
        <x-form.choice-static wire:model="titles" label="Select multiple static" multiple>
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Dr">Dr</option>
            <option value="Prof">Prof</option>
        </x-form.choice-static>
        <x-form.choice-static wire:model="titles" label="Select single static" >
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Dr">Dr</option>
            <option value="Prof">Prof</option>
        </x-form.choice-static>
        <x-form.choice wire:model="titles" label="Select multiple" multiple>
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Dr">Dr</option>
            <option value="Prof">Prof</option>
        </x-form.choice>
        <x-form.choice wire:model="title" label="Select Single">
            <option value="">Select Title</option>
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Dr">Dr</option>
            <option value="Prof">Prof</option>
        </x-form.choice>
        <x-form.choice wire:model="title" label="Select Single with group">
            <option value="">Select Title</option>
            <optgroup label="General">
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
            </optgroup>
            <optgroup label="Professional">
                <option value="Dr">Dr</option>
                <option value="Prof">Prof</option>
            </optgroup>
        </x-form.choice>
        <x-form.select label="Title" wire:model="title">
            <option value="">Select Title</option>
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Dr">Dr</option>
            <option value="Prof">Prof</option>
        </x-form.select>
        <div class="d-flex">
            <x-form.input class="me-3" type="text" label="First Name" wire:model="first_name" placeholder="Your first name"/>
            <x-form.input type="text" label="Last Name" wire:model="last_name" placeholder="Your last name"/>
        </div>
        <x-form.input type="email" label="Email" wire:model="email" placeholder="Email"/>
        <x-form.password label="Password" wire:model="password" placeholder="Password"/>
        <x-form.input type="number" label="Hourly Rate" wire:model="rate" placeholder="Hourly Rate"/>
        <x-form.input type="text" readonly label="Type" wire:model="type" placeholder="Type" value="Expert"/>
        <x-form.textarea label="Bio" wire:model="bio" placeholder="Bio">
            lorem
        </x-form.textarea>
        <x-form.search label="Search Skill" wire:model="skill" placeholder="Search skills and select"/>
        <x-form.search wire:model="skill" placeholder="Search skills and select"/>
        <x-form.radio label="Gender" wire:model="gender" :options="['male' => 'Male', 'female' => 'Female']" inline/>
        <x-form.check wire:model="terms">
            Temrs & condition
        </x-form.check>

        <button type="submit">Submit</button>
    </form>
</div>
