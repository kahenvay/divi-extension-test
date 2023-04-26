<?php

class ULY_HelloWorld extends ET_Builder_Module {

	public $slug       = 'uly_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => 'Ulysse Coates',
		'author_uri' => 'Ulyssecoates.com',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'uly-my-extension' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'uly-my-extension' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'uly-my-extension' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new ULY_HelloWorld;
