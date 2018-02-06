<?php
include 'database_connection.php';
$id = $_REQUEST['id'];

$sql = mysqli_query($con, 'DELETE FROM cartdemo WHERE id ="' . $id . '"');

header('Location: displayitem.php');
?>