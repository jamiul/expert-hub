<div class="register sign-up">
    <div class="container">
        <div class="register-form">
            <h3>Sign Up</h3>
            <div class="link-open">
                <ul>
                    <li><a href="#"><img src="{{ asset('assets/frontend/img/google.png') }}"></img></a></li>
                    <li><a href="#"><img src="{{ asset('assets/frontend/img/apple.png') }}"></img></a></li>
                    <li><a href="#"><img src="{{ asset('assets/frontend/img/linkedin.png') }}"></img></a></li>
                </ul>
            </div>
            <div class="or-border">
                <span>OR</span>
            </div>
            <div class="register-sign-up">
                <div class="sign-up1">
                    <div class="form-group">
                        <label>Title</label>
                        <div class="custom-select">
                            <select>
                                <option>Mr</option>
                                <option>Mrs</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" placeholder="Your first name" name="fname">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" placeholder="Your last name" name="fname">
                    </div>
                </div>
                <div class="sign-up2">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input class="err" type="text" placeholder="name@gmail.com" name="fname">
                        <div class="err-msg">This email address is not a valid email</div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" placeholder="Your password (8 or more characters)" id="pwd"
                            name="pwd">
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <div class="custom-select">
                            <select>
                                <option>Bangladesh</option>
                                <option>Australia</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sendemail">
                <div class="sendemaicheck">
                    <input type="checkbox" id="vehicle1" name="vehicle1">
                    <p>Send me emails with tips on how to find projects that fit my expertise.</p>
                </div>
                <div class="sendemaicheck">
                    <input type="checkbox" id="vehicle2" name="vehicle2">
                    <p>Yes, I understand and agree to the <a href="#">EduEXHub Terms of Service</a> ,including the
                        <a href="#">User Agreement</a> and <a href="#">Privacy Policy .</a></p>
                </div>
            </div>
            <div class="creat-button">
                <button href="{{url('verify-email')}}">Join as an Expert</button>
            </div>
            <div class="singup">
                <p>Already have an account, <a href="#">Sign In</a></p>
            </div>
        </div>
    </div>
</div>
