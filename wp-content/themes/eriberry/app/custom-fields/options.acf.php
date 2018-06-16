<?php

$group_args = [
	'title'          => 'Site Options',
	'location_is'    => [ 'options_page', 'acf-options' ]
];

$fields = [

	[ 'tab', 'Header', [ 'placement' => 'left' ] ],

	[ 'text', 'Header Text' ],
	[ 'image', 'Header Logo', [
		'return_format' => 'url'
	] ],
	[ 'text', 'Theme Toggle Text' ],

	[ 'tab', 'Top Menu', [ 'placement' => 'left' ] ],

	[ 'repeater', 'Menu Links', [
		'button_label' => 'Add Link',
		'layout' => 'block',
		'min' => 2,
		'max' => 12,
		'sub_fields' => [
			[ 'link', 'Link', [ 'return_format' => 'array' ] ]
		]
	] ],

	[ 'tab', 'Footer', [ 'placement' => 'left' ] ],

	[ 'text', 'Test' ]

];

$field_group = core_register_field_group( 'options-acf', $group_args, $fields );
