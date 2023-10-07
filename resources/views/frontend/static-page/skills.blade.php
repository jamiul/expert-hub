<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('/assets/frontend/default/css/custom.css')}}">
  <title>Document</title>
</head>

<body>
  @extends('frontend.layouts.app')

  @section('content')
  <section class="py-4 py-lg-5">
    <div class="container">
      <div>
        <h1 class="mt-5  " style="color:#5ABC76;">Find the best expert jobs</h1>
        <h6 class="my-4 header">Browse jobs posted on EduExHub, or jump right in and create a free profile to find the
          work that
          you love to do.
        </h6>
        <div class="d-flex align-items-center">
          <div> <button class="btn btn  px-4 fs-16" style="background-color:#275846; color:white;">Find work
            </button>
          </div>
          <div class="d-flex ml-5">
            <div><img src="{{asset('/assets/findJob/video.png')}}" alt="Image" class=" mr-3 rounded-2"
                style=" width:15px; height:15px; color:#4FA808; background-color:#58B38E;">
            </div>
            <div><span class="fs-16" style="color:#5ABC76;"> Watch a demo</span></div>

          </div>
        </div>
      </div>
      <!-- Find expert Jobs  -->
      <div class=" my-5 fs-16">Find Expert Jobs / </div>
      <div class="row mt-5">
        <div class="col-lg-3">
          <h3 class="text-left mb-4 ">
            Type of work

          </h3>
          <div class="aiz-radio-list">
            <label class="aiz-radio">
              <input type="radio" name="rating" value="">
              <span class="fs-16 active " style="color:#5E6D55;"> Any type of work</span>
              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-16"></span>
            </label>
            <label class="aiz-radio">
              <input type="radio" name="rating" value="4+">
              <span class="fs-16 " style="color:#5E6D55;"> Academic mentoring</span>

              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-12"></span>
            </label>
            <label class="aiz-radio">
              <input type="radio" name="rating" value="3-4">
              <span class=" fs-16 " style=" color:#5E6D55;">Course curriculum Development</span>

              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-12"></span>
            </label>
            <label class="aiz-radio">
              <input type="radio" name="rating" value="2-3">

              <span class=" fs-16 " style=" color:#5E6D55;"> Course material development</span>

              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-12"></span>
            </label>
            <label class="aiz-radio">
              <input type="radio" name="rating" value="1-2">

              <span class=" fs-16 " style=" color:#5E6D55;"> Research and Analysis</span>

              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-12"></span>
            </label>
            <label class="aiz-radio">
              <input type="radio" name="rating" value="1-2">

              <span class=" fs-16 " style=" color:#5E6D55;"> Scholarship Applications</span>

              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-12"></span>
            </label>
            <label class="aiz-radio">
              <input type="radio" name="rating" value="0-1">
              <span class=" fs-16 " style=" color:#5E6D55;">Tutoring and Instruction</span>

              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-12"></span>
            </label>
            <label class="aiz-radio">
              <input type="radio" name="rating" value="0-1">
              <span class=" fs-16 " style=" color:#5E6D55;"> Transcription and Translation</span>

              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-12"></span>
            </label>

          </div>
        </div>

        <!-- Explore remote jobs -->

        <div class="col-lg-9">
          <h3 class="mb-4">Explore remote jobs</h3>
          <div class=" input-group position-relative">
            <input id="search-input" type="search" class="form-control " placeholder="Find your  skills">
            <button type="button" class="btn text-white " style="background-color:#275846;">
              Search
            </button>
          </div>


          <!-- <div class="container-fluid position-relative">
            <div class="row p-2 pt-3 pb-3 d-flex align-items-center">

              <div class="col-md-8">
                <div class="d-flex form-inputs">
                  <input class="form-control" type="text" placeholder="Search any product...">
                  <img src=" {{asset('/assets/findJob/00.png')}}" alt="Image"
                    class=" position-absolute bottom-0 start-0 d-flex align-items-center"
                    style="width:14px; justify:center; align-items:center;  " />
                </div>
              </div>
            </div>
          </div> -->

          <div class=" row mt-lg-5">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Academic mentoring</p>
              <p class="skills">
                Copywriting</p>


            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">
              <p class="skills">
                Curriculum development</p>
              <p class="skills">Data analysis and interpretation</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">
              <p class="skills">Content creation</p>

              <p class="skills">Research writing</p>

            </div>

          </div>

          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Statistical analysis</p>
              <p class="skills">Tutoring and Instruction</p>
              <p class="skills">Research proposal writing</p>
            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">
              <p class="skills">Proofreading and editing</p>

              <p class="skills">
                Transcribing audio or video recordings</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">
              <p class="skills">Transcribing audio or video recordings</p>
              <p class="skills">
                Book Cover Designer
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection
</body>

</html>
