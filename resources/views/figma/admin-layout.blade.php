@extends('frontend.layouts.front-admin-dashboard-layout')

@section('content')
    <section class="admin-layout">
        <!-- start header -->
        <div class="admin-header">
            @include('figma/admintopbar')
        </div>
        <!-- end header -->
        <!-- start left sidebar -->
        <div class="admin-sidebar">
            <div class="sidebar-inner">
                <div class="logo-wrapper">
                    <a href="" class="logo">
                        <img src="{{ asset('assets/frontend/img/admin/logo.png') }}" height="40" width="auto"
                             class="img-fluid"
                             alt=""/>
                    </a>
                    <button class="btn admin-sidebar-trigger" id="">
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
                        <li class="has-children">
                            <a href="#">
                                <x-icon.home/>
                                <span>Dashboard</span> </a></li>
                        <li class="has-children" data-bs-target="#services-submenu" data-bs-toggle="collapse">
                            <a href="#">
                                <x-icon.archive-line/>
                                <span>Services</span> </a>
                            <ul class="collapse" id="services-submenu">
                                <li><a href="{{ route('admin.projects') }}" class="inner-link">Projects</a></li>
                                <li><a href="#" class="inner-link">Trainings</a></li>
                                <li><a href="/figma/super-admin-scholarship" class="inner-link">Scholarsips</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="">
                                <x-icon.account-circle/>
                                <span> Users</span> </a></li>
                        <li class="has-children"><a href="">
                                <x-icon.account-box/>
                                <span> Accounting</span> </a></li>
                        <li class="has-children"><a href="">
                                <x-icon.star/>
                                <span> Reviews</span> </a></li>
                        <li class="has-children"><a href="">
                                <x-icon.settings-line/>
                                <span> Page setting</span> </a></li>
                        <li class="menu-title">Employee & Teach</li>
                        <li class="has-children"><a href="">
                                <x-icon.user/>
                                <span>Employee</span> </a></li>
                        <li class="has-children"><a href="">
                                <x-icon.command-fill/>
                                <span>Tech</span> </a></li>
                        <li class="menu-title">Upload & Resources</li>
                        <li><a href="">
                                <x-icon.home/>
                                <span>Upload Files</span> </a></li>
                        <li class="has-children"><a href="">
                                <x-icon.home/>
                                <span>Resources</span> </a></li>

                    </ul>
                </div>

            </div>

            {{--            @include('figma/adminleftsidebar')--}}
        </div>
        <!-- end left sidebar -->


        <main class="admin-content">
            <div class="container-fluid">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis illo nisi, obcaecati officia quasi
                recusandae sequi. Blanditiis commodi cumque earum inventore labore neque nobis obcaecati odio,
                officiis
                perspiciatis quia quis quos sint, tempora ullam? Animi architecto aspernatur blanditiis commodi
                cumque
                debitis dignissimos ea earum exercitationem expedita explicabo itaque molestias numquam obcaecati,
                quae
                quasi sed similique totam? Eos excepturi exercitationem, harum illum iusto nostrum perferendis rem
                veniam vitae voluptate! Adipisci amet assumenda consequatur dicta dolorum illo impedit, nihil nisi
                pariatur, quibusdam, sapiente sed veritatis. Aliquam architecto consectetur dolore, ducimus ea eaque
                esse eum expedita hic modi officiis perferendis praesentium quisquam quos repellat repudiandae sunt
                temporibus voluptatum. Adipisci aspernatur assumenda distinctio ducimus eveniet facilis illo impedit
                incidunt ipsum itaque labore laudantium minus, non numquam odio omnis praesentium provident quae
                quam
                quas quibusdam ratione reprehenderit repudiandae sunt temporibus ut vel veniam vitae voluptatibus
                voluptatum? At consectetur cupiditate distinctio, doloremque ea fugiat illo laudantium maiores
                maxime
                modi nobis optio quibusdam reiciendis rem similique soluta suscipit vitae? Autem delectus eligendi,
                numquam odit praesentium sint totam.
            </div>
        </main>

    </section>








@endsection
