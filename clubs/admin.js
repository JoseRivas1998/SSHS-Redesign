$("#newForm").submit(function (event) {
    $("#newFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
    var form = $("#newForm").children();
    $.ajax({
        type: "POST",
        url: "addClub.php",
        data: {
            "name": form.find("input[name='newName']").val(),
            "website": form.find("input[name='newWebsite']").val(),
            "president": form.find("input[name='newPresident']").val(),
            "advisor": form.find("input[name='newAdvisor']").val(),
            "time": form.find("input[name='newTime']").val(),
            "room": form.find("input[name='newRoom']").val()
        },
        cache: false,
        success: function (data) {
            $("#newFormOut").html(data);
        }
    });
});
var clubId;
function onListChange() {
    var form = $("#editForm");
    if ($("#clubList").val() < 1) {
        clubId = 1;
    } else {
        clubId = $("#clubList").val();
    }
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "clubInfoToForm.php",
        data: {
            "clubId": clubId
        },
        cache: false,
        success: function (data) {
            $("#editName").val(data["clubName"]);
            $("#editWebsite").val(data["clubSite"]);
            if (data["clubApproved"] == 1) {
                document.getElementById("editApproved").checked = true;
            } else {
                document.getElementById("editApproved").checked = false;
            }
            $("#editPresident").val(data["clubPresident"]);
            $("#editAdvisor").val(data["clubAdvisor"]);
            $("#editTime").val(data["clubTime"]);
            $("#editRoom").val(data["clubRoom"]);
        }
    });
}
$("#clubList").on('change', function () {
    onListChange();
});
$("#editForm").submit(function (event) {
    $("#editFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>")
    var form = $("#editForm");
    if ($("#clubList").val() < 1) {
        clubId = 1;
    } else {
        clubId = $("#clubList").val();
    }
    var approvedInt;
    if (document.getElementById("editApproved").checked) {
        approvedInt = 1;
    } else {
        approvedInt = 0;
    }
    $.ajax({
        url: 'editClub.php',
        type: 'POST',
        data: {
            "clubId": clubId,
            "name": form.find("input[name='editName']").val(),
            "website": form.find("input[name='editWebsite']").val(),
            "president": form.find("input[name='editPresident']").val(),
            "advisor": form.find("input[name='editAdvisor']").val(),
            "time": form.find("input[name='editTime']").val(),
            "room": form.find("input[name='editRoom']").val(),
            "approved": approvedInt
        },
        cache: false,
        success: function (data) {
            $("#editFormOut").html(data);
        }
    });
});
$(document).ready(function () {
    $("#clubList").load("loadClubList.php", function () {
        onListChange();
    });
});

$("#refreshClub").on('click', function () {
    $("#clubList").load("loadClubList.php", function () {
        onListChange();
    });
});

$("#deleteClub").on('click', function () {
  if(confirm("Delete Club?")){
      $("#editFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>")
      var form = $("#editForm");
      if ($("#clubList").val() < 1) {
          clubId = 1;
      } else {
          clubId = $("#clubList").val();
      }
      var approvedInt;
      if (document.getElementById("editApproved").checked) {
          approvedInt = 1;
      } else {
          approvedInt = 0;
      }
      $.ajax({
          url: 'deleteClub.php',
          type: 'POST',
          data: {
              "clubId": clubId
          },
          cache: false,
          success: function (data) {
              $("#editFormOut").html(data);
              $("#clubList").load("loadClubList.php", function () {
                  onListChange();
              });
          }
      });
    } else {
      $("#editFormOut").html("<div class='alert alert-danger'>Deletion Cancelled</div>")
    }
});
