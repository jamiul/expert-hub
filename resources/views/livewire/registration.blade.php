<div>
    <div class="register {{ $currentStep != 1 ? 'd-none' : '' }}">
        <div class="container">
            <div class="register-form">
                <h3>Join as an Expert or Client</h3>
                {{-- <label class="register-ac">
                    <div class="register-img">
                        <div class="register-icon">
                            <img src="{{ asset('assets/frontend/img/register1.png') }}">
                        </div>
                        <h4>I’m a Consultant</h4>
                    </div>
                    <div class="register-radio">
                        <input type="radio" wire:model="type" value="Consultant">
                    </div>
                </label> --}}
                <label class="register-ac">
                    <div class="register-img">
                        <div class="register-icon">
                            <img src="{{ asset('assets/frontend/img/register1.png') }}">
                        </div>
                        <h4>I’m an Expert</h4>
                    </div>
                    <div class="register-radio">
                        <input type="radio" wire:model="type" value="Expert">
                    </div>
                </label>
                <label class="register-ac">
                    <div class="register-img">
                        <div class="register-icon">
                            <img src="{{ asset('assets/frontend/img/register2.png') }}">
                        </div>
                        <h4>I’m a Client</h4>
                    </div>
                    <div class="register-radio">
                        <input type="radio" wire:model="type" value="Client">
                    </div>
                </label>
                <div class="creat-button">
                    <button wire:click="typeSelected" type="button">Create Account</button>
                </div>
                <div class="singup">
                    <p>Already have an account, <a href="#">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="register sign-up {{ $currentStep != 2 ? 'd-none' : '' }}">
        <div class="container">
            <div class="register-form">
                <h3>Sign Up</h3>
                <div class="link-open">
                    <ul>
                        <li><a href="#"><img src="{{ asset('assets/frontend/img/google.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/frontend/img/apple.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/frontend/img/linkedin.png') }}"></a></li>
                    </ul>
                </div>
                <div class="or-border">
                    <span>OR</span>
                </div>
                <form wire:submit="save">
                    <div class="register-sign-up">
                        <div class="sign-up1">
                            <div class="form-group">
                                <label>Title</label>
                                <div class="custom-selectx">
                                    <select class="@error('title') err @enderror" style="background:transparent" wire:model="title">
                                        <option value="">Your title</option>
                                        @foreach ($titles as $title)
                                            <option value="{{ $title }}">{{ $title }}</option>
                                        @endforeach
                                    </select>
                                    @error('title')
                                        <div class="err-msg">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input class="@error('first_name') err @enderror" type="text" placeholder="Your first name" wire:model="first_name">
                                @error('first_name')
                                    <div class="err-msg">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="@error('last_name') err @enderror" type="text" placeholder="Your last name" wire:model="last_name">
                                @error('last_name')
                                    <div class="err-msg">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="sign-up2">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="@error('email') err @enderror" type="email" placeholder="name@example.com" wire:model="email">
                                @error('email')
                                    <div class="err-msg">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="@error('password') err @enderror" type="password" placeholder="Your password (8 or more characters)" wire:model="password">
                                @error('password')
                                    <div class="err-msg">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Country</label>
                                <div class="custom-selectx">
                                    <select class="@error('country_id') err @enderror" style="background:transparent" wire:model="country_id">
                                        <option value="">Select country</option>
                                        @foreach ($countries as $id => $country)
                                            <option value="{{ $id }}">{{ $country }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                        <div class="err-msg">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sendemail">
                        <div class="sendemaicheck">
                            <input type="checkbox" wire:model="newsletter">
                            <p>Send me emails with tips on how to find projects that fit my expertise.</p>
                        </div>
                        <div class="form-group">
                            <div class="sendemaicheck">
                                <input class="@error('terms') err @enderror" type="checkbox" wire:model="terms">
                                <p>Yes, I understand and agree to the <a href="#">EduEXHub Terms of Service</a> ,including the
                                    <a href="#">User Agreement</a> and <a href="#">Privacy Policy .</a></p>
                            </div>
                            @error('terms')
                                <div class="err-msg">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="creat-button">
                        <button type="submit">Join as an Expert</button>
                    </div>
                </form>
                <div class="singup">
                    <p>Already have an account, <a href="#">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
</div>