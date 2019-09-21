<!DOCTYPE html>
<?php 

// $timezone = new DateTimeZone ( "Asia/Kolkata" );
// $date = new DateTime ();

// $date->setTimezone ( $timezone );
// echo $date->format ( 'Y-m-d H:i:s' );


?>
<html>
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
h1 {
    color:darkblue;
    font-family: verdana;
    font-size: 200%;
text-align: center;



    }
    
    
    #img{
        position: absolute;
    top:10px;
    left:270px;
        
    }

li {
    float: left;
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
<p id="time"></p>
<img src="images/n.jpg" id="img"  width="90px" >
<h1>JSKS MANAGEMENT SYSTEM</h1>

<div>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="attendancenew.php">Attendance</a></li>
<li><a href="addemp.php">Employee</a></li>
  
    <li><a href="salaryhome.php">Salary</a></li>  
    
    <li><a href="reporthome.php">Report</a></li>  
    
    <li><a href="Advance.php">Advance</a></li>

<li><a href="expenses.php">Expenses</a></li>

</div>
</ul>
</body>
</html>
<script>

function Timer() {
//   var dt=new Date()
//   document.getElementById('time').innerHTML=dt.toLocaleString('en-US', { hour12: true })
   

   
//    setTimeout("Timer()",1000);
}
Timer();
</script>