<?php
function anc_6310_counter_01_10()
{
  global $wpdb;
  $style_table = $wpdb->prefix . 'anc_6310_style';
  $icon_table = $wpdb->prefix . 'anc_6310_icons';
  $counter_table = $wpdb->prefix . 'anc_6310_counter';
  anc_6310_multi_language_set_all_data();

  wp_enqueue_style('anc-6310-style', plugins_url('assets/css/style.css', __FILE__));
  wp_enqueue_script('anc-6310-counterup', plugins_url('assets/js/jquery.counterup.js', __FILE__), array('jquery'), '1.1.0', true);

  anc_6310_link_css_js();

  include anc_6310_plugin_url . 'header.php';

  if (empty($_GET['styleid'])) {
    wp_enqueue_style('anc-6310-google-font', 'https://fonts.googleapis.com/css?family=Amaranth');
    wp_enqueue_style('anc-6310-style-01-10', plugins_url('assets/css/style-01-10.css', __FILE__));
    include anc_6310_plugin_url . 'settings/preview-01-10.php';
  } else if (!empty($_GET['styleid'])) {
    $styleId = (int) ($_GET['styleid']);
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
    $template_name = $styledata['style_name'];
    $allowed_templates = [];
    for ($i = 1; $i <= 30; $i++) {
      $allowed_templates[] = sprintf('counter-%02d', $i);
    }
    if (!in_array($template_name, $allowed_templates)) {
      die('Invalid template selected.');
    }

    $template_path = realpath(anc_6310_plugin_url . 'settings/counters/' . $template_name . '.php');
    $allowed_path = realpath(anc_6310_plugin_url . 'settings/counters/');

    // Ensure the resolved path is within the allowed directory
    if (strpos($template_path, $allowed_path) !== 0 || !file_exists($template_path)) {
      die('Invalid template path or file not found.');
    }

    anc_6310_no_preview_available();
    wp_enqueue_script('anc-6310-font-select-js', plugins_url('assets/js/fontselect.js', __FILE__), array('jquery'));
    wp_enqueue_script('anc-6310-admin-js', plugins_url('assets/js/anc-6310-admin-script.js', __FILE__), array('jquery'));
    wp_enqueue_style('anc-6310-font-select-style', plugins_url('assets/css/fontselect.css', __FILE__));
    $templateId = substr($template_name, -2);
    wp_enqueue_script('anc-6310-common-helper', plugins_url('settings/helper/_common-helper.js', __FILE__), array('jquery'));
    include $template_path;
  }
}

function anc_6310_counter_11_20()
{
  global $wpdb;
  $style_table = $wpdb->prefix . 'anc_6310_style';
  $icon_table = $wpdb->prefix . 'anc_6310_icons';
  $counter_table = $wpdb->prefix . 'anc_6310_counter';
  anc_6310_multi_language_set_all_data();

  wp_enqueue_style('anc-6310-style', plugins_url('assets/css/style.css', __FILE__));
  wp_enqueue_script('anc-6310-counterup', plugins_url('assets/js/jquery.counterup.js', __FILE__), array('jquery'), '1.1.0', true);

  anc_6310_link_css_js();

  include anc_6310_plugin_url . 'header.php';
  if (empty($_GET['styleid'])) {
    wp_enqueue_style('anc-6310-google-font', 'https://fonts.googleapis.com/css?family=Amaranth');
    wp_enqueue_style('anc-6310-style-11-20', plugins_url('assets/css/style-11-20.css', __FILE__));
    include anc_6310_plugin_url . 'settings/preview-11-20.php';
  } else if (!empty($_GET['styleid'])) {
    $styleId = (int) ($_GET['styleid']);
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
    $template_name = $styledata['style_name'];
    $allowed_templates = [];
    for ($i = 1; $i <= 30; $i++) {
      $allowed_templates[] = sprintf('counter-%02d', $i);
    }
    if (!in_array($template_name, $allowed_templates)) {
      die('Invalid template selected.');
    }

    $template_path = realpath(anc_6310_plugin_url . 'settings/counters/' . $template_name . '.php');
    $allowed_path = realpath(anc_6310_plugin_url . 'settings/counters/');

    // Ensure the resolved path is within the allowed directory
    if (strpos($template_path, $allowed_path) !== 0 || !file_exists($template_path)) {
      die('Invalid template path or file not found.');
    }


    anc_6310_no_preview_available();
    wp_enqueue_script('anc-6310-font-select-js', plugins_url('assets/js/fontselect.js', __FILE__), array('jquery'));
    wp_enqueue_script('anc-6310-admin-js', plugins_url('assets/js/anc-6310-admin-script.js', __FILE__), array('jquery'));
    wp_enqueue_style('anc-6310-font-select-style', plugins_url('assets/css/fontselect.css', __FILE__));
    $templateId = substr($template_name, -2);
    wp_enqueue_script('anc-6310-common-helper', plugins_url('settings/helper/_common-helper.js', __FILE__), array('jquery'));
    include $template_path;
  }
}

