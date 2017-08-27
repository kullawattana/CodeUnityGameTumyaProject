<?php
    // Send variables for the MySQL database class.
    $database = mysql_connect('localhost', 'root', '1234') or die('Could not connect: ' . mysql_error());
    mysql_select_db('tumya') or die('Could not select database');
	
	//Select id ที่ได้จากการ gen
	$username = mysql_real_escape_string($_GET['username'], $db); 
	$query = "select id from user_login where username = " + $username;
	$id_user = mysql_query($query) or die('Query failed: ' . mysql_error());
?>