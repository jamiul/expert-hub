<div class="timeline-right">
    <div class="timeline-tell">
        <h3>Tell us about your education qualifications</h3>
        <p>Complete the information bellow</p>
        @error('educationQualifications')
            <div class="error-message">{{ $message }}</div>
        @enderror
    </div>
    <div class="timeline-form">
        <div class="form-group">
            <label>Name of Qualification</label>
            <input class="@error('qualification_name') has-error @enderror" type="text" placeholder="eg. PHD" wire:model="qualification_name">
            @error('qualification_name')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Field of Study</label>
            <div class="custom-selectx">
                <select class="@error('field_of_study') has-error @enderror" wire:model="field_of_study">
                    <option value="">Select Field of Study</option>
                    <option value="Public health">Public health</option>
                    <option value="Engineering">Engineering</option>
                </select>
                @error('field_of_study')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>University</label>
            <div class="custom-selectx">
                <select class="@error('university') has-error @enderror" wire:model="university">
                    <option value="">Select University</option>
                    <option value="Lorem University">Lorem University</option>
                    <option value="Ipsum University">Ipsum University</option>
                </select>
                @error('university')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>Start Year</label>
            <div class="custom-selectx">
                <select class="@error('start_year') has-error @enderror" wire:model="start_year">
                    <option value="">Select start year</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                </select>
                @error('start_year')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>End Year</label>
            <div class="custom-selectx">
                <select class="@error('end_year') has-error @enderror" wire:model="end_year">
                    <option value="">Select end year</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                </select>
                @error('end_year')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="timeline-method">
        <button class="button button-lg button-outline-primary" wire:click="addEducationQualification"><img class="pe-2" src="{{ asset('assets/frontend/img/pay-vector.png') }}">Add Education Qualification</button>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Name of Qualification</th>
                    <th>Field of Study</th>
                    <th>University</th>
                    <th>Start year</th>
                    <th>End Year</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($educationQualifications as $educationQualification)
                    <tr>
                        <td>{{ $educationQualification->qualification_name }}</td>
                        <td>{{ $educationQualification->field_of_study }}</td>
                        <td>{{ $educationQualification->university }}</td>
                        <td>{{ $educationQualification->start_year }}</td>
                        <td>{{ $educationQualification->end_year }}</td>
                        <td><img wire:click="removeEducationQualification({{ $educationQualification->id }})" class="pb-1 btn" src="{{ asset('assets/frontend/img/close-i.png') }}"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('livewire.profile.buttons')
</div>