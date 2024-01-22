@extends('frontend.layouts.app')

@section('content')
    @livewire('project.create', ['project' => $project])
@endsection