<!DOCTYPE html>
<?php 

// $timezone = new DateTimeZone ( "Asia/Kolkata" );
// $date = new DateTime ();

// $date->setTimezone ( $timezone );
// echo $date->format ( 'Y-m-d H:i:s' );


?>
<html>
<!-- <link rel="shortcut icon" href="images/n.jpg"> -->
    <title>JSKS management system</title>
<style>
body{


    margin:0px;
    padding:0px;

}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
.headertop h1 {
    margin:15px;
    padding:0px;
    float:left;
    color:darkblue;
    font-family: verdana;
    font-size: 200%;
text-align: center;

}
.headertop{
    margin:0px;
    padding:0px;
  
}
    .headertop img{
        margin:5px;
float:left;
margin-left:150px;
margin-right:100px;
    }
   #date,#time{
        float:right;
        margin:20px;
    }
    
    /* #img{
        position: absolute;
    top:10px;
    left:270px;
        
    } */

li {
    float: left;
}
.posfix{
  

}
li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #4CAF50;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<body>
<div class="posfix">
<div class="headertop">
<img src="images/n.jpg" id="img"  width="90px" >
<h1>JSKS MANAGEMENT SYSTEM</h1>

<!-- <p id="date"></p>
<p id="time"></p> -->

</div>
<div style="clear:both;"></div>
<div>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="attendancenew.php">Attendance</a></li>
<li><a href="addemp.php">Employee</a></li>
  
    <li><a href="salaryhome.php">Salary</a></li>  
    
    <li><a href="reporthome.php">Report</a></li>  
    
    <li><a href="Advance.php">Advance</a></li>

<li><a href="expenses.php">Expenses</a></li>
</ul>
</div>
</div>
<div style="clear:both;"></div>
</body>
</html>
<script>

// function Timer() {
//   var dt=new Date();
//   var today = new Date();           

//             var formattedtoday = today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();
//             document.getElementById('date').innerHTML=formattedtoday;
//   document.getElementById('time').innerHTML=dt.toLocaleString('en-US', {hour:"numeric" ,minute:"numeric",second:"numeric",hour12: true });
   
 
   
//    setTimeout("Timer()",1000);
// }
// Timer();
</script>