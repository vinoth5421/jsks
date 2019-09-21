<!DOCTYPE html>
<html lang="en">
    <head>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
 
</head>
<div class="menu">
<?php include 'header.php';?>
</div>
</html>
<?php

require 'datajsks.php';

?>

<html>
<style>
input[type=text], input[type=date],select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
    
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
    
    
    h3{
    color: firebrick;
    font-family: verdana;
    font-size: 150%;
}
  h2{
        color:darkcyan;
       position: absolute;
    top:130px;
    left:250px;
        }
    .content{
       width:900px;
       margin: 0px auto;
       
    }
    .fileds{
        float:left;
        width:500px;
    }
    #imgfld{
        float:right;
        width:300px;
        margin-top:50px;
    }
</style>
<body>

    <h3>ADD EMPLOYEE</h3>
<div class="content">
  <form action="" method = "POST" enctype="multipart/form-data">
      <div class="fileds">
      <table>
     <tr><td>
    <label for="Empname">EmpName *</label></td><td>
            <input type="text" id="name" name="name"  required title="Please enter first name"  placeholder="Your name.."  autofocus >
</td></tr>
<tr><td>
    
       <label for="Gender">Gender *</label></td><td>
    <select id="gender" name="gender">
      <option value="Male">Male</option>
      <option value="Female ">Female</option>
      
         </select>
         </td></tr>
         <tr><td>
    <label for="Phone No">Phone No *</label></td><td>
    <input type="text" id="phonenumber" name="phoneno"    placeholder="PhoneNo"  maxlength="10" required>
       
       
    </td></tr>
    <tr><td>
    <label for="Aadhar">Aadhaar </label></td><td>
      <input type="text" id="adhar" name="aadhaar" placeholder="Aadhaar No"  maxlength="12"> </td></tr>
      <tr><td>
      <label for="Address">Address *</label></td><td>
      <textarea rows="4" cols="50" name="address" placeholder="Enter detail address" required>
</textarea>
      </td></tr>
      
     </table>
  </div>
      
     
       <div id="imgfld"> 
          
     <img src="images/b.jpg" id="profile-img-tag"  width="150px" />
      
 <input type="file" name="file" id="profile-img"  alt="submit" required> 
 <input type="submit" name="submit"  id="sumbit" >
            </div>
      
     
     
       <!--onclick="return mess();"-->
      

        </form>
</div>
    
    </body>
</html>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>
        
     <script type="text/javascript">
     
         $('#submit').click(function(event){
           

            event.preventDefault();
         
return false;
})
      
      
      </script>

