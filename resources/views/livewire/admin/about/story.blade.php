<div class="academic-seller-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="academic-bar d-flex">
                    <h3 class="seller-title">
                        Delivering World-Class Learning Outcomes at Scale
                    </h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="admin-blog-form-area">
                    <div class="admin-form-content">
                        <form wire:submit="saveStory">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col admin-sub-title position-relative">
                                        <x-form.input type="text" label="Subtitle" wire:model="story_subtitle"
                                            placeholder="Add Subtitle here" />
                                    </div>
                                    <div class="col admin-sub-title position-relative">
                                        <x-form.input type="text" label="Title" wire:model="story_title"
                                            placeholder="Add Title here" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-floating admin-text-area position-relative mb-3">
                                        <x-form.textarea label="Description" wire:model="story_description"
                                            placeholder="Description" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="storyImage">Image</label>
                                        <input type="file" class="form-control" id="storyImage"
                                            wire:model="story_image">
                                    </div>
                                    @error('story_image')
                                        <div class="form-input-error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-5">
                                        <div class="mission-img overlay-edit position-relative">
                                            <img src="{{ $headerImageUrl }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="edux-frontend-left-title">
                                        <button type="submit" class="save-update">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
