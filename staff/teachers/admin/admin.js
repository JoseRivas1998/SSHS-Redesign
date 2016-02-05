$("#addForm").submit(function(event) {
  event.preventDefault();
  $("#newFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
  var data = new FormData($('form')[0]);

  $.ajax({
    type: "POST",
    url: "addTeacher.php",
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
  $("#teacherList").load("loadTeacherList.php", onListChange);
}

function onListChange() {
  $.ajax({
    type: "POST",
    url: "teacherInfoToForm.php",
    dataType: "json",
    data: {
      "teacherId": $("#teacherList").val()
    },
    cache: false,
    success: function(data) {
      $("#editFirstName").val(data["resFirstName"]);
      $("#editLastName").val(data["resLastName"]);
      $("#editEmail").val(data["resEmail"]);
      $("#editFChair").prop("checked", data["resFChair"] == 1);
      $("#editDChair").prop("checked", data["resDChair"] == 1);
      $("#editAChair").prop("checked", data["resAChair"] == 1);
      $("#curImg").attr("src", data["resImg"]);
      $("#editClass1").val(data["resClass1"]);
      $("#editClass2").val(data["resClass2"]);
      $("#editClass3").val(data["resClass3"]);
      $("#editClass4").val(data["resClass4"]);
      $("#editClass5").val(data["resClass5"]);
      $("#editClass6").val(data["resClass6"]);
      $("#editClass7").val(data["resClass7"]);
      $("#editAcad").val(data["resAcad"]);
      $("#editlink1Text").val(data["resLink1Text"]);
      $("#editlink1href").val(data["resLink1href"]);
      $("#editlink2Text").val(data["resLink2Text"]);
      $("#editlink2href").val(data["resLink2href"]);
      $("#editlink3Text").val(data["resLink3Text"]);
      $("#editlink3href").val(data["resLink3href"]);
    }
  });
}

$(document).ready(loadList);

$("#teacherList").on("change", onListChange);

$("#editForm").submit(function(event) {
  event.preventDefault();
  $("#editFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
  var data = new FormData($('form')[1]);

  $.ajax({
    type: "POST",
    url: "editTeacher.php",
    processData: false,
    contentType: false,
    data: data,
    success: function(data) {
      $("#editFormOut").html(data);
    }
  });
});

$("#refreshList").on("click", loadList);

$("#deleteTeacher").on("click", function() {
  if(confirm("Delete the Teacher?")) {
    $("#editFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
    $.ajax({
      type: "POST",
      url: "deleteTeacher.php",
      data: {
        "teacherId": $("#teacherList").val()
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
