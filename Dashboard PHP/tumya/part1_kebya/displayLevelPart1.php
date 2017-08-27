<?php

	//แสดงคะแนนของผู้เล่น : เรียงตามคะแนน
    $database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
    mysql_select_db('tumya') or die('Could not select database');
 
    $query_level_1 = "SELECT * FROM `part1_level_1` ORDER by `score_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
		 
         //แสดงเวลาของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['time_result'] . "\n";
    }
	
	$query_level_2 = "SELECT * FROM `part1_level_2` ORDER by `score_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
		 
         //แสดงเวลาของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['time_result'] . "\n";
    }
	
	$query_level_3 = "SELECT * FROM `part1_level_3` ORDER by `score_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
		 
         //แสดงเวลาของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['time_result'] . "\n";
    }
	
	$query_level_4 = "SELECT * FROM `part1_level_4` ORDER by `score_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
		 
         //แสดงเวลาของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['time_result'] . "\n";
    }
	
	$query_level_5 = "SELECT * FROM `part1_level_5` ORDER by `score_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
         
		 //แสดงเวลาของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['time_result'] . "\n";
    }
	
	$query_level_6 = "SELECT * FROM `part1_level_6` ORDER by `score_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
         
		 //แสดงเวลาของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['time_result'] . "\n";
    }
	
	$query_level_7 = "SELECT * FROM `part1_level_7` ORDER by `score_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
         
		 //แสดงเวลาของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['time_result'] . "\n";
    }
	
	$query_level_8 = "SELECT * FROM `part1_level_8` ORDER by `score_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
         
		 //แสดงเวลาของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['time_result'] . "\n";
    }
	
	$query_level_9 = "SELECT * FROM `part1_level_9` ORDER by `score_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
         
		 //แสดงเวลาของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['time_result'] . "\n";
    }
	
	$query_level_10 = "SELECT * FROM `part1_level_10` ORDER by `score_result` DESC LIMIT 5";
    $result = mysql_query($query_level_1) or die('Query failed: ' . mysql_error());
    $num_results = mysql_num_rows($result);  
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
         
		 //แสดงเวลาของผู้เล่น 5 อันดับแรก
         echo $row['username'] . "\t" . $row['time_result'] . "\n";
    }
?>