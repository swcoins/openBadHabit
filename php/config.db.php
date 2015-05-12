<?php
	/*
		File Name:	config.db.php
		Version:	1.0
		License:	Apache License Version 2.0, January 2004
		Download:	https://github.com/swcoins/openBadHabit
		Support:	https://github.com/swcoins/openBadHabit/blob/master/README.md

		-------------------------------------------------------------------------------------------------
		|																								|
		| It is HIGHLY recommended that you place this file in a directory that is NOT web accessable.	|
		|																								|
		-------------------------------------------------------------------------------------------------
	*/

	//	Basic path defines
		define('_ROOTURL_',			'http://127.0.0.1/');			//base URL to website
		define('_ROOTDIR_', 		$_SERVER['DOCUMENT_ROOT']);		//base directory path to website files
	
	//	DB Defines
		define('_DB_SERVER_',		'127.0.0.1');	// The web address to your MySQL Server
		define('_DB_NAME_', 		'dbname');		// The MySQL Database Name you wish to use.
		define('_DB_USER_', 		'user');		// The MySQL User Name for the database you wish to use.
		define('_DB_PASSWD_', 		'pwd');			// The MySQL Password for the account you wish to user.
		define('_DB_PREFIX_', 		null);			// Do you tables start with a predifined prefix? If not leave null.
		define('_MYSQL_ENGINE_', 	'InnoDB');		// What type of MySQL Engine do you use? InnoDB is common. 
?>