<?php
  
require "dbconn.php";
$q=$_GET["q"];




 $oDate = strtotime("$q");
$sDate = date("Y",$oDate);


$oDate1 = strtotime("$q");
$sDate1 = date("m",$oDate1);
    


echo "<h2>MONTHWISE REPORT : $q</h2>";



  $show="Select sum(attstatus) as sumwork,attempid from attendence where year(attdate) ='$sDate' AND month(attdate) ='$sDate1' GROUP BY attempid ";
 
 $result = mysqli_query($conn,$show);
 

$serialno=0;
echo "<table>";

echo "<th>No</th><th>ID</th><th>Name</th><th>Tot Days</th>";
    



while($row=mysqli_fetch_array($result))

{

 $select ="Select * from employee where empid='$row[attempid]'";
 $res = mysqli_query($conn,$select);
 $rowname=mysqli_fetch_array($res);
 
     $serialno++;
    
    
    
        echo "<tr><td > $serialno </td><td>$row[attempid]</td><td> $rowname[empname]</td> <td> $row[sumwork]</td></tr>";
    
     
}

echo "</table>";




   
?>