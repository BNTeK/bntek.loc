<?php defined('SYSPATH') or die('No direct script access.');

class Model_Cookmenu extends ORM { 

	public function rules()
    {
        return array(
            'nameRU' => array(
                array('not_empty'),
                array('regex', array(':value', '/^[\pL\s.]++$/uD')),
                array('max_length',array(':value', 128)),
                ),
            'nameEN' => array(
                array('not_empty'),
                array('regex', array(':value', '/^[\pL\s.]++$/uD')),
                array('max_length',array(':value', 128)),
                ),
            'nameKZ' => array(
                array('not_empty'),
                array('regex', array(':value', '/^[\pL\s.]++$/uD')),
                array('max_length',array(':value', 128)),
                ),
            'cost' => array(
                array('not_empty'),
                array('numeric'),
                ),
            'remarkRU' => array(
                array('not_empty'),
                array('regex', array(':value', '/^[\pL\s.]++$/uD')),
                ),
            'remarkEN' => array(
                array('not_empty'),
                array('regex', array(':value', '/^[\pL\s.]++$/uD')),
                ),
            'remarkKZ' => array(
                array('not_empty'),
                array('regex', array(':value', '/^[\pL\s.]++$/uD')),
                ),
            );
	
    }

    public function labels()
    {
        return array(
            'nameRU' => __('nameRU'),
            'nameEN' => __('nameEN'),
            'nameKZ'=> __('nameKZ'),
            'remarkRU' => __('remarkRU'),
            'remarkEN' => __('remarkEN'),
            'remarkKZ'=> __('remarkKZ'),
            'Cost' => __('Cost'),
            
        );
    }


    protected $_belongs_to = array(
        'category' => array(
            'model' => 'category',
            'foreign_key' => 'categories',
        ));   
}