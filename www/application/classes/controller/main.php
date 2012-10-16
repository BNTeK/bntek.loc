<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Main extends Controller_Common {
    
     public function action_index ()
    {    $model = DB::select('id','caption','position', 'text')->from('pages')->execute()->as_array();
         // $model= ORM::factory('page')->find_all()->as_array();
         foreach ($model as  $value) {
           if($value['position'] == 1) $data['news'][]= $value;
           if($value['position'] == 2) $data['events'][] = $value;
         }
         $this->template->content= View::factory('site/home')
         ->bind('model', $data);
    }

    public function action_menu()
    {   
        $lang = $this->session->get('lang');
        $menu = $this->getmenu();
        //echo debug::vars($menu);
        $this->template->content= View::factory('admin/view_menu')
        ->bind('menu', $menu)
        ->bind('lang', $lang);
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

        if($this->auth->logged_in())
        {
            $model = ORM::factory('recall')->find_all();            
        }
        else
        {
            $model = ORM::factory('recall')->where('status','=',1)->find_all();            
        }

        $action = $this->request->action();
        $send = ORM::factory('recall');

        $this->template->content = View::factory('admin/recallcheck')
            ->bind('model',$model)
            ->bind('action',$action).View::factory('site/recall_send')
                ->bind('errors', $errors)
                ->bind('model', $model)
                ->bind('action', $action);

        if ( ! isset($_POST['submit'])) return;
     
        $post = Arr::extract($_POST, array('name','email','theme','text'),null);
        $postadd = array('status' => 0, 'post_time'=> time());
        $post = Arr::merge($post, $postadd);

        try
        {
            $send->values($post);
            $send->save();
        }
        catch (ORM_Validation_Exception $e)
        {
            $errors = $e->errors('models');      
        }
      
        $ref = $this->request->referrer();
        $this->request->redirect(URL::site($ref));
    }

   /* public function action_image_view()
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
    }*/

    public function action_photos()
    {
        $id = $this->request->param('id');
        $album = ORM::factory('album')->where('id', '=', $id)->find();
        $photos = $album->photos->find_all();


        $this->template->content = View::factory('image/all_photos')
            ->set('all', $photos)
            ->set('album', $album);
    }

    public function action_albums()
    {
        $albums = ORM::factory('album')->find_all();
        $this->template->content = View::factory('image/all_albums')
            ->set('albums', $albums);
    }


    public function action_contact()
    {
        $this->template->content = View::factory('contact');

    }


} // End Page