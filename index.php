<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>System - Login v1</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<div class="main">

	<div class="con">

		<h2 class="title">login System</h2>
		<div class="inputs">

			<div class="input_card">
				<label>Username :</label>
				<input type="text" placeholder="Your Username ..." id="usr">
			</div>

			<div class="input_card">
				<label>Password:</label>
				<input type="password" placeholder="password *****" id="psw">
			</div>
			<p id="erreur"></p>

			<div class="btnBlock">
				<button onclick="login()">Login</button>
			</div>
			
		</div>
	</div>

</div>


</body>
</html>
<script type="text/javascript" src="assets/js/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>