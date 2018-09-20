<?php
define( 'ATTACHMENTS_SETTINGS_SCREEN', false );
add_filter( 'attachments_default_instance', '__return_false' );

function philosophy_attechment($attachments){
    $post_id = null;
    if(isset($_REQUEST["post"] ) || isset($_REQUEST["post_ID"] ) ) {
        $post_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
      }

     if( ! $post_id || get_post_format($post_id) != "gallery"){
         return;
     }

    $fields         = array(
    array(
      'name'      => 'title',                         // unique field name
      'type'      => 'text',                          // registered field type
      'label'     => __( 'Title', 'attachments' ),    // label to display
      'default'   => 'title',                         // default value upon selection
    ),
);
     $args = array(
    'label'         => 'My Attachments',
    'post_type'     => array( 'post'),
    'note'          => 'Add simager',
    'button_text'   => 'Attach files',
    'filetype'      => array('image'),
    'fields'        =>$fields  
);
 $attachments->register( 'philosophy_a', $args );
}
add_action("attachments_register","philosophy_attechment");
