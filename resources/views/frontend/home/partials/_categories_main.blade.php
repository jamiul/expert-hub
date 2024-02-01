<section class="page-section category-grid-section">
    <div class="container">
        <div style="margin-bottom: 71px" class="section-title-wrapper text-center mx-auto">
            <h2 class="section-title">Categories</h2>
            <p class="section-title-lead">Browse Experts by Category</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="category-box">
                    <div class="category-image">
                        <a href="">
                            <img src="{{ asset('assets/frontend/img/categories/category-curriculum-development.png') }}"
                                 alt="">
                        </a>
                    </div>
                    <div class="category-info">
                        <h3><a href="#">Curriculum Development</a></h3>
                        <p>Assist in developing engaging, effective curricula tailored to your educational needs.</p>
                    </div>
                </div> <!--category-box-->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="category-box">
                    <div class="category-image">
                        <a href="">
                            <img src="{{ asset('assets/frontend/img/categories/category-course-accreditation.png') }}"
                                 alt="">
                        </a>
                    </div>
                    <div class="category-info">
                        <h3><a href="#">Course Accreditation</a></h3>
                        <p>Help clients meet industry standards and gain official recognition for their programs.</p>
                    </div>
                </div> <!--category-box-->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="category-box">
                    <div class="category-image">
                        <a href="">
                            <img
                                src="{{ asset('assets/frontend/img/categories/category-learning-management-system.png') }}"
                                alt="">
                        </a>
                    </div>
                    <div class="category-info">
                        <h3><a href="#">Learning Management System</a></h3>
                        <p>Implement efficient Learning Management systems to streamline your educational processes.</p>
                    </div>
                </div> <!--category-box-->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="category-box">
                    <div class="category-image">
                        <a href="">
                            <img src="{{ asset('assets/frontend/img/categories/category-policy-development.png') }}"
                                 alt="">
                        </a>
                    </div>
                    <div class="category-info">
                        <h3><a href="#">Policy Development</a></h3>
                        <p>Provide valuable insights and guidance on policy development, analysis, and
                            implementation.</p>
                    </div>
                </div> <!--category-box-->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="category-box">
                    <div class="category-image">
                        <a href="">
                            <img src="{{ asset('assets/frontend/img/categories/category-research-and-analysis.png') }}"
                                 alt="">
                        </a>
                    </div>
                    <div class="category-info">
                        <h3><a href="#">Research and Analysis</a></h3>
                        <p>Offer rigorous research methodologies and data analysis to help you make informed decisions
                            for business operations.</p>
                    </div>
                </div> <!--category-box-->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="category-box">
                    <div class="category-image">
                        <a href="">
                            <img src="{{ asset('assets/frontend/img/categories/category-financial-management.png') }}"
                                 alt="">
                        </a>
                    </div>
                    <div class="category-info">
                        <h3><a href="#">Financial Management</a></h3>
                        <p>Provide financial advice and strategies to optimise your organisation's financial health.</p>
                    </div>
                </div> <!--category-box-->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="category-box">
                    <div class="category-image">
                        <a href="">
                            <img src="{{ asset('assets/frontend/img/categories/category-project-management.png') }}"
                                 alt="">
                        </a>
                    </div>
                    <div class="category-info">
                        <h3><a href="#">Project Management</a></h3>
                        <p>Ensure your projects are executed efficiently, on time, and within budget.</p>
                    </div>
                </div> <!--category-box-->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="category-box">
                    <div class="category-image">
                        <a href="">
                            <img
                                src="{{ asset('assets/frontend/img/categories/category-grants-and-scholarships.png') }}"
                                alt="">
                        </a>
                    </div>
                    <div class="category-info">
                        <h3><a href="#">Grants and Scholarships</a></h3>
                        <p>Guide you through scholarship opportunities and application processes for educational
                            funding.</p>
                    </div>
                </div> <!--category-box-->
            </div>

        </div>
        <div class="row">
            <div class="col text-center">
                <x-button.link
                    href="{{ route('find.experts') }}"
                    class="btn btn-outline-primary btn-md border-2"
                    text="View All Experts"
                    style="width: 235px"
                />
            </div>
        </div>
    </div>
</section>

