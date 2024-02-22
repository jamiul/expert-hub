@props([
    'title' => null,
])
<div class="company-speciality-card">
    <div class="company-speciality-icon">
        <x-icon.verified width="26" height="26"/>
    </div>
    <div class="company-speciality-content">
        <h3 class="h6">{{ $title }}</h3>
        <div x-data="{more: true}">
            @if(Str::length($slot) > 160)
            <div x-show="more">
                <p>{{ Str::limit($slot, 160) }}</p>
                <a href="#" x-on:click.prevent="more = false">Read More</a>
            </div>
            <div x-cloak x-show="more == false">
                <p>{{ $slot }}</p>
                <a href="#" x-on:click.prevent="more = true">Show Less</a>
            </div>
            @else
            <div>
                <p>{{ $slot }}</p>
            </div>
            @endif
        </div>
    </div>
</div>