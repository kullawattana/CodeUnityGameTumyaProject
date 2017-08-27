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
			$score_result = null;
			$time_result = null;
			
			if(isset($_POST['scorep3l1'])){
				$score_result = $_POST['scorep3l1']; 
			}
			
			if(isset($_POST['timeresultp3l1'])){
				$time_result = $_POST['timeresultp3l1']; 
			}

			$query = "insert into part3_level_1 values ('', '$id_user' , '$username', '$score_result', '$time_result');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		} 
		else if($level_flag = "2") {
			$score_result = null;
			$time_result = null;
			
			if(isset($_POST['scorep3l2'])){
				$score_result = $_POST['scorep3l2']; 
			}
			
			if(isset($_POST['timeresultp3l2'])){
				$time_result = $_POST['timeresultp3l2']; 
			}
			
			$query = "insert into part3_level_2 values ('', '$id_user' , '$username', '$score_result', '$time_result');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		} 
		else if($level_flag = "3") {
			$score_result = null;
			$time_result = null;
			
			if(isset($_POST['scorep3l3'])){
				$score_result = $_POST['scorep3l3']; 
			}
			
			if(isset($_POST['timeresultp3l3'])){
				$time_result = $_POST['timeresultp3l3']; 
			}
			
			$query = "insert into part3_level_3 values ('', '$id_user' , '$username', '$score_result', '$time_result');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "4") {
			$score_result = null;
			$time_result = null;
			
			if(isset($_POST['scorep3l4'])){
				$score_result = $_POST['scorep3l4']; 
			}
			
			if(isset($_POST['timeresultp3l4'])){
				$time_result = $_POST['timeresultp3l4']; 
			}
			
			$query = "insert into part3_level_4 values ('', '$id_user' , '$username', '$score_result', '$time_result');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "5") {
			$score_result = null;
			$time_result = null;
			
			if(isset($_POST['scorep3l5'])){
				$score_result = $_POST['scorep3l5']; 
			}
			
			if(isset($_POST['timeresultp3l5'])){
				$time_result = $_POST['timeresultp3l5']; 
			}
			
			$query = "insert into part3_level_5 values ('', '$id_user' , '$username', '$score_result', '$time_result');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "6") {
			$score_result = null;
			$time_result = null;
			
			if(isset($_POST['scorep3l6'])){
				$score_result = $_POST['scorep3l6']; 
			}
			
			if(isset($_POST['timeresultp3l1'])){
				$time_result = $_POST['timeresultp3l6']; 
			}
			
			$query = "insert into part3_level_6 values ('', '$id_user' , '$username', '$score_result', '$time_result');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "7") {
			$score_result = null;
			$time_result = null;
			
			if(isset($_POST['scorep3l7'])){
				$score_result = $_POST['scorep3l7']; 
			}
			
			if(isset($_POST['timeresultp3l7'])){
				$time_result = $_POST['timeresultp3l7']; 
			}
			
			$query = "insert into part3_level_7 values ('', '$id_user' , '$username', '$score_result', '$time_result');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "8") {
			$score_result = null;
			$time_result = null;
			
			if(isset($_POST['scorep3l8'])){
				$score_result = $_POST['scorep3l8']; 
			}
			
			if(isset($_POST['timeresultp3l8'])){
				$time_result = $_POST['timeresultp3l8']; 
			}
			
			$query = "insert into part3_level_8 values ('', '$id_user' , '$username', '$score_result', '$time_result');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "9") {
			$score_result = null;
			$time_result = null;
			
			if(isset($_POST['scorep3l9'])){
				$score_result = $_POST['scorep3l9']; 
			}
			
			if(isset($_POST['timeresultp3l9'])){
				$time_result = $_POST['timeresultp3l9']; 
			}
			
			$query = "insert into part3_level_9 values ('', '$id_user' , '$username', '$score_result', '$time_result');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
		else if($level_flag = "10") {
			$score_result = null;
			$time_result = null;
			
			if(isset($_POST['scorep3l10'])){
				$score_result = $_POST['scorep3l10']; 
			}
			
			if(isset($_POST['timeresultp3l10'])){
				$time_result = $_POST['timeresultp3l10']; 
			}
			
			$query = "insert into part3_level_10 values ('', '$id_user' , '$username', '$score_result', '$time_result');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
?>