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
                                src="{{ $scholarship->logo ? $scholarship->logo : asset('dummy-logo.png') }}"/></a>
                    </div>
                    <div class="scholarship-text">
                        <h3><a href="{{ route('scholarship-database',['selectedUniversities[0]' => $scholarship->university?->name]) }}">{{ $scholarship->title }}</a></h3>
                    </div>
                </div>
            </div>
        @empty
            <p>No Data</p>
        @endforelse
    </div>

    <div class="single-button d-flex justify-content-center edux-btn-mt">
        <x-button.link href="{{ route('scholarship-database') }}" class="btn btn-outline-primary border-2 btn-md"
                       text="View all Scholarships"/>
    </div>
</div>
