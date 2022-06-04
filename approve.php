<?php
//including the database connection file
include("process/dbh.php");


$id = $_GET['id'];
$token = $_GET['token'];


$result = mysqli_query($conn, "UPDATE `employee_leave` SET `status`='Approved' WHERE id = $id AND token = $token;");


header("Location:empleave.php");
?>

