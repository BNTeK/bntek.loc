<?php defined('SYSPATH') or die('No direct script access.');

class Model_Cookmenu extends ORM { 

	public function rules()
    {
        return array(
            'name_ru' => array(
                array('not_empty'),
                array('regex', array(':value', '/^[\pL\s.]++$/uD')),
                array('max_length',array(':value', 128)),
                ),
            'cost' => array(
                array('not_empty'),
                array('numeric'),
                ),
            'remark_ru' => array(
                array('not_empty'),
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