<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Webmasters | Santa Susana High School</title>
    <style>
				.fa-check {
					color: rgb(0, 255, 0);
				}
				.fa-exclamation-circle {
					color: rgb(255, 0, 0);
				}

        .webmasterContent {
          text-align: right;
        }

        .webmasterContent > ul {
          padding-left: 0;
        }

        .webmasterContent > ul > li {
          list-style-type: none;
        }

        @media (max-width: 350px) {

            .webmasterContent > ul > li {
                font-size: 11px;
            }

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
        <div class="col-xs-12">
            <div class="section-title">Webmasters</div>
            <p>The SSHS website is <strong>100% designed, coded, implemented, and maintained</strong> by the students in <strong><a href="http://www.cte.santasusana.org/">Career and Technical Education (CTE)</a> Web Design</strong></p>
        </div>
        <div class="col-xs-12">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <div class="panel-title">Jos&eacute; Rodriguez-Rivas</div>
                  </div>
                  <div class="panel-body">
                      <div class="col-xs-5">
                        <img src="joseR.jpg" alt="Jos&eacute; Rodriguez-Rivas" class="img-responsive">
                      </div>
                      <div class="col-xs-7 webmasterContent">
                        <ul>
                          <li><strong>Lead Developer and Designer</strong></li>
                          <li>Email: <a href="mailto:JoseRivas823@gmail.com" onclick="return popup(this, &quot;Email Jos&eacute; Rodriguez-Rivas&quot;)">JoseRivas823@gmail.com</a></li>
                          <li>Github: <a href="https://github.com/JoseRivas1998" target="_blank">JoseRivas1998</a></li>
                          <li>Website: <a href="https://tinycountrygames.com" target="_blank">https://tinycountrygames.com</a></li>
                        </ul>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
				<div class="col-xs-12">
					<div class="section-title">Contact the Webmasters</div>
          <strong>IF YOUR EMAIL IS NOT VALID, YOUR REQUEST WILL BE IGNORED</strong>
					<form action="javascript:void(0)" role="form" id="emailForm">
						<div class="form-group">
							<label for="fullName" class="control-label">Full Name <span id="resName"></span></label>
							<input type="text" class="form-control" id="fullName" name="fullName" placeholder="First &amp; Last Name" value="">
						</div>
						<div class="form-group">
							<label for="email" class="control-label">Email <span id="resEmail"></span></label>
							<input type="email" class="form-control" id="email" name="email" placeholder="example@email.com" value="">
						</div>
						<div class="form-group">
							<label for="subject" class="control-label">Subject <span id="resSubject"></span></label>
							<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" value="">
						</div>
						<div class="form-group">
							<label for="body" class="control-label">Body <span id="resBody"></span></label>
							<textarea name="body" id="body" rows="3" class="form-control" value=""></textarea>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary form-control">
						</div>
					</form>
					<div id="resForm"></div>
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
      function size() {
          var scale = 1.4;
          $('div div.student').each(function() {
              var width = $(this).width();
              var height = width * scale;
              $(this).height(height);
          });
      }
      $(document).ready(function() {
          size();
      });
      $(window).on('resize', function() {
          size();
      });
			$("#emailForm").submit(function(event) {
				$("#resForm").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Email</div>");
				var form = $("#emailForm").children();
				$.ajax({
					url: "sendEmail.php",
					type: "POST",
					dataType: "json",
					data: {
						"name": form.find("input[name='fullName']").val(),
						"email": form.find("input[name='email']").val(),
						"subject": form.find("input[name='subject']").val(),
						"body": form.find("textarea[name='body']").val()
					},
					cache: false,
					success: function(data) {
						$("#resForm").html(data["result"]);
						$("#resName").html(data["resName"]);
						$("#resEmail").html(data["resEmail"]);
						$("#resSubject").html(data["resSubject"]);
						$("#resBody").html(data["resBody"]);
            if(data["sent"]) {
              $("#emailForm").slideUp();
            }
					}
				});

			});
  </script>
</body>

</html>
