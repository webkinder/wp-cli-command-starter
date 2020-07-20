<?php

namespace WebKinder\WpCliCommandStarter;

use WP_CLI;

class Command
{
  /**
   * Output info for this command
   *
   * ## EXAMPLES
   *
   *     # Output info for this command
   *     $ wp starter info
   *     Created by WebKinder - WordPress & WooCommerce Agency in Lucerne
   *     Github: https://github.com/webkinder
   */
  public function info()
  {
    WP_CLI::log('Created by WebKinder - WordPress & WooCommerce Agency in Lucerne');
    WP_CLI::log('Github: https://github.com/webkinder');
  }

  /**
   * doSomething important
   *
   * ## EXAMPLES
   *
   *     # Output info for this command
   *     $ wp starter doSomething
   *     Success: we did something
   */
  public function doSomething()
  {
    WP_CLI::log('doing something cool');
    WP_CLI::success('we did something!');
  }
}
