<div class="academic-seller-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="academic-bar d-flex">
                    <h3 class="seller-title">Our Mission</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="admin-blog-form-area">
                    <div class="admin-form-content">
                        <form action="" wire:submit="saveMission">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col admin-sub-title position-relative">
                                        <x-form.input type="text" label="Subtitle" wire:model="mission_subtitle"
                                            placeholder="Add Subtitle here" />
                                    </div>
                                    <div class="col admin-sub-title position-relative">
                                        <x-form.input type="text" label="Title" wire:model="mission_title"
                                            placeholder="Add Title here" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-floating admin-text-area position-relative mb-3">
                                        <x-form.textarea label="Description" wire:model="mission_description"
                                            placeholder="Description" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="missionImage">Image</label>
                                        <input type="file" class="form-control" id="missionImage"
                                            wire:model="mission_image">
                                    </div>
                                    @error('mission_image')
                                        <div class="form-input-error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="edux-frontend-left-title ">
                                    <button type="submit" class="save-update">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-5">
                <div class="mission-img overlay-edit position-relative">
                    <img src="{{ $missionAbout->missionImage() }}">
                </div>
            </div>
        </div>
    </div>
</div>
