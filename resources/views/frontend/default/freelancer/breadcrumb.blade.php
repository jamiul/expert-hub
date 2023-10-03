<div class="border-bottom">
    <div class="container mt-4">
        {{-- breadcrumb  --}}
        <nav class="justify-content-between d-flex " style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb d-flex align-items-center">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><img class="p-2 center d-block c-pointer"
                            style="width:30px; height:30px;" src="{{ asset('assets/home/find-scholarship/home.png') }}"
                            alt=""></a>
                </li>
                <li class="breadcrumb-item "><a
                        href="{{ url('search?') . http_build_query(['type' => 'freelancer']) }}"
                        class="text-muted fs-14">Find Consultant</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><span
                        class="text-black fs-14">{{ $freelancer->name }}</span></li>
            </ol>
            <div class="d-flex mx-4 ">
                <div class="mr-1 my-2 justify-content-center align-items-center">
                    <a href=""
                        class=" border btn-sm fs-15 text-white w-100 p-2 breadcrumb-btn fw-700 profile-leftside">
                        {{ translate('Message') }}
                    </a>
                </div>
                <div>
                    <img class="p-2 center d-block c-pointer mr-1 border breadcrumb-icon "
                        src="{{ asset('/assets/home/find-scholarship/love.png') }}" alt="">
                </div>
                <div class="rounded">
                    <img class="p-2 center d-block c-pointer border breadcrumb-icon"
                        src="{{ asset('/assets/home/find-scholarship/share.png') }}" alt="">
                </div>
            </div>
        </nav>
    </div>
</div>
