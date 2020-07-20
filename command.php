<?php
/**
 * Plugin Name: WebKinder WP CLI Command Starter
 * Plugin URI: https://webkinder.ch
 * Description: A set of WP-CLI commands to support the migration of single WordPress instances over to multisite
 * Version: 0.1.0
 * Author: WebKinder
 * Author URI: https://webkinder.ch
 * Text Domain: wp-cli-command-starter
 * Domain Path: /languages
 *
 */

// Only load this plugin once and bail if WP CLI is not present
if (!defined('WP_CLI')) {
  return;
}

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
  require_once( 'vendor/autoload.php' );
}

/*
 "starter" is the namespace of the command. Every public method from the command class can now be accessed like the following:
  - wp cli starter methodName
  i.e. in this example wp cli starter info and wp cli starter doSomething
*/

WP_CLI::add_command('starter', WebKinder\WpCliCommandStarter\Command::class);
