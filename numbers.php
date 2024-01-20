 <form method="post" action="">

	<input type="number" name="number"  placeholder="in put your number">
	<input type="submit" name="submitBtn" value="Submit">
</form> 
<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
	echo "<h1>", "Type of the number", "</h1>";
$number = $_POST['number'];
	if($number % 2 == 0) {
		echo "$number is an even number";
	} else {
		echo "$number is  an odd number";
	}
}


?>
