@extends('frontend.layouts.app')
@section('content')
    <h1 class="mt-5 text-center">Component examples</h1>
    <div class="text-center">
        <a class="btn btn-primary btn-lg " href="/components/icons">Icon List</a>
    </div>

    <div class="col-md-4 py-3 m-auto">
        @livewire('component-example')
    </div>
@endsection
