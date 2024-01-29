@extends('frontend.layouts.app')

@section('content')
    @livewire('offer.expert.show',['offer' => $offer])
@endsection
