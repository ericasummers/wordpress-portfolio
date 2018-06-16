<?php
class Header extends Core_Template {

	public function template_file() {
		return 'views/partials/header.twig';
	}

	public function fields() {
		return core_get_fields( 'option', '', array(
			'header_text',
			'header_logo',
			'theme_toggle_text'
		) );
	}

	public function nav_menu() {

		$menu_items =  core_get_fields( 'option', '', array(
			'theme_toggle_text',
		) );

		// See whether this has a dropdown or not
		// foreach( $menu_items['menu_items'] as $key => $menu_item ) {
		// 	if ($menu_item['submenu_items']) {
		// 		$menu_items['menu_items'][$key]['has_dropdown'] = true;
		// 	}
		// }

		// $menu_items['logo'] = get_template_directory_uri() . '/assets/resources/logo.png';

		return $menu_items;

	}


}
new Header;
