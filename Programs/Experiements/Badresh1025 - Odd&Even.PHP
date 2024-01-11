<!DOCTYPE html>
<html>
<head>
	<title> Odd or Even Checker </title>
</head>
<body>
<p><h1><center> BADRESH - 211211101025 <br><br> Odd & Even Number Checker </center></h1></p>
<form method="post" action="">
	<center><H1>Enter a Number:</H1>
	<input type="text" name="number" required>
	<input type="submit" value="check"></H1></center>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
	$number=$_POST["number"];
	if(is_numeric($number)){
		if($number%2==0){
			echo"<p><center><h3> $number is an even number.</h3></p></center>";
		}
		else {
			echo"<p><center><h3>$number is an odd number.</h3></p></center>";
		}
	
	}
		else{
			echo"<p><center><h3>Please enter a valid numeric value.</h3></p></center>";
		}
}
?>
</body>
</html>