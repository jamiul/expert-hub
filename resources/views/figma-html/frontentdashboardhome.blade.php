@extends('frontend.layouts.front-admin-dashboard-layout')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-10">
        <section class="frontend-dashboard-area  mx-auto ">


        <div class="container-fluid">
          <div class="frontend-title-area">

              <div class="row">
                  <div class="col-md-6">
                    <div class="frontend-left-title">
                      <h4>Find experts page</h4>
                    </div>
                  </div>

                    <div class="col-md-6">
                      <div class="frontend-right-title">
                        <button class="save-as-draft">Save as Draft</button>
                        <button class="save-update">Save Update</button>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        


                    

     
<!-- Pagination start Here -->
<div class="row pagination-padding">
      <div class="pagination-area">
        <div class="pagination-left">
          <p>Showing 1 to 8 of 100 entries</p>
        </div>
        <div class="pagination-right">
          <div class="pagination-count">
            <div class="row g-3 align-items-center">
              <div class="col-auto">
                <label for="inputPassword6" class="col-form-label result-perpage">Results per page</label>
              </div>
              <div class="col-auto">
                <select class="form-select" aria-label="Default select example">
                  <option selected>5</option>
                  <option value="1">4</option>
                  <option value="2">3</option>
                  <option value="3">2</option>
                  <option value="3">1</option>
                </select>
              </div>
            </div>
          </div>
          <div class="pagination-next-prev">
            <ul class="pagination">
              <li class="page-item ">
                <a class="page-link">
                  <span class="material-symbols-outlined"> skip_previous </span>
                </a>
              </li>
              <li class="page-item ">
                <a class="page-link">
                  <span class="material-symbols-outlined"> arrow_left </span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item " aria-current="page">
                <a class="page-link">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <span class="material-symbols-outlined"> arrow_right </span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <span class="material-symbols-outlined"> skip_next </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Pagination end Here -->



          




    </section>
    </div>
  </div>
</div>







@endsection
