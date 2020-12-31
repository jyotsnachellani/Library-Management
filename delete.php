
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=devicewidth, initial-scale=1"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="col-lg-12">
<br><br>
<h1 class="text-warning text-center" > Delete from Customer Table </h1> 
<br>
<table id="tabledata" class=" table table-striped table- hover table-bordered">
<tr class="bg-dark text-white text-center">
<th> Name </th>
<th> Delete </th>
</tr >
<?php
include 'conn.php';
$q = "select customer_name from Customer ";
$query = mysqli_query($con,$q);
while($res = mysqli_fetch_array($query)){
?>
<tr class="text-center">
<td> <?php echo $res['customer_name']; ?> </td>
<td>
<button class="btn-danger btn"> <a href="delete1.php?customer_name=<?php echo $res['customer_name']; ?>" class="text-white"> Delete</a> </button> </td>
</tr>
<?php
}
?>
</table>
</div>
</div>
<br>
<br>
<div class="container">
<div class="col-lg-12">
<br><br>
<h1 class="text-warning text-center" > Delete from Branch Table </h1> 
<br>
<table id="tabledata" class=" table table-striped table- hover table-bordered">
<tr class="bg-dark text-white text-center">
<th> Branch Id </th>
<th> City </th>
<th> Delete </th>
</tr >
<?php
include 'conn.php';
$q = "select branch_id,city from branch ";
$query = mysqli_query($con,$q);
while($res = mysqli_fetch_array($query)){
?>
<tr class="text-center">
<td> <?php echo $res['branch_id']; ?> </td>
<td> <?php echo $res['city']; ?> </td>
<td>
<button class="btn-danger btn"> <a href="delete2.php?branch_id=<?php echo $res['branch_id']; ?>" class="text-white"> Delete</a> </button> </td>
</tr>
<?php
}
?>
</table>
</div>
</div>
<br>
<br>
<div class="container">
<div class="col-lg-12">
<br><br>
<h1 class="text-warning text-center" > Delete from Books Table </h1> 
<br>
<table id="tabledata" class=" table table-striped table- hover table-bordered">
<tr class="bg-dark text-white text-center">
<th> ISBN </th>
<th> Title </th>
<th> Delete </th>
</tr >
<?php
include 'conn.php';
$q = "select isbn,title from books";
$query = mysqli_query($con,$q);
while($res = mysqli_fetch_array($query)){
?>
<tr class="text-center">
<td> <?php echo $res['isbn']; ?> </td>
<td> <?php echo $res['title']; ?> </td>
<td>
<button class="btn-danger btn"> <a href="delete3.php?isbn=<?php echo $res['isbn']; ?>" class="text-white"> Delete</a> </button> </td>
</tr>
<?php
}
?>
</table>
</div>
</div>
<br><br>
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