<?php
// Start the session
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

 $ids=(int)$_SESSION["tid"];

 echo $ids ;        
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "youthopia";






// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql="select * from entries where id=$ids";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$comp=$row["points"];
$pin=$comp;
$pin=$pin-100;
$_SESSION["points"] =$pin ;

 
$query="update entries set points=".$pin." where id=".$ids;

if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

header("Location:/Sher/hint4.html");
exit;

?>

        
    </body>
</html>
