<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-05 00:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/view_image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 00:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/view_image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 00:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:34:55 --- ERROR: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/controller/admin.php [ 204 ]
2012-10-05 00:34:55 --- STRACE: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/controller/admin.php [ 204 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:34:55 --- ERROR: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH/classes/kohana/route.php [ 402 ]
2012-10-05 00:34:55 --- STRACE: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH/classes/kohana/route.php [ 402 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', '/home/shaman/we...', 402, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/route.php(402): preg_match('', 'favicon.ico', NULL)
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(582): Kohana_Route->matches('favicon.ico')
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(800): Kohana_Request::process_uri('favicon.ico', Array)
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(208): Kohana_Request->__construct('/favicon.ico', NULL, Array)
#5 /home/shaman/web/bntek.loc/www/index.php(108): Kohana_Request::factory()
#6 {main}
2012-10-05 00:40:00 --- ERROR: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/controller/admin.php [ 204 ]
2012-10-05 00:40:00 --- STRACE: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/controller/admin.php [ 204 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:41:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:41:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:41:34 --- ERROR: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:41:34 --- STRACE: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:41:50 --- ERROR: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:41:50 --- STRACE: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:41:53 --- ERROR: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:41:53 --- STRACE: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:42:09 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:42:09 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:42:11 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:42:11 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:42:12 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:42:12 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:42:13 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:42:13 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:43:15 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:43:15 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:43:51 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:43:51 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:43:53 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:43:53 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:43:54 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:43:54 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:43:55 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:43:55 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:43:55 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:43:55 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:43:56 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:43:56 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:44:31 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:44:31 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:44:56 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:44:56 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:46:07 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:46:07 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:46:10 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:46:10 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:47:23 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:47:23 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:47:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/admin.php [ 203 ]
2012-10-05 00:47:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/admin.php [ 203 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:02 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 203 ]
2012-10-05 00:48:02 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 203 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:16 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:16 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:17 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:17 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:17 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:17 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:18 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:18 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:18 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:18 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:19 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:19 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:19 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:19 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:20 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:20 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:26 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:26 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:27 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:27 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:28 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:28 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:28 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:28 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:28 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:28 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:29 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:29 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:29 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:29 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:30 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:30 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:30 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:30 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:41 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:41 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:42 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:42 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:42 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:42 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:42 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:42 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:43 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:43 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:46 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:46 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:47 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:47 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:48 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:48 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:48 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:48 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:49 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:49 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:48:51 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:48:51 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:48:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:48:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:53:26 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:53:26 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:53:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:53:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:53:28 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:53:28 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:53:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:53:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 00:58:10 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 00:58:10 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 00:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 00:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:03:42 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 01:03:42 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 01:03:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:03:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:06:06 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 01:06:06 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 01:06:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:06:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:06:08 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 01:06:08 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 01:06:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:06:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:09:02 --- ERROR: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 01:09:02 --- STRACE: ErrorException [ 1 ]: Class 'pagination' not found ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 01:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:12:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:12:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:25:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:25:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:25:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:25:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:29:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/controller/admin.php [ 204 ]
2012-10-05 01:29:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/controller/admin.php [ 204 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(204): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/shaman/we...', 204, Array)
#1 [internal function]: Controller_Admin->action_image_view()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-05 01:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:29:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: limit ~ APPPATH/classes/controller/admin.php [ 205 ]
2012-10-05 01:29:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: limit ~ APPPATH/classes/controller/admin.php [ 205 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(205): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/shaman/we...', 205, Array)
#1 [internal function]: Controller_Admin->action_image_view()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-05 01:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:29:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: limit ~ APPPATH/classes/controller/admin.php [ 205 ]
2012-10-05 01:29:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: limit ~ APPPATH/classes/controller/admin.php [ 205 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(205): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/shaman/we...', 205, Array)
#1 [internal function]: Controller_Admin->action_image_view()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-05 01:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:29:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: limit ~ APPPATH/classes/controller/admin.php [ 205 ]
2012-10-05 01:29:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: limit ~ APPPATH/classes/controller/admin.php [ 205 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(205): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/shaman/we...', 205, Array)
#1 [internal function]: Controller_Admin->action_image_view()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-05 01:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:30:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:30:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:30:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:30:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:30:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:30:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:37:06 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 4 ]
2012-10-05 01:37:06 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 4 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 4, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 01:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:38:33 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 4 ]
2012-10-05 01:38:33 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 4 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 4, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 01:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:41:28 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 4 ]
2012-10-05 01:41:28 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 4 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 4, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 01:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:41:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 4 ]
2012-10-05 01:41:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 4 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 4, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 01:42:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:42:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:42:35 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 4 ]
2012-10-05 01:42:35 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 4 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 4, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 01:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:42:37 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 4 ]
2012-10-05 01:42:37 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 4 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 4, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 01:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:42:39 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 4 ]
2012-10-05 01:42:39 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 4 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 4, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 01:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:42:41 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 4 ]
2012-10-05 01:42:41 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 4 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 4, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 01:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/image_view/img/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/image_view/img/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:55:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:55:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 01:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 01:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:03:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:03:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/image_view/page/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/image_view/page/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/image_view/page/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/image_view/page/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/image_view/page/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/image_view/page/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:05:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:05:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:05:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:05:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:05:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:05:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:06:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:06:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:06:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:06:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:06:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:06:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:07:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:07:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:07:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:07:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:07:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:07:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:07:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:07:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:07:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:07:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:07:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:07:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:07:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:07:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:07:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:07:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:07:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:07:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:08:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:08:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:08:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:08:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:08:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:08:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:08:57 --- ERROR: ErrorException [ 8 ]: Undefined index: 2 ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:08:57 --- STRACE: ErrorException [ 8 ]: Undefined index: 2 ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:09:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:09:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:09:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:09:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:09:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:09:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:09:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:09:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:10:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:10:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:10:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/image_view/page/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:10:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/image_view/page/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:12:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:12:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:12:33 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:12:33 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:12:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:12:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:13:57 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:13:57 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:14:13 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/admin/viewimage.php [ 2 ]
2012-10-05 02:14:13 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/admin/viewimage.php [ 2 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(2): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/shaman/we...', 2, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:14:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:14:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:14:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:14:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:14:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:14:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:15:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:15:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:16:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::offset() ~ APPPATH/classes/controller/admin.php [ 202 ]
2012-10-05 02:16:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::offset() ~ APPPATH/classes/controller/admin.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 02:16:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:16:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:17:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:17:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:17:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:17:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:17:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:17:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:17:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:17:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:17:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:17:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:20:58 --- ERROR: ErrorException [ 2 ]: include(/home/shaman/web/bntek.loc/www/modules/pagination/views/pagination/forkohana.php): failed to open stream: Permission denied ~ SYSPATH/classes/kohana/view.php [ 61 ]
2012-10-05 02:20:58 --- STRACE: ErrorException [ 2 ]: include(/home/shaman/web/bntek.loc/www/modules/pagination/views/pagination/forkohana.php): failed to open stream: Permission denied ~ SYSPATH/classes/kohana/view.php [ 61 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): Kohana_Core::error_handler(2, 'include(/home/s...', '/home/shaman/we...', 61, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): Kohana_View::capture()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/modules/pagination/classes/kohana/pagination.php(278): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/modules/pagination/classes/kohana/pagination.php(374): Kohana_Pagination->render()
#5 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(8): Kohana_Pagination->__toString()
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#8 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#12 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#13 [internal function]: Kohana_Controller_Template->after()
#14 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#15 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#17 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#18 {main}
2012-10-05 02:20:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:20:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:21:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:21:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:21:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: -1 ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:21:38 --- STRACE: ErrorException [ 8 ]: Undefined offset: -1 ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:22:17 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:22:17 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:22:23 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:22:23 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:22:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/admin.php [ 210 ]
2012-10-05 02:22:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/admin.php [ 210 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 02:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:22:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/admin.php [ 210 ]
2012-10-05 02:22:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/admin.php [ 210 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 02:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:22:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/admin.php [ 210 ]
2012-10-05 02:22:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/admin.php [ 210 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 02:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:23:46 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:23:46 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:23:49 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:23:49 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:24:39 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:24:39 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:24:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:24:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 02:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 02:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 02:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 02:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:24:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:24:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:24:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:24:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:25:45 --- ERROR: ErrorException [ 8 ]: Undefined offset: -1 ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:25:45 --- STRACE: ErrorException [ 8 ]: Undefined offset: -1 ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:26:57 --- ERROR: ErrorException [ 8 ]: Undefined offset: -1 ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:26:57 --- STRACE: ErrorException [ 8 ]: Undefined offset: -1 ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:26:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:26:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:27:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:27:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:27:24 --- ERROR: ErrorException [ 8 ]: Undefined offset: -1 ~ APPPATH/views/admin/viewimage.php [ 5 ]
2012-10-05 02:27:24 --- STRACE: ErrorException [ 8 ]: Undefined offset: -1 ~ APPPATH/views/admin/viewimage.php [ 5 ]
--
#0 /home/shaman/web/bntek.loc/www/application/views/admin/viewimage.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/shaman/we...', 5, Array)
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/shaman/web/bntek.loc/www/application/views/main.php(41): Kohana_View->__toString()
#5 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(61): include('/home/shaman/we...')
#6 /home/shaman/web/bntek.loc/www/system/classes/kohana/view.php(343): Kohana_View::capture('/home/shaman/we...', Array)
#7 /home/shaman/web/bntek.loc/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-05 02:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:28:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:28:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:28:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:28:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:28:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:28:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:28:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:28:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:28:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:28:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:28:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:28:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:29:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:29:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:29:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:29:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:29:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:29:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 02:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 02:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:17:28 --- ERROR: HTTP_Exception_404 [ 404 ]:  ~ APPPATH/classes/controller/common.php [ 25 ]
2012-10-05 04:17:28 --- STRACE: HTTP_Exception_404 [ 404 ]:  ~ APPPATH/classes/controller/common.php [ 25 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(197): Controller_Common->check_role()
#1 [internal function]: Controller_Admin->action_image_view()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-05 04:17:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:17:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:17:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:17:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]:  ~ APPPATH/classes/controller/common.php [ 25 ]
2012-10-05 04:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]:  ~ APPPATH/classes/controller/common.php [ 25 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/admin.php(197): Controller_Common->check_role()
#1 [internal function]: Controller_Admin->action_image_view()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-05 04:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 04:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 04:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 04:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 04:17:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:17:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:17:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:17:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:17:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:17:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:17:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:17:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 04:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 04:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 04:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 04:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 04:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 04:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 04:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 04:18:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:18:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:18:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 04:18:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 04:18:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:18:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 04:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 04:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 04:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 04:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:18:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:18:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:28:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:28:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:28:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:28:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:35:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/recall was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 04:35:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/recall was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 04:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:38:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL recall was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-05 04:38:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL recall was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 04:38:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:38:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:46:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH/views/admin/recallcheck.php [ 14 ]
2012-10-05 04:46:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH/views/admin/recallcheck.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 04:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:46:55 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/admin/recallcheck.php [ 11 ]
2012-10-05 04:46:55 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/admin/recallcheck.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 04:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:47:04 --- ERROR: ErrorException [ 1 ]: Call to undefined function check_role() ~ APPPATH/views/admin/recallcheck.php [ 11 ]
2012-10-05 04:47:04 --- STRACE: ErrorException [ 1 ]: Call to undefined function check_role() ~ APPPATH/views/admin/recallcheck.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 04:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:47:06 --- ERROR: ErrorException [ 1 ]: Call to undefined function check_role() ~ APPPATH/views/admin/recallcheck.php [ 11 ]
2012-10-05 04:47:06 --- STRACE: ErrorException [ 1 ]: Call to undefined function check_role() ~ APPPATH/views/admin/recallcheck.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 04:47:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:47:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:48:19 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/main.php [ 36 ]
2012-10-05 04:48:19 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/main.php [ 36 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/main.php(36): Kohana_Core::error_handler(2048, 'Only variables ...', '/home/shaman/we...', 36, Array)
#1 [internal function]: Controller_Main->action_recall()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-05 04:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:49:08 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/main.php [ 36 ]
2012-10-05 04:49:08 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/main.php [ 36 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/main.php(36): Kohana_Core::error_handler(2048, 'Only variables ...', '/home/shaman/we...', 36, Array)
#1 [internal function]: Controller_Main->action_recall()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-05 04:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:49:11 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/main.php [ 36 ]
2012-10-05 04:49:11 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/main.php [ 36 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/main.php(36): Kohana_Core::error_handler(2048, 'Only variables ...', '/home/shaman/we...', 36, Array)
#1 [internal function]: Controller_Main->action_recall()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-05 04:49:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:49:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:49:11 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/main.php [ 36 ]
2012-10-05 04:49:11 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/main.php [ 36 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/main.php(36): Kohana_Core::error_handler(2048, 'Only variables ...', '/home/shaman/we...', 36, Array)
#1 [internal function]: Controller_Main->action_recall()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-05 04:49:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:49:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:49:12 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/main.php [ 36 ]
2012-10-05 04:49:12 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/main.php [ 36 ]
--
#0 /home/shaman/web/bntek.loc/www/application/classes/controller/main.php(36): Kohana_Core::error_handler(2048, 'Only variables ...', '/home/shaman/we...', 36, Array)
#1 [internal function]: Controller_Main->action_recall()
#2 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-05 04:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:55:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/main.php [ 62 ]
2012-10-05 04:55:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/main.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 04:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:55:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/main.php [ 70 ]
2012-10-05 04:55:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/main.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 04:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:56:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/main.php [ 70 ]
2012-10-05 04:56:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/main.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 04:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:56:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/main.php [ 69 ]
2012-10-05 04:56:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/main.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 04:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 04:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 04:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 04:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 04:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 04:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 04:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 04:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 04:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:04:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:04:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:22:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:22:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:22:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/admin/category_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 05:22:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/admin/category_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 05:22:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:22:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/admin/category_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 05:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/admin/category_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 05:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/admin/category_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 05:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/admin/category_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 05:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/admin/category_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 05:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/admin/category_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 05:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/css/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/css/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/js/less.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/js/less.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/css/bootstrap-responsive.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/css/bootstrap-responsive.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/js/bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/js/bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/css/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/css/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/js/less.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/js/less.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/css/bootstrap-responsive.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/css/bootstrap-responsive.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/css/ourstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/js/bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bntek.loc/public/js/bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:26:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:26:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 05:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 05:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 05:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 05:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 05:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 05:26:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:26:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:26:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 05:26:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 05:26:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:26:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:26:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:26:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/img/style_img/bg_img.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/img/style_img/bg_img.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:37:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/img/style_img/bg_img.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:37:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/img/style_img/bg_img.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:37:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:37:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/img/style_img/bg_img.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/img/style_img/bg_img.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:38:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:38:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/style_img/header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/style_img/header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:51:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:51:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:51:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:51:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:51:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:51:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:51:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:51:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:52:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:52:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 05:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 05:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/style_img/nemu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/style_img/nemu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:05:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:05:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:17:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:17:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:34:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:34:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:34:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:34:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:34:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:34:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:37:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:37:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 06:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 06:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 07:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 07:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 07:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 07:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:02:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:02:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:13:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:13:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:13:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:13:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:13:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:13:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 07:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 07:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:21:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:21:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 07:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 07:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-05 07:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/shaman/web/bntek.loc/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/shaman/web/bntek.loc/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 07:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/style_img/admin_menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/style_img/admin_menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:32:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:32:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:35:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:35:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:35:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:35:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:44:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:44:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:45:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:45:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:47:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:47:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:47:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:47:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:47:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:47:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:48:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:48:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 07:48:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-05 07:48:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/shaman/web/bntek.loc/www/index.php(109): Kohana_Request->execute()
#1 {main}