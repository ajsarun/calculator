<html>
<body>
<?php 
	$number1 = $_GET["num1"];
	$number2 = $_GET["num2"];
	$result = 0;
	$operation = "";
	if (isset($_GET["add"])) { 
		$result = $number1 + $number2;
		$operation = "Addition";
	} elseif(isset($_GET["sub"])) {
		$result = $number1 - $number2;
		$operation = "Subtraction";
	} elseif(isset($_GET["mul"])) {
		$result = $number1 * $number2;
		$operation = "Multiplication";
	} else {
		if ($number2 == 0) {
			$result = "N/A";
			$operation = "Fail to calculate";
		}
		else {
			$result = $number1 / $number2;
			$operation = "Division";	
		}
	}
	
	echo "<h1>";
	echo $operation.": The result is " .$result;
	echo "</h1>";  
?>
</body>
</html>
