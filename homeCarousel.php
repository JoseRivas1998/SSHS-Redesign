<div class="col-xs-12">
  <div id="homeCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php
          include ($_SERVER["DOCUMENT_ROOT"] . "/inc/dbConnect.php");

          $countSql = "SELECT COUNT(*) FROM homeCarousel";

          $countResult = mysqli_query($conn, $countSql);

          if(mysqli_num_rows($countResult) > 0) {
            while($countRow = mysqli_fetch_assoc($countResult)) {
              $numRows = $countRow["COUNT(*)"];
            }
          }

          for($i = 0; $i < $numRows; $i++) {
            if($i == 0) {
              echo "<li data-target='#homeCarousel' data-slide-to='$i' class='active'></li>";
            } else {
              echo "<li data-target='#homeCarousel' data-slide-to='$i'></li>";
            }
          }

        ?>
      </ol>
      <div class="carousel-inner">
        <?php
          $sql = "SELECT * FROM homeCarousel";

          $result = mysqli_query($conn, $sql);

          if(mysqli_num_rows($result) > 0) {
            $index = 0;
            while($row = mysqli_fetch_assoc($result)) {
              $imgSrc = $row["fileSrc"];
              if($index == 0) {
                echo "<div class='item active'>";
              } else {
                echo "<div class='item'>";
              }
              echo "<img src='img/content/carousel/$imgSrc' alt='$imgSrc' class='img-resonsive carousel-img'>";
              echo "</div>";
              $index++;
            }
          }
        ?>
      </div>

      <a href="#homeCarousel" class="carousel-control left home" data-slide="prev">
          <i class="fa fa-arrow-left"></i>
      </a>

      <a href="#homeCarousel" class="carousel-control right home" data-slide="next">
          <i class="fa fa-arrow-right"></i>
      </a>

  </div>
</div>
