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
        $this->template->slider = '';
        $this->template->quote = $this->get_quote();
        $this->template->styles = array('bootstrap.min', 'bootstrap-responsive.min','ourstyle','slider','nf.lightbox','style');
        $this->template->scripts = array('jquery.min','bootstrap.min','NFLightBox');
        $this->session->set('lang','ru');

        I18n::lang($source = 'sys');
        I18n::lang('ru');        

        $this->auth = Auth::instance();
        $this->template->auth = $this->auth;
    }

    public function after()
    {
        $slider_data = ORM::factory('image')->where('home','=',1)->find_all();
        $this->template->slider = View::factory('site/slider')->bind('img', $slider_data);
        parent::after();
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

    public function getmenu()
    {
      
      $lang = $this->session->get('lang');
      $q = "SELECT `categories`.`id` `cid`, `cookmenus`.`id`, `cname_".$lang."`,`cost` , `cookmenus`.`name_" . $lang  . "`,`cookmenus`.`remark_".$lang."` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id`";
      $result = DB::query(Database::SELECT, $q)->execute()->as_array();
      $final = array();
      foreach ($result as $item) {
          $final[$item['cid']]['cname_'.$lang] = $item['cname_'.$lang];
          $final[$item['cid']][] = $item;
        //echo debug::vars($item);
      }
            return $final;
    }

    public function get_quote()
    {
        $count = ORM::factory('quote')->count_all() - 1;
        $offset = rand(0, $count);
        $quote = ORM::factory('quote')->offset($offset)->find();

        return View::factory('site/quote_index')->set('quote', $quote);
    }


  
}