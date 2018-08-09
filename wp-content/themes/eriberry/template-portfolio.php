<?php
/*
* Template Name: Portfolio Template
*/

class Template_Portfolio extends Core_Template {

    public function template_file() {
		return 'views/template-portfolio.twig';
    }

    public function fields() {

        $fields = core_get_fields($this->obj_id, '', array(
			'heading',
			'subheading',
			'portfolio_examples'
		));
		$fields['post'] = get_post($this->obj_id);

		$fields['arrow_left'] = get_template_directory_uri() . '/assets/images/scroll-arrow-left.png';
		$fields['arrow_right'] = get_template_directory_uri() . '/assets/images/scroll-arrow-right.png';
		return $fields;

	}

}

global $post;
new Template_Portfolio( $post->ID );
