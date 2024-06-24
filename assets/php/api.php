<?php

function db()
{
	$localhost = "localhost";
	$mysql_user = "root";
	$mysql_password = "";
	$mysql_db = "loginSystem";

	$con = mysqli_connect($localhost,$mysql_user,$mysql_password,$mysql_db);
	return $con;
}

if (isset($_POST["login"])) {
	$usr = htmlspecialchars($_POST["usr"]);
	$psw = htmlspecialchars($_POST["psw"]);

	$req = "SELECT * FROM users WHERE username='$usr' AND password='$psw'";
	$req = mysqli_query(db(),$req);
	$req = mysqli_num_rows($req);
	
	if($req == 1){

	}else{
		die("000");
	}
}

?>
