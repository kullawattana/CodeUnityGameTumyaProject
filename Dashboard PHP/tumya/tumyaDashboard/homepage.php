<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Admin Home Page</title>
		<meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script type="text/javascript" src="js/dashboard.min.js"></script>
    </head>
			
    <body>	
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Tumya Ranger Game Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i>Admin<i class="caret"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="edit_profile.php">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                            <a href="homepage.php"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
						<li>
                            <a href="tablesUsers.php"><i class="icon-chevron-right"></i> Tables Users</a>
                        </li>
						<li>
                            <a href="tablesKeb.php"><i class="icon-chevron-right"></i> Tables Score (Kebya)</a>
                        </li>
						<li>
                            <a href="tablesSubya.php"><i class="icon-chevron-right"></i> Tables Score (Subya)</a>
                        </li>
						<li>
                            <a href="tablesTumya.php"><i class="icon-chevron-right"></i> Tables Score (Tumya)</a>
                        </li>
						<!--<li>
                            <a href="tablesHall.html"><i class="icon-chevron-right"></i> Tables Hall of Frame</a>
                        </li>-->
						<li>
                            <a href="tablesScore.php"><i class="icon-chevron-right"></i> Tables Score Result</a>
                        </li>
                        <!--<li>
                            <a href="stats.html"><i class="icon-chevron-right"></i> Statistics (Charts)</a>
                        </li>-->
                        
						<?php    
						$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
						mysql_select_db('tumya') or die('Could not select database');
						$sql = "SELECT COUNT(id) as id FROM user_login";
						$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
						while($row = mysql_fetch_array($result))
						{  
						?>
						<li>
                            <a href="#"><span class="badge badge-info pull-right"><?php echo $row['id'] ?></span>Users</a>
                        </li>
						<?php
						}
						?>   
                        <li>
                            <a href="#"><span class="badge badge-important pull-right">0</span>Game Problems</a>
                        </li>
                    </ul>
                </div>
                
                <div class="span9" id="content">
					<div class="row-fluid">
						<img id="homepage" src="images/levelPart/homepage.jpg" width="1000">
					</div>
                    <div class="row-fluid">
                    <div class="row-fluid">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Statistics</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span3" align="center">
                                    <!--<div class="chart" data-percent="73">73%</div>-->
									<?php    
									$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
									mysql_select_db('tumya') or die('Could not select database');
									$sql = "SELECT COUNT(id) as id FROM user_login";
									$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
									while($row = mysql_fetch_array($result))
									{  
									?>
									<h1><?php echo $row['id'] ?><h1>
									<?php
									}
									?> 
                                    <div class="chart-bottom-heading"><span class="label label-info">จำนวนผู้เล่น</span></div>
                                </div>
                                <div class="span3" align="center">
									<?php    
									$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
									mysql_select_db('tumya') or die('Could not select database');
									$sql = "SELECT COUNT(id) as id FROM admin";
									$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
									while($row = mysql_fetch_array($result))
									{  
									?>
									<h1><?php echo $row['id'] ?><h1>
									<?php
									}
									?> 
                                    <div class="chart-bottom-heading"><span class="label label-info">ผู้ดูแลระบบ</span></div>
                                </div>
                                <div class="span3" align="center">
                                    <?php
									$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
									mysql_select_db('tumya') or die('Could not select database');
									$sql = "select MIN(score) as min_score from (
											SELECT MIN(score_result) as score FROM hall_of_frame_part_1 
											UNION 
											SELECT MIN(score_result) as score FROM hall_of_frame_part_2 
											UNION 
											SELECT MIN(score_result) as score FROM hall_of_frame_part_3 
											UNION
											SELECT MIN(score_result) as score FROM hall_of_frame_part_4 
											UNION 
											SELECT MIN(score_result) as score FROM hall_of_frame_part_5
											UNION 
											SELECT MIN(score_result) as score FROM hall_of_frame_part_6 
											UNION
											SELECT MIN(score_result) as score FROM hall_of_frame_part_7 
											UNION 
											SELECT MIN(score_result) as score FROM hall_of_frame_part_8
											UNION 
											SELECT MIN(score_result) as score FROM hall_of_frame_part_9 
											UNION 
											SELECT MIN(score_result) as score FROM hall_of_frame_part_10 
											) result_score";
									$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
									while($row = mysql_fetch_array($result))
									{  
									?>
                                    <h1><?php echo $row['min_score'] ?><h1>
									<?php
									}
									?> 
                                    <div class="chart-bottom-heading"><span class="label label-info">คะแนนต่ำสุด</span></div>
                                </div>
                                <div class="span3" align="center">
								<?php
									$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
									mysql_select_db('tumya') or die('Could not select database');
									$sql = "select MAX(score) as max_score from (
											SELECT MAX(score_result) as score FROM hall_of_frame_part_1 
											UNION 
											SELECT MAX(score_result) as score FROM hall_of_frame_part_2 
											UNION 
											SELECT MAX(score_result) as score FROM hall_of_frame_part_3 
											UNION
											SELECT MAX(score_result) as score FROM hall_of_frame_part_4 
											UNION 
											SELECT MAX(score_result) as score FROM hall_of_frame_part_5
											UNION 
											SELECT MAX(score_result) as score FROM hall_of_frame_part_6 
											UNION
											SELECT MAX(score_result) as score FROM hall_of_frame_part_7 
											UNION 
											SELECT MAX(score_result) as score FROM hall_of_frame_part_8
											UNION 
											SELECT MAX(score_result) as score FROM hall_of_frame_part_9 
											UNION 
											SELECT MAX(score_result) as score FROM hall_of_frame_part_10 
											) result_score";
									$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
									while($row = mysql_fetch_array($result))
									{  
									?>
                                    <h1><?php echo $row['max_score'] ?><h1>
									<?php
									}
									?> 
                                    <div class="chart-bottom-heading"><span class="label label-info">คะแนนสูงสุด</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">จำนวนยาสมุนไพร</div>
                                    <div class="pull-right"><span class="badge badge-info">10</span>
                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Thai Name</th>
												<th>จำนวนวัตถุดิบ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>ยาทิงเจอร์ทองพันชั่ง</td>
												<td>4 ชนิด</td>
                                            </tr>
											<tr>
                                                <td>2</td>
                                                <td>ยาเปลือกมังคุด</td>
												<td>4 ชนิด</td>
                                            </tr>
											<tr>
                                                <td>3</td>
                                                <td>ยาแก้ไอผสมมะขามป้อม</td>
												<td>7 ชนิด</td>
                                            </tr>
											<tr>
                                                <td>4</td>
                                                <td>ยาธาตุอบเชย</td>
												<td>7 ชนิด</td>
                                            </tr>
											<tr>
                                                <td>5</td>
                                                <td>ยาลูกประคบ</td>
												<td>8 ชนิด</td>
                                            </tr>
											<tr>
                                                <td>6</td>
                                                <td>ยาประสะกะเพรา</td>
												<td>8 ชนิด</td>
                                            </tr>
											<tr>
                                                <td>7</td>
                                                <td>ยาจันทน์ลีลา</td>
												<td>6 ชนิด</td>
                                            </tr>
											<tr>
                                                <td>8</td>
                                                <td>ยาหอมแก้ลมวิงเวียน</td>
												<td>10 ชนิด</td>
                                            </tr>
											<tr>
                                                <td>9</td>
                                                <td>ยาประสะจันทน์แดง</td>
												<td>10 ชนิด</td>
                                            </tr>
											<tr>
                                                <td>10</td>
                                                <td>ยาแก้ไอพื้นบ้านอีสาน</td>
												<td>10 ชนิด</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="row-fluid">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Herbal Gallery</div>
                                <div class="pull-right"><span class="badge badge-info">10</span>
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="row-fluid padd-bottom">
                                  <div class="span3">
									<img id="myImg01" src="images/herbalLevel/level1.jpg" width="300" height="200">
									<div id="myModal01" class="modal">
										<span class="close">×</span>
											<img class="modal-content" id="img01">
										<div id="caption"></div>
									</div>
                                  </div>
                                  <div class="span3">		
									<img id="myImg02" src="images/herbalLevel/level2.jpg" width="300" height="200">
									<div id="myModal02" class="modal">
									  <span class="close">×</span>
										<img class="modal-content" id="img02">
									  <div id="caption"></div>
									</div>
                                  </div>
                                  <div class="span3">		
									<img id="myImg03" src="images/herbalLevel/level3.jpg" width="300" height="200">
									<div id="myModal03" class="modal">
									  <span class="close">×</span>
										<img class="modal-content" id="img03">
									  <div id="caption"></div>
									</div>
                                  </div>
                                 <div class="span3">		
									<img id="myImg04" src="images/herbalLevel/level4.jpg" width="300" height="200">
									<div id="myModal04" class="modal">
									  <span class="close">×</span>
										<img class="modal-content" id="img04">
									  <div id="caption"></div>
									</div>
                                  </div>
                                </div>

                                <div class="row-fluid padd-bottom">
                                  <div class="span3">		
									<img id="myImg05" src="images/herbalLevel/level5.jpg" width="300" height="200">
									<div id="myModal05" class="modal">
									  <span class="close">×</span>
										<img class="modal-content" id="img05">
									  <div id="caption"></div>
									</div>
                                  </div>
                                  <div class="span3">		
									<img id="myImg06" src="images/herbalLevel/level6.jpg" width="300" height="200">
									<div id="myModal06" class="modal">
									  <span class="close">×</span>
										<img class="modal-content" id="img06">
									  <div id="caption"></div>
									</div>
                                  </div>
                                  <div class="span3">		
									<img id="myImg07" src="images/herbalLevel/level7.jpg" width="300" height="200">
									<div id="myModal07" class="modal">
									  <span class="close">×</span>
										<img class="modal-content" id="img07">
									  <div id="caption"></div>
									</div>
                                  </div>
                                  <div class="span3">		
									<img id="myImg08" src="images/herbalLevel/level8.jpg" width="300" height="200">
									<div id="myModal08" class="modal">
									  <span class="close">×</span>
										<img class="modal-content" id="img08">
									  <div id="caption"></div>
									</div>
                                  </div>
                                </div>

                                <div class="row-fluid padd-bottom">
                                  <div class="span3">		
									<img id="myImg09" src="images/herbalLevel/level9.jpg" width="300" height="200">
									<div id="myModal09" class="modal">
									  <span class="close">×</span>
										<img class="modal-content" id="img09">
									  <div id="caption"></div>
									</div>
                                  </div>
								  <div class="span3">		
									<img id="myImg10" src="images/herbalLevel/level10.jpg" width="300" height="200">
									<div id="myModal10" class="modal">
									  <span class="close">×</span>
										<img class="modal-content" id="img10">
									  <div id="caption"></div>
								   </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        <script>
		<!-- first events -->
        $(function() {
            //$('.chart').easyPieChart({animate: 1000});
			$("#myModal01").removeClass("modal");
			$("#myModal02").removeClass("modal");
			$("#myModal03").removeClass("modal");
			$("#myModal04").removeClass("modal");
			$("#myModal05").removeClass("modal");
			$("#myModal06").removeClass("modal");
			$("#myModal07").removeClass("modal");
			$("#myModal08").removeClass("modal");
			$("#myModal09").removeClass("modal");
			$("#myModal10").removeClass("modal");
        });
			
		var img01 = document.getElementById('myImg01');
		var img02 = document.getElementById('myImg02');
		var img03 = document.getElementById('myImg03');
		var img04 = document.getElementById('myImg04');
		var img05 = document.getElementById('myImg05');
		var img06 = document.getElementById('myImg06');
		var img07 = document.getElementById('myImg07');
		var img08 = document.getElementById('myImg08');
		var img09 = document.getElementById('myImg09');
		var img010 = document.getElementById('myImg10');
		
		img01.onclick = function(){
			$("#myModal01").addClass("modal");
			var modal = document.getElementById('myModal01');
			var modalImg = document.getElementById("img01");
			modal.style.display = "block";
			modalImg.src = this.src;
			modalImg.alt = this.alt;
			var span = document.getElementsByClassName("close")[0];
			span.onclick = function() {
				modal.style.display = "none";
			}
		}	
		
		img02.onclick = function(){
			$("#myModal02").addClass("modal");
			var modal = document.getElementById('myModal02');
			var modalImg = document.getElementById("img02");
			modal.style.display = "block";
			modalImg.src = this.src;
			modalImg.alt = this.alt;
			var span = document.getElementsByClassName("close")[1];
			span.onclick = function() {
				modal.style.display = "none";
			}
		}
		
		img03.onclick = function(){
			$("#myModal03").addClass("modal");
			var modal = document.getElementById('myModal03');
			var modalImg = document.getElementById("img03");
			modal.style.display = "block";
			modalImg.src = this.src;
			modalImg.alt = this.alt;
			var span = document.getElementsByClassName("close")[2];
			span.onclick = function() {
				modal.style.display = "none";
			}
		}
		
		img04.onclick = function(){
			$("#myModal04").addClass("modal");
			var modal = document.getElementById('myModal04');
			var modalImg = document.getElementById("img04");
			modal.style.display = "block";
			modalImg.src = this.src;
			modalImg.alt = this.alt;
			var span = document.getElementsByClassName("close")[3];
			span.onclick = function() {
				modal.style.display = "none";
			}
		}
		
		img05.onclick = function(){
			$("#myModal05").addClass("modal");
			var modal = document.getElementById('myModal05');
			var modalImg = document.getElementById("img05");
			modal.style.display = "block";
			modalImg.src = this.src;
			modalImg.alt = this.alt;
			var span = document.getElementsByClassName("close")[4];
			span.onclick = function() {
				modal.style.display = "none";
			}
		}
		
		img06.onclick = function(){
			$("#myModal06").addClass("modal");
			var modal = document.getElementById('myModal06');
			var modalImg = document.getElementById("img06");
			modal.style.display = "block";
			modalImg.src = this.src;
			modalImg.alt = this.alt;
			var span = document.getElementsByClassName("close")[5];
			span.onclick = function() {
				modal.style.display = "none";
			}
		}
		
		img07.onclick = function(){
			$("#myModal07").addClass("modal");
			var modal = document.getElementById('myModal07');
			var modalImg = document.getElementById("img07");
			modal.style.display = "block";
			modalImg.src = this.src;
			modalImg.alt = this.alt;
			var span = document.getElementsByClassName("close")[6];
			span.onclick = function() {
				modal.style.display = "none";
			}
		}
		
		img08.onclick = function(){
			$("#myModal08").addClass("modal");
			var modal = document.getElementById('myModal08');
			var modalImg = document.getElementById("img08");
			modal.style.display = "block";
			modalImg.src = this.src;
			modalImg.alt = this.alt;
			var span = document.getElementsByClassName("close")[7];
			span.onclick = function() {
				modal.style.display = "none";
			}
		}
		
		img09.onclick = function(){
			$("#myModal09").addClass("modal");
			var modal = document.getElementById('myModal09');
			var modalImg = document.getElementById("img09");
			modal.style.display = "block";
			modalImg.src = this.src;
			modalImg.alt = this.alt;
			var span = document.getElementsByClassName("close")[8];
			span.onclick = function() {
				modal.style.display = "none";
			}
		}
		
		img010.onclick = function(){
			$("#myModal10").addClass("modal");
			var modal = document.getElementById('myModal10');
			var modalImg = document.getElementById("img10");
			modal.style.display = "block";
			modalImg.src = this.src;
			modalImg.alt = this.alt;
			var span = document.getElementsByClassName("close")[9];
			span.onclick = function() {
				modal.style.display = "none";
			}
		}
		
        </script>
    </body>
</html>