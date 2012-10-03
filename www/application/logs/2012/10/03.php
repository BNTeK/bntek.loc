<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-03 05:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-03 05:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-03 05:09:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:09:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:09:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:09:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:22:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/addimage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-03 05:22:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/addimage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-03 05:22:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:22:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:23:04 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-10-03 05:23:04 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\bntek.loc\www\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('images')
#3 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(131): Kohana_ORM::factory('image')
#8 [internal function]: Controller_Admin->action_image_add()
#9 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-03 05:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:23:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method Form::text() ~ APPPATH\views\admin\addimage.php [ 4 ]
2012-10-03 05:23:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method Form::text() ~ APPPATH\views\admin\addimage.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 05:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:25:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:25:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:26:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:26:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:27:37 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: C:\xampp\htdocs\bntek.loc\www ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-10-03 05:27:37 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: C:\xampp\htdocs\bntek.loc\www ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct(false)
#1 C:\xampp\htdocs\bntek.loc\www\modules\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct(false)
#2 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(152): Kohana_Image::factory(false)
#3 [internal function]: Controller_Admin->action_image_add()
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-03 05:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/home was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-03 05:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/home was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-03 05:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:32:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:32:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:32:23 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\site\home.php [ 1 ]
2012-10-03 05:32:23 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\site\home.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 05:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:32:55 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\site\home.php [ 1 ]
2012-10-03 05:32:55 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\site\home.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 05:32:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:32:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:37:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:37:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:37:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:37:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:37:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:37:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:40:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:40:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:42:59 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: C:\xampp\htdocs\bntek.loc\www ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-10-03 05:42:59 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: C:\xampp\htdocs\bntek.loc\www ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct(false)
#1 C:\xampp\htdocs\bntek.loc\www\modules\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct(false)
#2 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(152): Kohana_Image::factory(false)
#3 [internal function]: Controller_Admin->action_image_add()
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-03 05:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:43:11 --- ERROR: ErrorException [ 8 ]: Undefined index: home_img ~ APPPATH\classes\controller\admin.php [ 158 ]
2012-10-03 05:43:11 --- STRACE: ErrorException [ 8 ]: Undefined index: home_img ~ APPPATH\classes\controller\admin.php [ 158 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(158): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 158, Array)
#1 [internal function]: Controller_Admin->action_image_add()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-03 05:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:43:27 --- ERROR: ErrorException [ 8 ]: Undefined index: home_img ~ APPPATH\classes\controller\admin.php [ 158 ]
2012-10-03 05:43:27 --- STRACE: ErrorException [ 8 ]: Undefined index: home_img ~ APPPATH\classes\controller\admin.php [ 158 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(158): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 158, Array)
#1 [internal function]: Controller_Admin->action_image_add()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-03 05:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:44:05 --- ERROR: ErrorException [ 8 ]: Undefined index: home_img ~ APPPATH\classes\controller\admin.php [ 158 ]
2012-10-03 05:44:05 --- STRACE: ErrorException [ 8 ]: Undefined index: home_img ~ APPPATH\classes\controller\admin.php [ 158 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(158): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 158, Array)
#1 [internal function]: Controller_Admin->action_image_add()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-03 05:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:45:46 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: C:\xampp\htdocs\bntek.loc\www ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-10-03 05:45:46 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: C:\xampp\htdocs\bntek.loc\www ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct(false)
#1 C:\xampp\htdocs\bntek.loc\www\modules\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct(false)
#2 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(152): Kohana_Image::factory(false)
#3 [internal function]: Controller_Admin->action_image_add()
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-03 05:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:46:09 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: C:\xampp\htdocs\bntek.loc\www ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-10-03 05:46:09 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: C:\xampp\htdocs\bntek.loc\www ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct(false)
#1 C:\xampp\htdocs\bntek.loc\www\modules\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct(false)
#2 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(152): Kohana_Image::factory(false)
#3 [internal function]: Controller_Admin->action_image_add()
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-03 05:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:46:59 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: C:\xampp\htdocs\bntek.loc\www ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-10-03 05:46:59 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: C:\xampp\htdocs\bntek.loc\www ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct(false)
#1 C:\xampp\htdocs\bntek.loc\www\modules\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct(false)
#2 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(152): Kohana_Image::factory(false)
#3 [internal function]: Controller_Admin->action_image_add()
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-03 05:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:47:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:47:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:47:14 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: C:\xampp\htdocs\bntek.loc\www ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-10-03 05:47:14 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: C:\xampp\htdocs\bntek.loc\www ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct(false)
#1 C:\xampp\htdocs\bntek.loc\www\modules\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct(false)
#2 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(152): Kohana_Image::factory(false)
#3 [internal function]: Controller_Admin->action_image_add()
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-03 05:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:47:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:47:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:47:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:47:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:47:50 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: C:\xampp\htdocs\bntek.loc\www ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-10-03 05:47:50 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: C:\xampp\htdocs\bntek.loc\www ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct(false)
#1 C:\xampp\htdocs\bntek.loc\www\modules\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct(false)
#2 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(152): Kohana_Image::factory(false)
#3 [internal function]: Controller_Admin->action_image_add()
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-03 05:47:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:47:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:47:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:47:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:48:08 --- ERROR: ErrorException [ 8 ]: Undefined index: home_img ~ APPPATH\classes\controller\admin.php [ 158 ]
2012-10-03 05:48:08 --- STRACE: ErrorException [ 8 ]: Undefined index: home_img ~ APPPATH\classes\controller\admin.php [ 158 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(158): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 158, Array)
#1 [internal function]: Controller_Admin->action_image_add()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-03 05:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:00 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_View::bind(), called in C:\xampp\htdocs\bntek.loc\www\application\classes\controller\main.php on line 8 and defined ~ SYSPATH\classes\kohana\view.php [ 309 ]
2012-10-03 05:52:00 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_View::bind(), called in C:\xampp\htdocs\bntek.loc\www\application\classes\controller\main.php on line 8 and defined ~ SYSPATH\classes\kohana\view.php [ 309 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(309): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 309, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\main.php(8): Kohana_View->bind()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-03 05:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:14 --- ERROR: Kohana_Exception [ 0 ]: The as_array property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2012-10-03 05:52:14 --- STRACE: Kohana_Exception [ 0 ]: The as_array property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\main.php(8): Kohana_ORM->__get('as_array')
#1 [internal function]: Controller_Main->action_index()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-03 05:52:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH\classes\controller\main.php [ 9 ]
2012-10-03 05:52:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH\classes\controller\main.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 05:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:12 --- ERROR: ErrorException [ 8 ]: Use of undefined constant name - assumed 'name' ~ APPPATH\classes\controller\main.php [ 9 ]
2012-10-03 05:53:12 --- STRACE: ErrorException [ 8 ]: Use of undefined constant name - assumed 'name' ~ APPPATH\classes\controller\main.php [ 9 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\main.php(9): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Main->action_index()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-03 05:53:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Image::execute() ~ APPPATH\classes\controller\main.php [ 8 ]
2012-10-03 05:53:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Image::execute() ~ APPPATH\classes\controller\main.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 05:53:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH\classes\controller\main.php [ 9 ]
2012-10-03 05:55:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH\classes\controller\main.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 05:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:57:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\site\slider.php [ 171 ]
2012-10-03 05:57:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\site\slider.php [ 171 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 05:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:57:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\site\slider.php [ 171 ]
2012-10-03 05:57:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\site\slider.php [ 171 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 05:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:57:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\site\slider.php [ 171 ]
2012-10-03 05:57:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\site\slider.php [ 171 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 05:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:57:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\site\slider.php [ 171 ]
2012-10-03 05:57:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\site\slider.php [ 171 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 05:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:57:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\site\slider.php [ 171 ]
2012-10-03 05:57:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\site\slider.php [ 171 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 05:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:58:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\site\slider.php [ 171 ]
2012-10-03 05:58:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\site\slider.php [ 171 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 05:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:58:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\site\slider.php [ 171 ]
2012-10-03 05:58:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\site\slider.php [ 171 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 05:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:58:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\site\slider.php [ 171 ]
2012-10-03 05:58:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\site\slider.php [ 171 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 05:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 05:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 05:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:01:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH\views\site\slider.php [ 123 ]
2012-10-03 06:01:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH\views\site\slider.php [ 123 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\application\views\site\slider.php(123): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 123, Array)
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\bntek.loc\www\application\views\site\home.php(1): Kohana_View->__toString()
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(41): Kohana_View->__toString()
#9 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#14 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#17 {main}
2012-10-03 06:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/flowing-rock.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:05:22 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Image as array ~ APPPATH\views\site\slider.php [ 126 ]
2012-10-03 06:05:22 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Image as array ~ APPPATH\views\site\slider.php [ 126 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 06:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.img/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.img/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.img/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.img/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.img/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.img/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.img/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.img/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/img/1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/string(1) was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-03 06:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/string(1) was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-03 06:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/string(1) was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-03 06:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/string(1) was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-03 06:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/string(1) was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/string(1) was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/string(1) was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-03 06:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/string(1) was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-03 06:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/string(1) was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-03 06:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/string(1) was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-03 06:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/mojave.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lightning.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/lotus.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/ladybug.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/pier.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/grass-blades.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/sea-mist.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/images/stones.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/string(1) was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-03 06:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/string(1) was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-03 06:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:11:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\views\site\slider.php [ 126 ]
2012-10-03 06:11:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\views\site\slider.php [ 126 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 06:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img1349261273.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img1349261328.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:12:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:12:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/js/jquery-1.3.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-03 06:13:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-03 06:13:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}