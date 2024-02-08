<x-form.input type="text" label="Training title?" wire:model="trainingTitle" placeholder="Training title" />


<x-form.input type="text" label="Training Fee" wire:model="trainingFee" placeholder="Training fee" />

<div class="row my-3 gap-3">
    <div class="col-md-3 col-sm-6">
        <div class="team-block edux-team-block">
            <a href="#">
            </a>
            <div class="team-img position-relative"><a href="#">
                    <img src="{{Auth::user()->profile->picture}}" alt="person">
                </a><a class="blog-close position-absolute"> <img class="" src="{{ asset('assets/frontend/img/blog-close.png') }}" alt="close"> </a> </div>
            <div class="hire-text edux-hire-text">
                <h6>{{Auth::user()->full_name}}</h6>
                <p>Curriculum Expert <br> Public Health <br> {{Auth::user()->country->name}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="team-block">
            <div class="academic-single-item d-flex flex-column">
                <div class="admin-add-more"> <a href="#"> <span class="material-symbols-outlined" data-bs-toggle="modal" data-bs-target="#addConsultation">add</span> </a> </div>
            </div>
        </div>
    </div>
</div>


<x-form.select label="Training Category" wire:model="expertiseId">
    <option>Choose</option>
    @foreach ($availableExpertiseFields as $id => $name)
    <option value="{{ $id }}">{{ $name }}</option>
    @endforeach
</x-form.select>


<x-form.choice wire:model="partnerInstituteId" label="Partner Institutes" multiple>
    <option>Choose</option>
    @foreach ($partnerInstitutes as $id => $name)
    <option value="{{ $id }}">{{ $name }}</option>
    @endforeach
</x-form.choice>