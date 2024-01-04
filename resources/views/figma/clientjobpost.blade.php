@extends('frontend.layouts.front-register-dashboard-layout')

@section('content')
<section class="expert-login-area mx-auto my-5">
<div class="client-job-post">
      <div class="container">
        <div class="client-job-block">
          <div class="client-job-hire">
            <div class="client-job-left">
              <h3>Hire the best academic experts</h3>
              <p>Boost your academic success with us! Share your project details, browse profiles, contact academic experts, and pay only when you are satisfied</p>
            </div>
            <div class="client-job-right">
              <img src="{{ asset('assets/frontend/img/client-hire.png') }}" alt=""></img>
            </div>
          </div>

          <x-form.input type="text" readonly label="What is your project title?" wire:model="type" placeholder="Academic content writer" value="Academic content writer"/>
          <x-form.textarea label="Project Description" wire:model="bio" placeholder="A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this " value="A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this "/>
          <div class="col admin-sub-title position-relative">
            <label for="subtitle" class="form-label  level-subtitle">Project Description</label>
          <textarea class="form-control admin-area position-relative" placeholder="Leave a comment here" id="floatingTextarea">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this </textarea>
          <span class="edux-word-count">0/1000</span>
        </div>
          <form class="client-form">
            <div class="form-new">
              <label>Project Description</label>
              <textarea type="text" placeholder="A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this "></textarea>
            </div>
          </form>
          <div class="customer-upload">
            <div class="upload-file-user">
              <div class="upload-file-user-img">
                <img src="images/uploadfile-icon.png"></img>
              </div>
              <div class="upload-file-user-text">
                <h4>Customer_file.png</h4>
                <p>456 KB    -   21 second left</p>
              </div>
            </div>
            <div class="dust-img">
              <img src="images/dust-icon.png"></img>
            </div>
          </div>
          <div class="client-contant">
            <h3>What academic skills is required for this project?</h3>
            <p>List up to 5 key skills that represent your project. Academic experts will use these skills to match with projects aligned to their interests and expertise.</p>
          </div>
          <div class="skillandhit">
            <ul>
              <li><a href="#">Architecture 1<img src="images/close-i.png"></img></a></li>
              <li><a href="#">Architecture 2<img src="images/close-i.png"></img></a></li>
              <li><a href="#">LMS 2<img src="images/close-i.png"></img></a></li>
            </ul>
            <p>Type the skills & hit enter</p>
          </div>
          <div class="client-contant2">
            <p>Suggestion skills:  <strong>Curriculum Editor, E-Learning Developer, Curriculum Writer, Curriculum Design, Research and Analysis, skill development</strong></p>
          </div>
          <div class="client-job-col">
            <h3>How do you want to pay?</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="client-job-hourly">
                  <div class="hourly-img">
                    <img src="images/hourly-icon.png"></img>
                  </div>
                  <div class="hourly-text">
                    <h4>Hourly rate</h4>
                    <p>Select freelancers based on their hourly rates and pay for the hours worked</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="client-job-hourly">
                  <div class="hourly-img">
                    <img src="images/hourly-icon1.png"></img>
                  </div>
                  <div class="hourly-text">
                    <h4>Fixed price</h4>
                    <p>Agree on a price upfront, then release payment upon project completion</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="client-budget">
            <h3>What is your estimate budget?</h3>
			<div class="custom-select-main">
			<div class="custom-select select1">
            <select class="select1">
              <option>AUD</option>
              <option>USD</option>
            </select>
			</div>
			<div class="custom-select select2">
            <select class="select2">
              <option>Standard ($15 - 25 AUD per hour), Standard ($15 - 25 USD per hour)</option>
              <option>Standard ($15 - 25 AUD per hour), Standard ($15 - 25 USD per hour)</option>
            </select>
			</div>
	      </div>
          </div>
          <div class="client-detail-main">
            <h3>Are these details correct?</h3>
            <div class="client-detail-carrect">
              <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this </p>
              <ul>
                <li><a href="#">Curriculum Editor<img src="images/close-i.png"></a></li>
                <li><a href="#">Assessment Specialist<img src="images/close-i.png"></a></li>
                <li><a href="#">E-learning Develpper<img src="images/close-i.png"></a></li>
              </ul>
              <div class="client-detail-carrects">
                <div class="detail-img">
                  <img src="images/hourly-icon1.png">
                </div>
                <div class="client-detail-text">
                  <h5>Price (Fixed)</h5>
                  <h4>$1500 - 3000 AUD</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="next-button">
            <a href="#">Yes Post my Project</a>
          </div>
        </div>
      </div>
    </div>

</section>
@endsection
