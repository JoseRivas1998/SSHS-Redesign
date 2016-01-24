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

function formatDateTimeLocal(dateValue) {
  var indexT = dateValue.indexOf("T");
  var date = dateValue.substring(0, indexT);
  var time = dateValue.substring(indexT + 1) + ":00";
  var dateTime = date + " " + time;
  return dateTime;
}
