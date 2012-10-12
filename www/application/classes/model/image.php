<?php defined('SYSPATH') or die('No direct script access.');

class Model_Image extends ORM {

	protected $_belongs_to = array(
	    'album'    => array(
	        'model'         => 'album',
	        'foreign_key' => 'album_id',
	    )
    );

}