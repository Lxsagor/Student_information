<?php 

session_start();

$con=mysqli_connect('localhost','root','','ums2');

if(isset($_POST['ss'])){

$username = $_POST['sb'];
$password = $_POST['sn'];
$query = "SELECT * FROM student WHERE NAME='$username' and PASSWORD='$password'";
 
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);
if ($count == 1){

$_SESSION['username']=$username;
header('location:home1.php');

}else{
header('location:home.php');

}
}
?>
