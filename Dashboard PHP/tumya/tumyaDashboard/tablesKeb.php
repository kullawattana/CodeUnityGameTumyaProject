<!DOCTYPE html>
<html>
    <head>
        <title>ตารางสรุปการเก็บยา</title>
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
					<img id="scoreResult" src="images/levelPart/kebya.jpg" width="1000">
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
												<th>ID User</th>
												<th>Bottle</th>
												<th>Dainty Spure</th>
												<th>water</th>
												<th>Glycerin</th>
												<th>คะแนนรวม</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `part1_level_1` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['score_item_1'] ?></td>
														<td><?php echo $row['score_item_2'] ?></td>
														<td><?php echo $row['score_item_3'] ?></td>
														<td><?php echo $row['score_item_4'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
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
												<th>ID User</th>
												<th>Bottle</th>
												<th>Water</th>
												<th>Polyethylene glycol 400</th>
												<th>Mangosteen</th>
												<th>คะแนนรวม</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `part1_level_2` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['score_item_1'] ?></td>
														<td><?php echo $row['score_item_2'] ?></td>
														<td><?php echo $row['score_item_3'] ?></td>
														<td><?php echo $row['score_item_4'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
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
												<th>ID User</th>
												<th>Indian Gooseberry</th>
												<th>Malabar Nut</th>
												<th>Glycerin</th>
												<th>Sodium Chloride</th>
												<th>Liquorice</th>
												<th>Alcohol</th>
												<th>Kitchen Mint</th>
												<th>คะแนนรวม</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `part1_level_3` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['score_item_1'] ?></td>
														<td><?php echo $row['score_item_2'] ?></td>
														<td><?php echo $row['score_item_3'] ?></td>
														<td><?php echo $row['score_item_4'] ?></td>
														<td><?php echo $row['score_item_5'] ?></td>
														<td><?php echo $row['score_item_6'] ?></td>
														<td><?php echo $row['score_item_7'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
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
												<th>ID User</th>
												<th>Cinnamon</th>
												<th>Cinnamomum</th>
												<th>Cadamon</th>
												<th>Cloves</th>
												<th>Liquorice</th>
												<th>Kitchen Mint</th>
												<th>Camphor</th>
												<th>คะแนนรวม</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `part1_level_4` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['score_item_1'] ?></td>
														<td><?php echo $row['score_item_2'] ?></td>
														<td><?php echo $row['score_item_3'] ?></td>
														<td><?php echo $row['score_item_4'] ?></td>
														<td><?php echo $row['score_item_5'] ?></td>
														<td><?php echo $row['score_item_6'] ?></td>
														<td><?php echo $row['score_item_7'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
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
												<th>ID User</th>
												<th>Phlai</th>
												<th>Ma-Kham</th>
												<th>Kaffir Lime</th>
												<th>Turmeric</th>
												<th>Lemon Grass</th>
												<th>Som Poi</th>
												<th>Camphor</th>
												<th>Salt Tablets</th>
												<th>คะแนนรวม</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `part1_level_5` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['score_item_1'] ?></td>
														<td><?php echo $row['score_item_2'] ?></td>
														<td><?php echo $row['score_item_3'] ?></td>
														<td><?php echo $row['score_item_4'] ?></td>
														<td><?php echo $row['score_item_5'] ?></td>
														<td><?php echo $row['score_item_6'] ?></td>
														<td><?php echo $row['score_item_7'] ?></td>
														<td><?php echo $row['score_item_8'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
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
												<th>ID User</th>
												<th>Holy Basil</th>
												<th>Kaffir Lime</th>
												<th>Liquorice</th>
												<th>Asafoetida</th>
												<th>Pepper</th>
												<th>Ginger Rhizome</th>
												<th>Long Pepper</th>
												<th>Garlic</th>
												<th>คะแนนรวม</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `part1_level_6` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['score_item_1'] ?></td>
														<td><?php echo $row['score_item_2'] ?></td>
														<td><?php echo $row['score_item_3'] ?></td>
														<td><?php echo $row['score_item_4'] ?></td>
														<td><?php echo $row['score_item_5'] ?></td>
														<td><?php echo $row['score_item_6'] ?></td>
														<td><?php echo $row['score_item_7'] ?></td>
														<td><?php echo $row['score_item_8'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
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
												<th>ID User</th>
												<th>Angelica Dahurica</th>
												<th>Kot-Ke-ma</th>
												<th>Tarenna hoaensis Pitard</th>
												<th>Dracaena lourieri Gagnep</th>
												<th>Gymnopetalum chinensis</th>
												<th>Tinospora crispa (L.)</th>
												<th>คะแนนรวม</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `part1_level_7` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['score_item_1'] ?></td>
														<td><?php echo $row['score_item_2'] ?></td>
														<td><?php echo $row['score_item_3'] ?></td>
														<td><?php echo $row['score_item_4'] ?></td>
														<td><?php echo $row['score_item_5'] ?></td>
														<td><?php echo $row['score_item_6'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
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
												<th>ID User</th>
												<th>Liquorice</th>
												<th>Nutmeg Kan</th>
												<th>cloves</th>
												<th>Ligusticum sinense Oliv.</th>
												<th>Lotus</th>
												<th>Cinnamomum</th>
												<th>Cinnamon</th>
												<th>Kralampak</th>
												<th>Saraphi</th>
												<th>Nutmeg Red</th>
												<th>คะแนนรวม</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `part1_level_8` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['score_item_1'] ?></td>
														<td><?php echo $row['score_item_2'] ?></td>
														<td><?php echo $row['score_item_3'] ?></td>
														<td><?php echo $row['score_item_4'] ?></td>
														<td><?php echo $row['score_item_5'] ?></td>
														<td><?php echo $row['score_item_6'] ?></td>
														<td><?php echo $row['score_item_7'] ?></td>
														<td><?php echo $row['score_item_8'] ?></td>
														<td><?php echo $row['score_item_9'] ?></td>
														<td><?php echo $row['score_item_10'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
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
												<th>ID User</th>
												<th>Nutmeg Red</th>
												<th>Marian Plum</th>
												<th>Lemon</th>
												<th>Sand Ginger</th>
												<th>Ligusticum Sinense</th>
												<th>Nutmeg Kan</th>
												<th>Sappan Tree</th>
												<th>Iron Wood</th>
												<th>Saraphi</th>
												<th>Jasmine</th>
												<th>คะแนนรวม</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `part1_level_9` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['score_item_1'] ?></td>
														<td><?php echo $row['score_item_2'] ?></td>
														<td><?php echo $row['score_item_3'] ?></td>
														<td><?php echo $row['score_item_4'] ?></td>
														<td><?php echo $row['score_item_5'] ?></td>
														<td><?php echo $row['score_item_6'] ?></td>
														<td><?php echo $row['score_item_7'] ?></td>
														<td><?php echo $row['score_item_8'] ?></td>
														<td><?php echo $row['score_item_9'] ?></td>
														<td><?php echo $row['score_item_10'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
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
												<th>ID User</th>
												<th>Indian Gooseberry</th>
												<th>Terminalia Chebula</th>
												<th>Liquorice</th>
												<th>Zedoary</th>
												<th>Ocimum Sanctum</th>
												<th>Ginger Rhizome</th>
												<th>Long Pepper</th>
												<th>WildbetalLeafbush</th>
												<th>Cloves</th>
												<th>Peppermint</th>
												<th>คะแนนรวม</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `part1_level_10` ORDER by `score_result` DESC LIMIT 5";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id_user'] ?></td>
														<td><?php echo $row['score_item_1'] ?></td>
														<td><?php echo $row['score_item_2'] ?></td>
														<td><?php echo $row['score_item_3'] ?></td>
														<td><?php echo $row['score_item_4'] ?></td>
														<td><?php echo $row['score_item_5'] ?></td>
														<td><?php echo $row['score_item_6'] ?></td>
														<td><?php echo $row['score_item_7'] ?></td>
														<td><?php echo $row['score_item_8'] ?></td>
														<td><?php echo $row['score_item_9'] ?></td>
														<td><?php echo $row['score_item_10'] ?></td>
														<td><?php echo $row['score_result'] ?></td>
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