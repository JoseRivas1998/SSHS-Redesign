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
      loadList();
    }
  });
});

$(document).ready(function() {
    loadList();
});

$("#editMessageList").on("change", onListChange);

function loadList() {
  $("#editMessageList").load("loadMessageList.php", function () {
    tinyMceInit("#editMessage", tinyMceCss, function() {
      onListChange();
    });
  });
}

function onListChange() {
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "messageToForm.php",
    data: {
        "mId": $("#editMessageList").val()
    },
    cache: false,
    success: function (data) {
      $("#editPublishDate").val(data["publishDate"]);
      $(tinymce.get('editMessage').getBody()).html(data["message"]);
      tinymce.triggerSave();
    }
  });
}

$("#editForm").submit(function(event) {
  $("#editFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
  event.preventDefault();
  tinymce.triggerSave();
  var data = new FormData($('form')[1]);
  $.ajax({
    url: "editMessage.php",
    processData: false,
    contentType: false,
    type: "POST",
    data: data,
    success: function(data) {
      $("#editFormOut").html(data);
    }
  });
});
