<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/inc/google/loadApi.php');

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Support Staff Admin | Santa Susana High School</title>
</head>

<body>
<header>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/topnavbar.php";
    include($path);
    ?>
</header>

<section id="content-wrapper">
    <div class="container" id="content-container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">Support Staff Admin</div>
                <div class="row" id="forms">
                    <div class="col-xs-12 col-sm-6">
                        <div class="section-title">Add New Support Staff Member</div>
                        <form role="form" action="javascript:void(0)" id="newForm">
                            <div class="form-group">
                                <label for="newFirstName" class="control-label">First Name<span
                                        class="red">*</span></label>
                                <input type="text" class="form-control" id="newFirstName" name="newFirstName"
                                       placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label for="newLastName" class="control-label">Last Name<span
                                        class="red">*</span></label>
                                <input type="text" class="form-control" id="newLastName" name="newLastName"
                                       placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label for="newEmail" class="control-label">Email<span class="red">*</span></label>
                                <input type="email" class="form-control" id="newEmail" name="newEmail"
                                       placeholder="email@simivalleyusd.org">
                            </div>
                            <div class="form-group">
                                <label for="newRole" class="control-label">Position<span class="red">*</span></label>
                                <input type="text" class="form-control" id="newRole" name="newRole"
                                       placeholder="Position">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary" value="Send">
                            </div>
                        </form>
                        <span class="red">* Required</span>
                        <div id="newFormOut"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="section-title">Adit Existing Support Staff Member</div>
                        <form role="form" action="javascript:void(0)" id="editForm">
                            <div class="form-group">
                                <label for="editStaffList" class="control-label">Select Support Staff Member to
                                    Edit</label>
                                <select name="editStaffList" id="editStaffList" class="form-control"></select>
                            </div>
                            <div class="form-group">
                                <label for="editFirstName" class="control-label">Fist Name<span
                                        class="red">*</span></label>
                                <input type="text" class="form-control" id="editFirstName" name="editFirstName"
                                       placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label for="editLastName" class="control-label">Last Name<span
                                        class="red">*</span></label>
                                <input type="text" class="form-control" id="editLastName" name="editLastName"
                                       placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label for="editEmail" class="control-label">Email<span class="red">*</span></label>
                                <input type="text" class="form-control" id="editEmail" name="editEmail"
                                       placeholder="email@simivalleyusd.org">
                            </div>
                            <div class="form-group">
                                <label for="editPosition" class="control-label">Position<span
                                        class="red">*</span></label>
                                <input type="text" class="form-control" id="editPosition" name="editPosition"
                                       placeholder="Position">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary">
                            </div>
                        </form>
                        <span class="red">* Required</span>
                        <div id="editFormOut"></div>
                        <button class="btn btn-default" id="deleteStaff">Delete Support Staff Member</button>
                        <button class="btn btn-default" id="refreshStaff">Refresh Support Staff List</button>
                    </div>
                </div>
                <div class="col-xs-12" id="signOutBtn">
                    <button class="btn btn-default" onclick="signOut();">Sign Out</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/inc/javascript.php";
include($path);
?>
<script src="admin.min.js"></script>
</body>

</html>
