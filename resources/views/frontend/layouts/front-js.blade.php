<script src="{{ asset('assets/frontend/js/jquery_3.7.1_jquery.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>



    <!-- Expert profile Portfolio slide -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $(".portfolioCaousel").owlCarousel({
        items: 3,
        autoplay:false,
        autoplayTimeout: 5500,
        autoplayHoverPause: true, 
        smartSpeed: 550,
        loop: false,
        margin: 20,  
        nav: true,
        dots: true,
        responsiveClass: true, 
        responsive: { 
            0: { items: 1 },
            600: { items: 2 },
            992: { items: 3 },
            1200: { items: 3 }
        },
        navText: [
          '<i class="fa-solid fa-chevron-left"></i>',
          '<i class="fa-solid fa-chevron-right"></i>'
        ]
      });   
      
    </script>

@stack('bottom_scripts')
