@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/expert-dashboard.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">


<main class="expert__dashboad status__page py-5">
        <div class="container">
            <div class="main__content__wrapp">
                <div class="row g-0">
                    <div class="col-lg-4 col-xxl-3 aside__wrapp">
                        <div class="px-3 px-sm-4 pt-5 pb-4 bg-white border-bottom">
                            <figure class="thumbnail__box rounded-circle mx-auto position-relative mb-2">
                                <img 
                                    src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?cs=srgb&dl=pexels-pixabay-220453.jpg&fm=jpg" 
                                    width="95" height="95" alt="Profile Thumbnail"
                                    class="img-fluid rounded-circle object-cover"
                                >
                                <span class="status active position-absolute rounded-circle d-flex justify-content-center align-items-center"></span>
                            </figure>
                            <p class="text-center text-dark fw-medium mb-0">Professor Michael Kassiou</p>
                            <p class="text-center text-muted fw-normal mb-0 small lh-base">
                                Curriculum Expert
                                <span class="d-block text-primary">Public Health</span>
                            </p>
                            <div class="mt-3">
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.5019 11.8654C12.9995 11.8654 13.4249 11.6882 13.7781 11.3339C14.1313 10.9795 14.3079 10.5536 14.3079 10.056C14.3079 9.55839 14.1307 9.133 13.7764 8.7798C13.422 8.4266 12.9961 8.25 12.4985 8.25C12.0009 8.25 11.5755 8.42717 11.2223 8.7815C10.8691 9.13583 10.6925 9.56179 10.6925 10.0594C10.6925 10.557 10.8697 10.9824 11.224 11.3356C11.5784 11.6888 12.0043 11.8654 12.5019 11.8654ZM12.5002 19.5135C14.4566 17.7622 15.9537 16.0824 16.9915 14.474C18.0294 12.8657 18.5483 11.457 18.5483 10.2481C18.5483 8.42498 17.9691 6.92627 16.8108 5.7519C15.6524 4.57753 14.2156 3.99035 12.5002 3.99035C10.7848 3.99035 9.34796 4.57753 8.18962 5.7519C7.03129 6.92627 6.45212 8.42498 6.45212 10.2481C6.45212 11.457 6.97103 12.8657 8.00885 14.474C9.04668 16.0824 10.5438 17.7622 12.5002 19.5135ZM12.5002 21.5096C9.98355 19.3288 8.09637 17.2993 6.83867 15.4211C5.58099 13.5429 4.95215 11.8186 4.95215 10.2481C4.95215 7.94038 5.69862 6.07213 7.19157 4.64328C8.68451 3.21443 10.454 2.5 12.5002 2.5C14.5463 2.5 16.3159 3.21443 17.8088 4.64328C19.3018 6.07213 20.0482 7.94038 20.0482 10.2481C20.0482 11.8186 19.4194 13.5429 18.1617 15.4211C16.904 17.2993 15.0168 19.3288 12.5002 21.5096Z" fill="#0036E3"/>
                                    </svg>
                                    <span class="text-dark small fw-medium ff-public-sans ps-1">Sydney, Australia</span> 
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.4731 16.5269L16.5269 15.4731L12.75 11.6959V6.99998H11.25V12.3038L15.4731 16.5269ZM12.0016 21.5C10.6877 21.5 9.45268 21.2506 8.29655 20.752C7.1404 20.2533 6.13472 19.5765 5.2795 18.7217C4.42427 17.8669 3.74721 16.8616 3.24833 15.706C2.74944 14.5504 2.5 13.3156 2.5 12.0017C2.5 10.6877 2.74933 9.45268 3.248 8.29655C3.74667 7.1404 4.42342 6.13472 5.27825 5.2795C6.1331 4.42427 7.13834 3.74721 8.29398 3.24833C9.44959 2.74944 10.6844 2.5 11.9983 2.5C13.3122 2.5 14.5473 2.74933 15.7034 3.248C16.8596 3.74667 17.8652 4.42342 18.7205 5.27825C19.5757 6.1331 20.2527 7.13834 20.7516 8.29398C21.2505 9.44959 21.5 10.6844 21.5 11.9983C21.5 13.3122 21.2506 14.5473 20.752 15.7034C20.2533 16.8596 19.5765 17.8652 18.7217 18.7205C17.8669 19.5757 16.8616 20.2527 15.706 20.7516C14.5504 21.2505 13.3156 21.5 12.0016 21.5ZM12 20C14.2166 20 16.1041 19.2208 17.6625 17.6625C19.2208 16.1041 20 14.2166 20 12C20 9.78331 19.2208 7.89581 17.6625 6.33748C16.1041 4.77914 14.2166 3.99998 12 3.99998C9.78331 3.99998 7.89581 4.77914 6.33748 6.33748C4.77914 7.89581 3.99998 9.78331 3.99998 12C3.99998 14.2166 4.77914 16.1041 6.33748 17.6625C7.89581 19.2208 9.78331 20 12 20Z" fill="#0036E3"/>
                                    </svg>
                                    <span class="text-dark small fw-medium ff-public-sans ps-1">10.15am  AEST</span> 
                                </div>
                                 
                            </div>
                        </div>
                        <div class="px-3 px-sm-4 py-4 border-bottom">
                            <p class="lead fw-medium text-black mb-0">Available for Projects</p>
                            <p class="text-black mt-1 mb-2">Have time for a project? Turn on your project availability to let potential clients know you're available for work.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted fw-medium">Available Now</small> 
                                
                                <div class="toggle-button-cover">
                                    <div class="button-cover">
                                      <div class="button position-relative overflow-hidden b2" id="button-13">
                                        <input type="checkbox" class="checkbox">
                                        <div class="knobs">
                                          <span></span>
                                        </div>
                                        <div class="layer"></div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--.//item-->
                        <div class="px-3 px-sm-4 py-4">
                            <p class="lead fw-medium text-black mb-2">Project Success Score</p>
                            <p class="text-black">Your Project Success reflects how well you deliver great results for Your clients. This score updates about every 2 weeks</p>
                        </div><!--.//item-->
                         
                    </div><!--.//col-->


                    <div class="col-lg-8 col-xxl-9 border-start">
                        <div class="px-4 px-xl-5 pt-4 pt-md-5"> 
                            <h2 class="text-black lead fw-medium mb-2">Analytics</h2>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0 small fw-medium text-black">Proposals</p>
                                <div class="d-inline-flex">
                                    <div class="d-inline-block">
                                        <p class="text-black small fw-medium">
                                            5 views
                                            <span class="fw-normal d-block">In the last 7 days</span>
                                        </p>
                                    </div>
                                    <div class="px-3">
                                        <select name="profile_view" id="profile_view" class="form-select">
                                            <option value="Proposals">Proposals</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <select name="days" id="days" class="form-select">
                                            <option value="Last 7 days">Last 7 days</option>
                                            <option value="Last 10 days">Last 10 days</option>
                                            <option value="Last 15 days">Last 15 days</option>
                                        </select>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="px-2 px-xl-4"> 
                            <div id="chart"></div>
                        </div><!--.//chart-->

                        <div class="px-4 px-xl-5 pt-4 pt-md-5"> 
                            <!-- <hr class="mt-0 opacity-100" style="border-color: #0E00621A;"> -->
                            <div class="border-top pt-4 mb-4 mb-md-5"> 
                                <h2 class="text-black lead fw-medium mb-3">Client satisfaction</h2>
                                <div class="col-lg-8">
                                    <p class="text-dark small fw-medium mb-0">Project Success Score</p> 
                                    <div class="d-flex align-items-center"> 
                                        <div class="progress" style="width: calc(100% - 3rem);"> 
                                        <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 60%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="small fw-medium text-dark text-end" style="width: 3rem;">60%</div>
                                    </div>
                                </div>
                                <table class="table table-reposive fw-medium mt-2" style="max-width: 500px;">
                                    <tbody>
                                        <tr>
                                            <td class="text-muted border-0 py-1 ps-0">Last 12-month earnings</td>
                                            <td class="text-black border-0 py-1">$26,190.83</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted border-0 py-1 ps-0">Clients who would recommend you</td>
                                            <td class="text-black border-0 py-1">90%</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted border-0 py-1 ps-0">Long-term clients</td>
                                            <td class="text-black border-0 py-1">100%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="border-top pt-4 mb-4 mb-md-5"> 
                                <h2 class="text-black lead fw-medium mb-3">Communication</h2>
                                <p class="text-black small fw-medium mb-1">You replied to 9 of 9 invitations to apply in the past 90 days:</p> 
                                <p class="text-black small fw-normal">Your responsiveness will be determined after you receive and respond to a few more job invitations. Top freelancers accept or decline all invitations within 24 hours.</p> 
                                <div class="col-lg-8">
                                    <p class="text-dark small fw-medium mb-0">You reply within a day</p> 
                                    <div class="d-flex align-items-center"> 
                                        <div class="progress" style="width: calc(100% - 3rem);"> 
                                        <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 60%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="small fw-medium text-dark text-end" style="width: 3rem;">60%</div>
                                    </div>

                                    <p class="text-dark small fw-medium mb-0 mt-3">You reply every time</p> 
                                    <div class="d-flex align-items-center"> 
                                        <div class="progress" style="width: calc(100% - 3rem);"> 
                                        <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 60%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="small fw-medium text-dark text-end" style="width: 3rem;">60%</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div><!--.//item-->
                         
                         
                    </div><!--.//col-->

                </div><!--./row-->
            </div><!--.//main__content-->
        </div><!--.//container-->
    </main>


@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
          series: [
            {
                name: 'Sent',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }, {
                name: 'Interviewed',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }, {
                name: 'Viewed',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            }, {
                name: 'Hired',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            }, 
        ],
        colors: ["#AEBFE2", "#E9B911", "#0036E3", "#76BD8A"],
        chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded',
            borderRadius: 4,
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
        },
        yaxis: {
          title: {
            text: ''
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

    </script>
@endpush