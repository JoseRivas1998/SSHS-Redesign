<div class="col-xs-12 col-sm-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title"><i class="fa fa-link"></i> Quick Links</div>
        </div>
        <div class="panel-body panel-row-1" id="quick">
          <div class="embed-responsive embed-responsive-16by9" id="pl">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/videoseries?list=PLS4YhFEqQEh1eXEhIKbY8Kyt0a64B5Tv6" frameborder="0" allowfullscreen></iframe>
          </div>
            <div class="list-group" id="quickList">
              <?php
                include ("getHomeLinks.php");
                getHomeLinks('quick');
              ?>
            </div>
        </div>
    </div>
</div>
