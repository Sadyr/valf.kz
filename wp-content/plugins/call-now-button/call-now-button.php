<?php
/*
Plugin Name: Call Now Button
Plugin URI: https://callnowbutton.com
Description: Mobile visitors will see a <strong>Call Now Button</strong> on your website. Easy to use but flexible to meet more demanding requirements. Change placement and color, hide on specific pages, track how many people click them or conversions of your Google Ads campaigns. It's all optional but possible.
Version: 1.2.2
Author: Jerry & Jasper
Author URI: https://www.callnowbutton.com
GitHub Plugin URI: https://github.com/callnowbutton/wp-plugin
License: GPL2
*/

/*  Copyright 2013-2020  Jerry Rietveld  (email : jerry@studiostacks.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define('CNB_VERSION', '1.2.2');
define('CNB_NAME', 'Call Now Button');
define('CNB_BASENAME', plugin_basename(__FILE__));
define('CNB_BASEFOLDER', plugin_basename(dirname(__FILE__)));
define('CNB_FILENAME', str_replace(CNB_BASEFOLDER . '/', '', CNB_BASENAME));
define('CNB_WEBSITE', 'https://callnowbutton.com/');
define('CNB_SUPPORT', CNB_WEBSITE . 'support/');
define('CNB_APP', 'https://app.callnowbutton.com/');
define('CNB_SLUG', sanitize_title(CNB_NAME));

register_activation_hook(__FILE__, array('cnb\admin\deactivation\Activation', 'onActivation'));
register_deactivation_hook( __FILE__, array('cnb\admin\deactivation\Deactivation', 'on_deactivation') );

require_once dirname( __FILE__ ) . '/src/call-now-button.php';
