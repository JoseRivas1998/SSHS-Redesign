if (!window.File || !window.Blob || !window.FileList || !window.FileReader || !window.FormData) {
    alert('Please use Google Chrome to use this page!');
    //This stops the execution of this script
    throw new Error('Please use Google Chrome to use this page!');
}

$("#addForm").submit(function(event){
    $("#newFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
    event.preventDefault();

    var data = new FormData($('form')[0]);

    $.ajax({
        url: "addPartner.php",
        type: 'POST',
        processData: false,
        contentType: false,
        data: data,
        success: function(response) {
          $("#newFormOut").html(response);
          loadPartnerList();
        }
    });

});

$("#editForm").submit(function(event) {
    $("#editFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
    event.preventDefault();

    var data = new FormData($('form')[1]);

    $.ajax({
        url: "editPartner.php",
        type: 'POST',
        processData: false,
        contentType: false,
        data: data,
        success: function(response) {
          $("#editFormOut").html(response);
          onListChange();
        }
    });
});

function loadPartnerList() {
  $("#partnerList").load("loadPartnerList.php", function() {
    onListChange();
  });
}

function onListChange() {
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "partnerInfoToForm.php",
    data: {"partnerId": $("#partnerList").val()},
    success: function(data) {
      $("#editPartner").val(data["partner"]);
      $("#editWebsite").val(data["website"]);
      $("#editCurrentImg").html(data["curImg"]);
    }
  });
}

$(document).ready(function() {
  loadPartnerList();
});

$("#partnerList").on("change", onListChange);

$("#refreshPartnerList").on("click", loadPartnerList);

$("#deletePartner").on("click", function() {
  if(confirm("Are you sure you want to delete?")) {
    $("#editFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");

    $.ajax({
      type: "POST",
      url: "deletePartner.php",
      data: {"partnerId": $("#partnerList").val()},
      success: function(data) {
        $("#editFormOut").html(data);
        loadPartnerList();
      }
    });

  } else {
    $("#editFormOut").html("<div class='alert alert-danger'>You cancelled deletion.</div>");
  }
});
