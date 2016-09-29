<?php
   /*
   Plugin Name: dBug Dump
   Plugin URI: http://www.blairdee.com
   Description: a simple plugin to enable ColdFusion-like dump functionality using the dBug script from http://dbug.ospinto.com/.  Note that this should not be enabled on production sites.
   Version: 1.0
   Author: Blair Dee
   Author URI: http://www.blairdee.com
   License: GPL2
   */


/**
 * Includes the dBug script
 *
 * @return void
 *
 */
function include_dBug_script() {
   include_once("dBug.php");
}

add_action("wp_head", "include_dBug_script");

?>