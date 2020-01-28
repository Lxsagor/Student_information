<?php 
session_start();
$userprofile=$_SESSION['username'];

if($userprofile==true)

{


}

else {
 
 header('location:error.php');

}

?>

<html> 
<head> 
   <title>Final Project </title>
   <style>
        
        
            table{border-collapse:collapse}
            tr,td,th{
                
                border:1px solid black; 
                text-align:left; 
            
            }
            
        
        </style>
   
</head>

<img src="header.png" width="100%" height="30%">
<br>



</html>
<?php
$con=mysqli_connect('localhost','root', '','ums2');
$sql="SELECT * FROM student";
$query=mysqli_query($con,$sql);


?>

<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>

<form name="rer" action="excel.php" method="POST">
<input type="submit" name="btn" class="btn btn-success" value="Export to EXCEL"/> </br> </br>

<table class="table table-border">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">NAME</th>
<th scope="col">AGE</th>
<th scope="col">SEMESTER</th>
<th scope="col">PASSWORD</th>
<th scope="col">EMAIL</th>
<th scope="col">CONTACT NO</th>
<th scope="col">BIRTHDAY</th>
<th scope="col">COUNTRY</th>
<th scope="col">SEX</th>
<th scope="col">IMAGE</th>

</tr>
</thead>
<tbody>
<?php while($result=mysqli_fetch_assoc($query)){?>
<tr>
<td><?php echo $result["ID"] ?></td>
<td><?php echo $result["NAME"] ?></td>
<td><?php echo $result["AGE"] ?></td>
<td><?php echo $result["SEMESTER"] ?></td>
<td><?php echo $result["PASSWORD"] ?></td>
<td><?php echo $result["EMAIL"] ?></td>
<td><?php echo $result["CONTACT"] ?></td>
<td><?php echo $result["BIRTH"] ?></td>
<td><?php echo $result["COUNTRY"] ?></td>
<td><?php echo $result["SEX"] ?></td>
<td><img src="<?php echo $result['IMAGE'] ?>" width="100px" height="100px"> </td>

</tr>
<?php } ?>
</tbody>

</table>
</div>

<a href="home1.php">Back to home page </a>


</body>
</html>
