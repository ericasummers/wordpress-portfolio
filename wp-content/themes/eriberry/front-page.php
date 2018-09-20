<?php
class Front_Page extends Core_Template {

	public function fields() {

		$fields = core_get_fields($this->obj_id, '', array(
			'background_image',
			'optional_cta_title',
			'optional_cta_description',
			'cta_link'
		));
		$fields['post'] = get_post($this->obj_id);
		$fields['bg_image'] = get_template_directory_uri() . '/assets/images/Bubbles-animation.gif';
		return $fields;

	}

}
global $post;
new Front_Page( $post->ID );
