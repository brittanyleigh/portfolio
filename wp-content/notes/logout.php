<?php
session_start();
session_destroy();
$_SESSION = array();

include 'page-notes.php';