<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-19 05:05:45 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-19 05:05:45 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/common.php(7): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Common->before()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-19 05:06:31 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-19 05:06:31 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/common.php(7): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Common->before()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-19 05:10:39 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-19 05:10:39 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/common.php(7): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Common->before()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-19 05:11:06 --- ERROR: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-19 05:11:06 --- STRACE: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('main')
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('main', NULL)
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(33): Kohana_View::factory('main')
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/common.php(9): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Common->before()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-19 05:11:14 --- ERROR: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-19 05:11:14 --- STRACE: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('main')
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('main', NULL)
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(33): Kohana_View::factory('main')
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/common.php(9): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Common->before()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-19 05:11:55 --- ERROR: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-19 05:11:55 --- STRACE: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('main')
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('main', NULL)
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(33): Kohana_View::factory('main')
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/common.php(9): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Common->before()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-19 05:11:59 --- ERROR: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-19 05:11:59 --- STRACE: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('main')
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('main', NULL)
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(33): Kohana_View::factory('main')
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/common.php(9): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Common->before()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-19 05:12:24 --- ERROR: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-19 05:12:24 --- STRACE: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('main')
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('main', NULL)
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(33): Kohana_View::factory('main')
#3 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/common.php(9): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Common->before()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-19 05:13:20 --- ERROR: View_Exception [ 0 ]: The requested view /site/main could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-19 05:13:20 --- STRACE: View_Exception [ 0 ]: The requested view /site/main could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('/site/main')
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('/site/main', NULL)
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/main.php(7): Kohana_View::factory('/site/main')
#3 [internal function]: Controller_Main->action_index()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-19 05:13:59 --- ERROR: View_Exception [ 0 ]: The requested view site/main.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-19 05:13:59 --- STRACE: View_Exception [ 0 ]: The requested view site/main.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('site/main.php')
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('site/main.php', NULL)
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/main.php(7): Kohana_View::factory('site/main.php')
#3 [internal function]: Controller_Main->action_index()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-19 05:14:06 --- ERROR: View_Exception [ 0 ]: The requested view site/main.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-19 05:14:06 --- STRACE: View_Exception [ 0 ]: The requested view site/main.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('site/main.php')
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('site/main.php', NULL)
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/main.php(7): Kohana_View::factory('site/main.php')
#3 [internal function]: Controller_Main->action_index()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-19 05:16:24 --- ERROR: View_Exception [ 0 ]: The requested view site/main.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-19 05:16:24 --- STRACE: View_Exception [ 0 ]: The requested view site/main.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('site/main.php')
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('site/main.php', NULL)
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/main.php(7): Kohana_View::factory('site/main.php')
#3 [internal function]: Controller_Main->action_index()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-19 05:16:26 --- ERROR: View_Exception [ 0 ]: The requested view site/main.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-19 05:16:26 --- STRACE: View_Exception [ 0 ]: The requested view site/main.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('site/main.php')
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('site/main.php', NULL)
#2 /home/mikspark/vhosts/bntek.loc/www/application/classes/controller/main.php(7): Kohana_View::factory('site/main.php')
#3 [internal function]: Controller_Main->action_index()
#4 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-19 05:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL $1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-19 05:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL $1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-19 05:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 05:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:04:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:04:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:04:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:04:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:04:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:04:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:04:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:04:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:10:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:10:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:10:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:10:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:12:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:12:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:17:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:17:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:17:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/fontawesome-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:17:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/fontawesome-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:21:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:21:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:27:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: cript ~ APPPATH/views/main.php [ 15 ]
2012-09-19 06:27:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: cript ~ APPPATH/views/main.php [ 15 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/views/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/mikspark/...', 15, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-19 06:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:27:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: cript ~ APPPATH/views/main.php [ 15 ]
2012-09-19 06:27:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: cript ~ APPPATH/views/main.php [ 15 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/application/views/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/mikspark/...', 15, Array)
#1 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/mikspark/...')
#2 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/mikspark/...', Array)
#3 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#6 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/mikspark/vhosts/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-19 06:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:28:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:28:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:28:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:28:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:32:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:32:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:32:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:32:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:34:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:34:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:34:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:34:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:49:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:49:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/banners/1.jpeg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/banners/1.jpeg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/banners/1.jpeg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/banners/1.jpeg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/banners/1.jpeg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/banners/1.jpeg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:50:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:50:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:50:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:50:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 06:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 06:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 07:10:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 07:10:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 07:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 07:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 07:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 07:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/mikspark/vhosts/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}