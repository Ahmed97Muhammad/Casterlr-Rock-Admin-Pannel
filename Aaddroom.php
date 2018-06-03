<?php
// Start the session
if (!isset($_SESSION))
{
  session_start();
}

$aa = $aaa = $aaaa  = "";

$aa=$_POST["sel1"];
$aaa=$_POST["capacity"];
$aaaa=$_POST["cost"];


try
{
  include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $sql = "INSERT INTO room (Type , Capacity , Cost)
    VALUES ('$aa' , '$aaa', '$aaaa')";
  
    
    $conn->exec($sql);
    
    }
catch(PDOException $e)
    {
    echo "\n";
    echo $sql . "<br>" . $e->getMessage();
    echo "\n";
    }

$conn = null;

?>

<!DOCTYPE html>
<html>
<head>
    <title>CONFIRMATION</title>
</head>
<body>


     <h1 style='margin-left: 80px; color: black; font-size: 30px'>     ROOM ADDED</h1>

<li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="Addroom.php"> <strong>Click Here To Continue</strong> </a> </li>
            

</body>
</html>
