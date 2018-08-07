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

	public function mobile() {

		$mobile['menu_icon'] = get_template_directory_uri() . '/assets/images/hamburger-icon.gif';

		return $mobile;
	}

	public function nav_menu() {

		$menu_items =  core_get_fields( 'option', '', array(
			'menu_links',
		) );

		return $menu_items;

	}

	public function portfolio() {
		return get_field('portfolio_link', 'option');
	}


}
new Header;
