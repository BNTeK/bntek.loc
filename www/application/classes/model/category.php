<?php defined('SYSPATH') or die('No direct script access.');

class Model_Category extends ORM { 

	public function rules()
    {

    	return array(
            'cname_ru' => array(
                array('not_empty'),
                
                ),
            'cname_en' => array(
                array('not_empty'),
                
                ),
            'cname_kz' => array(
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