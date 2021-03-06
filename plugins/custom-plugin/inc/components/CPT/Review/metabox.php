<?php
/**
 * @package customPlugin
 */

namespace Inc\components\CPT\Review;

class metabox{

	/**
	 * add new metabox to CPT
	 * @return ...
	 */
	public function test(){
        add_meta_box( 'review-meta-box', 'Test', array($this, 'render'), 'review-post', 'side');
	}
    
    /**
     * HTML rendering function
     * @param  [Array] $post [Array of current Post]
     * @return [HTML]       [Metabox html]
     */
    public function render($post){
        wp_nonce_field( basename(__FILE__), 'test-nonce-field');
        $value = get_post_meta( $post->ID, 'test-field', true );
        echo __('<label for= "test_field">Test</label>');
        echo __('<input type="text" style="margin-left : 10px;" name="test-field" id="custom-field" value="' .$value. '">');
	}
    
    /**
     * Save data of current metabox into DB
     * @param  [integer] $post_id [ID of current POST]
     * @return ...
     */
	public function save($post_id){
		if ( !isset( $_POST['test-nonce-field'] ) || !wp_verify_nonce( $_POST['test-nonce-field'], basename( __FILE__ ) ) ){
		    return;
		}
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
		    return;
		}
		if ( ! current_user_can( 'edit_post', $post_id ) ){
		    return;
		}
		if (isset($_POST['test-field'])) {
			$testField = $_POST['test-field'];
		}
		update_post_meta( $post_id, 'test-field', $testField);
	}
    
    /**
     * Register hook for metabox
     * @return ...
     */
	public function register(){

		add_action( 'add_meta_boxes', array($this, 'test') );

		add_action('save_post', array($this, 'save'));
	}
}

