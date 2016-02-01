$("#addForm").submit(function(event) {
	event.preventDefault();
	var data = new FormData($('form')[0]);
	if($("#newImg").val().length != 0) {
		$.ajax({
			url: "addCarousel.php",
	        processData: false,
	        contentType: false,
	        type: "POST",
	        data: data,
	        success: function(data) {
	        	$("#newFormOut").html(data);
	        }
		});
	} else {
		$("#newFormOut").html("<div class='alert alert-danger'>Please Select a File</div>");
	}
});