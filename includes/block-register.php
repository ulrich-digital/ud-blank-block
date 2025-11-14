<?php
/**
 * Registrierung des Blank-Blocks
 */

defined('ABSPATH') || exit;

function ud_register_blank_block() {
    // Hauptblock registrieren (liest automatisch block.json im Plugin-Hauptverzeichnis)
    register_block_type_from_metadata(__DIR__ . '/../');
}

add_action('init', 'ud_register_blank_block');
