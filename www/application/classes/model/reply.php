<?php defined('SYSPATH') or die('No direct script access.');

class Model_Reply extends ORM { 

public function rules()
    {
		return array(
            'text' => array(
                array('not_empty'),
                
                ),
            );

   }

    public function labels()
    {
        return array(
            'text'=> __('reply_text'),
                       
        );
    }
	 }