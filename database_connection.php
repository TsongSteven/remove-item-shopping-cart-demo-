<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "cart";
$con = mysqli_connect($host, $user, $pass, $db);
mysqli_select_db($con, $db);