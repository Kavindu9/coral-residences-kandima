<?php 
add_action( 'cmb2_admin_init', 'home_fields' );
//add_action( 'cmb2_admin_init', 'page_fields' );



function home_fields() {
    //Hero Banner
	$cmb = new_cmb2_box( array(
        'id'           => 'hero-section',
        'title'        => 'Hero Section',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name' => 'Banner First Image(Desktop)',
        'id'   => 'banner_img_first',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Banner First Image(mobile)',
        'id'   => 'mob_banner_img_first',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) ); 
    
    $cmb->add_field( array(
        'name' => 'Main Banner(Desktop)',
        'id'   => 'banner_img',
        'desc' => 'Image size - 1920x420',
        'type' => 'file_list',
        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array( 'type' => 'image' ), // Only images attachment

    ) );

    $cmb->add_field( array(
        'name' => 'Main Banner (Mobile)',
        'id'   => 'mob_banner_img',
        'desc' => 'Image size - 600x400',
        'type' => 'file_list',
        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array( 'type' => 'image' ), // Only images attachment

    ) );


	//Section One
	$cmb = new_cmb2_box( array(
        'id'           => 'persnoal-section',
        'title'        => 'Personal Section',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

	$cmb->add_field( array(
        'name' => 'Image',
        'id'   => 'personal_img',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );

	$cmb->add_field( array(
        'name' => 'Title',
        'id'   => '1_title',
        'type' => 'text',
    ) );

	$cmb->add_field( array(
        'name'    => 'Description',
        'id'      => '1_description',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Button Text',
        'id'   => 'button_txt',
        'type' => 'text_medium',
    ) );

    $cmb->add_field( array(
        'name' => 'PDF Url',
        'id'   => 'button_url',
        'type' => 'text_url',
    ) );

	//Section Two
	$cmb = new_cmb2_box( array(
        'id'           => 'exclusive-section',
        'title'        => 'Exclusive Section',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

	$cmb->add_field( array(
        'name' => 'Main Banner',
        'id'   => 'ex_img',
        'desc' => 'Image size - 600x400',
        'type' => 'file_list',
        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array( 'type' => 'image' ), // Only images attachment

    ) );

	$cmb->add_field( array(
        'name' => 'Background Image',
        'id'   => 'back_img',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );

	$cmb->add_field( array(
        'name' => 'Title',
        'id'   => '2_title',
        'type' => 'text',
    ) );

	$cmb->add_field( array(
        'name'    => 'Description',
        'id'      => '2_description',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

	//Section Three
	$cmb = new_cmb2_box( array(
        'id'           => 'residence-section',
        'title'        => 'Residence Section',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

	$cmb->add_field( array(
			'name' => 'Title',
			'id'   => '3_title',
			'type' => 'textarea',
	) );

	$cmb->add_field( array(
		'name' => 'Title',
		'id'   => 'small_expalin',
		'type' => 'text',
	) );


	$cmb->add_field( array(
        'name' => 'Image 1',
        'id'   => 'img_1',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );

	$cmb->add_field( array(
        'name' => 'Main Banner',
        'id'   => 'bresidence_img',
        'desc' => 'Image size - 1296x729',
        'type' => 'file_list',
        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array( 'type' => 'image' ), // Only images attachment

    ) );


}



