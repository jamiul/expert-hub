<x-modal.form action="checkout">
    <x-slot name="title">Training Registration</x-slot>
    <h2 class="h6 mb-4">{{ $training->title }}</h2>
    @foreach ($training->instructors as $instructor)
    <div class="user-small-card mb-4">
        <div>
            <img src="{{ $instructor->picture }}"/>
        </div>
        <div>
            <h4 class="text-base mb-0">{{ $instructor->user->full_name ?? '' }}</h4>
            <ul class="user-meta">
                {{-- <li>Melbourne University</li> --}}
                <li>{{ $instructor->user->country?->name }}</li>
            </ul>
        </div>
    </div>
    @endforeach
    <div class="custom-table text-sm">
        <div class="tr">
            <div class="td">Seminar Dates</div>
            <div class="td fw-medium">{{ $training->start_date->format('d F Y') }} - {{ $training->end_date->format('d F Y') }}</div>
        </div>
        <div class="tr">
            <div class="td">Time & Location</div>
            <div class="td fw-medium">{{ $training->start_time }} AEST, {{ $training->state?->name }}, {{ $training->country?->name }}</div>
        </div>
        <div class="tr">
            <div class="td">Training Mode</div>
            <div class="td fw-medium">
                <div class="d-flex align-items-center gap-2">
                    @if($training->mode == \App\Enums\TrainingMode::Zoom)
                    <x-icon.video fill="#0036E3"/>
                    @elseif($training->mode == \App\Enums\TrainingMode::FaceToFace)
                    <x-icon.face-to-face fill="#0036E3"/>
                    @endif
                    <div> {{ $training->mode?->value }}</div>
                </div>
            </div>
        </div>
        <div class="tr">
            <div class="td">Language</div>
            <div class="td fw-medium">{{ $training->language?->name }}</div>
        </div>
        <div class="tr">
            <div class="td">Training Category</div>
            <div class="td fw-medium">{{ $training->category->name }}</div>
        </div>
        <div class="tr">
            <div class="td">Training Fee</div>
            <div class="td fw-medium">
                AUD {{ $training->fee }}
            </div>
        </div>
    </div>
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">Checkout</button>
    </x-slot>
</x-modal.form>
    