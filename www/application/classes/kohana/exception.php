<?php defined('SYSPATH') or die('No direct script access.');


class Kohana_Exception extends Kohana_Kohana_Exception {
    
    public static function local_link()
    {
         return (bool) (isset($_SERVER['HTTP_REFERER'])
                 AND strstr($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) !== FALSE);
    }
 
    public static function handler(Exception $e)
    {
        // если режим отладки
        if (Kohana::DEVELOPMENT === Kohana::$environment)
        {
            parent::handler($e);
        }
        else
        {
           
            try
            {   
                if (self::local_link()) Kohana::$log->add(Log::ERROR, 'битая ссылка на нашем сайте');
                Kohana::$log->add(Log::ERROR, parent::text($e));
                
                $attributes = array
                (
                    // по умолчанию 500 код и стандартное сообщение
                    'action'  => 500, 
                    'message' => 'Ой! Что-то пошло не так. Мы уже над этим работаем.'
                );
                
                // если исключение класса HTTP_Exception
                if ($e instanceof HTTP_Exception)
                {
                    
                    $attributes['action'] = $e->getCode();
                    $attributes['message'] = rawurlencode($e->getMessage());
                }
                
 
                // Запускаем контроллер управляющий выводом ошибок
                die(
                Request::factory(Route::get('error')->uri($attributes))
                ->execute()
                ->send_headers()
                ->body());
                
            }
            catch (Exception $e)
            {
                // Если это случилось значит ваще пиздец
                
                ob_get_level() and ob_clean();
 
                
                echo parent::text($e);
 
                
                exit(1);
            }
        }
    }
}