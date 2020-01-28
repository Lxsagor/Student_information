<?php
$host_name="localhost";
$username="root";
$password="";
$database_name="ums2";
$connect=mysqli_connect($host_name,$username,$password,$database_name);
$ID=$_GET['id'];
$sql="SELECT * FROM student WHERE ID=$ID";
$query=mysqli_query($connect,$sql);
$result=mysqli_fetch_assoc($query);
//update
if (isset($_POST['btn'])){
$uID=$_POST['sid'];
$uNAME=$_POST['sn'];
$uAGE=$_POST['sa'];
$uSEMESTER=$_POST['se'];
$uPASSWORD=$_POST['sp'];
$uEMAIL=$_POST['sem'];
$uCONTACT=$_POST['sp'];
$sqlupdate="UPDATE student SET ID='$uID',NAME='$uNAME',AGE='$uAGE',SEMESTER='$uSEMESTER',
PASSWORD='$uPASSWORD',Email='$uEMAIL',CONTACT='$uCONTACT' WHERE 
ID='$ID'";
$query=mysqli_query($connect,$sqlupdate);
if ($query) {
 echo "<h1>Update successfully</h1>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Info Update Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<body>
<div class="container">
<form action="" method="post">
<h1>Book Info Update Form</h1>
<hr>
<table>
	<tr>
		<td><label for="id"><b>STUDENT ID</b></label></td>
		<td><input type="text" name="sid" value="<?php echo $result["ID"]?>" required></td>
	</tr>
	<tr>
		<td><label for="name"><b>STUDENT NAME</b></label></td>
		<td><input type="text" name="sn" value="<?php echo $result["NAME"]?>" required></td>
	</tr>
	<tr>
		<td><label for="age"><b>AGE</b></label></td>
		<td><input type="text" name="sa" value="<?php echo $result["AGE"]?>" required></td>
	</tr>
	<tr>
		<td><label for="semester"><b>SEMESTER</b></label></td>
		<td><input type="text" name="se" value="<?php echo $result["SEMESTER"]?>" required></td>
	</tr>
	<tr>
		<td><label for="password"><b>PASSWORD</b></label></td>
		<td><input type="text" name="sp" value="<?php echo $result["PASSWORD"]?>" required></td>
	</tr>
        <tr>
		<td><label for="email"><b>EMAIL</b></label></td>
		<td><input type="text" name="sem" value="<?php echo $result["EMAIL"]?>" required></td>

	</tr>

       <tr>
		<td><label for="contact"><b>CONTACT NO</b></label></td>
		<td><input type="text" name="sc" value="<?php echo $result["CONTACT"]?>" required></td>
	</tr>
</table>
<hr>
<input type="submit" name="btn" value="Update Info"> <br> <br>
<a href="home1.php">Back to home page </a>
</div>
</form>
</div>
</body>

</html>
