<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Common extends Controller_Template {
 
    public $template = 'main';
    public function before()
    {
       
        parent::before();
        View::set_global('title', 'Титл сайта');
        View::set_global('description', 'Описание сайта');
        $this->session = session::instance();
        $this->template->content = '&nbsp;';
        $this->template->styles = array('bootstrap.min', 'bootstrap-responsive.min','ourstyle','slider','nf.lightbox','style');
        $this->template->scripts = array('jquery.min','bootstrap.min','NFLightBox');
        I18n::lang($source = 'sys');
        I18n::lang('ru');        
        $this->session->set('lang','ru');
        $slider_data = ORM::factory('image')->where('home','=',1)->find_all();
        View::set_global('slider_data', $slider_data);

        $this->template->auth = Auth::instance();

        

    }
 
  
    static public function check_role()
    {
        if(!Auth::instance()->logged_in())
            {throw new HTTP_Exception_404();}
        else {
            return FALSE;
        }
    }

        static public function url_back()
        {
            $ref = $this->request->referrer();
            $this->request->redirect(URL::site($ref));
        }
  
}