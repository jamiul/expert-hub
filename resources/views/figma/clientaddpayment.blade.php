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

          <div class="col-md-12">
            <div class="card-area d-flex justify-content-between align-content-center">
              <div class="payment-card d-flex flex-row flex-wrap align-items-center justify-content- gap-4">
                    <div class="chard-check">
                    <img src="{{ asset('assets/frontend/img/greencheck.png') }}" alt="green-check">
                  </div>
                  <div class="chard-icon">
                  <img src="{{ asset('assets/frontend/img/stripe-add.png') }}" alt="card">
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
                  <button class="btn-with-draw d-flex justify-content-center align-items-center  gap-2" >
                    <span class="payment-svg">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                      <path d="M11.75 13.25H6V11.75H11.75V6H13.25V11.75H19V13.25H13.25V19H11.75V13.25Z" fill="white"/>
                    </svg>
                  </span>
                  <span class="payment-text"><a class="nav-link " href="/figma/client-clientvisapaypal">Add Payment Method</a> </span></button>
                </div>
            </div>

          </div>
        </div>

      </div>
</div>

@endsection
