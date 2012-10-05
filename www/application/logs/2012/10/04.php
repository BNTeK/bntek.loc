<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-04 00:02:21 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-10-04 00:02:21 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('images')
#3 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#4 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/model.php(26): Kohana_ORM->__construct()
#7 /home/shaman/web/bntek.loc/www/application/classes/controller/main.php(9): Kohana_Model::factory('image')
#8 [internal function]: Controller_Main->action_index()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-04 00:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:03:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:03:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:06:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:06:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:07:30 --- ERROR: Kohana_Exception [ 0 ]: Directory ./img_tmp/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2012-10-04 00:07:30 --- STRACE: Kohana_Exception [ 0 ]: Directory ./img_tmp/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(148): Kohana_Upload::save(Array, 1349327250, './img_tmp/', 511)
#1 [internal function]: Controller_Admin->action_image_add()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 00:07:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:07:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:09:35 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable: DOCROOT/img ~ MODPATH/image/classes/kohana/image.php [ 631 ]
2012-10-04 00:09:35 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable: DOCROOT/img ~ MODPATH/image/classes/kohana/image.php [ 631 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(154): Kohana_Image->save('./img/134932737...')
#1 [internal function]: Controller_Admin->action_image_add()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 00:09:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:09:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:09:42 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable: DOCROOT/img ~ MODPATH/image/classes/kohana/image.php [ 631 ]
2012-10-04 00:09:42 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable: DOCROOT/img ~ MODPATH/image/classes/kohana/image.php [ 631 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(154): Kohana_Image->save('./img/134932738...')
#1 [internal function]: Controller_Admin->action_image_add()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 00:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:09:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:09:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:09:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:09:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:12:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:12:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:12:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:12:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:12:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:12:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:12:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:12:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:13:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:13:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:13:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:13:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:13:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:13:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:13:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:13:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:13:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:13:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:14:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:14:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:19:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:19:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:22:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:22:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:23:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:23:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:24:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:24:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 00:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 00:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:17:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:17:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 01:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 01:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 02:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 02:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 02:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 02:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 02:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 02:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 02:12:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 02:12:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 02:12:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 02:12:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 02:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 02:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 02:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 02:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 02:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 02:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 02:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 02:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 02:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 02:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 02:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 02:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:03:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH/classes/controller/admin.php [ 4 ]
2012-10-04 03:03:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH/classes/controller/admin.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 03:03:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:03:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:04:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/controller/admin.php [ 13 ]
2012-10-04 03:04:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/controller/admin.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 03:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:04:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/controller/admin.php [ 19 ]
2012-10-04 03:04:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/controller/admin.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 03:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:04:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/controller/admin.php [ 19 ]
2012-10-04 03:04:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/controller/admin.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 03:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:08:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/controller/admin.php [ 13 ]
2012-10-04 03:08:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/controller/admin.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 03:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:08:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/controller/admin.php [ 13 ]
2012-10-04 03:08:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/controller/admin.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 03:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:08:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/controller/admin.php [ 13 ]
2012-10-04 03:08:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/controller/admin.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 03:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:08:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/controller/admin.php [ 13 ]
2012-10-04 03:08:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/controller/admin.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 03:08:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:08:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:09:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:09:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:10:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:10:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:11:02 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/admin.php [ 11 ]
2012-10-04 03:11:02 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/admin.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 03:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:11:23 --- ERROR: ErrorException [ 8 ]: Use of undefined constant wine - assumed 'wine' ~ MODPATH/auth/config/auth.php [ 7 ]
2012-10-04 03:11:23 --- STRACE: ErrorException [ 8 ]: Use of undefined constant wine - assumed 'wine' ~ MODPATH/auth/config/auth.php [ 7 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/auth/config/auth.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/shaman/we...', 7, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/core.php(800): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/home/shaman/we...')
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('auth')
#4 /home/shaman/web/bntek.loc/www/modules/auth/classes/kohana/auth.php(26): Kohana_Config->load('auth')
#5 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(11): Kohana_Auth::instance()
#6 [internal function]: Controller_Admin->action_index()
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-04 03:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:11:42 --- ERROR: ErrorException [ 8 ]: Use of undefined constant wine - assumed 'wine' ~ APPPATH/config/auth.php [ 7 ]
2012-10-04 03:11:42 --- STRACE: ErrorException [ 8 ]: Use of undefined constant wine - assumed 'wine' ~ APPPATH/config/auth.php [ 7 ]
--
#0 /home/shaman/web/bntek.loc/www/application/config/auth.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/shaman/we...', 7, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/core.php(800): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/home/shaman/we...')
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('auth')
#4 /home/shaman/web/bntek.loc/www/modules/auth/classes/kohana/auth.php(26): Kohana_Config->load('auth')
#5 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(11): Kohana_Auth::instance()
#6 [internal function]: Controller_Admin->action_index()
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-04 03:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:11:51 --- ERROR: ErrorException [ 8 ]: Use of undefined constant wine - assumed 'wine' ~ APPPATH/config/auth.php [ 7 ]
2012-10-04 03:11:51 --- STRACE: ErrorException [ 8 ]: Use of undefined constant wine - assumed 'wine' ~ APPPATH/config/auth.php [ 7 ]
--
#0 /home/shaman/web/bntek.loc/www/application/config/auth.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/shaman/we...', 7, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/core.php(800): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/home/shaman/we...')
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('auth')
#4 /home/shaman/web/bntek.loc/www/modules/auth/classes/kohana/auth.php(26): Kohana_Config->load('auth')
#5 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(11): Kohana_Auth::instance()
#6 [internal function]: Controller_Admin->action_index()
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-04 03:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:12:03 --- ERROR: ErrorException [ 8 ]: Use of undefined constant qwddasdq23123 - assumed 'qwddasdq23123' ~ MODPATH/auth/config/auth.php [ 7 ]
2012-10-04 03:12:03 --- STRACE: ErrorException [ 8 ]: Use of undefined constant qwddasdq23123 - assumed 'qwddasdq23123' ~ MODPATH/auth/config/auth.php [ 7 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/auth/config/auth.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/shaman/we...', 7, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/core.php(800): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/home/shaman/we...')
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('auth')
#4 /home/shaman/web/bntek.loc/www/modules/auth/classes/kohana/auth.php(26): Kohana_Config->load('auth')
#5 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(11): Kohana_Auth::instance()
#6 [internal function]: Controller_Admin->action_index()
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-04 03:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:12:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant asdasd - assumed 'asdasd' ~ MODPATH/auth/config/auth.php [ 7 ]
2012-10-04 03:12:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant asdasd - assumed 'asdasd' ~ MODPATH/auth/config/auth.php [ 7 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/auth/config/auth.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/shaman/we...', 7, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/core.php(800): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/home/shaman/we...')
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('auth')
#4 /home/shaman/web/bntek.loc/www/modules/auth/classes/kohana/auth.php(26): Kohana_Config->load('auth')
#5 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(11): Kohana_Auth::instance()
#6 [internal function]: Controller_Admin->action_index()
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-04 03:12:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:12:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:12:45 --- ERROR: ErrorException [ 8 ]: Use of undefined constant wine - assumed 'wine' ~ APPPATH/config/auth.php [ 7 ]
2012-10-04 03:12:45 --- STRACE: ErrorException [ 8 ]: Use of undefined constant wine - assumed 'wine' ~ APPPATH/config/auth.php [ 7 ]
--
#0 /home/shaman/web/bntek.loc/www/application/config/auth.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/shaman/we...', 7, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/core.php(800): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/home/shaman/we...')
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('auth')
#4 /home/shaman/web/bntek.loc/www/modules/auth/classes/kohana/auth.php(26): Kohana_Config->load('auth')
#5 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(11): Kohana_Auth::instance()
#6 [internal function]: Controller_Admin->action_index()
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-04 03:12:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:12:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:13:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:13:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:15:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:15:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:15:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:15:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:16:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:16:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:17:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:17:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:17:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:17:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 03:19:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 03:19:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:21:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:21:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:21:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:21:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:21:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:21:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:21:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Auth_File::$auth_user ~ APPPATH/classes/controller/admin.php [ 13 ]
2012-10-04 04:21:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Auth_File::$auth_user ~ APPPATH/classes/controller/admin.php [ 13 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/shaman/we...', 13, Array)
#1 [internal function]: Controller_Admin->action_index()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 04:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:21:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Auth_File::$auth_user ~ APPPATH/classes/controller/admin.php [ 13 ]
2012-10-04 04:21:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Auth_File::$auth_user ~ APPPATH/classes/controller/admin.php [ 13 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/shaman/we...', 13, Array)
#1 [internal function]: Controller_Admin->action_index()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 04:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:22:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:22:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:22:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:22:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:28:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC, expecting ';' or '{' ~ APPPATH/classes/controller/admin.php [ 21 ]
2012-10-04 04:28:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC, expecting ';' or '{' ~ APPPATH/classes/controller/admin.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 04:28:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:28:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:29:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/controller/admin.php [ 22 ]
2012-10-04 04:29:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/controller/admin.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 04:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:29:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/classes/controller/admin.php [ 22 ]
2012-10-04 04:29:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/classes/controller/admin.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 04:29:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:29:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:29:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/controller/admin.php [ 62 ]
2012-10-04 04:29:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/controller/admin.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 04:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:31:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:31:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:31:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:31:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:31:45 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 25 ]
2012-10-04 04:31:45 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 25 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/shaman/we...', 25, Array)
#1 [internal function]: Controller_Admin->action_cookMenu_Add()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 04:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:32:52 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 25 ]
2012-10-04 04:32:52 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 25 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/shaman/we...', 25, Array)
#1 [internal function]: Controller_Admin->action_cookMenu_Add()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 04:32:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:32:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:43:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 04:43:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 04:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 04:44:53 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 04:44:53 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 04:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 04:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]:  ~ APPPATH/classes/controller/common.php [ 25 ]
2012-10-04 05:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]:  ~ APPPATH/classes/controller/common.php [ 25 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(22): Controller_Common->check_role()
#1 [internal function]: Controller_Admin->action_cookMenu_Add()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 05:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:36:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:36:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:36:48 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:36:48 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:36:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:36:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:43:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:43:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:43:38 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:43:38 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:43:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:43:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:43:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:43:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:43:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:43:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:43:46 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:43:46 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:44:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/admin.php [ 24 ]
2012-10-04 05:44:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/admin.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 05:44:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:44:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:44:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:44:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(33): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:46:09 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:46:09 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(99): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_category_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:46:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:46:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(99): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_category_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:46:37 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:46:37 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(99): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_category_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:46:38 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:46:38 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(99): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_category_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:46:38 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:46:38 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(99): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_category_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:47:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `id`, `сname_ru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:47:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `id`, `сname_ru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(99): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_category_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:47:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `id`, `сname_ru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:47:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `id`, `сname_ru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(99): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_category_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:49:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `id`, `сname_ru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:49:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `id`, `сname_ru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(99): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_category_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:49:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `id`, `сname_ru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:49:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `id`, `сname_ru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(99): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_category_Add()
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 05:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:54:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:54:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:54:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:54:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:54:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:54:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:57:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `cookmenus`.`id`, `сnameru`,`cost` , `cookmenus`.`nameru`,`cookmenus`.`remarkru` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 05:57:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `cookmenus`.`id`, `сnameru`,`cost` , `cookmenus`.`nameru`,`cookmenus`.`remarkru` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `cookmen...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(146): Kohana_Database_Query->execute()
#2 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(34): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_Add()
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-04 05:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 05:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 05:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:01:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `cookmenus`.`id`, `сnameru`,`cost` , `cookmenus`.`nameru`,`cookmenus`.`remarkru` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 06:01:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `cookmenus`.`id`, `сnameru`,`cost` , `cookmenus`.`nameru`,`cookmenus`.`remarkru` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `cookmen...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(146): Kohana_Database_Query->execute()
#2 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(34): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_Add()
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-04 06:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:02:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `cookmenus`.`id`, `сname_ru`,`cost` , `cookmenus`.`nameru`,`cookmenus`.`remarkru` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 06:02:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `cookmenus`.`id`, `сname_ru`,`cost` , `cookmenus`.`nameru`,`cookmenus`.`remarkru` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `cookmen...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(146): Kohana_Database_Query->execute()
#2 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(34): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_Add()
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-04 06:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:03:24 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `cookmenus`.`id`, `сname_ru`,`cost` , `cookmenus`.`nameru`,`cookmenus`.`remarkru` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 06:03:24 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `cookmenus`.`id`, `сname_ru`,`cost` , `cookmenus`.`nameru`,`cookmenus`.`remarkru` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `cookmen...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(146): Kohana_Database_Query->execute()
#2 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(34): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_Add()
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-04 06:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:03:46 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `cookmenus`.`id`, `сname_ru`,`cost` , `cookmenus`.`nameru`,`cookmenus`.`remark_ru` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 06:03:46 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `cookmenus`.`id`, `сname_ru`,`cost` , `cookmenus`.`nameru`,`cookmenus`.`remark_ru` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `cookmen...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(146): Kohana_Database_Query->execute()
#2 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(34): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_Add()
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-04 06:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:05:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `cookmenus`.`id`, `categories`,`сname_ru`,`cost` , `cookmenus`.`name_ru`,`cookmenus`.`remark_ru` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 06:05:02 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `cookmenus`.`id`, `categories`,`сname_ru`,`cost` , `cookmenus`.`name_ru`,`cookmenus`.`remark_ru` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `cookmen...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(146): Kohana_Database_Query->execute()
#2 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(34): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_Add()
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-04 06:05:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:05:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:05:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `cookmenus`.`id`, `categories`,`сname_ru`,`cost` , `cookmenus`.`name_ru`,`cookmenus`.`remark_ru` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 06:05:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `cookmenus`.`id`, `categories`,`сname_ru`,`cost` , `cookmenus`.`name_ru`,`cookmenus`.`remark_ru` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `cookmen...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(146): Kohana_Database_Query->execute()
#2 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(34): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_Add()
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-04 06:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:05:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `cookmenus`.`id`, `сname_ru`,`cost` , `cookmenus`.`name_ru`,`cookmenus`.`remark_ru` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 06:05:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `cookmenus`.`id`, `сname_ru`,`cost` , `cookmenus`.`name_ru`,`cookmenus`.`remark_ru` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `cookmen...', false, Array)
#1 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(146): Kohana_Database_Query->execute()
#2 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(34): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_Add()
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-04 06:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:06:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:06:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:07:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:07:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:17:58 --- ERROR: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/classes/controller/admin.php [ 36 ]
2012-10-04 06:17:58 --- STRACE: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/classes/controller/admin.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 06:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:19:11 --- ERROR: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/classes/controller/admin.php [ 36 ]
2012-10-04 06:19:11 --- STRACE: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/classes/controller/admin.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 06:19:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:19:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:19:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:19:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:19:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:19:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:23:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:23:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:23:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:23:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:24:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:24:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:24:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:24:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:25:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:25:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:25:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:25:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:28:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:28:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:28:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:28:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:28:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:28:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:28:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:28:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:32:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:32:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:32:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:32:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:35:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:35:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:41:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:41:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:41:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:41:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:55:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:55:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 06:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 06:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:06:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH/views/admin/addcategory_view.php [ 5 ]
2012-10-04 07:06:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH/views/admin/addcategory_view.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 07:06:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:06:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:06:45 --- ERROR: ErrorException [ 8 ]: Undefined index: name.ru ~ APPPATH/views/admin/addcategory_view.php [ 5 ]
2012-10-04 07:06:45 --- STRACE: ErrorException [ 8 ]: Undefined index: name.ru ~ APPPATH/views/admin/addcategory_view.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/addcategory_view.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/admin/addcategory.php(3): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#17 {main}
2012-10-04 07:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:06:58 --- ERROR: ErrorException [ 8 ]: Undefined index: name.ru ~ APPPATH/views/admin/addcategory_view.php [ 5 ]
2012-10-04 07:06:58 --- STRACE: ErrorException [ 8 ]: Undefined index: name.ru ~ APPPATH/views/admin/addcategory_view.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/addcategory_view.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/admin/addcategory.php(3): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#17 {main}
2012-10-04 07:07:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:07:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:07:12 --- ERROR: ErrorException [ 8 ]: Undefined index: name_ru ~ APPPATH/views/admin/addcategory_view.php [ 5 ]
2012-10-04 07:07:12 --- STRACE: ErrorException [ 8 ]: Undefined index: name_ru ~ APPPATH/views/admin/addcategory_view.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/addcategory_view.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/admin/addcategory.php(3): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#17 {main}
2012-10-04 07:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:07:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:07:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:09:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH/views/admin/addmenu.php [ 20 ]
2012-10-04 07:09:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH/views/admin/addmenu.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 07:09:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:09:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:11:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH/views/admin/addmenu.php [ 21 ]
2012-10-04 07:11:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH/views/admin/addmenu.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 07:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:11:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH/views/admin/addmenu.php [ 22 ]
2012-10-04 07:11:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH/views/admin/addmenu.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 07:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:12:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:12:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:16:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VAR, expecting T_STRING or T_VARIABLE or '$' ~ APPPATH/classes/controller/admin.php [ 39 ]
2012-10-04 07:16:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VAR, expecting T_STRING or T_VARIABLE or '$' ~ APPPATH/classes/controller/admin.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 07:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:16:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:16:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:16:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:16:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:17:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:17:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:18:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:18:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:19:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:19:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:19:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:19:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:19:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:19:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:22:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:22:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:22:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:22:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:23:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:23:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:23:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:23:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:24:04 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`, `categories`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf', 'ыф') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 07:24:04 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`, `categories`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf', 'ыф') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(41): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_add()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 07:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:24:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/classes/controller/admin.php [ 38 ]
2012-10-04 07:24:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/classes/controller/admin.php [ 38 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/shaman/we...', 38, Array)
#1 [internal function]: Controller_Admin->action_cookMenu_add()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 07:24:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:24:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:24:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:24:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:24:56 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`, `categories`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf', 'ыф') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 07:24:56 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`, `categories`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf', 'ыф') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(41): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_add()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 07:24:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:24:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:26:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/admin.php [ 42 ]
2012-10-04 07:26:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/admin.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 07:26:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:26:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:26:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:26:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:26:57 --- ERROR: ErrorException [ 8 ]: Undefined index: category ~ APPPATH/classes/controller/admin.php [ 41 ]
2012-10-04 07:26:57 --- STRACE: ErrorException [ 8 ]: Undefined index: category ~ APPPATH/classes/controller/admin.php [ 41 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 41, Array)
#1 [internal function]: Controller_Admin->action_cookMenu_add()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 07:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:27:08 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 07:27:08 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(42): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_add()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 07:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:27:27 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`, `categories`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf', 'ыф') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 07:27:27 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`, `categories`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf', 'ыф') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(41): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_add()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 07:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:28:14 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 07:28:14 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(41): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_add()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 07:28:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:28:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:29:29 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 07:29:29 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(41): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_add()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 07:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:29:33 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 07:29:33 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(41): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_add()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 07:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:29:42 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 07:29:42 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(41): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_add()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 07:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:29:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:29:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:29:45 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 07:29:45 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`) VALUES ('ssas', 'asdasd', 'sdadsa', '1212', 'dsf', 'sdf', 'dsf') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(41): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_add()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 07:29:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:29:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:30:51 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`) VALUES ('asd', 'sad', 'sad', '123123', 'sad', 'sad', 'ads') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 07:30:51 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`) VALUES ('asd', 'sad', 'sad', '123123', 'sad', 'sad', 'ads') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(41): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_add()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 07:30:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:30:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:31:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/classes/controller/admin.php [ 38 ]
2012-10-04 07:31:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/classes/controller/admin.php [ 38 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/shaman/we...', 38, Array)
#1 [internal function]: Controller_Admin->action_cookMenu_add()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 07:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:31:41 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`, `categories`) VALUES ('asd', 'sad', 'sad', '123123', 'sad', 'sad', 'ads', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 07:31:41 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `cookmenus` (`name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`, `categories`) VALUES ('asd', 'sad', 'sad', '123123', 'sad', 'sad', 'ads', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/shaman/web/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(40): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_add()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 07:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:31:45 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/admin/view_menu.php [ 3 ]
2012-10-04 07:31:45 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/admin/view_menu.php [ 3 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/view_menu.php(3): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 3, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/admin/addmenu.php(1): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#17 {main}
2012-10-04 07:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:32:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:32:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:51:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:51:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:51:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:51:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:51:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:51:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 07:51:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 07:51:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 23:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 23:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 23:47:50 --- ERROR: HTTP_Exception_404 [ 404 ]:  ~ APPPATH/classes/controller/common.php [ 25 ]
2012-10-04 23:47:50 --- STRACE: HTTP_Exception_404 [ 404 ]:  ~ APPPATH/classes/controller/common.php [ 25 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(89): Controller_Common->check_role()
#1 [internal function]: Controller_Admin->action_category_add()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 23:47:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 23:47:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 23:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 23:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 23:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 23:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 23:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 23:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 23:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 23:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 23:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 23:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 23:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 23:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 23:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 23:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-04 23:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-04 23:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}