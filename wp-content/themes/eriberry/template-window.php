<?php
/*
* Template Name: Window Template
*/

class Template_Window extends Core_Template {

    public function template_file() {
		return 'views/template-window.twig';
    }

    public function fields() {
		$post = get_post($this->obj_id);
		return $post;
	}

}

global $post;
new Template_Window( $post->ID );
