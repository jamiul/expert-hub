<div>
    <div class="dropdown">
        <a class="drop__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center position-relative" href="#" role="button" id="notificationDrop" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/notification.svg') }}" alt="notification">
            <span class="{{$unreadCount > 0 ? 'block' : 'hidden'}} badge rounded-pill text-white fw-bold position-absolute d-flex justify-content-center align-items-center" wire:poll.keep-alive>{{ $unreadCount }}</span>
        </a>
        <div class="dropdown-menu message__dropdown bg-white border-0" aria-labelledby="notificationDrop">
            <ul class="list-unstyled ps-0 mb-0 mess__list">
                <li class="d-flex align-items-center">
                    <figure class="mb-0 thumb__box position-relative">
                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}" class="rounded-circle object-fit-cover" width="48" height="48" alt="avatar">
                        <span class="status rounded-circle position-absolute"></span>
                    </figure>
                    <div class="caption">
                        <div class="d-flex">
                            <div class="left__box">
                                <p class="mb-0 small fw-medium text-dark">Prof. Michael Kassiou</p>
                                <p class="mb-0 small text-muted desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ad unde exercitationem.</p>
                            </div>
                            <div class="time__box fw-medium text-end fs-12">
                                <div class="d-block text-muted">5 mins ago</div>
                                <a href="#" class="rounded-pill detail__link transition">Details</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="d-flex align-items-center">
                    <figure class="mb-0 thumb__box position-relative">
                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}" class="rounded-circle object-fit-cover" width="48" height="48" alt="avatar">
                        <span class="status rounded-circle position-absolute"></span>
                    </figure>
                    <div class="caption">
                        <div class="d-flex">
                            <div class="left__box">
                                <p class="mb-0 small fw-medium text-dark">Prof. Michael Kassiou</p>
                                <p class="mb-0 small text-muted desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ad unde exercitationem.</p>
                            </div>
                            <div class="time__box fw-medium text-end fs-12">
                                <div class="d-block text-muted">5 mins ago</div>
                                <a href="#" class="rounded-pill detail__link transition">Details</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="d-flex align-items-center">
                    <figure class="mb-0 thumb__box position-relative">
                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}" class="rounded-circle object-fit-cover" width="48" height="48" alt="avatar">
                        <span class="status rounded-circle position-absolute"></span>
                    </figure>
                    <div class="caption">
                        <div class="d-flex">
                            <div class="left__box">
                                <p class="mb-0 small fw-medium text-dark">Prof. Michael Kassiou</p>
                                <p class="mb-0 small text-muted desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ad unde exercitationem.</p>
                            </div>
                            <div class="time__box fw-medium text-end fs-12">
                                <div class="d-block text-muted">5 mins ago</div>
                                <a href="#" class="rounded-pill detail__link transition">Details</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="d-flex align-items-center">
                    <figure class="mb-0 thumb__box position-relative">
                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}" class="rounded-circle object-fit-cover" width="48" height="48" alt="avatar">
                        <span class="status rounded-circle position-absolute"></span>
                    </figure>
                    <div class="caption">
                        <div class="d-flex">
                            <div class="left__box">
                                <p class="mb-0 small fw-medium text-dark">Prof. Michael Kassiou</p>
                                <p class="mb-0 small text-muted desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ad unde exercitationem.</p>
                            </div>
                            <div class="time__box fw-medium text-end fs-12">
                                <div class="d-block text-muted">5 mins ago</div>
                                <a href="#" class="rounded-pill detail__link transition">Details</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="text-center border-top footer__link">
                <a href="#" class="d-inline-flex align-items-center small fw-medium text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <path d="M7.61543 17.1153C7.36478 17.1153 7.15468 17.0305 6.98513 16.861C6.81558 16.6914 6.73081 16.4813 6.73081 16.2307V14.7307H19.1058L19.4231 15.0481V5.99998H20.9231C21.1737 5.99998 21.3838 6.08475 21.5534 6.2543C21.7229 6.42385 21.8077 6.63394 21.8077 6.88457V20.6537L18.2693 17.1153H7.61543ZM3.19238 16.2691V3.38463C3.19238 3.13398 3.27716 2.92388 3.44671 2.75433C3.61626 2.58478 3.82636 2.5 4.07701 2.5H16.5385C16.7891 2.5 16.9992 2.58478 17.1688 2.75433C17.3383 2.92388 17.4231 3.13398 17.4231 3.38463V11.8461C17.4231 12.0968 17.3383 12.3069 17.1688 12.4764C16.9992 12.646 16.7891 12.7307 16.5385 12.7307H6.73081L3.19238 16.2691ZM15.9231 11.2308V3.99998H4.69236V11.9231L5.38471 11.2308H15.9231Z" fill="#A1A0A5"/>
                    </svg>
                    <span class="ps-2">View All message</span>
                </a>
            </div>
        </div>
    </div>
</div>
