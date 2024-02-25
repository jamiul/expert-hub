<x-form.input type="text" label="Training title?" wire:model="trainingTitle" placeholder="Training title" />


<x-form.input type="text" label="Training Fee" wire:model="trainingFee" placeholder="Training fee" />

<div class="row my-3 gap-3">
    @if($selectedExperts)
    @forelse($selectedExperts as $expert)
    <div class="col-md-3 col-sm-6">
        <div class="team-block edux-team-block">
            <a href="#">
            </a>
            <div class="team-img position-relative">
                <img src="{{$expert->picture}}" alt="person">
                <a class="blog-close position-absolute" wire:click="removeExpert({{ $expert->id }})"> <x-icon.close/> </a> 
            </div>
            <div class="hire-text edux-hire-text">
                <h6 class="text-center">{{$expert->user->full_name}}</h6>
                <p>{{$expert->expertField->name}}<br> {{$expert->user->country->name}}</p>
            </div>
        </div>
    </div>
    @empty
        
    @endforelse
    @endif

    <div class="col-md-4 col-sm-6">
        <div class="team-block">
            <div class="academic-single-item d-flex flex-column">
                {{-- {{dump($expertList)}} --}}
                {{-- <div class="admin-add-more"> <a href="#"> <span class="material-symbols-outlined" data-bs-toggle="modal" data-bs-target="#addConsultation">add</span> </a> </div> --}}
                {{-- <div class="admin-add-more"> <a href="#"> <span class="material-symbols-outlined"  wire:click="$dispatch('modal.open', {component: 'training.instructor-list', arguments: {'expertList': {{ $expertList }}}})">add</span> </a> </div> --}}
                <div class="admin-add-more"> <a href="#"> <span class="material-symbols-outlined"  wire:click="$dispatch('modal.open', {component: 'training.instructor-list'})">add</span> </a> </div>
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
    {{-- <option>Choose</option> --}}
    @foreach ($partnerInstitutes as $id => $name)
    <option value="{{ $id }}">{{ $name }}</option>
    @endforeach
</x-form.choice>