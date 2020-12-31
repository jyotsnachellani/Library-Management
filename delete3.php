<?php 
include 'conn.php';
$isbn = $_GET['isbn'];
$q1 = " DELETE FROM books WHERE isbn ='".$isbn."'";
mysqli_query($con, $q1);
header('location:delete.php');
?>