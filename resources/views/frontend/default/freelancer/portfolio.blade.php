{{-- Portfolio  --}}
<div class="mx-lg-4 rounded border p-2 px-lg-4 mt-3 mb-3">
    <div class="d-flex justify-content-between ">
        <div class="w-lg-75 w-xl-50 lh-1-8 d-flex content-title ">
            <img style="height:24px; width:24px;"
                 src=" {{ asset('assets/home/Find-scholarship/Portfolio.png') }}"
                 class="mr-2" alt="service_image">
            <h4 class="fw-700 fs-23 text-black ">{{ translate('Portfolio') }}</h4>
        </div>
        <div>
            <a href=""
               class=" fs-16 text-dark btn rounded-1 border text-center fre-consultant-category">
                <img class=" category-list "
                     src="{{ asset('assets/home/Find-scholarship/Left-arrow.png') }}"
                     alt="Image" style="width:8px;" />
            </a>
            <a href=""
               class=" fs-16 text-dark btn rounded-1 border text-center fre-consultant-category" style="background-color:#0059C9;">
                <img class=" category-list "
                     src=" {{ asset('assets/home/Find-scholarship/Right-arrow.png') }}"
                     alt="Image" style="width:8px;" />
            </a>
        </div>
    </div>
    <div class="row ">
        @foreach ($freelancer->userPortfolios as $user_portfolio)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="caorusel-box">
                    <a href="" class="text-dark">
                        <div class="" style="height:330px">
                            <div class="">
                                <div class=" ">
                                    @if($user_portfolio->photo != null)
                                        <img src="{{ custom_asset($user_portfolio->photo) }}" class="card-img-top rounded" alt="service_image"
                                             height="212">
                                    @else
                                        <img src="{{ asset('assets/home/Find-scholarship/Portfolio-1.png') }}" class="card-img-top rounded" alt="service_image"
                                             height="212">
                                    @endif
                                </div>
                                <div class="py-3">
                                    <div>
                                        <p class="  fw-600 fs-16"
                                           style=" line-height:17px;">{{ $user_portfolio->name }}</p>

                                        <div class="mt-3">
                                            <span class="fs-14 text-primary border rounded-2 py-1 px-2 border-primary ">{{ $user_portfolio->type }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
