<?php
// Start the session
session_start();
?><html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$id = $_POST['user'];
$pass = $_POST['pass'];
$dbname = "youthopia";

// Set session variables
$_SESSION["tid"] =$id ;
$_SESSION["answer"]="food trucks";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,password,points,stage FROM entries where id=$id";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$comp=$row["password"];
$p=$row["points"];
$st=$row["stage"];

//points session
$_SESSION["points"] =$p ;
echo $_SESSION["points"];
$_SESSION["stage"]=$st;
if($comp==$pass)
{

   header("Location:/Sher/lift.php");
   exit;


    }
else {
    //echo "Invalid Id/Password!";
    header("Location:/Sher/login.html");
   exit;
}
$conn->close();




?>
</body>
<html>