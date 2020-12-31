<?php 
include 'conn.php';
$branch_id = $_GET['branch_id'];
$q1 = " DELETE FROM branch WHERE branch_id ='".$branch_id."'";
mysqli_query($con, $q1);
header('location:delete.php');
?>