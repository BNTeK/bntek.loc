<?php defined('SYSPATH') or die('No direct script access.');

class Model_Page extends ORM { 
	public function rules()
    {
	return array(
            'caption' => array(
                array('not_empty'),
                ),
            'text' => array(
                array('not_empty'),
                ),
            'position' => array(
                array('not_empty'),
                ),
            );
	}
	
	}