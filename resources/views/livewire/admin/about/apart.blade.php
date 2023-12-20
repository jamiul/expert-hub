<div class="academic-seller-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="academic-bar d-flex" id="apart">
                    <h3 class="seller-title">What sets EduExHub Apart?</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="admin-blog-form-area">
                    <div class="admin-form-content">
                        <form action="" wire:submit="saveApart">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col admin-sub-title position-relative">
                                        <label for="subtitle"
                                            class="form-label position-absolute level-subtitle">subtitle</label>
                                        <input id="subtitle" type="text" class="form-control admin-form-input "
                                            placeholder="Require steps" aria-label="First name"
                                            wire:model="apart_subtitle">
                                    </div>
                                    <div class="col admin-sub-title position-relative">
                                        <label for="title"
                                            class="form-label position-absolute level-title">title</label>
                                        <input id="title" type="text"
                                            class="form-control admin-form-input admin-m-input"
                                            placeholder="Search Academic Expert Made Easy" aria-label="Last name"
                                            wire:model="apart_title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="edux-frontend-left-title">
                                    <button class="save-update">Save Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="eduexhub eduexhub-blog">
            <div class="container p-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabbable-panel tabbable-panel-blog">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation"> <button class="nav-link active" id="home-tab"
                                        data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab"
                                        aria-controls="home" aria-selected="true">For
                                        Clients</button> </li>
                                <li class="nav-item" role="presentation"> <button class="nav-link" id="profile-tab"
                                        data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false" tabindex="-1">For
                                        Experts</button> </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="row">
                                        @if (count($aboutAparts) > 0)
                                            @foreach ($aboutAparts as $aboutApart)
                                                @if ($aboutApart->type == 'client')
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="tab-block">
                                                            <div class="tab-img">
                                                                <img src="{{ $aboutApart->iconImage() }}" alt="">
                                                            </div>
                                                            <div class="tab-text">
                                                                <h3>
                                                                    {{ $aboutApart->set_title }}
                                                                </h3>
                                                                <button type="button" data-bs-toggle="modal"
                                                                    data-bs-target="#updateApartDetails"
                                                                    class="btn btn-outline-info btn-sm"
                                                                    wire:click="editApart({{ $aboutApart->id }})">Edit</button>
                                                                <button type="button" data-bs-toggle="modal"
                                                                    data-bs-target="#deleteApartModal"
                                                                    class="btn btn-outline-danger btn-sm"
                                                                    wire:click="deleteApart({{ $aboutApart->id }})">Delete</button>
                                                                <p>{{ $aboutApart->description }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        @if (count($aboutAparts) > 0)
                                            @foreach ($aboutAparts as $aboutApart)
                                                @if ($aboutApart->type == 'expert')
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="tab-block">
                                                            <div class="tab-img">
                                                                <img src="{{ $aboutApart->iconImage() }}" alt="">
                                                            </div>
                                                            <div class="tab-text">
                                                                <h3>
                                                                    {{ $aboutApart->set_title }}
                                                                </h3>
                                                                <button type="button" data-bs-toggle="modal"
                                                                    data-bs-target="#updateApartDetails"
                                                                    class="btn btn-outline-info btn-sm"
                                                                    wire:click="editApart({{ $aboutApart->id }})">Edit</button>
                                                                <button type="button" data-bs-toggle="modal"
                                                                    data-bs-target="#deleteApartModal"
                                                                    class="btn btn-outline-danger btn-sm"
                                                                    wire:click="deleteApart({{ $aboutApart->id }})">Delete</button>
                                                                <p>{{ $aboutApart->description }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-2">
                        <div class="require-block">
                            <div class="academic-single-item d-flex flex-column">
                                <div class="admin-add-more">
                                    <a href="#apart">
                                        <span class="material-symbols-outlined" data-bs-toggle="modal"
                                            data-bs-target="#addApartDetails">add</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('livewire.admin.about.apart-modal')
</div>
@push('bottom_scripts')
    <script>
        window.addEventListener('close-modal', event => {
            $('#addApartDetails').modal('hide');
            $('#updateApartDetails').modal('hide');
            $('#deleteApartModal').modal('hide');
        })
    </script>
@endpush
