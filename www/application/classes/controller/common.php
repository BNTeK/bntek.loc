<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Common extends Controller_Template {
 
    public $template = 'main';
    public function before()
    {
       
        parent::before();
        View::set_global('title', 'Титл сайта');				
        View::set_global('description', 'Описание сайта');
        $this->session = session::instance();
        $this->template->content = '';
        $this->template->styles = array('bootstrap.min', 'bootstrap-responsive.min','ourstyle','style');
        $this->template->scripts = array('jquery.min','bootstrap.min');
        I18n::lang($source = 'sys');
        I18n::lang('ru');        
        $this->session->set('lang','ru');
        }
 
  

  
}