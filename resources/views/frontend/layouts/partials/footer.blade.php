<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="footer-menu">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="footer-block">
                                    <h3>For Clients</h3>
                                    <ul>
                                        <li><a href="{{ route('find.projects') }}">View Projects</a></li>
                                        <li><a href="{{ route('find.experts') }}">Find Experts</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">All Categories</a></li>
                                        <li><a href="#">Packages</a></li>
                                        <li><a href="{{ route('find.experts') }}">Profile</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="footer-block">
                                    <h3>For Experts</h3>
                                    <ul>
                                        <li><a href="{{ route('find.experts') }}">Profile</a></li>
                                        <li><a href="#">All Services</a></li>
                                        <li><a href="#">Following Clients</a></li>
                                        <li><a href="#">Packages</a></li>
                                        <li><a href="#">Trust, Safety & Security</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="footer-block">
                                    <h3>Company</h3>
                                    <ul>
                                        <li><a href="{{ route('about-us') }}">About Us</a></li>
                                        <li><a href="#">Leadership</a></li>
                                        <li><a href="#">Investor Relations</a></li>
                                        <li><a href="#">Investor Relations</a></li>
                                        <li><a href="#">Trust, Safety & Security</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="footer-block">
                                    <h3>Resources</h3>
                                    <ul>
                                        <li><a href="#">Help & Support</a></li>
                                        <li><a href="#">Success Stories</a></li>
                                        <li><a href="#">ConsultantEdu Reviews</a></li>
                                        <li><a href="#">Resources</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Community</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-block play">
                        <h3>Download Apps</h3>
                        <div class="footer-play">
                            <a href="https://play.google.com/store/apps">
                                <img src="{{ asset('assets/frontend/img/footer-icon1.png') }}" />
                            </a>
                            <a href="https://www.apple.com/app-store/">
                                <img src="{{ asset('assets/frontend/img/footer-icon2.png') }}" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="footer-left">
                        <p>© {{ date('Y') }} Sydney IBS Pty Ltd v{{ env('VERSION') }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-icon">
                        <ul>
                            <li>
                                <a href="https://facebook.com/">
                                    <x-icon.logo-facebook fill="white" />
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/">
                                    <x-icon.logo-twitter fill="white" />
                                </a>
                            </li>
                            <li>
                                <a href="https://linkedin.com/">
                                    <x-icon.logo-linkedin fill="white" />
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/">
                                    <x-icon.logo-instagram fill="white" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
