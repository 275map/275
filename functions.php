<?php

namespace Ods\Initialize;

/**
* Class odsInitialize
* @since 1.0.0
* @package Ods\initialize
*/
class odsInitialize
{

	/**
	* Added the construct.
	*/
	public function __construct()
	{

		$this->required_all();

	}


	/**
	* The get_files() returns a array,
	* this determines the code library included in your theme.
	* Add or remove files to the array as needed.
	* Supports child theme overrides.
	*
	* @return array
	*/
	private function get_files()
	{
		return array(
			'/inc/ods_setup.php',
			'/inc/functions/ods_functions.php',
			'/inc/register/ods_widgets.php',
			'/inc/customize/ods_custom_header.php',
		);
	}


	/**
	* Include files in your theme.
	* If the file does not exist bypasses and goes to the next file.
	*/
	private function required_all()
	{
		foreach ( $this->get_files() as $file ) {
			$file_path = locate_template( $file );
			if ( file_exists( $file_path ) ) {
				require_once $file_path;
			}
		}
	}
}

$ods_init = new odsInitialize();

add_action( 'after_setup_theme', function() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
} );
