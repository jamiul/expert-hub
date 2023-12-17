<div class="academic-seller-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="academic-bar d-flex">
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
                                            placeholder="Require steps" aria-label="First name" wire:model="sub_title">
                                    </div>
                                    <div class="col admin-sub-title position-relative">
                                        <label for="title"
                                            class="form-label position-absolute level-title">title</label>
                                        <input id="title" type="text"
                                            class="form-control admin-form-input admin-m-input"
                                            placeholder="Search Academic Expert Made Easy" aria-label="Last name"
                                            wire:model="title">
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
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tab-block">
                                                <div class="tab-img"> <img
                                                        src="{{ asset('assets/frontend/img/tab-icon.png') }}">
                                                </div>
                                                <div class="tab-text">
                                                    <h3>A Wealth of Expertise</h3>
                                                    <p>EduExHub takes pride in its extensive
                                                        and diverse network of distinguished
                                                        academic experts spanning various
                                                        fields and disciplines.</p> <a href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tab-block">
                                                <div class="tab-img"> <img
                                                        src="{{ asset('assets/frontend/img/tab-icon.png') }}">
                                                </div>
                                                <div class="tab-text">
                                                    <h3>Global Accessibility</h3>
                                                    <p>With our platform's global reach,
                                                        users can tap into the expertise of
                                                        top academic professionals from
                                                        around the world.</p> <a href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tab-block">
                                                <div class="tab-img"> <img
                                                        src="{{ asset('assets/frontend/img/tab-icon.png') }}">
                                                </div>
                                                <div class="tab-text">
                                                    <h3>Comprehensive Support</h3>
                                                    <p>EduExHub offers an array of
                                                        comprehensive services designed to
                                                        meet a wide spectrum of needs.
                                                        Whether users are embarking on
                                                        course accreditations, curriculum
                                                        development,</p> <a href="#">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tab-block">
                                                <div class="tab-img"> <img
                                                        src="{{ asset('assets/frontend/img/tab-icon.png') }}">
                                                </div>
                                                <div class="tab-text">
                                                    <h3>Intuitive User Experience</h3>
                                                    <p>Our user-friendly interface and
                                                        streamlined process cater to users
                                                        with varying levels of technical
                                                        proficiency. Posting academic
                                                        projects has never been easier,</p>
                                                    <a href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tab-block">
                                                <div class="tab-img"> <img
                                                        src="{{ asset('assets/frontend/img/tab-icon.png') }}">
                                                </div>
                                                <div class="tab-text">
                                                    <h3>Secure Transactions</h3>
                                                    <p>Security is paramount atEduExHub. To
                                                        guarantee peace of mind for both
                                                        users and experts, we hold payments
                                                        in escrow until</p> <a href="#">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tab-block">
                                                <div class="tab-img"> <img
                                                        src="{{ asset('assets/frontend/img/tab-icon.png') }}">
                                                </div>
                                                <div class="tab-text">
                                                    <h3>Intuitive User Experience</h3>
                                                    <p>Our user-friendly interface and
                                                        streamlined process cater to users
                                                        with varying levels of technical
                                                        proficiency. Posting academic
                                                        projects has never been easier,</p>
                                                    <a href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tab-block">
                                                <div class="tab-img"> <img
                                                        src="{{ asset('assets/frontend/img/tab-icon.png') }}">
                                                </div>
                                                <div class="tab-text">
                                                    <h3>A Wealth of Expertise</h3>
                                                    <p>EduExHub takes pride in its extensive
                                                        and diverse network of distinguished
                                                        academic experts spanning various
                                                        fields and disciplines.</p> <a href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tab-block">
                                                <div class="tab-img"> <img
                                                        src="{{ asset('assets/frontend/img/tab-icon.png') }}">
                                                </div>
                                                <div class="tab-text">
                                                    <h3>Global Accessibility</h3>
                                                    <p>With our platform's global reach,
                                                        users can tap into the expertise of
                                                        top academic professionals from
                                                        around the world.</p> <a href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tab-block">
                                                <div class="tab-img"> <img
                                                        src="{{ asset('assets/frontend/img/tab-icon.png') }}">
                                                </div>
                                                <div class="tab-text">
                                                    <h3>Comprehensive Support</h3>
                                                    <p>EduExHub offers an array of
                                                        comprehensive services designed to
                                                        meet a wide spectrum of needs.
                                                        Whether users are embarking on
                                                        course accreditations, curriculum
                                                        development,</p> <a href="#">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tab-block">
                                                <div class="tab-img"> <img
                                                        src="{{ asset('assets/frontend/img/tab-icon.png') }}">
                                                </div>
                                                <div class="tab-text">
                                                    <h3>Intuitive User Experience</h3>
                                                    <p>Our user-friendly interface and
                                                        streamlined process cater to users
                                                        with varying levels of technical
                                                        proficiency. Posting academic
                                                        projects has never been easier,</p>
                                                    <a href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
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
                                <div class="admin-add-more"> <a href="#"> <span
                                            class="material-symbols-outlined" data-bs-toggle="modal"
                                            data-bs-target="#searchacademicWhatModal">add</span>
                                    </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="edux-frontend-left-title">
                        <button class="save-update">Save Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
