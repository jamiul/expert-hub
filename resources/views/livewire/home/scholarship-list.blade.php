<div class="container">
    <div style="max-width: 704px" class="section-title-wrapper text-center mb-40 mx-auto">
        <h2 class="section-title">Scholarship</h2>
        <p class="section-title-lead">Navigate Scholarships Using Our Scholarship Database</p>
    </div>
    <div class="row">
        @forelse ($scholarships as $scholarship)
            <div class="col-md-3 col-sm-6">
                <div class="scholarship-block">
                    <div class="scholarship-img">
                        <a href="{{ route('scholarship-database',['selectedUniversities[0]' => $scholarship->university?->name]) }}"><img
                                src="{{ $scholarship->university?->logo ? $scholarship->university?->logo : asset('assets/frontend/img/scholarship1.jpg') }}"/></a>
                    </div>
                    <div class="scholarship-text">
                        <h3><a href="{{ route('scholarship-database',['selectedUniversities[0]' => $scholarship->university?->name]) }}">{{ $scholarship->title }}</a></h3>
                        <p>{{ $scholarship->student_type }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p>No Data</p>
        @endforelse
    </div>

    <div class="single-button d-flex justify-content-center edux-btn-mt">
        <x-button.link href="{{ route('scholarship-database') }}" class="btn edux-btn-border-primary"
                       text="View all Scholarships"/>
    </div>
</div>
