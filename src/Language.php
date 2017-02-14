<?php 
/**
 * Load text domain plugin for translations.
 * 
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2017 JST Wordpress
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/WP-Language
 * @since      File available since 1.0.0 - Update: 2017-02-13
 */

namespace Josantonius\WP\Language;

/**
 * Language Handler.
 *
 * @since 1.0.0
 */
class Language {

	/**
	 * Initialize the plugin and activation hooks.
	 * 
	 * @since 1.0.0
	 *
	 * @param string $textdomain   → name of plugin text domain
	 * @param string $languagePath → path to languages folder
	 * 
	 * @uses load_plugin_textdomain() → Initialize plugin and activation hooks
	 */
	public static function load($textdomain, $languagePath) {

        load_plugin_textdomain($textdomain, false, $languagePath);
	}
}