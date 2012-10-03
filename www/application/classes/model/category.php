<?php defined('SYSPATH') or die('No direct script access.');

class Model_Category extends ORM { 

	public function rules()
    {

    	return array(
            'сnameRU' => array(
                array('not_empty'),
                
                ),
            'сnameEN' => array(
                array('not_empty'),
                
                ),
            'сnameKZ' => array(
                array('not_empty'),
                
                ),
            );

    }

    public function labels()
    {
        return array(
            'cnameRU' => __('cnameRU'),
            'cnameEN' => __('cnameEN'),
            'cnameKZ'=> __('cnameKZ'),
                       
        );
    }
}    