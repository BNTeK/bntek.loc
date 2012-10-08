<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin extends Controller_Common {
    
     public function action_index ()
    {
         $this->template->content= View::factory('admin/login')
      ->bind('errors', $errors);
        if ( ! isset($_POST['submit'])) return;
        
          if (Auth::instance()->login($_POST['login'], $_POST['password']))
              {
                
              }
              else
              {
                echo "НЕТ";
              }
    }          
    public function action_cookMenu_add()
    {
      $lang = $this->session->get('lang');
      $this->check_role();

      
      $this->template->content= View::factory('admin/addmenu')
      ->bind('errors', $errors)
      ->bind('menu',$menu)
      ->bind('lang', $lang)
      ->bind('category',$category);
      $model = ORM::factory('Cookmenu');
      $category = DB::select('id','cname_'.$lang)->from('categories')->execute()->as_array();
      $menu = $this->getmenu();
       if ( ! isset($_POST['submit'])) return;
      $post = Arr::extract($_POST, array('name_ru','name_en','name_kz','cost','remark_ru','remark_en','remark_kz','categories'),null);
      
      try {
        $model->values($post);
        $model->save(); 
        
      } catch (ORM_Validation_Exception $e) {
        $errors = $e->errors('models'); 
      }
    }

    public function action_cookMenu_del()
    {
      $this->check_role();

      $id = $this->request->param('id');
        $model = ORM::factory('Cookmenu')->where('id','=',$id)->limit(1)->find();
        if($model->loaded()){
        $model->delete();
        $ref = $this->request->referrer();
        $this->request->redirect(URL::site($ref));
        }
    }

    public function action_cookMenu_edit()
    {
      $this->check_role();

      $id = $this->request->param('id');
        $model = ORM::factory('Cookmenu')->where('id','=',$id)->limit(1)->find();
      if($model->loaded()){
        $lang = $this->session->get('lang');
        $this->template->content= View::factory('admin/editmenu')
        ->bind('errors', $errors)
        ->bind('model',$model)
        ->bind('lang', $lang)
        ->bind('category',$category);
        $category = DB::select('id','сname'.$lang)->from('categories')->execute()->as_array();
        if ( ! isset($_POST['submit'])) return;
        $post = Arr::extract($_POST, array('nameRU','nameEN','nameKZ','cost','remarkRU','remarkEN','remarkKZ','categories'),null);
       
      try {
        $model->values($post);
        $model->save();
        
      } catch (ORM_Validation_Exception $e) {
        $errors = $e->errors('models'); 
      }
        }
    }

    public function action_category_add()
      {
        $this->check_role();

      $lang = $this->session->get('lang');
      $this->template->content= View::factory('admin/addcategory')
      ->bind('errors', $errors)
      ->bind('lang', $lang)
      ->bind('category', $category);
       $category = DB::select('id','cname_'.$lang)->from('categories')->execute()->as_array();
       $model = ORM::factory('category');
       $post = Arr::extract($_POST, array('cname_ru','cname_en','cname_kz'),null);

       if ( ! isset($_POST['submit'])) return;
        try {
        $model->values($post);
        $model->save();
        
      } catch (ORM_Validation_Exception $e) {
        $errors = $e->errors('model'); 

       
        
      }
    }
    
    public function action_category_del()
    {
      $this->check_role();

      $id = $this->request->param('id');
        $model = ORM::factory('category')->where('id','=',$id)->limit(1)->find();
        if($model->loaded()){
        $model->delete();
        $ref = $this->request->referrer();
        $this->request->redirect(URL::site($ref));
        }
    }
     

      

    public function action_langChange()
  {
       $this->check_role();

    $id = $this->request->param('id', 'ru');
    $this->session->set('lang', $id);
    $ref = $this->request->referrer();
    $this->request->redirect(URL::site($ref));

  }

  public function getmenu()
  {
      
      $lang = $this->session->get('lang');
      $q = "SELECT `cookmenus`.`id`, `cname_".$lang."`,`cost` , `cookmenus`.`name_" . $lang  . "`,`cookmenus`.`remark_".$lang."` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id`";
      $result = DB::query(Database::SELECT, $q)->execute()->as_array();
      
            return $result;
  }

  public function action_image_add()
  {
    $this->check_role();

    $model = ORM::factory('image');
    $this->template->content= View::factory('admin/addimage')
    ->bind('errors', $errors);
    if ( ! isset($_POST['submit'])) return;
          var_dump($_POST);
           // Создание объекта валидации
                $validate = Validation::factory($_FILES);
 
                // Добавление правил валидации значения 'upload'
                $validate->rule('upload', 'Upload::valid')
                          ->rule('upload', 'Upload::type', array(':value', array('jpg', 'png', 'gif')))
                          ->rule('upload', 'Upload::size', array(':value', '1M'));
 
                if ($validate->check())
                {
                        // Успешная валидация
                        $filename = Upload::save($_FILES['upload'], time()
                          , './img_tmp/', 0777);
 
                        // Ресайз изображения с помощью класса Image
                        $imgname = time();
                        Image::factory($filename)
                                 ->resize(600)
                                 ->save("./img/".$imgname.".jpg");
                        $model->name = $imgname.'.jpg';
                        $model->alt = $_POST['alt'];
                        $model->rel = $_POST['rel'];
                        if(isset($_POST['home_img']))$model->home = $_POST['home_img'];
                        $model->save();
                        unlink($filename);
                }
                else
                {
                        // Вывод ошибки
                        $errors = $validate->errors('upload');
                       
                }


  } 

  


  public function action_image_del()
    {

      $this->check_role();

      $id = $this->request->param('id');
        $model = ORM::factory('image')->where('id','=',$id)->limit(1)->find();
        if($model->loaded()){
          $file="./img/".$model->name;
          unlink($file);
          $model->delete();
          $ref = $this->request->referrer();
          $this->request->redirect(URL::site($ref));
        }
    }

    public function action_recall_check()
    {
      $this->check_role();

      $this->template->content= View::factory('admin/recallcheck')
      ->bind('errors',$errors)
      ->bind('model',$model);
      $q = "SELECT `recalls`.`id`,`name`,`email`,`text`, `theme` FROM `recalls`";
      $model = DB::query(Database::SELECT, $q)->execute()->as_array();
    }

    public function action_recall_del()
    {

        $this->check_role();

          $id = $this->request->param('id');
          $model = ORM::factory('recall')->where('id','=',$id)->limit(1)->find();
        if($model->loaded()){
          $model->delete();
          $ref = $this->request->referrer();
          $this->request->redirect('main/recall');
        }
    }


    public function action_recall_reply()
    {
      $this->check_role();
      $action = $this->request->action();
      $id = $this->request->param('id');
        $model = ORM::factory('recall')->where('id','=',$id)->limit(1)->find();
        if($model->loaded()){
          $reply = ORM::factory('reply');

          $this->template->content= View::factory('admin/reply')
          ->bind('errors', $errors)
          ->bind('data', $data)
          ->bind('answer', $answer)
          ->bind('action', $action)
          ->bind('data_reply', $data_reply);
            $data[] = array('name' => $model->name,
                            'email' => $model->email,
                            'theme' => $model->theme,
                            'text'=> $model->text,
                            'post_time' => $model->post_time,
                            'id' => $model->id,);
            if($model->reply->id > 0)
          {
            $answer['text'] = $model->reply->text;
            $answer['time'] = $model->reply->post_time;
          } 

          }                                                                                                                     
            $check = ORM::factory('reply')->where('recall_id','=',$id )->limit(1)->find();
           if($check->loaded()) $data_reply['text'] = $check->text;
           if ( ! isset($_POST['submit'])) return;
          $post = Arr::extract($_POST, array('text'),null);
          $post['post_time'] = time();
          
           if(!$check->id)
           {
            try {
            $reply->values($post);
            $reply->recall_id = $id;
            $reply->save();                                                                   
            
                }
       catch (ORM_Validation_Exception $e) {
        $errors = $e->errors('models'); 
      }
     }
     else{

          try {
            $check->values($post);
            $check->save();
                }
       catch (ORM_Validation_Exception $e) {
        $errors = $e->errors('models'); 
      }
     }
    }



public function action_page_add()
{
    $this->check_role();

  // create default editor instance 500x300
$editor = editor::factory('CKEditor');
  $this->template->content= View::factory('admin/page_add')->bind('editor',$editor);
   if ( ! isset($_POST['submit'])) return;
}

public function action_logout()
    {
        Auth::instance()->logout(TRUE);
        $this->request->redirect(URL::site('main/index'));
    }          

} // End Page