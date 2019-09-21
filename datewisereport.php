<?php
 
require "dbconn.php";
$q=$_GET["q"];




 $oDate = strtotime("$q");
$sDate = date("Y",$oDate);


$oDate1 = strtotime("$q");
$sDate1 = date("m",$oDate1);
    










echo "<h2>DAYWISE REPORT : $q</h2>";
  $show="Select * from attendence where attdate ='$q' ";

 $result = mysqli_query($conn,$show);


$serialno=0;
echo "<table>";

echo "<th>No</th><th>ID</th><th>Name</th><th>Status</th>";
    



while($row=mysqli_fetch_array($result))

{

    $select ="Select * from employee where empid='$row[attempid]'";
    $res = mysqli_query($conn,$select);
    $rowname=mysqli_fetch_array($res);
    
     $serialno++;
    
    $attstatus=$row['attstatus'];
    
    
    if( $attstatus=="1"){
    
        echo "<tr><td > $serialno </td><td>$row[attempid]</td><td> $rowname[empname]</td><td> Present</td></tr>";
    }
    
    else if( $attstatus=="0"){
        
        echo "<tr><td> $serialno </td><td>$row[attempid]</td><td> $rowname[empname]</td><td>Absent </td></tr>";
        
    }
    else{
        echo "<tr><td> $serialno </td><td>$row[attempid]</td><td> $rowname[empname]</td><td>HalfDay </td></tr>";
    }
    
     
}

echo "</table>";




   
?>