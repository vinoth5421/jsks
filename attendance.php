<!DOCTYPE html>
<html>
   <?php include 'header.php'; 
    ?>
      <script src="jquery.js"></script>
   <style>
    
       
    #hey {
    width: 100%;
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
    font-family:"Times New Roman", Times, serif;
    border-collapse: collapse;
    width: 150%;
}
       td{
    
    text-align: left;
    padding: 8px;
}

      
       
       #livesearch{
       
          
           
            position: absolute;
    top:250px;
    left:250px;
           font-size: 125%;
         
        
           
       }
       
       #txt{
           
          position: absolute;
    top:180px;
    left:250px;
            font-size: 150%;
        
       }
       
       #hi{
          color:black; 
           font-size: 150%;
       }
       #hhh
       {
             position: absolute;
    top:30px;
    left:0px;
       }
       
       #in
       {
             position: absolute;
    top:35px;
    left:400px;
           
           
       }
       
       
       
       .punid{
position: absolute;
    top:230px;
    left:0px;
           font-family: verdana;
           text-align: center;
     
           
           
}
       .punname{
          
position:relative;
    top:100px;
    left:250px;
          
           font-family: verdana;
        
}
       .puntime{
position: relative;
    top:110px;
    left:250px;
           font-family: verdana;
           
}
       .punsta{
           
position: relative;
    top:120px;
    left:250px;
           font-family: verdana;
           
           
        
}

       
       
    </style> 
<head>
    
    
    
    
    
    
    
</head>
<body>

<form>
    
    <div id="txt">
    EMPLOYEE ID: ex:JSKS10001
<input type="text" hidden>
        <input type="text" id="hey" onkeyup="myFunction()"  autocomplete="off" autocomplete="off"  autofocus>
    
</div>
<div id="livesearch" >
    

    <ul id="comment"></ul>

    </div>

</form>

</body>
</html>

        

<script>
  function myFunction() {
      
      var x=document.getElementById("hey");
    x.value=x.value.toUpperCase();
      
      if(document.getElementById("hey").value.length>9)
           { 
               
                setTimeout(function(){ document.getElementById("hey").value = ""; }, 100);
           }
      
      
      
      
        else if(document.getElementById("hey").value.length==9)
           { 
           var name=$("#hey").val();
      
      
      
             $.ajax({
                              type:"post",
                              url:"attendancedata.php",
                              data:"name="+name+"&action=showcomment",
                            success:function(data){
                             $("#livesearch").html(data);
                                
                 }  
 
                          });  
      
               setTimeout(function(){ document.getElementById("hey").value = ""; }, 100);
               

      
      
      
  }
      
      
  }
    
    </script>
    


