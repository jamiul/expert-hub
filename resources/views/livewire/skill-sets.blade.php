<div class="skillsets">
    <div class="container">
        <div style="margin-bottom:34px; max-width: 700px" class="section-title-wrapper text-center mx-auto">
            <h2 class="section-title">Experts</h2>
            <p class="section-title-lead">Explore The Expertise Of Our Academic And Industry Leaders</p>
        </div>

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
</div>
