<?php 
        $db = mysql_connect('localhost', 'root', '1234') or die('Could not connect: ' . mysql_error()); 
        mysql_select_db('tumya') or die('Could not select database');
		
		//Select id ที่ได้จากการ gen เพื่อ Add id_user 
		$username = mysql_real_escape_string($_GET['username'], $db); 
		$query = "select id from user_login where username = " + $username;
		$id_user = mysql_query($query) or die('Query failed: ' . mysql_error());
		
        // Strings must be escaped to prevent SQL injection attack. 
        $id = mysql_real_escape_string($_GET['id'], $db); 
        //$username = mysql_real_escape_string($_GET['username'], $db); 
		$score_result = mysql_real_escape_string($_GET['score_result'], $db); 
		$score_item_1 = mysql_real_escape_string($_GET['score_item_1'], $db); 
		$score_item_2 = mysql_real_escape_string($_GET['score_item_2'], $db); 
		$score_item_3 = mysql_real_escape_string($_GET['score_item_3'], $db); 
		$score_item_4 = mysql_real_escape_string($_GET['score_item_4'], $db); 
		
		$query = "insert into level_10 values ('$id', '$username' , '$score_result', '$score_item_1', '$score_item_2', 
		'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6', 
		'$score_item_7', '$score_item_8', '$score_item_9', '$score_item_10', '$weight_result');"; 
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());
?>