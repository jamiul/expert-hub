<a href="index.html" class="logo d-lg-none"><img src="assets/images/logo.png" height="40" width="auto" class="img-fluid" alt=""></a>
                <ul class="navbar-nav mr-auto">  
                    <li class="nav-item dropdown position-relative"> 
                        <button class="btn notification__btn rounded-circle d-flex justify-content-center align-items-center" type="button" id="notDrop" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M18.3333 16.6667H1.66663V15.0001H2.49996V9.19291C2.49996 5.03631 5.85783 1.66675 9.99996 1.66675C14.1421 1.66675 17.5 5.03631 17.5 9.19291V15.0001H18.3333V16.6667ZM4.16663 15.0001H15.8333V9.19291C15.8333 5.9568 13.2216 3.33341 9.99996 3.33341C6.7783 3.33341 4.16663 5.9568 4.16663 9.19291V15.0001ZM7.91663 17.5001H12.0833C12.0833 18.6507 11.1505 19.5834 9.99996 19.5834C8.84938 19.5834 7.91663 18.6507 7.91663 17.5001Z" fill="#303744"/>
                            </svg>
                            <span class="badge bg-danger position-absolute fs-10 rounded-circle">9+</span>
                        </button>
                        <div class="dropdown-menu notification" aria-labelledby="notDrop">
                            <a class="dropdown-item" href="profile.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Notification</a>  
                        </div>
                    </li> 
                    <li class="nav-item dropdown">  
                        <button class="profile__btn btn text-start d-flex align-items-center border-0" type="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/frontend/img/cp4.png') }}" class="rounded-circle thumbnail" width="45" height="45" alt="admin-user-img"> 
                            <div class="caption">
                                <p class="mb-0 small fw-medium text-black">Leslie Alexander</p>
                                <p class="mb-0 fs-13 text-muted">Admin</p>
                            </div>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> My Profile</a> 
                            <a class="dropdown-item" href="#"><i data-feather="settings"></i> Account Settings</a>
                            <a class="dropdown-item" href="#"><i data-feather="lock"></i> Change Password</a>
                            <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Log Out</a> 
                        </div>
                    </li> 
                </ul>  