<?php
	/*
		File Name:	badHabitHelper.php
		Version:	1.0
		License:	Apache License Version 2.0, January 2004
		Download:	https://github.com/swcoins/openBadHabit
		Support:	https://github.com/swcoins/openBadHabit/blob/master/README.md
	*/
	session_start();
	require_once ($_SERVER['DOCUMENT_ROOT']."/openBadHabit/php/config.db.php");

	// ### Edit these variables ###
	
	$tableName 			= "tableName";		// The name of the table you wish to pull results from (without any prefix)
	$columnName 		= "columnTextName";	// The column name you wish the user to see such as col_States_Abr ("AL", "Ak", "AR" , etc).
	$columnNameID 		= "columnIDName";	// The column name that contains the ids that identify the column names.
	$recordsToReturn	= 5;				// Number of records to return per auto search
	$strLength			= 3;				// User input string length to start searching.
	$humanReadAbleError	= true;				// Should PHP errors be sent to the user as PHP errors? Or human readable errors? 

	
	// ----- No need to edit further ------ 
	$return = null;
	if (isset($_POST["searchStringvar"]))
	{
		$searchString	= $_POST["searchStringvar"];
		if ($strLength <= strlen($searchString))
		{
			$mysql = new mysqli(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_);

			if (!$mysql->connect_error)
			{
				$tableName 		= _DB_PREFIX_.$tableName;
				$searchString 	= $mysql->real_escape_string($searchString);
				$sql 			= "SELECT ".$columnNameID .",".$columnName." FROM ".$tableName." WHERE ".$columnName." LIKE '%".$searchString."%' Limit ".$recordsToReturn.";"; 	
				$result 		= $mysql->query($sql);
				if ($result)
				{
					while($row = $result->fetch_assoc())
						$return[] = array("id" => $row[$columnNameID], "name" => $row[$columnName]);
				} else 
					$return = "SQL Error";
			} else {
				if ($humanReadAbleError)
					$return = "Error connecting to database.";
				else
					$return = "Connect failed: ".$mysql->connect_error;
			}
		}
	} 	
	$jcoderesult = json_encode($return);
	print_r($jcoderesult);		
?>