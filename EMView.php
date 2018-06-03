<?php

if (!isset($_SESSION))
{
  session_start();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>View Employees</title>
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
          <li><a href="EMindex.php"><img src="images/logo.png" height="120px" width="300px" alt=""></a> </li>
      </header>
      <div class="box">
          <nav>
          <ul id="menu">
            <li><a href="EMindex.php">Add Employees</a></li>
            <li class="active"><a href="EMView.php">View Employees</a></li>
            <li><a href="logout.php">Log Out</a></li>
            
            </ul>
        </nav>
        
        <!-- header end -->
        <!-- content -->
        <article id="content">
          <div class="box1">
            <div class="wrapper">
            
                     
<h2 style='text-align: center; color: black; font-size: 30px'>EMPLOYEE DETAILS


 <?php

echo "<table style='border: solid 1px black; font-size:15px;'>";


class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

try {

include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT person.CNIC , FNAME , LNAME , Address , PhoneNumber , Email ,employee.Emp_ID, employee.Department , Salary , DOB , H_Date FROM person , employee  where person.CNIC = employee.CNIC and employee.Department = 'EVENTS' and employee.Emp_ID not in (select manager.Emp_ID from manager)");

    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  
    if ($stmt->rowCount() == 0)
      {
        
        echo "<br><br>";
        echo "NO RECORDS";

       }
   else
   {
        echo "<tr><th>CNIC</th><th>Fname</th><th>Lname</th><th>Add</th><th>PNumber</th><th>Email</th><th>EMP_ID</th><th>Dept</th><th>Sal</th><th>DOB</th><th>HireDate</th></tr>";


    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
    {
        echo $v;
    }
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 


    
    <br>
    <br>
    
    </h2>
              
    
    
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