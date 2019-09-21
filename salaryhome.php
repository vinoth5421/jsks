<?php include 'header.php'; 
    ?>

<!DOCTYPE html>
<html>
<h1>Salary Home</h1>
<style>
    input[type=submit] {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
    
    #submit1{
       position: absolute;
    top:250px;
    left:200px; 
        
}
     #submit2{
       position: absolute;
    top:250px;
    left:450px; 
        
}
     #submit3{
       position: absolute;
    top:250px;
    left:700px; 
        
}
     #submit4{
        width: 15%;  
       position: absolute;
    top:250px;
    left:950px; 
        
}
    
    
</style>
    
<a href="salary.php"><input type="submit" name="submit" value="Salary Update"  id="submit1"></a>

<a href="#"><input type="submit" name="submit" value="Salary View"  id="submit2"></a>

<a href="#"><input type="submit" name="submit" value="Salary Payment"  id="submit3"></a>

<a href="leavepersalary.php"><input type="submit" name="submit" value="Leave Perday Salary"  id="submit4"></a>





</html>