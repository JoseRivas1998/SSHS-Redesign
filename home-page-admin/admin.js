function testIcon(iconOut, iconIn) {
  $(iconOut).html("Icon: (<i class='fa fa-" + iconIn + "'></i>) if empty, then icon code does not exist");
}

$("#newIconTestBtn").on("click", function() {
  testIcon("#newIconTest", $("#newIcon").val());
});

$("#editIconTestBtn").on("click", function() {
  testIcon("#editIconTest", $("#editIcon").val());
});

$("#newForm").submit(function(event) {
  $("#newFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data to Server</div>");

  var form = $("#newForm").children();

  $.ajax({
    type: "POST",
    url: "addHomeLink.php",
    data: {
      "newText": form.find("input[name='newText']").val(),
      "newHref": form.find("input[name='newHref']").val(),
      "newIcon": form.find("input[name='newIcon']").val(),
      "newSection": $("#newSection").val()
    },
    cache: false,
    success: function(data) {
      $("#newFormOut").html(data);
      loadLinkList();
    }
  });
});

function loadLinkList() {
  $("#linkList").load("loadLinkList.php", function() {
    onLinkListChange();
  });
}

function onLinkListChange() {
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "linkInfoToForm.php",
    data: {
      "linkId": $("#linkList").val()
    },
    cache: false,
    success: function(data) {
      $("#editText").val(data["resText"]);
      $("#editHref").val(data["resHref"]);
      $("#editIcon").val(data["resIcon"]);
      $("#editIconTest").html("");
      $("#editSection").val(data["resSection"]);
    }
  });
}

$(document).ready(loadLinkList);

$("#linkList").on("change", onLinkListChange);

$("#editForm").submit(function(event) {
  $("#editFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data to Server</div>");

  var form = $("#editForm").children();

  $.ajax({
    type: "POST",
    url: "editHomeLink.php",
    data: {
      "editText": form.find("input[name='editText']").val(),
      "editHref": form.find("input[name='editHref']").val(),
      "editIcon": form.find("input[name='editIcon']").val(),
      "editSection": $("#editSection").val(),
      "linkId": $("#linkList").val()
    },
    cache: false,
    success: function(data) {
      $("#editFormOut").html(data);
      onLinkListChange();
    }
  });
});

$("#refreshLinkList").on("click", loadLinkList);

$("#delteLink").on("click", function() {
  if(confirm("Delete the Home Page Link?")) {
    $.ajax({
      type: "POST",
      url: "deleteHomeLink.php",
      data: {
        "linkId": $("#linkList").val()
      },
      cache: false,
      success: function(data) {
        $("#editFormOut").html(data);
        loadLinkList();
      }
    });
  } else {
    $("#editFormOut").html("<div class='alert alert-danger'>You cancelled deletion.</div>")
  }
});
