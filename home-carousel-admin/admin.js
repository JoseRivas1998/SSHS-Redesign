$("#addForm").submit(function(event) {
	$("#newFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
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
						loadCarouselList();
	        }
		});
	} else {
		$("#newFormOut").html("<div class='alert alert-danger'>Please Select a File</div>");
	}
});

function loadCarouselList() {
	$("#carouselList").load("loadCarouselList.php", function() {
		onListChange();
	});
}

function onListChange() {
	$.ajax({
		type: "POST",
		url: "carouselInfoToForm.php",
		data: {
			"cId": $("#carouselList").val()
		},
		cache: false,
		success: function(data) {
			$("#curImg").attr("src", "/img/content/carousel/" + data)
		}
	});
}

$(document).ready(loadCarouselList);

$("#carouselList").on("change", onListChange);

$("#editForm").submit(function(event) {
	$("#editFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
	event.preventDefault();
	var data = new FormData($('form')[1]);
	if($("#editImg").val().length != 0) {
		$.ajax({
			url: "editCarousel.php",
			processData: false,
			contentType: false,
			type: "POST",
			data: data,
			success: function(data) {
				$("#editFormOut").html(data);
				loadCarouselList();
			}
		});
	} else {
		$("#editFormOut").html("<div class='alert alert-danger'>Please Select a File</div>");
	}
});

$("#refreshList").on("click", loadCarouselList);

$("#deleteCarousel").on("click", function() {
	if(confirm("Delete this Carousel Image?")) {
		$("#editFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
		$.ajax({
			type: "POST",
			url: "deleteCarousel.php",
			data: {
				"cId": $("#carouselList").val()
			},
			cache: false,
			success: function(data) {
				$("#editFormOut").html(data);
				loadCarouselList();
			}

		});
	} else {
		$("#editFormOut").html("<div class='alert alert-danger'>You cancelled deletion.</div>");
	}
});
