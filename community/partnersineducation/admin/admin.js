$("#addForm").submit(function(event){
	var form = $("#addForm").children();
	$.ajax({
		type: "POST",
		url: "addPartner.php",
		data: {
			'partnerName': $("#newPartner").val(),
			'file': $('#newImg').val()
		},
		cache: false,
		success: function(data) {
			console.log(data);
		}
	});
});