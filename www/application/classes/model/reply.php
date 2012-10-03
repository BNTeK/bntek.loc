<?php defined('SYSPATH') or die('No direct script access.');

class Model_Reply extends ORM { 

    protected $_has_one = array(
        'recall' => array(
            'model' => 'recall',
            'foreign_key' => 'id',
        ),
    );

   

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