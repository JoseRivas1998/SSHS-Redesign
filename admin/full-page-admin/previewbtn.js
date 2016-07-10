$("#preview").click(function(event) {
  event.preventDefault();
  $("#path").val(encodeURI($("#path").val().trim().toLowerCase().replace(/[ \t]+/g, '-')));
  while($("#path").val().charAt(0) === '/') {
    $("#path").val($("#path").val().substr(1));
  }
  tinymce.triggerSave();
  var data = new FormData($('form')[0]);
  $.ajax({
    url: "../generate-preview.php",
    processData: false,
    contentType: false,
    type: "POST",
    data: data,
    success: function(data) {
      var win = window.open();
      win.document.write(data);
    }
  })
});
