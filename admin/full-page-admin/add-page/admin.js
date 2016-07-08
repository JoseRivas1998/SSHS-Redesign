var tinyMceCss = [
  "/css/font-awesome-4.6.1/css/font-awesome.min.css",
  "/css/tinymce.css"
];
tinyMceInit("#content", tinyMceCss, function() {});

$("#addPath").click(function(event) {
  event.preventDefault();
  var title = $("#title").val();
  title = title.trim().toLowerCase().replace(/[ \t]+/g, '-');
  title = encodeURI(title);
  var path = $("#path").val().trim().toLowerCase();
  if(path.length > 0) {
    path += "/";
  }
  path += title;
  $("#path").val(path);
});

function checkChange() {
  if($('#catCheck').is(':checked')) {
    $('#category').prop('disabled', false);
  } else {
    $('#category').prop('disabled', 'disabled');
  }
}

$("#catCheck").change(checkChange);

$(document).ready(function() {
  checkChange();
});

$("#newPageForm").submit(function(event) {
  event.preventDefault();
  $("#formOut").html("<div class='alert alert-warning fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i><i class='fa fa-spinner fa-spin'></i> Adding Page</div>");
  $("#path").val(encodeURI($("#path").val().trim().toLowerCase().replace(/[ \t]+/g, '-')));
  while($("#path").val().charAt(0) === '/') {
    $("#path").val($("#path").val().substr(1));
  }
  tinymce.triggerSave();
  var data = new FormData($('form')[0]);
  $.ajax({
    url: "addPage.php",
    processData: false,
    contentType: false,
    type: "POST",
    data: data,
    success: function(data) {
      $("#formOut").html(data);
    }
  });
});
