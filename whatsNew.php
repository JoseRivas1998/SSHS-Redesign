<div class="col-xs-12">
  <a href="javascript:void(0)" onclick="toggleId('#whatsNew', '#whatsNewIcon');">
    <div class="row homeLink">
      <div class="col-xs-5">
        <i class="fa fa-newspaper-o fa-5x"></i>
      </div>
      <div class="col-xs-7 homeLinkTitle">
        <i class="fa fa-toggle-up" id="whatsNewIcon"></i>
        What's New
      </div>
    </div>
  </a>
</div>
<div id="whatsNew">
  <?php
    getNewHomeLinks("whatsNew");
  ?>
</div>
