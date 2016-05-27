<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Sign Up | Game Development Club | Santa Susana High School</title>
    <style>
      .input-group {
        padding-bottom: 10px;
      }
      .required,.fa-exclamation-circle {
        color: #f00;
      }
      .fa-check {
        color: #0f0;
      }
    </style>
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
            <?php
              include('left-nav.php');
            ?>
            <div class="col-xs-12 col-sm-9">
              <div class="section-title">Sign Up</div>
              <form action="signupPost.php" method="post" id="signup">
                <label for="fName">Full Name<span class="required">*</span> <span id="resName"></span></label>
                <div class="input-group">
      						<span class="input-group-addon" id="fNameAddon"><i class="fa fa-user fa-fw"></i></span>
                  <input type="text" class="form-control" name="fName" id="fName" placeholder="First &amp; Last Name" aria-describedby="fNameAddon">
                </div>
                <label for="email">Email<span class="required">*</span> <span id="resEmail"></span></label>
                <div class="input-group">
      						<span class="input-group-addon" id="emailAddon"><i class="fa fa-at fa-fw"></i></span>
                  <input type="email" class="form-control" name="email" id="email" placeholder="example@example.com" aria-describedby="emailAddon">
                </div>
                <label for="github"><a href="https://github.com" target="_blank">Github</a> Username<span class="required">*</span> <span id="resGithub"></span></label>
                <div class="input-group">
      						<span class="input-group-addon" id="githubAddon"><i class="fa fa-github fa-fw"></i></span>
                  <input type="text" class="form-control" name="github" id="github" placeholder="githubusername" aria-describedby="githubAddon">
                </div>
                <label for="phone">Phone Number</label>
                <div class="input-group">
      						<span class="input-group-addon" id="phoneAddon"><i class="fa fa-phone fa-fw"></i></span>
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="(xxx) xxx-xxxx" aria-describedby="phoneAddon">
                </div>
                <label for="skype">Skype</label>
                <div class="input-group">
      						<span class="input-group-addon" id="skypeAddon"><i class="fa fa-skype fa-fw"></i></span>
                  <input type="text" class="form-control" name="skype" id="skype" placeholder="skypeusername" aria-describedby="skypeAddon">
                </div>
                <div class="form-group" id="subBtn">
                  <input type="submit" class="form-control btn btn-primary">
                </div>
              </form>
              <div class="required">* Required</div>
              <div id="formRes"></div>
            </div>
        </div>
    </div>
</section>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/inc/javascript.php";
include($path);
?>
<script>
  $('#signup').submit(function(event) {
    $("#formRes").html("<div class='alert alert-warning fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i><i class='fa fa-spinner fa-spin'></i> Signing Up</div>");
    event.preventDefault();
  	var data = new FormData($('form')[0]);
    $.ajax({
      url: $('#signup').attr('action'),
      type: $('#signup').attr('method'),
      dataType: 'json',
      processData: false,
      contentType: false,
      data: data,
      success: function(data) {
        console.log(data);
        $('#formRes').html(data['resForm']);
        $('#resName').html(data['resName']);
        $('#resEmail').html(data['resEmail']);
        $('#resGithub').html(data['resGithub']);
        if(data['success']) {
          $('#signup').slideUp();
        }
      }
    });
  });
</script>
</body>

</html>
