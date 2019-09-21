<?php

require "dbconn.php";

$action=$_POST["action"];


if($action=="showcomment")
{

$q=$_POST["name"];


$sql="SELECT * FROM employee where empid ='$q'";

$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if(!$row){
    
    echo "<h2>Not Employee</h2>";
}
else{
echo"<p class='jj'>$row[empname]</p>";
  $image_data=$row[image]; 
    
    echo '<img src="empimages/'.$image_data.'" id="hhh" width="175" height="200"/ >';
     ?>  



<?php
    
    
    $sql2="SELECT * FROM advance where month(advdate)=MONTH(CURRENT_DATE()) and year(advdate)=YEAR(CURRENT_DATE()) and id ='$q'";

$result2 = mysqli_query($conn,$sql2);
    
   
    echo "<table>";

echo "<th>ID</th><th>Date</th><th>Amount</th>";
    
while($row2=mysqli_fetch_array($result2)){
     
    echo "<tr><td>$row2[id]</td><td> $row2[advdate]</td><td> $row2[advamt]</td></tr>";
     
   
    
 
}
    
    
    

    
echo "</table>";  
    

$sql3="SELECT sum(advamt) as advamount FROM advance where month(advdate)=MONTH(CURRENT_DATE()) and year(advdate)=YEAR(CURRENT_DATE()) and id ='$q'";
   $result3 = mysqli_query($conn,$sql3); 
    $row3=mysqli_fetch_array($result3);
    
    echo "Total amount:$row3[advamount]";
    

}
}
else if($action=="addcomment")
{
    
$q=$_POST["id"];
    

$amt=$_POST["amt"];



 $sql1 = "INSERT INTO advance(id,advdate,advamt)VALUES ('$q',CURDATE(),'$amt')";

 $result = mysqli_query($conn,$sql1);
    
    
    
    $sql10 = "INSERT INTO expenses(expname,expamt,expdate)VALUES ('$q','$amt',CURDATE())";

 $result10 = mysqli_query($conn,$sql10);


}
else if($action=="showleave")
{
    $q=$_POST["name"];
    $sql="SELECT * FROM employee where empid ='$q'";

$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);


echo "Name:$row[empname]";
    
    
    $sql1="SELECT * FROM leavesalary where id ='$q'";
    $result1 = mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($result1);
    
    echo "<table>";
    
    echo "<tr><td>ID :</td><td>$row1[id]</td></tr> <tr><td>Perday Salary: </td><td>$row1[perdaysalary] </td></tr> <tr><td>Leaveper Month: </td><td>$row1[leavepermonth]</td></tr>";
    

    echo "</table>";
    
    
}
else if($action=="addleave")
{
    $id=$_POST["id"];
     $persalary=$_POST["persalary"];
     $leaveper=$_POST["leaveper"];
    
    $sql4="SELECT * FROM leavesalary where id ='$id'";
    $result4= mysqli_query($conn,$sql4);
    
$row4=mysqli_fetch_array($result4);
    
    
    if(!$row4['id']==$id)
    {
    
    
    
    $sql1 = "INSERT INTO leavesalary(id, perdaysalary, leavepermonth) VALUES ('$id','$persalary','$leaveper')";

 $result = mysqli_query($conn,$sql1);

    
    }
    else if($persalary==""||$leaveper==""){
        
       
        
        
     }
    else{
        
        
        $sql7 = "update leavesalary set perdaysalary = '$persalary',leavepermonth = '$leaveper' where id = '$id' ";
        
    $result7 = mysqli_query($conn,$sql7);
    }
            
}
else if($action=="showexpenses")
{
    
    
    
    $sql9="SELECT sum(expamt) as amount FROM expenses where expdate=CURRENT_DATE()";
    $result9 = mysqli_query($conn,$sql9);
    $row9=mysqli_fetch_array($result9);
    
    echo "<p class='dtt'> Date : " .date("Y/m/d")." &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspExpenses amount:$row9[amount]</p>";

    
    
    $sql8="SELECT *  FROM expenses where expdate=CURRENT_DATE()";
    $result8 = mysqli_query($conn,$sql8);
   
  
   
        
    echo "<table>";
    echo "<th>Name</th><th>Amount</th>";
    
    
    while($row8=mysqli_fetch_array($result8)){
    
    echo "<tr><td>$row8[expname]</td><td>$row8[expamt] </td></tr>";
    
    }
    echo "</table>";
    

    
    
}
else if($action=="addexpenses")
{
    
    

    
    
   $q=$_POST["id"];
    

$amt=$_POST["amt"];



 $sql9 = "INSERT INTO expenses(expname,expamt,expdate)VALUES ('$q','$amt',CURDATE())";

 $result9 = mysqli_query($conn,$sql9);

    
    
    
    
    
    
    
    
}
















 $conn->close();
 ?>