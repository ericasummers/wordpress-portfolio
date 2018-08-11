<?php

$group_args = [
	'title'          => 'Window Template',
	'location_is'    => [ 'page_template', 'template-window.php' ]
];

$fields = [
	[ 'text', 'CTA Title' ],
	[ 'text', 'Optional CTA Description' ],
	[ 'link', 'CTA Link', ['return_format' => 'array'] ]
];

$field_group = core_register_field_group( 'template-window-acf', $group_args, $fields );
