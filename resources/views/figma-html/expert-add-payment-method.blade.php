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
              <div class="payment-card d-flex flex-row flex-wrap align-items-center justify-content- gap-4">
                    <div class="chard-check">
                    <img src="{{ asset('assets/frontend/img/greencheck.png') }}" alt="green-check">
                  </div>
                  <div class="chard-icon">
                  <img src="{{ asset('assets/frontend/img/visacard.png') }}" alt="card">
                  </div>
                  <div class="chard-number d-flex flex-column">
                    <h6>Personal Account</h6>
                    <p>card ends: ****1234    exp.Date: 12/19</p>
                  </div>
                </div>

                <div class="card-option d-flex justify-content-md-end gap-4 align-items-center ">
                  <a href="#" class="card-edit"><span class="material-symbols-outlined">edit</span></a>
                  <a href="#" class="card-delete"><span class="material-symbols-outlined">delete</span></a>
                </div>
              </div>

          </div>

            <div class="col-md-12">
                <div class="withdraw-area d-flex justify-content-between align-content-center">
                    <div class="without-method">
                        <h5>Withdrawal Methods</h5>
                        <p>Add your preferred payment method</p>
                    </div>
                    <div class="without-draw-button">
                        <button class="btn-with-draw d-flex justify-content-center align-items-center gap-2" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><span><span class="material-symbols-outlined d-flex justify-content-center align-items-center">add</span></span> Add Payment Method</button>
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