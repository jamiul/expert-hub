<div wire:ignore.self class="modal fade" id="teamModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog add-expert-modal">
        <div class="modal-content add-expert-content">
            <div class="modal-header border-0"> <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button> </div>
            <div class="modal-body pt-0">
                <div class="add-expert-modal-area">
                    <h1 class="modal-title fs-5 m-expert-title" id="exampleModalLabel">Add Expert</h1>
                    <div class="admin-text-search position-relative">
                        <x-form.search label="" wire:model.live.debounce.500ms="search"
                            placeholder="Filter by experts.." />
                    </div>
                    @if (count($experts) > 0)
                        @foreach ($experts as $expert)
                            <div class="add-expert-single-item position-relative">
                                <div class="right-sidebar">
                                    <div class="right-database">
                                        <div class="database-block database-blog">
                                            <div class="database-contant">
                                                <div class="database-img">
                                                    <img src="{{ $expert->getFirstMediaUrl('picture') }}">
                                                </div>
                                                <div class="database-text admin-text">
                                                    <h4>
                                                        <a href="#">{{ $expert->user->full_name }}</a>
                                                    </h4>
                                                    <span>{{ $expert->expertField ? $expert->expertField->parent->name : '' }}</span>
                                                    <span>University of Sydney</span>
                                                    <span>{{ $expert->user->country->name }}</span>
                                                    <div
                                                        class="review rating-area consultant-reviw modal-consultant-review">
                                                        <ul class="all-project-rating">
                                                            <li> <strong>$200</strong> / hr </li>
                                                            <li>
                                                                <a href="#">
                                                                    <x-icon.star />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <x-icon.star />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <x-icon.star />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <x-icon.star />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <x-icon.star />
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <livewire:admin.about.expert-expertise :expert="$expert">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-job add-expert-post position-absolute">
                                    <button class="btn btn-postjob d-flex justify-content-center align-items-center"
                                        wire:click="addTeam({{ $expert->id }})">
                                        <span class="material-symbols-outlined">add</span>
                                        <span>Add expert</span>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-secondary btn-addexpert-cancel"
                    data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
