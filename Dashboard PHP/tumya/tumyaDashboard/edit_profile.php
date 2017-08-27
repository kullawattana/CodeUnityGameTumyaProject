<?php
	session_start();
	if($_SESSION['user_id'] == "")
	{
		echo "Please Login!";
		exit();
	}
	
	mysql_connect("localhost","root","");
	mysql_select_db("tumya");
	$strSQL = "SELECT * FROM admin WHERE user_id = '".$_SESSION['user_id']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
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
<body>

<body id="login">
	<div class="container">
		<form class="form-signin" name="form1" method="post" action="save_profile.php">
			<div id='fg_membersite'>
				<img id="profile" src="images/icon/profile.png" align="middle" width="100">
				<h1 class="form-signin-heading">Edit Profile! </h1><br>
					<h2><label for='userId' >UserID</label></h2><br/>
					<input type='text' name="txtUserId" id="txtUserId" value="<?php echo $objResult["user_id"];?>" />
					<br>
					<h2><label for='username' >Username</label></h2><br/>
					<input type='text' name="txtUsername" id="txtUsername" value="<?php echo $objResult["username"];?>" /> 
					<br>
					<h2><label for='password' >Password</label></h2><br/>
					<input type="text" name="txtPassword" id="txtPassword" value="<?php echo $objResult["password"];?>" />
					<br>
					<h2><label for='confirmPassword' >Confirm Password</label></h2><br/>
					<input type="text" name="txtConPassword" id="txtConPassword" value="<?php echo $objResult["confirm_password"];?>" />
					<br>
					<h2><label for='name' >Name</label></h2><br/>
					<input type="text" name="txtName" id="txtName" value="<?php echo $objResult["first_name"];?>" />
					<br>
					<h2><label for='status' >Status</label></h2><br/>
					<input type="text" name="txtStatus" id="txtStatus" value="<?php echo $objResult["status"];?>" />
			  <br>
			</div>
			  <button class="btn btn-large btn-primary" type="submit" name='Submit' value="Save">Save</button>
			  <br><br><br><a href="homepage.php">< Back to Homepage</a>
		</form>
	</div>
</body>

</html>