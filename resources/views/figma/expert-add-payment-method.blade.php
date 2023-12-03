@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/expert-dashboard.css') }}"> 
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- sub menu start -->
    <nav class="bg-primary sub__nav">
        <div class="container">
            <ul class="d-flex">
                <li class="me-3">
                    <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block active">Add Payment Method</a>
                </li>
                <li class="me-3">
                    <a href="/figma/expert-id-verify" class="text-white fw-medium px-2 py-3 d-inline-block">Tax information</a>
                </li>
                <li class="me-3">
                    <a href="/figma/expert-notification-settings" class="text-white fw-medium px-2 py-3 d-inline-block">Get Paid</a>
                </li> 
            </ul>
        </div><!--.//container-->
    </nav>
    <!-- sub menu end -->


    <div class="find-consultant databasepading  my-5">
      <div class="container">
        <div class="row area-padding">
          <div class="col-md-12">
            <div class="payment-title-area">
            <div class="payment-title">
                <h4>Add Payment Method</h4>
              </div>
              <div class="payment-txt d-flex justify-content-md-end">
                  <p>Available Balance: <span class="payment-currency">$500</span></p>
              </div>
            </div>
          </div>

          <div class="col-md-12">
                <div class="card-area d-flex justify-content-between align-content-center">
                    <div class="payment-card d-flex flex-row flex-wrap align-items-center">
                        <div class="chard-check me-3">
                        <img src="{{ asset('assets/frontend/img/greencheck.png') }}" alt="green-check">
                    </div>
                    <div class="chard-icon me-4">
                        <img src="{{ asset('assets/frontend/img/visacard.png') }}" alt="card">
                    </div>
                    <div class="chard-number d-flex flex-column">
                        <h6>Personal Account</h6>
                        <p class="mb-0">card ends: ****1234    exp.Date: 12/19</p>
                    </div>
                    </div>

                    <div class="card-option d-flex justify-content-md-end gap-3 align-items-center ">
                        <a href="#" class="card-edit d-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path d="M5.1562 19.4465H6.39272L15.6524 10.1869L14.4159 8.95034L5.1562 18.21V19.4465ZM18.86 9.10229L15.4851 5.75812L16.7889 4.45429C17.0825 4.16071 17.4395 4.01392 17.86 4.01392C18.2806 4.01392 18.6376 4.16071 18.9312 4.45429L20.1485 5.67157C20.4421 5.96515 20.594 6.31707 20.6042 6.72732C20.6145 7.13757 20.4728 7.48948 20.1792 7.78307L18.86 9.10229ZM17.7754 10.2023L7.03118 20.9465H3.65625V17.5716L14.4005 6.82732L17.7754 10.2023ZM15.0293 9.56382L14.4159 8.95034L15.6524 10.1869L15.0293 9.56382Z" fill="#191D24"/>
                            </svg>
                        </a>
                        <a href="#" class="card-delete d-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path d="M7.3077 20.9466C6.80898 20.9466 6.38302 20.77 6.02982 20.4167C5.67661 20.0635 5.5 19.6376 5.5 19.1389V6.44659H4.5V4.94661H8.99997V4.06201H15V4.94661H19.5V6.44659H18.5V19.1389C18.5 19.644 18.325 20.0716 17.975 20.4216C17.625 20.7716 17.1974 20.9466 16.6922 20.9466H7.3077ZM17 6.44659H6.99997V19.1389C6.99997 19.2286 7.02883 19.3023 7.08652 19.36C7.14423 19.4177 7.21795 19.4466 7.3077 19.4466H16.6922C16.7692 19.4466 16.8397 19.4145 16.9038 19.3504C16.9679 19.2863 17 19.2158 17 19.1389V6.44659ZM9.40385 17.4466H10.9038V8.44659H9.40385V17.4466ZM13.0961 17.4466H14.5961V8.44659H13.0961V17.4466Z" fill="#191D24"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="card-area d-flex justify-content-between align-content-center">
                    <div class="payment-card d-flex flex-row flex-wrap align-items-center">
                        <div class="chard-check me-3">
                        <img src="{{ asset('assets/frontend/img/greencheck.png') }}" alt="green-check">
                    </div>
                    <div class="chard-icon me-4">
                        <img src="{{ asset('assets/frontend/img/visacard.png') }}" alt="card">
                    </div>
                    <div class="chard-number d-flex flex-column">
                        <h6>Personal Account</h6>
                        <p class="mb-0">card ends: ****1234    exp.Date: 12/19</p>
                    </div>
                    </div>

                    <div class="card-option d-flex justify-content-md-end gap-3 align-items-center ">
                        <a href="#" class="card-edit d-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path d="M5.1562 19.4465H6.39272L15.6524 10.1869L14.4159 8.95034L5.1562 18.21V19.4465ZM18.86 9.10229L15.4851 5.75812L16.7889 4.45429C17.0825 4.16071 17.4395 4.01392 17.86 4.01392C18.2806 4.01392 18.6376 4.16071 18.9312 4.45429L20.1485 5.67157C20.4421 5.96515 20.594 6.31707 20.6042 6.72732C20.6145 7.13757 20.4728 7.48948 20.1792 7.78307L18.86 9.10229ZM17.7754 10.2023L7.03118 20.9465H3.65625V17.5716L14.4005 6.82732L17.7754 10.2023ZM15.0293 9.56382L14.4159 8.95034L15.6524 10.1869L15.0293 9.56382Z" fill="#191D24"/>
                            </svg>
                        </a>
                        <a href="#" class="card-delete d-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path d="M7.3077 20.9466C6.80898 20.9466 6.38302 20.77 6.02982 20.4167C5.67661 20.0635 5.5 19.6376 5.5 19.1389V6.44659H4.5V4.94661H8.99997V4.06201H15V4.94661H19.5V6.44659H18.5V19.1389C18.5 19.644 18.325 20.0716 17.975 20.4216C17.625 20.7716 17.1974 20.9466 16.6922 20.9466H7.3077ZM17 6.44659H6.99997V19.1389C6.99997 19.2286 7.02883 19.3023 7.08652 19.36C7.14423 19.4177 7.21795 19.4466 7.3077 19.4466H16.6922C16.7692 19.4466 16.8397 19.4145 16.9038 19.3504C16.9679 19.2863 17 19.2158 17 19.1389V6.44659ZM9.40385 17.4466H10.9038V8.44659H9.40385V17.4466ZM13.0961 17.4466H14.5961V8.44659H13.0961V17.4466Z" fill="#191D24"/>
                            </svg>
                        </a>
                    </div>
                </div>

          </div>

            <div class="col-md-12">
                <div class="withdraw-area d-flex justify-content-between align-content-center">
                    <div class="without-method">
                        <h5 class="lead fw-medium text-dark mb-1">Withdrawal Methods</h5>
                        <p class="mb-0 text-black">Add your preferred payment method</p>
                    </div>
                    <div class="without-draw-button">
                        <button class="btn-with-draw d-flex justify-content-center align-items-center gap-2 fw-medium" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><span><span class="material-symbols-outlined d-flex justify-content-center align-items-center">add</span></span> Add Payment Method</button>
                    </div>
                </div>
            </div>
            <div class="col-md-12 collapse" id="collapseExample">
            <div class="row area-padding">
            <div class="col-md-12">
                <div class="payment-title-area">
                    <div class="payment-title">
                        <h4>Add Payment Method</h4>
                    </div>
                    <div class="payment-txt d-flex justify-content-md-end">
                        <p>Available Balance: <span class="payment-currency">$500</span></p>
                    </div>
                </div>
            </div>
            <div class="border-full">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between justify-content-center visa-credit">
                        <div class="credit-card-check d-flex justify-content-center flex-column">
                            <div class="chard-checkbox d-flex align-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                                    <label class="form-check-label check-label" for="exampleRadios1">
                                        Credit / Debit Card
                                    </label>
                                </div>
                            </div>
                            <div class="chard-title">
                                <p>Secure transfer using your bank account</p>
                            </div>
                        </div>
                        <div class="credit-card-icon">
                            <img src="{{ asset('assets/frontend/img/allcart.png') }}" alt="all-card" />
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="payment-form-area">
                        <div class="container">
                            <form id="form" action="/">
                                <div class="row g-3 m-top">
                                    <div class="col my-0 input-control">
                                        <input type="text" class="form-control p-input" placeholder="First name" aria-label="First name" />
                                        <div class="error"></div>
                                    </div>
                                    <div class="col my-0 input-control">
                                        <input type="text" class="form-control p-input" placeholder="Last name" aria-label="Last name" />
                                    </div>
                                </div>

                                <div class="row g-3 m-top">
                                    <div class="col-6 my-0">
                                        <input type="text" class="form-control p-input" placeholder="Card number" aria-label="First name" />
                                    </div>
                                    <div class="col my-0">
                                        <input type="text" class="form-control p-input" placeholder="Expiration" aria-label="Last name" />
                                    </div>
                                    <div class="col my-0">
                                        <input type="text" class="form-control p-input" placeholder="CVV" aria-label="Last name" />
                                    </div>
                                </div>
                                <div class="row g-3 m-top m-bottom">
                                    <div class="col my-0">
                                        <input type="text" class="form-control p-input" placeholder="Postal code" aria-label="First name" />
                                    </div>
                                    <div class="col my-0">
                                        <input type="text" class="form-control p-input" placeholder="Email" aria-label=Email">
                                    </div>
                                </div>

                                <div class="without-draw-button">
                                    <button type="submit" class="btn-with-draw-paypal d-flex justify-content-center align-items-center gap-2">Add My Card</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 withdraw-area">
                <div class="d-flex justify-content-between align-content-center">
                    <div class="credit-card-check d-flex justify-content-center flex-column">
                        <div class="chard-checkbox d-flex align-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                                <label class="form-check-label check-label" for="exampleRadios1">
                                    Paypal
                                </label>
                            </div>
                        </div>
                        <div class="chard-title">
                            <p>Secure online payment through the PayPal Portal</p>
                        </div>
                    </div>

                    <div class="without-draw-button">
                        <button class="btn-with-draw-icon d-flex justify-content-center align-items-center"><img src="{{ asset('assets/frontend/img/paypal.png') }}" alt="all-card" /></button>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
      </div>
    </div>



@endsection

@push('js')
 
@endpush