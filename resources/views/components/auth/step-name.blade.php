@props([
'name' => 'Getting Started',
'time' => 1,
'fill' => '#191D24',
])
<strong>{{ $name }}</strong> <span class="d-flex align-items-center"> <x-icon.clock width="14" height="14" fill="#0036E3"/> <span class="ps-1">{{ $time }} Min</span></span>