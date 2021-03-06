<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'default_driver'  => 'ckeditor',

	'drivers'         => array(
		'tinymce'         => array(
			'js_path'        => 'media/editor/tinymce/js/',
			'options'        => array(
				'theme'         => 'advanced',
			),
		),
		'elrte'           => array(
			'css_path'       => 'media/editor/elrte/css/',
			'js_path'        => 'media/editor/elrte/js/',
		),
		'ckeditor'         => array(
			'js_path'         => 'public/media/editor/ckeditor/',
		),
		'markitup'         => array(
			'js_path'         => 'media/editor/markitup/',
			// no css_path, only skins&sets here!
			'skin_path'       => 'media/editor/markitup/skins/',
			'set_path'        => 'media/editor/markitup/sets/',
		),
	),

	'custom'          => array(
		'test'           => array(
			'driver'        => 'ckeditor',
			'options'       => array(
				'width'        => 700,
				'height'       => 300,
				'lang'			=> 'ru',
				'toolbar' => 'Basic',
				'resize' => FALSE,
				'theme_advanced_toolbar_location' => "top",
			),
		)
	)
);