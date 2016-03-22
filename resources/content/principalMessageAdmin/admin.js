var tinyMceCss = [
  "/css/font-awesome-4.5.0/css/font-awesome.min.css",
  "tinymce.css"
];
tinyMceInit("#newMessage", tinyMceCss, function() {});

$("#newForm").submit(function(event) {
  $("#newFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
  event.preventDefault();
  tinymce.triggerSave();
  var data = new FormData($('form')[0]);
  $.ajax({
    url: "addMessage.php",
    processData: false,
    contentType: false,
    type: "POST",
    data: data,
    success: function(data) {
      $("#newFormOut").html(data);
    }
  });
});
