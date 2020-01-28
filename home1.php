<?php 
session_start();

?>


<html> 
<head> 
   <title>Final Project </title>
   <style>
        
        
            table{border-collapse:collapse}
            tr,td{
                
                border:1px solid black; 
                text-align:center; 
            
            }
div.ex1 {

  height: 100px;
  width: 1100px;

  overflow-y: scroll;
}
            
        
        </style>
   
</head>

<img src="header.png" width="100%" height="30%">
<br>

<table width="100%">

   <tr>
     
       <td> <a href="home1.php"> Home </a> </td>
       <td> <a href="reg1.php"> Registration </a> </td>
       <td> <a href="logout.php"> Logout </a> </td>
       <td> <a href="update.php"> Update </a> </td>
       <td> <a href="delete.php"> Delete </a> </td>
        <td> <a href="search1.php"> SEARCH </a> </td>
         <td> <a href="show.php"> Download Info </a> </td>
        <td><?php echo "welcome"." ".$_SESSION['username']; ?> </td>

    </tr>

</table>


<table width="100%">

   <tr> 
     
      <th ><div class="ex1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.
What is Lorem Ipsum?

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?

It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
What is Lorem Ipsum?

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?

It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

</div>
 
  </th>



</td>

</tr>
</table>

<table width="100%">

<tr>
   <td><img src="1.jpg" height="100%" width="100%"> </td>
   <td> <img src="2.jpg" height="100%" width="100%"></td>
   <td> <img src="3.jpg" height="100%" width="100%"></td>
   <td> <img src="4.jpg" height="100%" width="100%"></td>
</tr>
</table> 

<table width="100%">
  <tr>
    <td> Presented By SAGOR  </td>
 </tr>
</table>
  



</html>
    