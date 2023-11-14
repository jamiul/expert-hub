@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')

@else
<img src="https://eduexperthub.com/assets/frontend/img/logo.png" class="logo" alt="{{ config('app.name') }}">
{{-- {{ $slot }} --}}
@endif
</a>
</td>
</tr>
