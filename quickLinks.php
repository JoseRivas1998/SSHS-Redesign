<div class="col-xs-12">
  <a href="javascript:void(0)" onclick="toggleId('#quickLinks', '#quickLinksIcon');">
    <div class="row homeLink">
      <div class="col-xs-5">
        <i class="fa fa-link fa-5x"></i>
      </div>
      <div class="col-xs-7 homeLinkTitle">
        <i class="fa fa-toggle-up" id="quickLinksIcon"></i>
        Quick Links
      </div>
    </div>
  </a>
</div>
<div id="quickLinks">
  <?php
    getNewHomeLinks("quick");
  ?>
</div>
