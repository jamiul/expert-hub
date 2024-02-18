<div class="page-section skill-set-section">
    <div class="container">
        <div style="margin-bottom:34px; max-width: 700px" class="section-title-wrapper text-center mx-auto">
            <h2 class="section-title">Experts</h2>
            <p class="section-title-lead">Discover Our Experts</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="category-accordion">
                    @foreach ($expertFields->take($perRowExpert) as $expertField)
                        <div class="category-accordion-item">
                            <div class="category-accordion-title">
                                <h3>{{ $expertField->name }}</h3>
                            </div>
                            <div class="category-accordion-content">
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
                    @foreach ($expertFields->skip($perRowExpert)->take($perRowExpert) as $expertField)
                        <div class="at-item">
                            <div class="at-title">
                                <h3>{{ $expertField->name }}</h3>
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
