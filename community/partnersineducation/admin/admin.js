if (!window.File || !window.Blob || !window.FileList || !window.FileReader || !window.FormData) {
    alert('Please use Google Chrome to use this page!');
    //This stops the execution of this script
    throw new Error('Please use Google Chrome to use this page!');
}

$("#addForm").on("submit", function(event){
    event.preventDefault();

    var data = new FormData($('form')[0]);

    $.ajax({
        url: "addPartner.php",
        type: 'POST',
        processData: false,
        contentType: false,
        data: data,
        success: function(response) {
            console.log(response);
        }
    });

});