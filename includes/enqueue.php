<?php
/**
 * Enqueue von Styles und Scripts für den Blank-Block
 */

defined('ABSPATH') || exit;

function ud_enqueue_blank_block_assets() {
    if (is_admin()) {
        return;
    }

    // Hier können bei Bedarf Frontend-spezifische Styles oder Scripts hinzugefügt werden.
    // Standardmässig bleibt diese Funktion leer, um die Performance schlank zu halten.
}

add_action('wp_enqueue_scripts', 'ud_enqueue_blank_block_assets');