function anc_6310_counter_21_30()
{
  global $wpdb;
  $style_table = $wpdb->prefix . 'anc_6310_style';
  $icon_table = $wpdb->prefix . 'anc_6310_icons';
  $counter_table = $wpdb->prefix . 'anc_6310_counter';
  anc_6310_multi_language_set_all_data();

  wp_enqueue_style('anc-6310-style', plugins_url('assets/css/style.css', __FILE__));
  wp_enqueue_script('anc-6310-counterup', plugins_url('assets/js/jquery.counterup.js', __FILE__), array('jquery'), '1.1.0', true);

  anc_6310_link_css_js();

  include anc_6310_plugin_url . 'header.php';
  if (empty($_GET['styleid'])) {
    wp_enqueue_style('anc-6310-google-font', 'https://fonts.googleapis.com/css?family=Amaranth');
    wp_enqueue_style('anc-6310-style-21-30', plugins_url('assets/css/style-21-30.css', __FILE__));
    include anc_6310_plugin_url . 'settings/preview-21-30.php';
  } else if (!empty($_GET['styleid'])) {
    $styleId = (int) ($_GET['styleid']);
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
    $template_name = $styledata['style_name'];
    $allowed_templates = [];
    for ($i = 1; $i <= 30; $i++) {
      $allowed_templates[] = sprintf('counter-%02d', $i);
    }
    if (!in_array($template_name, $allowed_templates)) {
      die('Invalid template selected.');
    }

    $template_path = realpath(anc_6310_plugin_url . 'settings/counters/' . $template_name . '.php');
    $allowed_path = realpath(anc_6310_plugin_url . 'settings/counters/');

    // Ensure the resolved path is within the allowed directory
    if (strpos($template_path, $allowed_path) !== 0 || !file_exists($template_path)) {
      die('Invalid template path or file not found.');
    }

    anc_6310_no_preview_available();
    wp_enqueue_script('anc-6310-font-select-js', plugins_url('assets/js/fontselect.js', __FILE__), array('jquery'));
    wp_enqueue_script('anc-6310-admin-js', plugins_url('assets/js/anc-6310-admin-script.js', __FILE__), array('jquery'));
    wp_enqueue_style('anc-6310-font-select-style', plugins_url('assets/css/fontselect.css', __FILE__));
    $templateId = substr($template_name, -2);
    wp_enqueue_script('anc-6310-common-helper', plugins_url('settings/helper/_common-helper.js', __FILE__), array('jquery'));
    include $template_path;
  }
}

function anc_6310_number_counter_6310_icon()
{
  global $wpdb;
  wp_enqueue_style('anc-6310-style', plugins_url('assets/css/style.css', __FILE__));

  anc_6310_link_css_js();
  wp_enqueue_script('anc-6310-common-helper', plugins_url('settings/helper/_common-helper.js', __FILE__), array('jquery'));
  include anc_6310_plugin_url . 'header.php';
  include anc_6310_plugin_url . 'settings/social-icon.php';
  anc_6310_multi_language_set_all_data();
}

function anc_6310_number_counter_6310_lincense()
{
  global $wpdb;
  wp_enqueue_style('anc-6310-style', plugins_url('assets/css/style.css', __FILE__));
  anc_6310_link_css_js();
  wp_enqueue_script('anc-6310-common-helper', plugins_url('settings/helper/_common-helper.js', __FILE__), array('jquery'));
  include anc_6310_plugin_url . 'header.php';
  include anc_6310_plugin_url . 'license.php';
}

function anc_6310_counter_add_edit()
{
  global $wpdb;
  wp_enqueue_style('anc-6310-style', plugins_url('assets/css/style.css', __FILE__));

  anc_6310_link_css_js();
  wp_enqueue_script('anc-6310-common-helper', plugins_url('settings/helper/_common-helper.js', __FILE__), array('jquery'));
  include anc_6310_plugin_url . 'header.php';
  include anc_6310_plugin_url . 'settings/counter.php';
  anc_6310_multi_language_set_all_data();
}

function anc_6310_number_counter_6310_how_to_use()
{
  global $wpdb;
  wp_enqueue_style('anc-6310-style', plugins_url('assets/css/style.css', __FILE__));
  anc_6310_link_css_js();
  wp_enqueue_script('anc-6310-common-helper', plugins_url('settings/helper/_common-helper.js', __FILE__), array('jquery'));
  include anc_6310_plugin_url . 'header.php';
  include anc_6310_plugin_url . 'settings/how-to-use.php';
  anc_6310_multi_language_set_all_data();
}

function anc_6310_wpmart_plugins()
{
  global $wpdb;
  wp_enqueue_style('anc-6310-style', plugins_url('assets/css/style.css', __FILE__));

  anc_6310_link_css_js();

  include anc_6310_plugin_url . 'header.php';
  include anc_6310_plugin_url . 'settings/wpmart-plugins.php';
}
function anc_6310_import_export()
{
  global $wpdb;
  wp_enqueue_style('anc-6310-style', plugins_url('assets/css/style.css', __FILE__));

  anc_6310_link_css_js();

  include anc_6310_plugin_url . 'header.php';
  include anc_6310_plugin_url . 'settings/import-export-plugins.php';
}
