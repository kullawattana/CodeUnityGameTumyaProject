<?php
    $database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
    mysql_select_db('tumya') or die('Could not select database');
    $sql = "SELECT * FROM `user_login`";
    $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
    $num_rows = mysql_num_rows($result);  
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ตารางข้อมูลผู้ใช้งาน</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
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
						<img id="scoreResult" src="images/levelPart/admin.jpg" width="1000">
				</div>
                <div class="span12" id="content">
                     <div class="row-fluid">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Admin</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>ID</th>
												<th>Firstname</th>
												<th>Lastname</th>
												<th>Username</th>
												<th>Address</th>
												<th>Email</th>
												<th>Telephone</th>
											</tr>
										</thead>
										<tbody>
										<?php            
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id'] ?></td>
														<td><?php echo $row['first_name'] ?></td>
														<td><?php echo $row['last_name'] ?></td>
														<td><?php echo $row['username'] ?></td>
														<td><?php echo $row['address'] ?></td>
														<td><?php echo $row['email'] ?></td>
														<td><?php echo $row['telephone'] ?></td>
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
                     <div class="row-fluid">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Gaming Users</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="angular-crud-master/index.html"><button class="btn btn-success">Add New <i class="icon-plus icon-white"></i></button></a>
                                      </div>
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                       <thead>
											<tr>
												<th>ID</th>
												<th>Firstname</th>
												<th>Lastname</th>
												<th>Username</th>
												<th>Address</th>
												<th>Email</th>
												<th>Telephone</th>
											</tr>
										</thead>
										<tbody>
											<?php    
											$database = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
											mysql_select_db('tumya') or die('Could not select database');
											$sql = "SELECT * FROM `user_login`";
											$result = mysql_query($sql) or die('Query failed: ' . mysql_error());										
											while($row = mysql_fetch_array($result))
												{   
												  ?>
													<tr valign="middle">
														<td><?php echo $row['id'] ?></td>
														<td><?php echo $row['first_name'] ?></td>
														<td><?php echo $row['last_name'] ?></td>
														<td><?php echo $row['username'] ?></td>
														<td><?php echo $row['address'] ?></td>
														<td><?php echo $row['email'] ?></td>
														<td><?php echo $row['telephone'] ?></td>
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