<?php
// Start the session
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "youthopia";
$conn = new mysqli($servername, $username, $password, $dbname);
$ids=$_SESSION["tid"];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT stage FROM entries where id=$ids";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
$comp=$row["stage"];
$_SESSION["s"]=$comp;
$conn->close();
?>
<html>
<head>
<script>
// window.history.forward();
  var s="<?php echo $_SESSION["s"];?>";
 
 window.onload=function init(){
if(s=="1")
{
 //window.location="/Sher/lift.php";
}
else if(s=="2")
{
  window.open("/Sher/lift2.html","first");
}
else if(s=="3")
{
  window.open("/Sher/lift3.html","first");
}
else if(s=="4")
{
  window.open("/Sher/lift4.html","first");
}
else if(s=="5")
{
  window.open("/Sher/end.html","first");
}
else if(s=="6")
{
 
}

}
 
                                   
</script>


</head>
<frameset rows="10%,*">
<frame name="first" src="leader.html">
<frame name="second">
</frameset>
</html>
