<!DOCTYPE html>
<html>
<head>
<title>Select</title>
<meta name="viewport" content="width=devicewidth, initial-scale=1"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="col-lg-12">
<br><br>
<h1 class="text-warning text-center" > Customer Table</h1> 
<br>
<table id="tabledata" class=" table table-striped table-hover table-bordered" >
<tr class="bg-dark text-white text-center">
<th> Customer Id </th>
<th> Name </th>
<th> Street </th>
<th> City </th>
<th> Pincode </th>
<th> State </th>
<th> Date of Birth </th>
<th> Books Read </th>
<th> Registration Date </th>
<th> Expiry Date </th>
</tr >
<?php
include 'conn.php';
$q = "select * from Customer ";
$query = mysqli_query($con,$q);
while($res = mysqli_fetch_array($query)){
?>
<tr class="text-center">
<td> <?php echo $res['customer_id']; ?> </td>
<td> <?php echo $res['customer_name']; ?> </td>
<td> <?php echo $res['street']; ?> </td>
<td> <?php echo $res['city']; ?> </td>
<td> <?php echo $res['pincode']; ?> </td>
<td> <?php echo $res['state']; ?> </td> 
<td> <?php echo $res['dob']; ?> </td>
<td> <?php echo $res['books_read']; ?> </td>
<td> <?php echo $res['registration_date']; ?> </td>
<td> <?php echo $res['Expiry_Date']; ?> </td>
</tr>
<?php
}
?>
</table>
</div>
</div>
<div class="container">
<div class="col-lg-12">
<br><br>
<h1 class="text-warning text-center" > Branch Table</h1> 
<br>
<table id="tabledata" class=" table table-striped table-hover table-bordered" >
<tr class="bg-dark text-white text-center">
<th> Branch Id </th>
<th> Customer Id </th>
<th> Street </th>
<th> City </th>
<th> Pincode </th>
<th> State </th>
</tr >
<?php
include 'conn.php';
$q = "select * from Branch ";
$query = mysqli_query($con,$q);
while($res = mysqli_fetch_array($query)){
?>
<tr class="text-center">
<td> <?php echo $res['branch_id']; ?> </td>
<td> <?php echo $res['customer_id']; ?> </td>
<td> <?php echo $res['street']; ?> </td>
<td> <?php echo $res['city']; ?> </td>
<td> <?php echo $res['pincode']; ?> </td>
<td> <?php echo $res['state']; ?> </td> 
</tr>
<?php
}
?>
</table>
</div>
</div>
<div class="container">
<div class="col-lg-12">
<br><br>
<h1 class="text-warning text-center" > Books Table</h1> 
<br>
<table id="tabledata" class=" table table-striped table-hover table-bordered" >
<tr class="bg-dark text-white text-center">
<th> ISBN </th>
<th> Category </th>
<th> Title </th>
<th> Status </th>
<th> Author </th>
<th> Issue Date </th>
<th> Return Date </th>
<th> Customer Id </th>
<th> Employee Id </th>
</tr >
<?php
include 'conn.php';
$q = "select * from Books ";
$query = mysqli_query($con,$q);
while($res = mysqli_fetch_array($query)){
?>
<tr class="text-center">
<td> <?php echo $res['isbn']; ?> </td>
<td> <?php echo $res['category']; ?> </td>
<td> <?php echo $res['title']; ?> </td>
<td> <?php echo $res['status']; ?> </td>
<td> <?php echo $res['author']; ?> </td>
<td> <?php echo $res['issue_date']; ?> </td> 
<td> <?php echo $res['return_date']; ?> </td>
<td> <?php echo $res['customer_id']; ?> </td>
<td> <?php echo $res['employee_id']; ?> </td>
</tr>
<?php
}
?>
</table>
</div>
</div><br><br>
<div align="center">
<button class= "btn btn-success" type=button onclick="location.href = 'Home.html';">Go to Home Page</button>
</div>
<script type="text/javascript">
$(document).ready(function(){
$('#tabledata').DataTable();
})
</script>
</body>
</html> 