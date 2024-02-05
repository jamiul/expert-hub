@extends('frontend.layouts.app')
@section('content')
    @vite('resources/default/css/expert-dashboard.css')

    @livewire('expert.payment.get-paid')

@endsection
