<div>
    <div class="pb-4">
        <button class="btn btn-success" wire:click="showNotification('success')">Success Notification</button>
        <button class="btn btn-info" wire:click="showNotification('info')">Info Notification</button>
        <button class="btn btn-warning" wire:click="showNotification('warning')">Warning Notification</button>
        <button class="btn btn-danger" wire:click="showNotification('danger')">Danger Notification</button>
    </div>
    <form wire:submit="submit">
        <x-form.flatpicker label="Date picker" name="datepicker"/>
        <x-form.flatpicker label="Date picker" inline="true" name="datepicker"/>
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
        <x-form.input type="text" label="Type" wire:model="type" placeholder="Type" value="Expert"/>
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
        <div class="flat-uploaded-item-list">
            <div class="flat-uploaded-item">
                <div class="uploaded-item-icon">
                    <x-icon.image fill="#0036E3"/>
                </div>
                <div class="uploaded-item-info">
                    <p class="uploaded-file-name text-sm fw-medium mb-0">Customer_file.png</p>
                    <p class="uploaded-file-info text-sm mb-0"><span class="uploaded-file-size">456 KB </span> <span
                            class="uploaded-file-time"> - 21 second left </span></p>
                </div>
                <div class="uploaded-item-remove">
                    <button class="icon-btn">
                        <x-icon.delete/>
                    </button>
                </div>
            </div>
        </div>
        <div class="image-upload-preview mt-20">
            <div class="">
                <div class="uploaded-img-preview">
                    <svg xmlns="http://www.w3.org/2000/svg" width="132" height="133" viewBox="0 0 132 133" fill="none">
                        <g clip-path="url(#clip0_38_2)">
                            <path
                                d="M81.048 80.678C92.1752 83.9312 101.948 90.7027 108.903 99.9778C115.858 109.253 119.62 120.532 119.625 132.125H12.375C12.3774 120.531 16.1382 109.251 23.0934 99.9753C30.0486 90.6997 39.8234 83.9288 50.952 80.678L66 103.25L81.048 80.678ZM92.8125 51.6875C92.8125 58.7986 89.9876 65.6185 84.9593 70.6468C79.931 75.6751 73.1111 78.5 66 78.5C58.8889 78.5 52.069 75.6751 47.0407 70.6468C42.0124 65.6185 39.1875 58.7986 39.1875 51.6875C39.1875 44.5764 42.0124 37.7565 47.0407 32.7282C52.069 27.6999 58.8889 24.875 66 24.875C73.1111 24.875 79.931 27.6999 84.9593 32.7282C89.9876 37.7565 92.8125 44.5764 92.8125 51.6875Z"
                                fill="#B3C1CF"></path>
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
        <div class="recommendation-input-wrapper my-3">
            <div class="recommendation-input-labels">
                <div>😟 Not at all</div>
                <div>😃 Extremely Good</div>
            </div>
            <div class="recommendation-input-fields">
                <div><input type="radio" name="recommendation" id="0"><label for="0">0</label></div>
                <div><input type="radio" name="recommendation" id="1"><label for="1">1</label></div>
                <div><input type="radio" name="recommendation" id="2"><label for="2">2</label></div>
                <div><input type="radio" name="recommendation" id="3"><label for="3">3</label></div>
                <div><input type="radio" name="recommendation" id="4"><label for="4">4</label></div>
                <div><input type="radio" name="recommendation" id="5"><label for="5">5</label></div>
                <div><input type="radio" name="recommendation" id="6"><label for="6">6</label></div>
                <div><input type="radio" name="recommendation" id="7"><label for="7">7</label></div>
                <div><input type="radio" name="recommendation" id="8"><label for="8">8</label></div>
                <div><input type="radio" name="recommendation" id="9"><label for="9">9</label></div>
                <div><input type="radio" name="recommendation" id="10"><label for="10">10</label></div>
            </div>
        </div>
        <div class="rating-input-wrapper">
            <div class="rating-input-label">
                Feedback to Expert
            </div>
            <div class="rating-input-field-wrapper">
                <div class="rating-input-field" data-category="Skill">
                    <input type="radio" name="skill-rating" value="1" id="skill-1" />
                    <label for="skill-1" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>

                    <input type="radio" name="skill-rating" value="2" id="skill-2" />
                    <label for="skill-2" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>

                    <input type="radio" name="skill-rating" value="3" id="skill-3" />
                    <label for="skill-3" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>

                    <input type="radio" name="skill-rating" value="4" id="skill-4" />
                    <label for="skill-4" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>

                    <input type="radio" name="skill-rating" value="5" id="skill-5" />
                    <label for="skill-5" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>
                </div>
                <div> Skill</div>
            </div>

            <div class="rating-input-field-wrapper">
                <div class="rating-input-field" data-category="Availability">
                    <input
                        type="radio"
                        name="availability-rating"
                        value="1"
                        id="availability-1"
                    />
                    <label for="availability-1" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>

                    <input
                        type="radio"
                        name="availability-rating"
                        value="2"
                        id="availability-2"
                    />
                    <label for="availability-2" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>

                    <input
                        type="radio"
                        name="availability-rating"
                        value="3"
                        id="availability-3"
                    />
                    <label for="availability-3" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>

                    <input
                        type="radio"
                        name="availability-rating"
                        value="4"
                        id="availability-4"
                    />
                    <label for="availability-4" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>

                    <input
                        type="radio"
                        name="availability-rating"
                        value="5"
                        id="availability-5"
                    />
                    <label for="availability-5" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>
                </div>
                <div> Availability</div>
            </div>

            <div class="rating-input-field-wrapper">
                <div class="rating-input-field" data-category="Communication">
                    <input
                        type="radio"
                        name="communication-rating"
                        value="1"
                        id="communication-1"
                    />
                    <label for="communication-1" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>

                    <input
                        type="radio"
                        name="communication-rating"
                        value="2"
                        id="communication-2"
                    />
                    <label for="communication-2" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>

                    <input
                        type="radio"
                        name="communication-rating"
                        value="3"
                        id="communication-3"
                    />
                    <label for="communication-3" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>

                    <input
                        type="radio"
                        name="communication-rating"
                        value="4"
                        id="communication-4"
                    />
                    <label for="communication-4" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>

                    <input
                        type="radio"
                        name="communication-rating"
                        value="5"
                        id="communication-5"
                    />
                    <label for="communication-5" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>
                </div>
                <div> Communication</div>
            </div>

            <div class="rating-input-field-wrapper">
                <div class="rating-input-field" data-category="Deadlines">
                    <input
                        type="radio"
                        name="deadlines-rating"
                        value="1"
                        id="deadlines-1"
                    />
                    <label for="deadlines-1" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>

                    <input
                        type="radio"
                        name="deadlines-rating"
                        value="2"
                        id="deadlines-2"
                    />
                    <label for="deadlines-2" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>

                    <input
                        type="radio"
                        name="deadlines-rating"
                        value="3"
                        id="deadlines-3"
                    />
                    <label for="deadlines-3" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>

                    <input
                        type="radio"
                        name="deadlines-rating"
                        value="4"
                        id="deadlines-4"
                    />
                    <label for="deadlines-4" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>

                    <input
                        type="radio"
                        name="deadlines-rating"
                        value="5"
                        id="deadlines-5"
                    />
                    <label for="deadlines-5" onclick="setRating(this)">
                        <x-icon.star-fill fill="#E7E5EF" />
                    </label>
                </div>
                <div> Set Reasobavle Deadlines</div>
            </div>

            <div class="rating-input-total"> <span class="fw-medium">Total Score:</span>  <x-icon.star-fill width="16" height="16" fill="#EAA800"/> <span>5.0</span></div>

        </div>
        <button type="submit">Submit</button>
    </form>

</div>
<script>
    function setRating(element) {
        // Add "active" class to the clicked element
        element.classList.add("active");

        // Get the parent element and its data-category attribute
        var parentElement = element.parentElement;
        var category = parentElement.getAttribute("data-category");

        // Get all the siblings of the parent element
        var siblings = Array.from(parentElement.children);

        // Remove "active" class from all siblings
        siblings.forEach(function (sibling) {
            if (sibling !== element) {
                sibling.classList.remove("active");
            }
        });

        // Add "rating-selected" class to the parent element
        parentElement.classList.add("rating-selected");

        // Log the selected rating and category (for demonstration purposes)
        console.log(
            "Category:",
            category,
            "Rating:",
            element.previousElementSibling.value
        );
    }
</script>
