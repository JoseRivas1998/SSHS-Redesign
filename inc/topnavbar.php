<?php

function loadLinks($category) {
  $root = $_SERVER['DOCUMENT_ROOT'];
  include($root . '/inc/dbConnect.php');

  $sql = "SELECT * FROM navigation WHERE category = '$category' LIMIT 1";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $jsonobj = $row['jsonobj'];
      $json = json_decode($jsonobj);
      for($i = 0; $i < count($json); $i++) {
        $title = $json[$i]->{'title'};
        $path = $json[$i]->{'path'};
        echo "<li id=\"$path\"><a href=\"$path\">$title</a></li>";
      }
    }
  }
  mysqli_close($conn);
}
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Santa Susana High School</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li id="/"><a href="/">Home</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Students <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li id="/students/"><a href="/students/">Students</a></li>
                        <li role="separator" class="divider"></li>
                        <?php loadLinks('students') ?>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Parents <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li id="/parents/"><a href="/parents/">Parents</a></li>
                        <li role="separator" class="divider"></li>
                        <?php loadLinks('parents') ?>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Staff <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li id="/staff/"><a href="/staff/">Staff</a></li>
                        <li role="separator" class="divider"></li>
                        <?php loadLinks('staff') ?>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Community <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li id="/community/"><a href="/community/">Community</a></li>
                        <li role="separator" class="divider"></li>
                        <?php loadLinks('community') ?>
                    </ul>
                </li>
                <li id="/sitemap/"><a href="/sitemap/"><i class="fa fa-sitemap"></i> Sitemap</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Social Media <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><p>District</p></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="https://www.facebook.com/SimiValleySchools" target="_blank"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/SimiValleyUSD" target="_blank"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li role="separator" class="divider"></li>
                        <li><p>School</p></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="https://www.facebook.com/Santa-Susana-High-School-97847230255" target="_blank"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/Santa_Susana" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
