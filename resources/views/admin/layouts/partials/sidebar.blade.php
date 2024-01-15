<div class="sidebar-inner">
    <div class="sidebar-header">
        <a href="" class="logo">
            <img src="{{ asset('assets/frontend/img/admin/logo.png') }}" height="40" width="auto"
                 class="img-fluid"
                 alt=""/>
        </a>
        <button class="admin-sidebar-trigger" onclick="toggleClasses('.admin-layout', 'sidebar-small')">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                <path
                    d="M0.8 0H15.2C15.6418 0 16 0.348227 16 0.777778V13.2222C16 13.6518 15.6418 14 15.2 14H0.8C0.358176 14 0 13.6518 0 13.2222V0.777778C0 0.348227 0.358176 0 0.8 0ZM4.8 1.55556H1.6V12.4444H4.8V1.55556ZM6.4 1.55556V12.4444H14.4V1.55556H6.4Z"
                    fill="white"/>
            </svg>
        </button>
    </div>
    <div class="sidebar-menu-wrapper">
        <ul class="menu">
            <li class="menu-title">Main Menu</li>
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <x-icon.home/>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="has-children">
                <a onclick="submenuTrigger(this, event)" href="#">
                    <x-icon.archive-line/>
                    <span>Services</span> </a>
                <ul>
                    <li class="current-menu-item"><a href="{{ route('admin.projects') }}">Projects</a></li>
                    <li><a href="#" class="inner-link">Trainings</a></li>
                    <li><a href="{{ route('admin.scholarships.index') }}">Scholarsips</a></li>
                </ul>
            </li>
            <li class="has-children"><a onclick="submenuTrigger(this, event)" href="#">
                    <x-icon.account-circle/>
                    <span> Users</span> </a>
                <ul class="collapse" id="users-submenu">
                    <li><a href="{{ route('admin.clients') }}">Clients</a></li>
                    <li><a href="{{ route('admin.experts') }}">Experts</a></li>
                </ul>
            </li>
            <li><a href="">
                    <x-icon.account-box/>
                    <span> Accounting</span> </a></li>
            <li><a href="">
                    <x-icon.star/>
                    <span> Reviews</span> </a></li>
            <li class="has-children">
                <a onclick="submenuTrigger(this, event)" href="#">
                    <x-icon.settings-line/>
                    <span> Page setting</span> </a>
                <ul class="collapse" id="page-setting-submenu">
                    <li><a href="{{ route('admin.homePage') }}">Home Page</a></li>
                    <li><a href="{{ route('admin.about-us') }}">About US Page</a></li>
                </ul>
            </li>
            <li class="menu-title">Employee & Teach</li>
            <li class="has-children"><a onclick="submenuTrigger(this, event)" href="#">
                    <x-icon.user/>
                    <span>Employee</span> </a>
                <ul class="collapse" id="employee-submenu">
                    <li><a href="{{ route('admin.projectPayment') }}">Project payment</a></li>
                </ul>
            </li>
            <li><a href="">
                    <x-icon.command-fill/>
                    <span>Tech</span> </a></li>
            <li class="menu-title">Upload & Resources</li>
            <li><a href="">
                    <x-icon.home/>
                    <span>Upload Files</span> </a></li>
            <li><a href="">
                    <x-icon.home/>
                    <span>Resources</span> </a></li>
        </ul>
    </div>
    <div class="sidebar-footer">
        &copy; copyright eduexhub 2024
    </div>
</div>