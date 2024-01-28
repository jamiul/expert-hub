@extends('frontend.layouts.figma', ['header' => 'client'])

@section('content')
<section class="client-dashboard mx-auto my-5">
  <div class="container">
    <div class="row">
      <div class="notification-area-password d-flex justify-content-between">
        <div class="all-project edux-tax-information">
          <h2>Tax Information</h2>
          <p>Tax information is required in order to confirm if you are a Australia or non-Australia taxpayer and whether or not EduExHub is required to withhold taxes from your earnings. Add your tax information now to avoid delays in getting paid.</p>
        </div>

      </div>
    </div>


    <div class="row password-padding">
      <div class="total-area-password">

      <div class="password-area d-flex flex-row justify-content-between px-0">
          <div class="password-what d-flex flex-column">
              <h6 class="d-flex align-items-center">Tax Residence
                <span class="what-icon ac-completed">
                Completed
              </span>

            </h6>
              <p>Your tax residence information is part of the EduExHub W-9 or W-8 form process. This address will be displayed on invoices.</p>
          </div>

            <div class="check-box-option">
            <x-icon.edit fill="red"/>
          </div>
        </div>

        <div class="password-area-message d-flex flex-row justify-content-between px-0 password-noborder">
          <div class="password-what d-flex flex-column">
              <h6 class="d-flex align-items-center" >Message</h6>
          </div>
        </div>
        <div class="password-area d-flex flex-row justify-content-between px-0">
          <div class="password-what d-flex flex-column">
              <h6 class="d-flex align-items-center">Desktop <span class="what-icon"> <a><img src="{{ asset('assets/frontend/img/lastday/password-what.png') }}" alt=""></a> </span></h6>
              <p>Add an extra layer of security to block unauthorized access and protect your account.</p>
          </div>

            <div class="check-box-option">
              <ul>
                <li>
                  <div class="switch-button switch-button-sm">
                    <input type="checkbox" name="item1" id="item1" />
                    <span><label for="item1"></label></span>
                  </div>
                </li>
              </ul>
          </div>
        </div>


        <div class="password-area d-flex flex-row justify-content-between px-0">
          <div class="password-what d-flex flex-column">
              <h6 class="d-flex align-items-center">Mobile<span class="what-icon"> <a><img src="{{ asset('assets/frontend/img/lastday/password-what.png') }}" alt=""></a> </span></h6>
              <p>Receive a six digit code by text message to confirm it’s you.</p>
          </div>

            <div class="check-box-option">
              <ul>
                <li>
                  <div class="switch-button switch-button-sm">
                    <input type="checkbox" name="item2" id="item2" />
                    <span><label for="item2"></label></span>
                  </div>
                </li>
              </ul>
          </div>
        </div>

        <div class="password-area d-flex flex-row justify-content-between px-0 password-noborder">
          <div class="password-what d-flex flex-column">
              <h6>Email<span class="what-icon"> <a><img src="{{ asset('assets/frontend/img/lastday/password-what.png') }}" alt=""></a> </span></h6>
              <p>Receive a prompt from your mobile app to confirm it’s you.</p>
          </div>

            <div class="check-box-option">
              <ul>
                <li>
                  <div class="switch-button switch-button-sm">
                    <input type="checkbox" name="item3" id="item3" />
                    <span><label for="item3"></label></span>
                  </div>
                </li>
              </ul>
          </div>
        </div>

      </div>

    </div>

    <div class="row password-padding">
      <div class="email-setting-area total-area-password  d-flex flex-column">
        <div class="email-update-area">
          <h4>Email Updates</h4>
          <p>(sending to e******pl@gmail.com)</p>
        </div>
        <div class="email-contact-area">
            <h4>Contracts</h4>

            <div class="contact-checkbox d-flex flex-column">
            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input password-checkbox" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  A hire is made or a contract begins
                </label>
              </div>
            </div>


            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Time logging begins
                </label>
              </div>
            </div>


            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Contract terms are modified
                </label>
              </div>
            </div>


            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                A contract ends
                </label>
              </div>
            </div>


            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                A timelog is ready for review
                </label>
              </div>
            </div>


            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Feedback changes are made
                </label>
              </div>
            </div>


            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Daily snapshot of time recorded by your freelancers
                </label>
              </div>
            </div>


            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Weekly billing digest
                </label>
              </div>
            </div>


            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Other contract related messages
                </label>
              </div>
            </div>


            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Payment receipts and other financial related emails
                </label>
              </div>
            </div>
            </div>

        </div>

        <div class="email-membership-area email-update-area ">
            <h4>Membership</h4>
            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Subscription related
                </label>
              </div>
            </div>
        </div>

        <div class="email-membership-area email-update-area ">
            <h4>Miscellaneous</h4>
            <div class="contact-checkbox d-flex flex-column">
            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                EduExHub has a tip to help me start
                </label>
              </div>
            </div>
            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Notify me of EduExHub events happening in my local area
                </label>
              </div>
            </div>
            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Notify me of who viewed my job post
                </label>
              </div>
            </div>
            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                I have Connects expiring soon
                </label>
              </div>
            </div>
            </div>
        </div>

        <div class="email-project-area email-membership-area  email-update-area ">
            <h4>Project recommendations for our Experts</h4>
            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Send recommendations if I qualify as top EduExHub expert
                </label>
              </div>
            </div>
        </div>

        <div class="email-communication-area email-update-area">
            <h4>Communications from EduExHub</h4>
            <div class="single-checkbox">
              <div class="form-check-password">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Send me genuinely useful emails every now and then to help me get the most out of EduExHub
                </label>
              </div>
            </div>
        </div>

      </div>
    </div>


  </div>
  <!-- edit draft area end Here -->
  </div>
</section>

@endsection
