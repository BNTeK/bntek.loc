<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Quote extends Controller_Common {

	public function before()
	{
		parent::before();
		if(!$this->auth->logged_in('admin')) die(); //если не админ, то нахрен из контроллера
		$this->template->title = 'Цитаты';
	}
    
    public function action_index()
    {

    	if(isset($_POST['add']))
    	{
    		$data = Arr::extract($_POST, array('title', 'text', 'autor'));

    		$new_quote = ORM::factory('quote');
    		$new_quote->values($data);
    		$new_quote->create();

    		$msg = 'Цитата добавлена';
    	}

    	

    	$quote = ORM::factory('quote')->find_all();

    	$all_quote = View::factory('admin/quote/all')
    		->set('quote', $quote)
    		->bind('msg', $msg);

    	$add_form = View::factory('admin/quote/add_form');

    	$this->template->content = $all_quote.$add_form;

    }

    public function action_edit()
    {
    	$id = $this->request->param('id');

    	echo Debug::vars($id);
    }

}