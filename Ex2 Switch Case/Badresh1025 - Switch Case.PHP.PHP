<!DOCTYPE html>
<html> 
<head> 
	<title>Arithmetic Operations </title>
</head>
<body>

<!-- Header Section -->
<p><center><h1> BADRESH - 211211101025 <br><br> Arithmetic Operations </h1></center></p>

	<!-- Form Section -->
	<form method="POST" action="">
		<center> 
		
			<!-- Input fields for the numbers and operation -->
			Enter the first Number:</h4>
			<input type="text" name="num1" required> <br><br><br>
			Enter the second Number:
			<input type="text" name="num2" required> <br><br><br>	
			Select an Operation:
			<select name="operation">
				<option value="add">Addition</option>
				<option value="subtract">Subtraction</option>
				<option value="multiply">Multiplication</option>
				<option value="divide">Division</option>
				<option value="modulus">Modulus</option>
			</select>
			<br><br>
			
			<!-- Submit button -->
			<input type="submit" value="Calculate">
		</center>
	</form>
	
	
	<!-- PHP Result Section -->
	<?php
	
	// Error reporting for debugging
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	
	// Check if the form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$a=$_POST["num1"];
		$b=$_POST["num2"];
		$operation=$_POST["operation"];
		
		// Check if the input values are numeric
		if(is_numeric($a) && is_numeric($b)){
			
			
			// Perform the selected operation
			switch($operation){
				case "add":
					$result = $a + $b;
					echo "<center><p><h1>The result of addition is:$result</h1></center></p>";
					break;
				case "subtract":
					$result = $a - $b;
					echo"<p><center>The result of subtraction is: $result</center></p>";
					break;
				case "multiply":
					$result = $a * $b;
					echo"<p><center>The result of Multiplication is: $result</center></p>";
					break;
				case "divide":
					if($b != 0){
						$result=$a / $b;
						echo"<p><center>The result of Division is: $result</center></p>";
					}
					else {
						echo"<p><center>Error: Divison by zero is not allowed.</center></p>";
					}
					break;
				case "modulus":
					$result=$a % $b;
					echo"<p><center>The result of Modulus is: $result</center></p>";
					break;
				default:
					echo"<p><center><h1> Please select a valid operation.</h1> </center></p>";
			}
		}
	}
	?>
</body>
</html>