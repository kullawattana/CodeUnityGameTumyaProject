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
			$score_p1_l1 = null;
			$score_p2_l1 = null;
			$score_p3_l1 = null;
			$score_result_3_parts = null;
					
			if(isset($_POST['scorep1l1'])){
				$score_p1_l1 = $_POST['scorep1l1']; 
			}
			
			if(isset($_POST['scorep2l1'])){
				$score_p2_l1 = $_POST['scorep2l1']; 
			}
			
			if(isset($_POST['scorep3l1'])){
				$score_p3_l1 = $_POST['scorep3l1']; 
			}
						
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			if(isset($_POST['scoreresult3part'])){
				$score_result_3_parts = $_POST['scoreresult3part']; 
			}
			
			$query = "insert into hall_of_frame_part_1 values ('', '$id_user' , '$username', '$score_p1_l1', '$score_p2_l1', '$score_p3_l1', '$score_result_3_parts');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		} 
		else if($level_flag = "2") {
			$score_p1_l2 = null;
			$score_p2_l2 = null;
			$score_p3_l2 = null;
			$score_result_3_parts = null;
					
			if(isset($_POST['scorep1l2'])){
				$score_p1_l2 = $_POST['scorep1l2']; 
			}
			
			if(isset($_POST['scorep2l2'])){
				$score_p2_l2 = $_POST['scorep2l2']; 
			}
			
			if(isset($_POST['scorep3l2'])){
				$score_p3_l2 = $_POST['scorep3l2']; 
			}
						
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			if(isset($_POST['scoreresult3part'])){
				$score_result_3_parts = $_POST['scoreresult3part']; 
			}
			$query = "insert into hall_of_frame_part_2 values ('', '$id_user' , '$username', '$score_p1_l2', '$score_p2_l2', '$score_p3_l2', '$score_result_3_parts');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		} 
		else if($level_flag = "3") {
			$score_p1_l3 = null;
			$score_p2_l3 = null;
			$score_p3_l3 = null;
			$score_result_3_parts = null;
					
			if(isset($_POST['scorep1l3'])){
				$score_p1_l3 = $_POST['scorep1l3']; 
			}
			
			if(isset($_POST['scorep2l3'])){
				$score_p2_l3 = $_POST['scorep2l3']; 
			}
			
			if(isset($_POST['scorep3l3'])){
				$score_p3_l3 = $_POST['scorep3l3']; 
			}
						
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			if(isset($_POST['scoreresult3part'])){
				$score_result_3_parts = $_POST['scoreresult3part']; 
			}
			$query = "insert into hall_of_frame_part_3 values ('', '$id_user' , '$username', '$score_p1_l3', '$score_p2_l3', '$score_p3_l3', '$score_result_3_parts');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "4") {
			$score_p1_l4 = null;
			$score_p2_l4 = null;
			$score_p3_l4 = null;
			$score_result_3_parts = null;
					
			if(isset($_POST['scorep1l4'])){
				$score_p1_l4 = $_POST['scorep1l4']; 
			}
			
			if(isset($_POST['scorep2l4'])){
				$score_p2_l4 = $_POST['scorep2l4']; 
			}
			
			if(isset($_POST['scorep3l4'])){
				$score_p3_l4 = $_POST['scorep3l4']; 
			}
						
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			if(isset($_POST['scoreresult3part'])){
				$score_result_3_parts = $_POST['scoreresult3part']; 
			}
			$query = "insert into hall_of_frame_part_4 values ('', '$id_user' , '$username', '$score_p1_l4', '$score_p2_l4', '$score_p3_l4', '$score_result_3_parts');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "5") {
			$score_p1_l5 = null;
			$score_p2_l5 = null;
			$score_p3_l5 = null;
			$score_result_3_parts = null;
					
			if(isset($_POST['scorep1l5'])){
				$score_p1_l5 = $_POST['scorep1l5']; 
			}
			
			if(isset($_POST['scorep2l5'])){
				$score_p2_l5 = $_POST['scorep2l5']; 
			}
			
			if(isset($_POST['scorep3l5'])){
				$score_p3_l5 = $_POST['scorep3l5']; 
			}
						
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			if(isset($_POST['scoreresult3part'])){
				$score_result_3_parts = $_POST['scoreresult3part']; 
			}
			$query = "insert into hall_of_frame_part_5 values ('', '$id_user' , '$username', '$score_p1_l5', '$score_p2_l5', '$score_p3_l5', '$score_result_3_parts');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "6") {
			$score_p1_l6 = null;
			$score_p2_l6 = null;
			$score_p3_l6 = null;
			$score_result_3_parts = null;
					
			if(isset($_POST['scorep1l6'])){
				$score_p1_l6 = $_POST['scorep1l6']; 
			}
			
			if(isset($_POST['scorep2l6'])){
				$score_p2_l6 = $_POST['scorep2l6']; 
			}
			
			if(isset($_POST['scorep3l6'])){
				$score_p3_l6 = $_POST['scorep3l6']; 
			}
						
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			if(isset($_POST['scoreresult3part'])){
				$score_result_3_parts = $_POST['scoreresult3part']; 
			}
			$query = "insert into hall_of_frame_part_6 values ('', '$id_user' , '$username', '$score_p1_l6', '$score_p2_l6', '$score_p3_l6', '$score_result_3_parts');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "7") {
			$score_p1_l7 = null;
			$score_p2_l7 = null;
			$score_p3_l7 = null;
			$score_result_3_parts = null;
					
			if(isset($_POST['scorep1l7'])){
				$score_p1_l7 = $_POST['scorep1l7']; 
			}
			
			if(isset($_POST['scorep2l7'])){
				$score_p2_l7 = $_POST['scorep2l7']; 
			}
			
			if(isset($_POST['scorep3l7'])){
				$score_p3_l7 = $_POST['scorep3l7']; 
			}
						
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			if(isset($_POST['scoreresult3part'])){
				$score_result_3_parts = $_POST['scoreresult3part']; 
			}
			$query = "insert into hall_of_frame_part_7 values ('', '$id_user' , '$username', '$score_p1_l7', '$score_p2_l7', '$score_p3_l7', '$score_result_3_parts');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "8") {
			$score_p1_l8 = null;
			$score_p2_l8 = null;
			$score_p3_l8 = null;
			$score_result_3_parts = null;
					
			if(isset($_POST['scorep1l8'])){
				$score_p1_l8 = $_POST['scorep1l8']; 
			}
			
			if(isset($_POST['scorep2l8'])){
				$score_p2_l8 = $_POST['scorep2l8']; 
			}
			
			if(isset($_POST['scorep3l8'])){
				$score_p3_l8 = $_POST['scorep3l8']; 
			}
						
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			if(isset($_POST['scoreresult3part'])){
				$score_result_3_parts = $_POST['scoreresult3part']; 
			}
			$query = "insert into hall_of_frame_part_8 values ('', '$id_user' , '$username', '$score_p1_l8', '$score_p2_l8', '$score_p3_l8', '$score_result_3_parts');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "9") {
			$score_p1_l9 = null;
			$score_p2_l9 = null;
			$score_p3_l9 = null;
			$score_result_3_parts = null;
					
			if(isset($_POST['scorep1l9'])){
				$score_p1_l9 = $_POST['scorep1l9']; 
			}
			
			if(isset($_POST['scorep2l9'])){
				$score_p2_l9 = $_POST['scorep2l9']; 
			}
			
			if(isset($_POST['scorep3l9'])){
				$score_p3_l9 = $_POST['scorep3l9']; 
			}
						
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			if(isset($_POST['scoreresult3part'])){
				$score_result_3_parts = $_POST['scoreresult3part']; 
			}
			$query = "insert into hall_of_frame_part_9 values ('', '$id_user' , '$username', '$score_p1_l9', '$score_p2_l9', '$score_p3_l9', '$score_result_3_parts');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "10") {
			$score_p1_l10 = null;
			$score_p2_l10 = null;
			$score_p3_l10 = null;
			$score_result_3_parts = null;
					
			if(isset($_POST['scorep1l10'])){
				$score_p1_l10 = $_POST['scorep1l10']; 
			}
			
			if(isset($_POST['scorep2l10'])){
				$score_p2_l10 = $_POST['scorep2l10']; 
			}
			
			if(isset($_POST['scorep3l10'])){
				$score_p3_l10 = $_POST['scorep3l10']; 
			}
						
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			if(isset($_POST['scoreresult3part'])){
				$score_result_3_parts = $_POST['scoreresult3part']; 
			}
			$query = "insert into hall_of_frame_part_10 values ('', '$id_user' , '$username', '$score_p1_l10', '$score_p2_l10', '$score_p3_l10', '$score_result_3_parts');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
?>