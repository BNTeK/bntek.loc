<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Controller_Common {
    public $errorsip;
    public $error=TRUE;
    public $errors = array();
    protected $captcha;

    public function before()
    {
        parent::before();
        $this->captcha = Captcha::instance();

    }

    public function action_index() {
        $this->request->redirect(URL::site());
        
    }

    public function action_register() {
        
        if ($this->auth->logged_in()) {
                $this->request->redirect(URL::site());
        }

        
        if ($_POST) {
	    //Security::xss_clean(Arr::get($_POST, 'name', '')) прицепить
            $value = Arr::extract($_POST, array('name', 'email', 'password', 'captcha'));
            $validation = Validation::factory($value);
            $validation->label('name', 'имя');
            $validation->label('email', 'почтовый адрес');
            $validation->label('password', 'пароль');
            $validation->label('captcha', 'введите код');
            $validation->rule(TRUE, 'not_empty');
            $validation->rule('email', 'email');
            $validation->rule('password', 'min_length', array(':value', 5));
            //$validation->rule('password_confirm', 'matches', array(':validation', 'password_confirm', 'password'));

            if ($validation->check()) {
                if ($this->captcha($validation['captcha'])) {
                    $email = ORM::factory('user')->where('email','=',$validation['email'])->find();    
                	$name = ORM::factory('user')->where('username','=',$validation['name'])->find();
                    if(isset($email->id)){
                        $errors['validate']='Пользователь с таким Email существует';                        
                    }elseif (isset($name->id)){
                    	$errors['validate']='Пользователь с таким Логином существует';
                    }else{
                     	$model = ORM::factory('user');
                        $model->values(array(
                            'username' => $validation['name'],
                            'email' => $validation['email'],
                            'password' => $validation['password'],
                        ));
                        try {
                            //если все ок сохраняем новы аккаунт
                            $model->save();
                            //добавляем стандартную роль и ..
                            
                            $profile = ORM::factory('my')->set('user_id', $model->id)->save();
                            
                            $model->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
                            $model->add('roles', ORM::factory('role')->where('name', '=', 'noactive')->find());
                            //убираем с шифра id так как аккаунт новый и еще не создался, без id,шифруем только email.      
                            $secret= Encrypt::instance()->encode($validation['email']);    
                            
                            $config = Kohana::$config->load('email');

                            Email::connect($config);
                                $to = $validation['email'];

                                $subject = 'Активация аккаунта';
                                $from = $config['options']['username'];
                                // 'uralsk.kz@list.ru';
                                //$message = 'Здравствуйте,<b>'.$validation['name'].'!</b><br>Вы зарегистрировались на сайте z1.kz, что бы продолжить работу на сайте<br>Вам нужно активировать аккаунт, для этого пройдите по следущей <a href="http://z1.kz/external/outer/activation/'.$secret.'"> ссылке.</a>';
                                $message = View::factory('emails/activation')
                                    ->set('username', $validation['name'])
                                    ->set('secret', $secret);

                                $s = Email::send($to, $from, $subject, $message,$html = TRUE);
                                    if($s){
                                        //стандартные данные после регистрации по умолчанию
                                            //$model = ORM::factory('user')->where('email','=',$validation['email'])->find();
                                            $id = $model->id;
                                            
                                            

                                            /*$oid->values(array(
                                                'userid' => $id,
                                                'login' => $validation['name'],
                                                'bday' => '0',
                                                'bmonth' => '0',
                                                'byear' => '0',
                                                'sex' => '0',
                                                'status' => '0',
                                                ));
                                            $oid->create();*/

                                                copy(url::base(true).'public/userpics/0.jpg','public/userpics/'.$id.'.jpg');
                                                copy(url::base(true).'public/userpics/big0.jpg','public/userpics/big'.$id.'.jpg');
                                        ///////////////////////////////////////////////////////////////////////////////////////////      

                                        Message::set(Message::SUCCESS, 'Сылка для потверждении регистрации, отправлена на Ваш Email.');
                                        $this->request->redirect(URL::base());
                                    }else{
                                        //Message::set(Message::ERROR, 'Внутрений програмный сбой.');
                                        $this->request->redirect(URL::base());
                                    }
                        } catch (ORM_Validation_Exception $e) {
                            echo $e;
                        }
                    }
                }else{
                     $errors['captchaerror'] = 'Введен не корректный Код';
                }
                
            }else{
		$errors = $validation->errors('validate');
            }
        }
        $captcha = $this->captcha->render();
        $register = View::factory('register')
                ->bind('errors', $errors)
                ->bind('captcha', $captcha);
        $this->template->content = $register;
    }

//скрытия формы авторизации или регистрации если пользователь в системе
    public function action_view() {
        if ($this->auth->logged_in()) {
            $this->request->redirect(URL::site());
        } else {
            $this->request->redirect('/profile/login');
        }
    }

//вход в систему
    public function action_login() {
        //$this->captcha = Captcha::instance();    
        $ip = Request::$client_ip;
                    $count = ORM::factory('key')->where('ip','=',$ip)->find();
                        if(isset($count->id) and ($count->count>4))
                        {
                                
                                $captcha = $this->captcha->render();
                                $this->errorsip = $count->count;
                        }
        /*
          Получаем роли пользователя
          foreach ( ORM::factory ( 'user', $this->auth->get_user () )->roles->find_all ()->as_array () as $role )
          $this->roles [] = $role->name;
         */
        if ($this->auth->logged_in()) {
                $this->request->redirect(URL::site());
        }
        
        if ($_POST) {
            $value = Arr::extract($_POST, array('email', 'password','captcha'));
            $validation = Validation::factory($value);
            $validation->label('email', 'почтовый адрес');
            $validation->label('password', 'пароль');
            $validation->rule('email', 'not_empty');
            $validation->rule('password', 'not_empty');
            $validation->rule('email', 'email');
            $validation->rule('password', 'min_length', array(':value', 5));
            if ($validation->check()) {

                if($this->errorsip > 4){
                     if (!$this->captcha($validation['captcha'])) {
                            $this->error = FALSE;
                     }
                }
                if($this->error){
                    $status = $this->auth->login($validation['email'], $validation['password'], TRUE);
                    if ($status) {
                         if(isset($count->id))
                        {
                                $count->delete();
                        }
                        
                        $redirect = Session::instance()->get('redirect', '');
                        Session::instance()->delete('redirect');
                        $this->request->redirect($redirect);
                    } else {
                        //если нету то запишем ошибку
                        if(isset($count->id))
                            {
                                $up = $count->count+1;
                                $count->count=$up;
                                $count->save();
                            }else{
                                $count->ip = $ip;
                                $count->count='1';
                                $count->save();
                            }
                        $errors['autherror'] = 'Неверен логин/пароль';
                    }
                }else{
                        $errors['captchaerror'] = 'Введен не корректный Код';
                } 
            } else {
                $errors = $validation->errors('validate');
            }
        }
        $login = View::factory('login')
                ->bind('captcha', $captcha)
                ->bind('errors', $errors);
        $this->template->content = $login;
    }

//метод выхода с системы
    public function action_logout() {
        $this->auth->logout();
        Cookie::delete('Vanilla');
        $this->request->redirect(URL::base());
        
    }
//валидация капчи
    public function captcha($data) {
        if (Captcha::valid($data)) {
            return TRUE;
        }
        return FALSE;
    }
//восстановление пароля
	public function action_recovery()
	{	
        if ($this->auth->logged_in()) {
                $this->request->redirect(URL::site());
        }
        
		//var_dump(Request::user_agent(array('browser', 'platform', 'version', 'mobile', 'robot')));
            /*
            *-получаем ip
            *-ищем в базе
            *-если есть, получаем сколько было заходов?
            *-если больше 5 то лови капчу
            *-если нет то плюсуем к общему количеству заходов
            */    
        //$this->captcha = Captcha::instance();    
        $ip = Request::$client_ip;
                    $count = ORM::factory('recovery')->where('ip','=',$ip)->find();
                        if(isset($count->id) and ($count->count>4))
                        {
                                $captcha = $this->captcha->render();
                                $this->errorsip = $count->count;
                        }
                                                    
        if($_POST)
		{
			$value = Arr::extract($_POST, array('email','captcha'));
            $validation = Validation::factory($value);
            $validation->label('email', 'почтовый адрес');
            $validation->label('captcha', 'поле капчи');
            $validation->rule('email', 'not_empty');
            $validation->rule('email', 'email');
              if ($validation->check()) {

                if($this->errorsip > 4){
                     if (!$this->captcha($validation['captcha'])) {
                            $this->error = FALSE;
                     }
                }
                if($this->error){
                  	 $email = ORM::factory('user')->where('email','=',$validation['email'])->find();
                  	 if(isset($email->id))
                  	 {

                  	 	$secret= Encrypt::instance()->encode($email->id.'|'.$email->email);    
    	              	$config = Kohana::$config->load('email');
    						Email::connect($config);
    						$to = $validation['email'];
    						$subject = 'Восстановление пароля';
    						//$from = 'uralsk.kz@list.ru';
                            $from = $config['options']['username'];
    						//$message = 'Здравствуйте,<b>'.$email->username.'!</b><br>Вы запросили востановление пароля, для своего аккаунта,что бы продолжить, пройдите по следующей <a href="http://z1.kz/external/outer/recovery/'.$secret.'"> ссылке.</a>';
    						$message = View::factory('emails/recovery')
                                ->set('username', $email->username)
                                ->set('secret', $secret);
                            $s = Email::send($to, $from, $subject, $message,$html = TRUE);
    							if($s)
    							{
    					             if(isset($count->id)){$count->delete();}
                        			Message::set(Message::SUCCESS, 'Сылка для востановления пароля, отправлена на Email.');
    								$this->request->redirect(URL::base());
    							}else{
                  	 				Message::set(Message::ERROR, 'Внутрений програмный сбой.');
                  	 				$this->request->redirect(URL::base());
    							}
                  	 }else{
                        //такого емаила в базе нема..
                            if(isset($count->id))
                            {
                                $up = $count->count+1;
                                $count->count=$up;
                                $count->update();
                            }else{
                                $count->ip = $ip;
                                $count->count='1';
                                $count->create();
                            }
                        $errors['erorrs'] = 'Пользователя с таким Email не существует';
                  	 }
                }else{
                        $errors['captchaerror'] = 'Введен не корректный Код';
                }    
              }else{
              	$errors = $validation->errors('validate');
              }
		}			
        $login = View::factory('recovery')
                ->bind('errors', $errors)
                ->bind('captcha',$captcha);
        $this->template->content = $login;
	}

}