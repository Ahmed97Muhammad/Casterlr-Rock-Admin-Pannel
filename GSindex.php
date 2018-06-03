﻿<?php

if (!isset($_SESSION))
{
  session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Gastronomy Manager Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
<script type="text/javascript" src="js/lib2.js">
</script>
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Adamina_400.font.js"></script>
<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="js/script.js" ></script>
<script type="text/javascript" src="js/kwicks-1.5.1.pack.js" ></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/angular.min.js">
    </script>
    <script type="text/javascript" src="js/validateform.js">
    </script>
    <script type="text/javascript" src="js/dropdownform.js">
    </script>
    <script type="text/javascript" src="js/lib1.js">
    </script>
<script>
  $(document).ready(function() {
    $(".datepicker").datepicker();
  });
  </script>
    <script>

$(document).ready(function(){

$('#cnic').keydown(function(){

  var length = $(this).val().length; 
              
  if(length == 5 || length == 13)
   $(this).val($(this).val()+'-');

 });

});

</script>

</head>
<body id="page1">
<div class="bg1">
  <div class="bg2">
    <div class="main">
      <!-- header -->
      <header>
          <li><a href="GSindex.php"><img src="images/logo.png" height="120px" width="300px" alt=""></a> </li>
      </header>
      <div class="box">
          <nav>
          <ul id="menu">
            <li class="active"><a href="GMindex.php">Add Employees</a></li>
            <li><a href="GSView.php">View Employees</a></li>
            <li><a href="logout.php">Log Out</a></li>
            
            </ul>
        </nav>
        
        <!-- header end -->
        <!-- content -->
        <article id="content">
          <div class="box1">
            <div class="wrapper">
            
                     
<h2 style='text-align: center; color: black; font-size: 30px'>ADMIN PANEL FOR GASTRONOMY MANAGER
    <br>
 <br>
    
  <div id="frm">
  <form action="addemployee2.php" method="post" name="roombook3">
    
        <h2 class="bilal" style="color:#b09012; margin-top: 10px;margin-bottom: 10px ">Add Employee</h2>


      <table style="margin-left: 240px;margin-right: 150px; margin-top: 10px;margin-bottom: 10px;table-layout: fixed;">
         <tr>
          <td> 
            <input type="text" name="firstname" placeholder="First Name" id="firstname" pattern="[A-Za-z]+" maxlength="35" required/>
          </td>
          <td>
            <input type="text" id="lastname" name="lastname" placeholder="Last Name" pattern="[A-Za-z]+" maxlength="35" required/>
          </td>
         </tr>
         <tr>
          <td>
           <input type="text" id="cnic" name="cnic" pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" placeholder="CNIC" minlength="15" maxlength="15" required/>
         </td>
          <td>
              <input type="text" id="Address" name="Address" placeholder="Address" maxlength="40"  required/>
          </td>
         </tr>
         <tr>
          <td>
              <input type="number" id="PhoneNumber" name="PhoneNumber" placeholder="Phone Number" min=0 max="99999999999" required/>
          </td>
          <td>
              <input type="email" id="Email" name="Email" ng-model="Email" placeholder="Email"  required/>
          </td>
          </tr>
          <tr>
          <td>
              <input style="background-color : black; border-radius: 20px; color: white; margin: 20px; padding: 15px" class="datepicker" placeholder="Date Of Birth" name="Dbirth" required/>
          </td>
          
          <td>
              <input type="number" id="Salary" name="Salary" placeholder="Salary" min=0 required/>
          
          </td>
          </tr>

       </table>   
    <input type="submit" value="Submit" class="subbutton" style="margin: 35px;">
    <input type="reset" value="Cancel" class="subbutton" style="margin: 35px;">
   
    
</form>

            </div>
              
    
    
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