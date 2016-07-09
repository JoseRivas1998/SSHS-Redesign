var tinyMceCss = [
  "/css/font-awesome-4.6.1/css/font-awesome.min.css",
  "/css/tinymce.css"
];

$("#addPath").click(function(event) {
  event.preventDefault();
  var title = $("#title").val();
  title = title.trim().toLowerCase().replace(/[ \t]+/g, '-');
  title = encodeURI(title);
  var path = $("#path").val().trim().toLowerCase();
  if(path.length > 0) {
    path += "/";
  }
  path += title;
  $("#path").val(path);
});

function checkChange() {
  if($('#catCheck').is(':checked')) {
    $('#category').prop('disabled', false);
  } else {
    $('#category').prop('disabled', 'disabled');
  }
}

function loadList() {
  $('#pageList').load('loadList.php', function() {
    tinyMceInit("#content", tinyMceCss, function() {
      listChange();
    });
  });
}

function listChange() {
  $.ajax({
    url: "formFromList.php",
    type: "POST",
    dataType: "json",
    data: {
      id: $("#pageList").val()
    },
    cache: false,
    success: function(data) {
      $('#title').val(data['title']);
      $('#path').val(data['path']);
      $(tinymce.get('content').getBody()).html(data["content"]);
      tinymce.triggerSave();
      if(data['sidenav'] === 0) {
        $('#catCheck').prop('checked', false);
      } else {
        $('#catCheck').prop('checked', true);
        $('#category').val(data['sidenav']);
      }
      checkChange();
    }
  });
}

$("#catCheck").change(checkChange);
$("#pageList").change(listChange);

$(document).ready(function() {
  loadList();
  checkChange();
});

$("#editPageForm").submit(function(event) {
  event.preventDefault();
  $("#formOut").html("<div class='alert alert-warning fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i><i class='fa fa-spinner fa-spin'></i> Saving Changes</div>");
  $("#path").val(encodeURI($("#path").val().trim().toLowerCase().replace(/[ \t]+/g, '-')));
  while($("#path").val().charAt(0) === '/') {
    $("#path").val($("#path").val().substr(1));
  }
  tinymce.triggerSave();
  var data = new FormData($('form')[0]);
  $.ajax({
    url: "editPage.php",
    processData: false,
    contentType: false,
    type: "POST",
    data: data,
    success: function(data) {
      $("#formOut").html(data);
    }
  });
});

$("#deletePage").click(function(event) {
  event.preventDefault();
  if(confirm("Are you sure you want to delete the page?")) {
    $("#formOut").html("<div class='alert alert-warning fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i><i class='fa fa-spinner fa-spin'></i> Deleting Page</div>");
    $.ajax({
      url: "deletePage.php",
      type: "POST",
      data: {
        id: $("#pageList").val()
      },
      cache: false,
      success: function(data) {
        $("#formOut").html(data);
        loadList();
      }
    });
  }
});
