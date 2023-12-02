@extends('frontend.layouts.front-layout')
@section('content')
    <h1 class="mt-5 text-center">Component examples</h1>
    <div class="col-md-4 py-3 m-auto">
        @livewire('component-example')
    </div>
@endsection