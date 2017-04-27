<?php


global $wpdb;
$find_pw = $wpdb->get_row("SELECT * FROM users WHERE username = '$user'");
$userPw = $find_pw[password];
echo $userPw;


//$find_notes = $wpdb->get_col("SELECT note FROM notes WHERE user = '$user'");
//$user_notes = $find_notes;

echo 'Test';
