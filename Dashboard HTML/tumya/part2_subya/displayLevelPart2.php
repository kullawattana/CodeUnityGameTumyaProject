<?php

	//แสดงคะแนนของผู้เล่น : เรียงตามน้ำหนักสมุนไพรที่ทำได้
    $database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
    mysql_select_db('tumya') or die('Could not select database');
 
    $query_level_1 = "SELECT * FROM `part2_level_1` ORDER by `weight_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
         
		 //แสดงน้ำหนักของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['weight_result'] . "\n";
    }
	
	$query_level_2 = "SELECT * FROM `part2_level_2` ORDER by `weight_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
		 
         //แสดงน้ำหนักของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['weight_result'] . "\n";
    }
	
	$query_level_3 = "SELECT * FROM `part2_level_3` ORDER by `weight_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
		 
         //แสดงน้ำหนักของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['weight_result'] . "\n";
    }
	
	$query_level_4 = "SELECT * FROM `part2_level_4` ORDER by `weight_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
         
		 //แสดงน้ำหนักของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['weight_result'] . "\n";
    }
	
	$query_level_5 = "SELECT * FROM `part2_level_5` ORDER by `weight_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
		 
         //แสดงน้ำหนักของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['weight_result'] . "\n";
    }
	
	$query_level_6 = "SELECT * FROM `part2_level_6` ORDER by `weight_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
		 
         //แสดงน้ำหนักของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['weight_result'] . "\n";
    }
	
	$query_level_7 = "SELECT * FROM `part2_level_7` ORDER by `weight_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
		 
         //แสดงน้ำหนักของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['weight_result'] . "\n";
    }
	
	$query_level_8 = "SELECT * FROM `part2_level_8` ORDER by `weight_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
		 
         //แสดงน้ำหนักของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['weight_result'] . "\n";
    }
	
	$query_level_9 = "SELECT * FROM `part2_level_9` ORDER by `weight_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
		 
         //แสดงน้ำหนักของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['weight_result'] . "\n";
    }
	
	$query_level_10 = "SELECT * FROM `part2_level_10` ORDER by `weight_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
		 
         //แสดงน้ำหนักของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['weight_result'] . "\n";
    }
?>