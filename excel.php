<?php 

session_start();

$con=mysqli_connect('localhost','root','','ums2');
$output='';

if(isset($_POST['btn'])){

 $query = "SELECT * FROM student ORDER BY ID ASC";
 $result = mysqli_query($con, $query);

 if(mysqli_num_rows($result) > 0)
 {
  $output .= '

   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         <th>NAME</th>  
                         <th>AGE</th>  
                    
                         <th>SEMESTER</th>  
                         <th>PASSWORD</th>  
                         <th>EMAIL</th>   
                         <th>CONTACT NO</th>  
                         <th>BIRTHDAY</th>  
                         <th>COUNTRY</th>  
                         <th>SEX</th>
                         <th>IMAGE</th>  
                    </tr>

 ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["ID"].'</td>  
                         <td>'.$row["NAME"].'</td>  
                         <td>'.$row["AGE"].'</td> 
                          <td>'.$row["SEMESTER"].'</td>  
                         <td>'.$row["PASSWORD"].'</td>  
                         <td>'.$row["EMAIL"].'</td>  
                         <td>'.$row["CONTACT"].'</td>  
                         <td>'.$row["BIRTH"].'</td>  
                         <td>'.$row["COUNTRY"].'</td>  
                         <td>'.$row["SEX"].'</td>  
                       <td><img src='.$row["IMAGE"].' width="100px" height="100px"> </td> 
                          
       
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type:text/cav');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}

?>




