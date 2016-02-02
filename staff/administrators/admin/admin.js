$("#newForm").submit(function(event) {
  event.preventDefault();
  $("#newFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
  var data = new FormData($('form')[0]);
  $.ajax({
    type: "POST",
    url: "addAdmin.php",
    processData: false,
    contentType: false,
    data: data,
    success: function(data) {
      $("#newFormOut").html(data);
      loadAdminList();
    }
  });
});

function loadAdminList() {
  $("#adminList").load("loadAdminList.php", onListChange);
}

function onListChange() {
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "adminInfoToForm.php",
    data: {
      "adminId": $("#adminList").val()
    },
    cache: false,
    success: function(data) {
      $("#editFirstName").val(data["resFirstName"]);
      $("#editLastName").val(data["resLastName"]);
      $("#editEmail").val(data["resEmail"]);
      $("#editRole").val(data["resRole"]);
      $("#editLink").val(data["resLink"]);
      $("#editLinkText").val(data["resLinkText"]);
      $("#editOrderNum").val(data["resOrderNum"]);
      $("#curImg").attr("src", data["resImgSrc"]);
    }
  });
}

$("#adminList").on("change", onListChange);

$(document).ready(loadAdminList);

$("#editForm").submit(function(event) {
  event.preventDefault();
  $("#editFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
  var data = new FormData($('form')[1]);
  $.ajax({
    type: "POST",
    url: "editAdmin.php",
    processData: false,
    contentType: false,
    data: data,
    success: function(data) {
      $("#editFormOut").html(data);
    }
  });
});
