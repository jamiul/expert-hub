<div class="border-bottom">
    <div class="container mt-4">
        {{-- breadcrumb  --}}
        <nav class="justify-content-between d-flex " style="--bs-breadcrumb-divider: '>';"
             aria-label="breadcrumb">
            <ol class="breadcrumb d-flex align-items-center">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><img class="p-2 center d-block c-pointer"
                                                              style="width:30px; height:30px;"
                                                              src="{{ asset('assets/home/Find-scholarship/Home.png') }}" alt=""></a>
                </li>
                <li class="breadcrumb-item "><a href="{{ url('search?') . http_build_query([ 'type' => 'freelancer']) }}" class="text-muted fs-14">Find Consultant</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><span
                        class="text-black fs-14">{{ $freelancer->name }}</span></li>
            </ol>
            <div class="d-flex mx-4 ">
                <div class="mr-1 my-2 justify-content-center align-items-center">
                    <a href="" class=" border btn-sm fs-15 text-white w-100 p-2 fw-700 profile-leftside"
                       style=" background: #0059C9;
                       !important;">
                        {{ translate('Message') }}
                    </a>
                </div>
                <div>
                    <img class="p-2 center d-block c-pointer mr-1 border "
                         style="width:35px; height:35px; border:1px solid #FFFFFF"
                         src="{{ asset('/assets/home/Find-scholarship/Love.png') }}" alt="">
                </div>
                <div class="rounded">
                    <img class="p-2 center d-block c-pointer border"
                         style="width:35px; height:35px; border:1px solid #FFFFFF;"
                         src="{{ asset('/assets/home/Find-scholarship/Share.png') }}" alt="">
                </div>
            </div>
        </nav>
    </div>
</div>
