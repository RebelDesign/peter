<?php
namespace Setup;

class Menus
{
    /**
     * Initialization
     * This method should be run from functions.php
     */
    public static function init()
    {
        add_action( 'init', array(__CLASS__, 'register') );
    }

    /**
     * Registers menus within our theme
     */
    public static function register()
    {
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'peterprinciple' ),
            'utility' => __( 'Utility Menu', 'peterprinciple' ),
            'footer-menu' => __( 'Footer Menu', 'peterprinciple' ),
            'footer-legal' => __( 'Footer Legal', 'peterprinciple' ),
        ) );
    }
}
