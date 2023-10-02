<div>
    <h6 class="text-left mb-3 fs-14">
        <span class="pr-3 site-font fw-700">{{ __('Experts') }}</span>
    </h6>
    <div class="border-bottom">
        <select class="select2 site-font form-control aiz-selectpicker rounded-1" name="child_experts[]"
            onchange="applyFilter()" data-toggle="select2" data-live-search="true">

            <option value="" class="site-font">
                {{ __('Search experts') }}
            </option>
            @foreach ($childExperts as $child)
                <option class="site-font" value="{{ $child->id }}">
                    {{ $child->name }}</option>
            @endforeach
        </select>
    </div>
</div>
