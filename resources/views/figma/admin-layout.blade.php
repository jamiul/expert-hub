@extends('frontend.layouts.front-admin-dashboard-layout')

@section('content')
    <div class="admin-layout" sidebar-size="small">
        <!-- start header -->
        <div class="admin-header">
            @include('figma/admintopbar')
        </div>
        <!-- end header -->
        <!-- start left sidebar -->
        <div class="admin-sidebar">
            @include('figma/adminleftsidebar')
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

    </div>

    <script>
        function submenuTrigger(element, event) {
            event.preventDefault();
            element.parentElement.classList.toggle("active-sub-menu");
        }

        function toggleClasses(parentSelector, className) {
            var parentElement = document.querySelector(parentSelector);
            if (parentElement) {
                // Toggle the specified class on the parent element
                parentElement.classList.toggle(className);
            } else {
                console.error('Parent element not found!');
            }
        }

        function removeClass(elementSelector, className) {
            var element = document.querySelector(elementSelector);

            if (element) {
                // Remove the specified class from the element
                element.classList.remove(className);
            } else {
                console.error('Element not found!');
            }
        }
    </script>






@endsection
