$("#newForm").submit(function (event) {
        var form = $("#newForm").children();
        $.ajax({
            type: "POST",
            url: "addSupportStaff.php",
            data: {
                "newFirstName": form.find("input[name='newFirstName']").val(),
                "newLastName": form.find("input[name='newLastName']").val(),
                "newEmail": form.find("input[name='newEmail']").val(),
                "newRole": form.find("input[name='newRole']").val(),
            },
            cache: false,
            success: function (data) {
                $("#newFormOut").html(data);
                loadStaffList();
            }
        });
});

function loadStaffList() {
    $("#editStaffList").load("loadStaffList.php", function () {
        onListChange();
    });
}

function onListChange() {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "staffInfoToForm.php",
        data: {
            "staffId": $("#editStaffList").val()
        },
        cache: false,
        success: function (data) {
            $("#editFirstName").val(data["firstName"]);
            $("#editLastName").val(data["lastName"]);
            $("#editEmail").val(data["email"]);
            $("#editPosition").val(data["role"]);
        }
    });
}

$(document).ready(function () {
    loadStaffList();
});

$("#editStaffList").on('change', onListChange);

$("#editForm").submit(function (event) {
        var form = $("#editForm").children();
        $.ajax({
            type: "POST",
            url: "editStaff.php",
            data: {
                "staffId": $("#editStaffList").val(),
                "editFirstName": form.find("input[name='editFirstName']").val(),
                "editLastName": form.find("input[name='editLastName']").val(),
                "editEmail": form.find("input[name='editEmail']").val(),
                "editRole": form.find("input[name='editPosition']").val(),
            },
            cache: false,
            success: function (data) {
                $("#editFormOut").html(data);
            }
        });
});

$("#refreshStaff").on('click', loadStaffList);

$("#deleteStaff").on('click', function () {
    if (!confirm("Delete the Staff Member?")) {
        $("#editFormOut").html("<div class='alert alert-danger'>You cancelled deletion.</div>")
    } else {
        $.ajax({
            type: "POST",
            url: "deleteStaff.php",
            data: {
                "staffId": $("#editStaffList").val(),
            },
            cache: false,
            success: function (data) {
                $("#editFormOut").html(data);
                loadStaffList();
            }
        });
    }
});
