@props([
    'expert' => null,
    'project' => null,
    'eoi' => null,
    'focus' => 'false'
])
<a class="btn btn-md @if($focus == 'true') btn-primary @else btn-outline-primary  @endif" href="{{ route('offers.create', ['expert' => $expert, 'project_id' => $project?->id, 'eoi_id' => $eoi?->id]) }}"> 
    Hire
</a>