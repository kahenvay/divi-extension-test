<?php

class ULY_HelloWorld extends ET_Builder_Module {

	public $slug       = 'uly_image_link';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => 'Ulysse Coates',
		'author_uri' => 'Ulyssecoates.com',
	);

	public function init() {
		$this->name = esc_html__( 'Image Link', 'uly-my-extension' );
	}

	public function get_fields() {
		return array(
			'text' => array(
				'label'           => esc_html__( 'Text', 'uly-my-extension' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text will appear at the bottom of the image link the module.', 'uly-my-extension' ),
				'toggle_slug'     => 'main_content',
			),
			'url' => array(
				'label'           => esc_html__( 'Url', 'uly-my-extension' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Url the link will go to.', 'uly-my-extension' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<a class="uly-image-link" href="%2$s"><span>%1$s</span></a>', esc_html( $this->props['text'] ),esc_html( $this->props['url'] ) );
	}
}

new ULY_HelloWorld;