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
