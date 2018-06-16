<?php
class Front_Page extends Core_Template {

	public function fields() {

		$post = get_post($this->obj_id);
		$post->custom_fields = core_get_fields( $this->obj_id, '', array(
			'hello'
		) );

		return $post;

	}

}
global $post;
new Front_Page( $post->ID );
