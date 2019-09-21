<?php include 'header.php'; ?>


<!DOCTYPE html>
<html lang="en">
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
        
        td{
            font-size: 150%; 
            
            
        }
        p{
            
            font-size: 150%; 
            
            
        }
        
        .sid{
           position: absolute;
    top:300px;
    left:350px; 
        }
        .sname{
           position: absolute;
    top:300px;
    left:600px; 
            
        }
        
        .smonth{
            
            position: absolute;
    top:200px;
    left:650px;
    }
        .sday{
            
            position: absolute;
    top:375px;
    left:350px;
    }
        .sleave{
            
            position: absolute;
    top:450px;
    left:350px;
           
    }
        .sper{
            
            position: absolute;
    top:525px;
    left:350px;
    }
        .sgross{
            
            position: absolute;
    top:575px;
    left:500px;
    }
        .sded{
            
            position: absolute;
    top:575px;
    left:700px;
    }
        .snet{
            
            position: absolute;
    top:575px;
    left:900px;
    }
        
        
        #comment{
           background-color: white;
        }
   
    
</style>
     <body>
    
    
 </body>
   <h3> Salary Updation</h3>
    <div>
    
     <form action="" method = "POST">
           </form>
         <table><tr>
        <td>
        EMPLOYEE ID:</td><td>
<input type="text" size="30"  id="empid"  autocomplete="off" autofocus></td>
             <td>       <input type="submit" name="submit"  id="sumbit" >

</td> 
</tr>
    
    
             
  </table>
        

        <div id="livesearch" >
    
    
    </div>
        
       
    
  <div id="livesearch1" >
    
    
    </div>
           
        
        
     </div>
    
    <div id="info" />
               <ul id="comment"></ul>
    
</html>
 <script src="jquery.js"></script>
<script>

 document.getElementById("empid").onkeyup = function() {myFunction1()};
  function myFunction1() {
      
      
       var x=document.getElementById("empid");
    x.value=x.value.toUpperCase();
    
      
       if(document.getElementById("empid").value.length==9)
           {
   
           var id=$("#empid").val();     
             $.ajax({
                              type:"post",
                              url:"salarydata.php",
                              data:"id="+id+"&action=showcomment",
                 success:function(data){
                             $("#livesearch").html(data);
                     }
                 });  
               }
  }
    
   

</script>

<script type="text/javascript">
               $(document).ready(function(){
 
                    function showc(){
                      $.ajax({
                        type:"post",
                        url:"salarydata.php",
                        data:"action=allcomment",
                        success:function(data){
                             $("#comment").html(data);
                        }
                      });
                    }
 
                  showc();
                   
                   $("#sumbit").click(function(){
                   var id=$("#empid").val();     
        if(document.getElementById("empid").value.length==9)
           {
               $.ajax({
                              type:"post",
                              url:"salarydata.php",
                              data:"action=addcomment",
                            success:function(data){
                 $("#livesearch1").html(data); 
                                 showc();
                                }  
               });  
               setTimeout(function(){ document.getElementById("empid").value = ""; }, 100);
             setTimeout(function(){ $("#livesearch").empty(); }, 1000);
               setTimeout(function(){ $("#livesearch1").empty(); }, 5000); 
               
           }
      
     
 
 
                       
                       
                       
                       });
                   
               });
    
    
    function myFunction3()
                   {
                       
                      $.ajax({
                        
                
                        success:alert(""),
                      });
                       
                       
                   }  
       </script>

