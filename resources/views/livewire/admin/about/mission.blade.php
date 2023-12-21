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
                                        <label for="subtitle"
                                            class="form-label position-absolute level-subtitle">subtitle</label>
                                        <input id="subtitle" type="text" class="form-control admin-form-input "
                                            placeholder="Require steps" aria-label="First name" wire:model="mission_subtitle">
                                    </div>
                                    <div class="col admin-sub-title position-relative">
                                        <label for="title"
                                            class="form-label position-absolute level-title">title</label>
                                        <input id="title" type="text"
                                            class="form-control admin-form-input  admin-m-input"
                                            placeholder="Search Academic Expert Made Easy" aria-label="Last name" wire:model="mission_title">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-floating admin-text-area position-relative mb-3">
                                        <textarea class="form-control admin-area position-relative" placeholder="Leave a comment here" id="floatingTextarea" wire:model="mission_description">Welcome to EduExHub, your premier destination for connecting with top academic experts across a diverse spectrum of fields and disciplines. Whether you represent a higher education institution, a media organisation, or are an individual seeking expert guidance for your academic pursuits, EduExHub is your ultimate resource for empowerment.</textarea>
                                        <span class="edux-word-count">0/1000</span>
                                        <label for="floatingTextarea"
                                            class=" admin-text-area-level position-absolute">Paragraph</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="missionImage">Image</label>
                                        <input type="file" class="form-control" id="missionImage" wire:model="mission_image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="edux-frontend-left-title ">
                                    <button type="submit" class="save-update">Save
                                        Update</button>
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
                    <img src="{{ $missionAbout->missionImage() }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
