<?php
  require "dbconn.php";



$sql ="DELETE FROM daily WHERE date(timein) < CURDATE() - INTERVAL 3 MONTH" ;
      
     $result12 = mysqli_query($conn,$sql);
   
  $action=$_POST["action"];



 
  if($action=="showcomment"){
     $show="Select * from employee ";
 $result = mysqli_query($conn,$show);
 
     $rowcount=mysqli_num_rows($result);
      
      
      
      //$show1="SELECT * FROM daily where date(timein) = CURDATE() ";
      $show1="SELECT * FROM attendence where attdate = CURDATE() and attstatus !=0 ";
 $result1 = mysqli_query($conn,$show1);
 
     $rowcount1=mysqli_num_rows($result1);
      
      
      
      
      $rowabsent =$rowcount - $rowcount1;
      
      
      
       echo "<table id ='hi'>";
    
     
     echo "<tr><td  height='150px'  width ='200px'>Number of Employee</td><td>$rowcount</td></tr><tr ><td> Today Present</td><td>$rowcount1</td></tr> <tr  height='150px'  width ='200px'><td> Today Absent</td><td>$rowabsent</td></tr>" ;
      
      
 echo"</table>";
      
      
   
     
     
     
 
   
  }
  
?>