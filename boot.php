<?php
/**
 * Bootstrapper for Hussainas Block Patterns.
 *
 * This file handles the inclusion of necessary classes and initializes
 * the pattern registration process.
 *
 * @package Hussainas_Patterns
 * @version     1.0.0
 * @author      Hussain Ahmed Shrabon
 * @license     GPL-2.0-or-later
 * @link        https://github.com/iamhussaina
 * @textdomain  hussainas
 
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define the path to the library root.
if ( ! defined( 'HUSSAINAS_PATTERN_PATH' ) ) {
    define( 'HUSSAINAS_PATTERN_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
}

// Require the manager class.
require_once HUSSAINAS_PATTERN_PATH . '/src/class-hussainas-pattern-manager.php';

// Initialize the pattern manager.
if ( class_exists( 'Hussainas_Pattern_Manager' ) ) {
    $pattern_manager = new Hussainas_Pattern_Manager();
    $pattern_manager->run();
}
