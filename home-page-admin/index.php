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
    <title>Home Page Admin | Santa Susana High School</title>
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
                <div class="section-title">Home Page Admin</div>
                <div class="row" id="forms">
                  <div class="col-xs-12 col-sm-6">
                    <div class="section-title">Add Home Page Link</div>
                    <form role="form" action="javascript:void(0)" id="newForm">
                      <div class="form-group">
                        <label for="newText" class="control-label">Link Text</label>
                        <input type="text" class="form-control" name="newText" id="newText" placeholder="Link Text">
                      </div>
                      <div class="form-group">
                        <label for="newHref" class="control-label">Link URL<span class="red">*</span></label>
                        <input type="text" class="form-control" name="newHref" id="newHref" placeholder="URL">
                      </div>
                      <div class="form-group">
                        <label for="newIcon" class="control-label">Font Awesome Icon Code<span class="red">**</span></label>
                        <input type="text" class="form-control" name="newIcon" id="newIcon" placeholder="Icon Code">
                        <input type="button" id="newIconTestBtn" class="form-control btn btn-default" value="Test Icon">
                        <div id="newIconTest"></div>
                      </div>
                      <div class="form-group">
                        <label for="newSection" class="control-label">Select Section of Home Page</label>
                        <select name="newSection" id="newSection" class="form-control">
                          <option value="quick" selected>Quick Links</option>
                          <option value="whatsNew">What's New</option>
                          <option value="district">District Links</option>
                          <option value="aboutUs">About Us</option>
                        </select></div>
                      <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" value="Send">
                      </div>
                    </form>
                    <div id="newFormOut"></div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="section-title">Edit Home Page Link</div>
                    <form role="form" action="javascript:void(0)" id="editForm">
                      <div class="form-group">
                        <label for="linkList" class="control-label">Select a Link to Edit</label>
                        <select name="linkList" id="linkList" class="form-control"></select>
                      </div>
                      <div class="form-group">
                        <label for="editText" class="control-label">Link Text</label>
                        <input type="text" class="form-control" name="editText" id="editText" placeholder="Link Text">
                      </div>
                      <div class="form-group">
                        <label for="editHref" class="control-label">Link URL<span class="red">*</span></label>
                        <input type="text" class="form-control" name="editHref" id="editHref" placeholder="URL">
                      </div>
                      <div class="form-group">
                        <label for="editIcon" class="control-label">Font Awesome Icon Code<span class="red">**</span></label>
                        <input type="text" class="form-control" name="editIcon" id="editIcon" placeholder="Icon Code">
                        <input type="button" id="editIconTestBtn" class="form-control btn btn-default" value="Test Icon">
                        <div id="editIconTest"></div>
                      </div>
                      <div class="form-group">
                        <label for="editSection" class="control-label">Select Section of Home Page</label>
                        <select name="editSection" id="editSection" class="form-control">
                          <option value="quick" selected>Quick Links</option>
                          <option value="whatsNew">What's New</option>
                          <option value="district">District Links</option>
                          <option value="aboutUs">About Us</option>
                        </select></div>
                      <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" value="Send">
                      </div>
                    </form>
                    <div id="editFormOut"></div>
                    <button class="btn btn-default" id="delteLink">Delete Home Page Link</button>
                    <button class="btn btn-default" id="refreshLinkList">Refresh Link List</button>
                  </div>
                  <div class="col-xs-12">
                    <p class="red">
                      All Fields are Required
                    </p>
                    <p class="red">
                      *If the url is under "http://santasusana.org", please remove everything up to ".org" For example, "http://santasusana.org/staff/teachers" should be "staff/teachers"
                    </p>
                    <p class="red">
                      **Please check if your icon renders before sending, a reference can be found <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">here</a>.
                    </p>
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
<script src="admin.js"></script>
</body>

</html>
