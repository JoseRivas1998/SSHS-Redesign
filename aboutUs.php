<div class="col-xs-12">
  <a href="javascript:void(0)" onclick="toggleId('#aboutUs', '#aboutUsIcon');">
    <div class="row homeLink">
      <div class="col-xs-5">
        <i class="fa fa-info fa-5x fa-fw"></i>
      </div>
      <div class="col-xs-7 homeLinkTitle">
        <i class="fa fa-toggle-up" id="aboutUsIcon"></i>
        About Us
      </div>
    </div>
  </a>
</div>
<div id="aboutUs">
  <?php
    getNewHomeLinks("aboutUs");
  ?>
</div>
