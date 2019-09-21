 <?php include 'header.php'; ?>
 <script src="jquery.js"></script>
<html>
    
    <h2>MonthWise Report</h2>
    
    <style>
    
           table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 150%;
}
       td{
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
           
           
}

       tr:nth-child(even) {
    background-color: #dddddd;
}
       th
        {
            
            background-color: black;
            color: white;
        }
       #livesearch{
           
          
           
            position: absolute;
    top:200px;
    left:250px;
           
       }
        
        .ui-datepicker-trigger {
   position: absolute;
      top:178px;
    left:400px;        
            
           
}
        
        
        #datepicker1{
             position: absolute;
    top:180px;
    left:250px;
            
            
        }
                #print{
            width: 10%;
             height: 5%;
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
          position: absolute;
    top:160px;
    left:450px;  
        }   
        
        @media print {
  body * {
    visibility: hidden;
  }
  #livesearch, #livesearch * {
    visibility: visible;
      color: black;
      font-size: 20px;
 
    
  }
            
            
            
  #livesearch {
    position: absolute;
    left: 0;
    top: 0;
    
  }
            
        }
            
            
            
            
            .punid{
position: absolute;
    top:230px;
    left:0px;
           font-size:20px;
     
            }
    
    
    </style>
    
    
<head>
    
   
    
    
    
    <input type="text" id="datepicker1" onchange="showResult(this.value)" >
    
    
  <input type="button" value="print" id="print">

    
    <div id="livesearch"></div>
    
 
   

    </head>
    
    
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 

   <link rel="stylesheet" href="jquery-ui/jquery-ui.css">
  <script src="jquery-ui/jquery-ui.js"></script>
  <script>
      
  $( function() {
    $( "#datepicker1" ).datepicker({
        changeMonth:true,
        changeYear:true,
        showOn: 'button',
            buttonImageOnly: true,
            buttonImage: 'images/ifc2.png',
        
        dateFormat:"yy-mm"
    }
    
    
    
    );
  } );
      
      </script>
    
    <script>
    
        
       document.querySelector("#print").addEventListener("click", function() {
           
           
	window.print();
});  
       
        
        
       
    
   </script> 

</html>

<script>
    
    
    
    
function showResult(str) {
    
    
   
    
    
    
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
   
    xmlhttp=new XMLHttpRequest();
  } else { 
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
     //document.getElementById("livesearch").style.border="2px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","MonthwiseReport.php?q="+str,true);
    
    
    
  xmlhttp.send();
    
        
      

}
</script>
    
    


