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

    	if(isset($_POST['del']))
    	{
    		$id = Arr::get($_POST, 'id');
    		$del_quote = ORM::factory('quote')->where('id', '=', $id)->find();
    		if(isset($del_quote->id))
    		{
    			$del_quote->delete();
    		}
    	}

    	

    	$quote = ORM::factory('quote')->order_by('id', 'DESC')->find_all();

    	$all_quote = View::factory('admin/quote/all')
    		->set('quote', $quote)
    		->bind('msg', $msg);

    	$add_form = View::factory('admin/quote/add_form');

    	$this->template->content = $all_quote.$add_form;

    }

    public function action_edit()
    {
    	$id = $this->request->param('id');

    	if(isset($_POST['edit']))
    	{
    		$data = Arr::extract($_POST, array('title', 'text', 'autor'));

    		$edit_quote = ORM::factory('quote')->where('id', '=', $id)->find();
    		$edit_quote->values($data);
    		$edit_quote->update();
    		$this->request->redirect(URL::site('quote'));
    	}

    	$quote = ORM::factory('quote')->where('id', '=', $id)->find()->as_array();
    	$edit_form = View::factory('admin/quote/edit_form')
    		->set('data', $quote);

    	$this->template->content = $edit_form;
    }

}