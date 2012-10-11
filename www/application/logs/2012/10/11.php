<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-11 00:09:44 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-10-11 00:09:44 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('images')
#3 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#4 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/application/classes/controller/common.php(19): Kohana_ORM::factory('image')
#8 [internal function]: Controller_Common->before()
#9 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-11 00:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:09:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:09:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:09:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:09:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:10:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:10:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:10:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:10:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:10:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:10:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:10:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:10:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:12:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:12:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:12:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:12:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:13:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:13:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:13:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:13:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:13:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:13:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:13:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:13:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:13:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:13:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:13:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:13:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:15:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:15:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:15:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:15:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:16:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:16:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:16:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:16:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:16:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:16:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:16:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:16:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:16:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:16:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:16:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 00:16:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 00:16:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:16:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:17:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:17:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:20:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:20:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:22:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:22:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/public/images/lightbox-blank.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:29:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:29:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:29:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:29:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:43:54 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/views/site/fancybox.php [ 43 ]
2012-10-11 00:43:54 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/views/site/fancybox.php [ 43 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/application/views/site/fancybox.php(43): Kohana_Core::error_handler(8, 'Uninitialized s...', '/Users/alx/vhos...', 43, Array)
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(61): include('/Users/alx/vhos...')
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/alx/vhos...', Array)
#3 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/application/views/main.php(45): Kohana_View->__toString()
#5 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(61): include('/Users/alx/vhos...')
#6 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/alx/vhos...', Array)
#7 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-11 00:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:46:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:46:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:46:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:46:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:48:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH/views/site/fancybox.php [ 44 ]
2012-10-11 00:48:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH/views/site/fancybox.php [ 44 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/application/views/site/fancybox.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/alx/vhos...', 44, Array)
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(61): include('/Users/alx/vhos...')
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/alx/vhos...', Array)
#3 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/application/views/main.php(45): Kohana_View->__toString()
#5 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(61): include('/Users/alx/vhos...')
#6 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/alx/vhos...', Array)
#7 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-11 00:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:48:43 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/site/fancybox.php [ 44 ]
2012-10-11 00:48:43 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/site/fancybox.php [ 44 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/application/views/site/fancybox.php(44): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/alx/vhos...', 44, Array)
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(61): include('/Users/alx/vhos...')
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/alx/vhos...', Array)
#3 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/application/views/main.php(45): Kohana_View->__toString()
#5 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(61): include('/Users/alx/vhos...')
#6 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/alx/vhos...', Array)
#7 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-11 00:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:48:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omg/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:48:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omg/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:48:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:48:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:52:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:52:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:53:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:53:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 00:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 00:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:02:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:02:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:02:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:02:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:03:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:03:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:03:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:03:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:03:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:03:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:04:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:04:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:04:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:04:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:06:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:06:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:06:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:06:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:06:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:06:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gallery/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 01:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gallery/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 01:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/image_all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 01:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/image_all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 01:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:14:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/image_all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 01:14:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/image_all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 01:14:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:14:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/image_all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-11 01:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/image_all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-11 01:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:15:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:15:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:18:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/views/site/all_photos.php [ 3 ]
2012-10-11 01:18:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/views/site/all_photos.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-11 01:18:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:18:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:18:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:18:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:18:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:18:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:19:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH/views/site/all_photos.php [ 2 ]
2012-10-11 01:19:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH/views/site/all_photos.php [ 2 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/application/views/site/all_photos.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/alx/vhos...', 2, Array)
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(61): include('/Users/alx/vhos...')
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/alx/vhos...', Array)
#3 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/application/views/main.php(45): Kohana_View->__toString()
#5 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(61): include('/Users/alx/vhos...')
#6 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/alx/vhos...', Array)
#7 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-11 01:19:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:19:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:19:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:19:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:19:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:19:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:19:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:19:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:19:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:19:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:19:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:19:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:19:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:19:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:21:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:21:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 01:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-11 01:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}