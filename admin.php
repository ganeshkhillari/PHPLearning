<!DOCTYPE html>
<html>
<body>
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
echo "test 2";

if($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "<br> id: ". $row["ID"]. " - Name: ". $row["F_NAME"]. " " . $row["L_NAME"] . "<br>";
    }
} else {
    echo "0 results";
}
/*if ($res->num_rows > 0)
{
	echo "<table>";
  echo "<tr>";
  echo "<th>First Name</th>";
  echo "<th>Last Name</th>";
  echo "<th>EMAIL</th>";
	echo "<th>Mobile number</th>"
  echo "</tr>";
  while($row = $result->fetch_assoc())
	{
  	echo "<tr>";
    echo "<td>".$row['F_NAME']."</td>";
    echo "<td>".$row['L_NAME']."</td>";
    echo "<td>".$row['EMAIL']."</td>";
		echo "<td>".$row['MB_NO']."</td>";
    echo "</tr>";
  }
  echo "</table>";
}
else
{
  echo "No matching records are found.";
}*/

?>

</body>
</html>
