<div>
    <h6 class="text-left mb-3 fs-14 ">
        <span class="pr-3 site-font fw-700">{{ translate('Experts by Categories') }}</span>
    </h6>
    @foreach ($parentExperts as $category)
        <label class="aiz-checkbox site-font w-100">
            <input type="checkbox" name="parent_experts[]" value="{{ $category->id }}" onchange="applyFilter()">
            {{ $category->name }}
            <span class="aiz-square-check"></span>
            <span class="float-right text-secondary fs-lg-16 fs-14"></span>
        </label>
    @endforeach
</div>
