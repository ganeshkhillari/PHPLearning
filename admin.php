<!DOCTYPE html>
<html>
<body>
<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>EMAIL</th>
    <th>Mobile number</th>
  </tr>
<?php

$servername = "localhost";
$username = "u331594503_ganeshkhillari";
$password = "admin";
$dbname = "u331594503_users";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn)
{
  echo "connection failed";
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM USER_DETAILS";
echo "test1".$sql."<br>";
$res = $conn->query($sql);

if($res->num_rows > 0)
{
  while($row = $res->fetch_assoc())
  {
      //echo "<br> id: ". $row["ID"]. " - Name: ". $row["F_NAME"]. " " . $row["L_NAME"] . "<br>";
      echo "<tr>";
      echo "<td>".$row['F_NAME']."</td>";
      echo "<td>".$row['L_NAME']."</td>";
      echo "<td>".$row['EMAIL']."</td>";
  		echo "<td>".$row['MB_NO']."</td>";
      echo "</tr>";
  }
}
else
{
    echo "0 results";
}
?>

</body>
</html>
