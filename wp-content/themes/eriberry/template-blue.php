<?php
/*
* Template Name: Blue Template
*/

class Template_Blue extends Core_Template {

    public function template_file() {
			return 'views/template-blue.twig';
    }

    public function fields() {
			
			$fields = core_get_fields($this->obj_id, '', array(
				'cta_title',
				'optional_cta_description',
				'cta_link'
			));
			$fields['post'] = get_post($this->obj_id);
			return $fields;
	}

}

global $post;
new Template_Blue( $post->ID );
