<style>
    .testimonialnone{
        display: none;
    }
</style>
<div class="find-consultant-details">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="consultant-left">
                    <div class="consultant-left-block">
                        <img src="{{ asset('assets/frontend/img/consultant-left1.png') }}"></img>
                        <h3>{{ $user->name }}</h3>
                        <p>{{ !empty($user->expertDetailProfile) && $user->expertDetailProfile->field }}</p>
                        <h5>{{ !empty($user->expertDetailProfile) && $user->expertDetailProfile->specific_field }}</h5>
                    </div>
                    <div class="consultant-left-sydney">
                        <ul>
                            @if (!empty($user->expertDetailProfile))
                                <li><img
                                        src="{{ asset('assets/frontend/img/map-icon.png') }}"></img>{{ $user->expertDetailProfile->address }}
                                </li>
                            @endif
                            <li><img
                                    src="{{ asset('assets/frontend/img/time-icon.png') }}"></img>{{ $date->format('g:ia') }}
                                AEST</li>
                        </ul>
                    </div>
                    <div class="consultant-left-button">
                        <ul>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Book a Consultation
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Choose how long to meet
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="modelminute">
                                                <li>
                                                    <p><input type="radio" name="same">30 minutes</p>
                                                    <h4>$120</h4>
                                                </li>
                                                <li>
                                                    <p><input type="radio" name="same">60 minutes</p>
                                                    <h4>$240</h4>
                                                </li>
                                            </ul>
                                            <div class="modelsep">
                                                <h5>28 Sep, Thursday</h5>
                                                <p>Australian Eastern Daylight Time (GMT +11)</p>
                                                <ul>
                                                    <li><input type="text" placeholder="1:00 AM" name="fname"></li>
                                                    <li><input type="text" placeholder="2:00 AM" name="fname"></li>
                                                    <li><input type="text" placeholder="3:00 AM" name="fname"></li>
                                                    <li><input type="text" placeholder="4:00 AM" name="fname"></li>
                                                </ul>
                                                <div class="modal-seemore">
                                                    <a href="#">See more time</a>
                                                </div>
                                                <div class="modal-button">
                                                    <ul>
                                                        <li><a href="#">Book a Consultation</a></li>
                                                        <li><a href="#">Book Media</a></li>
                                                    </ul>
                                                </div>
                                                <div class="model-message">
                                                    <img
                                                        src="{{ asset('assets/frontend/img/message-icon.png') }}"></img>
                                                    <p>You can share custom requirements and message the freelancer
                                                        after checkout</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <ul>
                                                <li><a href="#"><img
                                                            src="{{ asset('assets/frontend/img/like-icon.png') }}"></img>Save</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"  wire:ignore data-bs-toggle="modal" data-bs-target="#shareModel">
                                                        <img src="{{ asset('assets/frontend/img/share-icon.png') }}"/>Share
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <li><a href="#">Book a TV Interview</a></li>
                            <li><a href="#">Invite to Project</a></li>
                        </ul>
                    </div>
                    <div class="consultant-l languages">
                        <h3>Languages</h3>
                        @foreach($arr_languages as $language)
                            <p><img
                            src="{{ asset('assets/frontend/img/site-icon.png') }}"></img>Proficient in {{ $language->name }}
                            </p>
                        @endforeach
                    </div>
                    <div class="consultant-l expertise">
                        <h3>Expertise</h3>
                        <ul>
                            @foreach ($arr_skills as $skill)
                                <li><a href="#">{{ $skill->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="consultant-l education">
                        <h3>Education</h3>
                        @if (!empty($user->userProfile))
                            @foreach ($user->userProfile->educationQualifications as $educationDetail)
                                <p>{{ $educationDetail->field_of_study }} <span>{{ $educationDetail->university }}</span>
                                    {{ $educationDetail->start_year }} - {{ $educationDetail->end_year }}</p>
                            @endforeach
                        @endif
                    </div>
                    <div class="consultant-l profile">
                        <h3>University Profile</h3>
                        @if (!empty($user->expertDetailProfile))
                            <p><a href="{{ $user->expertDetailProfile->university_profile }}">{{ $user->expertDetailProfile->university_profile}}</a>
                            </p>
                        @endif
                    </div>
                    <div class="consultant-l profile">
                        <h3>Research Profile</h3>
                        @if (!empty($user->expertDetailProfile))
                            <p><a href="{{ $user->expertDetailProfile->research_profile }}">{{ $user->expertDetailProfile->research_profile}}</a></p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="consultant-right">
                    <div class="consultant-d">
                        <div class="consultant-d-left">
                            <h3>Biography</h3>
                            @if (!empty($user->profile))
                                <p>${{ $user->profile->hourly_rate }}/hour</p>
                            @endif
                        </div>
                        <p>{{ !empty($user->profile) && $user->profile->bio }}</p>
                    </div>

                    <div class="consultant-prof">
                        @foreach($user->bookExperts as $bookExpert)
                        <div class="consultant-prof1">
                            <div class="row">
                                <h3>Book Expert for Consultation</h3>
                                <div class="col-md-3">
                                    <div class="prof-img">
                                        <img src="{{ asset('assets/frontend/img/book-exprt1.jpg') }}"></img>
                                        <h4>Prof. {{$user->name}}</h4>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="prof-text">
                                        <div class="prof-expart">
                                            <ul>
                                                <li>Expertise:</li>
                                                @foreach($bookExpert->expertises as $expertise)
                                                    <li><a href="#">{{ $expertise->expertise->name }}</a></li>
                                                @endforeach
                                            </ul>
                                            <p>${{ $bookExpert->half_hourly_rate }}/30mins</p>
                                        </div>
                                        <div class="profp1"><span>Prof. {{$user->name}}</span> {{$bookExpert->description}}
                                            <span>curriculum development.</span>
                                        </div>
                                        <div class="profip2">To schedule a consultation, <a href="#">Book a
                                                time</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="consultant-work">
                        <h3><img src="{{ asset('assets/frontend/img/work-vector.png') }}"></img>Work Experience</h3>
                        @foreach ($user->workExperiences as $workExperience)
                            <div class="consultant-work-b">
                                <h4>{{ $workExperience->designation }}</h4>
                                <h5>{{ $workExperience->company_name }}, {{ $workExperience->location }} <strong>|
                                        {{ date('Y', strtotime($workExperience->start)) }} -
                                        {{ $workExperience->end ? date('Y', strtotime($workExperience->end)) : 'Present' }}</strong>
                                </h5>
                                <p>{{ $workExperience->description }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="consultant-tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <img src="{{ asset('assets/frontend/img/abclient3.png') }}">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">Current Projects</button>
                            </li>
                            <span>|</span>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-tab-pane" type="button" role="tab"
                                    aria-controls="profile-tab-pane" aria-selected="false">Completed Projects</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                aria-labelledby="home-tab" tabindex="0">
                                @foreach ($user->workExperiences as $workExperience)
                                    @foreach ($arr_projects as $project)
                                        @if ($project->closed == 1)
                                            <div class="consultant-work-b">
                                                <h4>{{ $project->name }}</h4>
                                                <h5>{{ $workExperience->company_name }},
                                                    {{ $workExperience->location }} <strong>|
                                                        {{ date('Y', strtotime($workExperience->start)) }} -
                                                        {{ $workExperience->end ? date('Y', strtotime($workExperience->end)) : 'Present' }}</strong>
                                                    <p>{{ $project->excerpt }}</p>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                aria-labelledby="profile-tab" tabindex="0">
                                @foreach ($user->workExperiences as $workExperience)
                                    @foreach ($arr_projects as $project)
                                        @if ($project->closed == 0)
                                            <div class="consultant-work-b">
                                                <h4>{{ $project->name }}</h4>
                                                <h5>{{ $workExperience->company_name }},
                                                    {{ $workExperience->location }} <strong>|
                                                        {{ date('Y', strtotime($workExperience->start)) }} -
                                                        {{ $workExperience->end ? date('Y', strtotime($workExperience->end)) : 'Present' }}</strong>
                                                    <p>{{ $project->excerpt }}</p>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="consultant-testimonial">
                        <h3><img src="{{ asset('assets/frontend/img/testimonial.png') }}">Testimonials</h3>
                        @foreach($user->testimonials as $key => $testimonial)
                            @if($key>=2)
                                <div class="testimonial-text testimonialnone">
                                    <p>{{$testimonial->description}}</p>
                                    <div class="testimonial-block">
                                        <div class="testimonial-img">
                                            <img src="{{ asset('assets/frontend/img/testimonial-img1.jpg') }}"></img>
                                        </div>
                                        <div class="testimonial-con">
                                            <h4>Prof. {{$testimonial->clientUser->name}}</h4>
                                            <p>Dean | School of Business | Sydney Islamic Business School</p>
                                        </div>
                                    </div>
                                </div>
                            @else  
                                <div class="testimonial-text">
                                    <p>{{$testimonial->description}}</p>
                                    <div class="testimonial-block">
                                        <div class="testimonial-img">
                                            <img src="{{ asset('assets/frontend/img/testimonial-img1.jpg') }}"></img>
                                        </div>
                                        <div class="testimonial-con">
                                            <h4>Prof. {{$testimonial->clientUser->name}}</h4>
                                            <p>Dean | School of Business | Sydney Islamic Business School</p>
                                        </div>
                                    </div>
                                </div>
                            @endif    
                        @endforeach
                        <div class="testimonial-button">
                            <a id="read-more" href="javascript:readMore()">More Testimonials <i class="fa fa-angle-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="consultant-left-button">
        <div class="modal fade" id="shareModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="shareModelLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content"> 
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="share-links">
                            <li>
                                <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ route('find-experts.details', $user->user_name) }}" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a class="twitter" href="https://twitter.com/intent/tweet?&url={{ route('find-experts.details', $user->user_name) }}" target="blank">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url={{ route('find-experts.details', $user->user_name) }}" target="blank">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function readMore() {
        var testimonialnones = document.getElementsByClassName("testimonialnone");
        var btnReadMore = document.getElementById("read-more");
        if (btnReadMore.textContent == "More Testimonials") {
            for(var i=0;i<testimonialnones.length;i++)
            {
                testimonialnones[i].style.display = "inline";
            }
            btnReadMore.innerHTML = "Less Testimonials";
        } else {
            for(var i=0;i<testimonialnones.length;i++)
            {
                testimonialnones[i].style.display = "none";
            }
            btnReadMore.innerHTML = "More Testimonials";
        }
    }
</script>
