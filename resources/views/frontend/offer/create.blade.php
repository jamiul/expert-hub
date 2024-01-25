@extends('frontend.layouts.app')

@section('content')
    @livewire('offer.create',['expert' => $expert])
@endsection
