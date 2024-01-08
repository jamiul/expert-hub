@props([
    'href' => '#',
    'class' => '',
    'text' => 'link'
])

<a href="{{ $href }}" class="{{ $class }}">{{ $text }}</a>