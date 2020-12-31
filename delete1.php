<?php 
include 'conn.php';
$customer_name = $_GET['customer_name'];
$q1 = " DELETE FROM customer WHERE customer_name ='".$customer_name."'";
mysqli_query($con, $q1);
header('location:delete.php');
?> 