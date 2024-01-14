@extends('frontend.layouts.app') @section('content')
<section class=" profile-setup">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <div class="card card-shadow">
          <div class="card-body p-40">
            <button class="btn btn-link px-0 d-inline-flex align-items-center my-4" data-bs-toggle="modal" data-bs-target="#addConsultation">
              <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="#0036E3" />
              </svg>
              <span>Book Consultation</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Modal : Add Work Experience-->
<div class="modal fade" id="addConsultation" tabindex="-1" aria-labelledby="addConsultationLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg flat-modal">
    <div class="modal-content">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title pt-3 px-0" id="exampleModalLabel">Booking A Curriculum development</h5>
        <button type="button" class="btn-close pe-4" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-4">
        <div class="form-input-group form-input-has-icon ">
          <div class="icon-field-wrapper">
            <input name="skill" id="skill" class="form-input-field" wire:model="skill" placeholder="Total slot">
            <span class="form-input-icon edux-slot-count"> 3 </span>
          </div>
        </div>
        <div class="mb-40">
          <div class="available-schedule-slot mb-40">

            <x-form.flatpicker label="Date picker" inline="true" name="datepicker"/>

            <div class="slot-item-area">
              <h6>Wednesday, 15th Oct </h6>
              <div class="slot-item">
                <div class="single-slot">
                  <span>1:00 AM</span>
                </div>
                <div class="multi-slot">
                  <div class="single-slot slot-border">
                    <span>1:00 AM</span>
                  </div>
                  <div class="single-slot slot-fill">
                    <span>1:00 AM</span>
                  </div>
                </div>
                <div class="single-slot">
                  <span>3:00 AM</span>
                </div>
                <div class="single-slot">
                  <span>4:00 AM</span>
                </div>
                <div class="single-slot">
                  <span>4:00 AM</span>
                </div>
                <div class="single-slot">
                  <span>4:00 AM</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="edux-select-options position-relative">
          <x-form.textarea label="Note" wire:model="bio" placeholder="Bio"> Select options </x-form.textarea>
          <span class="edux-total-select-count">0/200</span>
        </div>
        <div class="modal-footer px-0 pb-0 pt-3">
          <button type="button" class="btn btn-secondary edux-btn-cancel" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary eudx-btn-save">Book a Consultation</button>
          <button type="button" class="btn  eudx-btn-back d-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M7.825 13L13.425 18.6L12 20L4 12L12 4L13.425 5.4L7.825 11H20V13H7.825Z" fill="#191D24" fill-opacity="0.7" />
            </svg> Back </button>
        </div>
      </div>
    </div>
  </div>
</div>
  <!--End Modal -->
  <!-- Date time Picker js -->
  @endsection