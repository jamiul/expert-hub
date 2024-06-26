@props([
'width' => 24,
'height' => 25,
'fill' => '#191D24',
])

<svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}" viewBox="0 0 24 25" fill="none">
    <path
        d="M18 21.5H8V8.5L15 1.5L16.25 2.75C16.3667 2.86667 16.4625 3.025 16.5375 3.225C16.6125 3.425 16.65 3.61667 16.65 3.8V4.15L15.55 8.5H21C21.5333 8.5 22 8.7 22.4 9.1C22.8 9.5 23 9.96667 23 10.5V12.5C23 12.6167 22.9875 12.7417 22.9625 12.875C22.9375 13.0083 22.9 13.1333 22.85 13.25L19.85 20.3C19.7 20.6333 19.45 20.9167 19.1 21.15C18.75 21.3833 18.3833 21.5 18 21.5ZM6 8.5V21.5H2V8.5H6Z"
        fill="{{ $fill }}"/>
</svg>
