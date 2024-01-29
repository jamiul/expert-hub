@extends('frontend.layouts.app')
@section('content')
    @livewire('project.show', ['project' => $project])
@endsection
