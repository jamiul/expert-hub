<div>
    <form wire:submit="submit">
            <x-form.multiselect name="titles" label="Select multiple" multiple>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Dr">Dr</option>
                <option value="Prof">Prof</option>
            </x-form.multiselect>
            <x-form.multiselect name="title" label="Select Single">
                <option value="">Select Title</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Dr">Dr</option>
                <option value="Prof">Prof</option>
            </x-form.multiselect>
            <x-form.select label="Title" name="title">
                <option value="">Select Title</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Dr">Dr</option>
                <option value="Prof">Prof</option>
            </x-form.select>
            <div class="d-flex">
                <x-form.input class="me-3" type="text" label="First Name" name="first_name" placeholder="Your first name"/>
                <x-form.input type="text" label="Last Name" name="last_name" placeholder="Your last name"/>
            </div>
            <x-form.input type="email" label="Email" name="email" placeholder="Email"/>
            <x-form.input type="password" label="Password" name="password" placeholder="Password"/>
            <x-form.input type="number" label="Hourly Rate" name="rate" placeholder="Hourly Rate"/>
            <x-form.input type="text" readonly label="Type" name="type" placeholder="Type" value="Expert"/>
            <x-form.textarea label="Bio" name="bio" placeholder="Bio"/>
            <x-form.search label="Search Skill" name="skill" placeholder="Search skills and select"/>
            <x-form.search label="" name="skill" placeholder="Search skills and select"/>
            <x-form.radio label="Gender" name="gender" :options="['male' => 'Male', 'female' => 'Female']" inline/>
            <x-form.check name="terms">
                Temrs & condition
            </x-form.check>

            <button type="submit">Submit</button>
        </form>
</div>
