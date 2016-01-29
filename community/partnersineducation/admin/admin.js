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
          console.log(response);
        }
    });

});
