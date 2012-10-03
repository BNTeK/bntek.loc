<?php defined('SYSPATH') or die('No direct script access.');

class Model_Recall extends ORM { 

    

public function rules()
    {
		return array(
            'name' => array(
                array('not_empty'),
                
                ),
            'theme' => array(
                array('not_empty'),
                
                ),
            'email' => array(
                array('not_empty'),

                ),

            'text' => array(
                array('not_empty'),
                
                ),
            );

   }

    public function labels()
    {
        return array(
            'name' => __('recall_name'),
            'theme' => __('recall_theme'),
            'email'=> __('recall_email'),
            'text'=> __('recall_text'),
                       
        );
    }
	 }