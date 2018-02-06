<?php
include 'database_connection.php';

$sql = mysqli_query($con, 'SELECT *FROM cartdemo');

while ($row = mysqli_fetch_assoc($sql)) {

	echo $row['id'];
	echo '<img src="uploaded_item/' . $row['image'] . '" class="img-responsive" height="200px">';
	echo $row['imgdesc'];
	echo '<a href="delete.php?id=' . $row['id'] . '">Remove Item</a>';
}
?>