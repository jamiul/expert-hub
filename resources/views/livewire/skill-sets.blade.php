<div class="skillsets">
    <div class="container">
        <div style="margin-bottom: 82px" class="section-title-wrapper text-center">
            <h2 class="section-title">Experts</h2>
            <p class="section-title-lead">Discover Our Expertise</p>
        </div>
        <div class="tabbable-panel experts-skills-tab">
            <ul class="nav nav-tabs" id="myTab1" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab1" data-bs-toggle="tab" data-bs-target="#home1"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Expert by Field
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab1" data-bs-toggle="tab" data-bs-target="#profile1"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Expert
                        Skillsets
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContentAll">
                <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="accordion">
                                @foreach ($expertFields->take($perRowExpert) as $expertField)
                                    <div class="at-item">
                                        <div class="at-title">
                                            <h2>{{ $expertField->name }}</h2>
                                        </div>
                                        <div class="at-tab">
                                            <ul>
                                                @foreach ($expertField->children->sortBy('name') as $child)
                                                    <li>
                                                        <a href="{{ route('find.experts') }}?fields[0]={{ $child->name }}">{{ $child->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="accordion">
                                @foreach ($expertFields->skip($perRowExpert)->take($perRowExpert) as $expertField)
                                    <div class="at-item">
                                        <div class="at-title">
                                            <h2>{{ $expertField->name }}</h2>
                                        </div>
                                        <div class="at-tab">
                                            <ul>
                                                @foreach ($expertField->children->sortBy('name') as $child)
                                                    <li>
                                                        <a href="{{ route('find.experts') }}?fields[0]={{ $child->name }}">{{ $child->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="accordion">
                                @foreach ($expertSkills->take($perRowSkill) as $expertSkill)
                                    <div class="at-item">
                                        <div class="at-title">
                                            <h2>{{ $expertSkill->name }}</h2>
                                        </div>
                                        <div class="at-tab">
                                            <ul>
                                                @foreach ($expertSkill->children->sortBy('name') as $child)
                                                    <li>
                                                        <a href="{{ route('find.experts') }}?skills[0]={{ $child->name }}">{{ $child->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="accordion">
                                @foreach ($expertSkills->skip($perRowSkill)->take($perRowSkill) as $expertSkill)
                                    <div class="at-item">
                                        <div class="at-title">
                                            <h2>{{ $expertSkill->name }}</h2>
                                        </div>
                                        <div class="at-tab">
                                            <ul>
                                                @foreach ($expertSkill->children->sortBy('name') as $child)
                                                    <li>
                                                        <a href="{{ route('find.experts') }}?skills[0]={{ $child->name }}">{{ $child->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="accordion">
                                @foreach ($expertSkills->skip(8) as $expertSkill)
                                    <div class="at-item">
                                        <div class="at-title">
                                            <h2>{{ $expertSkill->name }}</h2>
                                        </div>
                                        <div class="at-tab">
                                            <ul>
                                                @foreach ($expertSkill->children->sortBy('name') as $child)
                                                    <li>
                                                        <a href="{{ route('find.experts') }}?skills[0]={{ $child->name }}">{{ $child->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
