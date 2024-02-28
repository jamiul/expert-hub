@extends('frontend.layouts.figma', ['header' => 'client']) @section('content') <section class="my-60">
  <div class="container">
    <div class="title-page-wrapper">
      <div class="title-page-header pb-0">
        <h1 class="h5 mb-20">Favorites</h1>
      </div>
      <div x-data="{ activeTab: 'myFeed' }">
        <ul class="secondary-tab-nav" id="myTab" role="tablist">
          <li x-on:click="activeTab = 'myFeed'" class="tab-nav-item" :class="{'active': activeTab === 'myFeed' }"> Projects </li>
        </ul>
        <div class="project-tab">
          <div x-show="activeTab === 'myFeed'" class="tab-content">
            <!-- Content for My Feed tab -->

            <div class="empty-search-wrapper">
                <div class="d-flex flex-column align-items-center p-40">
                    <img style="width: 240px;" src="{{ asset('assets/frontend/img/love.png') }}" alt="client health">
                    <div style="width: 420px;">
                        <h3 class="text-center h6">No Favorite Added</h3>
                    </div>
                </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>
<div class="modal fade" id="expert-invite-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-body p-40">
        <div class="project-expert-card border-0 p-0 mb-20">
          <div class="project-expert-thumb">
            <img src="{{ asset('assets/frontend/img/consultant1.png') }}" />
          </div>
          <div class="project-expert-details">
            <div class="expert-card-header">
              <div class="expert-card-header-info">
                <h3 class="h6 project-expert-name mb-0">Professor Miles Esther</h3>
                <ul class="project-expert-meta mb-1">
                  <li>Public Health</li>
                  <li>Melbourne University</li>
                  <li>Australia</li>
                </ul>
                <div class="d-flex gap-3 align-items-center">
                  <div>
                    <strong class="fw-medium">$200 </strong>/ hr
                  </div>
                  <div class="star-ratings">
                    <x-icon.star-fill />
                    <x-icon.star-fill />
                    <x-icon.star-fill />
                    <x-icon.star-fill />
                    <x-icon.star-fill />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <x-form.textarea label="Message" wire:model="Message" placeholder="Message"> Hello! Id like to invite you to take a look at the job I've posted. Please submit a proposal if you're available and interested. Dr Mohammad R. </x-form.textarea>
        <x-form.choice-static wire:model="titles" label="Chose a Job">
          <option value="Mr">Looking an experienced website content writer</option>
          <option value="Mrs">PHP Livewire Developer Needed for Dynamic Web Application</option>
          <option value="Dr">Technical QA Engineer</option>
        </x-form.choice-static>
        <p class="modal-form-instruction">Want to talk to Professor Mile Esther about your project? <a href="">Schedule a consultation</a>
        </p>
        <div class="d-flex gap-2 justify-content-end modal-form-btn">
          <button class="btn modal-form-btn btn-md btn-outline-light">Cancel</button>
          <button class="btn modal-form-btn btn-md btn-primary">Send Invitation</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function toggleAccordion(header) {
    header.classList.toggle("accordion-item-active");
    var content = header.nextElementSibling;
    content.style.display = (content.style.display === 'block') ? 'none' : 'block';
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script> @endsection