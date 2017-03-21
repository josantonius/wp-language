<?php 
/**
 * Load text domain plugin for translations.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/WP-Language
 * @since      1.0.0
 */

namespace Josantonius\WP_Language;

/**
 * Language Handler.
 *
 * @since 1.0.0
 */
class WP_Language {

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
