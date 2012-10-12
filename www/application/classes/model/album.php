<?php defined('SYSPATH') or die('No direct script access.');

class Model_Album extends ORM {

	protected $_has_many = array(
	    'photos'=>array(
	    	'model'=>'image',
	        'foreign_key'=>'album_id',
	      )
    ); 
}