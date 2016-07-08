function link(title, path) {
  this.title = title;
  this.path = path;
}

$('#navForm').submit(function(event) {
  event.preventDefault();
  $("#navFormOut").html("<div class='alert alert-warning fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i><i class='fa fa-spinner fa-spin'></i> Saving Data</div>");
  var category = $("#category").val();
  var json = generateJsonFromForm();
  $.ajax({
    type: 'POST',
    url: 'saveCategory.php',
    data: {
      'category': category,
      'json': json
    },
    cache: false,
    success: function(data) {
      $('#navFormOut').html(data);
    }
  });
});

function generateJsonFromForm() {
  var arr = [];
  for(var i = 0; i < numLinks(); i++) {
    var title = $('#title' + i).val();
    var path = $('#path' + i).val();
    arr[i] = new link(title, path);
  }
  return JSON.stringify(arr);
}

function numLinks() {
  return $("#navFormLinks div.row").length;
}

function addLink() {
  var index = numLinks();

  var inputRow = '<div class="row">';

  inputRow += '<div class="col-xs-12 col-sm-6">'
  inputRow += '<div class="form-group">';
  inputRow += '<label for="title' + index + '" class="control-label">Title</label>';
  inputRow += '<input type="text" class="form-control" name="title' + index + '" id="title' + index + '" placeholder="Link Title"/>';
  inputRow += '</div>';
  inputRow += '</div>';

  inputRow += '<div class="col-xs-12 col-sm-6">'
  inputRow += '<div class="form-group">';
  inputRow += '<label for="path' + index + '" class="control-label">Path</label>';
  inputRow += '<input type="text" class="form-control" name="path' + index + '" id="path' + index + '" placeholder="Link Path"/>';
  inputRow += '</div>';
  inputRow += '</div>';

  inputRow += '<div class="col-xs-12 col-sm-6">';
  inputRow += '<div class="form-group">';
  inputRow += '<button type="button" class="btn btn-danger" title="Remove Link" onclick="removeLink(' + index + ')"><i class="fa fa-times"></i></button>';
  inputRow += '<button type="button" class="btn btn-default" title="Move Link Up" onclick="moveLinkUp(' + index + ')"><i class="fa fa-arrow-up"></i></button>';
  inputRow += '<button type="button" class="btn btn-default" title="Move Link Down" onclick="moveLinkDown(' + index + ')"><i class="fa fa-arrow-down"></i></button>';
  inputRow += '</div>';
  inputRow += '</div>';

  inputRow += '</div>';

  $('#navFormLinks').append(inputRow);

}

function removeLink(index) {
  for(var i = index; i < numLinks() - 1; i++) {
    var j = i + 1;
    var next = $('#title' + j).val();
    $('#title' + i).val($('#title' + (i + 1)).val());
    $('#path' + i).val($('#path' + (i + 1)).val());
  }
  $("#navFormLinks div.row").last().remove();
}

function moveLinkUp(index) {
  if(index > 0) {
    var j = index - 1;
    var tempT = $('#title' + index).val();
    var tempP = $('#path' + index).val();
    $('#title' + index).val($('#title' + j).val());
    $('#path' + index).val($('#path' + j).val());
    $('#title' + j).val(tempT);
    $('#path' + j).val(tempP);
  }
}

function moveLinkDown(index) {
  if(index < numLinks() - 1) {
    var j = index + 1;
    var tempT = $('#title' + index).val();
    var tempP = $('#path' + index).val();
    $('#title' + index).val($('#title' + j).val());
    $('#path' + index).val($('#path' + j).val());
    $('#title' + j).val(tempT);
    $('#path' + j).val(tempP);
  }
}

function generateLinkHtml(link, index) {
  var res = '<div class="row">';

  res += '<div class="col-xs-12 col-sm-6">'
  res += '<div class="form-group">';
  res += '<label for="title' + index + '" class="control-label">Title</label>';
  res += '<input type="text" class="form-control" name="title' + index + '" id="title' + index + '" placeholder="Link Title" value="' + link.title + '"/>';
  res += '</div>';
  res += '</div>';

  res += '<div class="col-xs-12 col-sm-6">'
  res += '<div class="form-group">';
  res += '<label for="path' + index + '" class="control-label">Path</label>';
  res += '<input type="text" class="form-control" name="path' + index + '" id="path' + index + '" placeholder="Link Path" value="' + link.path + '"/>';
  res += '</div>';
  res += '</div>';

  res += '<div class="col-xs-12 col-sm-6">';
  res += '<div class="form-group">';
  res += '<button type="button" class="btn btn-danger" title="Remove Link" onclick="removeLink(' + index + ')"><i class="fa fa-times"></i></button>';
  res += '<button type="button" class="btn btn-default" title="Move Link Up" onclick="moveLinkUp(' + index + ')"><i class="fa fa-arrow-up"></i></button>';
  res += '<button type="button" class="btn btn-default" title="Move Link Down" onclick="moveLinkDown(' + index + ')"><i class="fa fa-arrow-down"></i></button>';
  res += '</div>';
  res += '</div>';

  res += '</div>';
  return res;
}

function loadCategory() {
  $.ajax({
    type: 'POST',
    url: 'loadCategory.php',
    data: {
      'category': $('#category').val()
    },
    cache: false,
    success: function(data) {
      var cat = jQuery.parseJSON(data);
      $('#navFormLinks').html('');
      for(var i = 0; i < cat.length; i++) {
        $('#navFormLinks').append(generateLinkHtml(cat[i], i));
      }
    }
  });
}

$('#category').on('change', loadCategory);

$(document).ready(function() {
  loadCategory();
});
