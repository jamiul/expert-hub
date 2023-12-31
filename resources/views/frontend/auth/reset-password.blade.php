@extends('frontend.layouts.auth')
@section('content')
    @livewire('auth.reset-password', ['token' => $token])
@endsection