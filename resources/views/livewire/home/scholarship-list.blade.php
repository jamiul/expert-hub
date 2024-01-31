<div class="container">
    <div style="max-width: 704px" class="section-title-wrapper text-center mb-40 mx-auto">
        <h2 class="section-title">Scholarship</h2>
        <p class="section-title-lead">Navigate top scholarships from the world’s best universities</p>
    </div>
    <div class="row">
        @forelse ($scholarships as $scholarship)
            <div class="col-md-3 col-sm-6">
                <div class="scholarship-block">
                    <div class="scholarship-img">
                        <a href="#"><img
                                src="{{ $scholarship->university->logo ? $scholarship->university->logo : asset('assets/frontend/img/scholarship1.jpg') }}"/></a>
                    </div>
                    <div class="scholarship-text">
                        <a href="#">{{ $scholarship->university->name }} | {{ $scholarship->country->name }}</a>
                        <h4>Open for {{ $scholarship->student_type }}</h4>
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
