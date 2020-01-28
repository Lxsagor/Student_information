<?php 

session_start();
$userprofile=$_SESSION['username'];

$con=mysqli_connect('localhost','root','','ums2');
$ID=$_POST['sid'];
$NAME=$_POST['sn'];
$AGE=$_POST['sa'];
$SEMESTER=$_POST['se'];
$PASSWORD=$_POST['sp'];
$EMAIL=$_POST['sem'];
$CONTACT=$_POST['sc'];
$BIRTH=$_POST['bday'];
$COUNTRY=$_POST['country'];
$SEX=$_POST['radio'];


$FILENAME=$_FILES["fileToUpload"]["name"];
$TEMPNAME=$_FILES["fileToUpload"]["tmp_name"];
$folder="uploads/".$FILENAME;
move_uploaded_file($TEMPNAME,$folder);

if($ID=="" || $NAME=="" || $AGE=="" || $SEMESTER=="" || $PASSWORD=="" || $EMAIL=="" || $CONTACT=="") {
echo "please input the value";
}
else {
$sql="insert into student (ID,NAME,AGE,SEMESTER,PASSWORD,EMAIL,CONTACT,BIRTH,COUNTRY,SEX,IMAGE)
values ('$ID','$NAME',$AGE,'$SEMESTER','$PASSWORD','$EMAIL','$CONTACT','$BIRTH','$COUNTRY','$SEX','$folder')";
mysqli_query($con,$sql);

if($userprofile==true)

{
header('location:home1.php');

}

else {
 
 header('location:home.php');

}

} 
?>


