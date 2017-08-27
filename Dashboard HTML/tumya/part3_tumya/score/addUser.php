<?php 
        $db = mysql_connect('localhost', 'root', '1234') or die('Could not connect: ' . mysql_error()); 
        mysql_select_db('tumya') or die('Could not select database');
 
        // Strings must be escaped to prevent SQL injection attack. 
        $id = mysql_real_escape_string($_GET['id'], $db); 
        $name = mysql_real_escape_string($_GET['name'], $db); 
		$username = mysql_real_escape_string($_GET['username'], $db); 
		$score_result = mysql_real_escape_string($_GET['score_result'], $db); 
		
		$query = "insert into user_login values ('$id', '$name' , '$username', '$score_result');"; 
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());
?>