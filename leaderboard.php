<html>
<head>
<style>
table,td{
border:1px solid black;
padding:15px;
border-bottom:1px solid #ddd;
font-size=20px;
}
tr:nth-child(even){
background-color:#f2f2f2;
}

</style>
</head>
<body>
<table>
<tr>
<td>RANK</td>
<td>TEAM ID</td>
<td>SCORE</td>
</tr>

<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "youthopia";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,points FROM entries order by points desc";
$result = $conn->query($sql);
$rank=1;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>{$rank}</td>
                      <td>{$row['id']}</td>
                      <td>{$row['points']}</td></tr>";
$rank=$rank+1;

    }
} else {
    echo "0 results";
}
$conn->close();






?>
</table>
</body>
</html>