$("#addForm").submit(function(event) {
  event.preventDefault();
  $("#newFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
  var data = new FormData($('form')[0]);
  if($("#newPosterThumb").val().length != 0 && $("#newPosterLarge").val().length != 0){
    $.ajax({
      type: "POST",
      url: "addSeries.php",
      processData: false,
      contentType: false,
      data: data,
      success: function(data) {
        $("#newFormOut").html(data);
      }
    });
  } else {
    $("#newFormOut").html("<div class='alert alert-danger'>You must upload a poster thumbnail and pdf.</div>");
  }
});
