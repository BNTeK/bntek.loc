<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Main extends Controller_Common {
    
     public function action_index ()
    {
         $this->template->content= View::factory('site/home')
         ->bind('img',$img);
         $img = Model::factory('image')->where('home','=',1)->find_all();
         
    }

    public function action_menu()
    {
        $this->template->content= View::factory('site/menu'); 
    }
    public function action_langChange()
  {
       
    $id = $this->request->param('id', 'ru');
    $this->session->set('lang', $id);
    $ref = $this->request->referrer();
    $this->request->redirect(URL::site($ref));

  }
    
    public function action_recall()
  {
        $send = ORM::factory('recall');
        $q = "SELECT `recalls`.`id`,`name`,`email`,`text`,`recalls`.`post_time`,`theme` FROM `recalls`";
        $model = DB::query(Database::SELECT, $q)->execute()->as_array();
        var_dump(time());
      $this->template->content= View::factory('site/recall_send')
      ->bind('errors', $errors)
      ->bind('model', $model);
      $editor = editor::factory();
      if ( ! isset($_POST['submit'])) return;
     
      $post = Arr::extract($_POST, array('name','email','theme','text'),null);
       $postadd = array('status' => 0, 'post_time'=> time());
       $post = Arr::merge($post, $postadd);
      
      try {
        $send->values($post);
        $send->save();
        
      } catch (ORM_Validation_Exception $e) {
        $errors = $e->errors('models');
      
      }

      $ref = $this->request->referrer();
      $this->request->redirect(URL::site($ref));

  }


} // End Page