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

	[ 'repeater', 'Menu Links', [
		'button_label' => 'Add Link',
		'layout' => 'block',
		'min' => 2,
		'max' => 12,
		'sub_fields' => [
			[ 'link', 'Link', [ 'return_format' => 'array' ] ]
		]
	] ],

	[ 'link', 'Portfolio Link', ['return_format' => 'array'] ],

	[ 'tab', 'Footer', [ 'placement' => 'left' ] ],

	[ 'text', 'Copyright Text' ],

	[ 'repeater', 'Footer Links', [
		'button_label' => 'Add Footer Link',
		'layout' => 'block',
		'min' => 1,
		'max' => 4,
		'sub_fields' => [
			[ 'link', 'Link', [ 'return_format' => 'array' ] ]
		]
	] ]

];

$field_group = core_register_field_group( 'options-acf', $group_args, $fields );
