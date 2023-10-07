@if (get_setting('featured_category_show') == 'on')
                <form id=" EduExpert-filter-form" action="" method="GET">
                    <section class="">
                        <div class="whyFreeEdu-container-main">

                            <div class="d-flex justify-content-between ">
                                <div class="w-lg-100 w-lg-100 lh-1-8 content-title ">
                                    <!-- <h2 class="fw-700 fs-40">{{ get_setting('service_section_title') }}</h2> -->
                                    <p class=" mt-5 text-success fw-700 frequently-qsn-title">About {{ config('app.name') }}</p>
                                    <p class=" fw-500 seminar-objective-details">Welcome to {{ config('app.name') }}, your premier
                                        destination for connecting with top academic experts across a diverse spectrum of
                                        fields and disciplines. Whether you represent a higher education institution, a
                                        media organisation, or are an individual seeking expert guidance for your academic
                                        pursuits, {{ config('app.name') }} is your ultimate resource for empowerment.


                                    </p>
                                    <p class=" fw-500 seminar-objective-details">At {{ config('app.name') }}, we proudly provide an
                                        extensive and diverse network of distinguished academic professionals, ensuring that
                                        you have access to highly qualified experts with specialised knowledge tailored to
                                        your unique requirements. Our global platform transcends borders, providing you with
                                        an international perspective that proves invaluable when addressing global or
                                        cross-cultural educational challenges and opportunities.</p>
                                    <p class=" fw-500 seminar-objective-details">
                                        Our comprehensive suite of services caters to a wide spectrum of needs, including
                                        but not limited to course accreditations, curriculum development, program design,
                                        policy formulation, scholarship advice, and complete educational project management.
                                        With our intuitive user interface, you can effortlessly post academic projects,
                                        review expressions of interest from our top academic experts, and make informed
                                        decisions that align with your project goals. Furthermore, we prioritise security by
                                        securely holding payments in escrow until project completion, ensuring satisfaction
                                        in every collaboration.</p>

                                    <!-- <p class="fs-18">{{ get_setting('service_section_subtitle') }}</p> -->
                                </div>

                            </div>

                            <div class="row gutters-10 ">
                                @if (get_setting('featured_category_list') != null)
                                    @foreach (json_decode(get_setting('featured_category_list'), true) as $key => $category_id)
                                        @if (($category = \App\Models\ProjectCategory::find($category_id)) != null)
                                            <div class="col-md-6 col-lg-3 ">
                                                <div class="card" style="height:320px;">
                                                    <img class="w-100 h-170px" src=" {{ custom_asset($category->photo) }}"
                                                        alt="Image" />
                                                    <div class="card-body" style=" padding:13px;">

                                                        <a class=" featured_category text-dark" onclick="applyFilter()"
                                                            href="{{ route('freelancer.category', $category->id) }}">
                                                            <p class="fs-20 fw-600 " style="height:25px; line-height:23px;">
                                                                {{ $category->name }}
                                                            </p>
                                                        </a>

                                                        <div class="frequently-qsn-details text-normal "
                                                            style=" line-height:22px;">
                                                            {{ $category->description }}
                                                            <a href="{{ route('freelancer.category', $category->id) }}"
                                                                class="nav-toggle "style="color:#6560E6;">Find
                                                                EduExpert</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </section>
                </form>
            @endif