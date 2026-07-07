<div class="anc-6310-header">
  <ul class="anc-6310-nav">
    <li>
      <a href="<?php echo admin_url("admin.php?page=anc-6310-counter"); ?>" class="<?php if(isset($_GET['page']) && ($_GET['page'] == 'animated-number-counters' || $_GET['page'] == 'anc-6310-counter-01-10' || $_GET['page'] == 'anc-6310-counter-11-20')) echo "anc-6310-active" ?>">Short code &amp; Templates</a>
      <ul>
      <li>
        <a href="<?php echo admin_url("admin.php?page=anc-6310-counter"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'animated-number-counters') echo "anc-6310-active" ?>">All Shortcode</a>
      </li>
      <li>
        <a href="<?php echo admin_url("admin.php?page=anc-6310-counter-01-10"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'anc-6310-counter-01-10') echo "anc-6310-active" ?>">Template 01-10</a>
      </li>
      <li>
        <a href="<?php echo admin_url("admin.php?page=anc-6310-counter-11-20"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'anc-6310-counter-11-20') echo "anc-6310-active" ?>">Template 11-20</a>
      </li>
      <li>
        <a href="<?php echo admin_url("admin.php?page=anc-6310-counter-21-30"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'anc-6310-counter-21-30') echo "anc-6310-active" ?>">Template 21-30</a>
      </li>
      </ul>
    </li>

    <li>
      <a href="<?php echo admin_url("admin.php?page=anc-6310-accordion-add-edit"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'anc-6310-accordion-add-edit') echo "anc-6310-active" ?>">Manage Counter Profiles</a>
    </li>
    <!-- <li>
      <a href="<?php echo admin_url("admin.php?page=anc-6310-animated-number-counter-license"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'anc-6310-animated-number-counter-license') echo "anc-6310-active" ?>">License</a>
    </li>
    <li>
      <a href="<?php echo admin_url("admin.php?page=anc-6310-animated-number-counter-use"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'anc-6310-animated-number-counter-use') echo "anc-6310-active" ?>">How to Use</a>
    </li>
    <li>
      <a href="<?php echo admin_url("admin.php?page=anc-6310-wpmart-plugins"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'anc-6310-wpmart-plugins') echo "anc-6310-active" ?> anc-6310-plugin-menu">WpMart Plugins</a>
    </li> -->
    <li>
      <a href="https://wpmart.org/downloads/number-counter/" target="_blank" class="anc-6310-pro">Upgrade to Pro<i class="fas fa-star"></i></a>
    </li>
  </ul>

  <div class="anc-6310-notifications">
    <!-- Blue -->
    <div class="anc-6310-notice anc-6310-info">
      <div class="anc-6310-icon">
        <span class="dashicons dashicons-info"></span>
      </div>
      <div class="anc-6310-content">
        <p>
          Thank you for using the free version of <strong>Animated Number Counters</strong>. We hope you're enjoying the plugin! If you have any questions, encounter any issues, or have suggestions for improvement, please don't hesitate to file a <a href="https://wordpress.org/support/plugin/animated-number-counters/" target="_blank">bug report</a>. We're always happy to help.
        </p>

        <p>Can't find the feature you need? Send your request to <a href="mailto:sk.hasan6310@gmail.com">sk.hasan6310@gmail.com</a>, and we'll review it. If it's a good fit for the plugin, we'll do our best to add it within 72 hours.</p>
      </div>
    </div>
  </div>
  
  <?php 
    anc_6310_check_field_exists();
    anc_6310_version_status(); 
    anc_6310_number_counter_install();
  ?>
</div>