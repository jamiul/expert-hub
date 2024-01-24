@props([
    'expert' => null,
    'project' => null,
    'eoi' => null,
])
<a class="btn btn-md btn-outline-primary" href="{{ route('offers.create', ['expert' => $expert, 'project_id' => $project?->id, 'eoi_id' => $eoi?->id]) }}"> 
    Hire
</a>