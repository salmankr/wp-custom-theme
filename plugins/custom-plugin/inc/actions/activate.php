<?php
/**
 * @package  customPlugin
 */

namespace Inc\actions;

class activate{

	/**
	 * service for plugin activation
	 * @return ...
	 */
	public function service(){
		flush_rewrite_rules();
		update_option( 'cpt_checkbox', 'unchecked');
		update_option( 'metabox_checkbox', 'unchecked');
	}

    /**
     * Register activation service
     * @return ...
     */
	public function register(){
		register_activation_hook( PLUGIN_FILE_PATH, array($this, 'service') );
	}
}