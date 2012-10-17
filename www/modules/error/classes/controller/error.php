<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Error extends Controller_Template
{
    public $template = '/error/main';

    public function before()
    {
        parent::before();

        $this->template->page = URL::site(rawurldecode(Request::$initial->uri()));
        
        if (Request::$initial !== Request::$current)
        {
            $message = rawurldecode($this->request->param('message'));
            if ($message) $this->template->message = $message;
        }
        else
        {
            $this->request->action(404);
        }

        $this->response->status((int) $this->request->action());
    }

    public function action_404()
    {
        $this->template->title = '404 Страница не найдена';
        $this->template->message = FALSE;    
        $this->response->status(404);
    }

    public function action_503()
    {
        $this->template->title = 'Сайт на реконструкции';
        $this->response->status(503);
    }

    public function action_500()
    {
        $this->template->title = 'Ошибка сервера';
        $this->response->status(503);
    }
}

