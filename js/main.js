$(document).ready(function(){


/* Main code */
/**********************************************************************************************************************/

    /* Button go to top */

    $("#back-top").hide();

    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 1200) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });

        $('#back-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    });


    /* Scroll to element */

    $('.go_to').click( function(){

        var scroll_el = $(this).data('goto');

        if ($(scroll_el).length != 0) {
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500); // анимируем скроолинг к элементу scroll_el
        }
        return false;
    });
	
	/* Search 2021-12-06 */
	
	var $result = $('#search_box-result');
	
	$('#search').on('keyup', function(){
		var search = $(this).val();
		if ((search != '') && (search.length > 1)){
			$.ajax({
				type: "POST",
				url: "/ajax/ajax_search.php",
				data: {'search': search},
				success: function(msg){
					$result.html(msg);
					if(msg != ''){	
						$result.fadeIn();
					} else {
						$result.fadeOut(100);
					}
				}
			});
		 } else {
			$result.html('');
			$result.fadeOut(100);
		 }
	});
 
	$(document).on('click', function(e){
		if (!$(e.target).closest('.search_box').length){
			$result.html('');
			$result.fadeOut(100);
		}
	});
	
	$(document).on('click', '.search_result-name a', function(){
		$('#search').val($(this).text());
		$result.fadeOut(100);
		return false;
	});
	
	$(document).on('click', function(e){
		if (!$(e.target).closest('.search_box').length){
			$result.html('');
			$result.fadeOut(100);
		}
	});



}); //jQuery