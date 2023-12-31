@extends('frontend.layouts.app')
@section('content')
@php
    $iconComponentFiles = File::files(resource_path('views/components/icon'));
    $iconComponentFileNames = [];
    foreach($iconComponentFiles as $file){
        $iconComponentFileNames[] = 'icon.' . Str::before($file->getFileName(), '.blade.php');
    }
@endphp
    <h1 class="mt-5 text-center">Icon Component examples</h1>
    <div class="col-md-4 py-3 m-auto">
        <table class="table">
            <thead>
                <tr>
                    <th>Icon</th>
                    <th>Component</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($iconComponentFileNames as $iconComponentFileName)
                    <tr>
                        <td><x-dynamic-component :component="$iconComponentFileName" /></td>
                        <td><code>{{ '<x-' . $iconComponentFileName . '/>' }}</code></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection