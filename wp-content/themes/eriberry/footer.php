<?php
class Footer extends Core_Template {

	public function template_file() {
		return 'views/partials/footer.twig';
	}

	public function footer_fields() {

		$fields['copyright_year'] = date('Y');
		$fields['copyright_text'] = get_field( 'copyright_text', 'option' );
		$fields['footer_links'] = core_get_fields( 'option', '', array(
			'footer_links',
		) );

		return $fields;
	}

}
new Footer;
