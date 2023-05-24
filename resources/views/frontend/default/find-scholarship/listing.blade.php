@extends('frontend.default.layouts.app')

@section('content')

<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">{{ translate('All Scholarship')}}</h1>
            </div>
        </div>
    </div>
</section>

<section class="pb-4">
    <div class="container">
        <div class="card-columns">
            @foreach($scholarships as $scholarship)
                <div class="card mb-3 overflow-hidden rounded-2 border-gray-light hov-box">
                    <a href="{{ route('scholarship.details', $scholarship->slug) }}" class="text-reset d-block">
                        <img
                            src="{{ custom_asset($scholarship->banner) }}"
                            alt="{{ $scholarship->title }}"
                            class="img-fluid lazyload h-220px"
                        >
                    </a>
                    <div class="p-4">
                        <h2 class="fs-18 fw-600 mb-1">
                            <a href="{{ route('scholarship.details', $scholarship->slug) }}" class="text-dark fs-16 fw-700" title="{{ $scholarship->title }}">
                                {{ \Illuminate\Support\Str::limit($scholarship->title, 70, $end = '...') }}
                            </a>
                        </h2>
                        @if($scholarship->category != null)
                        <div class="mt-3 text-primary fs-14 fw-700">
                            {{ $scholarship->category->category_name }}
                        </div>
                        @endif
                        <p class="mb-4 fs-14 text-secondary opacity-70">{{ $scholarship->created_at ? date('d.m.Y',strtotime($scholarship->created_at)) : '' }}</p>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="aiz-pagination aiz-pagination-center mt-4">
            {{ $scholarships->links() }}
        </div>
    </div>
</section>
@endsection
