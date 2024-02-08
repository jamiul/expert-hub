@extends('frontend.layouts.app')

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sidebar-layout left-sidebar-layout client-profile">
                        <div class="page-sidebar">
                            {{-- Profile summary --}}
                            <div class="profile-edit-widget user-bio-edit-widget">
                                <div class="user-profile-picture">
                                    <img src="{{ $profile->picture ? $profile->picture : asset('dummy-user.png')}}">
                                    <button>Edit</button>
                                </div>
                                <div class="user-profile-info">
                                    <h3 class="h6">{{ $profile->user->full_name ?? '' }}</h3>
                                    <p class="text-sm fw-medium text-muted">
                                        {{ $profile->expertField ? $profile->expertField->name : '' }}
                                    </p>
                                    <p class="text-sm d-flex align-items-center justify-content-center">
                                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M12.5009 11.8654C12.9985 11.8654 13.4239 11.6882 13.7771 11.3339C14.1303 10.9795 14.3069 10.5536 14.3069 10.056C14.3069 9.55839 14.1297 9.133 13.7754 8.7798C13.4211 8.4266 12.9951 8.25 12.4975 8.25C11.9999 8.25 11.5745 8.42717 11.2213 8.7815C10.8681 9.13583 10.6915 9.56179 10.6915 10.0594C10.6915 10.557 10.8687 10.9824 11.223 11.3356C11.5774 11.6888 12.0033 11.8654 12.5009 11.8654ZM12.4992 19.5135C14.4556 17.7622 15.9527 16.0824 16.9906 14.474C18.0284 12.8657 18.5473 11.457 18.5473 10.2481C18.5473 8.42498 17.9681 6.92627 16.8098 5.7519C15.6515 4.57753 14.2146 3.99035 12.4992 3.99035C10.7838 3.99035 9.34698 4.57753 8.18865 5.7519C7.03031 6.92627 6.45115 8.42498 6.45115 10.2481C6.45115 11.457 6.97006 12.8657 8.00787 14.474C9.04571 16.0824 10.5428 17.7622 12.4992 19.5135ZM12.4992 21.5096C9.98257 19.3288 8.0954 17.2993 6.8377 15.4211C5.58001 13.5429 4.95117 11.8186 4.95117 10.2481C4.95117 7.94038 5.69765 6.07213 7.1906 4.64328C8.68353 3.21443 10.4531 2.5 12.4992 2.5C14.5454 2.5 16.3149 3.21443 17.8078 4.64328C19.3008 6.07213 20.0473 7.94038 20.0473 10.2481C20.0473 11.8186 19.4184 13.5429 18.1607 15.4211C16.903 17.2993 15.0159 19.3288 12.4992 21.5096Z"
                                                fill="#191D24" fill-opacity="0.5" />
                                        </svg>
                                        <span>{{ $profile->user->country->name ?? '' }}</span>
                                    </p>
                                    <p class="text-sm d-flex align-items-center justify-content-center">
                                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M15.9731 16.5269L17.0269 15.4731L13.25 11.6959V6.99998H11.75V12.3038L15.9731 16.5269ZM12.5016 21.5C11.1877 21.5 9.95268 21.2506 8.79655 20.752C7.6404 20.2533 6.63472 19.5765 5.7795 18.7217C4.92427 17.8669 4.24721 16.8616 3.74833 15.706C3.24944 14.5504 3 13.3156 3 12.0017C3 10.6877 3.24933 9.45268 3.748 8.29655C4.24667 7.1404 4.92342 6.13472 5.77825 5.2795C6.6331 4.42427 7.63834 3.74721 8.79398 3.24833C9.94959 2.74944 11.1844 2.5 12.4983 2.5C13.8122 2.5 15.0473 2.74933 16.2034 3.248C17.3596 3.74667 18.3652 4.42342 19.2205 5.27825C20.0757 6.1331 20.7527 7.13834 21.2516 8.29398C21.7505 9.44959 22 10.6844 22 11.9983C22 13.3122 21.7506 14.5473 21.252 15.7034C20.7533 16.8596 20.0765 17.8652 19.2217 18.7205C18.3669 19.5757 17.3616 20.2527 16.206 20.7516C15.0504 21.2505 13.8156 21.5 12.5016 21.5ZM12.5 20C14.7166 20 16.6041 19.2208 18.1625 17.6625C19.7208 16.1041 20.5 14.2166 20.5 12C20.5 9.78331 19.7208 7.89581 18.1625 6.33748C16.6041 4.77914 14.7166 3.99998 12.5 3.99998C10.2833 3.99998 8.39581 4.77914 6.83748 6.33748C5.27914 7.89581 4.49998 9.78331 4.49998 12C4.49998 14.2166 5.27914 16.1041 6.83748 17.6625C8.39581 19.2208 10.2833 20 12.5 20Z"
                                                fill="#191D24" fill-opacity="0.5" />
                                        </svg>
                                        <span> 10.15am AEST</span>
                                    </p>
                                    <div class="my-4 complete-profile-status-edit-widget">
                                        <p class="text-sm d-flex align-items-center mb-1 gap-3">Complete your profile
                                            {{-- <a class="icon-btn icon-btn-md" href="{{ route('expert.profile.edit') }}">
                                                <x-icon.edit />
                                            </a> --}}
                                        </p>
                                        <div progress-status="40%" class="complete-profile-status-progress-bar"></div>
                                    </div>
                                </div>
                            </div>
                            <livewire:profile.edit.language />
                            <div class="profile-edit-widget user-education-edit-widget">
                                <h4 class="widget-title">Expertise
                                    {{-- <button wire:click="$dispatch('modal.open', { component: 'profile.language.create'})"
                                        class="icon-btn icon-btn-md">
                                        <x-icon.add />
                                    </button> --}}
                                </h4>
                                <div class="widget-content">
                                    <div class="tag-list light-tag-list">
                                        @forelse ($profile->expertises as $skill)
                                        <span class="tag">{{ $skill->name }}</span>
                                        @empty
                                            <p>No data</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                            {{-- Education --}}
                            <livewire:profile.edit.education />
                        </div>
                        <div class="page-content">
                            {{-- Biography --}}
                            <livewire:profile.biography />
                            <div class="page-block mt-40">
                                <livewire:profile.consultation />
                            </div>
                            <div class="page-block mt-40">
                                <div class="consultant-prof edux-consultant-prof card card-24">
                                    <div class="d-flex gap-2 edux-add-modal-steps">
                                        <div class="edux-tool-tips">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M3.99998 18.9999V7.99993V18.6922V18.5913V18.9999ZM4.3077 20.4999C3.80257 20.4999 3.375 20.3249 3.025 19.9749C2.675 19.6249 2.5 19.1973 2.5 18.6922V8.30765C2.5 7.80252 2.675 7.37495 3.025 7.02495C3.375 6.67495 3.80257 6.49995 4.3077 6.49995H8.5V4.80768C8.5 4.30256 8.675 3.875 9.025 3.525C9.375 3.175 9.80257 3 10.3077 3H13.6923C14.1974 3 14.625 3.175 14.975 3.525C15.325 3.875 15.5 4.30256 15.5 4.80768V6.49995H19.6923C20.1974 6.49995 20.625 6.67495 20.975 7.02495C21.325 7.37495 21.5 7.80252 21.5 8.30765V12.5442C21.2705 12.3852 21.0323 12.2474 20.7855 12.1307C20.5387 12.0141 20.2769 11.9102 20 11.8192V8.30765C20 8.2179 19.9711 8.14417 19.9134 8.08647C19.8557 8.02877 19.782 7.99993 19.6923 7.99993H4.3077C4.21795 7.99993 4.14423 8.02877 4.08653 8.08647C4.02883 8.14417 3.99998 8.2179 3.99998 8.30765V18.6922C3.99998 18.7819 4.02883 18.8557 4.08653 18.9134C4.14423 18.9711 4.21795 18.9999 4.3077 18.9999H11.575C11.6186 19.2666 11.676 19.5233 11.7471 19.7701C11.8183 20.0169 11.9064 20.2601 12.0116 20.4999H4.3077ZM9.99998 6.49995H14V4.80768C14 4.71793 13.9711 4.6442 13.9134 4.5865C13.8557 4.5288 13.782 4.49995 13.6923 4.49995H10.3077C10.218 4.49995 10.1442 4.5288 10.0865 4.5865C10.0288 4.6442 9.99998 4.71793 9.99998 4.80768V6.49995ZM18 22.4999C16.7513 22.4999 15.6891 22.0621 14.8135 21.1865C13.9378 20.3108 13.5 19.2486 13.5 17.9999C13.5 16.7512 13.9378 15.6891 14.8135 14.8134C15.6891 13.9378 16.7513 13.5 18 13.5C19.2487 13.5 20.3109 13.9378 21.1865 14.8134C22.0621 15.6891 22.5 16.7512 22.5 17.9999C22.5 19.2486 22.0621 20.3108 21.1865 21.1865C20.3109 22.0621 19.2487 22.4999 18 22.4999ZM18.4423 17.8191V15.0576H17.5577V18.1807L19.65 20.273L20.2731 19.6499L18.4423 17.8191Z" fill="#0036E3" />
                                            </svg>
                                            <h3 class="h5 mb-0">Consultation</h3>
                                            <button class="icon-btn">
                                                <x-icon.info fill="#C8C5D4" />
                                            </button>
                                        </div>

                                        <a href="/training/create"
                                            class="icon-btn icon-btn-md border">
                                            <x-icon.add />
                                        </a>

                                    </div>
                                    {{-- @forelse ($consultations as $consultation)
                                        <div class="consultant-prof1 card-body border-0 edux-border-bottom pt-3">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="prof-img">
                                                        <img src="{{ $consultation->image }}"></img>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">

                                                    <div class="prof-text">
                                                        <div class="edux-prof-text">
                                                            <h6>{{ $consultation->expertField->name }}</h6>
                                                            <div class="consultation-button">
                                                                <button
                                                                wire:click="$dispatch('modal.open', { component: 'profile.consultation.edit', arguments: { consultation: {{ $consultation->id }} }})"
                                                                class="icon-btn icon-btn-md border "
                                                            >
                                                                <x-icon.edit />
                                                            </button>
                                                            <button
                                                                wire:click="deleteConsultation({{ $consultation->id }})"
                                                                class="icon-btn icon-btn-sm p-0"
                                                            >
                                                                <x-icon.delete/>
                                                            </button>
                                                            </div>
                                                        </div>
                                                        <div class="profp1">
                                                            <p class="mb-0">{{ $consultation->description }}</p>
                                                        </div>
                                                        <div class="user-profile-skills edux-user-profile-skills">
                                                            <ul>
                                                                @foreach ($consultation->skills as $skill)
                                                                <li>{{ $skill->name }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <p> No data</p>
                                    @endforelse --}}
                                </div>

                            </div>
                            {{-- Experience --}}
                            <div class="page-block mt-40">
                                <livewire:profile.edit.experience />
                            </div>
                            <div class="page-block mt-40">
                                <div class="card card-24">
                                    <div class="card-body">
                                        <div class="page-block-heading mb-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <x-icon.quote-right />
                                                <h3 class="h5 mb-0">Reviews & Rating</h3>


                                                <button class="icon-btn">
                                                    <x-icon.info fill="#C8C5D4" />
                                                </button>
                                            </div>

                                        </div>

                                        <div class="card border-0 border-bottom rounded-0">
                                            <div class="card-body px-0">
                                                <div class="">
                                                    <p class="fst-italic">Prof. Michael Kassiou played a pivotal role in
                                                        the development of
                                                        our university curriculum. His expertise, creativity, and
                                                        dedication to ensuring our program met the highest standards
                                                        were truly outstanding. We are grateful for his contributions
                                                        and highly recommend his services to any educational
                                                        institution.</p>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="">
                                                        <img src="<?php echo e(asset('assets/frontend/img/chat-avatar.png')); ?>">
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 fw-medium">Dr. Danial</p>
                                                        <p class="text-sm mb-0">Dean | School of Business | EduEx
                                                            University </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
