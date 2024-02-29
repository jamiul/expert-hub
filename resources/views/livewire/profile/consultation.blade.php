<div class="consultant-prof edux-consultant-prof card card-24">

    <div class="d-flex gap-2 edux-add-modal-steps">
        <div class="edux-tool-tips">
            <x-icon.briefcase-time fill="#0036E3"/>
            <h3 class="h4 mb-0">Consultation</h3>
            <div class="tooltip-wrapper bottom-left">
                <i class="tooltip-icon">
                    <x-icon.info fill="#191D24B2"/>
                </i>
                <div class="tooltip-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Voluptas,
                    voluptates.
                </div>
            </div>
        </div>

        <button
            wire:click="$dispatch('modal.open', { component: 'profile.consultation.add'})"
            class="icon-btn icon-btn-md border {{ count($consultations) == 3 ? 'd-none' : '' }}">
            <x-icon.add/>
        </button>

    </div>
    @forelse ($consultations as $consultation)
        <div class="consultant-prof1 card-body border-0 edux-border-bottom pt-3">
            <div class="row">
                <div class="col-md-3">
                    <div class="prof-img">
                        <img src="{{ $consultation->image }}"></img>
                    </div>
                </div>
                <div class="col-md-9">

                    <div class="prof-text">
                        <div class="edux-prof-text">
                            <h6>{{ $consultation->expertField->name }}</h6>
                            <div class="consultation-button">
                                <button
                                    wire:click="$dispatch('modal.open', { component: 'profile.consultation.edit', arguments: { consultation: {{ $consultation->id }} }})"
                                    class="icon-btn icon-btn-md border "
                                >
                                    <x-icon.edit/>
                                </button>
                                <button
                                    wire:click="deleteConsultation({{ $consultation->id }})"
                                    class="icon-btn icon-btn-sm p-0"
                                >
                                    <x-icon.delete/>
                                </button>
                            </div>
                        </div>
                        <div class="profp1">
                            <p class="mb-0">{{ $consultation->description }}</p>
                        </div>
                        <div class="tag-list">
                            @foreach ($consultation->skills as $skill)
                                <span class="tag">{{ $skill->name }}</span>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @empty
        <p> No data</p>
    @endforelse
</div>
