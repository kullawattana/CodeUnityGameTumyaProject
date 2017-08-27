<!DOCTYPE html>
<html>
    <head>
        <title>ตารางสรุปคะแนนรวมทั้ง 3 ภารกิจ</title>
		<meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i>Admin<i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
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
						<li>
                            <a href="tablesScore.php"><i class="icon-chevron-right"></i> Tables Score Result</a>
                        </li>
                    </ul>
                </div>
				<div class="span9" id="content">
					<img id="scoreResult" src="images/levelPart/scoreResult.jpg" width="1000">
				</div>
                <div class="span12" id="content">
                     <div class="row-fluid">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Level 1 ยาทิงเจอร์ทองพันชั่ง</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>ID</th>
												<th>ID User</th>
												<th>Username</th>
												<th>Score Result</th>
												<th>คะแนนเก็บยา</th>
												<th>คะแนนสับยา</th>
												<th>คะแนนตำยา</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `hall_of_frame_part_1` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id'] ?></td>
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['username'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
														<td><?php echo $row['score_p1_l1'] ?></td>
														<td><?php echo $row['score_p2_l1'] ?></td>
														<td><?php echo $row['score_p3_l1'] ?></td>
													</tr>
												 <?php
												}
											?>   
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="span12" id="content">
                     <div class="row-fluid">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Level 2 ยาเปลือกมังคุด</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>ID</th>
												<th>ID User</th>
												<th>Username</th>
												<th>Score Result</th>
												<th>คะแนนเก็บยา</th>
												<th>คะแนนสับยา</th>
												<th>คะแนนตำยา</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `hall_of_frame_part_2` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id'] ?></td>
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['username'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
														<td><?php echo $row['score_p1_l2'] ?></td>
														<td><?php echo $row['score_p2_l2'] ?></td>
														<td><?php echo $row['score_p3_l2'] ?></td>
													</tr>
												 <?php
												}
											?>   
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				<div class="span12" id="content">
                     <div class="row-fluid">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Level 3 ยาแก้ไอผสมมะขามป้อม</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>ID</th>
												<th>ID User</th>
												<th>Username</th>
												<th>Score Result</th>
												<th>คะแนนเก็บยา</th>
												<th>คะแนนสับยา</th>
												<th>คะแนนตำยา</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `hall_of_frame_part_3` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id'] ?></td>
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['username'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
														<td><?php echo $row['score_p1_l3'] ?></td>
														<td><?php echo $row['score_p2_l3'] ?></td>
														<td><?php echo $row['score_p3_l3'] ?></td>
													</tr>
												 <?php
												}
											?>   
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="span12" id="content">
                     <div class="row-fluid">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Level 4 ยาธาตุอบเชย</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>ID</th>
												<th>ID User</th>
												<th>Username</th>
												<th>Score Result</th>
												<th>คะแนนเก็บยา</th>
												<th>คะแนนสับยา</th>
												<th>คะแนนตำยา</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `hall_of_frame_part_4` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id'] ?></td>
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['username'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
														<td><?php echo $row['score_p1_l4'] ?></td>
														<td><?php echo $row['score_p2_l4'] ?></td>
														<td><?php echo $row['score_p3_l4'] ?></td>
													</tr>
												 <?php
												}
											?>   
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="span12" id="content">
                     <div class="row-fluid">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Level 5 ยาลูกประคบ</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>ID</th>
												<th>ID User</th>
												<th>Username</th>
												<th>Score Result</th>
												<th>คะแนนเก็บยา</th>
												<th>คะแนนสับยา</th>
												<th>คะแนนตำยา</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `hall_of_frame_part_5` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id'] ?></td>
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['username'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
														<td><?php echo $row['score_p1_l5'] ?></td>
														<td><?php echo $row['score_p2_l5'] ?></td>
														<td><?php echo $row['score_p3_l5'] ?></td>
													</tr>
												 <?php
												}
											?>   
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="span12" id="content">
                     <div class="row-fluid">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Level 6 ยาประสะกะเพรา</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>ID</th>
												<th>ID User</th>
												<th>Username</th>
												<th>Score Result</th>
												<th>คะแนนเก็บยา</th>
												<th>คะแนนสับยา</th>
												<th>คะแนนตำยา</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `hall_of_frame_part_6` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id'] ?></td>
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['username'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
														<td><?php echo $row['score_p1_l6'] ?></td>
														<td><?php echo $row['score_p2_l6'] ?></td>
														<td><?php echo $row['score_p3_l6'] ?></td>
													</tr>
												 <?php
												}
											?>   
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="span12" id="content">
                     <div class="row-fluid">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Level 7 ยาจันทน์ลีลา</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>ID</th>
												<th>ID User</th>
												<th>Username</th>
												<th>Score Result</th>
												<th>คะแนนเก็บยา</th>
												<th>คะแนนสับยา</th>
												<th>คะแนนตำยา</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `hall_of_frame_part_7` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id'] ?></td>
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['username'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
														<td><?php echo $row['score_p1_l7'] ?></td>
														<td><?php echo $row['score_p2_l7'] ?></td>
														<td><?php echo $row['score_p3_l7'] ?></td>
													</tr>
												 <?php
												}
											?>   
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="span12" id="content">
                     <div class="row-fluid">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Level 8 ยาหอมแก้ลมวิงเวียน</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>ID</th>
												<th>ID User</th>
												<th>Username</th>
												<th>Score Result</th>
												<th>คะแนนเก็บยา</th>
												<th>คะแนนสับยา</th>
												<th>คะแนนตำยา</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `hall_of_frame_part_8` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id'] ?></td>
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['username'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
														<td><?php echo $row['score_p1_l8'] ?></td>
														<td><?php echo $row['score_p2_l8'] ?></td>
														<td><?php echo $row['score_p3_l8'] ?></td>
													</tr>
												 <?php
												}
											?>   
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="span12" id="content">
                     <div class="row-fluid">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Level 9 ยาประสะจันทน์แดง</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>ID</th>
												<th>ID User</th>
												<th>Username</th>
												<th>Score Result</th>
												<th>คะแนนเก็บยา</th>
												<th>คะแนนสับยา</th>
												<th>คะแนนตำยา</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `hall_of_frame_part_9` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id'] ?></td>
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['username'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
														<td><?php echo $row['score_p1_l9'] ?></td>
														<td><?php echo $row['score_p2_l9'] ?></td>
														<td><?php echo $row['score_p3_l9'] ?></td>
													</tr>
												 <?php
												}
											?>   
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="span12" id="content">
                     <div class="row-fluid">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Level 10 ยาแก้ไอพื้นบ้านอีสาน</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>ID</th>
												<th>ID User</th>
												<th>Username</th>
												<th>Score Result</th>
												<th>คะแนนเก็บยา</th>
												<th>คะแนนสับยา</th>
												<th>คะแนนตำยา</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `hall_of_frame_part_10` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id'] ?></td>
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['username'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
														<td><?php echo $row['score_p1_l10'] ?></td>
														<td><?php echo $row['score_p2_l10'] ?></td>
														<td><?php echo $row['score_p3_l10'] ?></td>
													</tr>
												 <?php
												}
											?>   
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script>
        </script>
    </body>
</html>