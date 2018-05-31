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
         
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "youthopia";
$id = $_POST['jTextField1'];
$gp1 = $_POST['jTextField2'];
$gp2 = $_POST['jTextField3'];
$gp3 = $_POST['jTextField4'];
$contact=$_POST['jTextField5'];
$pass=$_POST['jPasswordField1'];
$points=$_POST['jTextField6'];
$point=(int)$points;

// Set session variables
$_SESSION["tid"] =$id ;
$_SESSION["points"] =$point ;
$_SESSION["answer"]="food truck";
$_SESSION["stage"]=1;

echo "Session variables are set.";
//echo gettype($point);
//echo gettype($_SESSION["points"]);
        

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query ='insert into entries(id, gp1, gp2,gp3,password,mob,points,stage) values ('.$id.', "'.$gp1.'", "'.$gp2.'", "'.$gp3.'","'.$pass.'","'.$contact.'","'.$points.'","'.$_SESSION["stage"].'")';


if ($conn->query($query) === TRUE) {
   
 header("Location:login.html");
   exit;
   
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

  


?>


        
    </body>
</html>
