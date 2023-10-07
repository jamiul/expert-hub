<div class="container-home">
    <div class="row ">
        <div class="col-lg-5">
            <img class="mr-2  img-fluid" src="{{ asset('/assets/home/001.png') }}" alt="Image"
                style="width:500px;" />
        </div>
        <div class=" col-lg-7 col-sm-12">
            <h2 class="fw-700 mb-3 heading-title fre-small-font" style="">What makes
                {{ config('app.name') }}
                impressive
            </h2>
            <div class="">
                <div class="  ">

                    <div>
                        <h6 class="fs-18  fw-700 heading-title">Access to Expertise
                        </h6>
                        <p class="fs-16">{{ config('app.name') }} specialises in academic fields like course
                            accreditation,
                            curriculum development, LMS, research and analysis.</p>
                    </div>
                    <div>
                    </div>
                </div>
                <div class="">

                    <h6 class="fs-18 fw-700 heading-title">Project Flexibility
                    </h6>
                    <p class="fs-16 "> {{ config('app.name') }} is ideal for academic institutions seeking short-term
                        assistance or
                        specialised expertise without committing to long-term contracts.</p>


                </div>
                <div class="">

                    <h6 class="fs-18 fw-700 heading-title "> Quality Assurance

                    </h6>
                    <p class="fs-16 "> {{ config('app.name') }} ensures academic institutions have access to experts
                        aligned with
                        their educational standards and visibility to the EduExperts’ profiles, ratings,
                        and show case of their previous work.</p>
                </div>
                <div class="">

                    <h6 class="fs-18  fw-700 heading-title ">Cost-Effective Solutions

                    </h6>
                    <p class="fs-16"> {{ config('app.name') }} offers pricing options tailored to various budgets,
                        ensuring fairness
                        and transparency in costs.</p>
                </div>
                <div class=" ">

                    <h6 class="fs-18  fw-700 heading-title ">Efficient Processes
                    </h6>
                    <p class="fs-16">{{ config('app.name') }} streamlines academic hiring and project management with
                        specialised
                        tools, saving institutions valuable time.</p>
                </div>
            </div>
            <a href="{{ url('/search?keyword=&type=expert') }}"
                class="btn rounded border fs-20 frequently-qsn-title  text-white text-white mt-2"
                style="background-color:#275846;">Find EduExpert</a>

        </div>
    </div>
</div>
