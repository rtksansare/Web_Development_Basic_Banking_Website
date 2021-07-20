<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View All Customers</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/table.css">

<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="css/navbar.css?v=<?php echo time(); ?>">

<style type="text/css">
button{
transition: 1.5s;
}
button:hover{
background-color:#black;
color: red;
}

.section8 h2{
    color: black;
 font-size: 45px;
 line-height: 80px;
 padding: 0 1px;
 position: relative;
 top:10vh;
 font-weight: bold;
 letter-spacing: 3px;
 text-shadow: 1px 1px 4px white;
 text-align: center;
  text-transform: uppercase;
  
}


</style>
</head>

<body style="background-color : #CCCCCC ;">
<?php
include 'config.php';
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
?>

<?php
include 'nav.php';
?>
<div class="section8" id="section8">
<h2>Customer Details</h2>
</div>


<div class="container">
<h2 class="text-center pt-4" style="color: #CCCCCC; ">List of Users</h2>
<br>
<div class="row">
<div class="col">
<div class="table-responsive-sm">
<table class="table table-hover table-dark table-striped">
<thead>
<tr>
<th scope="col" class="text-center py-2">Id</th>
<th scope="col" class="text-center py-2">Name</th>
<th scope="col" class="text-center py-2">Operation</th>
</tr>
</thead>
<tbody>
<?php 
while($rows=mysqli_fetch_assoc($result))
{
?>
<tr>
<td class="py-2"><?php echo $rows['id'] ?></td>
<td class="py-2"><?php echo $rows['name']?></td>
<td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn mt-1 mb-0">View Details</button></a></td> 
</tr>
<?php
}
?>

</tbody>
</table>
</div>
</div>
</div> 
</div>
<?php
  include 'footer.php';
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>