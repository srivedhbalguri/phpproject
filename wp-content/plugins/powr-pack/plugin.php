<?php
/**
 * Plugin Name: POWR
 * Plugin URI: https://www.powr.io/plugins
 * Description: 60 free plugins to collect more contacts and convert your visitors. Get started with Form Builder, Popup, Social Feed and Countdown Timer. Add the plugin to any page, post or theme. Edit live on your page.
 * Author: POWR.io
 * Author URI: https://www.powr.io
 * Version: 2.1.0
 * License: All Rights Reserved
 *
 * @package POWr
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Glutenberg Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/block.php';

/**
 * POWr Pack Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/pack.php';
