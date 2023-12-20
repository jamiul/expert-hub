<div class="progress-step-content  ">
    <h6 class="mb-2">Expert by Field</h6>
    <x-form.multiselect name="ExpertByField" label="">
        <option value="">Select Title</option>
        <optgroup label="# Architecture">
            <option value="Architecture History">Architecture History</option>
            <option value="Architecture History">Architecture History</option>
        </optgroup>
        <optgroup label="# Construction">
            <option value="Art">Art</option>
            <option value="Animation">Animation</option>
        </optgroup>
    </x-form.multiselect>
    <h6 class="mb-2 mt-20">Expert skillset</h6>
    <div class="accordion-items-select-wrapper skillset-selection-area">
        <div class="card card-24">
            <div class="card-header bg-white">
                <x-form.search class="input-field-md" label="" name="skill" placeholder="Search skillsets..."/>
            </div>
            <div class="card-body py-3">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                aria-expanded="false" aria-controls="flush-collapseOne">
                            Accreditation Specialists
                        </button>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-collapseOne"
                                data-bs-parent="#accordionFlushExample">
                            <button class="btn btn-light w-100">Accreditation Documentation</button>
                            <button class="btn btn-light w-100">Accreditation Process</button>
                            <button class="btn btn-light w-100">Accreditation Renewal</button>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                aria-expanded="false" aria-controls="flush-collapseTwo">
                            Curriculum Experts
                        </button>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-collapseTwo"
                                data-bs-parent="#accordionFlushExample">
                            <button class="btn btn-light w-100">Accreditation Documentation</button>
                            <button class="btn btn-light w-100 selected-skill">Accreditation Process
                            </button>
                            <button class="btn btn-light w-100">Accreditation Renewal</button>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                aria-expanded="false" aria-controls="flush-collapseThree">
                            Course Accreditation Specialists
                        </button>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree"
                                data-bs-parent="#accordionFlushExample">
                            <button class="btn btn-light w-100">Accreditation Documentation</button>
                            <button class="btn btn-light w-100 selected-skill">Accreditation Process
                            </button>
                            <button class="btn btn-light w-100">Accreditation Renewal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-24">
            <div class="card-body">
                <ul class="button-list has-title">
                    <li class="button-list-title">
                        Course Accreditation Specialists
                    </li>
                    <li class="button-list-item">
                        Accreditation Documentation
                        <span class="button-list-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 18 18" fill="none">
                        <path
                            d="M6.3 12.75L9 10.05L11.7 12.75L12.75 11.7L10.05 9L12.75 6.3L11.7 5.25L9 7.95L6.3 5.25L5.25 6.3L7.95 9L5.25 11.7L6.3 12.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69688 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69688 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69688 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69688 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C10.675 15 12.0938 14.4188 13.2563 13.2563C14.4188 12.0938 15 10.675 15 9C15 7.325 14.4188 5.90625 13.2563 4.74375C12.0938 3.58125 10.675 3 9 3C7.325 3 5.90625 3.58125 4.74375 4.74375C3.58125 5.90625 3 7.325 3 9C3 10.675 3.58125 12.0938 4.74375 13.2563C5.90625 14.4188 7.325 15 9 15Z"
                            fill="#303744" fill-opacity="0.49"/>
                    </svg>
                    </span>

                    </li>
                    <li class="button-list-item">
                        Accreditation Process
                        <span class="button-list-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 18 18" fill="none">
                        <path
                            d="M6.3 12.75L9 10.05L11.7 12.75L12.75 11.7L10.05 9L12.75 6.3L11.7 5.25L9 7.95L6.3 5.25L5.25 6.3L7.95 9L5.25 11.7L6.3 12.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69688 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69688 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69688 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69688 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C10.675 15 12.0938 14.4188 13.2563 13.2563C14.4188 12.0938 15 10.675 15 9C15 7.325 14.4188 5.90625 13.2563 4.74375C12.0938 3.58125 10.675 3 9 3C7.325 3 5.90625 3.58125 4.74375 4.74375C3.58125 5.90625 3 7.325 3 9C3 10.675 3.58125 12.0938 4.74375 13.2563C5.90625 14.4188 7.325 15 9 15Z"
                            fill="#303744" fill-opacity="0.49"/>
                    </svg>
                    </span>
                    </li>
                    <li class="button-list-title">
                        Program Design
                    </li>
                    <li class="button-list-item">
                        Educational Expertise
                        <span class="button-list-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 18 18" fill="none">
                        <path
                            d="M6.3 12.75L9 10.05L11.7 12.75L12.75 11.7L10.05 9L12.75 6.3L11.7 5.25L9 7.95L6.3 5.25L5.25 6.3L7.95 9L5.25 11.7L6.3 12.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69688 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69688 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69688 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69688 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C10.675 15 12.0938 14.4188 13.2563 13.2563C14.4188 12.0938 15 10.675 15 9C15 7.325 14.4188 5.90625 13.2563 4.74375C12.0938 3.58125 10.675 3 9 3C7.325 3 5.90625 3.58125 4.74375 4.74375C3.58125 5.90625 3 7.325 3 9C3 10.675 3.58125 12.0938 4.74375 13.2563C5.90625 14.4188 7.325 15 9 15Z"
                            fill="#303744" fill-opacity="0.49"/>
                    </svg>
                    </span>

                    </li>
                    <li class="button-list-item">
                        Instructionḁl Design
                        <span class="button-list-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 18 18" fill="none">
                        <path
                            d="M6.3 12.75L9 10.05L11.7 12.75L12.75 11.7L10.05 9L12.75 6.3L11.7 5.25L9 7.95L6.3 5.25L5.25 6.3L7.95 9L5.25 11.7L6.3 12.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69688 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69688 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69688 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69688 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C10.675 15 12.0938 14.4188 13.2563 13.2563C14.4188 12.0938 15 10.675 15 9C15 7.325 14.4188 5.90625 13.2563 4.74375C12.0938 3.58125 10.675 3 9 3C7.325 3 5.90625 3.58125 4.74375 4.74375C3.58125 5.90625 3 7.325 3 9C3 10.675 3.58125 12.0938 4.74375 13.2563C5.90625 14.4188 7.325 15 9 15Z"
                            fill="#303744" fill-opacity="0.49"/>
                    </svg>
                    </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
