<div class="mt-3">
    <h6 class="text-left mb-3 fs-14">
        <span class="pr-3 site-font fw-700">{{ translate('Location') }}</span>
    </h6>

    <div class="mb-3">
        <div class=" py-2 border-bottom ">
            <select class="select2 site-font form-control aiz-selectpicker rounded-1" name="country_id"
                onchange="applyFilter()" data-toggle="select2" data-live-search="true">
                <option value="" class="site-font">
                    {{ translate('Select Location') }}</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}" @if (isset($country_id) && $country_id == $country->id) selected @endif>
                        {{ $country->name }}</option>
                @endforeach
            </select>

        </div>
    </div>
</div>
