<div>
    <ul class="nav nav-tabs px-4 pt-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="feedTab-tab" data-bs-toggle="tab" data-bs-target="#feedTab" type="button"
                role="tab" aria-controls="feedTab" aria-selected="true">My Feed
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="bestMatch-tab" data-bs-toggle="tab" data-bs-target="#bestMatch" type="button"
                role="tab" aria-controls="bestMatch" aria-selected="false">
                Best Match
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="savedJobs-tab" data-bs-toggle="tab" data-bs-target="#savedJobs" type="button"
                role="tab" aria-controls="savedJobs" aria-selected="false">
                Saved Jobs
            </button>
        </li>
    </ul> <!-- Tab panes -->
    <div class="tab-content">
        <!--.//feed__tab start Here-->
        <div class="tab-pane active" id="feedTab" role="tabpanel" aria-labelledby="feedTab-tab">
            <ul class="feed__list">
                @forelse ($projects as $project)
                    <li class="feed__card tranisition" id="project-list-{{$project->id}}">
                        <h2 class="title lead fw-medium">
                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                                width="24" height="24" alt="bag">
                            <a href="#">
                                {{ $project->title ?? '' }}
                            </a>
                        </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2">
                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                        width="20" height="20" alt="label"> <span class="ps-1">
                                        {{ $project->expertise->name ?? '' }}
                                    </span>
                                </div>
                                <div class="d-inline-flex align-items-center me-2">
                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                        width="20" height="20" alt="clock"> <span class="ps-1">
                                        15 hours ago
                                    </span>
                                </div>
                                <div class="d-inline-flex align-items-center me-2">
                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                        width="20" height="20" alt="globe"> <span
                                        class="ps-1">{{ $project->client->user->country->name ?? '' }}</span>
                                </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="fw-normal text-muted">
                                    {{ $project->type }}:&nbsp;
                                </span>
                                <span class="fw-medium text-muted">
                                    ${{ $project->budget_start_amount . ' - ' . $project->budget_end_amount }}
                                </span>
                                <button class="btn active p-0 border-0 ms-3 like__btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                            fill="#0036E3" />
                                    </svg>
                                </button>
                                <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                        class="fa-solid fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15">
                            @if ($showReadMoreButton === $project->id)
                                {{ $project->description }}
                                <a href="#project-list-{{$project->id}}" wire:click="readLess" class="link">Less</a>
                            @else
                                {{ Str::limit($project->description, 235) }}
                                <a href="#project-list-{{$project->id}}" wire:click="readMore({{ $project->id }})" class="link">More</a>
                            @endif
                        </div>
                        <div class="tag__list d-flex flex-wrap mt-3">
                            <livewire:expert-profile.project-skills :project="$project" />
                        </div>
                    </li>
                @empty
                    <p>No data</p>
                @endforelse

            </ul>
            <!--./ul-->
            <!--.pagination-->
            {{ $projects->links() }}
            {{-- <div class="pagination">
                <div class="row">
                    <div class="col-md-4">
                        <div class="pagination-left"> Showing 1 to 8 of 100 entries </div>
                    </div>
                    <div class="col-md-8">
                        <div class="pagination-right">
                            <div class="results">
                                <p>Results per page</p> <select class="form-select" aria-label="Default select example">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <ul>
                                <li> <a href="#"> <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-left.png') }}">
                                        <img class="hover-icon"
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-left-hover.png') }}">
                                    </a> </li>
                                <li> <a href="#"> <i class="fa fa-caret-left"></i> </a> </li>
                                <li> <a href="#">1</a> </li>
                                <li> <a href="#">2</a> </li>
                                <li> <a href="#">3</a> </li>
                                <li> <a href="#"> <i class="fa fa-caret-right"></i> </a> </li>
                                <li> <a href="#"> <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-right.png') }}">
                                        <img class="hover-icon"
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-right-hover.png') }}">
                                    </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--.//pagination-->
        </div>
        <!--.//feed__tab End Here-->

        <!--.//feed__tab start Here-->
        <div class="tab-pane" id="bestMatch" role="tabpanel" aria-labelledby="bestMatch-tab">
            <div class="tab-pane" id="#bestMatch" role="tabpanel" aria-labelledby="#bestMatch-tab">
                <ul class="feed__list">
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img
                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                                width="24" height="24" alt="bag"> <a href="#">Policy development
                                assistance required for chemical
                                engineering industry</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                        width="20" height="20" alt="label"> <span
                                        class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                        width="20" height="20" alt="clock"> <span class="ps-1">15 hours
                                        ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                        width="20" height="20" alt="globe"> <span
                                        class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                    class="fw-medium text-muted">$200.00</span>
                                <button class="btn active p-0 border-0 ms-3 like__btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                            fill="#0036E3" />
                                    </svg>
                                </button>
                                <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                        class="fa-solid fa-heart"></i> </button>
                            </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                            Development Consultant to lead a project focused on improving access to
                            higher education for students from rural communities...... <span class="collapse"
                                id="contentId"> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque
                                assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse"
                                href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a> </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Industry Trends
                                Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                                Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <span class="collapse" id="contentTag1"> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System
                                    Research Development</a> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System Research
                                    Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                    Research
                                    Development</a> </span> <a
                                class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                                href="#contentTag1" aria-expanded="false" aria-controls="contentTag1"> <span
                                    class="count">+12 More</span>
                                <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less
                                </span> </a> </div>
                    </li>
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img
                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                                width="24" height="24" alt="bag"> <a href="#">Policy development
                                assistance required for chemical
                                engineering industry</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                        width="20" height="20" alt="label"> <span
                                        class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                        width="20" height="20" alt="clock"> <span class="ps-1">15 hours
                                        ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                        width="20" height="20" alt="globe"> <span
                                        class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                    class="fw-medium text-muted">$200.00</span>
                                <button class="btn active p-0 border-0 ms-3 like__btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                            fill="#0036E3" />
                                    </svg>
                                </button>
                                <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                        class="fa-regular fa-heart"></i> </button>
                            </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                            Development Consultant to lead a project focused on improving access to
                            higher education for students from rural communities...... <span class="collapse"
                                id="contentId"> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque
                                assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse"
                                href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a> </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Industry Trends
                                Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                                Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <span class="collapse" id="contentTag2"> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System
                                    Research Development</a> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System Research
                                    Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                    Research
                                    Development</a> </span> <a
                                class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                                href="#contentTag2" aria-expanded="false" aria-controls="contentTag2"> <span
                                    class="count">+12 More</span>
                                <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less
                                </span> </a> </div>
                    </li>
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img
                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                                width="24" height="24" alt="bag"> <a href="#">LMS
                                expert required for business administration</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                        width="20" height="20" alt="label"> <span
                                        class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                        width="20" height="20" alt="clock"> <span class="ps-1">15 hours
                                        ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                        width="20" height="20" alt="globe"> <span
                                        class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                    class="fw-medium text-muted">$200.00</span>
                                <button class="btn active p-0 border-0 ms-3 like__btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                            fill="#0036E3" />
                                    </svg>
                                </button>
                                <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                        class="fa-regular fa-heart"></i> </button>
                            </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                            Development Consultant to lead a project focused on improving access to
                            higher education for students from rural communities...... <span class="collapse"
                                id="contentId"> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque
                                assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse"
                                href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a> </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Industry Trends
                                Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                                Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <span class="collapse" id="contentTag3"> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System
                                    Research Development</a> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System Research
                                    Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                    Research
                                    Development</a> </span> <a
                                class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                                href="#contentTag3" aria-expanded="false" aria-controls="contentTag3"> <span
                                    class="count">+12 More</span>
                                <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less
                                </span> </a> </div>
                    </li>
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img
                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                                width="24" height="24" alt="bag"> <a href="#">Seeking finance
                                guidance for budgeting and forecasting
                                in higher education</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                        width="20" height="20" alt="label"> <span
                                        class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                        width="20" height="20" alt="clock"> <span class="ps-1">15 hours
                                        ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                        width="20" height="20" alt="globe"> <span
                                        class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                    class="fw-medium text-muted">$200.00</span>
                                <button class="btn active p-0 border-0 ms-3 like__btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                            fill="#0036E3" />
                                    </svg>
                                </button>
                                <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                        class="fa-regular fa-heart"></i> </button>
                            </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                            Development Consultant to lead a project focused on improving access to
                            higher education for students from rural communities...... <span class="collapse"
                                id="contentId"> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque
                                assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse"
                                href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a> </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Industry Trends
                                Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                                Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <span class="collapse" id="contentTag4"> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System
                                    Research Development</a> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System Research
                                    Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                    Research
                                    Development</a> </span> <a
                                class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                                href="#contentTag4" aria-expanded="false" aria-controls="contentTag4"> <span
                                    class="count">+12 More</span> <span class="less"> <i
                                        class="fa-solid fa-chevron-up"></i> Show Less </span> </a>
                        </div>
                    </li>
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img
                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                                width="24" height="24" alt="bag"> <a href="#">Expert in
                                environmental economics for academic
                                research</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                        width="20" height="20" alt="label"> <span
                                        class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                        width="20" height="20" alt="clock"> <span class="ps-1">15
                                        hours ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                        width="20" height="20" alt="globe"> <span
                                        class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                    class="fw-medium text-muted">$200.00</span>
                                <button class="btn active p-0 border-0 ms-3 like__btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                            fill="#0036E3" />
                                    </svg>
                                </button>
                                <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                        class="fa-regular fa-heart"></i> </button>
                            </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                            Development Consultant to lead a project focused on improving access to
                            higher education for students from rural communities...... <span class="collapse"
                                id="contentId"> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque
                                assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse"
                                href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a>
                        </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Industry Trends
                                Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                                Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <span class="collapse" id="contentTag5"> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System
                                    Research Development</a> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System Research
                                    Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                    Research
                                    Development</a> </span> <a
                                class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                                href="#contentTag5" aria-expanded="false" aria-controls="contentTag5"> <span
                                    class="count">+12 More</span> <span class="less"> <i
                                        class="fa-solid fa-chevron-up"></i> Show Less </span> </a>
                        </div>
                    </li>
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img
                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                                width="24" height="24" alt="bag"> <a href="#">Developing
                                curriculum for Postgraduate public health
                                unit</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                        width="20" height="20" alt="label"> <span
                                        class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                        width="20" height="20" alt="clock"> <span class="ps-1">15
                                        hours ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                        width="20" height="20" alt="globe"> <span
                                        class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                    class="fw-medium text-muted">$200.00</span>
                                <button class="btn active p-0 border-0 ms-3 like__btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                            fill="#0036E3" />
                                    </svg>
                                </button>
                                <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                        class="fa-regular fa-heart"></i> </button>
                            </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                            Development Consultant to lead a project focused on improving access to
                            higher education for students from rural communities...... <span class="collapse"
                                id="contentId"> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque
                                assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse"
                                href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a>
                        </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Industry Trends
                                Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                                Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <span class="collapse" id="contentTag6"> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System
                                    Research Development</a> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System Research
                                    Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                    Research
                                    Development</a> </span> <a
                                class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                                href="#contentTag6" aria-expanded="false" aria-controls="contentTag6"> <span
                                    class="count">+12 More</span> <span class="less"> <i
                                        class="fa-solid fa-chevron-up"></i> Show Less </span> </a>
                        </div>
                    </li>
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img
                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                                width="24" height="24" alt="bag"> <a href="#">Developing
                                curriculum for Postgraduate public health
                                unit</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                        width="20" height="20" alt="label"> <span
                                        class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                        width="20" height="20" alt="clock"> <span class="ps-1">15
                                        hours ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                        width="20" height="20" alt="globe"> <span
                                        class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                    class="fw-medium text-muted">$200.00</span>
                                <button class="btn active p-0 border-0 ms-3 like__btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                            fill="#0036E3" />
                                    </svg>
                                </button>
                                <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                        class="fa-regular fa-heart"></i> </button>
                            </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                            Development Consultant to lead a project focused on improving access to
                            higher education for students from rural communities...... <span class="collapse"
                                id="contentId"> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque
                                assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse"
                                href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a>
                        </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Industry Trends
                                Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                                Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <span class="collapse" id="contentTag7"> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System
                                    Research Development</a> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System Research
                                    Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                    Research
                                    Development</a> </span> <a
                                class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                                href="#contentTag7" aria-expanded="false" aria-controls="contentTag7"> <span
                                    class="count">+12 More</span> <span class="less"> <i
                                        class="fa-solid fa-chevron-up"></i> Show Less </span> </a>
                        </div>
                    </li>
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img
                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                                width="24" height="24" alt="bag"> <a href="#">Developing
                                curriculum for Postgraduate public health
                                unit</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                        width="20" height="20" alt="label"> <span
                                        class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                        width="20" height="20" alt="clock"> <span class="ps-1">15
                                        hours ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                        width="20" height="20" alt="globe"> <span
                                        class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                    class="fw-medium text-muted">$200.00</span>
                                <button class="btn active p-0 border-0 ms-3 like__btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                            fill="#0036E3" />
                                    </svg>
                                </button>
                                <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                        class="fa-regular fa-heart"></i> </button>
                            </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                            Development Consultant to lead a project focused on improving access to
                            higher education for students from rural communities...... <span class="collapse"
                                id="contentId"> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque
                                assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse"
                                href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a>
                        </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Industry Trends
                                Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                                Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <span class="collapse" id="contentTag8"> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System
                                    Research Development</a> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System Research
                                    Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                    Research
                                    Development</a> </span> <a
                                class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                                href="#contentTag8" aria-expanded="false" aria-controls="contentTag8"> <span
                                    class="count">+12 More</span> <span class="less"> <i
                                        class="fa-solid fa-chevron-up"></i> Show Less </span> </a>
                        </div>
                    </li>
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img
                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                                width="24" height="24" alt="bag"> <a href="#">Developing
                                curriculum for Postgraduate public health
                                unit</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                        width="20" height="20" alt="label"> <span
                                        class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                        width="20" height="20" alt="clock"> <span class="ps-1">15
                                        hours ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                        width="20" height="20" alt="globe"> <span
                                        class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                    class="fw-medium text-muted">$200.00</span>
                                <button class="btn active p-0 border-0 ms-3 like__btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                            fill="#0036E3" />
                                    </svg>
                                </button>
                                <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                        class="fa-regular fa-heart"></i> </button>
                            </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                            Development Consultant to lead a project focused on improving access to
                            higher education for students from rural communities...... <span class="collapse"
                                id="contentId"> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque
                                assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse"
                                href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a>
                        </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                                class="fs-13 fw-medium rounded-pill">Industry Trends
                                Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                                Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <span class="collapse" id="contentTag9"> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System
                                    Research Development</a> <a href="#"
                                    class="fs-13 fw-medium rounded-pill">System Research
                                    Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                    Research
                                    Development</a> </span> <a
                                class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                                href="#contentTag9" aria-expanded="false" aria-controls="contentTag9"> <span
                                    class="count">+12 More</span> <span class="less"> <i
                                        class="fa-solid fa-chevron-up"></i> Show Less </span> </a>
                        </div>
                    </li>
                </ul>
                <!--./ul-->
                <!--.pagination-->
                <div class="pagination">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="pagination-left"> Showing 1 to 8 of 100 entries </div>
                        </div>
                        <div class="col-md-8">
                            <div class="pagination-right">
                                <div class="results">
                                    <p>Results per page</p> <select class="form-select"
                                        aria-label="Default select example">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                                <ul>
                                    <li> <a href="#"> <img
                                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-left.png') }}">
                                            <img class="hover-icon"
                                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-left-hover.png') }}">
                                        </a> </li>
                                    <li> <a href="#"> <i class="fa fa-caret-left"></i> </a>
                                    </li>
                                    <li> <a href="#">1</a> </li>
                                    <li> <a href="#">2</a> </li>
                                    <li> <a href="#">3</a> </li>
                                    <li> <a href="#"> <i class="fa fa-caret-right"></i> </a>
                                    </li>
                                    <li> <a href="#"> <img
                                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-right.png') }}">
                                            <img class="hover-icon"
                                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-right-hover.png') }}">
                                        </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--.//pagination-->
            </div>
            <!--.//feed__tab-->
        </div>
        <!--.//best__match-->
        <div class="tab-pane" id="savedJobs" role="tabpanel" aria-labelledby="savedJobs-tab">
            <ul class="feed__list">
                <li class="feed__card tranisition">
                    <h2 class="title lead fw-medium"> <img
                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                            width="24" height="24" alt="bag"> <a href="#">LMS
                            expert required for business administration</a> </h2>
                    <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                        <div class="d-inline-flex fw-medium">
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                    width="20" height="20" alt="label"> <span class="ps-1">Curriculum
                                    development</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                    width="20" height="20" alt="clock"> <span class="ps-1">15 hours
                                    ago</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                    width="20" height="20" alt="globe"> <span class="ps-1">USA</span>
                            </div>
                        </div>
                        <div class="d-inline-flex align-items-center">
                            <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                class="fw-medium text-muted">$200.00</span>
                            <button class="btn active p-0 border-0 ms-3 like__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                        fill="#0036E3" />
                                </svg>
                            </button>
                            <button class="btn active p-0 border-0 ms-3 like__btn"> <i class="fa-solid fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <hr>
                    <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                        Development Consultant to lead a project focused on improving access to higher
                        education for students from rural communities...... <span class="collapse" id="contentId">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link"
                            data-bs-toggle="collapse" href="#contentId" aria-expanded="false"
                            aria-controls="contentId"> More </a> </div>
                    <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Industry Trends
                            Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                            Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                            Development</a> <span class="collapse" id="contentTag1"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                Research Development</a>
                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> </span> <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed"
                            data-bs-toggle="collapse" href="#contentTag1" aria-expanded="false"
                            aria-controls="contentTag1"> <span class="count">+12 More</span> <span class="less">
                                <i class="fa-solid fa-chevron-up"></i> Show Less
                            </span> </a> </div>
                </li>
                <li class="feed__card tranisition">
                    <h2 class="title lead fw-medium"> <img
                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                            width="24" height="24" alt="bag"> <a href="#">Policy development
                            assistance required for chemical
                            engineering industry</a> </h2>
                    <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                        <div class="d-inline-flex fw-medium">
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                    width="20" height="20" alt="label"> <span class="ps-1">Curriculum
                                    development</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                    width="20" height="20" alt="clock"> <span class="ps-1">15 hours
                                    ago</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                    width="20" height="20" alt="globe"> <span class="ps-1">USA</span>
                            </div>
                        </div>
                        <div class="d-inline-flex align-items-center">
                            <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                class="fw-medium text-muted">$200.00</span>
                            <button class="btn active p-0 border-0 ms-3 like__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                        fill="#0036E3" />
                                </svg>
                            </button>
                            <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                    class="fa-regular fa-heart"></i> </button>
                        </div>
                    </div>
                    <hr>
                    <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                        Development Consultant to lead a project focused on improving access to higher
                        education for students from rural communities...... <span class="collapse" id="contentId">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link"
                            data-bs-toggle="collapse" href="#contentId" aria-expanded="false"
                            aria-controls="contentId"> More </a> </div>
                    <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Industry Trends
                            Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                            Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                            Development</a> <span class="collapse" id="contentTag2"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                Research Development</a>
                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> </span> <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed"
                            data-bs-toggle="collapse" href="#contentTag2" aria-expanded="false"
                            aria-controls="contentTag2"> <span class="count">+12 More</span> <span class="less">
                                <i class="fa-solid fa-chevron-up"></i> Show Less
                            </span> </a> </div>
                </li>
                <li class="feed__card tranisition">
                    <h2 class="title lead fw-medium"> <img
                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                            width="24" height="24" alt="bag"> <a href="#">LMS
                            expert required for business administration</a> </h2>
                    <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                        <div class="d-inline-flex fw-medium">
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                    width="20" height="20" alt="label"> <span class="ps-1">Curriculum
                                    development</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                    width="20" height="20" alt="clock"> <span class="ps-1">15 hours
                                    ago</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                    width="20" height="20" alt="globe"> <span class="ps-1">USA</span>
                            </div>
                        </div>
                        <div class="d-inline-flex align-items-center">
                            <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                class="fw-medium text-muted">$200.00</span>
                            <button class="btn active p-0 border-0 ms-3 like__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                        fill="#0036E3" />
                                </svg>
                            </button>
                            <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                    class="fa-regular fa-heart"></i> </button>
                        </div>
                    </div>
                    <hr>
                    <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                        Development Consultant to lead a project focused on improving access to higher
                        education for students from rural communities...... <span class="collapse" id="contentId">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link"
                            data-bs-toggle="collapse" href="#contentId" aria-expanded="false"
                            aria-controls="contentId"> More </a> </div>
                    <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Industry Trends
                            Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                            Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                            Development</a> <span class="collapse" id="contentTag3"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                Research Development</a>
                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> </span> <a
                            class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                            href="#contentTag3" aria-expanded="false" aria-controls="contentTag3"> <span
                                class="count">+12 More</span> <span class="less"> <i
                                    class="fa-solid fa-chevron-up"></i> Show Less
                            </span> </a> </div>
                </li>
                <li class="feed__card tranisition">
                    <h2 class="title lead fw-medium"> <img
                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                            width="24" height="24" alt="bag"> <a href="#">Seeking finance
                            guidance for budgeting and forecasting in
                            higher education</a> </h2>
                    <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                        <div class="d-inline-flex fw-medium">
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                    width="20" height="20" alt="label"> <span
                                    class="ps-1">Curriculum development</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                    width="20" height="20" alt="clock"> <span class="ps-1">15 hours
                                    ago</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                    width="20" height="20" alt="globe"> <span
                                    class="ps-1">USA</span> </div>
                        </div>
                        <div class="d-inline-flex align-items-center">
                            <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                class="fw-medium text-muted">$200.00</span>
                            <button class="btn active p-0 border-0 ms-3 like__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                        fill="#0036E3" />
                                </svg>
                            </button>
                            <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                    class="fa-regular fa-heart"></i> </button>
                        </div>
                    </div>
                    <hr>
                    <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                        Development Consultant to lead a project focused on improving access to higher
                        education for students from rural communities...... <span class="collapse" id="contentId">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link"
                            data-bs-toggle="collapse" href="#contentId" aria-expanded="false"
                            aria-controls="contentId"> More </a> </div>
                    <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Industry Trends
                            Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                            Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                            Development</a> <span class="collapse" id="contentTag4"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                Research Development</a>
                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> </span> <a
                            class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                            href="#contentTag4" aria-expanded="false" aria-controls="contentTag4"> <span
                                class="count">+12 More</span> <span class="less"> <i
                                    class="fa-solid fa-chevron-up"></i> Show Less
                            </span> </a> </div>
                </li>
                <li class="feed__card tranisition">
                    <h2 class="title lead fw-medium"> <img
                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                            width="24" height="24" alt="bag"> <a href="#">Expert in
                            environmental economics for academic research</a>
                    </h2>
                    <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                        <div class="d-inline-flex fw-medium">
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                    width="20" height="20" alt="label"> <span
                                    class="ps-1">Curriculum development</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                    width="20" height="20" alt="clock"> <span class="ps-1">15 hours
                                    ago</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                    width="20" height="20" alt="globe"> <span
                                    class="ps-1">USA</span> </div>
                        </div>
                        <div class="d-inline-flex align-items-center">
                            <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                class="fw-medium text-muted">$200.00</span>
                            <button class="btn active p-0 border-0 ms-3 like__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                        fill="#0036E3" />
                                </svg>
                            </button>
                            <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                    class="fa-regular fa-heart"></i> </button>
                        </div>
                    </div>
                    <hr>
                    <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                        Development Consultant to lead a project focused on improving access to higher
                        education for students from rural communities...... <span class="collapse" id="contentId">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link"
                            data-bs-toggle="collapse" href="#contentId" aria-expanded="false"
                            aria-controls="contentId"> More </a> </div>
                    <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Industry Trends
                            Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                            Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                            Development</a> <span class="collapse" id="contentTag5"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                Research Development</a>
                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> </span> <a
                            class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                            href="#contentTag5" aria-expanded="false" aria-controls="contentTag5"> <span
                                class="count">+12 More</span> <span class="less"> <i
                                    class="fa-solid fa-chevron-up"></i> Show Less
                            </span> </a> </div>
                </li>
                <li class="feed__card tranisition">
                    <h2 class="title lead fw-medium"> <img
                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                            width="24" height="24" alt="bag"> <a href="#">Developing
                            curriculum for Postgraduate public health
                            unit</a> </h2>
                    <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                        <div class="d-inline-flex fw-medium">
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                    width="20" height="20" alt="label"> <span
                                    class="ps-1">Curriculum development</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                    width="20" height="20" alt="clock"> <span class="ps-1">15 hours
                                    ago</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                    width="20" height="20" alt="globe"> <span
                                    class="ps-1">USA</span> </div>
                        </div>
                        <div class="d-inline-flex align-items-center">
                            <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                class="fw-medium text-muted">$200.00</span>
                            <button class="btn active p-0 border-0 ms-3 like__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                        fill="#0036E3" />
                                </svg>
                            </button>
                            <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                    class="fa-regular fa-heart"></i> </button>
                        </div>
                    </div>
                    <hr>
                    <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                        Development Consultant to lead a project focused on improving access to higher
                        education for students from rural communities...... <span class="collapse" id="contentId">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link"
                            data-bs-toggle="collapse" href="#contentId" aria-expanded="false"
                            aria-controls="contentId"> More </a> </div>
                    <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Industry Trends
                            Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                            Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                            Development</a> <span class="collapse" id="contentTag6"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                Research Development</a>
                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> </span> <a
                            class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                            href="#contentTag6" aria-expanded="false" aria-controls="contentTag6"> <span
                                class="count">+12 More</span> <span class="less"> <i
                                    class="fa-solid fa-chevron-up"></i> Show Less
                            </span> </a> </div>
                </li>
                <li class="feed__card tranisition">
                    <h2 class="title lead fw-medium"> <img
                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                            width="24" height="24" alt="bag"> <a href="#">Developing
                            curriculum for Postgraduate public health
                            unit</a> </h2>
                    <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                        <div class="d-inline-flex fw-medium">
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                    width="20" height="20" alt="label"> <span
                                    class="ps-1">Curriculum development</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                    width="20" height="20" alt="clock"> <span class="ps-1">15 hours
                                    ago</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                    width="20" height="20" alt="globe"> <span
                                    class="ps-1">USA</span> </div>
                        </div>
                        <div class="d-inline-flex align-items-center">
                            <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                class="fw-medium text-muted">$200.00</span>
                            <button class="btn active p-0 border-0 ms-3 like__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                        fill="#0036E3" />
                                </svg>
                            </button>
                            <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                    class="fa-regular fa-heart"></i> </button>
                        </div>
                    </div>
                    <hr>
                    <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                        Development Consultant to lead a project focused on improving access to higher
                        education for students from rural communities...... <span class="collapse" id="contentId">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link"
                            data-bs-toggle="collapse" href="#contentId" aria-expanded="false"
                            aria-controls="contentId"> More </a> </div>
                    <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Industry Trends
                            Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                            Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                            Development</a> <span class="collapse" id="contentTag7"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                Research Development</a>
                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> </span> <a
                            class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                            href="#contentTag7" aria-expanded="false" aria-controls="contentTag7"> <span
                                class="count">+12 More</span> <span class="less"> <i
                                    class="fa-solid fa-chevron-up"></i> Show Less
                            </span> </a> </div>
                </li>
                <li class="feed__card tranisition">
                    <h2 class="title lead fw-medium"> <img
                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                            width="24" height="24" alt="bag"> <a href="#">Developing
                            curriculum for Postgraduate public health
                            unit</a> </h2>
                    <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                        <div class="d-inline-flex fw-medium">
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                    width="20" height="20" alt="label"> <span
                                    class="ps-1">Curriculum development</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                    width="20" height="20" alt="clock"> <span class="ps-1">15 hours
                                    ago</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                    width="20" height="20" alt="globe"> <span
                                    class="ps-1">USA</span> </div>
                        </div>
                        <div class="d-inline-flex align-items-center">
                            <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                class="fw-medium text-muted">$200.00</span>
                            <button class="btn active p-0 border-0 ms-3 like__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                        fill="#0036E3" />
                                </svg>
                            </button>
                            <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                    class="fa-regular fa-heart"></i> </button>
                        </div>
                    </div>
                    <hr>
                    <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                        Development Consultant to lead a project focused on improving access to higher
                        education for students from rural communities...... <span class="collapse" id="contentId">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link"
                            data-bs-toggle="collapse" href="#contentId" aria-expanded="false"
                            aria-controls="contentId"> More </a> </div>
                    <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Industry Trends
                            Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                            Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                            Development</a> <span class="collapse" id="contentTag8"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                Research Development</a>
                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> </span> <a
                            class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                            href="#contentTag8" aria-expanded="false" aria-controls="contentTag8"> <span
                                class="count">+12 More</span> <span class="less"> <i
                                    class="fa-solid fa-chevron-up"></i> Show Less
                            </span> </a> </div>
                </li>
                <li class="feed__card tranisition">
                    <h2 class="title lead fw-medium"> <img
                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                            width="24" height="24" alt="bag"> <a href="#">Developing
                            curriculum for Postgraduate public health
                            unit</a> </h2>
                    <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                        <div class="d-inline-flex fw-medium">
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                    width="20" height="20" alt="label"> <span
                                    class="ps-1">Curriculum development</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                    width="20" height="20" alt="clock"> <span class="ps-1">15 hours
                                    ago</span> </div>
                            <div class="d-inline-flex align-items-center me-2"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                    width="20" height="20" alt="globe"> <span
                                    class="ps-1">USA</span> </div>
                        </div>
                        <div class="d-inline-flex align-items-center">
                            <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span
                                class="fw-medium text-muted">$200.00</span>
                            <button class="btn active p-0 border-0 ms-3 like__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M18 22C17.1667 22 16.4583 21.7083 15.875 21.125C15.2917 20.5417 15 19.8333 15 19C15 18.8833 15.0083 18.7625 15.025 18.6375C15.0417 18.5125 15.0667 18.4 15.1 18.3L8.05 14.2C7.76667 14.45 7.45 14.6458 7.1 14.7875C6.75 14.9292 6.38333 15 6 15C5.16667 15 4.45833 14.7083 3.875 14.125C3.29167 13.5417 3 12.8333 3 12C3 11.1667 3.29167 10.4583 3.875 9.875C4.45833 9.29167 5.16667 9 6 9C6.38333 9 6.75 9.07083 7.1 9.2125C7.45 9.35417 7.76667 9.55 8.05 9.8L15.1 5.7C15.0667 5.6 15.0417 5.4875 15.025 5.3625C15.0083 5.2375 15 5.11667 15 5C15 4.16667 15.2917 3.45833 15.875 2.875C16.4583 2.29167 17.1667 2 18 2C18.8333 2 19.5417 2.29167 20.125 2.875C20.7083 3.45833 21 4.16667 21 5C21 5.83333 20.7083 6.54167 20.125 7.125C19.5417 7.70833 18.8333 8 18 8C17.6167 8 17.25 7.92917 16.9 7.7875C16.55 7.64583 16.2333 7.45 15.95 7.2L8.9 11.3C8.93333 11.4 8.95833 11.5125 8.975 11.6375C8.99167 11.7625 9 11.8833 9 12C9 12.1167 8.99167 12.2375 8.975 12.3625C8.95833 12.4875 8.93333 12.6 8.9 12.7L15.95 16.8C16.2333 16.55 16.55 16.3542 16.9 16.2125C17.25 16.0708 17.6167 16 18 16C18.8333 16 19.5417 16.2917 20.125 16.875C20.7083 17.4583 21 18.1667 21 19C21 19.8333 20.7083 20.5417 20.125 21.125C19.5417 21.7083 18.8333 22 18 22ZM18 6C18.2833 6 18.5208 5.90417 18.7125 5.7125C18.9042 5.52083 19 5.28333 19 5C19 4.71667 18.9042 4.47917 18.7125 4.2875C18.5208 4.09583 18.2833 4 18 4C17.7167 4 17.4792 4.09583 17.2875 4.2875C17.0958 4.47917 17 4.71667 17 5C17 5.28333 17.0958 5.52083 17.2875 5.7125C17.4792 5.90417 17.7167 6 18 6ZM6 13C6.28333 13 6.52083 12.9042 6.7125 12.7125C6.90417 12.5208 7 12.2833 7 12C7 11.7167 6.90417 11.4792 6.7125 11.2875C6.52083 11.0958 6.28333 11 6 11C5.71667 11 5.47917 11.0958 5.2875 11.2875C5.09583 11.4792 5 11.7167 5 12C5 12.2833 5.09583 12.5208 5.2875 12.7125C5.47917 12.9042 5.71667 13 6 13ZM18 20C18.2833 20 18.5208 19.9042 18.7125 19.7125C18.9042 19.5208 19 19.2833 19 19C19 18.7167 18.9042 18.4792 18.7125 18.2875C18.5208 18.0958 18.2833 18 18 18C17.7167 18 17.4792 18.0958 17.2875 18.2875C17.0958 18.4792 17 18.7167 17 19C17 19.2833 17.0958 19.5208 17.2875 19.7125C17.4792 19.9042 17.7167 20 18 20Z"
                                        fill="#0036E3" />
                                </svg>
                            </button>
                            <button class="btn active p-0 border-0 ms-2 like__btn"> <i
                                    class="fa-regular fa-heart"></i> </button>
                        </div>
                    </div>
                    <hr>
                    <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship
                        Development Consultant to lead a project focused on improving access to higher
                        education for students from rural communities...... <span class="collapse" id="contentId">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link"
                            data-bs-toggle="collapse" href="#contentId" aria-expanded="false"
                            aria-controls="contentId"> More </a> </div>
                    <div class="tag__list d-flex flex-wrap mt-3"> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#"
                            class="fs-13 fw-medium rounded-pill">Industry Trends
                            Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational
                            Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                            Development</a> <span class="collapse" id="contentTag9"> <a href="#"
                                class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System
                                Research Development</a>
                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research
                                Development</a> </span> <a
                            class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                            href="#contentTag9" aria-expanded="false" aria-controls="contentTag9"> <span
                                class="count">+12 More</span> <span class="less"> <i
                                    class="fa-solid fa-chevron-up"></i> Show Less
                            </span> </a> </div>
                </li>
            </ul>
            <!--./ul-->
            <!--.pagination-->
            <div class="pagination">
                <div class="row">
                    <div class="col-md-4">
                        <div class="pagination-left"> Showing 1 to 8 of 100 entries </div>
                    </div>
                    <div class="col-md-8">
                        <div class="pagination-right">
                            <div class="results">
                                <p>Results per page</p> <select class="form-select"
                                    aria-label="Default select example">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <ul>
                                <li> <a href="#"> <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-left.png') }}">
                                        <img class="hover-icon"
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-left-hover.png') }}">
                                    </a> </li>
                                <li> <a href="#"> <i class="fa fa-caret-left"></i> </a> </li>
                                <li> <a href="#">1</a> </li>
                                <li> <a href="#">2</a> </li>
                                <li> <a href="#">3</a> </li>
                                <li> <a href="#"> <i class="fa fa-caret-right"></i> </a> </li>
                                <li> <a href="#"> <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-right.png') }}">
                                        <img class="hover-icon"
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-right-hover.png') }}">
                                    </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--.//pagination-->
        </div>
        <!--.//savedJobs-->
    </div>
    <!--.//tab__pane-->
</div>
