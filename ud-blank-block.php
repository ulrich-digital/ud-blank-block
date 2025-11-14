<?php
/**
 * Plugin Name:     UD Block: Blank Block
 * Description:     Leerer Ausgangspunkt für neue Gutenberg-Block-Plugins. Enthält Basisstruktur und Build-System.
 * Version:         1.0.0
 * Author:          ulrich.digital gmbh
 * Author URI:      https://ulrich.digital/
 * License:         GPL v2 or later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     ud-blank-block-ud
 */

defined('ABSPATH') || exit;

// ------------------------------------------------------------
// Basis-Includes
// ------------------------------------------------------------

foreach ([
    'block-register.php',
    'enqueue.php',
    'helpers.php',
    'render.php',
] as $file) {
    $path = __DIR__ . '/includes/' . $file;
    if (file_exists($path)) {
        require_once $path;
    }
}
