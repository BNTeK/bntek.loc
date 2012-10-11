<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Main extends Controller_Common {
    
     public function action_index ()
    {
         $this->template->content= View::factory('site/home')
         ->bind('img',$img);
         
         
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
        $action = $this->request->action();
        $model = ORM::factory('recall');
      
      $this->template->content= View::factory('site/recall_send')
      ->bind('errors', $errors)
      ->bind('model', $model)
      ->bind('action', $action);
      if ( ! isset($_POST['submit'])) return;
     
      $post = Arr::extract($_POST, array('name','email','theme','text'),null);
       $postadd = array('status' => 0, 'post_time'=> time());
       $post = Arr::merge($post, $postadd);
      if($model->reply->id > 0)
          {
            $answer['text'] = $model->reply->text;
            $answer['time'] = $model->reply->post_time;
          } 
      try {
        $send->values($post);
        $send->save();
        
      } catch (ORM_Validation_Exception $e) {
        $errors = $e->errors('models');
      
      }

      $ref = $this->request->referrer();
      $this->request->redirect(URL::site($ref));

  }

    public function action_image_view()
    {
        $page = $this->request->param('img');

        if($page < 2) $page = 0;
        else $page = $page - 1;
        
        $total = ORM::factory('image')->count_all();
        $photo = ORM::factory('image')->offset($page)->limit(1)->find();

        View::set_global('title', $photo->alt);

        $pagination = Pagination::factory( array('total_items' => $total, 'items_per_page' => 1));

        $this->template->content = View::factory('site/fancybox')
            ->bind('pagination', $pagination)
            ->bind('photo', $photo);
    }

    public function action_all_photos()
    {
        $all = ORM::factory('image')->find_all();
        $this->template->content = View::factory('site/all_photos')
            ->set('all', $all);
    }

} // End Page