@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
@vite('resources/default/css/expert-profile.css')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

<div class="find-consultant-details">
      <div class="container profile__page">
        <div class="row g-0">
          <div class=" col-offset-1 col-md-8">
            <div class="create-trining-area">
              <h6>Create Training</h6>
              <x-form.input type="text" label="Training title?" wire:model="type" placeholder="Type" value="Foundations of PLS-SEM Using SmartPLS 4"/>
              <x-form.choice-static wire:model="titles" label="Location">
                <option value="Mr">Select options</option>
                <option value="Mrs">Select options</option>
                <option value="Dr">Select options</option>
                <option value="Prof">Select options</option>
            </x-form.choice-static>
            <x-form.flatpicker label="Seminar Date" inline="true" name="datepicker"/>

            <x-form.check wire:model="terms">
            Automatic Consideration
           </x-form.check>
               <x-form.input type="text" label="Training Fee" wire:model="type" placeholder="Type" value="$800"/>

               <x-form.choice-static wire:model="titles" label="Select multiple static" multiple>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Dr">Dr</option>
                <option value="Prof">Prof</option>
            </x-form.choice-static>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- ===================== Work Experience Modal start Here ====================== -->




        <!-- ===================== Work Experience Modal start Here ====================== -->






@endsection





@push('js')
<!-- Expert profile Portfolio slide -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $(".portfolioCaousel").owlCarousel({
        items: 3,
        autoplay:false,
        autoplayTimeout: 5500,
        autoplayHoverPause: true,
        smartSpeed: 550,
        loop: false,
        margin: 20,
        nav: true,
        dots: true,
        responsiveClass: true,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            992: { items: 3 },
            1200: { items: 3 }
        },
        navText: [
          '<i class="fa-solid fa-chevron-left"></i>',
          '<i class="fa-solid fa-chevron-right"></i>'
        ]
      });

    </script>
@endpush