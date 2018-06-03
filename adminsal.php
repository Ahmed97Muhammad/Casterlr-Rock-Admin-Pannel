<?php

if (!isset($_SESSION))
{
  session_start();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>View Salary</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">

<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Adamina_400.font.js"></script>
<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="js/script.js" ></script>
<script type="text/javascript" src="js/kwicks-1.5.1.pack.js" ></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>

<script>
  $(document).ready(function() {
    $(".datepicker").datepicker();
  });
  </script>
    
</head>
<body id="page1">
<div class="bg1">
  <div class="bg2">
    <div class="main">
      <!-- header -->
      <header>
          <li><a href="adminadd.php"><img src="images/logo.png" height="120px" width="300px" alt=""></a> </li>
      </header>
      <div class="box">
          <nav>
          <ul id="menu">
            
            <li><a href="adminadd.php">+Manager</a></li>
            <li><a href="adminview.php">Employee</a></li>
            <li><a href="cust.php">Customer</a></li>
            <li><a href="admindelete.php">-Employee</a></li>
            <li  class="active"><a href="adminsal.php">SalRecords</a></li>
            <li><a href="addcname.php">+Cname</a></li>
            <li><a href="logout.php">LogOut</a></li>
                      
            </ul>
        </nav>
        
        <!-- header end -->
        <!-- content -->
        <article id="content">
          <div class="box1">
            <div class="wrapper">

<h2 style='text-align: center; color: black; font-size: 30px'>SALARY DETAILS</h2>
            
                     
<h2 style='color: #b09012; font-size: 30px'>EVENT EMPLOYEES</h2>


 <?php

try {

include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT sum(Salary) from employee where Department = 'EVENTS' ");

    $stmt->execute();
    
    $count = $stmt->fetchColumn();
  
   if ($count == "")
      {
      echo "<h4 style='color: #b09012; font-size: 30px'>SALARY: 00000</h4> ";
       }
    else
    {
      echo "<h4 style='color: #b09012; font-size: 30px'>SALARY: $count</h4> ";
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?> 

    <br>
    <br>
    <br>

<h2 style='color: #b09012; font-size: 30px'>ROOM MANAGEMENT EMPLOYEES</h2>


 <?php

try {

include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT sum(Salary) from employee where Department = 'ROOM BOOKING' ");

    $stmt->execute();
    
    $count = $stmt->fetchColumn();
  
  if ($count == "")
      {
      echo "<h4 style='color: #b09012; font-size: 30px'>SALARY: 00000</h4> ";
       }
   else
    { 
        echo "<h4 style='color: #b09012; font-size: 30px'>SALARY: $count</h4> ";
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?> 


<br>
<br>
<br>

    <h2 style='color: #b09012; font-size: 30px'>GASTRONOMY EMPLOYEES</h2>


 <?php

try {

include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT sum(Salary) from employee where Department = 'GASTRONOMY' ");

    $stmt->execute();
    
    $count = $stmt->fetchColumn();
  
    if ($count == "")
      {
      echo "<h4 style='color: #b09012; font-size: 30px'>SALARY: 00000</h4> ";
       }
   else
    {
      echo "<h4 style='color: #b09012; font-size: 30px'>SALARY: $count</h4> ";
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?> 

<br>
<br>
<br>
            </div>
            <div class="pad">
              <div class="line1">
              </div>
            </div>
        </div>  
          <div class="pad">
            <div class="wrapper line3">
              
            </div>
          </div>
        </article>
        <!--content end-->
      </div>
    </div>
  </div>
</div>
    
     <div class="main">
  <!-- footer -->
  <footer>
    <div class="col2">
        
        <h2>LOCATION 
        </h2>
        <p>
            SHAH LATIF TOWN, NEAR BHAINS COLONY KARACHI,PAKISTAN
        </p>
        <h2>CONTACT NUMBER
        </h2>    
        <p>
            021-987654321
        </p>
    </div>
    <!-- {%FOOTER_LINK} -->
  </footer>
  <!-- footer end -->
</div>
   
    
    
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(document).ready(function () {
    $('.kwicks').kwicks({
        max: 500,
        spacing: 0,
        event: 'mouseover'
    });
})
</script>
</body>
</html>