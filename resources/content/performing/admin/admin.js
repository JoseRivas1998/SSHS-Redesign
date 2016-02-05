$("#addForm").submit(function(event) {
  event.preventDefault();
  var data = new FormData($('form')[0]);
  console.log(data);
});
