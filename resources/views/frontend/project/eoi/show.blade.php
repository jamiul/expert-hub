@extends('frontend.layouts.app')

@section('content')
    @livewire('project.eoi.show', ['project' => $project, 'eoi' => $eoi])
@endsection