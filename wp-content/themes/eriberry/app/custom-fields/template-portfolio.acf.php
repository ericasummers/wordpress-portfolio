<?php

$group_args = [
    'title'          => 'Portfolio Template',
    'location_is'    => [ 'page_template', 'template-portfolio.php' ],
	'hide_on_screen' => [ 'the_content' ]
];

$fields = [

    [ 'text', 'Heading' ],
    [ 'textarea', 'Subheading' ],
    [ 'repeater', 'Portfolio Examples', [
        'layout' => 'block',
        'button_label' => 'Add Portfolio Item',
        'min' => 2,
        'max' => 20,
        'sub_fields' => [
            [ 'text', 'Title' ],
            [ 'textarea', 'Description' ],
            [ 'link', 'Live URL', ['return_format' => 'array'] ],
            [ 'link', 'Code Link', ['instructions' => 'Link to code excerpts on Github, Gitlab, etc', 'return_format' => 'array'] ],
            [ 'image', 'Featured Image', ['return_format' => 'array'] ],
            [ 'repeater', 'Other Images', [
                'layout' => 'block',
                'button_label' => 'Add Image',
                'min' => 0,
                'max' => 10,
                'sub_fields' => [
                    [ 'image', 'Example Image', ['return_format' => 'array'] ]
                ]
            ] ]
        ]
    ] ]

];

$field_group = core_register_field_group( 'portfolio-acf', $group_args, $fields );
