<!DOCTYPE html>
<html>
   <?php include 'header.php'; 
    ?>
      <script src="jquery.js">
    
 </script>
    
    
    <h1>Expenses</h1> 
   <style>
    
       

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
th{
    
   text-align:left;
    padding: 8px;
}
       .dtt{
          
         font-size: 20px;   
           position:static;
    top:0px;
    left:0px;
       }
       
       #livesearch{
           
           
            position: absolute;
    top:200px;
    left:650px;
           
       }
       
       #txt{
           
          position: absolute;
    top:200px;
    left:10px;
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
    left:480px;
       }
     #sub {
    width: 15%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
         
         
             position: absolute;
    top:350px;
    left:100px;
}
       input[type=text] {
    width: 150%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
           
}
       #empid{
           
           position: absolute;
    top:0px;
    left:200px;
       }
       #hey{
         position: absolute;
    top:50px;
    left:200px;  
       }
       
       
       
       .jj{
           
          position: absolute;
    top:230px;
    left:500px;
            font-family: verdana;
           font-size: 30px;
        color:darkgreen;
       }
       
       
       
    </style> 
<head>

    
    </head>
<body>

<form>
    
    <div id="txt">
      <table><tr> <td>
    Expenses Name</td><td>
          
<input type="text" size="30"  id="empid"  autocomplete="off" autofocus></td></tr>
         <tr> <td>
   AMOUNT</td><td> 
             <input type="text" id="hey"></td></tr>
          
          
          
    </table> 
</div>
<div id="livesearch" >
    
    <ul id="comment"></ul>

    </div>
    
    
    
    
    
   
        <input type="button" id="sub" value="submit" onclick="myFunction()">
</form>

</body>
</html>

        

<script>
    
    
     $(document).ready(function(){
 
                    function showComment(){
                      $.ajax({
                        type:"post",
                        url:"advancedata.php",
                        data:"action=showexpenses",
                        success:function(data){
                             $("#livesearch").html(data);
                        }
                      });
                    }
 
                    showComment();
 
 
                
              
   
  $("#sub").click(function(){
        var id=$("#empid").val();     
           var amt=$("#hey").val();
      
             $.ajax({
                              type:"post",
                              url:"advancedata.php",
                              data:"id="+id+"&amt="+amt+"&action=addexpenses",
                            success:function(data){
                             $("#livesearch").html(data);
                                showComment();
                 }  
 
                          });  
      setTimeout(function(){ document.getElementById("empid").value = ""; }, 100);
               setTimeout(function(){ document.getElementById("hey").value = ""; }, 100);
               
           
      
      
      
  });
         
          });
    
    </script>
    






