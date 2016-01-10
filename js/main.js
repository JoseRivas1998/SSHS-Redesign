console.log("JS Loaded");
$(document).ready(function() {
	var id = $(location).attr('pathname');
	console.log(id);
  $(document.getElementById(id)).addClass("active");
});
// ADD SLIDEDOWN ANIMATION TO DROPDOWN //
$('.dropdown').on('show.bs.dropdown', function(e){
	$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

// ADD SLIDEUP ANIMATION TO DROPDOWN //
$('.dropdown').on('hide.bs.dropdown', function(e){
	e.preventDefault();
	$(this).find('.dropdown-menu').first().stop(true, true).slideUp(300, function(){
		$(this).parent().removeClass('open');
	});
});
