<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-15 00:36:04 --- ERROR: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/views/site/recall_send.php [ 1 ]
2012-10-15 00:36:04 --- STRACE: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/views/site/recall_send.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 00:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:24 --- ERROR: Kohana_Exception [ 0 ]: The reply property does not exist in the Model_Recall class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-10-15 00:36:24 --- STRACE: Kohana_Exception [ 0 ]: The reply property does not exist in the Model_Recall class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/admin/recallcheck.php(12): Kohana_ORM->__get('reply')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/site/recall_send.php(1): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(45): Kohana_View->__toString()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#14 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#17 {main}
2012-10-15 00:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:40:23 --- ERROR: Database_Exception [ 1146 ]: Table 'vinograd.albums' doesn't exist [ SHOW FULL COLUMNS FROM `albums` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-15 00:40:23 --- STRACE: Database_Exception [ 1146 ]: Table 'vinograd.albums' doesn't exist [ SHOW FULL COLUMNS FROM `albums` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('albums')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/image.php(126): Kohana_ORM::factory('album')
#7 [internal function]: Controller_Image->action_albums()
#8 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Image))
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#12 {main}
2012-10-15 00:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349421476.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349765959.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781803.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781827.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781818.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781811.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349781840.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349784095.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1349784095.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:04:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:04:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:04:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'image.album_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`name` AS `name`, `image`.`alt` AS `alt`, `image`.`rel` AS `rel`, `image`.`home` AS `home` FROM `images` AS `image` WHERE `image`.`album_id` = '9' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-15 01:04:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'image.album_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`name` AS `name`, `image`.`alt` AS `alt`, `image`.`rel` AS `rel`, `image`.`home` AS `home` FROM `images` AS `image` WHERE `image`.`album_id` = '9' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/modules/orm/classes/kohana/orm.php(993): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/modules/orm/classes/kohana/orm.php(934): Kohana_ORM->_load_result(true)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/image.php(111): Kohana_ORM->find_all()
#4 [internal function]: Controller_Image->action_albums()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Image))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-15 01:04:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:04:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:06:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:06:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:06:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:06:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:10:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:10:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:11:28 --- ERROR: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ DELETE FROM `categories` WHERE `id` = '3' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-15 01:11:28 --- STRACE: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`vinograd`.`cookmenus`, CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`)) [ DELETE FROM `categories` WHERE `id` = '3' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `ca...', false, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/modules/orm/classes/kohana/orm.php(1368): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/admin.php(119): Kohana_ORM->delete()
#3 [internal function]: Controller_Admin->action_category_del()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 01:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:12:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:12:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:14:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/image_view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-15 01:14:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/image_view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-15 01:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:21:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:21:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/image_view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-15 01:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/image_view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-15 01:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:28:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:28:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:28:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:28:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:31:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Main::getmenu() ~ APPPATH/classes/controller/main.php [ 15 ]
2012-10-15 00:31:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Main::getmenu() ~ APPPATH/classes/controller/main.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 00:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:32:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:32:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:33:41 --- ERROR: View_Exception [ 0 ]: The requested view view_menu.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:33:41 --- STRACE: View_Exception [ 0 ]: The requested view view_menu.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('view_menu.php')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('view_menu.php', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('view_menu.php')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:33:48 --- ERROR: View_Exception [ 0 ]: The requested view view_menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:33:48 --- STRACE: View_Exception [ 0 ]: The requested view view_menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('view_menu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('view_menu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('view_menu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:33:49 --- ERROR: View_Exception [ 0 ]: The requested view view_menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:33:49 --- STRACE: View_Exception [ 0 ]: The requested view view_menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('view_menu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('view_menu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('view_menu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:34:12 --- ERROR: View_Exception [ 0 ]: The requested view view_menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:34:12 --- STRACE: View_Exception [ 0 ]: The requested view view_menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('view_menu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('view_menu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('view_menu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:34:37 --- ERROR: View_Exception [ 0 ]: The requested view view_menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:34:37 --- STRACE: View_Exception [ 0 ]: The requested view view_menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('view_menu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('view_menu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('view_menu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:34:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:34:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:34:54 --- ERROR: View_Exception [ 0 ]: The requested view view_menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:34:54 --- STRACE: View_Exception [ 0 ]: The requested view view_menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('view_menu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('view_menu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('view_menu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:35:35 --- ERROR: View_Exception [ 0 ]: The requested view view_menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:35:35 --- STRACE: View_Exception [ 0 ]: The requested view view_menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('view_menu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('view_menu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('view_menu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:35:54 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:35:54 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:35:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:35:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:06 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:06 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:08 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:08 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:08 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:08 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:09 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:09 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:09 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:09 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:09 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:09 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:10 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:10 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:10 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:10 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:10 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:10 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:11 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:11 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:11 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:11 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:11 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:11 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:11 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:11 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:11 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:11 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:11 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:11 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:12 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:12 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:12 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:12 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:12 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:12 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:12 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:12 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:12 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:12 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:12 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:12 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:12 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:12 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:12 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:12 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:12 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:12 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:12 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:12 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:13 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:13 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:13 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:13 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:13 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:13 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:13 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:13 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:13 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:13 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:36:18 --- ERROR: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:36:18 --- STRACE: View_Exception [ 0 ]: The requested view viewmenu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('viewmenu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('viewmenu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(16): Kohana_View::factory('viewmenu')
#3 [internal function]: Controller_Main->action_menu()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 00:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:37:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH/views/admin/viewmenu.php [ 3 ]
2012-10-15 00:37:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH/views/admin/viewmenu.php [ 3 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/admin/viewmenu.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/shaman/we...', 3, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-15 00:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:37:52 --- ERROR: ErrorException [ 8 ]: Undefined index: name_ ~ APPPATH/views/admin/viewmenu.php [ 3 ]
2012-10-15 00:37:52 --- STRACE: ErrorException [ 8 ]: Undefined index: name_ ~ APPPATH/views/admin/viewmenu.php [ 3 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/admin/viewmenu.php(3): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 3, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-15 00:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:38:50 --- ERROR: ErrorException [ 8 ]: Undefined index: name_ ~ APPPATH/views/admin/viewmenu.php [ 3 ]
2012-10-15 00:38:50 --- STRACE: ErrorException [ 8 ]: Undefined index: name_ ~ APPPATH/views/admin/viewmenu.php [ 3 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/admin/viewmenu.php(3): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 3, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-15 00:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:45:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:45:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:47:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:47:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:50:18 --- ERROR: View_Exception [ 0 ]: The requested view admin/view_menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 00:50:18 --- STRACE: View_Exception [ 0 ]: The requested view admin/view_menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/view_menu')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/view_menu', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/admin/addmenu.php(1): Kohana_View::factory('admin/view_menu')
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#8 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 [internal function]: Kohana_Controller_Template->after()
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#15 {main}
2012-10-15 00:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 00:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 00:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:08:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:08:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:11:51 --- ERROR: ErrorException [ 8 ]: Undefined index: name_ru ~ APPPATH/views/admin/view_menu.php [ 4 ]
2012-10-15 01:11:51 --- STRACE: ErrorException [ 8 ]: Undefined index: name_ru ~ APPPATH/views/admin/view_menu.php [ 4 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/admin/view_menu.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 4, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-15 01:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:12:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:12:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:13:29 --- ERROR: ErrorException [ 8 ]: Undefined index: name_ru ~ APPPATH/views/admin/view_menu.php [ 4 ]
2012-10-15 01:13:29 --- STRACE: ErrorException [ 8 ]: Undefined index: name_ru ~ APPPATH/views/admin/view_menu.php [ 4 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/admin/view_menu.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 4, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-15 01:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:15:33 --- ERROR: ErrorException [ 8 ]: Undefined index: cname ~ APPPATH/classes/controller/common.php [ 55 ]
2012-10-15 01:15:33 --- STRACE: ErrorException [ 8 ]: Undefined index: cname ~ APPPATH/classes/controller/common.php [ 55 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/common.php(55): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 55, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(15): Controller_Common->getmenu()
#2 [internal function]: Controller_Main->action_menu()
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-15 01:15:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:15:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:16:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:16:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:16:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:16:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:16:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:16:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]:  ~ APPPATH/classes/controller/common.php [ 35 ]
2012-10-15 01:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]:  ~ APPPATH/classes/controller/common.php [ 35 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/admin.php(23): Controller_Common::check_role()
#1 [internal function]: Controller_Admin->action_cookMenu_add()
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-15 01:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:16:39 --- ERROR: ErrorException [ 8 ]: Undefined index: cnameru ~ APPPATH/classes/controller/common.php [ 55 ]
2012-10-15 01:16:39 --- STRACE: ErrorException [ 8 ]: Undefined index: cnameru ~ APPPATH/classes/controller/common.php [ 55 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/common.php(55): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 55, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(15): Controller_Common->getmenu()
#2 [internal function]: Controller_Main->action_menu()
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-15 01:16:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:16:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:16:55 --- ERROR: ErrorException [ 8 ]: Undefined index: name_ru ~ APPPATH/views/admin/view_menu.php [ 4 ]
2012-10-15 01:16:55 --- STRACE: ErrorException [ 8 ]: Undefined index: name_ru ~ APPPATH/views/admin/view_menu.php [ 4 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/admin/view_menu.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 4, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-15 01:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:16:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:16:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:23:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/admin/view_menu.php [ 10 ]
2012-10-15 01:23:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/admin/view_menu.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 01:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:23:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:23:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:24:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/classes/controller/main.php [ 15 ]
2012-10-15 01:24:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/classes/controller/main.php [ 15 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/shaman/we...', 15, Array)
#1 [internal function]: Controller_Main->action_menu()
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-15 01:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:24:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:24:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:25:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:25:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:29:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:29:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:29:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:29:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:30:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:30:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:30:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:30:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:30:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:30:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:31:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:31:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:31:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ')' ~ APPPATH/classes/model/category.php [ 13 ]
2012-10-15 01:31:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ')' ~ APPPATH/classes/model/category.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 01:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:31:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ')' ~ APPPATH/classes/model/category.php [ 13 ]
2012-10-15 01:31:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ')' ~ APPPATH/classes/model/category.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 01:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:32:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/model/category.php [ 12 ]
2012-10-15 01:32:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/model/category.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 01:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:32:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:32:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:32:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:32:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:34:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:34:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:34:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:34:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:36:04 --- ERROR: ErrorException [ 1 ]: Class 'debus' not found ~ APPPATH/views/admin/view_menu.php [ 1 ]
2012-10-15 01:36:04 --- STRACE: ErrorException [ 1 ]: Class 'debus' not found ~ APPPATH/views/admin/view_menu.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 01:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:45:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:45:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/cookmenu_edit/id/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/cookmenu_edit/id/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:46:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:46:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:47:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:47:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:47:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/cookmenu_edit/id/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:47:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/cookmenu_edit/id/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:47:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:47:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/cookmenu_edit/id/6 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/cookmenu_edit/id/6 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:48:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-15 01:48:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сnameru' in 'field list' [ SELECT `id`, `сnameru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/admin.php(72): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_edit()
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-15 01:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:48:37 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `id`, `сname_ru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-15 01:48:37 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `id`, `сname_ru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/admin.php(72): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_edit()
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-15 01:48:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:48:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:51:10 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `id`, `сname_ru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-15 01:51:10 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `id`, `сname_ru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/admin.php(72): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_edit()
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-15 01:51:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:51:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 01:51:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `id`, `сname_ru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-15 01:51:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'сname_ru' in 'field list' [ SELECT `id`, `сname_ru` FROM `categories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `?...', false, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/admin.php(72): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_cookMenu_edit()
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-15 01:51:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 01:51:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 02:51:48 --- ERROR: Kohana_Exception [ 0 ]: The nameRU property does not exist in the Model_Cookmenu class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-10-15 02:51:48 --- STRACE: Kohana_Exception [ 0 ]: The nameRU property does not exist in the Model_Cookmenu class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/admin/editmenu.php(5): Kohana_ORM->__get('nameRU')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-15 02:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 02:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 02:53:24 --- ERROR: Kohana_Exception [ 0 ]: The nameRU property does not exist in the Model_Cookmenu class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-10-15 02:53:24 --- STRACE: Kohana_Exception [ 0 ]: The nameRU property does not exist in the Model_Cookmenu class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/admin/editmenu.php(5): Kohana_ORM->__get('nameRU')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-15 02:53:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 02:53:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 02:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 02:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 02:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 02:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 02:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 02:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 02:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 02:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 02:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 02:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:00:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH/views/admin/editmenu.php [ 18 ]
2012-10-15 03:00:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH/views/admin/editmenu.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 03:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:00:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/editmenu.php [ 15 ]
2012-10-15 03:00:35 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/editmenu.php [ 15 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/admin/editmenu.php(15): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/shaman/we...', 15, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-15 03:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:00:55 --- ERROR: ErrorException [ 8 ]: Undefined index: cname_.$lang ~ APPPATH/views/admin/editmenu.php [ 16 ]
2012-10-15 03:00:55 --- STRACE: ErrorException [ 8 ]: Undefined index: cname_.$lang ~ APPPATH/views/admin/editmenu.php [ 16 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/admin/editmenu.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 16, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-15 03:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:04:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:04:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:04:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:04:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:06:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:06:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:07:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/admin/view_menu.php [ 12 ]
2012-10-15 03:07:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/admin/view_menu.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 03:07:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:07:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:10:43 --- ERROR: ErrorException [ 2 ]: key() expects parameter 1 to be array, string given ~ APPPATH/views/admin/view_menu.php [ 5 ]
2012-10-15 03:10:43 --- STRACE: ErrorException [ 2 ]: key() expects parameter 1 to be array, string given ~ APPPATH/views/admin/view_menu.php [ 5 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'key() expects p...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/admin/view_menu.php(5): key('????????')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#8 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-15 03:10:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:10:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:13:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:13:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:21:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/views/admin/view_menu.php [ 5 ]
2012-10-15 03:21:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/views/admin/view_menu.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 03:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:22:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:22:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:22:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:22:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:22:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:22:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:51:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:51:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 03:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 03:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:17:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:17:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:17:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:17:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:17:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:17:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:17:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:17:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:17:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:17:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:18:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:18:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:18:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:18:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:18:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:18:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:22:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:22:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:22:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:22:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:26:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:26:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:26:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:26:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:27:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:27:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:28:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:28:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:30:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:30:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:32:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:32:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:32:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:32:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:32:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:32:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:32:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:32:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:32:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:32:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:32:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:32:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:34:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:34:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:34:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:34:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:35:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:35:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:35:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:35:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:36:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:36:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:39:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:39:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:40:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:40:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:41:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:41:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:48:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:48:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:52:44 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/views/admin/view_menu.php [ 9 ]
2012-10-15 04:52:44 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/views/admin/view_menu.php [ 9 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/admin/view_menu.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 9, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/admin/addmenu.php(1): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#17 {main}
2012-10-15 04:52:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:52:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:52:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:52:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:53:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:53:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 04:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 04:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 05:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 05:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 05:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 05:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 05:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 05:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 05:01:18 --- ERROR: View_Exception [ 0 ]: The requested view admin/page_add could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-15 05:01:18 --- STRACE: View_Exception [ 0 ]: The requested view admin/page_add could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/page_add')
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/page_add', NULL)
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/admin.php(298): Kohana_View::factory('admin/page_add')
#3 [internal function]: Controller_Admin->action_page_add()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-15 05:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 05:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 05:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/info_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-15 05:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/info_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-15 05:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 05:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 05:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/add_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-15 05:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/add_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-15 05:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 05:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/add_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-15 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/add_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-15 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 05:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 05:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 05:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 05:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 05:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 05:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:34:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:34:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:34:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:34:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:35:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:35:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:35:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:35:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:35:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:35:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:35:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:35:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:37:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:37:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:37:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:37:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/play.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:37:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:37:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:37:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:37:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/info_Add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-15 06:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/info_Add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-15 06:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/i was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-15 06:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/i was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-15 06:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/page_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-15 06:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/page_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-15 06:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:45:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_Page' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-10-15 06:45:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_Page' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 06:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:52:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:52:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:55:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:55:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:55:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:55:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 06:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 06:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:07:13 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/site/home.php [ 7 ]
2012-10-15 07:07:13 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/site/home.php [ 7 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/site/home.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/shaman/we...', 7, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-15 07:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:07:28 --- ERROR: ErrorException [ 8 ]: Undefined index: news ~ APPPATH/views/site/home.php [ 7 ]
2012-10-15 07:07:28 --- STRACE: ErrorException [ 8 ]: Undefined index: news ~ APPPATH/views/site/home.php [ 7 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/site/home.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 7, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-15 07:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:07:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:08:07 --- ERROR: ErrorException [ 1 ]: Cannot use [] for reading ~ APPPATH/views/site/home.php [ 7 ]
2012-10-15 07:08:07 --- STRACE: ErrorException [ 1 ]: Cannot use [] for reading ~ APPPATH/views/site/home.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 07:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:08:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/site/home.php [ 7 ]
2012-10-15 07:08:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/site/home.php [ 7 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/site/home.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/shaman/we...', 7, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-15 07:08:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:08:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:08:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:08:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:09:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/classes/controller/main.php [ 10 ]
2012-10-15 07:09:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/classes/controller/main.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 07:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:09:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/classes/controller/main.php [ 10 ]
2012-10-15 07:09:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/classes/controller/main.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 07:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:09:42 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Page as array ~ APPPATH/classes/controller/main.php [ 9 ]
2012-10-15 07:09:42 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Page as array ~ APPPATH/classes/controller/main.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 07:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:11:22 --- ERROR: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH/classes/controller/main.php [ 7 ]
2012-10-15 07:11:22 --- STRACE: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH/classes/controller/main.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 07:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:11:31 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Page as array ~ APPPATH/classes/controller/main.php [ 9 ]
2012-10-15 07:11:31 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Page as array ~ APPPATH/classes/controller/main.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 07:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:12:06 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Page as array ~ APPPATH/classes/controller/main.php [ 9 ]
2012-10-15 07:12:06 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Page as array ~ APPPATH/classes/controller/main.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 07:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:12:09 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Page as array ~ APPPATH/classes/controller/main.php [ 9 ]
2012-10-15 07:12:09 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Page as array ~ APPPATH/classes/controller/main.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 07:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:13:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'caption' in 'field list' [ SELECT `id`, `caption`, `position` FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-15 07:13:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'caption' in 'field list' [ SELECT `id`, `caption`, `position` FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `c...', false, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/application/classes/controller/main.php(6): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-15 07:14:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:14:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:14:33 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/site/home.php [ 7 ]
2012-10-15 07:14:33 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/site/home.php [ 7 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/site/home.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/shaman/we...', 7, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-15 07:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:14:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:14:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:16:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:16:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:16:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:16:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:22:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/views/site/home.php [ 8 ]
2012-10-15 07:22:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/views/site/home.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 07:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:23:03 --- ERROR: ErrorException [ 8 ]: Undefined index: text ~ APPPATH/views/site/home.php [ 11 ]
2012-10-15 07:23:03 --- STRACE: ErrorException [ 8 ]: Undefined index: text ~ APPPATH/views/site/home.php [ 11 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/site/home.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 11, Array)
#1 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/vinograd.kz/bntek.loc/www/application/views/main.php(43): Kohana_View->__toString()
#5 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/vinograd.kz/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-15 07:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:24:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/site/home.php [ 10 ]
2012-10-15 07:24:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/site/home.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-15 07:24:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:24:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:24:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:24:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:24:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:24:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 07:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-15 07:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/vinograd.kz/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}