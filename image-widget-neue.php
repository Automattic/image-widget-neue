<?php
/*
Plugin Name: Image Neue Widget
Plugin URI: https://github.com/Automattic/image-neue-widget
Description: An image widget that uses the Media Manager, allowing drag-and-drop uploads and selection from the media library.
Version: 0.1
Author: Automattic
Author URI: http://automattic.com
License: GPL v2 or newer <https://www.gnu.org/licenses/gpl.txt>
*/

add_action( 'widgets_init', 'wpcom_image_widget_neue_init' );

function wpcom_image_widget_neue_init() {
	// if ( ! is_automattician() ) {
	// 	return;
	// }
	register_widget( 'WPCOM_Image_widget_neue' );
}

class WPCOM_Image_Widget_Neue extends WP_Widget {

	/**
	 * Constructor.
	 */
	function __construct() {
		$this->WP_Widget( 'wpcom_image_widget_neue', __( 'Image Widget Neue' ), array(
			'classname' => 'wpcom_image_widget_neue',
			'description' => __( 'Use the Media Manager to add images to sidebars.' ),
		) );
	}

	/**
	 * Output the widget markup on the front-end.
	 */
	function widget( $args, $instance ) {
	}

	/**
	 * Update our widget values.
	 */
	function update( $new_instance, $old_instance ) {
	}

	/**
	 * Output the widget interface.
	 */
	function form( $instance ) {
	}

}
