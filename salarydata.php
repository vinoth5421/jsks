<?php
 require "dbconn.php";

$action=$_POST["action"];

session_start();    


$q=""; 
$oDate4 = strtotime("now");
$sDate4 = date("M/Y", strtotime("-1 month", $oDate4));




if($action=="allcomment"){ 
    

    $_SESSION['q1'] ="";
    
    $sql6 ="SELECT *
FROM employee 
WHERE NOT EXISTS (SELECT * 
                  FROM salary
                  WHERE employee.empid = salary.id AND salarymonth = '$sDate4')  ORDER BY empid LIMIT 100 ";
    
    
   
    //$sql6  ="SELECT a.empid FROM jsksnewemp as a LEFT JOIN salary as b ON a.empid=b.id WHERE b.id IS NULL";
    
$result6 = mysqli_query($conn,$sql6);
    
    
    $oDate = strtotime("now");
$sDate = date("M/Y", strtotime("-1 month", $oDate));

    
    $oDate1 = strtotime("now");
$sDate1 = date("Y", strtotime("-1 month", $oDate1));
    
    $oDate2 = strtotime("now");
$sDate2 = date("m", strtotime("-1 month", $oDate2));


    
    echo '<table>';  
echo '<th>Empid</th><th>workdays</th>';
    
   while($row6=mysqli_fetch_array($result6))

{ 
       
       
    $show1="Select sum(attstatus) as sumwork,attempid from attendence where year(attdate) ='$sDate1' AND month(attdate) ='$sDate2' AND attempid='$row6[empid]'";

 $result1 = mysqli_query($conn,$show1);
    
    $row1=mysqli_fetch_array($result1);
    
      $sql10="SELECT * FROM leavesalary where id ='$row1[attempid]'";

$result10 = mysqli_query($conn,$sql10);
$row10=mysqli_fetch_array($result10); 
//echo '<pre>';print_r($row10);
      if($row1['sumwork']>=0.5) 
      {
        echo "<tr><td>$row6[empid]</td><td>&nbsp&nbsp&nbsp&nbsp$row1[sumwork]</td>";
        if($row10['id']!=$row1['attempid'])
     
     {
         echo "<td>Null</td>";
         
     }
     
      }
       
     
       
       echo "</tr>";
       
    }
    
    
    echo '<table>';


}


    
if($action=="showcomment"){ 

   
$_SESSION['q1'] =$_POST["id"];
   
  
//$q=$_POST["id"];

 

}



$q=$_SESSION['q1'];

   


$sql="SELECT * FROM employee where empid ='$q'";

$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
    
    
    
    $oDate = strtotime("now");
$sDate = date("M/Y", strtotime("-1 month", $oDate));

    
    $oDate1 = strtotime("now");
$sDate1 = date("Y", strtotime("-1 month", $oDate1));
    
    $oDate2 = strtotime("now");
$sDate2 = date("m", strtotime("-1 month", $oDate2));


    
    
  $show1="Select sum(attstatus) as sumwork from attendence where year(attdate) ='$sDate1' AND month(attdate) ='$sDate2' AND attempid='$q'";

 $result1 = mysqli_query($conn,$show1);
    
    $row1=mysqli_fetch_array($result1);
    
    
    
    
    
    
     $sql2="SELECT * FROM leavesalary where id ='$q'";

$result2 = mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($result2);


    
    $totwork=$row1['sumwork']+$row2['leavepermonth'];
    $gsalary=$totwork*$row2['perdaysalary'];
    
    
    
    
    
    $sql3="SELECT sum(advamt) as advamount FROM advance where year(advdate)='$sDate1' and month(advdate)='$sDate2' and id ='$q'";
   $result3 = mysqli_query($conn,$sql3); 
    $row3=mysqli_fetch_array($result3);
    
    
    
    
    $netsalary=$gsalary-$row3['advamount'];
    
    
$sql6 ="SELECT * FROM salary where id ='$q' AND salarymonth = '$sDate'";

$result6 = mysqli_query($conn,$sql6);
    
    
   

$row6=mysqli_fetch_array($result6);




 
if($action=="showcomment"){ 
    
    




echo"<p class='sname'>Name:$row[empname]</p>";
    
 echo "<p class='smonth'>MONTH OF SALARY:$sDate</p>";
  echo"<p class='sday'>Working Day:$row1[sumwork]</p>";     
    
    echo"<p class='sleave'>Leave Days:$row2[leavepermonth]</p>";
    
    echo"<p class='sper'>Salary per day:$row2[perdaysalary]</p>";

    echo"<p class='sgross'>Gross pay:$gsalary</p>";
    echo "<p class='sded'>Deductions:$row3[advamount]</p>";
echo "<p class='snet'>Net  pay:$netsalary</p>";
echo "<p class='sid'>ID:$row[empid]</p>";
    
    if($netsalary<0)
    {
        echo"nosalry";
        
    }
    
   
    
    
}

else if($action=="addcomment")
{
    
    
    
    
    
    
   
    
    
   if(!$row6['id']==$q) 
    
   {
    
    if($row1['sumwork']>=0.5)
    {
        
        
    $sql5 = "INSERT INTO salary(`id`, `name`, `salarymonth`, `workday`, `leaveday`, `perday`, `gross`, `detection`, `net`, `salarydate`, `paidon`) VALUES ('$row[empid]','$row[empname]','$sDate','$row1[sumwork]','$row2[leavepermonth]','$row2[perdaysalary]',' $gsalary','$row3[advamount]','$netsalary',CURDATE(),'')";

 $result5 = mysqli_query($conn,$sql5);

    
echo"Successfully salary added for  $row[empname] ";


    }
    else{
        echo"no working day for a month";
        
    }
       
     if($netsalary<0){
        
        $netsalary1=-($netsalary);
        
        
        $sql6 = "INSERT INTO advance(id,advdate,advamt)VALUES ('$q',CURDATE(),'$netsalary1')";

 $result6 = mysqli_query($conn,$sql6);
      echo"successfully advance added";   
    }
       
   }
    
    else{
        
         echo"already salary added for this employees $row[empname]";
    }
   
    
    session_destroy();
    
}

else if($action=="showpayment"){
    
    $q=$_POST["id"];
    
    
    
    
        $oDate = strtotime("now");
$sDate = date("M/Y", strtotime("-1 month", $oDate));

    $sql8="SELECT * FROM salary where salarymonth='$sDate' AND id ='$q'";

$result8 = mysqli_query($conn,$sql8);
$row8=mysqli_fetch_array($result8);
    
    
    
   echo "<table>";
    
    echo "<tr><td>ID :</td><td>$row8[id]</td></tr> <tr><td>Name: </td><td>$row8[name] </td></tr><tr><td>Salary Month </td><td>$row8[salarymonth] </td></tr><tr><td>Workday: </td><td>$row8[workday] </td></tr><tr><td>Perday: </td><td>$row8[perday] </td></tr><tr><td>Leave: </td><td>$row8[leaveday] </td></tr><tr><td>Gross: </td><td>$row8[gross] </td></tr><tr><td>detection: </td><td>$row8[detection] </td></tr> <tr><td>Net: </td><td>$row8[net]</td></tr>";
    

    echo "</table>";
    
}
else if($action=="addpayment"){
    
    $q=$_POST["id"];
    
    $oDate = strtotime("now");
$sDate = date("M/Y", strtotime("-1 month", $oDate));

    
        $sql9 ="update salary set paidon = CURDATE() where salarymonth='$sDate' AND id ='$q'";
    
    
    $result9 = mysqli_query($conn,$sql9);
    
    
}



 $conn->close();
 ?>