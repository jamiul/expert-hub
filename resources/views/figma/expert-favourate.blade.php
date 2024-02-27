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
            <div class="project-list-card-item">
                    <div class="project-list-card-item-header">
                        <div class="project-item-title">
                            <h3 class="h6 d-flex gap-2 mb-0">
                            <x-icon.briefcase fill="#0036E3"/>
                                <a href="#">
                                Developing curriculum for Postgraduate public health unit
                                </a>
                            </h3>
                        </div>
                        <div class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
                            <div class="project-item-meta">
                                <div class="">
                                <x-icon.tag fill="#9196A2"/>
                                Curriculum development
                                </div>
                                <div class="">
                                <x-icon.clock fill="#9196A2"/>
                                    3 days ago
                                </div>
                                <div class="">
                                <x-icon.globe fill="#9196A2"/>
                                    Australia
                                </div>
                            </div>
                            <div class="project-item-action d-flex align-items-center gap-2">
                                <div class="project-item-price">
                                    Fixed: <strong>$5000.00</strong>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-outline-light m-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <x-icon.share fill="#0036E3"/>      
                                        <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" target="_blank"
                                       href="https://www.linkedin.com/sharing/share-offsite/?url=[URL]">
                                        <x-icon.logo-linkedin/>
                                        Linkedin
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" target="_blank"
                                       href="https://www.facebook.com/sharer/sharer.php?u=[URL]">
                                        <x-icon.facebook/>
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <span class="me-2">
                                            <x-icon.copy/>
                                       </span>
                                        Copy Link
                                    </a>
                                </li>
                            </ul>                      
                                      </button>
                                   
                                </div>
                                  <button wire:click="favourite(10)" class="btn btn-outline-light btn-favorite m-1 ">
                                 <span class="heart-line">
                                  <x-icon.heart fill="#0036E3"/>
                                  </span>
                                  <span class="heart-filled">
                                  <x-icon.heart-filled fill="#0036E3"/>
                                  </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-list-card-item-body">
                        <p class="mb-0 text-summary text-base">
                            Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities. This initiative aims to create a scholarship model that addresses the unique challenges faced by rural students. As the consultant, you will collaborate with our team to design a tailored scholarship program that includes financial support, mentorship, and resources for academic and personal development. Your responsibilities will encompass conducting research on rural education barriers, defining eligibility criteria, and developing a sustainable and impactful scholarship framework. The ideal candidate should have expertise in scholarship program development, a deep understanding of rural education challenges, and a commitment to expanding educational opportunities for underserved communities. Join us in making a difference in the lives of rural students.
                        </p>
                    </div>

                    <div class="tag-list light-tag-list showing-less-tag">
                        <span class="tag">Communication Skills</span>
                        <span class="tag">Industry Trends Awareness</span>
                        <span class="tag">Educational Research</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">+12 More</span>
                    </div>
                </div>

                <div class="project-list-card-item">
                    <div class="project-list-card-item-header">
                        <div class="project-item-title">
                            <h3 class="h6 d-flex gap-2 mb-0">
                            <x-icon.briefcase fill="#0036E3"/>
                                <a href="#">
                                Developing curriculum for Postgraduate public health unit
                                </a>
                            </h3>
                        </div>
                        <div class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
                            <div class="project-item-meta">
                                <div class="">
                                <x-icon.tag fill="#9196A2"/>
                                Curriculum development
                                </div>
                                <div class="">
                                <x-icon.clock fill="#9196A2"/>
                                    3 days ago
                                </div>
                                <div class="">
                                <x-icon.globe fill="#9196A2"/>
                                    Australia
                                </div>
                            </div>
                            <div class="project-item-action d-flex align-items-center gap-2">
                                <div class="project-item-price">
                                    Fixed: <strong>$5000.00</strong>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-outline-light m-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <x-icon.share fill="#0036E3"/>    
                                        <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" target="_blank"
                                       href="https://www.linkedin.com/sharing/share-offsite/?url=[URL]">
                                        <x-icon.logo-linkedin/>
                                        Linkedin
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" target="_blank"
                                       href="https://www.facebook.com/sharer/sharer.php?u=[URL]">
                                        <x-icon.facebook/>
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <span class="me-2">
                                            <x-icon.copy/>
                                       </span>
                                        Copy Link
                                    </a>
                                </li>
                            </ul>                        
                                      </button>
                                   
                                </div>
                                  <button wire:click="favourite(10)" class="btn btn-outline-light btn-favorite m-1 ">
                                 <span class="heart-line">
                                  <x-icon.heart fill="#0036E3"/>
                                  </span>
                                  <span class="heart-filled">
                                  <x-icon.heart-filled fill="#0036E3"/>
                                  </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-list-card-item-body">
                        <p class="mb-0 text-summary text-base">
                            Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities. This initiative aims to create a scholarship model that addresses the unique challenges faced by rural students. As the consultant, you will collaborate with our team to design a tailored scholarship program that includes financial support, mentorship, and resources for academic and personal development. Your responsibilities will encompass conducting research on rural education barriers, defining eligibility criteria, and developing a sustainable and impactful scholarship framework. The ideal candidate should have expertise in scholarship program development, a deep understanding of rural education challenges, and a commitment to expanding educational opportunities for underserved communities. Join us in making a difference in the lives of rural students.
                        </p>
                    </div>

                    <div class="tag-list light-tag-list showing-less-tag">
                        <span class="tag">Communication Skills</span>
                        <span class="tag">Industry Trends Awareness</span>
                        <span class="tag">Educational Research</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">+12 More</span>
                    </div>
                </div>

                <div class="project-list-card-item">
                    <div class="project-list-card-item-header">
                        <div class="project-item-title">
                            <h3 class="h6 d-flex gap-2 mb-0">
                            <x-icon.briefcase fill="#0036E3"/>
                                <a href="#">
                                Developing curriculum for Postgraduate public health unit
                                </a>
                            </h3>
                        </div>
                        <div class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
                            <div class="project-item-meta">
                                <div class="">
                                <x-icon.tag fill="#9196A2"/>
                                Curriculum development
                                </div>
                                <div class="">
                                <x-icon.clock fill="#9196A2"/>
                                    3 days ago
                                </div>
                                <div class="">
                                <x-icon.globe fill="#9196A2"/>
                                    Australia
                                </div>
                            </div>
                            <div class="project-item-action d-flex align-items-center gap-2">
                                <div class="project-item-price">
                                    Fixed: <strong>$5000.00</strong>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-outline-light m-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <x-icon.share fill="#0036E3"/>   
                                        <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" target="_blank"
                                       href="https://www.linkedin.com/sharing/share-offsite/?url=[URL]">
                                        <x-icon.logo-linkedin/>
                                        Linkedin
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" target="_blank"
                                       href="https://www.facebook.com/sharer/sharer.php?u=[URL]">
                                        <x-icon.facebook/>
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <span class="me-2">
                                            <x-icon.copy/>
                                       </span>
                                        Copy Link
                                    </a>
                                </li>
                            </ul>                         
                                      </button>
                                   
                                </div>
                                  <button wire:click="favourite(10)" class="btn btn-outline-light btn-favorite m-1 ">
                                 <span class="heart-line">
                                  <x-icon.heart fill="#0036E3"/>
                                  </span>
                                  <span class="heart-filled">
                                  <x-icon.heart-filled fill="#0036E3"/>
                                  </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-list-card-item-body">
                        <p class="mb-0 text-summary text-base">
                            Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities. This initiative aims to create a scholarship model that addresses the unique challenges faced by rural students. As the consultant, you will collaborate with our team to design a tailored scholarship program that includes financial support, mentorship, and resources for academic and personal development. Your responsibilities will encompass conducting research on rural education barriers, defining eligibility criteria, and developing a sustainable and impactful scholarship framework. The ideal candidate should have expertise in scholarship program development, a deep understanding of rural education challenges, and a commitment to expanding educational opportunities for underserved communities. Join us in making a difference in the lives of rural students.
                        </p>
                    </div>

                    <div class="tag-list light-tag-list showing-less-tag">
                        <span class="tag">Communication Skills</span>
                        <span class="tag">Industry Trends Awareness</span>
                        <span class="tag">Educational Research</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">+12 More</span>
                    </div>
                </div>

                <div class="project-list-card-item">
                    <div class="project-list-card-item-header">
                        <div class="project-item-title">
                            <h3 class="h6 d-flex gap-2 mb-0">
                            <x-icon.briefcase fill="#0036E3"/>
                                <a href="#">
                                Developing curriculum for Postgraduate public health unit
                                </a>
                            </h3>
                        </div>
                        <div class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
                            <div class="project-item-meta">
                                <div class="">
                                <x-icon.tag fill="#9196A2"/>
                                Curriculum development
                                </div>
                                <div class="">
                                <x-icon.clock fill="#9196A2"/>
                                    3 days ago
                                </div>
                                <div class="">
                                <x-icon.globe fill="#9196A2"/>
                                    Australia
                                </div>
                            </div>
                            <div class="project-item-action d-flex align-items-center gap-2">
                                <div class="project-item-price">
                                    Fixed: <strong>$5000.00</strong>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-outline-light m-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <x-icon.share fill="#0036E3"/>  
                                        <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" target="_blank"
                                       href="https://www.linkedin.com/sharing/share-offsite/?url=[URL]">
                                        <x-icon.logo-linkedin/>
                                        Linkedin
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" target="_blank"
                                       href="https://www.facebook.com/sharer/sharer.php?u=[URL]">
                                        <x-icon.facebook/>
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <span class="me-2">
                                            <x-icon.copy/>
                                       </span>
                                        Copy Link
                                    </a>
                                </li>
                            </ul>                          
                                      </button>
                                   
                                </div>
                                  <button wire:click="favourite(10)" class="btn btn-outline-light btn-favorite m-1 ">
                                 <span class="heart-line">
                                  <x-icon.heart fill="#0036E3"/>
                                  </span>
                                  <span class="heart-filled">
                                  <x-icon.heart-filled fill="#0036E3"/>
                                  </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-list-card-item-body">
                        <p class="mb-0 text-summary text-base">
                            Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities. This initiative aims to create a scholarship model that addresses the unique challenges faced by rural students. As the consultant, you will collaborate with our team to design a tailored scholarship program that includes financial support, mentorship, and resources for academic and personal development. Your responsibilities will encompass conducting research on rural education barriers, defining eligibility criteria, and developing a sustainable and impactful scholarship framework. The ideal candidate should have expertise in scholarship program development, a deep understanding of rural education challenges, and a commitment to expanding educational opportunities for underserved communities. Join us in making a difference in the lives of rural students.
                        </p>
                    </div>

                    <div class="tag-list light-tag-list showing-less-tag">
                        <span class="tag">Communication Skills</span>
                        <span class="tag">Industry Trends Awareness</span>
                        <span class="tag">Educational Research</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">+12 More</span>
                    </div>
                </div>

                <div class="project-list-card-item">
                    <div class="project-list-card-item-header">
                        <div class="project-item-title">
                            <h3 class="h6 d-flex gap-2 mb-0">
                            <x-icon.briefcase fill="#0036E3"/>
                                <a href="#">
                                Developing curriculum for Postgraduate public health unit
                                </a>
                            </h3>
                        </div>
                        <div class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
                            <div class="project-item-meta">
                                <div class="">
                                <x-icon.tag fill="#9196A2"/>
                                Curriculum development
                                </div>
                                <div class="">
                                <x-icon.clock fill="#9196A2"/>
                                    3 days ago
                                </div>
                                <div class="">
                                <x-icon.globe fill="#9196A2"/>
                                    Australia
                                </div>
                            </div>
                            <div class="project-item-action d-flex align-items-center gap-2">
                                <div class="project-item-price">
                                    Fixed: <strong>$5000.00</strong>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-outline-light m-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <x-icon.share fill="#0036E3"/>    
                                        <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" target="_blank"
                                       href="https://www.linkedin.com/sharing/share-offsite/?url=[URL]">
                                        <x-icon.logo-linkedin/>
                                        Linkedin
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" target="_blank"
                                       href="https://www.facebook.com/sharer/sharer.php?u=[URL]">
                                        <x-icon.facebook/>
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <span class="me-2">
                                            <x-icon.copy/>
                                       </span>
                                        Copy Link
                                    </a>
                                </li>
                            </ul>                        
                                      </button>
                                   
                                </div>
                                  <button wire:click="favourite(10)" class="btn btn-outline-light btn-favorite m-1 ">
                                 <span class="heart-line">
                                  <x-icon.heart fill="#0036E3"/>
                                  </span>
                                  <span class="heart-filled">
                                  <x-icon.heart-filled fill="#0036E3"/>
                                  </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-list-card-item-body">
                        <p class="mb-0 text-summary text-base">
                            Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities. This initiative aims to create a scholarship model that addresses the unique challenges faced by rural students. As the consultant, you will collaborate with our team to design a tailored scholarship program that includes financial support, mentorship, and resources for academic and personal development. Your responsibilities will encompass conducting research on rural education barriers, defining eligibility criteria, and developing a sustainable and impactful scholarship framework. The ideal candidate should have expertise in scholarship program development, a deep understanding of rural education challenges, and a commitment to expanding educational opportunities for underserved communities. Join us in making a difference in the lives of rural students.
                        </p>
                    </div>

                    <div class="tag-list light-tag-list showing-less-tag">
                        <span class="tag">Communication Skills</span>
                        <span class="tag">Industry Trends Awareness</span>
                        <span class="tag">Educational Research</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">System Research Development</span>
                        <span class="tag">+12 More</span>
                    </div>
                </div>

             <div class="view-all-training-btn-wrapper pb-40">
                <a href="#" class="btn btn-outline-primary border-2 btn-md">View all Project</a>
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