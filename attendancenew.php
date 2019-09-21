<!DOCTYPE html>
<html>

   <?php include 'headertop.php';
   require "dbconn.php";
  
?>
      <script src="jquery.js"></script>
      <link href="assets/css/components.css" rel="stylesheet" type="text/css" />

<link href="assets/css/bootstrap.min.css" rel="stylesheet"
	type="text/css" />
<style>

a:hover{
    text-decoration: none;
}
.radiolabel{
    padding-right: 30px;
}
#tbUser{
    margin:50px;
}
td,th{
    border:1px solid #ccc ;
    padding:0px;
    margin:0px;
    padding-left:20px;
padding-right:20px;
 
}
th{
    text-align: center;
    padding:10px;
}
tr:nth-child(even) {background-color: #f2f2f2;}
.maincontent{
    float:left;
}
#absents{
    float:right;

    
   
}
#half{
    position: fixed;
    top: 0;
    padding-top: 112px;
    padding-bottom: 0;
    right: 0;
    height: 100%;
    width: 220px;
    background-color: transparent;
}
</style>
<div style="clear:both;"></div>
<div class="maincontent">
<form action="save.php" method="POST">
  <?php

//$sql6 ="SELECT * FROM jsksnewemp INNER JOIN `attendence` on jsksnewemp.empid = attendence.attempid  WHERE attendence.attdate=CURDATE() ";
 $sql6="SELECT * FROM attendence where attdate=CURDATE() ";
$result=mysqli_query($conn,$sql6);

 $count=mysqli_num_rows($result);

 if($count!=0){

   header('location: home.php');

  }



   $query= "Select * from employee where flag='0'";
    
    $result=mysqli_query($conn,$query) or die(mysqli_error($conn));

    echo "<table id='tbUser'>";

  echo '<th>EMP ID</th><th>NAME</th><th>STATUS</th>';
  
    while($row=mysqli_fetch_array($result))
    {
     
    
       echo "<tr class='ok'><td class='empid'>$row[empid]</td><td>$row[empname]</td>";
     
    echo ' <td>  <div class="radio">';
          
    echo '<input type="radio" name="edu_status['.$row[empid].']" class="present" id="pre'.$row[empid].'" value="1" onchange=absent("'.$row['empid'].'") checked /><label class="radiolabel"> Present</label> ';
   echo '<input type="radio" name="edu_status['.$row[empid].']" class="absent" id="abs'.$row[empid].'" value="0" onchange=absent("'.$row['empid'].'")  /><label class="radiolabel">Absent</label>';
   
   echo '<input type="radio" name="edu_status['.$row[empid].']" class="half" id="half'.$row[empid].'" value="0.5" onchange=absent("'.$row['empid'].'")  /><label class="radiolabel">HalfDay</label>';                               	
    echo'</div></td></tr>';
   
    
    }
    
    echo "</table>"
    ?>
    <input type="submit">
    </form>


</div>
<div id="absents">

<div id="half">

</div>
</div>


    </html>

    
    <script>
  $(window).scroll(function(){
    var h = 140;    
    var $scrollTop = $(window).scrollTop();

    if($scrollTop < 250 && $scrollTop > 20){
        $("#half").css({
          'paddingTop': h - $scrollTop + "px" // Subtract h from scrollTop
        
        });
    }

   
});

function absent(val){
   // var v= document.getElementById("studying" + val);

  //console.log(v);
//var ab=[];
//ab=["edu_status",val];

//var energy = ab.join();
//my_string = energy.replace(/,/g,"[");
//var str2 = "]";
//var res = my_string.concat(str2);
//var rates= document.getElementsByName(res);
//console.log(rates);
var rates= document.getElementsByName("edu_status["+val+"]");

 

 var rate_value;
for(var i = 0; i < rates.length; i++){
    if(rates[i].checked){
        rate_value = rates[i].value;
       
    }
}

if (rate_value==1) {
    
    rates[0].parentNode.parentNode.parentNode.setAttribute("class", "ok");
} else if(rate_value==0) {
    rates[1].parentNode.parentNode.parentNode.setAttribute("class", "ok checked");
}

else{
    rates[2].parentNode.parentNode.parentNode.setAttribute("class", "ok halfday");
}

hello();

}



function hello(){
  var divab=  document.getElementById("half");
  divab.innerHTML="";   
    var str6 = document.querySelectorAll('.checked');
        for (var i = 0; i < str6.length; i++) {
            var newElem = document.createElement("BR");
         
            divab.appendChild(newElem);
            var str = str6[i].childNodes[0].innerText + str6[i].childNodes[1].innerText ;
            document.getElementById("half").innerHTML+=str;
         }

         var str7 = document.querySelectorAll('.halfday');
        for (var i = 0; i < str7.length; i++) {
            var newElem = document.createElement("BR");
         
            divab.appendChild(newElem);
            var str = str7[i].childNodes[0].innerText;
            document.getElementById("half").innerHTML+=str;
         }

}

    </script>


    