<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

	'driver'       => 'file',
	'hash_method'  => 'sha256',
	'hash_key'     => 12345123123455,
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		 'admin' => 'e8f9278d1b2cabfad588204b832e7011f16fc019427041ceb3c720d05e307188',
	),

);
