@extends('frontend.layouts.app')
@section('content')
    @livewire('project.eoi.create', ['project' => $project])
@endsection
