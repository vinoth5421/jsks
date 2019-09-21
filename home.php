<?php include 'header.php'; ?>
<html>
   
    <style>
    
        #info{
            
            
             position: absolute;
    top:130px;
    left:1050px;
            font-size: 150%;
             color:darkcyan;  
            

        }
        
          #att{
            
           
             position: absolute;
    top:190px;
    left:950px; 
            
        }
        
        #att1{
            
           
             position: absolute;
    top:280px;
    left:950px; 
            
        }
         #att2{
            
           
             position: absolute;
    top:370px;
    left:950px; 
            
        }
    
    
  
    
    </style>
    
    
    
    
    
   <head>
 
      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script type="text/javascript">
               $(document).ready(function(){
 
                    function showComment(){
                      $.ajax({
                        type:"post",
                        url:"process.php",
                        data:"action=showcomment",
                        success:function(data){
                             $("#comment").html(data);
                        }
                      });
                    }
 
                    showComment();
 
 
                
               });
       </script>
   </head>
 
   <body>
        <form>
              
                
               <div id="info" >
            
            <p id="comment"></p>
            
              
                    </div>
            
            
            
            
            <img src="images/1.png"  width="90" id="att"/>
                   <img src="images/2.jpg"  width="75" height="75" id="att1"/>
                                      <img src="images/do.jpg" id="att2" width="75" height="75" id=""/>
     
            

            
        </form>
   </body>
</html>



