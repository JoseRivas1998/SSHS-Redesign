$("#addForm").submit(function(event) {
    event.preventDefault();
    $("#newFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
    var data = new FormData($('form')[0]);

    $.ajax({
      type: "POST",
      url: "addShow.php",
      processData: false,
      contentType: false,
      data: data,
      success: function(data) {
        $("#newFormOut").html(data);
        loadList();
      }
    });

});

function loadList() {
  $("#showList").load("loadShowList.php", onListChange);
}

function onListChange() {
  $.ajax({
    type: "POST",
    url: "showInfoToForm.php",
    dataType: "json",
    data: {
      "showId": $("#showList").val()
    },
    cache: false,
    success: function(data) {
      $("#edittitle").val(data["resTitle"]);
      $("#curImg").attr("src", data["resPoster"]);
      $("#editshow1").val(data["resShow1"]);
      $("#editshow2").val(data["resShow2"]);
      $("#editshow3").val(data["resShow3"]);
      $("#editshow4").val(data["resShow4"]);
      $("#editshow5").val(data["resShow5"]);
      $("#editshow6").val(data["resShow6"]);
      $("#editticket1").val(data["resTicket1"]);
      $("#editticket2").val(data["resTicket2"]);
      $("#editticket3").val(data["resTicket3"]);
      $("#editticket4").val(data["resTicket4"]);
      $("#editlocation").val(data["resLocation"]);
    }
  });
}

$(document).ready(loadList);

$("#showList").on("change", onListChange);

$("#editForm").submit(function(event) {
    event.preventDefault();
    $("#editFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
    var data = new FormData($('form')[1]);

    $.ajax({
      type: "POST",
      url: "editShow.php",
      processData: false,
      contentType: false,
      data: data,
      success: function(data) {
        $("#editFormOut").html(data);
      }
    });
});

$("#refreshShow").on("click", loadList);

$("#deleteShow").on("click", function() {
  if(confirm("Delete Show?")) {
    $("#editFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
    $.ajax({
      type: "POST",
      url: "deleteShow.php",
      data: {
        "showId": $("#showList").val()
      },
      cache: false,
      success: function(data) {
        $("#editFormOut").html(data);
        loadList();
      }
    });
  } else {
    $("#editFormOut").html("<div class='alert alert-danger'>You cancelled deletion.</div>");
  }
});
