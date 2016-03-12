$(document).ready(function() {
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "loadSectionToggled.php",
    cache: false,
    success: function(data) {
      $("#quick").prop("checked", data["quick"] == 1);
      $("#whatsNew").prop("checked", data["whatsNew"] == 1);
      $("#district").prop("checked", data["district"] == 1);
      $("#aboutUs").prop("checked", data["aboutUs"] == 1);
    }
  });
});

$("#sectionBoxes").on("submit", function(event) {
  $("#result").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Saving</div>");
  var input = new Object();
  if($("#quick").is(":checked")) {
    input["quick"] = 1;
  } else {
    input["quick"] = 0;
  }
  if($("#whatsNew").is(":checked")) {
    input["whatsNew"] = 1;
  } else {
    input["whatsNew"] = 0;
  }
  if($("#district").is(":checked")) {
    input["district"] = 1;
  } else {
    input["district"] = 0;
  }
  if($("#aboutUs").is(":checked")) {
    input["aboutUs"] = 1;
  } else {
    input["aboutUs"] = 0;
  }
  $.ajax({
    type: "POST",
    url: "saveHomeSection.php",
    data: {
      "quick": input["quick"],
      "whatsNew": input["whatsNew"],
      "district": input["district"],
      "aboutUs": input["aboutUs"]
    },
    cache: false,
    success: function(data) {
      $("#result").html(data);
    }
  });
});
