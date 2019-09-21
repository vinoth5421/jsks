<!DOCTYPE html>
<html>
   <?php include 'header.php'; 
    ?>
      <script src="jquery.js"></script>
   <style>
    
       #empid{
           
           
           width: 50%;
           
               padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
      font-size: 75%;     
       }  

     h2{
        color:darkcyan;
          font-size: 150%;
       }
       
       table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 150%;
}
       td{
    
    text-align: left;
    padding: 8px;
}

       tr:nth-child(even) {
    background-color: #f2f2f2;
}
       
       #livesearch{
           color:darkcyan;
          
           
            position: absolute;
    top:250px;
    left:250px;
           
       }
       
       #txt{
           
          position: absolute;
    top:180px;
    left:0px;
            font-size: 150%;
        
       }
       
       
       #txt2{
           
          position: absolute;
    top:430px;
    left:450px;
            font-size: 150%;
        
       }
       #hi{
          color:black; 
           font-size: 150%;
       }
       #hhh
       {
             position: absolute;
    top:35px;
    left:700px;
       }
       
       
       
    </style> 
<head>

    
    </head>
<body>

<form>
    Leave perday Salary
    <div id="txt">
    EMPLOYEE ID:
<input type="text" size="30"  id="empid" maxlength="9" autocomplete="off" autofocus>
    
</div>
<div id="livesearch" >
    
    <ul id="comment"></ul>

    </div>
    
    <div id="txt2">
    Salary:<input type="text" id="persalary"><br>
    Leave<input type="text" id="leaveper"><br>
    
    
        <input type="button" id="sub" value="submit" onclick="myFunction()">
    </div>
</form>

</body>
</html>

        

<script>
    
    
    
     document.getElementById("empid").onkeyup = function() {myFunction1()};
  function myFunction1() {
        var x=document.getElementById("empid");
    x.value=x.value.toUpperCase();
    
       if(document.getElementById("empid").value.length==9)
           {
               
              
   
           var name=$("#empid").val();     
             $.ajax({
                              type:"post",
                              url:"advancedata.php",
                              data:"name="+name+"&action=showleave",
                 success:function(data){
                             $("#livesearch").html(data);
                 }
 
                          });  
               
               
               
}
      
      
      
  }
   
  function myFunction() {
      
        var id=$("#empid").val();     
           var persalary=$("#persalary").val();
      var leaveper=$("#leaveper").val();
      
             $.ajax({
                              type:"post",
                              url:"advancedata.php",
                              data:"id="+id+"&persalary="+persalary+"&leaveper="+leaveper+"&action=addleave",
                            success:function(data){
                             $("#livesearch").html(data);
                                myFunction1();
                 }  
 
                          });  
     setTimeout(function(){ document.getElementById("empid").value = ""; }, 1000);
              setTimeout(function(){ document.getElementById("hey").value = ""; }, 100);
               
 }
    
     
    
    
    
  

    
    
    
    </script>
    
