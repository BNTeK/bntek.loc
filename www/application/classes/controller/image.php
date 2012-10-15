<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Image extends Controller_Common {

	public function before()
	{
		parent::before();
		if(!$this->auth->logged_in('admin')) die(); //если не админ, то нахрен из контроллера
	}
    
    public function action_index()
    {
        die();
    }

    public function action_albums()
    {
    	$id = $this->request->param('id');

    	if(isset($_POST['add'])) //добавляем
    	{
    		$title = Arr::get($_POST, 'title', '');
    		$new_album = ORM::factory('album');
    		$new_album->title = $title;
    		
    		try
    		{
    			$new_album->create();
    			$this->request->redirect(URL::site('image/albums'));
    		}
    		catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('models');
            }
    	}

    	if(isset($_POST['del'])) //удаляем
    	{
    		$del_id = Arr::get($_POST, 'id', 0);
    		$del_photo = ORM::factory('image')->where('id', '=', $del_id)->find();
    		if(isset($del_photo->id))
    		{
                $del_name = 'img/'.$del_photo->name;
    			$del_photo->delete();
                unlink($del_name);
                $msg = 'Фотограия удалена';
    		}
    	}

        if(isset($_POST['home']))
        {
            $home_id = Arr::get($_POST, 'id', 0);
            $home_photo = ORM::factory('image')->where('id', '=', $home_id)->find();
            if(isset($home_photo->id))
            {
                if($home_photo->home == 0)
                {
                    $home_photo->home = 1;
                    $msg = 'Фотография добавлена на главную';
                }
                else
                {
                    $home_photo->home = 0;
                    $msg = 'Фотография больше не будет показан на главной';
                }                    

                $home_photo->update();
                
            }
        }

        if(isset($_POST['cover']))
        {

            $cover_id = Arr::get($_POST, 'id', 0);
            $img = ORM::factory('image')->where('id', '=', $cover_id)->find();
            if(isset($img->id))
            {
                $album = $img->album;
                $album->cover_id = $cover_id;
                $album->update();
                $msg = 'Новая обложка назначена';
            }
        }

        if(isset($_POST['del_this_album']) AND isset($id))
        {
            $del_album = ORM::factory('album')->where('id', '=', $id)->find();
            if(isset($del_album)) //альбом существует
            {
                $photos = $del_album->photos->find_all();

                foreach ($photos as $item) {
                    unlink('img/'.$item->name);
                    $del_photo = ORM::factory('image')->where('id', '=', $item->id)->find();
                    $del_photo->delete();
                }
                $del_album->delete();

                $this->request->redirect('image/albums');

            }

        }

    	if(isset($id)) //вьюшка кнопки для удаления
    	{
    		$album = ORM::factory('album')->where('id', '=', $id)->find();
    		if(isset($album->id))
    		{
    			$photos = $album->photos->find_all();
    			$this->template->content = View::factory('admin/image/one_album')
    				->set('album', $album)
    				->set('photos', $photos)
                    ->bind('msg', $msg);
    		}
    		else
    		{
    			$this->template->content = View::factory('admin/image/no_album');
    		}
    		
    		
    	}
    	else
    	{
    		$albums = ORM::factory('album')->find_all();
	    	$this->template->content = View::factory('admin/image/all_albums')
	    		->set('albums', $albums).
	    		View::factory('admin/image/add_album');
    	}
    }


    public function action_photos()
    {

    	if(isset($_POST['add'])) //добавляют фотку
    	{
    		$validate = Validation::factory($_FILES);
    		$validate->rule('upload', 'Upload::valid')
                  ->rule('upload', 'Upload::type', array(':value', array('jpg', 'png', 'gif')))
                  ->rule('upload', 'Upload::size', array(':value', '1M'));

            if ($validate->check())
            {
            	$model = ORM::factory('image');
            	$data = Arr::extract($_POST, array('alt', 'home_img', 'rel', 'album_id'), '');

            	$filename = Upload::save($_FILES['upload'], time(), './img_tmp/', 0777);
            	$imgname = time();
            	Image::factory($filename)
            		->resize(600, 600)
                    ->save("./img/".$imgname.".jpg");
                $data['name'] = $imgname.'.jpg';
		        $model->values($data);
	            if(isset($_POST['home_img']))$model->home = $_POST['home_img'];
	            $model->create();
	            unlink($filename);
            }
            else
            {
            	$errors = $validate->errors('upload');
            }

    	}

        $albums = ORM::factory('album')->find_all();
    	$this->template->content = View::factory('admin/image/add_photo')
    		->set('albums', $albums)
    		->bind('errors', $errors);
    }
}