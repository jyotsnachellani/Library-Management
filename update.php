<?php
include 'conn.php';

$namee = '';
$bookk = '';
$idd = '';
$streett = '';
$isbnn = '';
$titlee = '';
$statuss = '';

if(isset($_POST['updatee'])){
  $namee = $_POST['name'];
  $bookk = $_POST['books_read'];
  $q =  "update Customer set books_read = '$bookk'  where Customer_name = '$namee' ";
    if (!mysqli_query($con, $q)) {
    echo "Error: " . mysqli_error($con);
}
header('location:update.php');
}
if(isset($_POST['updatee1'])){
  $idd = $_POST['id'];
  $streett = $_POST['street'];
  $q =  "update branch set street = '$streett'  where branch_id = '$idd' ";
    if (!mysqli_query($con, $q)) {
    echo "Error: " . mysqli_error($con);
}
header('location:update.php');
}
if(isset($_POST['updatee2'])){
  $isbnn = $_POST['isbn'];
  $titlee = $_POST['title'];
  $statuss = $_POST['status'];
  $q =  "update books set status = '$statuss'  where isbn = '$isbnn' and title = '$titlee' ";
    if (!mysqli_query($con, $q)) {
    echo "Error: " . mysqli_error($con);
}
header('location:update.php');
}
?>
<!DOCTYPE html>
<html> 
<head>
<title>Update</title>
<meta name="viewport" content="width=devicewidth, initial-scale=1"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="col-lg-6 m-auto">
<form method="post">
<br><br><div class="card">
<div class="card-header bg-dark">
<h1 class="text-warning text-center"> Update Books Read by Customer</h1>
</div><br> 
<label> Name: </label>
<input type="text" name="name" class="formcontrol" value=""> <br>
<label> Books Read: </label>
<input type="text" name="books_read" class="formcontrol" value=""> <br>
<button class="btn btn-success" type="submit" name="updatee">Update </button><br>
</div>
</form>
</div>
<br>
<br>
<div class="col-lg-6 m-auto">
<form method="post">
<br><br><div class="card">
<div class="card-header bg-dark">
<h1 class="text-warning text-center"> Update Street of Branch</h1>
</div><br> 
<label> Branch Id: </label>
<input type="text" name="id" class="formcontrol" value=""> <br>
<label> Street: </label>
<input type="text" name="street" class="formcontrol" value=""> <br>
<button class="btn btn-success" type="submit" name="updatee1">Update </button><br>
</div>
</form>
</div>
<div class="col-lg-6 m-auto">
<form method="post">
<br><br><div class="card">
<div class="card-header bg-dark">
<h1 class="text-warning text-center"> Update Status of Book</h1>
</div><br>
<label> ISBN: </label>
<input type="text" name="isbn" class="formcontrol" value=""> <br> 
<label> Title: </label>
<input type="text" name="title" class="formcontrol" value=""> <br>
<label> Status: </label>
<input type="text" name="status" class="formcontrol" value=""> <br>
<button class="btn btn-success" type="submit" name="updatee2">Update </button><br>
</div><br><br>
<div align="center">
	<button class= "btn btn-success" type=button onclick="location.href = 'Home.html';">Go to Home Page</button>
</div>
</form>
</div>
</body>
</html>