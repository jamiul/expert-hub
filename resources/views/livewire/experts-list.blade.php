<div>
    <h6 class="text-left mb-3 fs-14 ">
        <span class="pr-3 site-font fw-700">{{ __('All Experts') }}</span>
    </h6>
    <div class="mt-3">
        @foreach ($experts as $key => $expert)
            <a class="text-dark d-flex justify-content-start align-items-center site-font mb-1" data-toggle="collapse"
                href="#skill_{{ $expert->id }}" role="button" aria-expanded="true"
                aria-controls="skill_{{ $expert->id }}">
                <label class="fas fa-plus "
                    style="border-radius: 50%;height: 18px; width: 17px;align-items:center;margin: 0 5px 0 0;background: #95DF00; color: white;display: flex;justify-content: center;align-content: center; font-size:9px"></label>
                <p class="mb-0 fs-14 fw-500">{{ $expert->name }}
                </p>
            </a>
            <div class="overflow-auto h-130px collapse " id="skill_{{ $expert->id }}">
                @foreach ($expert->childrens as $expert)
                    <div class=" w-200px child-skill-project-filtering">
                        <div class="mb-1 ">
                            <input type="checkbox" name="expert[]" id="{{ $expert->id }}"
                                value="{{ $expert->id }}" class=" d-none" onchange="applyFilter()">
                            <label class="c-pointer site-font fs-12 text-dark ml-3 fw-500 mb-0"
                                for="{{ $expert->id }}">
                                {{ $expert->name }}
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
