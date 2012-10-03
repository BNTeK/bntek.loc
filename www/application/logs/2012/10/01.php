<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-01 02:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-01 02:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-01 02:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 02:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 02:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-01 02:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-01 02:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 02:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 02:47:31 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-10-01 02:47:31 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\bntek.loc\www\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('recalls')
#3 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\bntek.loc\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\main.php(22): Kohana_ORM::factory('recall')
#8 [internal function]: Controller_Main->action_recall()
#9 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-01 02:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 02:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cookmenu_add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-01 05:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cookmenu_add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-01 05:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:24:10 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Editor::$language ~ APPPATH\config\editor.php [ 2 ]
2012-10-01 05:24:10 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Editor::$language ~ APPPATH\config\editor.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:24:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:24:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:24:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:24:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:24:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:24:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:24:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:24:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:24:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:24:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:24:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:24:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:24:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:24:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:24:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:24:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:29:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:29:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:29:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:29:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:30:32 --- ERROR: View_Exception [ 0 ]: The requested view editor could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-10-01 05:30:32 --- STRACE: View_Exception [ 0 ]: The requested view editor could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('editor')
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(30): Kohana_View->__construct('editor', NULL)
#2 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(279): Kohana_View::factory('editor')
#3 [internal function]: Controller_Admin->action_editor()
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-01 05:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/ckeditor/ckeditor.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/ckeditor/ckeditor.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:30:52 --- ERROR: View_Exception [ 0 ]: The requested view editor could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-10-01 05:30:52 --- STRACE: View_Exception [ 0 ]: The requested view editor could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('editor')
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(30): Kohana_View->__construct('editor', NULL)
#2 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(279): Kohana_View::factory('editor')
#3 [internal function]: Controller_Admin->action_editor()
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-01 05:30:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/ckeditor/ckeditor.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:30:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/ckeditor/ckeditor.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:30:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:30:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:30:52 --- ERROR: View_Exception [ 0 ]: The requested view editor could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-10-01 05:30:52 --- STRACE: View_Exception [ 0 ]: The requested view editor could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('editor')
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(30): Kohana_View->__construct('editor', NULL)
#2 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(279): Kohana_View::factory('editor')
#3 [internal function]: Controller_Admin->action_editor()
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-01 05:30:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/ckeditor/ckeditor.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:30:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/ckeditor/ckeditor.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:30:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:30:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:30:53 --- ERROR: View_Exception [ 0 ]: The requested view editor could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-10-01 05:30:53 --- STRACE: View_Exception [ 0 ]: The requested view editor could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('editor')
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(30): Kohana_View->__construct('editor', NULL)
#2 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(279): Kohana_View::factory('editor')
#3 [internal function]: Controller_Admin->action_editor()
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-01 05:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/ckeditor/ckeditor.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/ckeditor/ckeditor.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:35:31 --- ERROR: ErrorException [ 1 ]: Class 'zulus' not found ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:35:31 --- STRACE: ErrorException [ 1 ]: Class 'zulus' not found ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:36:06 --- ERROR: ErrorException [ 1 ]: Class 'zulus' not found ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:36:06 --- STRACE: ErrorException [ 1 ]: Class 'zulus' not found ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:36:07 --- ERROR: ErrorException [ 1 ]: Class 'zulus' not found ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:36:07 --- STRACE: ErrorException [ 1 ]: Class 'zulus' not found ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:36:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:36:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:36:09 --- ERROR: ErrorException [ 1 ]: Class 'zulus' not found ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:36:09 --- STRACE: ErrorException [ 1 ]: Class 'zulus' not found ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:36:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:36:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:38:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:38:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:38:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:38:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:38:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:38:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:38:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:38:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:38:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:38:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:38:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:38:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:38:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:38:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:38:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:38:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:38:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:38:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:38:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:38:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:38:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:38:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:38:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:38:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:38:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:38:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:38:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:38:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:38:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::css() ~ APPPATH\views\admin\page_add.php [ 1 ]
2012-10-01 05:38:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::css() ~ APPPATH\views\admin\page_add.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:39:18 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:39:18 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(3): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:39:19 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:39:19 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(3): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:44:23 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:44:23 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(3): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:44:24 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:44:24 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(3): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:47:29 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:47:29 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(262): Editor_Core->render()
#2 [internal function]: Controller_Admin->action_page_add()
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-01 05:47:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:47:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:47:30 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:47:30 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(262): Editor_Core->render()
#2 [internal function]: Controller_Admin->action_page_add()
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-01 05:47:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:47:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:49:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:49:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:49:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
2012-10-01 05:49:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Editor_CKEditor::set() ~ APPPATH\classes\controller\admin.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:49:28 --- ERROR: ErrorException [ 4096 ]: Object of class Editor_CKEditor could not be converted to string ~ APPPATH\views\admin\page_add.php [ 2 ]
2012-10-01 05:49:28 --- STRACE: ErrorException [ 4096 ]: Object of class Editor_CKEditor could not be converted to string ~ APPPATH\views\admin\page_add.php [ 2 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-01 05:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:49:33 --- ERROR: ErrorException [ 4096 ]: Object of class Editor_CKEditor could not be converted to string ~ APPPATH\views\admin\page_add.php [ 2 ]
2012-10-01 05:49:33 --- STRACE: ErrorException [ 4096 ]: Object of class Editor_CKEditor could not be converted to string ~ APPPATH\views\admin\page_add.php [ 2 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-01 05:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:49:34 --- ERROR: ErrorException [ 4096 ]: Object of class Editor_CKEditor could not be converted to string ~ APPPATH\views\admin\page_add.php [ 2 ]
2012-10-01 05:49:34 --- STRACE: ErrorException [ 4096 ]: Object of class Editor_CKEditor could not be converted to string ~ APPPATH\views\admin\page_add.php [ 2 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-01 05:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:49:46 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:49:46 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:49:47 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:49:47 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:53:00 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:53:00 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:53:01 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:53:01 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/editor was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-01 05:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/editor was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-01 05:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/editor was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-01 05:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/editor was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-01 05:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/editor was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-01 05:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/editor was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-01 05:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/editor was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-01 05:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/editor was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-01 05:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\editor.php [ 4 ]
2012-10-01 05:55:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\editor.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:55:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\editor.php [ 4 ]
2012-10-01 05:55:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\editor.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\editor.php [ 4 ]
2012-10-01 05:55:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\editor.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\editor.php [ 4 ]
2012-10-01 05:55:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\editor.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\editor.php [ 4 ]
2012-10-01 05:55:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\editor.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\editor.php [ 4 ]
2012-10-01 05:55:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\editor.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\editor.php [ 4 ]
2012-10-01 05:55:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\editor.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\editor.php [ 4 ]
2012-10-01 05:55:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\editor.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 05:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:48 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:55:48 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:49 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:55:49 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:49 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:55:49 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:50 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:55:50 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:50 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:55:50 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:50 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:55:50 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:51 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:55:51 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:51 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:55:51 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:52 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:55:52 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:52 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:55:52 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:52 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 05:55:52 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 05:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 05:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 05:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:42 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 06:01:42 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render('ckeditor')
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 06:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:43 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 06:01:43 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render('ckeditor')
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 06:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:43 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 06:01:43 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render('ckeditor')
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 06:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:30 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 06:03:30 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render('ckeditor')
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 06:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:31 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 06:03:31 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render('ckeditor')
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 06:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:31 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 06:03:31 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render('ckeditor')
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 06:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:32 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
2012-10-01 06:03:32 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\zulus\classes\editor\core.php [ 63 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\bntek.loc\www\application\views\admin\page_add.php(2): Editor_Core->render('ckeditor')
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\bntek.loc\www\application\views\main.php(28): Kohana_View->__toString()
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-01 06:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:04:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:04:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:04:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:04:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:04:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:04:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:04:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:04:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:04:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:04:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:04:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:04:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:04:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:04:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:04:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:04:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:04:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:04:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:04:58 --- ERROR: Kohana_Exception [ 0 ]: Editor driver Editor not found! ~ MODPATH\zulus\classes\editor\core.php [ 121 ]
2012-10-01 06:04:58 --- STRACE: Kohana_Exception [ 0 ]: Editor driver Editor not found! ~ MODPATH\zulus\classes\editor\core.php [ 121 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(262): Editor_Core::factory('Editor')
#1 [internal function]: Controller_Admin->action_page_add()
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-01 06:04:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:04:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:06:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:06:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:06:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:06:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:12:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:12:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:12:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:12:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:16:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:16:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:16:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:16:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:16:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:16:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:21:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:21:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:21:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:21:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/ bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:23:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/'/'.public/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:23:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/'/'.public/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:23:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:23:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/'/'.public/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/'/'.public/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:24:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/'/'.public/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:24:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/'/'.public/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:24:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:24:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:24:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/'/'.public/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:24:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/'/'.public/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:24:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/'/'.public/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:24:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/'/'.public/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:24:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:24:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:25:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:25:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:28:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:28:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:29:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:29:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:33:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:33:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:43:33 --- ERROR: View_Exception [ 0 ]: The requested view public/media/editor/ckeditor could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-10-01 06:43:33 --- STRACE: View_Exception [ 0 ]: The requested view public/media/editor/ckeditor could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('public/media/ed...')
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\view.php(30): Kohana_View->__construct('public/media/ed...', NULL)
#2 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(61): Kohana_View::factory('public/media/ed...')
#3 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(263): Editor_Core->render(false, 'ckeditor')
#4 [internal function]: Controller_Admin->action_page_add()
#5 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-01 06:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 06:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 06:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:16:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ''theme_advanced_toolbar_locati' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\config\editor.php [ 36 ]
2012-10-01 07:16:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ''theme_advanced_toolbar_locati' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\config\editor.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 07:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:16:53 --- ERROR: ErrorException [ 8 ]: Use of undefined constant RU - assumed 'RU' ~ APPPATH\config\editor.php [ 35 ]
2012-10-01 07:16:53 --- STRACE: ErrorException [ 8 ]: Use of undefined constant RU - assumed 'RU' ~ APPPATH\config\editor.php [ 35 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\application\config\editor.php(35): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 35, Array)
#1 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\core.php(800): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\config\file\reader.php(49): Kohana_Core::load('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\config.php(124): Kohana_Config_File_Reader->load('editor')
#4 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(132): Kohana_Config->load('editor')
#5 C:\xampp\htdocs\bntek.loc\www\modules\zulus\classes\editor\core.php(125): Editor_Core->__construct(Array)
#6 C:\xampp\htdocs\bntek.loc\www\application\classes\controller\admin.php(262): Editor_Core::factory('CKEditor')
#7 [internal function]: Controller_Admin->action_page_add()
#8 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#9 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\bntek.loc\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#12 {main}
2012-10-01 07:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:17:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:17:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:17:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:17:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:19:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:19:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:19:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:19:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:19:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:19:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:19:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:19:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-01 07:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-01 07:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\bntek.loc\www\index.php(109): Kohana_Request->execute()
#1 {main}