<?php
/*
* Template Name: Contact Template
*/

class Template_Contact extends Core_Template {

    public function template_file() {
		return 'views/template-contact.twig';
    }

    public function fields() {

        $fields = core_get_fields($this->obj_id, '', array(
			'heading',
			'greeting_subheading',
			'form_shortcode'
		));
		$fields['post'] = get_post($this->obj_id);
		return $fields;

	}

}

global $post;
new Template_Contact( $post->ID );
