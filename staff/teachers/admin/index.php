<?php
include($_SERVER['DOCUMENT_ROOT'] . '/inc/google/loadApi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Teachers Page Admin | Santa Susana High School</title>
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
                <div class="section-title">Teachers Page Admin</div>
                <div class="row" id="forms">
                    <div class="col-xs-12 col-sm-6">
                      <div class="section-title">Add a New Teacher</div>
                      <form role="form" method="post" id="addForm" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="newFirstName" class="control-label">First Name<span class="red">*</span></label>
                          <input type="text" class="form-control" id="newFirstName" name="newFirstName" placeholder="First Name">
                        </div>
                        <div class="form-group">
                          <label for="newLastName" class="control-label">Last Name<span class="red">*</span></label>
                          <input type="text" class="form-control" id="newLastName" name="newLastName" placeholder="Last name">
                        </div>
                        <div class="form-group">
                          <label for="newEmail" class="control-label">Email<span class="red">*</span></label>
                          <input type="email" class="form-control" id="newEmail" name="newEmail" placeholder="last.first@simivalleyusd.org">
                        </div>
                        <div class="form-group">
                          <label for="newFChair" class="checkbox-inline"><input type="checkbox" id="newFChair" name="newFChair" value="">Founding Teacher</label>
                          <label for="newDChair" class="checkbox-inline"><input type="checkbox" id="newDChair" name="newDChair" value="">Department Chair</label>
                          <label for="newAChair" class="checkbox-inline"><input type="checkbox" id="newAChair" name="newAChair" value="">Academy Chair</label>
                        </div>
                        <div class="form-group">
                          <label for="newImg" class="control-label">Image</label>
                          <input type="file" class="form-control" id="newImg" name="newImg" accept="image/*">
                        </div>
                        <div class="form-group">
                          <label for="newClass1" class="control-label">Class 1<span class="red">*</span></label>
                          <input type="text" class="form-control" id="newClass1" name="newClass1" placeholder="Class 1">
                        </div>
                        <div class="form-group">
                          <label for="newClass2" class="control-label">Class 2</label>
                          <input type="text" class="form-control" id="newClass2" name="newClass2" placeholder="Class 2">
                        </div>
                        <div class="form-group">
                          <label for="newClass3" class="control-label">Class 3</label>
                          <input type="text" class="form-control" id="newClass3" name="newClass3" placeholder="Class 3">
                        </div>
                        <div class="form-group">
                          <label for="newClass4" class="control-label">Class 4</label>
                          <input type="text" class="form-control" id="newClass4" name="newClass4" placeholder="Class 4">
                        </div>
                        <div class="form-group">
                          <label for="newClass5" class="control-label">Class 5</label>
                          <input type="text" class="form-control" id="newClass5" name="newClass5" placeholder="Class 5">
                        </div>
                        <div class="form-group">
                          <label for="newClass6" class="control-label">Class 6</label>
                          <input type="text" class="form-control" id="newClass6" name="newClass6" placeholder="Class 6">
                        </div>
                        <div class="form-group">
                          <label for="newClass7" class="control-label">Class 7</label>
                          <input type="text" class="form-control" id="newClass7" name="newClass7" placeholder="Class 7">
                        </div>
                        <div class="form-group">
                          <label for="newAcad" class="control-label">Select an Academy<span class="red">*</span></label>
                          <select name="newAcad" id="newAcad" class="form-control">
                            <option value="English" selected>English</option>
                            <option value="Math">Math</option>
                            <option value="Performing Arts">Performing Arts</option>
                            <option value="Physical Education">Physical Education</option>
                            <option value="Science">Science</option>
                            <option value="Social Studies">Social Studies</option>
                            <option value="Special Education">Special Education</option>
                            <option value="Technology">Technology</option>
                            <option value="Visual Arts">Visual Arts</option>
                            <option value="World Languages">World Languages</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="link1Text" class="control-label">Link 1 Text</label>
                          <input type="text" class="form-control" id="link1Text" name="link1Text" placeholder="Link 1 Text">
                        </div>
                        <div class="form-group">
                          <label for="link1href" class="control-label">Link 1 URL</label>
                          <input type="text" class="form-control" id="link1href" name="link1href" placeholder="Link 1 URL">
                        </div>
                        <div class="form-group">
                          <label for="link2Text" class="control-label">Link 2 Text</label>
                          <input type="text" class="form-control" id="link2Text" name="link2Text" placeholder="Link 2 Text">
                        </div>
                        <div class="form-group">
                          <label for="link2href" class="control-label">Link 2 URL</label>
                          <input type="text" class="form-control" id="link2href" name="link2href" placeholder="Link 2 URL">
                        </div>
                        <div class="form-group">
                          <label for="linkText" class="control-label">Link 3 Text</label>
                          <input type="text" class="form-control" id="link3Text" name="link3Text" placeholder="Link 3 Text">
                        </div>
                        <div class="form-group">
                          <label for="link3href" class="control-label">Link 3 URL</label>
                          <input type="text" class="form-control" id="link3href" name="link3href" placeholder="Link 3 URL">
                        </div>
                        <div class="form-group">
                          <input type="submit" class="form-control btn btn-primary" value="Send">
                        </div>
                      </form>
                      <div id="newFormOut"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="section-title">Edit Existing Teacher</div>
                      <form role="form" method="post" id="editForm" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="teacherList" class="control-label">Select a Teacher to Edit</label>
                          <select name="teacherList" id="teacherList" class="form-control"></select>
                        </div>
                          <div class="form-group">
                            <label for="editFirstName" class="control-label">First Name<span class="red">*</span></label>
                            <input type="text" class="form-control" id="editFirstName" name="editFirstName" placeholder="First Name">
                          </div>
                          <div class="form-group">
                            <label for="editLastName" class="control-label">Last Name<span class="red">*</span></label>
                            <input type="text" class="form-control" id="editLastName" name="editLastName" placeholder="Last name">
                          </div>
                          <div class="form-group">
                            <label for="editEmail" class="control-label">Email<span class="red">*</span></label>
                            <input type="email" class="form-control" id="editEmail" name="editEmail" placeholder="last.first@simivalleyusd.org">
                          </div>
                          <div class="form-group">
                            <label for="editFChair" class="checkbox-inline"><input type="checkbox" id="editFChair" name="editFChair" value="">Founding Teacher</label>
                            <label for="editDChair" class="checkbox-inline"><input type="checkbox" id="editDChair" name="editDChair" value="">Department Chair</label>
                            <label for="editAChair" class="checkbox-inline"><input type="checkbox" id="editAChair" name="editAChair" value="">Academy Chair</label>
                          </div>
                          <div class="form-group">
                            <label for="editImg" class="control-label">Image</label>
                            <input type="file" class="form-control" id="editImg" name="editImg" accept="image/*">
                          </div>
                          <div class="checkbox">
                            <label for="removeImg"><input type="checkbox" id="removeImg" name="removeImg">Remove Current Image</label>
                          </div>
                          <div class="form-group">
                            <img alt="Current Image" id="curImg" class="img-responsive">
                          </div>
                          <div class="form-group">
                            <label for="editClass1" class="control-label">Class 1<span class="red">*</span></label>
                            <input type="text" class="form-control" id="editClass1" name="editClass1" placeholder="Class 1">
                          </div>
                          <div class="form-group">
                            <label for="editClass2" class="control-label">Class 2</label>
                            <input type="text" class="form-control" id="editClass2" name="editClass2" placeholder="Class 2">
                          </div>
                          <div class="form-group">
                            <label for="editClass3" class="control-label">Class 3</label>
                            <input type="text" class="form-control" id="editClass3" name="editClass3" placeholder="Class 3">
                          </div>
                          <div class="form-group">
                            <label for="editClass4" class="control-label">Class 4</label>
                            <input type="text" class="form-control" id="editClass4" name="editClass4" placeholder="Class 4">
                          </div>
                          <div class="form-group">
                            <label for="editClass5" class="control-label">Class 5</label>
                            <input type="text" class="form-control" id="editClass5" name="editClass5" placeholder="Class 5">
                          </div>
                          <div class="form-group">
                            <label for="editClass6" class="control-label">Class 6</label>
                            <input type="text" class="form-control" id="editClass6" name="editClass6" placeholder="Class 6">
                          </div>
                          <div class="form-group">
                            <label for="editClass7" class="control-label">Class 7</label>
                            <input type="text" class="form-control" id="editClass7" name="editClass7" placeholder="Class 7">
                          </div>
                          <div class="form-group">
                            <label for="editAcad" class="control-label">Select an Academy<span class="red">*</span></label>
                            <select name="editAcad" id="editAcad" class="form-control">
                              <option value="English" selected>English</option>
                              <option value="Math">Math</option>
                              <option value="Performing Arts">Performing Arts</option>
                              <option value="Physical Education">Physical Education</option>
                              <option value="Science">Science</option>
                              <option value="Social Studies">Social Studies</option>
                              <option value="Special Education">Special Education</option>
                              <option value="Technology">Technology</option>
                              <option value="Visual Arts">Visual Arts</option>
                              <option value="World Languages">World Languages</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="editlink1Text" class="control-label">Link 1 Text</label>
                            <input type="text" class="form-control" id="editlink1Text" name="editlink1Text" placeholder="Link 1 Text">
                          </div>
                          <div class="form-group">
                            <label for="editlink1href" class="control-label">Link 1 URL</label>
                            <input type="text" class="form-control" id="editlink1href" name="editlink1href" placeholder="Link 1 URL">
                          </div>
                          <div class="form-group">
                            <label for="editlink2Text" class="control-label">Link 2 Text</label>
                            <input type="text" class="form-control" id="editlink2Text" name="editlink2Text" placeholder="Link 2 Text">
                          </div>
                          <div class="form-group">
                            <label for="editlink2href" class="control-label">Link 2 URL</label>
                            <input type="text" class="form-control" id="editlink2href" name="editlink2href" placeholder="Link 2 URL">
                          </div>
                          <div class="form-group">
                            <label for="editlinkText" class="control-label">Link 3 Text</label>
                            <input type="text" class="form-control" id="editlink3Text" name="editlink3Text" placeholder="Link 3 Text">
                          </div>
                          <div class="form-group">
                            <label for="editlink3href" class="control-label">Link 3 URL</label>
                            <input type="text" class="form-control" id="editlink3href" name="editlink3href" placeholder="Link 3 URL">
                          </div>
                          <div class="form-group">
                            <input type="submit" class="form-control btn btn-primary" value="Send">
                          </div>
                        </form>
                        <div id="editFormOut"></div>
                        <button class="btn btn-default" id="deleteTeacher">Delete Teacher</button>
                        <button class="btn btn-default" id="refreshList">Refresh Teacher List</button>
                    </div>
                </div>
                <div class="col-xs-12">
                  <div class="red">*Required</div>
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
<script src="admin.js"></script>
</body>

</html>
