<div class="academic-seller-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="academic-bar d-flex">
                    <h3 class="seller-title">Delivering World-Class Learning Outcomes at
                        Scale</h3>
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
                                        <label for="subtitle"
                                            class="form-label position-absolute level-subtitle">subtitle</label>
                                        <input id="subtitle" type="text" class="form-control admin-form-input "
                                            placeholder="Require steps" aria-label="First name" wire:model="story_subtitle">
                                    </div>
                                    <div class="col admin-sub-title position-relative">
                                        <label for="title"
                                            class="form-label position-absolute level-title">title</label>
                                        <input id="title" type="text"
                                            class="form-control admin-form-input admin-m-input"
                                            placeholder="Search Academic Expert Made Easy" aria-label="Last name" wire:model="story_title">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-floating admin-text-area position-relative mb-3">
                                        <textarea class="form-control admin-area position-relative" placeholder="Leave a comment here" id="floatingTextarea" wire:model="story_description"></textarea>
                                        <span class="edux-word-count">0/1000</span>
                                        <label for="floatingTextarea"
                                            class=" admin-text-area-level position-absolute">Paragraph</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="storyImage">Image</label>
                                        <input type="file" class="form-control" id="storyImage" wire:model="story_image">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="edux-frontend-left-title">
                                        <button type="submit" class="save-update">Save Update</button>
                                    </div>
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
                    <img src="{{ $storyPage->storyImage() }}" alt="">
                </div>
            </div>
        </div>
    </div>

</div>
