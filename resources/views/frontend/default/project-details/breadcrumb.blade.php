<nav class="justify-content-between d-lg-flex d-md-flex d-xl-flex   " style="--bs-breadcrumb-divider: '>';"
    aria-label="breadcrumb">
    <ol class="breadcrumb d-flex align-items-center">
        <li class="breadcrumb-item"><a href="#"> <img class="p-2 center d-block c-pointe home-iconr"
                    src="{{ asset('/assets/home/find-scholarship/home.png') }}" alt=""></a>
        </li>
        <li class="breadcrumb-item "><a href="#" class="text-muted  fw-600 fs-14 job-details">Find Projects</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"><span
                class="text-black fs-14 fw-600 job-details">{{ $project->name }}</span></li>
    </ol>
    <div class="d-flex mx-4 ">
        <div>
            <img class="p-2 center d-block c-pointer mr-1 project-details-breadcrumb"
                src="{{ asset('/assets/home/find-scholarship/love.png') }}" alt="">
        </div>
        <div class="rounded">
            <img class="p-2 center d-block c-pointer project-details-breadcrumb"
                src="{{ asset('/assets/home/find-scholarship/share.png') }}" alt="">
        </div>
    </div>
</nav>
