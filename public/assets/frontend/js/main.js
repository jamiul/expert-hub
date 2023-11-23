
// data-scrollbar

$(document).ready(function () {
    // get the current 
    $(".left__sidebar ul li > a").filter(function() {
        return this.href == location.href.replace(/#.*/, ""); 
    }).parents("li").addClass("active show");

   
    // toggle left sidebar and main content
    if (screen.width > 991) { 
        $(".navToggler").on('click', function(){
            $(".left__sidebar").toggleClass('compact-nav');  
        }); 
    }
    // hide left side for mobile screen 
    if (screen.width < 991) { 
		$(".header__wrapper").addClass('mobile-increase-nav'); 
        $('.left__sidebar').addClass('mobile-nav'); 
        $(".navToggler").on('click', function(){
            $(".left__sidebar").toggleClass('mobile-nav'); 
        }); 
        $("#jsCloseMobileNav").on('click', function(){
			$(".left__sidebar").addClass("mobile-nav"); 
        });  
    }

	// 
	$(".collapse__btn").click(function(){
		$(this).parent().toggleClass('active');
	});
   
    $('.form-select').select2();

 


    // $("#daysName").select2({
    //     placeholder: "Select days",
    //     allowClear: true,
    //     formatResult: format,
    //     formatSelection: format
    // });





});


$(document).ready(function() {
    var table = $('.data__table').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
} );
 
   