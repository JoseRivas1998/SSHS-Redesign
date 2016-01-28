$("#newForm").submit(function (event) {
    $("#newFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
    var form = $("#newForm").children();
    var publishDate = formatDateTimeLocal(form.find("input[name='publish']").val());
    var showUntilDate = formatDateTimeLocal(form.find("input[name='showUntil']").val());
    $.ajax({
        type: "POST",
        url: "addActionBar.php",
        data: {
            "barText": form.find("input[name='barText']").val(),
            "barLink": form.find("input[name='barLink']").val(),
            "publishDate": publishDate,
            "showUntilDate": showUntilDate,
        },
        cache: false,
        success: function (data) {
            $("#newFormOut").html(data);
            loadBarList();
        }
    });
});

function loadBarList() {
    $("#editBarList").load("loadBarList.php", function () {
        onListChange();
    });
}

function onListChange() {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "barInfoToForm.php",
        data: {
            "barId": $("#editBarList").val()
        },
        cache: false,
        success: function (data) {
            $("#editText").val(data["barText"]);
            $("#editLink").val(data["barLink"]);
            $("#editPublish").val(dateTimeToDateTimeLocal(data["barPublishDate"]));
            $("#editShowUntil").val(dateTimeToDateTimeLocal(data["barShowUntil"]));
        }
    });
}

$(document).ready(function () {
    loadBarList();
});

$("#editBarList").on('change', function () {
    onListChange();
});

$("#editForm").submit(function (event) {
    $("#editFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");
    var form = $("#editForm").children();
    var publishDate = formatDateTimeLocal(form.find("input[name='editPublish']").val(), false);
    var showUntilDate = formatDateTimeLocal(form.find("input[name='editShowUntil']").val(), false);
    $.ajax({
        type: "POST",
        url: "editActionBar.php",
        data: {
            "barId": $("#editBarList").val(),
            "barText": form.find("input[name='editText']").val(),
            "barLink": form.find("input[name='editLink']").val(),
            "publishDate": publishDate,
            "showUntilDate": showUntilDate,
        },
        cache: false,
        success: function (data) {
            $("#editFormOut").html(data);
        }
    });
});

$("#refreshActionBarList").on('click', loadBarList);

$("#deleteActionBar").on('click', function (event) {
    if (!confirm("Delete the Action Bar?")) {
        $("#editFormOut").html("<div class='alert alert-danger'>You cancelled deletion.</div>")
    } else {
        $("#editFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>");

        $.ajax({
            type: "POST",
            url: "deleteActionBar.php",
            data: {
                "barId": $("#editBarList").val(),
            },
            cache: false,
            success: function (data) {
                $("#editFormOut").html(data);
                loadBarList();
            }
        });
    }
});
