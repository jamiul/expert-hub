@extends('frontend.layouts.front-client-dashboard-layout')
@section('content')
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
        <div class="border-full">
          <div class="col-md-12">
            <div class="d-flex justify-content-between justify-content-center visa-credit">
                <div class="credit-card-check d-flex justify-content-center flex-column">
                    <div class="chard-checkbox d-flex align-content-center">
                      <div class="form-check">
                        <input class="form-check-input paypal-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
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
                  <img src="{{ asset('assets/frontend/img/allcart.png') }}" alt="all-card">
                </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="payment-form-area">
            <div class="container">
                <form id="form" action="/">

                    <div class="row g-3  m-top">
                          <div class="col  my-0 input-control">
                            <input   type="text" class="form-control p-input" placeholder="First name" aria-label="First name">
                            <div class="error"></div>
                          </div>
                          <div class="col my-0 input-control">
                            <input type="text" class="form-control p-input" placeholder="Last name" aria-label="Last name">
                          </div>
                    </div>

                    <div class="row g-3 m-top">
                          <div class="col-6 my-0">
                            <input type="text" class="form-control p-input" placeholder="Card number" aria-label="First name">
                          </div>
                          <div class="col  my-0">
                            <input type="text" class="form-control p-input" placeholder="Expiration" aria-label="Last name">
                          </div>
                          <div class="col  my-0">
                            <input type="text" class="form-control p-input" placeholder="CVV" aria-label="Last name">
                          </div>
                    </div>
                    <div class="row g-3  m-top m-bottom">
                          <div class="col  my-0">
                            <input type="text" class="form-control p-input" placeholder="Postal code" aria-label="First name">
                          </div>
                          <div class="col  my-0">
                            <input type="text" class="form-control p-input" placeholder="Email" aria-label=Email">
                          </div>
                    </div>

                    <div class="without-draw-button">
                        <button type="submit" class="btn-with-draw-paypal d-flex justify-content-center align-items-center  gap-2" > Add My  Card</button>
                      </div>
                </form>
            </div>
          </div>
          </div>

  </div>

  <div class="col-md-12 withdraw-area ">
          <div class="d-flex justify-content-between align-content-center">
          <div class="credit-card-check d-flex justify-content-center flex-column">
                    <div class="chard-checkbox d-flex align-content-center">
                      <div class="form-check paypal-check-input">
                        <input class="form-check-input paypal-input-check" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
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
                  <button class="btn-with-draw-icon d-flex justify-content-center align-items-center"> <img src="{{ asset('assets/frontend/img/paypal.png') }}" alt="all-card"> </button>
                </div>
            </div>
          </div>

        </div>

      </div>
</div>





@endsection

