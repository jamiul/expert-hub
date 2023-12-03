@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/expert-dashboard.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">

   <main class="expert__dashboad contract__page proposal__page py-5">
        <div class="container">
            <div class="main__content__wrapp">
                <div class=" px-4 px-md-5 py-4 pt-md-5 pb-4">
                    <h1 class="lead-lg fw-medium text-black mb-3">My Services</h1>
                    <div class="my-services">
                        <div class="my-services-list">
                            <div class="row"> 
                                <h3 class="d-flex justify-content-between align-items-center ">
                                <span>Book Expert for Consultation</span> 
                                <button data-bs-toggle="modal" data-bs-target="#modalSetting" class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                                    </svg>
                                </button>
                                </h3>
                                <div class="col-md-3">
                                <div class="prof-img">
                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/book-exprt2.jpg') }}"></img>
                                    <h4>Prof. Michael</h4>
                                </div>
                                </div>
                                <div class="col-md-9">
                                <div class="prof-text">
                                    <div class="prof-expart">
                                    <ul>
                                        <li>Expertise:</li>
                                        <li><a href="#">Public Health</a></li>
                                        <li><a href="#">Curriculum Development</a></li>
                                    </ul>
                                    <p>$120/30mins</p>
                                    </div>
                                    <div class="profp1"><span>Prof. Michael</span> offers consultation services to educational institutions, businesses and individuals seeking expertise in <span>curriculum development.</span> offers consultation services to educational institutions, businesses and individuals seeking expertise in  offers consultation services to educational institutions, businesses and individuals seeking expertise in</div>
                                    <div class="profip2">To schedule a consultation, <a href="#">Book a time</a></div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-services-list">
                            <div class="row"> 
                                <h3 class="d-flex justify-content-between align-items-center">
                                    <span>Book Expert for TV Interview</span> 
                                    <button data-bs-toggle="modal" data-bs-target="#modalSetting" class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                                        </svg>
                                    </button>
                                </h3>
                                <div class="col-md-3">
                                    <div class="prof-img">
                                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/book-exprt3.jpg') }}"></img>
                                        <h4>Prof. Michael</h4>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="prof-text">
                                        <div class="prof-expart">
                                            <ul>
                                                <li>Expertise:</li>
                                                <li><a href="#">Public Health</a></li>
                                            </ul>
                                            <p>$120/30mins</p>
                                        </div>
                                        <div class="profp1"><span>Prof. Michael</span> offers consultation services to educational institutions, businesses and individuals seeking expertise in <span>curriculum development.</span>offers consultation services to educational institutions, businesses and individuals seeking expertise in  offers consultation services to educational institutions, businesses and individuals seeking expertise in</div>
                                        <div class="profip2">To schedule a consultation, <a href="#">Book a time</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div><!--.//main__content-->

            <!-- Modal -->
            <div class="modal fade setting__modal" id="modalSetting" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document" style="max-width: 800px;">
                    <div class="modal-content">
                        <div class="modal-body position-relative">
                            <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                             
                            <div class="pt-4"> 
                                <input type="text" name="title" class="form-control title__box" value="Book Expert for Consultation"
                                    style="background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjUiIHZpZXdCb3g9IjAgMCAyNCAyNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgaWQ9ImVkaXRfRklMTDBfd2dodDMwMF9HUkFEMF9vcHN6MjQgKDEpIDEiPgo8cGF0aCBpZD0iVmVjdG9yIiBkPSJNNS4xNTQyNSAxOS41SDYuMzkwNzdMMTUuNjUwNCAxMC4yNDA0TDE0LjQxMzkgOS4wMDM4MUw1LjE1NDI1IDE4LjI2MzVWMTkuNVpNMTguODU4IDkuMTU1NzZMMTUuNDgzMSA1LjgxMTU4TDE2Ljc4NyA0LjUwNzc2QzE3LjA4MDYgNC4yMTQxNyAxNy40Mzc2IDQuMDY3MzggMTcuODU4MSA0LjA2NzM4QzE4LjI3ODYgNC4wNjczOCAxOC42MzU2IDQuMjE0MTcgMTguOTI5MiA0LjUwNzc2TDIwLjE0NjUgNS43MjUwM0MyMC40NDAxIDYuMDE4NjIgMjAuNTkyIDYuMzcwNTMgMjAuNjAyMyA2Ljc4MDc4QzIwLjYxMjUgNy4xOTEwMyAyMC40NzA5IDcuNTQyOTUgMjAuMTc3MyA3LjgzNjUzTDE4Ljg1OCA5LjE1NTc2Wk0xNy43NzM1IDEwLjI1NTdMNy4wMjkyMiAyMUgzLjY1NDNWMTcuNjI1TDE0LjM5ODUgNi44ODA3OEwxNy43NzM1IDEwLjI1NTdaTTE1LjAyNzQgOS42MTcyOEwxNC40MTM5IDkuMDAzODFMMTUuNjUwNCAxMC4yNDA0TDE1LjAyNzQgOS42MTcyOFoiIGZpbGw9IiMzMDM3NDQiIGZpbGwtb3BhY2l0eT0iMC43Ii8+CjwvZz4KPC9zdmc+Cg==) no-repeat center right 1rem / 2rem;"
                                >
     
                            </div> 
                            <p class="text-muted mt-3 mb-12">
                                <span class="text-dark">Prof. Michael</span> offers consultation services to educational institutions, businesses and individuals seeking expertise in <span class="text-dark">curriculum development</span>.  offers consultation services to educational institutions, businesses and individuals seeking expertise in  offers consultation services to educational institutions, businesses and individuals seeking expertise in 
                            </p>
                            <p class="text-black fw-medium mb-12">In which of your areas of expertise would you like to offer media interview service?</p>
                           
                            <div class="skill__box">
                                <input type="text" name="search" class="form-control search" placeholder="Search skills..."
                                    style="background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgaWQ9InNlYXJjaF9GSUxMMF93Z2h0NDAwX0dSQUQwX29wc3oyNCAxIj4KPHBhdGggaWQ9IlZlY3RvciIgZD0iTTE5LjYgMjFMMTMuMyAxNC43QzEyLjggMTUuMSAxMi4yMjUgMTUuNDE2NyAxMS41NzUgMTUuNjVDMTAuOTI1IDE1Ljg4MzMgMTAuMjMzMyAxNiA5LjUgMTZDNy42ODMzMyAxNiA2LjE0NTgzIDE1LjM3MDggNC44ODc1IDE0LjExMjVDMy42MjkxNyAxMi44NTQyIDMgMTEuMzE2NyAzIDkuNUMzIDcuNjgzMzMgMy42MjkxNyA2LjE0NTgzIDQuODg3NSA0Ljg4NzVDNi4xNDU4MyAzLjYyOTE3IDcuNjgzMzMgMyA5LjUgM0MxMS4zMTY3IDMgMTIuODU0MiAzLjYyOTE3IDE0LjExMjUgNC44ODc1QzE1LjM3MDggNi4xNDU4MyAxNiA3LjY4MzMzIDE2IDkuNUMxNiAxMC4yMzMzIDE1Ljg4MzMgMTAuOTI1IDE1LjY1IDExLjU3NUMxNS40MTY3IDEyLjIyNSAxNS4xIDEyLjggMTQuNyAxMy4zTDIxIDE5LjZMMTkuNiAyMVpNOS41IDE0QzEwLjc1IDE0IDExLjgxMjUgMTMuNTYyNSAxMi42ODc1IDEyLjY4NzVDMTMuNTYyNSAxMS44MTI1IDE0IDEwLjc1IDE0IDkuNUMxNCA4LjI1IDEzLjU2MjUgNy4xODc1IDEyLjY4NzUgNi4zMTI1QzExLjgxMjUgNS40Mzc1IDEwLjc1IDUgOS41IDVDOC4yNSA1IDcuMTg3NSA1LjQzNzUgNi4zMTI1IDYuMzEyNUM1LjQzNzUgNy4xODc1IDUgOC4yNSA1IDkuNUM1IDEwLjc1IDUuNDM3NSAxMS44MTI1IDYuMzEyNSAxMi42ODc1QzcuMTg3NSAxMy41NjI1IDguMjUgMTQgOS41IDE0WiIgZmlsbD0iIzMwMzc0NCIgZmlsbC1vcGFjaXR5PSIwLjMiLz4KPC9nPgo8L3N2Zz4K) no-repeat center right 1rem / 1.5rem;"
                                >
                                <div class="skill__list d-flex flex-row flex-wrap mt-4">
                                    <div class="item d-inline-flex align-items-center rounded-pill me-2 mb-2">
                                        <span>Architecture 1</span>
                                        <button class="btn p-0 ms-1">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.3 12.75L9 10.05L11.7 12.75L12.75 11.7L10.05 9L12.75 6.3L11.7 5.25L9 7.95L6.3 5.25L5.25 6.3L7.95 9L5.25 11.7L6.3 12.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69688 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69688 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69688 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69688 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C10.675 15 12.0938 14.4188 13.2563 13.2563C14.4188 12.0938 15 10.675 15 9C15 7.325 14.4188 5.90625 13.2563 4.74375C12.0938 3.58125 10.675 3 9 3C7.325 3 5.90625 3.58125 4.74375 4.74375C3.58125 5.90625 3 7.325 3 9C3 10.675 3.58125 12.0938 4.74375 13.2563C5.90625 14.4188 7.325 15 9 15Z" fill="#303744"/>
                                              </svg>
                                        </button>
                                    </div>
                                    <div class="item d-inline-flex align-items-center rounded-pill me-2 mb-2">
                                        <span>Architecture 1</span>
                                        <button class="btn p-0 ms-1">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.3 12.75L9 10.05L11.7 12.75L12.75 11.7L10.05 9L12.75 6.3L11.7 5.25L9 7.95L6.3 5.25L5.25 6.3L7.95 9L5.25 11.7L6.3 12.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69688 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69688 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69688 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69688 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C10.675 15 12.0938 14.4188 13.2563 13.2563C14.4188 12.0938 15 10.675 15 9C15 7.325 14.4188 5.90625 13.2563 4.74375C12.0938 3.58125 10.675 3 9 3C7.325 3 5.90625 3.58125 4.74375 4.74375C3.58125 5.90625 3 7.325 3 9C3 10.675 3.58125 12.0938 4.74375 13.2563C5.90625 14.4188 7.325 15 9 15Z" fill="#303744"/>
                                              </svg>
                                        </button>
                                    </div>
                                    <div class="item d-inline-flex align-items-center rounded-pill me-2 mb-2">
                                        <span>Architecture 1</span>
                                        <button class="btn p-0 ms-1">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.3 12.75L9 10.05L11.7 12.75L12.75 11.7L10.05 9L12.75 6.3L11.7 5.25L9 7.95L6.3 5.25L5.25 6.3L7.95 9L5.25 11.7L6.3 12.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69688 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69688 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69688 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69688 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C10.675 15 12.0938 14.4188 13.2563 13.2563C14.4188 12.0938 15 10.675 15 9C15 7.325 14.4188 5.90625 13.2563 4.74375C12.0938 3.58125 10.675 3 9 3C7.325 3 5.90625 3.58125 4.74375 4.74375C3.58125 5.90625 3 7.325 3 9C3 10.675 3.58125 12.0938 4.74375 13.2563C5.90625 14.4188 7.325 15 9 15Z" fill="#303744"/>
                                              </svg>
                                        </button>
                                    </div>
                                    <div class="item d-inline-flex align-items-center rounded-pill me-2 mb-2">
                                        <span>Architecture 1</span>
                                        <button class="btn p-0 ms-1">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.3 12.75L9 10.05L11.7 12.75L12.75 11.7L10.05 9L12.75 6.3L11.7 5.25L9 7.95L6.3 5.25L5.25 6.3L7.95 9L5.25 11.7L6.3 12.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69688 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69688 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69688 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69688 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C10.675 15 12.0938 14.4188 13.2563 13.2563C14.4188 12.0938 15 10.675 15 9C15 7.325 14.4188 5.90625 13.2563 4.74375C12.0938 3.58125 10.675 3 9 3C7.325 3 5.90625 3.58125 4.74375 4.74375C3.58125 5.90625 3 7.325 3 9C3 10.675 3.58125 12.0938 4.74375 13.2563C5.90625 14.4188 7.325 15 9 15Z" fill="#303744"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-4">
                                <div class="floating__box position-relative p-2">
                                    <label for="value" class="label small fw-medium text-black position-absolute bg-white d-inline-flex px-1">Value / 30 mins</label>
                                    <input
                                        type="text"
                                        class="form-control border-0" name="value" id="value" placeholder="$120" value="$120"
                                    >
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="row row cols-md-3 row-cols-lg-4">
                                    <div> 
                                        <div class="position-relative attachment__item">
                                            <img 
                                                src="https://s40424.pcdn.co/in/wp-content/uploads/2022/12/What-is-a-Project-Report-and-How-to-Create-one.jpg.optimal.jpg" 
                                                width="400" height="200" class="img-fluid w-100" alt="image"
                                            >
                                            <label for="change" class="d-block p-1 position-absolute top-50 translate-middle-y start-0 w-100 small fw-medium text-center">
                                                <span>Upload New</span>
                                                <input type="file" name="change" id="change" class="w-0 h-0 border-0 opacity-0 position-absolute">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 pt-3 border-top text-end">
                                <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-outline-primary me-2">Cancel</button>
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </div><!--.//modal-body-->
                    </div>
                </div>
            </div>
        </div><!--.//container-->
    </main>
@endsection

