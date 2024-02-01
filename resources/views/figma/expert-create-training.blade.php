@extends('frontend.layouts.figma', ['header' => 'client'])
@section('content')
@vite('resources/default/css/expert-profile.css')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

<div class="find-consultant-details">
      <div class="container profile__page">
        <div class="row g-0">
          <div class="edux-training-form">


          <h5>Create Training</h5>
          <ul class="progress-bar-nav-horizontal">
                        <li class="done-item"><strong> Course Info </strong></li>
                        <li class="running-item"><strong> Course Schedule</strong></li>
                        <li><strong> Course Details </strong></li>
                        <li><strong> Summery </strong></li>
                    </ul>
          <div class="progress-step-content mt-20">

          <x-form.input type="text" label="Training title?" wire:model="type" placeholder="Type" value="Foundations of PLS-SEM Using SmartPLS 4"/>
          <x-form.input type="text" label="Training Fee" wire:model="type" placeholder="Type" value="$800"/>

          <div class="row mt-5">
              <div class="col-md-2 col-sm-6">
                  <div class="team-block"> <a href="#">
                          </a><div class="team-img position-relative"><a href="#">
                          <img src="{{ asset('assets/frontend/img/jon-kelly.png') }}" alt="person">
                          </a><a class="blog-close position-absolute"> <img class="" src="http://127.0.0.1:8000/assets/frontend/img/blog-admin/blog-close.png" alt="close"> </a> </div>
                          <div class="hire-text">
                              <h4>Marvin McKinney</h4>
                              <p>Policy Expert</p>
                          </div>
                        </div>
              </div>
              <div class="col-md-2 col-sm-6">
                  <div class="team-block">
                      <div class="academic-single-item d-flex flex-column">
                          <div class="admin-add-more"> <a href="#"> <span class="material-symbols-outlined" data-bs-toggle="modal" data-bs-target="#buildondemand">add</span> </a> </div>
                      </div>
                  </div>
              </div>
              </div>

              <x-form.choice wire:model="titles" label="Training Category" multiple>
                  <option value="Mr">Mr</option>
                  <option value="Mrs">Mrs</option>
                  <option value="Dr">Dr</option>
                  <option value="Prof">Prof</option>
              </x-form.choice>

              <x-form.choice wire:model="titles" label="Partner Institutes" multiple>
                  <option value="Mr">Mr</option>
                  <option value="Mrs">Mrs</option>
                  <option value="Dr">Dr</option>
                  <option value="Prof">Prof</option>
              </x-form.choice>

              <x-form.choice wire:model="titles" label="Location" multiple>
                  <option value="Mr">Mr</option>
                  <option value="Mrs">Mrs</option>
                  <option value="Dr">Dr</option>
                  <option value="Prof">Prof</option>
              </x-form.choice>




            </div>
          </div>
        </div>
      </div>
    </div>
<!-- ===================== Work Experience Modal start Here ====================== -->




        <!-- ===================== Work Experience Modal start Here ====================== -->






@endsection



