<?php

echo "start";

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
/*
$sql = "SELECT * FROM USER_DETAILS";
$res = $conn->query($sql);
if ($res->num_rows > 0)
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
  mysqli_free_res($res);
}
else
{
  echo "No matching records are found.";
}*/
?>
