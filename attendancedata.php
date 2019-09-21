<?php

require "dbconn.php";

$action=$_POST["action"];

if($action=="showcomment")
{

  
$time1="";
$q=$_POST["name"];

$s="0000-00-00 00:00:00";

$s1="07:30:00";

$cur_date=date("d-m-Y");

$sql8="SELECT * FROM jsksnewemp where empid ='$q'";

$result8 = mysqli_query($conn,$sql8);
$row8=mysqli_fetch_array($result8);


$name =$row8['empname'];

if($row8['empid']==$q){

$mu="NULL";
$sql1 ="SELECT * FROM daily where id ='$q' AND date(timein) = CURDATE()";

$result = mysqli_query($conn,$sql1);


$row=mysqli_fetch_array($result);
    
//echo "$row[timein]:$row[timeout]";

    if(!$row['id']==$q)
    {
        
        
     
   $sql = "INSERT INTO daily(`id`,`name`,`timein`,`timeout`)VALUES ('$q','$name',CURRENT_TIMESTAMP,'')";

 if ($conn->query($sql) === TRUE) {
     
     $result2 = mysqli_query($conn,$sql1);
     
     $row=mysqli_fetch_array($result2);
     
 $oDate = strtotime($row['timein']);
    $sDate = date("d/m/y h:iA",$oDate);
     
     
   echo "<table id ='hi'>";
    
    
   
     
     echo " <tr><td class='punid'> $row[id]</td></tr> <tr><td class='punname'>welcome,&nbsp$row8[empname]</td></tr> <tr><td class='puntime'> &nbspIN&nbsp:&nbsp&nbsp$sDate</td></tr><tr><td class='punsta'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsppunch&nbspIN </td></tr>";
     $image_data=$row8[13];
     
     
     echo"</table>";
     echo '<img src="empimages/'.$image_data.'" id="hhh" width="175" height="200"/ >';
     
     ?>

<img src=images/in.jpg  width="50" height="50" id="in" />
<?php
    
     
 } else
 
 {
   echo "Error occured";
 } 
    }
else if($row['timeout']==$s)
{
    $sql3 ="update daily set timeout = now() where date(timein) = CURDATE() AND id = '$q'";
    
    
    $result3 = mysqli_query($conn,$sql3);
    
    
    
    $sql4 ="update daily set tothours = timediff(timeout,timein) where date(timein) = CURDATE() AND id = '$q'";
    
    $result4 = mysqli_query($conn,$sql4);
    
    
    
    
    
    
    
    
    
    
    $result6 = mysqli_query($conn,$sql1);
     
     $row6=mysqli_fetch_array($result6);
    
    
    
    
    
    if($row6['tothours']>=$s1)
    {
         $sql41 ="update daily set workday = '1' where date(timein) = CURDATE() AND id = '$q'";
    
    $result41 = mysqli_query($conn,$sql41);
    
        
    }
    else{
        
         $sql42 ="update daily set workday = '0.5' where date(timein) = CURDATE() AND id = '$q'";
    
    $result42 = mysqli_query($conn,$sql42);
    
    }
    
    
     $oDate = strtotime($row6['timein']);
    $sDate = date("h:i A",$oDate);

    
    
    $oDate1 = strtotime($row6['timeout']);
    $sDate1 = date("d/m/y h:iA",$oDate1);
    
    
        echo "<table id ='hi'>";
    
    
   
    
    echo " <tr><td class='punid' > $row6[id]</td></tr> <tr><td class='punname'>Thank&nbspYou,&nbsp$row8[empname]</td></tr> <tr><td class='puntime'>&nbspOUT&nbsp:&nbsp$sDate1</td></tr><tr><td class='punsta'>&nbsp&nbspHrs Working-$row6[tothours] </td></tr>";
     $image_data=$row8[13];
    
     echo"</table>";
    
    echo '<img src="empimages/'.$image_data.'" id="hhh" width="175" height="200"/ >';
    ?>

<img src=images/out.png  width="50" height="50" id="in" />

<?php
    
    
    
}
else{
    
    
    $result7 = mysqli_query($conn,$sql1);
     
     $row7=mysqli_fetch_array($result7);
    
   
$oDate = strtotime($row7['timein']);
    $sDate = date("h:iA",$oDate);

    
    
    $oDate1 = strtotime($row7['timeout']);
    $sDate1 = date("h:iA",$oDate1);
    
    echo "<table id ='hi'>";
    
   echo " <tr><td class='punid'> $row7[id]</td></tr> <tr><td class='punname'>&nbspSorry,&nbsp$row8[empname]</td></tr> <tr><td class='puntime'>IN-$sDate &nbspOUT-$sDate1  </td></tr><tr><td class='punsta'>&nbsp&nbspHrs Working-$row7[tothours]</td></tr> <tr><td class='puns'>&nbsp&nbsp&nbsp&nbsp&nbspClosed</td></tr>";
     $image_data=$row8[13];
    
    echo"</table>";
    	echo '<img src="empimages/'.$image_data.'" id="hhh" width="175" height="200"/ >';

    ?>

<img src=images/ss.jpg  width="60" height="60" id="in" />

<?php
    
    
   
    
}


 
}
else{
    
    
   echo "<h3>Not employee</h3>" ;
    
}

}
else if($action=="")
{
}
$conn->close();


?>