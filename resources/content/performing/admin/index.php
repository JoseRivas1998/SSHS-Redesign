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
    <title>Performances Page Admin | Santa Susana High School</title>
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
                <div class="section-title">Performances Page Admin</div>
                <div class="row" id="forms">
                  <div class="col-xs-12 col-sm-6">
                    <div class="section-title">Add a New Show</div>
                    <form role="form" method="post" id="addForm" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="title" class="control-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="poster" class="control-label">Poster</label>
                        <input type="file" class="form-control" id="poster" name="poster" accept="image/*">
                      </div>
                      <div class="form-group">
                        <label for="show1" class="control-label">First Show</label>
                        <input type="datetime-local" class="form-control" id="show1" name="show1">
                      </div>
                      <div class="form-group">
                        <label for="show2" class="control-label">Second Show</label>
                        <input type="datetime-local" class="form-control" id="show2" name="show2">
                      </div>
                      <div class="form-group">
                        <label for="show3" class="control-label">Third Show</label>
                        <input type="datetime-local" class="form-control" id="show3" name="show3">
                      </div>
                      <div class="form-group">
                        <label for="show4" class="control-label">Fourth Show</label>
                        <input type="datetime-local" class="form-control" id="show4" name="show4">
                      </div>
                      <div class="form-group">
                        <label for="show5" class="control-label">Fifth Show</label>
                        <input type="datetime-local" class="form-control" id="show5" name="show5">
                      </div>
                      <div class="form-group">
                        <label for="show6" class="control-label">Sixth Show</label>
                        <input type="datetime-local" class="form-control" id="show6" name="show6">
                      </div>
                      <div class="form-group">
                        <label for="ticket1" class="control-label">Ticket 1 Price</label>
                        <input type="text" class="form-control" id="ticket" name="ticket1" placeholder="Ticket 1 Price">
                      </div>
                      <div class="form-group">
                        <label for="ticket2" class="control-label">Ticket 2 Price</label>
                        <input type="text" class="form-control" id="ticket2" name="ticket2" placeholder="Ticket 2 Price">
                      </div>
                      <div class="form-group">
                        <label for="ticket3" class="control-label">Ticket 3 Price</label>
                        <input type="text" class="form-control" id="ticket3" name="ticket3" placeholder="Ticket 3 Price">
                      </div>
                      <div class="form-group">
                        <label for="ticket4" class="control-label">Ticket 4 Price</label>
                        <input type="text" class="form-control" id="ticket4" name="ticket4" placeholder="Ticket 4 Price">
                      </div>
                      <div class="form-group">
                        <label for="" class="control-label"></label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" value="Send">
                      </div>
                    </form>
                    <div id="newFormOut"></div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="section-title">Edit an Existing Show</div>
                  </div>
                    <!-- <form role="form" action="javascript:void(0)" id="">

                    </form> -->
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
