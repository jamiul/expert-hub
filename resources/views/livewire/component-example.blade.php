<div>
    <div class="pb-4">
        <button class="btn btn-success" wire:click="showNotification('success')">Success Notification</button>
        <button class="btn btn-info" wire:click="showNotification('info')">Info Notification</button>
        <button class="btn btn-warning" wire:click="showNotification('warning')">Warning Notification</button>
        <button class="btn btn-danger" wire:click="showNotification('danger')">Danger Notification</button>
    </div>
    <form wire:submit="submit">
        <x-form.flatpicker label="Date picker" name="datepicker"/>
        <x-form.autocomplete :searchResults="$countries" selectFunction="selectCountry" removeFunction="removeCountry"
                             :selectedRecords="$selectedCountries" name="country" placeholder="Search by Country"/>
        <x-form.choice-static wire:model="titles" label="Select multiple static" multiple>
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Dr">Dr</option>
            <option value="Prof">Prof</option>
        </x-form.choice-static>
        <x-form.choice-static wire:model="titles" label="Select single static">
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
            <x-form.input class="me-3" type="text" label="First Name" wire:model="first_name"
                          placeholder="Your first name"/>
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

        <div class="image-upload-flat">
            <label for="upload-file" class="text-center">
                <span> <x-icon.document-upload fill="#0059C999"/> </span>
                <span class="fw-medium">Clik to upload or drag & drop</span>
                <span class="text-sm">You may attach up to 10 files under the size of 25 MB each. Include work samples or other documents to support your application. Do not attach your resume — your profile is automatically forwarded to the client with your proposal. </span>

            </label>
            <input type="file" id="upload-file" class="d-none">
        </div>
        <div class="image-upload-preview">
            <div class="">
                <div class="uploaded-img-preview">
                    <svg xmlns="http://www.w3.org/2000/svg" width="132" height="133" viewBox="0 0 132 133" fill="none">
                        <g clip-path="url(#clip0_38_2)">
                            <path d="M81.048 80.678C92.1752 83.9312 101.948 90.7027 108.903 99.9778C115.858 109.253 119.62 120.532 119.625 132.125H12.375C12.3774 120.531 16.1382 109.251 23.0934 99.9753C30.0486 90.6997 39.8234 83.9288 50.952 80.678L66 103.25L81.048 80.678ZM92.8125 51.6875C92.8125 58.7986 89.9876 65.6185 84.9593 70.6468C79.931 75.6751 73.1111 78.5 66 78.5C58.8889 78.5 52.069 75.6751 47.0407 70.6468C42.0124 65.6185 39.1875 58.7986 39.1875 51.6875C39.1875 44.5764 42.0124 37.7565 47.0407 32.7282C52.069 27.6999 58.8889 24.875 66 24.875C73.1111 24.875 79.931 27.6999 84.9593 32.7282C89.9876 37.7565 92.8125 44.5764 92.8125 51.6875Z" fill="#B3C1CF"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_38_2">
                                <rect width="132" height="132" fill="white" transform="translate(0 0.5)"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <p class="text-sm fst-italic my-1">
                    Max 2MB 500px 500px
                </p>
            </div>
            <div>
                <label for="upload-file" class="btn btn-outline-primary d-inline-flex align-items-center">
                    <x-icon.upload fill="#0059C999"/>
                    Upload Photo</label>
                <input type="file" id="upload-file" class="d-none">
            </div>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
