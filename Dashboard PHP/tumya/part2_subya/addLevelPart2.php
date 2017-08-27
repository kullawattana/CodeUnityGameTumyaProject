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
			$weight_result = null;
					
			if(isset($_POST['scoreitem1p2l1'])){
				$score_item_1 = $_POST['scoreitem1p2l1']; 
			}
			
			if(isset($_POST['scoreitem2p2l1'])){
				$score_item_2 = $_POST['scoreitem2p2l1']; 
			}
			
			if(isset($_POST['scoreitem3p2l1'])){
				$score_item_3 = $_POST['scoreitem3p2l1']; 
			}
			
			if(isset($_POST['scoreitem4p2l1'])){
				$score_item_4 = $_POST['scoreitem4p2l1']; 
			}
			
			if(isset($_POST['scorep2l1'])){
				$score_result = $_POST['scorep2l1']; 
			}
			
			if(isset($_POST['weightresultp2l1'])){
				$weight_result = $_POST['weightresultp2l1']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
						
			$query = "insert into part2_level_1 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$weight_result');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		} 
		else if($level_flag = "2") {
			$score_item_1 = null;
			$score_item_2 = null;
			$score_item_3 = null;
			$score_item_4 = null;
			$score_result = null;
			$weight_result = null;
					
			if(isset($_POST['scoreitem1p2l2'])){
				$score_item_1 = $_POST['scoreitem1p2l2']; 
			}
			
			if(isset($_POST['scoreitem2p2l2'])){
				$score_item_2 = $_POST['scoreitem2p2l2']; 
			}
			
			if(isset($_POST['scoreitem3p2l2'])){
				$score_item_3 = $_POST['scoreitem3p2l2']; 
			}
			
			if(isset($_POST['scoreitem4p2l2'])){
				$score_item_4 = $_POST['scoreitem4p2l2']; 
			}
			
			if(isset($_POST['scorep2l2'])){
				$score_result = $_POST['scorep2l2']; 
			}
			
			if(isset($_POST['weightresultp2l2'])){
				$weight_result = $_POST['weightresultp2l2']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
						
			$query = "insert into part2_level_2 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$weight_result');"; 
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
			$weight_result = null;
					
			if(isset($_POST['scoreitem1p2l3'])){
				$score_item_1 = $_POST['scoreitem1p2l3']; 
			}
			
			if(isset($_POST['scoreitem2p2l3'])){
				$score_item_2 = $_POST['scoreitem2p2l3']; 
			}
			
			if(isset($_POST['scoreitem3p2l3'])){
				$score_item_3 = $_POST['scoreitem3p2l3']; 
			}
			
			if(isset($_POST['scoreitem4p2l3'])){
				$score_item_4 = $_POST['scoreitem4p2l3']; 
			}
			
			if(isset($_POST['scoreitem5p2l3'])){
				$score_item_5 = $_POST['scoreitem5p2l3']; 
			}
			
			if(isset($_POST['scoreitem6p2l3'])){
				$score_item_6 = $_POST['scoreitem6p2l3']; 
			}
			
			if(isset($_POST['scoreitem7p2l3'])){
				$score_item_7 = $_POST['scoreitem7p2l3']; 
			}
			
			if(isset($_POST['scorep2l3'])){
				$score_result = $_POST['scorep2l3']; 
			}
			
			if(isset($_POST['weightresultp2l3'])){
				$weight_result = $_POST['weightresultp2l3']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			$query = "insert into part2_level_3 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6', '$score_item_7', '$weight_result');"; 
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
			$weight_result = null;
					
			if(isset($_POST['scoreitem1p2l4'])){
				$score_item_1 = $_POST['scoreitem1p2l4']; 
			}
			
			if(isset($_POST['scoreitem2p2l4'])){
				$score_item_2 = $_POST['scoreitem2p2l4']; 
			}
			
			if(isset($_POST['scoreitem3p2l4'])){
				$score_item_3 = $_POST['scoreitem3p2l4']; 
			}
			
			if(isset($_POST['scoreitem4p2l4'])){
				$score_item_4 = $_POST['scoreitem4p2l4']; 
			}
			
			if(isset($_POST['scoreitem5p2l4'])){
				$score_item_5 = $_POST['scoreitem5p2l4']; 
			}
			
			if(isset($_POST['scoreitem6p2l4'])){
				$score_item_6 = $_POST['scoreitem6p2l4']; 
			}
			
			if(isset($_POST['scoreitem7p2l4'])){
				$score_item_7 = $_POST['scoreitem7p2l4']; 
			}
			
			if(isset($_POST['scorep2l4'])){
				$score_result = $_POST['scorep2l4']; 
			}
			
			if(isset($_POST['weightresultp2l4'])){
				$weight_result = $_POST['weightresultp2l4']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			$query = "insert into part2_level_4 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6', '$score_item_7', '$weight_result');"; 
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
			$weight_result = null;
					
			if(isset($_POST['scoreitem1p2l5'])){
				$score_item_1 = $_POST['scoreitem1p2l5']; 
			}
			
			if(isset($_POST['scoreitem2p2l5'])){
				$score_item_2 = $_POST['scoreitem2p2l5']; 
			}
			
			if(isset($_POST['scoreitem3p2l5'])){
				$score_item_3 = $_POST['scoreitem3p2l5']; 
			}
			
			if(isset($_POST['scoreitem4p2l5'])){
				$score_item_4 = $_POST['scoreitem4p2l5']; 
			}
			
			if(isset($_POST['scoreitem5p2l5'])){
				$score_item_5 = $_POST['scoreitem5p2l5']; 
			}
			
			if(isset($_POST['scoreitem6p2l5'])){
				$score_item_6 = $_POST['scoreitem6p2l5']; 
			}
			
			if(isset($_POST['scoreitem7p2l5'])){
				$score_item_7 = $_POST['scoreitem7p2l5']; 
			}
			
			if(isset($_POST['scoreitem8p2l5'])){
				$score_item_8 = $_POST['scoreitem8p2l5']; 
			}
			
			if(isset($_POST['scorep2l5'])){
				$score_result = $_POST['scorep2l5']; 
			}
			
			if(isset($_POST['weightresultp2l5'])){
				$weight_result = $_POST['weightresultp2l5']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			$query = "insert into part2_level_5 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6', '$score_item_7', '$score_item_8', '$weight_result');"; 
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
			$weight_result = null;
					
			if(isset($_POST['scoreitem1p2l6'])){
				$score_item_1 = $_POST['scoreitem1p2l6']; 
			}
			
			if(isset($_POST['scoreitem2p2l6'])){
				$score_item_2 = $_POST['scoreitem2p2l6']; 
			}
			
			if(isset($_POST['scoreitem3p2l6'])){
				$score_item_3 = $_POST['scoreitem3p2l6']; 
			}
			
			if(isset($_POST['scoreitem4p2l6'])){
				$score_item_4 = $_POST['scoreitem4p2l6']; 
			}
			
			if(isset($_POST['scoreitem5p2l6'])){
				$score_item_5 = $_POST['scoreitem5p2l6']; 
			}
			
			if(isset($_POST['scoreitem6p2l6'])){
				$score_item_6 = $_POST['scoreitem6p2l6']; 
			}
			
			if(isset($_POST['scoreitem7p2l6'])){
				$score_item_7 = $_POST['scoreitem7p2l6']; 
			}
			
			if(isset($_POST['scoreitem8p2l6'])){
				$score_item_8 = $_POST['scoreitem8p2l6']; 
			}
			
			if(isset($_POST['scorep2l6'])){
				$score_result = $_POST['scorep2l6']; 
			}
			
			if(isset($_POST['weightresultp2l6'])){
				$weight_result = $_POST['weightresultp2l6']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			$query = "insert into part2_level_6 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6', '$score_item_7', '$score_item_8', '$weight_result');"; 
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
			$weight_result = null;
					
			if(isset($_POST['scoreitem1p2l7'])){
				$score_item_1 = $_POST['scoreitem1p2l7']; 
			}
			
			if(isset($_POST['scoreitem2p2l7'])){
				$score_item_2 = $_POST['scoreitem2p2l7']; 
			}
			
			if(isset($_POST['scoreitem3p2l7'])){
				$score_item_3 = $_POST['scoreitem3p2l7']; 
			}
			
			if(isset($_POST['scoreitem4p2l7'])){
				$score_item_4 = $_POST['scoreitem4p2l7']; 
			}
			
			if(isset($_POST['scoreitem5p2l7'])){
				$score_item_5 = $_POST['scoreitem5p2l7']; 
			}
			
			if(isset($_POST['scoreitem6p2l7'])){
				$score_item_6 = $_POST['scoreitem6p2l7']; 
			}
						
			if(isset($_POST['scorep2l7'])){
				$score_result = $_POST['scorep2l7']; 
			}
			
			if(isset($_POST['weightresultp2l7'])){
				$weight_result = $_POST['weightresultp2l7']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			$query = "insert into part2_level_7 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6', '$weight_result');"; 
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
			$weight_result = null;
					
			if(isset($_POST['scoreitem1p2l8'])){
				$score_item_1 = $_POST['scoreitem1p2l8']; 
			}
			
			if(isset($_POST['scoreitem2p2l8'])){
				$score_item_2 = $_POST['scoreitem2p2l8']; 
			}
			
			if(isset($_POST['scoreitem3p2l8'])){
				$score_item_3 = $_POST['scoreitem3p2l8']; 
			}
			
			if(isset($_POST['scoreitem4p2l8'])){
				$score_item_4 = $_POST['scoreitem4p2l8']; 
			}
			
			if(isset($_POST['scoreitem5p2l8'])){
				$score_item_5 = $_POST['scoreitem5p2l8']; 
			}
			
			if(isset($_POST['scoreitem6p2l8'])){
				$score_item_6 = $_POST['scoreitem6p2l8']; 
			}
			
			if(isset($_POST['scoreitem7p2l8'])){
				$score_item_7 = $_POST['scoreitem7p2l8']; 
			}
			
			if(isset($_POST['scoreitem8p2l8'])){
				$score_item_8 = $_POST['scoreitem8p2l8']; 
			}
			
			if(isset($_POST['scoreitem9p2l8'])){
				$score_item_9 = $_POST['scoreitem9p2l8']; 
			}
			
			if(isset($_POST['scoreitem10p2l8'])){
				$score_item_10 = $_POST['scoreitem10p2l8']; 
			}
						
			if(isset($_POST['scorep2l8'])){
				$score_result = $_POST['scorep2l8']; 
			}
			
			if(isset($_POST['weightresultp2l8'])){
				$weight_result = $_POST['weightresultp2l8']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			$query = "insert into part2_level_8 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6', '$score_item_7', '$score_item_8', '$score_item_9', '$score_item_10', '$weight_result');"; 
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
			$weight_result = null;
					
			if(isset($_POST['scoreitem1p2l9'])){
				$score_item_1 = $_POST['scoreitem1p2l9']; 
			}
			
			if(isset($_POST['scoreitem2p2l9'])){
				$score_item_2 = $_POST['scoreitem2p2l9']; 
			}
			
			if(isset($_POST['scoreitem3p2l9'])){
				$score_item_3 = $_POST['scoreitem3p2l9']; 
			}
			
			if(isset($_POST['scoreitem4p2l9'])){
				$score_item_4 = $_POST['scoreitem4p2l9']; 
			}
			
			if(isset($_POST['scoreitem5p2l9'])){
				$score_item_5 = $_POST['scoreitem5p2l9']; 
			}
			
			if(isset($_POST['scoreitem6p2l9'])){
				$score_item_6 = $_POST['scoreitem6p2l9']; 
			}
			
			if(isset($_POST['scoreitem7p2l9'])){
				$score_item_7 = $_POST['scoreitem7p2l9']; 
			}
			
			if(isset($_POST['scoreitem8p2l9'])){
				$score_item_8 = $_POST['scoreitem8p2l9']; 
			}
			
			if(isset($_POST['scoreitem9p2l9'])){
				$score_item_9 = $_POST['scoreitem9p2l9']; 
			}
			
			if(isset($_POST['scoreitem10p2l9'])){
				$score_item_10 = $_POST['scoreitem10p2l9']; 
			}
						
			if(isset($_POST['scorep2l9'])){
				$score_result = $_POST['scorep2l9']; 
			}
			
			if(isset($_POST['weightresultp2l9'])){
				$weight_result = $_POST['weightresultp2l9']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			$query = "insert into part2_level_9 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6', '$score_item_7', '$score_item_8', '$score_item_9', '$score_item_10', '$weight_result');"; 
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
			$weight_result = null;
					
			if(isset($_POST['scoreitem1p2l10'])){
				$score_item_1 = $_POST['scoreitem1p2l10']; 
			}
			
			if(isset($_POST['scoreitem2p2l10'])){
				$score_item_2 = $_POST['scoreitem2p2l10']; 
			}
			
			if(isset($_POST['scoreitem3p2l10'])){
				$score_item_3 = $_POST['scoreitem3p2l10']; 
			}
			
			if(isset($_POST['scoreitem4p2l10'])){
				$score_item_4 = $_POST['scoreitem4p2l10']; 
			}
			
			if(isset($_POST['scoreitem5p2l10'])){
				$score_item_5 = $_POST['scoreitem5p2l10']; 
			}
			
			if(isset($_POST['scoreitem6p2l10'])){
				$score_item_6 = $_POST['scoreitem6p2l10']; 
			}
			
			if(isset($_POST['scoreitem7p2l10'])){
				$score_item_7 = $_POST['scoreitem7p2l10']; 
			}
			
			if(isset($_POST['scoreitem8p2l10'])){
				$score_item_8 = $_POST['scoreitem8p2l10']; 
			}
			
			if(isset($_POST['scoreitem9p2l10'])){
				$score_item_9 = $_POST['scoreitem9p2l10']; 
			}
			
			if(isset($_POST['scoreitem10p2l10'])){
				$score_item_10 = $_POST['scoreitem10p2l10']; 
			}
						
			if(isset($_POST['scorep2l10'])){
				$score_result = $_POST['scorep2l10']; 
			}
			
			if(isset($_POST['weightresultp2l10'])){
				$weight_result = $_POST['weightresultp2l10']; 
			}
			
			if(isset($_POST['username'])){
				$username = $_POST['username']; 
			}
			
			$query = "insert into part2_level_10 values ('', '$id_user' , '$username' , '$score_result', '$score_item_1', '$score_item_2', 
			'$score_item_3', '$score_item_4', '$score_item_5', '$score_item_6', '$score_item_7', '$score_item_8', '$score_item_9', '$score_item_10', '$weight_result');"; 
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		}
?>