@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')

@else
<img src="https://test.eduexperthub.com/logo/expert-gate-logo.png" class="logo" alt="{{ config('app.name') }}">
{{-- {{ $slot }} --}}
@endif
</a>
</td>
</tr>
