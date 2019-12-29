<!DOCTYPE html>
<html>
<head>
<style>

  table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  th {
    border: 1px solid #ddd;
    padding: 8px;
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
  }

  td {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #read {
    background-color: #f2f2f2;
  }

</style
</head>
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
$res = $conn->query($sql);

if($res->num_rows > 0)
{
  while($row = $res->fetch_assoc())
  {
      //echo "<br> id: ". $row["ID"]. " - Name: ". $row["F_NAME"]. " " . $row["L_NAME"] . "<br>";
      if($row["READ"] == 1)
      {
        echo "<tr id='read'>";
      }
      else {
        echo "<tr onclick=update_read($row['ID']);>";
      }
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

/*function update_read($id)
{
  echo "update_read called <br>";
    $sql = "UPDATE USER_DETAILS SET READ=1 WHERE id=".$id;
    if($conn->query($sql) === TRUE)
    {
      echo "Record updated for id ".$id." successfully";
    }
    else
    {
      echo "Error updating record: " . $conn->error;
    }
}*/

$conn->close();
?>

<script>
  function update_read(var id)
  {

  }
</script>
</body>
</html>
