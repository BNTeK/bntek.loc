<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-24 00:04:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `cost`, `name`, `remark` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 00:04:02 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `cost`, `name`, `remark` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(46): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(15): Controller_Admin->getnemu()
#3 [internal function]: Controller_Admin->action_cookMenu_add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 00:04:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:04:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:07:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `cost`, `name`, `remark` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 00:07:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `cost`, `name`, `remark` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(46): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(15): Controller_Admin->getnemu()
#3 [internal function]: Controller_Admin->action_cookMenu_add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 00:07:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:07:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:09:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `cost`, `name`, `remark` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 00:09:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `cost`, `name`, `remark` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(46): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(15): Controller_Admin->getnemu()
#3 [internal function]: Controller_Admin->action_cookMenu_add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 00:09:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:09:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/cookmenu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-24 00:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/cookmenu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-24 00:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/cookmenu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-24 00:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/cookmenu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-24 00:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/add_cookmenu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-24 00:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/add_cookmenu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-24 00:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/cookmenu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-24 00:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/cookmenu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-24 00:10:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `cost`, `name`, `remark` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 00:10:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `cost`, `name`, `remark` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(46): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(15): Controller_Admin->getnemu()
#3 [internal function]: Controller_Admin->action_cookMenu_add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 00:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/cookmenu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-24 00:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/cookmenu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-24 00:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:11:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:11:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:11:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:11:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:36:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:36:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:36:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:36:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:36:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:36:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:36:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:36:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:56:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ')' ~ APPPATH/classes/model/cookmenu.php [ 63 ]
2012-09-24 00:56:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ')' ~ APPPATH/classes/model/cookmenu.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 00:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:56:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ')' ~ APPPATH/classes/model/cookmenu.php [ 63 ]
2012-09-24 00:56:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ')' ~ APPPATH/classes/model/cookmenu.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 00:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:56:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ')' ~ APPPATH/classes/model/cookmenu.php [ 63 ]
2012-09-24 00:56:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ')' ~ APPPATH/classes/model/cookmenu.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 00:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:56:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
2012-09-24 00:56:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 00:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:56:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
2012-09-24 00:56:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 00:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:56:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
2012-09-24 00:56:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 00:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:56:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
2012-09-24 00:56:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 00:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:57:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
2012-09-24 00:57:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 00:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:57:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
2012-09-24 00:57:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 00:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:57:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
2012-09-24 00:57:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 00:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:57:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
2012-09-24 00:57:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 00:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:57:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
2012-09-24 00:57:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 00:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:57:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
2012-09-24 00:57:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 00:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:57:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
2012-09-24 00:57:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 00:57:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
2012-09-24 00:57:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/model/cookmenu.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 00:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 00:57:32 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'category' in 'field list' [ SELECT `id`, `cost`, `nameEn`, `remarkEn`, `category` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 00:57:32 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'category' in 'field list' [ SELECT `id`, `cost`, `nameEn`, `remarkEn`, `category` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(46): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(15): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 00:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 00:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:06:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'category' in 'field list' [ SELECT `id`, `cost`, `nameEn`, `remarkEn`, `category` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 01:06:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'category' in 'field list' [ SELECT `id`, `cost`, `nameEn`, `remarkEn`, `category` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(46): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(15): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 01:06:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:06:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:06:29 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'category' in 'field list' [ SELECT `id`, `cost`, `nameEn`, `remarkEn`, `category` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 01:06:29 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'category' in 'field list' [ SELECT `id`, `cost`, `nameEn`, `remarkEn`, `category` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(46): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(15): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 01:06:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:06:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:08:27 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'category' in 'field list' [ SELECT `id`, `cost`, `nameEn`, `remarkEn`, `category` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 01:08:27 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'category' in 'field list' [ SELECT `id`, `cost`, `nameEn`, `remarkEn`, `category` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(46): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(15): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 01:08:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:08:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:08:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'category' in 'field list' [ SELECT `id`, `cost`, `nameEn`, `remarkEn`, `category` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 01:08:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'category' in 'field list' [ SELECT `id`, `cost`, `nameEn`, `remarkEn`, `category` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(46): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(15): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 01:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:08:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'category' in 'field list' [ SELECT `id`, `cost`, `nameEn`, `remarkEn`, `category` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 01:08:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'category' in 'field list' [ SELECT `id`, `cost`, `nameEn`, `remarkEn`, `category` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(46): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(15): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 01:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:08:29 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'category' in 'field list' [ SELECT `id`, `cost`, `nameEn`, `remarkEn`, `category` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 01:08:29 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'category' in 'field list' [ SELECT `id`, `cost`, `nameEn`, `remarkEn`, `category` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(46): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(15): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 01:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:08:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-24 01:08:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 01:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:08:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-24 01:08:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 01:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:08:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-24 01:08:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 01:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:08:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-24 01:08:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 01:08:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-24 01:08:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 01:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:13:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-24 01:13:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 01:13:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:13:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:13:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-24 01:13:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 01:13:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:13:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:15:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-24 01:15:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 01:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:15:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-24 01:15:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 01:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:15:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-24 01:15:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 01:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:15:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-24 01:15:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 01:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:27:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-24 01:27:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 01:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:27:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-24 01:27:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 01:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:27:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-24 01:27:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 01:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:31:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:31:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:31:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:31:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:32:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:32:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:32:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:32:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:33:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:33:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:33:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:33:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:33:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:33:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:33:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:33:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:33:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:33:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:33:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:33:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:35:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:35:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:41:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:41:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:46:37 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('qweweq', 'qweweqwqe', 'qweweqwqe', '123', 'qweewq', 'qwewqeeqw', 'qweeqwewq') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 01:46:37 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('qweweq', 'qweweqwqe', 'qweweqwqe', '123', 'qweewq', 'qwewqeeqw', 'qweeqwewq') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(25): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_add()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-24 01:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:46:50 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('qweweq', 'qweweqwqe', 'qweweqwqe', '123', 'qweewq', 'qwewqeeqw', 'qweeqwewq') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 01:46:50 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('qweweq', 'qweweqwqe', 'qweweqwqe', '123', 'qweewq', 'qwewqeeqw', 'qweeqwewq') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(25): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_add()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-24 01:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:48:05 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('qweweq', 'qweweqwqe', 'qweweqwqe', '123', 'qweewq', 'qwewqeeqw', 'qweeqwewq') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 01:48:05 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('qweweq', 'qweweqwqe', 'qweweqwqe', '123', 'qweewq', 'qwewqeeqw', 'qweeqwewq') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(25): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_add()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-24 01:48:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:48:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:48:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/admin/view_menu.php [ 28 ]
2012-09-24 01:48:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/admin/view_menu.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 01:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:52:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:52:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/admin/view_menu.php [ 1 ]
2012-09-24 01:56:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/admin/view_menu.php [ 1 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/view_menu.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/mikspark/...', 1, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/addmenu.php(2): Kohana_View->__toString()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /home/mikspark/vhosts/bntek.loc/www/application/views/main.php(30): Kohana_View->__toString()
#9 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#10 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#11 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#17 {main}
2012-09-24 01:56:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/views/admin/view_menu.php [ 1 ]
2012-09-24 01:56:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/views/admin/view_menu.php [ 1 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/view_menu.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/mikspark/...', 1, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/addmenu.php(2): Kohana_View->__toString()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /home/mikspark/vhosts/bntek.loc/www/application/views/main.php(30): Kohana_View->__toString()
#9 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#10 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#11 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#17 {main}
2012-09-24 01:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:57:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/views/admin/view_menu.php [ 1 ]
2012-09-24 01:57:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/views/admin/view_menu.php [ 1 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/view_menu.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/mikspark/...', 1, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/addmenu.php(2): Kohana_View->__toString()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /home/mikspark/vhosts/bntek.loc/www/application/views/main.php(30): Kohana_View->__toString()
#9 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#10 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#11 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#17 {main}
2012-09-24 01:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:59:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/views/admin/view_menu.php [ 1 ]
2012-09-24 01:59:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/views/admin/view_menu.php [ 1 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/view_menu.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/mikspark/...', 1, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/addmenu.php(2): Kohana_View->__toString()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /home/mikspark/vhosts/bntek.loc/www/application/views/main.php(30): Kohana_View->__toString()
#9 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#10 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#11 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#17 {main}
2012-09-24 01:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 01:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 01:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:03:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin.php [ 18 ]
2012-09-24 02:03:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin.php [ 18 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(18): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/mikspark/...', 18, Array)
#1 [internal function]: Controller_Admin->action_cookMenu_add()
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-24 02:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:04:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:04:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:05:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:05:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:06:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:06:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:06:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:06:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:07:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:07:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:07:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:07:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:16:01 --- ERROR: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Category class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-09-24 02:16:01 --- STRACE: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Category class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(15): Kohana_ORM->__get('find_all')
#1 [internal function]: Controller_Admin->action_cookMenu_add()
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-24 02:16:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:16:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:16:02 --- ERROR: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Category class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-09-24 02:16:02 --- STRACE: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Category class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(15): Kohana_ORM->__get('find_all')
#1 [internal function]: Controller_Admin->action_cookMenu_add()
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-24 02:16:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:16:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:16:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:16:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:16:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:16:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:29:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:29:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:29:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:29:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:29:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:29:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:29:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:29:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:30:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:30:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:30:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:30:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:30:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:30:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:30:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:30:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:30:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:30:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:30:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:30:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:32:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:32:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:32:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:32:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:34:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:34:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:34:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:34:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:34:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:34:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:35:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:35:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:35:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:35:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:36:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:36:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:36:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:36:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:36:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:36:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:36:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:36:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:40:36 --- ERROR: ErrorException [ 2 ]: array_filter() expects parameter 2 to be a valid callback, function '1' not found or invalid function name ~ APPPATH/views/admin/view_menu.php [ 29 ]
2012-09-24 02:40:36 --- STRACE: ErrorException [ 2 ]: array_filter() expects parameter 2 to be a valid callback, function '1' not found or invalid function name ~ APPPATH/views/admin/view_menu.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_filter() ...', '/home/mikspark/...', 29, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/view_menu.php(29): array_filter(Array, '1')
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/addmenu.php(2): Kohana_View->__toString()
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#8 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /home/mikspark/vhosts/bntek.loc/www/application/views/main.php(30): Kohana_View->__toString()
#10 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#11 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#12 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#13 [internal function]: Kohana_Controller_Template->after()
#14 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#15 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#17 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#18 {main}
2012-09-24 02:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:47:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH/classes/controller/admin.php [ 23 ]
2012-09-24 02:47:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH/classes/controller/admin.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 02:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:47:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH/classes/controller/admin.php [ 23 ]
2012-09-24 02:47:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH/classes/controller/admin.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 02:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:47:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/classes/controller/admin.php [ 22 ]
2012-09-24 02:47:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/classes/controller/admin.php [ 22 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/mikspark/...', 22, Array)
#1 [internal function]: Controller_Admin->action_cookMenu_add()
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-24 02:47:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:47:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:47:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/controller/admin.php [ 22 ]
2012-09-24 02:47:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/controller/admin.php [ 22 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/mikspark/...', 22, Array)
#1 [internal function]: Controller_Admin->action_cookMenu_add()
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-24 02:47:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:47:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:47:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/controller/admin.php [ 22 ]
2012-09-24 02:47:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/controller/admin.php [ 22 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/mikspark/...', 22, Array)
#1 [internal function]: Controller_Admin->action_cookMenu_add()
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-24 02:47:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:47:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:49:00 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/controller/admin.php [ 22 ]
2012-09-24 02:49:00 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/controller/admin.php [ 22 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(22): Kohana_Core::error_handler(4096, 'Object of class...', '/home/mikspark/...', 22, Array)
#1 [internal function]: Controller_Admin->action_cookMenu_add()
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-24 02:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:50:16 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin.php [ 22 ]
2012-09-24 02:50:16 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin.php [ 22 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(22): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/mikspark/...', 22, Array)
#1 [internal function]: Controller_Admin->action_cookMenu_add()
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-24 02:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:52:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/admin.php [ 22 ]
2012-09-24 02:52:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/admin.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 02:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:52:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/admin.php [ 22 ]
2012-09-24 02:52:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/admin.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 02:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:52:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/controller/admin.php [ 22 ]
2012-09-24 02:52:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/controller/admin.php [ 22 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/mikspark/...', 22, Array)
#1 [internal function]: Controller_Admin->action_cookMenu_add()
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-24 02:52:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:52:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:53:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/controller/admin.php [ 22 ]
2012-09-24 02:53:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/controller/admin.php [ 22 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/mikspark/...', 22, Array)
#1 [internal function]: Controller_Admin->action_cookMenu_add()
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-24 02:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:53:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/controller/admin.php [ 22 ]
2012-09-24 02:53:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/controller/admin.php [ 22 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/mikspark/...', 22, Array)
#1 [internal function]: Controller_Admin->action_cookMenu_add()
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-24 02:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:54:01 --- ERROR: ErrorException [ 2 ]: array_filter() expects parameter 2 to be a valid callback, function '1' not found or invalid function name ~ APPPATH/views/admin/view_menu.php [ 29 ]
2012-09-24 02:54:01 --- STRACE: ErrorException [ 2 ]: array_filter() expects parameter 2 to be a valid callback, function '1' not found or invalid function name ~ APPPATH/views/admin/view_menu.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_filter() ...', '/home/mikspark/...', 29, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/view_menu.php(29): array_filter(Array, '1')
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/addmenu.php(2): Kohana_View->__toString()
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#8 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /home/mikspark/vhosts/bntek.loc/www/application/views/main.php(30): Kohana_View->__toString()
#10 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#11 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#12 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#13 [internal function]: Kohana_Controller_Template->after()
#14 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#15 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#17 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#18 {main}
2012-09-24 02:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 02:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 02:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:33:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `cost`, `name`, `remark`, `categories` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 04:33:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `cost`, `name`, `remark`, `categories` FROM `cookmenus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(51): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(20): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 04:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:33:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/controller/admin.php [ 51 ]
2012-09-24 04:33:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/controller/admin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 04:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:33:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/controller/admin.php [ 51 ]
2012-09-24 04:33:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/controller/admin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 04:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:34:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/cookmenu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-24 04:34:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/cookmenu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-24 04:34:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:34:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:34:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:34:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:34:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:34:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:34:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:34:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:34:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:34:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:34:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:34:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:34:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:34:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:34:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:34:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:34:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/controller/admin.php [ 51 ]
2012-09-24 04:34:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/controller/admin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 04:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:34:49 --- ERROR: ErrorException [ 1 ]: Call to a member function where() on a non-object ~ APPPATH/views/admin/view_menu.php [ 29 ]
2012-09-24 04:34:49 --- STRACE: ErrorException [ 1 ]: Call to a member function where() on a non-object ~ APPPATH/views/admin/view_menu.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 04:34:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:34:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:58:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/admin.php [ 54 ]
2012-09-24 04:58:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/admin.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 04:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:58:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/admin.php [ 54 ]
2012-09-24 04:58:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/admin.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 04:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:58:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/admin.php [ 54 ]
2012-09-24 04:58:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/admin.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 04:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 04:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 04:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:04:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 65 ]
2012-09-24 05:04:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:04:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:04:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:05:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 59 ]
2012-09-24 05:05:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:05:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 59 ]
2012-09-24 05:05:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:06:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:06:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:06:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:06:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:06:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:06:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:06:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:06:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:06:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:06:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:07:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:07:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:07:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:07:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:12:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:12:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:12:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:12:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:12:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:12:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:12:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:12:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:13:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:13:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:13:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:13:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:13:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:13:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:13:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:13:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:13:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:13:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:14:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_INC, expecting ']' ~ APPPATH/classes/controller/admin.php [ 59 ]
2012-09-24 05:14:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_INC, expecting ']' ~ APPPATH/classes/controller/admin.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:14:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_INC, expecting ']' ~ APPPATH/classes/controller/admin.php [ 59 ]
2012-09-24 05:14:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_INC, expecting ']' ~ APPPATH/classes/controller/admin.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:14:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_INC, expecting ']' ~ APPPATH/classes/controller/admin.php [ 59 ]
2012-09-24 05:14:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_INC, expecting ']' ~ APPPATH/classes/controller/admin.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:14:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_INC, expecting ']' ~ APPPATH/classes/controller/admin.php [ 59 ]
2012-09-24 05:14:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_INC, expecting ']' ~ APPPATH/classes/controller/admin.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:14:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:14:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:14:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:14:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:15:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
2012-09-24 05:15:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:15:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:15:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:15:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
2012-09-24 05:15:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:15:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:15:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:15:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
2012-09-24 05:15:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:15:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:15:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:15:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
2012-09-24 05:15:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:15:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:15:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:16:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
2012-09-24 05:16:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:16:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
2012-09-24 05:16:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:16:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
2012-09-24 05:16:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:16:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
2012-09-24 05:16:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:16:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
2012-09-24 05:16:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:16:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
2012-09-24 05:16:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:16:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:16:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:16:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
2012-09-24 05:16:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:16:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
2012-09-24 05:16:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:16:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:16:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:17:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:17:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:17:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:17:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:18:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:18:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:18:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:18:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:18:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:18:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:18:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:18:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:19:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:19:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:23:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_key ~ APPPATH/classes/controller/admin.php [ 59 ]
2012-09-24 05:23:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_key ~ APPPATH/classes/controller/admin.php [ 59 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/mikspark/...', 59, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(20): Controller_Admin->getmenu()
#2 [internal function]: Controller_Admin->action_cookMenu_add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 05:23:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:23:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:23:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_key ~ APPPATH/classes/controller/admin.php [ 59 ]
2012-09-24 05:23:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_key ~ APPPATH/classes/controller/admin.php [ 59 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/mikspark/...', 59, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(20): Controller_Admin->getmenu()
#2 [internal function]: Controller_Admin->action_cookMenu_add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 05:23:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:23:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:24:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/controller/admin.php [ 66 ]
2012-09-24 05:24:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/controller/admin.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:24:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:24:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:24:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/controller/admin.php [ 66 ]
2012-09-24 05:24:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/controller/admin.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:24:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:24:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:24:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/classes/controller/admin.php [ 75 ]
2012-09-24 05:24:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/classes/controller/admin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:24:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/classes/controller/admin.php [ 75 ]
2012-09-24 05:24:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/classes/controller/admin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:24:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/classes/controller/admin.php [ 75 ]
2012-09-24 05:24:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/classes/controller/admin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:25:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:25:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:25:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:25:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:25:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:25:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:28:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/admin.php [ 76 ]
2012-09-24 05:28:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/admin.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:28:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/admin.php [ 76 ]
2012-09-24 05:28:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/admin.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:28:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/admin.php [ 75 ]
2012-09-24 05:28:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/admin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:28:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:28:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:28:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/admin.php [ 75 ]
2012-09-24 05:28:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/admin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:28:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/admin.php [ 75 ]
2012-09-24 05:28:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/admin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:29:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:29:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:37:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_RETURN, expecting T_FUNCTION ~ APPPATH/classes/controller/admin.php [ 78 ]
2012-09-24 05:37:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_RETURN, expecting T_FUNCTION ~ APPPATH/classes/controller/admin.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:37:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:37:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:40:40 --- ERROR: Database_Exception [ 1052 ]: Column 'id' in field list is ambiguous [ SELECT `id`, `categories`.`name`,`cost`, `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 05:40:40 --- STRACE: Database_Exception [ 1052 ]: Column 'id' in field list is ambiguous [ SELECT `id`, `categories`.`name`,`cost`, `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(53): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(20): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 05:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:51:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/admin.php [ 17 ]
2012-09-24 05:51:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/admin.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:51:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:51:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:51:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/admin.php [ 17 ]
2012-09-24 05:51:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/admin.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:51:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/admin.php [ 17 ]
2012-09-24 05:51:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/admin.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:51:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/admin.php [ 17 ]
2012-09-24 05:51:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/admin.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:59:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ':' ~ APPPATH/views/admin/addmenu.php [ 21 ]
2012-09-24 05:59:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ':' ~ APPPATH/views/admin/addmenu.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:59:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ':' ~ APPPATH/views/admin/addmenu.php [ 21 ]
2012-09-24 05:59:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ':' ~ APPPATH/views/admin/addmenu.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 05:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 05:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 05:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:01:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH/views/admin/addmenu.php [ 25 ]
2012-09-24 06:01:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH/views/admin/addmenu.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 06:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:03:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:03:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:04:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/admin/addmenu.php [ 41 ]
2012-09-24 06:04:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/admin/addmenu.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 06:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:04:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:04:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:04:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/admin/addmenu.php [ 41 ]
2012-09-24 06:04:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/admin/addmenu.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 06:04:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:04:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:04:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:04:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:05:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/admin/addmenu.php [ 41 ]
2012-09-24 06:05:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/admin/addmenu.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 06:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:05:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/admin/addmenu.php [ 41 ]
2012-09-24 06:05:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/admin/addmenu.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 06:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:05:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:05:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:06:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:06:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:06:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:06:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:06:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:06:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:13:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:13:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:13:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:13:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:25:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/addcategory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-24 06:25:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/addcategory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-24 06:25:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:25:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/addcategory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-24 06:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/addcategory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-24 06:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:38:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `name` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 06:38:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `name` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `n...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(43): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_caregory_Add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 06:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:38:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `name` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 06:38:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `name` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `n...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 06:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:39:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'nameEn' in 'field list' [ SELECT `id`, `nameEn` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 06:39:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'nameEn' in 'field list' [ SELECT `id`, `nameEn` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `n...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 06:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:39:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'nameEn' in 'field list' [ SELECT `id`, `nameEn` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 06:39:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'nameEn' in 'field list' [ SELECT `id`, `nameEn` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `n...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 06:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:41:45 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '` , `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.' at line 1 [ SELECT `cookmenus`.`id`, `categories`.`cNameEn,`cost` , `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 06:41:45 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '` , `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.' at line 1 [ SELECT `cookmenus`.`id`, `categories`.`cNameEn,`cost` , `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `cookmen...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(65): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(20): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_Add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 06:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:42:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'cNameEn' in 'field list' [ SELECT `id`, `cNameEn` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 06:42:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'cNameEn' in 'field list' [ SELECT `id`, `cNameEn` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 06:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:42:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'cNameEn' in 'field list' [ SELECT `id`, `cNameEn` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 06:42:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'cNameEn' in 'field list' [ SELECT `id`, `cNameEn` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 06:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:43:13 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '` , `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.' at line 1 [ SELECT `cookmenus`.`id`, `categories`.`nameEn,`cost` , `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 06:43:13 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '` , `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.' at line 1 [ SELECT `cookmenus`.`id`, `categories`.`nameEn,`cost` , `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `cookmen...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(65): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(20): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_Add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 06:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:43:14 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '` , `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.' at line 1 [ SELECT `cookmenus`.`id`, `categories`.`nameEn,`cost` , `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 06:43:14 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '` , `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.' at line 1 [ SELECT `cookmenus`.`id`, `categories`.`nameEn,`cost` , `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `cookmen...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(65): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(20): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_Add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 06:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:48:56 --- ERROR: Database_Exception [ 1052 ]: Column 'nameEn' in field list is ambiguous [ SELECT `cookmenus`.`id`, `categories`.`nameEn`,`cost` , `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 06:48:56 --- STRACE: Database_Exception [ 1052 ]: Column 'nameEn' in field list is ambiguous [ SELECT `cookmenus`.`id`, `categories`.`nameEn`,`cost` , `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `cookmen...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(67): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(20): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_Add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 06:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:50:52 --- ERROR: Database_Exception [ 1052 ]: Column 'nameEn' in field list is ambiguous [ SELECT `cookmenus`.`id`, `categories`.`nameEn`,`cost` , `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 06:50:52 --- STRACE: Database_Exception [ 1052 ]: Column 'nameEn' in field list is ambiguous [ SELECT `cookmenus`.`id`, `categories`.`nameEn`,`cost` , `nameEn`, `remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `cookmen...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(67): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(20): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_Add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 06:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:53:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:53:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:53:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:53:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:54:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VAR, expecting T_STRING or T_VARIABLE or '$' ~ APPPATH/classes/controller/admin.php [ 68 ]
2012-09-24 06:54:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VAR, expecting T_STRING or T_VARIABLE or '$' ~ APPPATH/classes/controller/admin.php [ 68 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 06:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:54:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VAR, expecting T_STRING or T_VARIABLE or '$' ~ APPPATH/classes/controller/admin.php [ 68 ]
2012-09-24 06:54:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VAR, expecting T_STRING or T_VARIABLE or '$' ~ APPPATH/classes/controller/admin.php [ 68 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 06:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:56:26 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`.`remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories`' at line 1 [ SELECT `cookmenus`.`id`, `categories`.`nameEn`,`cost` , `cookmenus`.`nameEn`,` `cookmenus`.`remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 06:56:26 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`.`remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories`' at line 1 [ SELECT `cookmenus`.`id`, `categories`.`nameEn`,`cost` , `cookmenus`.`nameEn`,` `cookmenus`.`remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `cookmen...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(67): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(20): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_Add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 06:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:56:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`.`remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories`' at line 1 [ SELECT `cookmenus`.`id`, `categories`.`nameEn`,`cost` , `cookmenus`.`nameEn`,` `cookmenus`.`remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 06:56:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`.`remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories`' at line 1 [ SELECT `cookmenus`.`id`, `categories`.`nameEn`,`cost` , `cookmenus`.`nameEn`,` `cookmenus`.`remarkEn` FROM `cookmenus` LEFT JOIN `categories` ON `cookmenus`.`categories` = `categories`.`id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `cookmen...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(67): Kohana_Database_Query->execute()
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(20): Controller_Admin->getmenu()
#3 [internal function]: Controller_Admin->action_cookMenu_Add()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-24 06:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:57:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/admin.php [ 67 ]
2012-09-24 06:57:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/admin.php [ 67 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 06:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:57:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/admin.php [ 67 ]
2012-09-24 06:57:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/admin.php [ 67 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 06:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 06:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 06:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:05:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'nameEn' in 'field list' [ SELECT `id`, `nameEn` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 07:05:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'nameEn' in 'field list' [ SELECT `id`, `nameEn` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `n...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 07:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:05:09 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'nameEn' in 'field list' [ SELECT `id`, `nameEn` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 07:05:09 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'nameEn' in 'field list' [ SELECT `id`, `nameEn` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `n...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 07:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:05:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'nameEn' in 'field list' [ SELECT `id`, `nameEn` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 07:05:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'nameEn' in 'field list' [ SELECT `id`, `nameEn` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `n...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 07:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:05:32 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'nameEn' in 'field list' [ SELECT `id`, `nameEn` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 07:05:32 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'nameEn' in 'field list' [ SELECT `id`, `nameEn` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `n...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 07:05:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:05:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:05:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:05:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:08:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:08:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:08:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:08:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/addcategory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-24 07:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/addcategory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-24 07:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:09:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `name` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 07:09:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT `id`, `name` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `n...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(44): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_caregory_Add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 07:09:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:09:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:10:27 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'cnameKz' in 'field list' [ SELECT `id`, `cnameKz` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 07:10:27 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'cnameKz' in 'field list' [ SELECT `id`, `cnameKz` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(44): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_caregory_Add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 07:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:10:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'cnameKz' in 'field list' [ SELECT `id`, `cnameKz` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 07:10:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'cnameKz' in 'field list' [ SELECT `id`, `cnameKz` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(44): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_caregory_Add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 07:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:11:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/admin/view_menu.php [ 5 ]
2012-09-24 07:11:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/admin/view_menu.php [ 5 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/view_menu.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/mikspark/...', 5, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/addcategory.php(1): Kohana_View->__toString()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /home/mikspark/vhosts/bntek.loc/www/application/views/main.php(30): Kohana_View->__toString()
#9 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#10 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#11 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#17 {main}
2012-09-24 07:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:11:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/admin/view_menu.php [ 5 ]
2012-09-24 07:11:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/admin/view_menu.php [ 5 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/view_menu.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/mikspark/...', 5, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/addcategory.php(1): Kohana_View->__toString()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /home/mikspark/vhosts/bntek.loc/www/application/views/main.php(30): Kohana_View->__toString()
#9 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#10 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#11 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#17 {main}
2012-09-24 07:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:12:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/admin/view_menu.php [ 5 ]
2012-09-24 07:12:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/admin/view_menu.php [ 5 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/view_menu.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/mikspark/...', 5, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/addcategory.php(1): Kohana_View->__toString()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /home/mikspark/vhosts/bntek.loc/www/application/views/main.php(30): Kohana_View->__toString()
#9 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#10 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#11 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#17 {main}
2012-09-24 07:12:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:12:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:12:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:12:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:12:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/admin/view_menu.php [ 5 ]
2012-09-24 07:12:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/admin/view_menu.php [ 5 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/view_menu.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/mikspark/...', 5, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/mikspark/vhosts/bntek.loc/www/application/views/admin/addcategory.php(1): Kohana_View->__toString()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /home/mikspark/vhosts/bntek.loc/www/application/views/main.php(30): Kohana_View->__toString()
#9 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#10 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#11 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#17 {main}
2012-09-24 07:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:15:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:15:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:16:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:16:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:16:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:16:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:17:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:17:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:17:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:17:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:17:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:17:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:18:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:18:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:19:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:19:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:19:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:19:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:19:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:19:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:19:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:19:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:19:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:19:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:19:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:19:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:19:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:19:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:24:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:24:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:24:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:24:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:24:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:24:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:24:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:24:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:24:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_Categories' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-24 07:24:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_Categories' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 07:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:25:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:25:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:26:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:26:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:26:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:26:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:26:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:26:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:26:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:26:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:26:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:26:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:27:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:27:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:27:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:27:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:28:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:28:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:28:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:28:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:28:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/caregory_ad was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-09-24 07:28:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/caregory_ad was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-24 07:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:28:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:28:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:28:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:28:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:31:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:31:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:31:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:31:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:32:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:32:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:32:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:32:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:33:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:33:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:33:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:33:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:34:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:34:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:34:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:34:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:34:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:34:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:37:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/classes/controller/admin.php [ 47 ]
2012-09-24 07:37:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/classes/controller/admin.php [ 47 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/mikspark/...', 47, Array)
#1 [internal function]: Controller_Admin->action_caregory_Add()
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-24 07:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:37:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:37:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:41:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/controller/admin.php [ 48 ]
2012-09-24 07:41:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/controller/admin.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 07:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:42:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/controller/admin.php [ 48 ]
2012-09-24 07:42:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/controller/admin.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 07:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:46:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/admin.php [ 54 ]
2012-09-24 07:46:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/admin.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 07:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:50:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:50:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:50:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:50:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:51:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:51:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:51:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:51:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:51:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:51:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:51:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:51:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:51:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:51:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:51:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:51:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:51:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:51:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 07:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 07:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:07:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:07:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:07:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:07:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:07:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:07:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:07:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:07:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:07:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:07:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:08:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:08:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:08:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:08:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:08:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:08:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:08:49 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('qweqwe', 'qweqew', 'qweewq', '123123', 'йцу', 'йцу', 'йцу') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 08:08:49 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('qweqwe', 'qweqew', 'qweewq', '123123', 'йцу', 'йцу', 'йцу') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(29): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_Add()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-24 08:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:10:18 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('яч', 'яч', 'яч', '323', 'яч', 'яч', 'ячяч') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 08:10:18 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('яч', 'яч', 'яч', '323', 'яч', 'яч', 'ячяч') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(29): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_Add()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-24 08:10:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:10:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:11:44 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('яч', 'яч', 'яч', '323', 'яч', 'яч', 'ячяч') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 08:11:44 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('яч', 'яч', 'яч', '323', 'яч', 'яч', 'ячяч') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(29): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_Add()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-24 08:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:12:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:12:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:12:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:12:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:12:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:12:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:12:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:12:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:14:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:14:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:15:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:15:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:15:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:15:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:15:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:15:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:15:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:15:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:15:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 23 ]
2012-09-24 08:15:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 08:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:17:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:17:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:23:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:23:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:23:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:23:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:23:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:23:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:23:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:23:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:23:57 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('йцуйцу', 'йцуйцу', 'йцууцй', '123123', 'йцууцй', 'йцууцй', 'йцуйцу') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 08:23:57 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('йцуйцу', 'йцуйцу', 'йцууцй', '123123', 'йцууцй', 'йцууцй', 'йцуйцу') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(28): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_Add()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-24 08:23:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:23:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:28:55 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('Хлеб', 'bread', 'НАН', '25', 'тест', 'тест', 'тест') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 08:28:55 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('Хлеб', 'bread', 'НАН', '25', 'тест', 'тест', 'тест') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(28): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_Add()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-24 08:28:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:28:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:29:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:29:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:29:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:29:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:30:11 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('Хлеб', 'Bread', 'НАН', '25', 'тест', 'test', 'тест на казахском') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 08:30:11 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('Хлеб', 'Bread', 'НАН', '25', 'тест', 'test', 'тест на казахском') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(28): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_Add()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-24 08:30:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:30:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:31:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:31:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:31:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:31:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:31:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:31:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:32:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:32:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:32:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CATCH, expecting T_FUNCTION ~ APPPATH/classes/controller/admin.php [ 27 ]
2012-09-24 08:32:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CATCH, expecting T_FUNCTION ~ APPPATH/classes/controller/admin.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 08:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:32:53 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('Хлеб', 'Bread', 'НАН', '25', 'тест', 'test', 'казахский тест') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 08:32:53 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('Хлеб', 'Bread', 'НАН', '25', 'тест', 'test', 'казахский тест') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(26): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_Add()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-24 08:32:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:32:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:36:12 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('Хлеб', 'Bread', 'НАН', '25', 'тест', 'test', 'казахский тест') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 08:36:12 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `fk_cookmenus_categories1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `cookmenus` (`nameRU`, `nameEN`, `nameKZ`, `cost`, `remarkRU`, `remarkEN`, `remarkKZ`) VALUES ('Хлеб', 'Bread', 'НАН', '25', 'тест', 'test', 'казахский тест') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/mikspark/vhosts/bntek.loc/www/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(26): Kohana_ORM->save()
#4 [internal function]: Controller_Admin->action_cookMenu_Add()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-24 08:36:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:36:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:43:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:43:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:49:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:49:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:49:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:49:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:53:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:53:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:54:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:54:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 08:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 08:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 23:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 23:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 23:57:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сname' in 'field list' [ SELECT `id`, `сname` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 23:57:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сname' in 'field list' [ SELECT `id`, `сname` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_Add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 23:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 23:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 23:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 23:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 23:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 23:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 23:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 23:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 23:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 23:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 23:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 23:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 23:57:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сname' in 'field list' [ SELECT `id`, `сname` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-24 23:57:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сname' in 'field list' [ SELECT `id`, `сname` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/admin.php(42): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_caregory_Add()
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-24 23:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 23:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 23:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 23:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 23:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 23:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 23:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 23:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 23:59:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/common.php [ 18 ]
2012-09-24 23:59:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/common.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 23:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 23:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 23:59:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/common.php [ 18 ]
2012-09-24 23:59:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/common.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 23:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 23:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 23:59:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/common.php [ 18 ]
2012-09-24 23:59:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/common.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-24 23:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 23:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 23:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 23:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 23:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-24 23:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}