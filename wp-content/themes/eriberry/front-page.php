<?php
class Front_Page extends Core_Template {

	public function fields() {

		$post = get_post($this->obj_id);
		return $post;

	}

}
global $post;
new Front_Page( $post->ID );
