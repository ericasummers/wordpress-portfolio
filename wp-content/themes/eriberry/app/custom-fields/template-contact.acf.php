<?php

$group_args = [
    'title'          => 'Contact Template',
    'location_is'    => [ 'page_template', 'template-contact.php' ],
	'hide_on_screen' => [ 'the_content' ]
];

$fields = [

    [ 'text', 'Heading' ],
    [ 'textarea', 'Greeting Subheading' ],
    [ 'text', 'Form Shortcode' ]

];

$field_group = core_register_field_group( 'contact-acf', $group_args, $fields );
