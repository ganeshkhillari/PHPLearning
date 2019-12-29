<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea, input[type=number], input[type=email] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
	margin-top: 6px;
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
    <script>
        function validate_form()
        {
            var fname = document.getElementById("fname").value;
            if(fname.length > 32)
            {
                alert("first name should not be greater than 32");
                return false;
            }

            var lname = document.getElementById("lname").value;
            if(lname.length > 32)
            {
                alert("last name should not be greater than 32");
                return false;
            }

            var mobile = document.getElementById("mobile").value;
            if(mobile.length > 10)
            {
                alert("mobile number should not be greater than 10");
                return false;
            }
        }
    </script>
<!--
    <h2>Registration Form</h2>

    <form action="registration_form.php" method="POST">

        ID: <input type="number" name="id"><br>
        First Name:<input id="fname" type="text" name="first_name" placeholder="enter first name" required><br>

        Last Name:<input id="lname" type="text" name="last_name" placeholder="enter last name" required><br>

        E-mail:<input type="email" name="email" placeholder="enter email" required><br>

        MBNo.:<input id="mbn" type="number" name="mobile_number" placeholder="enter mobile number" required><br>

        <input type="submit" onclick="return validate_form();" value="Submit">

    </form>-->
		<div class="container">
  		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    		<div class="row">
      		<div class="col-25">
        		<label for="fname">First Name</label>
      		</div>
      			<div class="col-75">
        		<input type="text" id="fname" name="firstname" placeholder="Your name.." required>
      		</div>
    		</div>
    		<div class="row">
      		<div class="col-25">
        		<label for="lname">Last Name</label>
      		</div>
      		<div class="col-75">
        		<input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
      		</div>
    		</div>
    		<div class="row">
      		<div class="col-25">
        		<label for="email">Email</label>
      		</div>
      		<div class="col-75">
        		<input type="email" id="email" placeholder="your email.." name="email" required>
      		</div>
    		</div>
    		<div class="row">
      		<div class="col-25">
        		<label for="Mobile">Mobile</label>
      		</div>
      		<div class="col-75">
        		<input type="text" id="mobile" placeholder="Your mobile number.." name="mobile" required>
      		</div>
    		</div>
    		<div class="row">
      		<input type="submit" onclick="return validate_form();" value="Submit">
    		</div>
  		</form>
		</div>

		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$firstname = $_POST["firstname"];
				$lastname = $_POST["lastname"];
				$email = $_POST["email"];
				$mobile = $_POST["mobile"];

				echo "first name : ".$firstname."<br>";
				echo "last name : ".$lastname."<br>";
				echo "email : ".$email."<br>";
				echo "mobile number : ".$mobile."<br>";

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
				echo "Connected successfully<br>";
				$random = rand(10,100);
				$sql = "INSERT INTO USER_DETAILS(ID,F_NAME,L_NAME,EMAIL,MB_NO,DESCRIPTION) VALUES($random,'$firstname','$lastname','$email','$mobile','test')";

				if ($conn->query($sql) === TRUE)
				{
    			echo "New record created successfully<br>";
				}
				else
				{
    			echo "Error: " . $sql . "<br>" . $conn->error;
				}

				$vars = array_keys(get_defined_vars());
				for ($i = 0; $i < sizeOf($vars); $i++)
				{
    			unset($$vars[$i]);
				}
				unset($vars,$i);
				$conn->close();
			}
		?>
</body>
</html>
