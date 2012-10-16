<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-16 10:47:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN), expecting function (T_FUNCTION) ~ APPPATH\classes\model\page.php [ 5 ]
2012-10-16 10:47:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN), expecting function (T_FUNCTION) ~ APPPATH\classes\model\page.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-16 10:48:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN), expecting function (T_FUNCTION) ~ APPPATH\classes\model\page.php [ 5 ]
2012-10-16 10:48:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN), expecting function (T_FUNCTION) ~ APPPATH\classes\model\page.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-16 10:48:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN), expecting function (T_FUNCTION) ~ APPPATH\classes\model\page.php [ 5 ]
2012-10-16 10:48:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN), expecting function (T_FUNCTION) ~ APPPATH\classes\model\page.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-16 06:49:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH/classes/controller/common.php [ 74 ]
2012-10-16 06:49:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH/classes/controller/common.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-16 06:51:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTTP_Exception_404::get_code() ~ APPPATH/classes/exceptionhandler.php [ 7 ]
2012-10-16 06:51:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTTP_Exception_404::get_code() ~ APPPATH/classes/exceptionhandler.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-16 06:51:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTTP_Exception_404::get_code() ~ APPPATH/classes/exceptionhandler.php [ 7 ]
2012-10-16 06:51:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTTP_Exception_404::get_code() ~ APPPATH/classes/exceptionhandler.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-16 06:51:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTTP_Exception_404::get_code() ~ APPPATH/classes/exceptionhandler.php [ 7 ]
2012-10-16 06:51:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTTP_Exception_404::get_code() ~ APPPATH/classes/exceptionhandler.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-16 06:51:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTTP_Exception_404::get_code() ~ APPPATH/classes/exceptionhandler.php [ 7 ]
2012-10-16 06:51:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTTP_Exception_404::get_code() ~ APPPATH/classes/exceptionhandler.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-16 06:53:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH/classes/controller/common.php [ 74 ]
2012-10-16 06:53:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH/classes/controller/common.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-16 07:51:26 --- ERROR: Kohana_Exception [ 0 ]: The them property does not exist in the Model_Recall class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-10-16 07:51:26 --- STRACE: Kohana_Exception [ 0 ]: The them property does not exist in the Model_Recall class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/application/views/admin/recallcheck.php(5): Kohana_ORM->__get('them')
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(61): include('/Users/alx/vhos...')
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/alx/vhos...', Array)
#3 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/application/classes/controller/main.php(55): Kohana_View->__toString()
#5 [internal function]: Controller_Main->action_recall()
#6 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#7 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-16 21:12:07 --- ERROR: ErrorException [ 2 ]: getdate() expects at most 1 parameter, 2 given ~ APPPATH/views/admin/recallcheck.php [ 5 ]
2012-10-16 21:12:07 --- STRACE: ErrorException [ 2 ]: getdate() expects at most 1 parameter, 2 given ~ APPPATH/views/admin/recallcheck.php [ 5 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'getdate() expec...', '/Users/alx/vhos...', 5, Array)
#1 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/application/views/admin/recallcheck.php(5): getdate('m.d.y , H:i:s', '1349429963')
#2 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(61): include('/Users/alx/vhos...')
#3 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/alx/vhos...', Array)
#4 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/application/classes/controller/main.php(55): Kohana_View->__toString()
#6 [internal function]: Controller_Main->action_recall()
#7 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#8 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/alx/vhosts/vinograd.kz/serv/bntek.loc/www/index.php(109): Kohana_Request->execute()
#11 {main}
