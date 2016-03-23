<div class="col-xs-12">
  <a href="javascript:void(0)" onclick="toggleId('#district', '#districtIcon');">
    <div class="row homeLink">
      <div class="col-xs-5">
        <i class="fa fa-link fa-5x"></i>
      </div>
      <div class="col-xs-7 homeLinkTitle">
        <i class="fa fa-toggle-up" id="districtIcon"></i>
        District Links
      </div>
    </div>
  </a>
</div>
<div id="district">
  <?php
    getNewHomeLinks("district");
  ?>
</div>
