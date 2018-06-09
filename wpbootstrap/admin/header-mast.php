<?php
/*
***
**** This file is to set up the header mast for use on page templates.
***
*/


/// ADD CUSTOM FIELDS FOR PAGES (HEADER MAST)
function page_add_meta_box() {
    add_meta_box( 'page_meta_box_mast_title',
        'Page Mast Title (leave blank to use page title)',
        'display_page_meta_box_mast_title',
        'page'
    );
    add_meta_box( 'page_meta_box_mast_description',
        'Page Mast Description',
        'display_page_meta_box_mast_description',
        'page'
    );
}
add_action( 'admin_init', 'page_add_meta_box' );
function display_page_meta_box_mast_title() {
    global $post;
    $mast_title =  get_post_meta( $post->ID, 'mast_title', true );
    wp_editor( $mast_title,'mast_title', array('textarea_rows'=>2) );
    echo '<input type="hidden" name="mast_flag" value="true" />';
}
function display_page_meta_box_mast_description() {
    global $post;
    $mast_description =  get_post_meta( $post->ID, 'mast_description', true );
    wp_editor( $mast_description,'mast_description', array('textarea_rows'=>5,'wpautop'=>true) );
    echo '<input type="hidden" name="mast_flag" value="true" />';
}
function update_page_meta_box( $post_id, $post ) {
    if ( $post->post_type == 'page' ) {
        if ( isset($_POST['mast_flag']) ) {
            if ( isset( $_POST['mast_title'] ) && $_POST['mast_title'] != '' ) {
                update_post_meta( $post_id, 'mast_title', $_POST['mast_title'] );
            } else {
                update_post_meta( $post_id, 'mast_title', '' );
            }
            if ( isset( $_POST['mast_description'] ) && $_POST['mast_description'] != '' ) {
                update_post_meta( $post_id, 'mast_description', $_POST['mast_description'] );
            } else {
                update_post_meta( $post_id, 'mast_description', '');
            }
        }
    }
}
add_action( 'save_post', 'update_page_meta_box', 10, 2 );

?>
