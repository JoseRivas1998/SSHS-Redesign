$("#newForm").submit(function(event) {
  var auth2 = gapi.auth2.getAuthInstance();
  if(!(auth2.isSignedIn.get()) || profile == null) {
    $("#newFormOut").html("<div class='alert alert-danger'>You Must Be Logged in to Google</div>");
  } else if(profile.getEmail().indexOf("@simivalleyusd.org") > -1) {
    $("#newFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
    var form = $("#newForm").children();
    var publishDate = formatDateTimeLocal(form.find("input[name='publish']").val());
    var showUntilDate = formatDateTimeLocal(form.find("input[name='showUntil']").val());
    $.ajax({
      type: "POST",
      url: "addActionBar.php",
      data: {
        "barText": form.find("input[name='barText']"),
        "barLink": form.find("input[name='barLink']"),
        "publishDate": publishDate,
        "showUntilDate": showUntilDate,
        "userEmail": profile.getEmail().substring(0 , profile.getEmail().indexOf("@"))
      },
      cache: false,
      success: function(data) {
        $("#newFormOut").html(data);
      }
    });
  } else {
    $("#newFormOut").html("<div class='alert alert-danger'>Your Email is not a Simi Valley USD account.</div>")
  }
});
