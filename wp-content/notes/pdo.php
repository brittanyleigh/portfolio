<?php


global $wpdb;

$find_pw = $wpdb->get_row("SELECT * FROM users WHERE username = '$user'", ARRAY_A);
$userPw = $find_pw[password];
var_dump($userPw);

$user_notes = $wpdb->get_col("SELECT note FROM notes WHERE user = '$user'");
var_dump($user_notes);


/*<?php

try {
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=notes', 'root', '');
} catch (PDOException $e) {
	die('Could not connect!');
}

$find_pw = $pdo->prepare("SELECT * FROM users WHERE username = '$user'");
$find_pw->execute();
$find_pw_result = $find_pw->fetch(PDO::FETCH_ASSOC);
$userPw = $find_pw_result[password];
//finders submitted username info in user database & returns their password

$find_notes = $pdo->prepare("SELECT note FROM notes WHERE user = '$user'");
$find_notes->execute();
$user_notes = $find_notes->fetchAll(PDO::FETCH_ASSOC);
//returns all user's notes from notes table$user_notes = $find_notes;
