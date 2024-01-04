<div class="container">
    <div class="heading">
        <h4>Scholarship</h4>
        <h2>Explore Research Scholarships 2024</h2>
    </div>
    <div class="row">
        @forelse ($scholarships as $scholarship)
            <div class="col-md-3 col-sm-6">
                <div class="scholarship-block">
                    <div class="scholarship-img">
                        <a href="#"><img
                                src="{{ $scholarship->university->logo ? $scholarship->university->logo : asset('assets/frontend/img/scholarship1.jpg') }}" /></a>
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

    <div class="single-button d-flex justify-content-center mt-5">
        <x-button.link href="{{ route('scholarship-database') }}" class="btn edux-btn-border-primary"
            text="View all Scholarships 2024" />
    </div>
</div>
