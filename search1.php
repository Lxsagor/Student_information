<?php 
session_start();
$userprofile=$_SESSION['username'];

if($userprofile==true)

{


}

else {
 
 header('location:error.php');

}

?><html>
<head>
  <style>
        
        
            table{border-collapse:collapse}
            tr,td,th{
                
                border:1px solid black; 
                text-align:left; 
            
            }
            
        
        </style

 </head>

<body>
  <form action="" method="post">
  Search student information:

          
            <input type="text" name="ID" placeholder="Give student ID"> <br>
         
           
            <input type="submit" name="search" value="Search data"> <br> <br>
            <a href="home1.php">Back to home page </a>
        </form>


<?php
$host_name="localhost";
$username="root";
$password="";
$database_name="ums2";
$connect=mysqli_connect($host_name,$username,$password,$database_name);

if(isset($_POST['search']))
{
  $ID=$_POST['ID'];

  $sql="SELECT * FROM student WHERE ID='$ID'";
  $query=mysqli_query($connect,$sql);
 
   while ($row=mysqli_fetch_array($query))

 {
   ?>

  <table class="table table-border" width="100%">
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

<tr>
<td><?php echo $row["ID"] ?></td>
<td><?php echo  $row["NAME"] ?></td>
<td><?php echo  $row["AGE"] ?></td>
<td><?php echo  $row["SEMESTER"] ?></td>
<td><?php echo $row["PASSWORD"] ?></td>
<td><?php echo  $row["EMAIL"] ?></td>
<td><?php echo  $row["CONTACT"] ?></td>
<td><?php echo  $row["BIRTH"] ?></td>
<td><?php echo  $row["COUNTRY"] ?></td>
<td><?php echo  $row["SEX"] ?></td>
<td><img src="<?php echo  $row['IMAGE'] ?>" width="100px" height="100px"> </td>

</tr>

<button onclick="myFunction()">Print</button>

<script>
function myFunction() {
window.print();
}
</script>
</body>
<table>


<?php 

}
}
?>




  

</body>
</html>

