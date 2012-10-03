<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Cookmenu extends Controller_Common {
    
     public function action_index ()
    {
         
       	$this->template->content= View::factory('menu/menu');
    }
 
} // End Page