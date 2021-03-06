<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/*========================================================*
* metabox
* ========================================================*/
require_once("parts/add_metabox_intro.php");


/*========================================================*
* post type
* ========================================================*/
require_once("parts/posttype/banner_intro.php");
require_once("parts/posttype/portfolio.php");


/*========================================================*
* Widget
* ========================================================*/
require_once("parts/widget/portfolio_cardview.php");


/*========================================================*
* Shortcode
* ========================================================*/
//require_once("parts/shortcode/bartag.php");
