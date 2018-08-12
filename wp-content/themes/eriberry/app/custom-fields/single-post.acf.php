<?php

$group_args = [
    'title'          => 'Single Blog Post',
    'location_is'    => [ 'post_type', 'post' ]
];

$fields = [

    [ 'image', 'Header Image', [ 'return_format' => 'array' ] ]

];

$field_group = core_register_field_group( 'blog-post-acf', $group_args, $fields );
