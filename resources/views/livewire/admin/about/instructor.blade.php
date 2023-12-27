<div class="academic-seller-area">
    @include('admin.about-us.partials.instructor-modal')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="academic-bar d-flex">
                    <h3 class="seller-title">Meet Our Experts</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="admin-blog-form-area">
                    <div class="admin-form-content">
                        <form wire:submit="saveExpert">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col admin-sub-title position-relative">
                                        <x-form.input type="text" label="Subtitle" wire:model="instructor_subtitle"
                                            placeholder="Add Subtitle here" />
                                    </div>
                                    <div class="col admin-sub-title position-relative">
                                        <x-form.input type="text" label="Title" wire:model="instructor_title"
                                            placeholder="Add Title here" />
                                    </div>
                                </div>
                            </div>
                            <div class="team  team-blog">
                                <div class="team-hire">
                                    <div class="row">
                                        @if (!is_null($instructor_list) && count($instructor_list) > 0)
                                            @foreach ($instructor_list as $instructor)
                                                <div
                                                    class="col-md-2 col-sm-6 {{ count($instructor_list) > 6 ? 'mt-5' : '' }}">
                                                    <div class="team-block">
                                                        <a href="#">
                                                            <div class="team-img position-relative">
                                                                <img
                                                                    src="{{ asset('assets/frontend/img/team-1.png') }}">
                                                                <a class="blog-close position-absolute"
                                                                    wire:click="removeExpert({{ $instructor }})">
                                                                    <img class=""
                                                                        src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}"
                                                                        alt="close">
                                                                </a>
                                                            </div>
                                                            <div class="hire-text">
                                                                <h4>{{ getFullNameByExpertID($instructor) }}</h4>
                                                                <p>Accreditation Specialist</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="row mt-5">
                                            <div class="col-md-2 col-sm-6">
                                                <div class="team-block">
                                                    <div class="academic-single-item d-flex flex-column">
                                                        <div class="admin-add-more"> <a href="#"> <span
                                                                    class="material-symbols-outlined"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#instructorModal">add</span>
                                                            </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="edux-frontend-left-title">
                                    <button class="save-update">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
