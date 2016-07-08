<div class="col-sm-3 col-xs-12 side-nav">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">Students</div>
        </div>
        <div class="panel-body">
            <div class="list-group">
              <?php
                include_once($_SERVER['DOCUMENT_ROOT'] . '/inc/sideNav.php');
                loadSideNav('students');
              ?>
            </div>
        </div>
    </div>
</div>
