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
<body id="login">
	<div class="container">
		<form class="form-signin" name="form1" method="post" action="check_login.php">
			<div id='fg_membersite'>
				<img id="scoreResult" src="images/icon/account.png" align="middle" width="100">
				<h1 class="form-signin-heading">sign in</h1><br>
					<h2><label for='username' >Username*</label></h2><br/>
					<input type='text' name="txtUsername" id="txtUsername" placeholder="Username" />
					
					<h2><label for='username' >Password*</label></h2><br/>
					<input type="password" name="txtPassword" id="txtPassword" placeholder="Password" />
			  <br><br>
			  <button class="btn btn-large btn-primary" type="submit" name='Submit' value='Login'>Sign in</button>
			</div>
		</form>
	</div>
</body>
</html>