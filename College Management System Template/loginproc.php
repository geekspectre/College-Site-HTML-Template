<?php

// Inialize session
session_start();

// Include database connection settings
include('connection.php');

// Retrieve username and password from database according to user's input
$login = mysql_query("SELECT * FROM user WHERE (email = '" . mysql_real_escape_string($_POST['email']) . "') and (password = '" . mysql_real_escape_string(md5($_POST['password'])) . "')");

// Check username and password match
if (mysql_num_rows($login) == 1) {
// Set username session variable
$_SESSION['email'] = $_POST['email'];
// Jump to secured page
header('Location: register.php');
}
else {
// Jump to login page
header('Location: homepage.php');
}

?>