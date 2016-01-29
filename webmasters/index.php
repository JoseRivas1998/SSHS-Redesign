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
        @media (max-width: 768px) {
            #JackApelbaum {
                background: url(jackA.png) 0 0 no-repeat;
                background-size: 100% 200%;
            }

            #joseRivas {
                background: url(joseR.png) 0 0 no-repeat;
                background-size: 100% 200%;
            }
        }

        @media (min-width: 769px) {
            #JackApelbaum {
                background: url(jackA.png) 0 100% no-repeat;
                background-size: 100% 200%;
            }

            #JackApelbaum:hover {
                background: url(jackA.png) 0 0 no-repeat;
                background-size: 100% 200%;
            }

            #joseRivas {
                background: url(joseR.png) 0 100% no-repeat;
                background-size: 100% 200%;
            }

            #joseRivas:hover {
                background: url(joseR.png) 0 0 no-repeat;
                background-size: 100% 200%;
            }

            .smallTitle {
                font-size: 13px;
                padding-top: 2px;
                padding-bottom: 2px;
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
                <p>The SSHS website is <strong>100% designed, coded, implemented, and maintained</strong> by the
                    students in <strong><a href="http://www.cte.santasusana.org/">Career and Technical Education
                            (CTE)</a> Web Design</strong>
                </p>

                <p>Last year's webmaster, <a href="https://github.com/danfern-simi" target="_blank">Daniel Fernandez</a>,
                    did a lot of work on the website. Feel free to check out his contributions <a
                        href="https://docs.google.com/document/d/1FXdV0W-zsDAkPBSfI3fHEr7AiCWPEMlw-AVVDEVJdcQ/edit?usp=sharing"
                        target="_blank">here</a>.</p>
            </div>
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-sm-2 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"><a href="https://github.com/dosperos13" target="_blank">Jack
                                        Apelbaum</a></div>
                            </div>
                            <div class="panel-body student" id="JackApelbaum"></div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"><a href="https://github.com/AidanChisum" target="_blank">Aidan
                                        Chisum</a></div>
                            </div>
                            <div class="panel-body student" id="pending"></div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"><a href="https://github.com/Bapap" target="_blank">Mason
                                        Cohen</a></div>
                            </div>
                            <div class="panel-body student" id="pending"></div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"><a href="https://github.com/ComradeVanko" target="_blank">Ivan
                                        Georgiev</a></div>
                            </div>
                            <div class="panel-body student" id="pending"></div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"><a href="https://github.com/Cybergv2" target="_blank">Jacob
                                        Gherardi</a></div>
                            </div>
                            <div class="panel-body student" id="pending"></div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"><a href="https://github.com/TristanHennerty" target="_blank">Tristan
                                        Hennerty</a></div>
                            </div>
                            <div class="panel-body student" id="pending"></div>
                        </div>
                    </div>
                </div>
                <div class="row webmastermasterRow">
                    <div class="col-sm-2 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"><a href="https://github.com/CollinHersh" target="_blank">Collin
                                        Hersh</a></div>
                            </div>
                            <div class="panel-body student" id="pending"></div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"><a href="https://github.com/shmeshme" target="_blank">David
                                        Laury</a></div>
                            </div>
                            <div class="panel-body student" id="pending"></div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title smallTitle"><a href="https://github.com/ThomasMancinelli"
                                                                       target="_blank">Thomas Mancinelli</a></div>
                            </div>
                            <div class="panel-body student" id="pending"></div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"><a href="https://github.com/ganonswag" target="_blank">Caleb
                                        McDonald</a></div>
                            </div>
                            <div class="panel-body student" id="pending"></div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"><a href="https://github.com/jeremynovember" target="_blank">Jeremy
                                        November</a></div>
                            </div>
                            <div class="panel-body student" id="pending"></div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"><a href="https://github.com/Connor-Ries" target="_blank">Connor
                                        Ries</a></div>
                            </div>
                            <div class="panel-body student" id="pending"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-xs-12 col-sm-offset-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title smallTitle"><a href="https://github.com/JoseRivas1998"
                                                                       target="_blank">Jos&eacute; Rodriguez-Rivas</a>
                                </div>
                            </div>
                            <div class="panel-body student" id="joseRivas"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"><a href="https://github.com/GabrielShabat" target="_blank">Gabriel
                                        Shabat</a></div>
                            </div>
                            <div class="panel-body student" id="pending"></div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"><a href="https://github.com/jakewait" target="_blank">Jacob
                                        Waitkuweit</a></div>
                            </div>
                            <div class="panel-body student" id="pending"></div>
                        </div>
                    </div>
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
<script>
    function size() {
        var scale = 1.4;
        $('div div.student').each(function () {
            var width = $(this).width();
            var height = width * scale;
            $(this).height(height);
        });
    }
    $(document).ready(function () {
        size();
    });
    $(window).on('resize', function () {
        size();
    });
</script>
=======
	<section id="content-wrapper">
		<div class="container" id="content-container">
			<div class="row">
        <div class="col-xs-12">
            <div class="section-title">Webmasters</div>
            <p>The SSHS website is <strong>100% designed, coded, implemented, and maintained</strong> by the students in <strong><a href="http://www.cte.santasusana.org/">Career and Technical Education (CTE)</a> Web Design</strong>
            </p>

            <p>Last year's webmaster, <a href="https://github.com/danfern-simi" target="_blank">Daniel Fernandez</a>, did a lot of work on the website. Feel free to check out his contributions <a href="https://docs.google.com/document/d/1FXdV0W-zsDAkPBSfI3fHEr7AiCWPEMlw-AVVDEVJdcQ/edit?usp=sharing" target="_blank">here</a>.</p>
        </div>
        <div class="col-xs-12">
            <div class="row">
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><div class="panel-title"><a href="https://github.com/dosperos13" target="_blank">Jack Apelbaum</a></div></div>
                        <div class="panel-body student"  id="JackApelbaum"></div>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><div class="panel-title"><a href="https://github.com/AidanChisum" target="_blank">Aidan Chisum</a></div></div>
                        <div class="panel-body student" id="pending"></div>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><div class="panel-title"><a href="https://github.com/Bapap" target="_blank">Mason Cohen</a></div></div>
                        <div class="panel-body student" id="pending"></div>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><div class="panel-title"><a href="https://github.com/ComradeVanko" target="_blank">Ivan Georgiev</a></div></div>
                        <div class="panel-body student" id="pending"></div>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><div class="panel-title"><a href="https://github.com/Cybergv2" target="_blank">Jacob Gherardi</a></div></div>
                        <div class="panel-body student" id="pending"></div>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><div class="panel-title"><a href="https://github.com/TristanHennerty" target="_blank">Tristan Hennerty</a></div></div>
                        <div class="panel-body student" id="pending"></div>
                    </div>
                </div>
            </div>
            <div class="row webmastermasterRow">
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><div class="panel-title"><a href="https://github.com/CollinHersh" target="_blank">Collin Hersh</a></div></div>
                        <div class="panel-body student" id="pending"></div>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><div class="panel-title"><a href="https://github.com/shmeshme" target="_blank">David Laury</a></div></div>
                        <div class="panel-body student" id="pending"></div>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><div class="panel-title smallTitle"><a href="https://github.com/ThomasMancinelli" target="_blank">Thomas Mancinelli</a></div></div>
                        <div class="panel-body student" id="pending"></div>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><div class="panel-title"><a href="https://github.com/ganonswag" target="_blank">Caleb McDonald</a></div></div>
                        <div class="panel-body student" id="pending"></div>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><div class="panel-title"><a href="https://github.com/jeremynovember" target="_blank">Jeremy November</a></div></div>
                        <div class="panel-body student" id="pending"></div>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><div class="panel-title"><a href="https://github.com/Connor-Ries" target="_blank">Connor Ries</a></div></div>
                        <div class="panel-body student" id="pending"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-xs-12 col-sm-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading"><div class="panel-title smallTitle"><a href="https://github.com/JoseRivas1998" target="_blank">Jos&eacute; Rodriguez-Rivas</a></div></div>
                        <div class="panel-body student" id="joseRivas"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><div class="panel-title"><a href="https://github.com/GabrielShabat" target="_blank">Gabriel Shabat</a></div></div>
                        <div class="panel-body student" id="pending"></div>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><div class="panel-title"><a href="https://github.com/jakewait" target="_blank">Jacob Waitkuweit</a></div></div>
                        <div class="panel-body student" id="pending"></div>
                    </div>
                </div>
            </div>
        </div>
				<div class="col-xs-12">
					<div class="section-title">Contact the Webmasters</div>
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
					}
				});

			});
  </script>
</body>

</html>
