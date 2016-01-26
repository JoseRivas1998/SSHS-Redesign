$("#newForm").submit(function(event) {
  authenticate("#newFormOut", function() {
    var form = $("#newForm").children();
    $.ajax({
      type: "POST",
      url: "addSupportStaff.php",
      data: {
        "newFirstName": form.find("input[name='newFirstName']").val(),
        "newLastName": form.find("input[name='newLastName']").val(),
        "newEmail": form.find("input[name='newEmail']").val(),
        "newRole": form.find("input[name='newRole']").val(),
        "userEmail": profile.getEmail().substring(0 , profile.getEmail().indexOf("@"))
      },
      cache: false,
      success: function(data) {
        $("#newFormOut").html(data);
      }
    });
  });
});

function loadStaffList() {
  $("#editStaffList").load("loadStaffList.php", function() {
    onListChange();
  });
}

function onListChange() {
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "staffInfoToForm.php",
    data: {
      "staffId": $("#editStaffList").val()
    },
    cache: false,
    success: function(data) {
      $("#editFirstName").val(data["firstName"]);
      $("#editLastName").val(data["lastName"]);
      $("#editEmail").val(data["email"]);
      $("#editPosition").val(data["role"]);
    }
  });
}

$(document).ready(function() {
  loadStaffList();
});

$("#editStaffList").on('change', onListChange);