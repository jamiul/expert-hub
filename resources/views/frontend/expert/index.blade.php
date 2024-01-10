@extends('frontend.layouts.app')

@section('content')
    <div class="find-consultant databasepading mt-60">
        <div class="container">
            <div class="row">
                @livewire('experts.filter')
                @livewire('experts.lists')
            </div>
        </div>
    </div>
    @include('frontend.expert.partials._slider')
@endsection

@push('bottom_scripts')
@vite('resources/js/expert.js')
@vite('resources/js/find-project.js')
@endpush

@push('bottom_scripts')
<script type="module">

    
    Echo.channel(`channel-name-neloy`)
    .listen('ConversationCreated', (e) => {
        console.log(e);
    });

    
</script>
@endpush