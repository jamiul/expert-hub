@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.expert.partials._details-breadcrumb')
    <livewire:experts.details-expert :name="$name"/>
@endsection

@push('bottom_scripts')
@endpush
