@props([
    'expert' => null,
])
<a class="btn btn-md btn-outline-primary" href="{{ route('offers.create', $expert) }}"> 
    Hire
</a>