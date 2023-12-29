<div class="academic-seller-area">
    @include('admin.about-us.partials.team-modal')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="academic-bar d-flex">
                    <h3 class="seller-title">
                        Build on Demand Teams for your Education Institution
                    </h3>
                </div>
                @if ($errors->has('team'))
                    <div class="alert alert-danger">{{ $errors->first('team') }}</div>
                @endif
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
                                        <x-form.input type="text" label="Subtitle" wire:model="team_subtitle"
                                            placeholder="Add Subtitle here" />
                                    </div>
                                    <div class="col admin-sub-title position-relative">
                                        <x-form.input type="text" label="Title" wire:model="team_title"
                                            placeholder="Add Title here" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-floating admin-text-area position-relative">
                                        <x-form.textarea label="Description" wire:model="team_description"
                                            placeholder="Description" />
                                    </div>
                                </div>
                                <div class="team team-blog">
                                    <div class="team-hire">
                                        <div class="container">
                                            <div class="row">
                                                @if (!is_null($teamList) && count($teamList) > 0)
                                                    @foreach ($teamList as $team)
                                                        <div
                                                            class="col-md-2 col-sm-6 {{ count($teamList) > 6 ? 'mt-5' : '' }}">
                                                            <div class="team-block">
                                                                <a href="#">
                                                                    <div class="team-img position-relative">
                                                                        <img
                                                                            src="{{ $team->getFirstMediaUrl('picture') }}">
                                                                        <a class="blog-close position-absolute"
                                                                            wire:click="removeTeam({{ $team->id }})">
                                                                            <img class=""
                                                                                src="{{ asset('assets/frontend/img/blog-admin/blog-close.png') }}"
                                                                                alt="close">
                                                                        </a>
                                                                    </div>
                                                                    <div class="hire-text">
                                                                        <h4>{{ $team->user->full_name }}</h4>
                                                                        <p>{{ getExpertiseById($team->expertise_id) }}
                                                                        </p>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-2 col-sm-6">
                                        <div class="team-block">
                                            <div class="academic-single-item d-flex flex-column">
                                                <div class="admin-add-more">
                                                    <a href="#">
                                                        <span class="material-symbols-outlined" data-bs-toggle="modal"
                                                            data-bs-target="#teamModal">add</span>
                                                    </a>
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
