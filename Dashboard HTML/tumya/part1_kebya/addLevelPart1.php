<?php 
        $db = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error()); 
        mysql_select_db('tumya') or die('Could not select database');
		
		$id_user = null;
		$username = null;
		$id = null;
		
		//Select id ที่ได้จากการ gen เพื่อ Add id_user : ต้องใส่ isset เพื่อดักกรณี  Undefined index
		if(isset($_GET["username"])){
			$username = mysql_real_escape_string($_GET["username"], $db); 
			$query_username = "select id from user_login where username = " + $username;
			$id_user = mysql_query($query_username) or die('Query failed: ' . mysql_error());
			echo $username;
		} else {
			$user = null;
			echo "no have username";
		}
					
		//ตรวจสอบ level เพื่อบันทึกคะแนนลง database
		if(isset($_GET["username"])){
			$level_flag = $_GET['level_flag'];
		}
		
		if($level_flag = "1"){			
			$score_item_1 = null;
			$score_item_2 = null;
			$score_item_3 = null;
			$score_item_4 = null;
			$score_result = null;
					
			if(isset($_POST['scoreitem1p1l1'])){
				$score_item_1 = $_POST['scoreitem1p1l1']; 
			}
			
			if(isset($_POST['scoreitem2p1l1'])){
				$score_item_2 = $_POST['scoreitem2p1l1']; 
			}
			
			if(isset($_POST['scoreitem3p1l1'])){
				$score_item_3 = $_POST['scoreitem3p1l1']; 
			}
			
			if(isset($_POST['scoreitem4p1l1'])){
				$score_item_4 = $_POST['scoreitem4p1l1']; 
			}
			
			if(isset($_POST['scorep1l1'])){
				$score_result = $_POST['scorep1l1']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
												
			$query = "insert into part1_level_1 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', '$score_item_3', '$score_item_4');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		} 
		else if($level_flag = "2") {			
			$score_item_1 = null;
			$score_item_2 = null;
			$score_item_3 = null;
			$score_item_4 = null;
			$score_result = null;
			
			if(isset($_POST['scoreitem1p1l2'])){
				$score_item_1 = $_POST['scoreitem1p1l2']; 
			}
			
			if(isset($_POST['scoreitem2p1l2'])){
				$score_item_2 = $_POST['scoreitem2p1l2']; 
			}
			
			if(isset($_POST['scoreitem3p1l2'])){
				$score_item_3 = $_POST['scoreitem3p1l2']; 
			}
			
			if(isset($_POST['scoreitem4p1l2'])){
				$score_item_4 = $_POST['scoreitem4p1l2']; 
			}
			
			if(isset($_POST['scorep1l2'])){
				$score_result = $_POST['scorep1l2']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			$query = "insert into part1_level_2 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		} 
		else if($level_flag = "3") {
			$score_item_1 = null;
			$score_item_2 = null;
			$score_item_3 = null;
			$score_item_4 = null;
			$score_item_5 = null;
			$score_item_6 = null;
			$score_item_7 = null;
			$score_result = null;
			
			if(isset($_POST['scoreitem1p1l3'])){
				$score_item_1 = $_POST['scoreitem1p1l3']; 
			}
			
			if(isset($_POST['scoreitem2p1l3'])){
				$score_item_2 = $_POST['scoreitem2p1l3']; 
			}
			
			if(isset($_POST['scoreitem3p1l3'])){
				$score_item_3 = $_POST['scoreitem3p1l3']; 
			}
			
			if(isset($_POST['scoreitem4p1l3'])){
				$score_item_4 = $_POST['scoreitem4p1l3']; 
			}
			
			if(isset($_POST['scoreitem5p1l3'])){
				$score_item_5 = $_POST['scoreitem5p1l3']; 
			}
			
			if(isset($_POST['scoreitem6p1l3'])){
				$score_item_6 = $_POST['scoreitem6p1l3']; 
			}
			
			if(isset($_POST['scoreitem7p1l3'])){
				$score_item_7 = $_POST['scoreitem7p1l3']; 
			}
			
			if(isset($_POST['scorep1l3'])){
				$score_result = $_POST['scorep1l3']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			$query = "insert into part1_level_3 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6', '$score_item_7');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "4") {
			$score_item_1 = null;
			$score_item_2 = null;
			$score_item_3 = null;
			$score_item_4 = null;
			$score_item_5 = null;
			$score_item_6 = null;
			$score_item_7 = null;
			$score_result = null;
			
			if(isset($_POST['scoreitem1p1l4'])){
				$score_item_1 = $_POST['scoreitem1p1l4']; 
			}
			
			if(isset($_POST['scoreitem2p1l4'])){
				$score_item_2 = $_POST['scoreitem2p1l4']; 
			}
			
			if(isset($_POST['scoreitem3p1l4'])){
				$score_item_3 = $_POST['scoreitem3p1l4']; 
			}
			
			if(isset($_POST['scoreitem4p1l3'])){
				$score_item_4 = $_POST['scoreitem4p1l4']; 
			}
			
			if(isset($_POST['scoreitem5p1l3'])){
				$score_item_5 = $_POST['scoreitem5p1l4']; 
			}
			
			if(isset($_POST['scoreitem6p1l4'])){
				$score_item_6 = $_POST['scoreitem6p1l4']; 
			}
			
			if(isset($_POST['scoreitem7p1l4'])){
				$score_item_7 = $_POST['scoreitem7p1l4']; 
			}
			
			if(isset($_POST['scorep1l4'])){
				$score_result = $_POST['scorep1l4']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			$query = "insert into part1_level_4 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6', '$score_item_7');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "5") {
			$score_item_1 = null;
			$score_item_2 = null;
			$score_item_3 = null;
			$score_item_4 = null;
			$score_item_5 = null;
			$score_item_6 = null;
			$score_item_7 = null;
			$score_item_8 = null;
			$score_result = null;
			
			if(isset($_POST['scoreitem1p1l5'])){
				$score_item_1 = $_POST['scoreitem1p1l5']; 
			}
			
			if(isset($_POST['scoreitem2p1l5'])){
				$score_item_2 = $_POST['scoreitem2p1l5']; 
			}
			
			if(isset($_POST['scoreitem3p1l5'])){
				$score_item_3 = $_POST['scoreitem3p1l5']; 
			}
			
			if(isset($_POST['scoreitem4p1l5'])){
				$score_item_4 = $_POST['scoreitem4p1l5']; 
			}
			
			if(isset($_POST['scoreitem5p1l5'])){
				$score_item_5 = $_POST['scoreitem5p1l5']; 
			}
			
			if(isset($_POST['scoreitem6p1l5'])){
				$score_item_6 = $_POST['scoreitem6p1l5']; 
			}
			
			if(isset($_POST['scoreitem7p1l5'])){
				$score_item_7 = $_POST['scoreitem7p1l5']; 
			}
			
			if(isset($_POST['scoreitem8p1l5'])){
				$score_item_8 = $_POST['scoreitem8p1l5']; 
			}
			
			if(isset($_POST['test0'])){
				$score_result = $_POST['test0']; 
			}
			
			if(isset($_POST['scorep1l5'])){
				$username = $_POST['scorep1l5']; 
			}
			
			$query = "insert into part1_level_5 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6', '$score_item_7', '$score_item_8');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "6") {
			$score_item_1 = null;
			$score_item_2 = null;
			$score_item_3 = null;
			$score_item_4 = null;
			$score_item_5 = null;
			$score_item_6 = null;
			$score_item_7 = null;
			$score_item_8 = null;
			$score_result = null;
			
			if(isset($_POST['scoreitem1p1l6'])){
				$score_item_1 = $_POST['scoreitem1p1l6']; 
			}
			
			if(isset($_POST['scoreitem2p1l6'])){
				$score_item_2 = $_POST['scoreitem2p1l6']; 
			}
			
			if(isset($_POST['scoreitem3p1l6'])){
				$score_item_3 = $_POST['scoreitem3p1l6']; 
			}
			
			if(isset($_POST['scoreitem4p1l6'])){
				$score_item_4 = $_POST['scoreitem4p1l6']; 
			}
			
			if(isset($_POST['scoreitem5p1l6'])){
				$score_item_5 = $_POST['scoreitem5p1l6']; 
			}
			
			if(isset($_POST['scoreitem6p1l6'])){
				$score_item_6 = $_POST['scoreitem6p1l6']; 
			}
			
			if(isset($_POST['scoreitem7p1l6'])){
				$score_item_7 = $_POST['scoreitem7p1l6']; 
			}
			
			if(isset($_POST['scoreitem8p1l6'])){
				$score_item_8 = $_POST['scoreitem8p1l6']; 
			}
			
			if(isset($_POST['scorep1l6'])){
				$score_result = $_POST['scorep1l6']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}

			$query = "insert into part1_level_6 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6', '$score_item_7', '$score_item_8');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "7") {
			$score_item_1 = null;
			$score_item_2 = null;
			$score_item_3 = null;
			$score_item_4 = null;
			$score_item_5 = null;
			$score_item_6 = null;
			$score_result = null;
			
			if(isset($_POST['scoreitem1p1l7'])){
				$score_item_1 = $_POST['scoreitem1p1l7']; 
			}
			
			if(isset($_POST['scoreitem2p1l7'])){
				$score_item_2 = $_POST['scoreitem2p1l7']; 
			}
			
			if(isset($_POST['scoreitem3p1l7'])){
				$score_item_3 = $_POST['scoreitem3p1l7']; 
			}
			
			if(isset($_POST['scoreitem4p1l7'])){
				$score_item_4 = $_POST['scoreitem4p1l7']; 
			}
			
			if(isset($_POST['scoreitem5p1l7'])){
				$score_item_5 = $_POST['scoreitem5p1l7']; 
			}
			
			if(isset($_POST['scoreitem6p1l7'])){
				$score_item_6 = $_POST['scoreitem6p1l7']; 
			}
			
			if(isset($_POST['scorep1l7'])){
				$score_result = $_POST['scorep1l7']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			$query = "insert into part1_level_7 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "8") {
			$score_item_1 = null;
			$score_item_2 = null;
			$score_item_3 = null;
			$score_item_4 = null;
			$score_item_5 = null;
			$score_item_6 = null;
			$score_item_7 = null;
			$score_item_8 = null;
			$score_item_9 = null;
			$score_item_10 = null;
			$score_result = null;
			
			if(isset($_POST['scoreitem1p1l8'])){
				$score_item_1 = $_POST['scoreitem1p1l8']; 
			}
			
			if(isset($_POST['scoreitem2p1l8'])){
				$score_item_2 = $_POST['scoreitem2p1l8']; 
			}
			
			if(isset($_POST['scoreitem3p1l8'])){
				$score_item_3 = $_POST['scoreitem3p1l8']; 
			}
			
			if(isset($_POST['scoreitem4p1l8'])){
				$score_item_4 = $_POST['scoreitem4p1l8']; 
			}
			
			if(isset($_POST['scoreitem5p1l8'])){
				$score_item_5 = $_POST['scoreitem5p1l8']; 
			}
			
			if(isset($_POST['scoreitem6p1l8'])){
				$score_item_6 = $_POST['scoreitem6p1l8']; 
			}
			
			if(isset($_POST['scoreitem7p1l8'])){
				$score_item_7 = $_POST['scoreitem7p1l8']; 
			}
			
			if(isset($_POST['scoreitem8p1l8'])){
				$score_item_8 = $_POST['scoreitem8p1l8']; 
			}
			
			if(isset($_POST['scoreitem9p1l8'])){
				$score_item_9 = $_POST['scoreitem9p1l8']; 
			}
			
			if(isset($_POST['scoreitem10p1l8'])){
				$score_item_10 = $_POST['scoreitem10p1l8']; 
			}
			
			if(isset($_POST['scorep1l8'])){
				$score_result = $_POST['scorep1l8']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			$query = "insert into part1_level_8 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6', '$score_item_7', '$score_item_8', '$score_item_9', '$score_item_10');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "9") {
			$score_item_1 = null;
			$score_item_2 = null;
			$score_item_3 = null;
			$score_item_4 = null;
			$score_item_5 = null;
			$score_item_6 = null;
			$score_item_7 = null;
			$score_item_8 = null;
			$score_item_9 = null;
			$score_item_10 = null;
			$score_result = null;
			
			if(isset($_POST['scoreitem1p1l9'])){
				$score_item_1 = $_POST['scoreitem1p1l9']; 
			}
			
			if(isset($_POST['scoreitem2p1l9'])){
				$score_item_2 = $_POST['scoreitem2p1l9']; 
			}
			
			if(isset($_POST['scoreitem3p1l9'])){
				$score_item_3 = $_POST['scoreitem3p1l9']; 
			}
			
			if(isset($_POST['scoreitem4p1l9'])){
				$score_item_4 = $_POST['scoreitem4p1l9']; 
			}
			
			if(isset($_POST['scoreitem5p1l9'])){
				$score_item_5 = $_POST['scoreitem5p1l9']; 
			}
			
			if(isset($_POST['scoreitem6p1l9'])){
				$score_item_6 = $_POST['scoreitem6p1l9']; 
			}
			
			if(isset($_POST['scoreitem7p1l9'])){
				$score_item_7 = $_POST['scoreitem7p1l9']; 
			}
			
			if(isset($_POST['scoreitem8p1l9'])){
				$score_item_8 = $_POST['scoreitem8p1l9']; 
			}
			
			if(isset($_POST['scoreitem9p1l9'])){
				$score_item_9 = $_POST['scoreitem9p1l9']; 
			}
			
			if(isset($_POST['scoreitem10p1l9'])){
				$score_item_10 = $_POST['scoreitem10p1l9']; 
			}
			
			if(isset($_POST['scorep1l9'])){
				$score_result = $_POST['scorep1l9']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			$query = "insert into part1_level_9 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6', '$score_item_7', '$score_item_8', '$score_item_9', '$score_item_10');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "10") {
			$score_item_1 = null;
			$score_item_2 = null;
			$score_item_3 = null;
			$score_item_4 = null;
			$score_item_5 = null;
			$score_item_6 = null;
			$score_item_7 = null;
			$score_item_8 = null;
			$score_item_9 = null;
			$score_item_10 = null;
			$score_result = null;
			
			if(isset($_POST['scoreitem1p1l10'])){
				$score_item_1 = $_POST['scoreitem1p1l10']; 
			}
			
			if(isset($_POST['scoreitem2p1l10'])){
				$score_item_2 = $_POST['scoreitem2p1l10']; 
			}
			
			if(isset($_POST['scoreitem3p1l10'])){
				$score_item_3 = $_POST['scoreitem3p1l10']; 
			}
			
			if(isset($_POST['scoreitem4p1l10'])){
				$score_item_4 = $_POST['scoreitem4p1l10']; 
			}
			
			if(isset($_POST['scoreitem5p1l10'])){
				$score_item_5 = $_POST['scoreitem5p1l10']; 
			}
			
			if(isset($_POST['scoreitem6p1l10'])){
				$score_item_6 = $_POST['scoreitem6p1l10']; 
			}
			
			if(isset($_POST['scoreitem7p1l10'])){
				$score_item_7 = $_POST['scoreitem7p1l10']; 
			}
			
			if(isset($_POST['scoreitem8p1l10'])){
				$score_item_8 = $_POST['scoreitem8p1l10']; 
			}
			
			if(isset($_POST['scoreitem9p1l10'])){
				$score_item_9 = $_POST['scoreitem9p1l10']; 
			}
			
			if(isset($_POST['scoreitem10p1l10'])){
				$score_item_10 = $_POST['scoreitem10p1l10']; 
			}
			
			if(isset($_POST['scorep1l10'])){
				$score_result = $_POST['scorep1l10']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			$query = "insert into part1_level_10 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6', '$score_item_7', '$score_item_8', '$score_item_9', '$score_item_10');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
?>