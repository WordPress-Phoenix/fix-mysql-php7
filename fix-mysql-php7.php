<?php
/**
 * Plugin Name: Fix MySQL Function for PHP7
 * Plugin URI: https://github.com/WordPress-Phoenix/fix-mysql-php7
 * Description: All the amazing business logic FanSided provides to WordPress installs. Use at your own risk!!
 * Author: R2D2
 * Version: 0.0.0.1.beta.1
 * Author URI: http://https://github.com/WordPress-Phoenix
 * License: GPL-V3
 * Text Domain: fixmysql
 *
 * GitHub Plugin URI: https://github.com/WordPress-Phoenix/fix-mysql-php7
 * GitHub Branch: master
 *
 * @package fixmysql
 * @category plugin
 * @author R2D2 <jordyn+seth@fansided.com>
 */
if ( version_compare( phpversion(), '5.5', '>=' ) && ! function_exists('mysql_real_escape_string') ) {
	function mysql_real_escape_string($unescaped_string, $link_identifier = null){
		global $wpdb;
		return mysqli_real_escape_string( $wpdb->dbh, $unescaped_string );
	}
}

