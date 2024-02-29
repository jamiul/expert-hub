@extends('frontend.layouts.figma', ['header' => 'client'])
@section('content')
<section class="my-60">
  <div class="container">
    <div class="title-page-wrapper">
      <div class="title-page-header pb-0">
        <h1 class="h5 mb-20">Favorites</h1>
      </div>
      <div x-data="{ activeTab: 'myFeed' }">
        <ul class="secondary-tab-nav borer-top" id="myTab" role="tablist">
          <li x-on:click="activeTab = 'myFeed'" class="tab-nav-item" :class="{'active': activeTab === 'myFeed' }"> Experts </li>
          <li x-on:click="activeTab = 'bestMatch'" class="tab-nav-item" :class="{'active': activeTab === 'bestMatch' }"> Scholarships </li>
          <li x-on:click="activeTab = 'savedJobs'" class="tab-nav-item" :class="{'active': activeTab === 'savedJobs' }"> Academic Training </li>
        </ul>
        <div class="project-tab">
          <div x-show="activeTab === 'myFeed'" class="tab-content">
            <!-- Content for My Feed tab -->
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="expert-card border-bottom p-40">
                  <div class="expert-card-header mb-2">
                    <div class="expert-thumb">
                      <div class="expert-thumb-box">
                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}" />
                      </div>
                    </div>
                    <!--expert-thumb-->
                    <div class="expert-info">
                      <div class="expert-profile-flag mb-2">Best Match</div>
                      <h3 class="h6 expert-name mb-0">Professor Miles Esther</h3>
                      <ul class="expert-meta">
                        <li>Public Health</li>
                        <li>Melbourne University</li>
                        <li>Australia</li>
                      </ul>
                    </div>
                    <!--expert-info-->
                    <div class="expert-card-action">
                      <button data-bs-toggle="modal" data-bs-target="#unfavorite" data-bs-toggle="modal" data-bs-target="#unfavorite" data-bs-toggle="modal" data-bs-target="#unfavorite" x-data="{ isFavorited: false }" class="btn btn-md btn-icon btn-outline-light btn-favorite" :class="{ 'favorited': isFavorited }" @click="isFavorited = !isFavorited">
                        <span class="heart-line">
                          <x-icon.heart />
                        </span>
                        <span class="heart-filled">
                          <x-icon.heart-filled />
                        </span>
                      </button>
                      <button class="btn btn-md btn-outline-primary border-2"> Hire</button>
                      <button class="btn btn-md btn-primary"> Invite Project</button>

                      <!-- Button trigger modal -->




                    </div>

                  </div>
                  <div class="expert-card-body">
                    <div class="d-flex gap-3 align-items-center">
                      <div>
                        <strong class="fw-medium">$200 </strong>/ hr
                      </div>
                      <div class="expert-profile-status"> Available now </div>
                    </div>
                    <div class="expert-summary py-3">
                      <p class="mb-0 fw-medium">Dear I am writing to express my keen interest in the Curriculum Developer position at your company. I am the opportunity to contribute my expertise in... <a href=""> more</a>
                      </p>
                    </div>
                    <div class="tag-list expert-tag-list">
                      <a href="#" class="expert-tag offer-consultation-btn">
                        <x-icon.video fill="#0036E3" /> Offer Consultation
                      </a>
                      <a href="#" class="expert-tag">Communication Skills</a>
                      <a href="#" class="expert-tag">Industry Treds Awareness</a>
                      <a href="#" class="expert-tag"> Research</a>
                      <a href="#" class="expert-tag">System Research Development</a>
                      <a href="#" class="expert-tag">Communication </a>
                      <a href="#" class="expert-tag">+12 More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="expert-card border-bottom p-40">
                  <div class="expert-card-header mb-2">
                    <div class="expert-thumb">
                      <div class="expert-thumb-box">
                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}" />
                      </div>
                    </div>
                    <!--expert-thumb-->
                    <div class="expert-info">
                      <div class="expert-profile-flag mb-2">Best Match</div>
                      <h3 class="h6 expert-name mb-0">Professor Miles Esther</h3>
                      <ul class="expert-meta">
                        <li>Public Health</li>
                        <li>Melbourne University</li>
                        <li>Australia</li>
                      </ul>
                    </div>
                    <!--expert-info-->
                    <div class="expert-card-action">
                      <button data-bs-toggle="modal" data-bs-target="#unfavorite" data-bs-toggle="modal" data-bs-target="#unfavorite" x-data="{ isFavorited: false }" class="btn btn-md btn-icon btn-outline-light btn-favorite" :class="{ 'favorited': isFavorited }" @click="isFavorited = !isFavorited">
                        <span class="heart-line">
                          <x-icon.heart />
                        </span>
                        <span class="heart-filled">
                          <x-icon.heart-filled />
                        </span>
                      </button>
                      <button class="btn btn-md btn-outline-primary border-2"> Hire</button>
                      <button class="btn btn-md btn-primary"> Invite Project</button>
                    </div>
                  </div>
                  <div class="expert-card-body">
                    <div class="d-flex gap-3 align-items-center">
                      <div>
                        <strong class="fw-medium">$200 </strong>/ hr
                      </div>
                      <div class="expert-profile-status"> Available now </div>
                    </div>
                    <div class="expert-summary py-3">
                      <p class="mb-0 fw-medium">Dear I am writing to express my keen interest in the Curriculum Developer position at your company. I am the opportunity to contribute my expertise in... <a href=""> more</a>
                      </p>
                    </div>
                    <div class="tag-list expert-tag-list">
                      <a href="#" class="expert-tag offer-consultation-btn">
                        <x-icon.video fill="#0036E3" /> Offer Consultation
                      </a>
                      <a href="#" class="expert-tag">Communication Skills</a>
                      <a href="#" class="expert-tag">Industry Treds Awareness</a>
                      <a href="#" class="expert-tag"> Research</a>
                      <a href="#" class="expert-tag">System Research Development</a>
                      <a href="#" class="expert-tag">Communication </a>
                      <a href="#" class="expert-tag">+12 More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="expert-card border-bottom p-40">
                  <div class="expert-card-header mb-2">
                    <div class="expert-thumb">
                      <div class="expert-thumb-box">
                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}" />
                      </div>
                    </div>
                    <!--expert-thumb-->
                    <div class="expert-info">
                      <div class="expert-profile-flag mb-2">Best Match</div>
                      <h3 class="h6 expert-name mb-0">Professor Miles Esther</h3>
                      <ul class="expert-meta">
                        <li>Public Health</li>
                        <li>Melbourne University</li>
                        <li>Australia</li>
                      </ul>
                    </div>
                    <!--expert-info-->
                    <div class="expert-card-action">
                      <button data-bs-toggle="modal" data-bs-target="#unfavorite" x-data="{ isFavorited: false }" class="btn btn-md btn-icon btn-outline-light btn-favorite" :class="{ 'favorited': isFavorited }" @click="isFavorited = !isFavorited">
                        <span class="heart-line">
                          <x-icon.heart />
                        </span>
                        <span class="heart-filled">
                          <x-icon.heart-filled />
                        </span>
                      </button>
                      <button class="btn btn-md btn-outline-primary border-2"> Hire</button>
                      <button class="btn btn-md btn-primary"> Invite Project</button>
                    </div>
                  </div>
                  <div class="expert-card-body">
                    <div class="d-flex gap-3 align-items-center">
                      <div>
                        <strong class="fw-medium">$200 </strong>/ hr
                      </div>
                      <div class="expert-profile-status"> Available now </div>
                    </div>
                    <div class="expert-summary py-3">
                      <p class="mb-0 fw-medium">Dear I am writing to express my keen interest in the Curriculum Developer position at your company. I am the opportunity to contribute my expertise in... <a href=""> more</a>
                      </p>
                    </div>
                    <div class="tag-list expert-tag-list">
                      <a href="#" class="expert-tag offer-consultation-btn">
                        <x-icon.video fill="#0036E3" /> Offer Consultation
                      </a>
                      <a href="#" class="expert-tag">Communication Skills</a>
                      <a href="#" class="expert-tag">Industry Treds Awareness</a>
                      <a href="#" class="expert-tag"> Research</a>
                      <a href="#" class="expert-tag">System Research Development</a>
                      <a href="#" class="expert-tag">Communication </a>
                      <a href="#" class="expert-tag">+12 More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="expert-card p-40">
                  <div class="expert-card-header mb-2">
                    <div class="expert-thumb">
                      <div class="expert-thumb-box">
                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}" />
                      </div>
                    </div>
                    <!--expert-thumb-->
                    <div class="expert-info">
                      <div class="expert-profile-flag mb-2">Best Match</div>
                      <h3 class="h6 expert-name mb-0">Professor Miles Esther</h3>
                      <ul class="expert-meta">
                        <li>Public Health</li>
                        <li>Melbourne University</li>
                        <li>Australia</li>
                      </ul>
                    </div>
                    <!--expert-info-->
                    <div class="expert-card-action">
                      <button data-bs-toggle="modal" data-bs-target="#unfavorite" x-data="{ isFavorited: false }" class="btn btn-md btn-icon btn-outline-light btn-favorite" :class="{ 'favorited': isFavorited }" @click="isFavorited = !isFavorited">
                        <span class="heart-line">
                          <x-icon.heart />
                        </span>
                        <span class="heart-filled">
                          <x-icon.heart-filled />
                        </span>
                      </button>
                      <button class="btn btn-md btn-outline-primary border-2"> Hire</button>
                      <button class="btn btn-md btn-primary"> Invite Project</button>
                    </div>
                  </div>
                  <div class="expert-card-body">
                    <div class="d-flex gap-3 align-items-center">
                      <div>
                        <strong class="fw-medium">$200 </strong>/ hr
                      </div>
                      <div class="expert-profile-status"> Available now </div>
                    </div>
                    <div class="expert-summary py-3">
                      <p class="mb-0 fw-medium">Dear I am writing to express my keen interest in the Curriculum Developer position at your company. I am the opportunity to contribute my expertise in... <a href=""> more</a>
                      </p>
                    </div>
                    <div class="tag-list expert-tag-list">
                      <a href="#" class="expert-tag offer-consultation-btn">
                        <x-icon.video fill="#0036E3" /> Offer Consultation
                      </a>
                      <a href="#" class="expert-tag">Communication Skills</a>
                      <a href="#" class="expert-tag">Industry Treds Awareness</a>
                      <a href="#" class="expert-tag"> Research</a>
                      <a href="#" class="expert-tag">System Research Development</a>
                      <a href="#" class="expert-tag">Communication </a>
                      <a href="#" class="expert-tag">+12 More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <div class="view-all-training-btn-wrapper pb-40">
                <a href="#" class="btn btn-outline-primary border-2 btn-md">View all Project</a>
             </div>
          </div>
          <div x-show="activeTab === 'bestMatch'" class="tab-content">
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="training-card p-40 border-bottom gap-2">
                  <div class="training-card-trainer-wrapper justify-content-between">
                    <div class="user-small-card">
                      <div class="rounded-0">
                        <img src="{{ asset('assets/frontend/img/database1.png') }}" />
                      </div>
                      <div>
                        <h4 class="text-base mb-0">Business Grants and funding</h4>
                        <ul class="user-meta">
                          <li>Australian Capital Territory</li>
                          <li>Australia</li>
                        </ul>
                      </div>
                    </div>
                    <div class="training-card-action">
                      <button x-data="{ isFavorited: false }" class="btn btn-md btn-icon btn-outline-light btn-favorite" :class="{ 'favorited': isFavorited }" @click="isFavorited = !isFavorited">
                        <span class="heart-line">
                          <x-icon.heart fill="#0036E3" />
                        </span>
                        <span class="heart-filled">
                          <x-icon.heart-filled />
                        </span>
                      </button>
                      <button class="btn btn-md btn-icon btn-outline-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <x-icon.share fill="#0036E3" />
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=[URL]">
                              <x-icon.logo-linkedin /> Linkedin
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=[URL]">
                              <x-icon.facebook /> Facebook
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item">
                              <span class="me-2">
                                <x-icon.copy />
                              </span> Copy Link </a>
                          </li>
                        </ul>
                      </button>
                      <button class="btn btn-md btn-outline-primary border-2"> Find Experts</button>
                    </div>
                    <div class="training-card-summary">
                      <p class="mb-3">The ACT Government provides a wide range of grants and funding opportunities to financially support individuals, groups, and organisations that benefit Canberrans and the Canberra community.</p>
                      <div class="custom-table text-sm">
                        <div class="tr">
                          <div class="td">Grants page</div>
                          <div class="td fw-medium">
                            <a class="text-decoration-underline" href="#">Click</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="training-card p-40 border-bottom gap-2">
                  <div class="training-card-trainer-wrapper justify-content-between">
                    <div class="user-small-card">
                      <div class="rounded-0">
                        <img src="{{ asset('assets/frontend/img/database1.png') }}" />
                      </div>
                      <div>
                        <h4 class="text-base mb-0">Business Grants and funding</h4>
                        <ul class="user-meta">
                          <li>Australian Capital Territory</li>
                          <li>Australia</li>
                        </ul>
                      </div>
                    </div>
                    <div class="training-card-action">
                      <button x-data="{ isFavorited: false }" class="btn btn-md btn-icon btn-outline-light btn-favorite" :class="{ 'favorited': isFavorited }" @click="isFavorited = !isFavorited">
                        <span class="heart-line">
                          <x-icon.heart fill="#0036E3" />
                        </span>
                        <span class="heart-filled">
                          <x-icon.heart-filled />
                        </span>
                      </button>
                      <button class="btn btn-md btn-icon btn-outline-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <x-icon.share fill="#0036E3" />
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=[URL]">
                              <x-icon.logo-linkedin /> Linkedin
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=[URL]">
                              <x-icon.facebook /> Facebook
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item">
                              <span class="me-2">
                                <x-icon.copy />
                              </span> Copy Link </a>
                          </li>
                        </ul>
                      </button>
                      <button class="btn btn-md btn-outline-primary border-2"> Find Experts</button>
                    </div>
                    <div class="training-card-summary">
                      <p class="mb-3">The ACT Government provides a wide range of grants and funding opportunities to financially support individuals, groups, and organisations that benefit Canberrans and the Canberra community.</p>
                      <div class="custom-table text-sm">
                        <div class="tr">
                          <div class="td">Grants page</div>
                          <div class="td fw-medium">
                            <a class="text-decoration-underline" href="#">Click</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="training-card p-40 border-bottom gap-2">
                  <div class="training-card-trainer-wrapper justify-content-between">
                    <div class="user-small-card">
                      <div class="rounded-0">
                        <img src="{{ asset('assets/frontend/img/database1.png') }}" />
                      </div>
                      <div>
                        <h4 class="text-base mb-0">Business Grants and funding</h4>
                        <ul class="user-meta">
                          <li>Australian Capital Territory</li>
                          <li>Australia</li>
                        </ul>
                      </div>
                    </div>
                    <div class="training-card-action">
                      <button x-data="{ isFavorited: false }" class="btn btn-md btn-icon btn-outline-light btn-favorite" :class="{ 'favorited': isFavorited }" @click="isFavorited = !isFavorited">
                        <span class="heart-line">
                          <x-icon.heart fill="#0036E3" />
                        </span>
                        <span class="heart-filled">
                          <x-icon.heart-filled />
                        </span>
                      </button>
                      <button class="btn btn-md btn-icon btn-outline-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <x-icon.share fill="#0036E3" />
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=[URL]">
                              <x-icon.logo-linkedin /> Linkedin
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=[URL]">
                              <x-icon.facebook /> Facebook
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item">
                              <span class="me-2">
                                <x-icon.copy />
                              </span> Copy Link </a>
                          </li>
                        </ul>
                      </button>
                      <button class="btn btn-md btn-outline-primary border-2"> Find Experts</button>
                    </div>
                    <div class="training-card-summary">
                      <p class="mb-3">The ACT Government provides a wide range of grants and funding opportunities to financially support individuals, groups, and organisations that benefit Canberrans and the Canberra community.</p>
                      <div class="custom-table text-sm">
                        <div class="tr">
                          <div class="td">Grants page</div>
                          <div class="td fw-medium">
                            <a class="text-decoration-underline" href="#">Click</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="training-card p-40 border-bottom gap-2">
                  <div class="training-card-trainer-wrapper justify-content-between">
                    <div class="user-small-card">
                      <div class="rounded-0">
                        <img src="{{ asset('assets/frontend/img/database1.png') }}" />
                      </div>
                      <div>
                        <h4 class="text-base mb-0">Business Grants and funding</h4>
                        <ul class="user-meta">
                          <li>Australian Capital Territory</li>
                          <li>Australia</li>
                        </ul>
                      </div>
                    </div>
                    <div class="training-card-action">
                      <button x-data="{ isFavorited: false }" class="btn btn-md btn-icon btn-outline-light btn-favorite" :class="{ 'favorited': isFavorited }" @click="isFavorited = !isFavorited">
                        <span class="heart-line">
                          <x-icon.heart fill="#0036E3" />
                        </span>
                        <span class="heart-filled">
                          <x-icon.heart-filled />
                        </span>
                      </button>
                      <button class="btn btn-md btn-icon btn-outline-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <x-icon.share fill="#0036E3" />
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=[URL]">
                              <x-icon.logo-linkedin /> Linkedin
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=[URL]">
                              <x-icon.facebook /> Facebook
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item">
                              <span class="me-2">
                                <x-icon.copy />
                              </span> Copy Link </a>
                          </li>
                        </ul>
                      </button>
                      <button class="btn btn-md btn-outline-primary border-2"> Find Experts</button>
                    </div>
                    <div class="training-card-summary">
                      <p class="mb-3">The ACT Government provides a wide range of grants and funding opportunities to financially support individuals, groups, and organisations that benefit Canberrans and the Canberra community.</p>
                      <div class="custom-table text-sm">
                        <div class="tr">
                          <div class="td">Grants page</div>
                          <div class="td fw-medium">
                            <a class="text-decoration-underline" href="#">Click</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div x-show="activeTab === 'savedJobs'" class="tab-content">


          <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="training-card p-40 border-bottom">
                    <div class="training-card-title">
                        <h3 class="h6">
                            <a href="/figma/training/training-details-view">
                                Igniting the Spark: Designing PhD Curriculums for the Next Generation of Disruptors
                            </a>
                        </h3>
                    </div>
                    <div class="training-card-action">
                        <button x-data="{ isFavorited: false }"
                                class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                :class="{ 'favorited': isFavorited }"
                                @click="isFavorited = !isFavorited">
                                    <span class="heart-line">
                                        <x-icon.heart fill="#0036E3"/>
                                   </span>
                            <span class="heart-filled">
                                                <x-icon.heart-filled/>
                                    </span>
                        </button>
                        <button class="btn btn-md btn-icon btn-outline-light" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
                        <button class="btn btn-md btn-outline-primary border-2"> Registration</button>
                    </div>
                    <div class="training-card-trainer-wrapper">
                        <div class="user-small-card">
                            <div>
                                <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                            </div>
                            <div>
                                <h4 class="text-base mb-0">Professor Miles Esther</h4>
                                <ul class="user-meta">
                                    <li>Public Health</li>
                                    <li>Melbourne University</li>
                                    <li>Australia</li>
                                </ul>
                            </div>
                        </div>
                        <div class="user-small-card">
                            <div>
                                <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                            </div>
                            <div>
                                <h4 class="text-base mb-0">Professor Miles Esther</h4>
                                <ul class="user-meta">
                                    <li>Public Health</li>
                                    <li>Melbourne University</li>
                                    <li>Australia</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="training-card-description">
                        <p class="mb-0">Are you ready to revolutionize the way PhD programs are designed and delivered?
                            This intensive training session is for forward-thinking faculty, program directors, and
                            administrators who want to ignite the spark of innovation in their PhD curriculums and equip
                            their students to become the next generation of disruptors. This is not just about building
                            a curriculum, it's about building the next generation of changemakers. Join us in this
                            electrifying journey as... <a href="">More</a></p>
                    </div>
                    <div class="training-card-summary">
                        <div class="custom-table text-sm">
                            <div class="tr">
                                <div class="td">Seminar Dates</div>
                                <div class="td fw-medium">23 January 2024 - 28 April 2024</div>
                            </div>
                            <div class="tr">
                                <div class="td">Time & Location</div>
                                <div class="td fw-medium">10.15am AEST, Sydney, Australia</div>
                            </div>
                            <div class="tr">
                                <div class="td">Training Mode</div>
                                <div class="td fw-medium">
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <x-icon.video/>
                                        </div>
                                        <div> Face to Face</div>
                                    </div>

                                </div>
                            </div>
                            <div class="tr">
                                <div class="td">Language</div>
                                <div class="td fw-medium">English</div>
                            </div>
                            <div class="tr">
                                <div class="td">Training Category</div>
                                <div class="td fw-medium">Research and Analysis</div>
                            </div>
                            <div class="tr">
                                <div class="td">Training Fee</div>
                                <div class="td fw-medium">USD 995</div>
                            </div>

                            <div class="tr">
                                <div class="td">Partner Institute</div>
                                <div class="td fw-medium">
                                    <a class="text-decoration-underline" href="#">Western Sydney University</a> |
                                    <a class="text-decoration-underline" href="#">Oxford University</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="training-card p-40 border-bottom">
                    <div class="training-card-title">
                        <h3 class="h6">
                            <a href="/figma/training/training-details-view">
                                Igniting the Spark: Designing PhD Curriculums for the Next Generation of Disruptors
                            </a>
                        </h3>
                    </div>
                    <div class="training-card-action">
                        <button x-data="{ isFavorited: false }"
                                class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                :class="{ 'favorited': isFavorited }"
                                @click="isFavorited = !isFavorited">
                                    <span class="heart-line">
                                        <x-icon.heart fill="#0036E3"/>
                                   </span>
                            <span class="heart-filled">
                                                <x-icon.heart-filled/>
                                    </span>
                        </button>
                        <button class="btn btn-md btn-icon btn-outline-light" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
                        <button class="btn btn-md btn-outline-primary border-2"> Registration</button>
                    </div>
                    <div class="training-card-trainer-wrapper">
                        <div class="user-small-card">
                            <div>
                                <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                            </div>
                            <div>
                                <h4 class="text-base mb-0">Professor Miles Esther</h4>
                                <ul class="user-meta">
                                    <li>Public Health</li>
                                    <li>Melbourne University</li>
                                    <li>Australia</li>
                                </ul>
                            </div>
                        </div>
                        <div class="user-small-card">
                            <div>
                                <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                            </div>
                            <div>
                                <h4 class="text-base mb-0">Professor Miles Esther</h4>
                                <ul class="user-meta">
                                    <li>Public Health</li>
                                    <li>Melbourne University</li>
                                    <li>Australia</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="training-card-description">
                        <p class="mb-0">Are you ready to revolutionize the way PhD programs are designed and delivered?
                            This intensive training session is for forward-thinking faculty, program directors, and
                            administrators who want to ignite the spark of innovation in their PhD curriculums and equip
                            their students to become the next generation of disruptors. This is not just about building
                            a curriculum, it's about building the next generation of changemakers. Join us in this
                            electrifying journey as... <a href="">More</a></p>
                    </div>
                    <div class="training-card-summary">
                        <div class="custom-table text-sm">
                            <div class="tr">
                                <div class="td">Seminar Dates</div>
                                <div class="td fw-medium">23 January 2024 - 28 April 2024</div>
                            </div>
                            <div class="tr">
                                <div class="td">Time & Location</div>
                                <div class="td fw-medium">10.15am AEST, Sydney, Australia</div>
                            </div>
                            <div class="tr">
                                <div class="td">Training Mode</div>
                                <div class="td fw-medium">
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <x-icon.video/>
                                        </div>
                                        <div> Face to Face</div>
                                    </div>

                                </div>
                            </div>
                            <div class="tr">
                                <div class="td">Language</div>
                                <div class="td fw-medium">English</div>
                            </div>
                            <div class="tr">
                                <div class="td">Training Category</div>
                                <div class="td fw-medium">Research and Analysis</div>
                            </div>
                            <div class="tr">
                                <div class="td">Training Fee</div>
                                <div class="td fw-medium">USD 995</div>
                            </div>

                            <div class="tr">
                                <div class="td">Partner Institute</div>
                                <div class="td fw-medium">
                                    <a class="text-decoration-underline" href="#">Western Sydney University</a> |
                                    <a class="text-decoration-underline" href="#">Oxford University</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="training-card p-40 border-bottom">
                    <div class="training-card-title">
                        <h3 class="h6">
                            <a href="/figma/training/training-details-view">
                                Igniting the Spark: Designing PhD Curriculums for the Next Generation of Disruptors
                            </a>
                        </h3>
                    </div>
                    <div class="training-card-action">
                        <button x-data="{ isFavorited: false }"
                                class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                :class="{ 'favorited': isFavorited }"
                                @click="isFavorited = !isFavorited">
                                    <span class="heart-line">
                                        <x-icon.heart fill="#0036E3"/>
                                   </span>
                            <span class="heart-filled">
                                                <x-icon.heart-filled/>
                                    </span>
                        </button>
                        <button class="btn btn-md btn-icon btn-outline-light" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
                        <button class="btn btn-md btn-outline-primary border-2"> Registration</button>
                    </div>
                    <div class="training-card-trainer-wrapper">
                        <div class="user-small-card">
                            <div>
                                <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                            </div>
                            <div>
                                <h4 class="text-base mb-0">Professor Miles Esther</h4>
                                <ul class="user-meta">
                                    <li>Public Health</li>
                                    <li>Melbourne University</li>
                                    <li>Australia</li>
                                </ul>
                            </div>
                        </div>
                        <div class="user-small-card">
                            <div>
                                <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                            </div>
                            <div>
                                <h4 class="text-base mb-0">Professor Miles Esther</h4>
                                <ul class="user-meta">
                                    <li>Public Health</li>
                                    <li>Melbourne University</li>
                                    <li>Australia</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="training-card-description">
                        <p class="mb-0">Are you ready to revolutionize the way PhD programs are designed and delivered?
                            This intensive training session is for forward-thinking faculty, program directors, and
                            administrators who want to ignite the spark of innovation in their PhD curriculums and equip
                            their students to become the next generation of disruptors. This is not just about building
                            a curriculum, it's about building the next generation of changemakers. Join us in this
                            electrifying journey as... <a href="">More</a></p>
                    </div>
                    <div class="training-card-summary">
                        <div class="custom-table text-sm">
                            <div class="tr">
                                <div class="td">Seminar Dates</div>
                                <div class="td fw-medium">23 January 2024 - 28 April 2024</div>
                            </div>
                            <div class="tr">
                                <div class="td">Time & Location</div>
                                <div class="td fw-medium">10.15am AEST, Sydney, Australia</div>
                            </div>
                            <div class="tr">
                                <div class="td">Training Mode</div>
                                <div class="td fw-medium">
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <x-icon.video/>
                                        </div>
                                        <div> Face to Face</div>
                                    </div>

                                </div>
                            </div>
                            <div class="tr">
                                <div class="td">Language</div>
                                <div class="td fw-medium">English</div>
                            </div>
                            <div class="tr">
                                <div class="td">Training Category</div>
                                <div class="td fw-medium">Research and Analysis</div>
                            </div>
                            <div class="tr">
                                <div class="td">Training Fee</div>
                                <div class="td fw-medium">USD 995</div>
                            </div>

                            <div class="tr">
                                <div class="td">Partner Institute</div>
                                <div class="td fw-medium">
                                    <a class="text-decoration-underline" href="#">Western Sydney University</a> |
                                    <a class="text-decoration-underline" href="#">Oxford University</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="view-all-training-btn-wrapper pb-40">
                <a href="#" class="btn btn-outline-primary border-2 btn-md">View all Training</a>
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




<!-- Modal -->
<div class="modal fade" id="unfavorite" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Unfavorite</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p class="text-base fw-medium">Are you sure you want to unfavorite this expert?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-md btn-outline-primary border-2" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-md btn-primary">Unfavorite</button>
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