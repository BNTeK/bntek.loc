<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-10 02:51:21 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-10-10 02:51:21 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\bntek.loc\www\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('images')
#3 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\common.php(19): Kohana_ORM::factory('image')
#8 [internal function]: Controller_Common->before()
#9 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-10 02:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:51:31 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-10-10 02:51:31 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\bntek.loc\www\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('images')
#3 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\common.php(19): Kohana_ORM::factory('image')
#8 [internal function]: Controller_Common->before()
#9 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-10 02:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:52:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:52:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:53:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:53:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:53:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:53:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:53:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:53:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:53:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 02:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 02:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:05:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:05:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:05:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:05:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:06:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:06:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:06:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:06:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:06:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:06:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:13:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:13:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:13:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:13:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:15:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:15:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:15:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:15:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 03:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 03:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:04:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:04:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:04:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:04:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:05:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:05:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:05:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:05:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:12:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:12:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:12:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:12:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 07:12:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 07:12:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cookmenu was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-10 12:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cookmenu was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-10 12:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/image_veiw was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-10 12:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/image_veiw was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-10 12:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/image_veiw was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-10 12:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/image_veiw was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-10 12:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/image_veiw/pege/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-10 12:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/image_veiw/pege/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-10 12:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-10 12:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-10 12:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:03:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:03:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:04:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:04:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:04:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:04:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 12:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 12:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 21:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 21:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 21:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 21:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}