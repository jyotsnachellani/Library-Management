<?php
include 'conn.php';
if(isset($_POST['done'])){
$customer_name = $_POST['name'];
$street = $_POST['street'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];
$dob = $_POST['dob'];
$books_read = $_POST['books_read'];
$registration_date = $_POST['registration_date'];
$Expiry_Date = $_POST['Expiry_Date'];
$q = " INSERT INTO customer(customer_name,street,city,pincode,state,dob,books_read,registration_date,Expiry_Date) VALUES('$customer_name', '$street','$city','$pincode','$state',DATE'$dob','$books_read',DATE'$registration_date',DATE'$Expiry_Date')";
//$query = mysqli_query($con,$q);
if (!mysqli_query($con, $q)) {
    echo "Error: " . mysqli_error($con);
}
}
if(isset($_POST['done1'])){
$customer_id = $_POST['customer_id'];
$street = $_POST['street'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];
$q = " INSERT INTO branch(customer_id,street,city,pincode,state) VALUES('$customer_id', '$street','$city','$pincode','$state')";
//$query = mysqli_query($con,$q);
if (!mysqli_query($con, $q)) {
    echo "Error: " . mysqli_error($con);
}
}
if(isset($_POST['done2'])){
$isbn = $_POST['isbn'];
$category = $_POST['category'];
$title = $_POST['title'];
$status = $_POST['status'];
$author = $_POST['author'];
$issue_date = $_POST['issue_date'];
$return_date = $_POST['return_date'];
$customer_id = $_POST['customer_id'];
$employee_id = $_POST['employee_id'];
$q = " INSERT INTO books(isbn,category,title,status,author,issue_date,return_date,customer_id,employee_id) VALUES('$isbn', '$category','$title','$status','$author',DATE'$issue_date',DATE'$return_date','$customer_id','$employee_id ')";
//$query = mysqli_query($con,$q);
if (!mysqli_query($con, $q)) {
    echo "Error: " . mysqli_error($con);
}
}
?>
<!DOCTYPE html>
<html> 
<head>
<title>Insert</title>
<meta name="viewport" content="width=devicewidth, initial-scale=1"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="col-lg-6 m-auto">
<form method="post">
<br><br><div class="card">
<div class="card-header bg-dark">
<h1 class="text-warning text-center"> Insert Into Customer Table</h1>
</div><br> 
<label> Name: </label>
<input type="text" name="name" class="formcontrol"> <br>
<label> Street: </label>
<input type="text" name="street" class="formcontrol"> <br>
<label> City: </label>
<input type="text" name="city" class="formcontrol"> <br>
<label> Pincode: </label>
<input type="text" name="pincode" class="formcontrol"> <br>
<label> State: </label>
<input type="text" name="state" class="formcontrol"> <br>
<label> Date of Birth: </label>
<input type="text" name="dob" class="formcontrol"> <br>
<label> Books Read: </label>
<input type="text" name="books_read" class="formcontrol"> <br>
<label> Registration Date: </label>
<input type="text" name="registration_date" class="formcontrol"> <br>
<label> Expiry Date: </label>
<input type="text" name="Expiry_Date" class="formcontrol"> <br>
<button class="btn btn-success" type="submit" name="done"> Insert </button><br>
</div>
</form>
</div><br><br>
<div class="col-lg-6 m-auto">
<form method="post">
<br><br><div class="card">
<div class="card-header bg-dark">
<h1 class="text-warning text-center"> Insert Into Branch Table</h1>
</div><br> 
<label> Customer Id: </label>
<input type="text" name="customer_id" class="formcontrol"> <br>
<label> Street: </label>
<input type="text" name="street" class="formcontrol"> <br>
<label> City: </label>
<input type="text" name="city" class="formcontrol"> <br>
<label> Pincode: </label>
<input type="text" name="pincode" class="formcontrol"> <br>
<label> State: </label>
<input type="text" name="state" class="formcontrol"> <br>
<button class="btn btn-success" type="submit" name="done1"> Insert </button><br>
</div>
</form>
</div><br><br>
<div class="col-lg-6 m-auto">
<form method="post">
<br><br><div class="card">
<div class="card-header bg-dark">
<h1 class="text-warning text-center"> Insert Into Books Table</h1>
</div><br> 
<label> ISBN: </label>
<input type="text" name="isbn" class="formcontrol"> <br>
<label> Category: </label>
<input type="text" name="category" class="formcontrol"> <br>
<label> Title: </label>
<input type="text" name="title" class="formcontrol"> <br>
<label> Status: </label>
<input type="text" name="status" class="formcontrol"> <br>
<label> Author: </label>
<input type="text" name="author" class="formcontrol"> <br>
<label> Issue Date: </label>
<input type="text" name="issue_date" class="formcontrol"> <br>
<label> Return Date: </label>
<input type="text" name="return_date" class="formcontrol"> <br>
<label> Customer Id: </label>
<input type="text" name="customer_id" class="formcontrol"> <br>
<label> Employee Id: </label>
<input type="text" name="employee_id" class="formcontrol"> <br>
<button class="btn btn-success" type="submit" name="done2"> Insert </button><br>

</div>
</form>
</div>
<br>
<br>
<div align="center">
<button class= "btn btn-success" type=button onclick="location.href = 'Home.html';" >Go to Home Page</button>
</div>
</body>
</html>