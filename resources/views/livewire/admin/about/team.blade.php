<div class="academic-seller-area">
    @include('admin.about-us.partials.team-modal')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="academic-bar d-flex">
                    <h3 class="seller-title">Build on Demand Teams for your Education
                        Institution</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="admin-blog-form-area">
                    <div class="admin-form-content">
                        <form wire:submit="saveTeam">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col admin-sub-title position-relative">
                                        <label for="subtitle"
                                            class="form-label position-absolute level-subtitle">subtitle</label>
                                        <input id="subtitle" type="text" class="form-control admin-form-input"
                                            placeholder="Require steps" aria-label="First name"
                                            wire:model="team_subtitle">
                                    </div>
                                    <div class="col admin-sub-title position-relative">
                                        <label for="title"
                                            class="form-label position-absolute level-title">title</label>
                                        <input id="title" type="text"
                                            class="form-control admin-form-input admin-m-input"
                                            placeholder="Search Academic Expert Made Easy" aria-label="Last name"
                                            wire:model="team_title">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-floating admin-text-area position-relative">
                                        <textarea class="form-control admin-area position-relative" placeholder="Leave a comment here" id="floatingTextarea"
                                            wire:model="team_description"></textarea>
                                        <span class="edux-word-count">0/1000</span>
                                        <label for="floatingTextarea"
                                            class=" admin-text-area-level position-absolute">Paragraph</label>
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
        <div class="team team-blog">
            <div class="team-hire">
                <div class="container">
                    <div class="row">
                        @if ( !is_null($team_list) && count($team_list) > 0)
                            @foreach ($team_list as $team)
                                <div class="col-md-2 col-sm-6 {{ count($team_list) > 6 ? 'mt-5' : '' }}">
                                    <div class="team-block">
                                        <a href="#">
                                            <div class="team-img position-relative">
                                                <img src="{{ asset('assets/frontend/img/team-1.png') }}">
                                                <a class="blog-close position-absolute"
                                                    wire:click="removeTeam({{ $team }})">
                                                    <img class=""
                                                        src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}"
                                                        alt="close">
                                                </a>
                                            </div>
                                            <div class="hire-text">
                                                <h4>{{ getFullNameByExpertID($team) }}</h4>
                                                <p>Accreditation Specialist</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-2 col-sm-6">
                            <div class="team-block">
                                <div class="academic-single-item d-flex flex-column">
                                    <div class="admin-add-more"> <a href="#"> <span
                                                class="material-symbols-outlined" data-bs-toggle="modal"
                                                data-bs-target="#teamModal">add</span>
                                        </a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
