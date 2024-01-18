
<script type="text/javascript">
    // common js if required
    $(document).ready(function() {
              $('.portfolio').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 3,
                    nav: true,
                    dots: false,
                    loop: false,
                    margin:0,
                    autoWidth:false,
                  }
                }
              })
            });


    // Owl Caurasel Start Here
    $(document).ready(function() {
              $('.owl-carouselfour').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: false,
                    dots: false,
                  },

                  600: {
                    items: 2,
                    nav: false,
                    dots: false,
                  },

                  768: {
                    items: 3,
                    nav: false,
                    dots: false,
                  },

                  1000: {
                    items: 3,
                    nav: true,
                    dots: false,
                    loop: false,
                    margin:0,
                    autoWidth:false,
                  },
                  1200: {
                    items: 4,
                    nav: true,
                    dots: false,
                    loop: false,
                    margin:0,
                    autoWidth:false,
                  }
                }
              })
            });



            $(document).ready(function() {
              $('.owl-carouselfive').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 4,
                    nav: true,
                    dots: false,
                    loop: false,
                    margin:0,
                    autoWidth:false,
                  }
                }
              })
            });


</script>


@stack('bottom_scripts')
