<?php

//* Template Name: Notes */

session_start();

if(isset($_POST['username']))
    $_SESSION['username']=$_POST['username'];
if(isset($_POST['password']))
    $_SESSION['password']=$_POST['password'];

$user = $_SESSION['username'];
$password = $_SESSION['password'];

global $wpdb;

$find_pw = $wpdb->get_row("SELECT * FROM users WHERE username = '$user'", ARRAY_A);
$userPw = $find_pw[password];
var_dump($userPw);

$user_notes = $wpdb->get_col("SELECT note FROM notes WHERE user = '$user'");
var_dump($user_notes);
?>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Notes Homepage</title>
</head>
<body>
	<h2>Testing</h2>
	<form action="" method="post" class="login">
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" value="Log In">
	</form>
</body>
</html>