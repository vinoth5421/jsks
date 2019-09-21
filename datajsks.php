<?php

require 'dbconn.php';

   session_start();
  
if(isset($_POST['submit']))
{

    
    if ($_FILES['file']['size'] != 0 ){
    
    $name   = $_POST['name'];
  
    $gender = $_POST['gender'];
    $phoneno = $_POST['phoneno'];
    $aadhaar = $_POST['aadhaar'];
   
   
    $address =$_POST['address'];
  
    
     $fileupload=$_FILES['file']['name'];
     $fileuploadtmp=$_FILES['file']['tmp_name'];
  
     $folder="empimages/";

    move_uploaded_file($fileuploadtmp,$folder.$fileupload);


    
$sql1 ="SELECT empid FROM employee ORDER BY empid DESC LIMIT 1";
$result = mysqli_query($conn,$sql1);
    
if (!$result) { 
echo 'Could not run query: ' . mysqli_error($conn);
exit;
}
    
$row=mysqli_fetch_row($result);
    
    if(empty($row))
    {
        
        $user_id='JSKS10001';
    }
    
        else
        {
    
  $pre_user_id=$row[0];
$num_pre_user_id = substr($pre_user_id,4); // It will get the numeric part of the user_id
$user_id = (int)$num_pre_user_id +1 ;
$user_id = 'JSKS'.$user_id; 
        }
$sql ="insert into employee(empid, empname,  gender, phoneno, aadhar,address,dateofjoin,image,flag)VALUES ('$user_id','$name','$gender','$phoneno','$aadhaar','$address',CURDATE(),'$fileupload','0')";

if(empty($_POST['phoneno']))
{
echo "phone no empty";
    
     //echo $fileupload;
    //echo $fileuploadtmp;
    //print_r($_FILES);

    
}
else
if ($conn->query($sql) === TRUE) {
  $sql1 ="SELECT * FROM employee ORDER BY empid DESC LIMIT 1";
$result = mysqli_query($conn,$sql1);  
    $row=mysqli_fetch_row($result);
    echo '<script> var name = "EMPLOYEE ID : "+"'.$row[0].'"+" EMPLOYEE Name : "+"'.$row[1].'";
  alert(name);</script>';
       //echo "<script type='text/javascript'>alert('inserted');</script>";

   //echo "<h2>New record created successfully.    EMPLOYEE ID :  $row[0] &nbsp Name:$row[1]</h2>"  ; 
    
 
    
    //echo $fileupload;
    //echo $fileuploadtmp;     
    //echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    
    
//     $page = $_SERVER['PHP_SELF'];
// $sec = "3";
// header("Refresh: $sec; url=$page");
    
 
    
    
    
    
 header("Location:addemp.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    
}
    else 
    {
        echo "photo is empty";
    }
}

$conn->close();
?>


