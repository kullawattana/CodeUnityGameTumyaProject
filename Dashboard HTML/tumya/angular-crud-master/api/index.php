<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/users', 'getUsers');
$app->get('/users/:id', 'getUser');
$app->post('/users', 'addUser');
$app->put('/users/:id', 'updateUser');
$app->delete('/users/:id', 'deleteUser');
$app->run();

//getUserAll
function getUsers() {
	$sql = "select * FROM user_login ORDER BY id";
	try {
		
		//Get Connection
		$db = getConnection();
		
		//SQL Query Statement
		$stmt = $db->query($sql); 

		//Fetch Data
		$wines = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		//DB
		$db = null;
		
		//JSON Encode 
		echo json_encode($wines);
		
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

//getUserById
function getUser($id) {
	$sql = "select * FROM user_login WHERE id=".$id." ORDER BY id";
	try {
		//Get Connection
		$db = getConnection();
		
		//SQL Query Statement
		$stmt = $db->query($sql);  
		
		//Fetch Data
		$wines = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		//DB
		$db = null;
		
		//JSON Encode 
		echo json_encode($wines);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

//AddUser
function addUser() {
	echo "add";
	$request = Slim::getInstance()->request();
	$user = json_decode($request->getBody());
	$sql = "INSERT INTO user_login (firstname, lastname, username, address, email, telephone) VALUES (:firstname, :lastname, :username, :address, :email, :telephone)";
	try {
		//Get Connection
		$db = getConnection();
		
		//SQL Query Statement
		$stmt = $db->prepare($sql);  		
		$stmt->bindParam("firstname", $user->first_name);
		$stmt->bindParam("lastname", $user->last_name);
		$stmt->bindParam("username", $user->username);
		$stmt->bindParam("address", $user->address);
		$stmt->bindParam("email", $user->last_name);
		$stmt->bindParam("telephone", $user->last_name);
		$stmt->execute();
		
		$user->id = $db->lastInsertId();
		
		//DB
		$db = null;
		
		//JSON Encode
		echo json_encode($user); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

//UpdateUser
function updateUser($id) {
	$request = Slim::getInstance()->request();
	$user = json_decode($request->getBody());
	$sql = "UPDATE user_login SET id=:id, firstname=:first_name, lastname=:last_name, username=:username, address=:address, email=:email, telephone=:telephone";
	try {
		//Get Connection
		$db = getConnection();
		
		//SQL Query Statement
		$stmt = $db->prepare($sql); 
		$stmt->bindParam("id", $id);		
		$stmt->bindParam("firstname", $user->first_name);
		$stmt->bindParam("lastname", $user->last_name);
		$stmt->bindParam("username", $user->username);
		$stmt->bindParam("address", $user->address);
		$stmt->bindParam("email", $user->last_name);
		$stmt->bindParam("telephone", $user->last_name);
		$stmt->execute();
		
		//DB
		$db = null;
		
		//JSON Encode
		echo json_encode($user); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

//DeleteUser
function deleteUser($id) {
	$sql = "DELETE FROM user_login WHERE id=".$id;
	try {
		//Get Connection
		$db = getConnection();
		
		//SQL Query Statement
		$stmt = $db->query($sql);

		//Fetch Data
		$wines = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		//DB
		$db = null;
		
		//JSON Encode
		echo json_encode($wines);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

//getConnection
function getConnection() {
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="tumya";
	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbh;
}

?>