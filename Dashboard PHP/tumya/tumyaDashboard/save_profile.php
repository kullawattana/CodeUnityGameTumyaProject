<?php
	mysql_connect("localhost","root","");
	mysql_select_db("tumya");
			
	session_start();
	if($_SESSION['user_id'] == ""){
		echo "Please Login!";
		exit();
	}	
	if($_POST["txtPassword"] != $_POST["txtConPassword"]){
		echo "Password not Match!";
		exit();
	}
	
	if($_POST["txtPassword"] == $_POST["txtConPassword"]){
		$strSQL = "UPDATE admin SET password = '".trim($_POST['txtPassword'])."' WHERE user_id = '".$_SESSION["user_id"]."' ";
		$objQuery = mysql_query($strSQL);
		if($_SESSION["status"] == "ADMIN"){
?>

<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Admin Login</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
    <link href="assets/styles.css" rel="stylesheet" media="screen">
	<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
	<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body id="login">
	<div class="container">
		<form class="form-signin">
			<div id='fg_membersite'>
				<img id="success" src="images/icon/success.png" align="middle" width="100">
				<h2 class="form-signin-heading">Update Profile is Successfully...</h2><br>
					<h2><label for='backToHomepage' ><?php echo "<br> Go to <a href='homepage.php'>Admin page</a>"; ?></label></h2><br/>
				</h1>
			</div>
		</form>
	</div>
</body>
<?php
		}	
	}
	mysql_close();
?>