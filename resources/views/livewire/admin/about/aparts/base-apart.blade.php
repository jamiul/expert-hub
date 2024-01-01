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
                                        <x-form.input type="text" label="Subtitle" wire:model="apart_subtitle"
                                            placeholder="Add Subtitle here" />
                                    </div>
                                    <div class="col admin-sub-title position-relative">
                                        <x-form.input type="text" label="Title" wire:model="apart_title"
                                            placeholder="Add Title here" />
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
                                        @if (count($aparts) > 0)
                                            @foreach ($aparts as $apart)
                                                @if ($apart->type == App\Enums\ProfileType::Client->value)
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="tab-block">
                                                            <div class="tab-img">
                                                                <img src="{{ $apart->iconImage() }}" alt="Icon">
                                                            </div>
                                                            <div class="tab-text">
                                                                <h3>
                                                                    {{ $apart->set_title }}
                                                                </h3>
                                                                <button type="button"
                                                                    wire:click="$dispatch('modal.open', {component: 'admin.about.aparts.edit', arguments: {'aboutApart': {{ $apart->id }} }})"
                                                                    class="btn btn-outline-info btn-sm">Edit</button>
                                                                <button wire:click="deleteApart({{ $apart->id }})"
                                                                    class="btn btn-outline-danger btn-sm">Delete</button>
                                                                <p>{{ $apart->description }}</p>
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
                                        @if (count($aparts) > 0)
                                            @foreach ($aparts as $apart)
                                                @if ($apart->type == App\Enums\ProfileType::Expert->value)
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="tab-block">
                                                            <div class="tab-img">
                                                                <img src="{{ $apart->iconImage() }}" alt="Icon">
                                                            </div>
                                                            <div class="tab-text">
                                                                <h3>
                                                                    {{ $apart->set_title }}
                                                                </h3>
                                                                <button type="button"
                                                                    wire:click="$dispatch('modal.open', {component: 'admin.about.aparts.edit', arguments: {'aboutApart': {{ $apart->id }} }})"
                                                                    class="btn btn-outline-info btn-sm">Edit</button>
                                                                <button wire:click="deleteApart({{ $apart->id }})"
                                                                    class="btn btn-outline-danger btn-sm">Delete</button>
                                                                <p>{{ $apart->description }}</p>
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
                                    <button class="btn-add-more"
                                        wire:click="$dispatch('modal.open', { component: 'admin.about.aparts.create'})"
                                        type="button" class="material-symbols-outlined"><span class="material-symbols-outlined">add</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
