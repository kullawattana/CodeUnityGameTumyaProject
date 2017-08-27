<html>
<head>
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

<?php
	session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("tumya");
	$strSQL = "SELECT * FROM admin WHERE username = '".mysql_real_escape_string($_POST['txtUsername'])."' and password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult) { ?>	
	<body id="login">
		<div class="container">
			<form class="form-signin">
				<div id='fg_membersite'>
					<img id="noAccount" src="images/icon/no-account.png" align="middle" width="100">
					<h1 class="form-signin-heading">sign in</h1><br>
						<h2><label for='username' ><?php echo "Username and Password Incorrect!" ?></label></h2><br/>
						<h2><label for='backToHomepage' ><?php echo "<br> Go to <a href='index.php'>Login Page</a>"; ?></label></h2><br/>
					</h1>
				</div>
			</form>
		</div>
	</body>
	<?php
	}
	else {
		$_SESSION["user_id"] = $objResult["user_id"];
		$_SESSION["status"] = $objResult["status"];
		session_write_close();
		if($objResult["status"] == "ADMIN") {
			header("location:homepage.php");
		} else {
			header("location:index.php");
		}
	}
	mysql_close();
?>
</html>