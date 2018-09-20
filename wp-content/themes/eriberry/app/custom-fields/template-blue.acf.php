<?php

$group_args = [
	'title'          => 'Blue Template',
	'location_is'    => [ 'page_template', 'template-blue.php' ]
];

$fields = [
	[ 'text', 'Optional CTA Title' ],
	[ 'text', 'Optional CTA Description' ],
	[ 'link', 'CTA Link', ['return_format' => 'array'] ]
];

$field_group = core_register_field_group( 'template-blue-acf', $group_args, $fields );
