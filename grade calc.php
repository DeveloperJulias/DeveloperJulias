

<h1>St andrews Grading System</h1>
<form method="post" action="">

	<input type="number" step="0.1" name="grade"  placeholder="in put marks">
	<input type="submit" name="submitBtn" value="Submit">
</form>




<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$grade2 = $_POST['grade'];


	switch ($grade2) {
		case $grade2 <= 100 && $grade2 >= 80:
			echo "D1";
			echo "<h3 style='color:blue'>", "Excellent", "</h3>";
			break;
		case $grade2 <= 79 && $grade2 >= 75:
			echo "D2";
			echo "<h3 style='color:blue'>", "Very good", "</h3>";
			echo "\n";
			break;
		case $grade2 <= 74 && $grade2 >= 62:
			echo "C3";
			echo "<h3 style='color:blue'>", "Good", "</h3>";
			echo "\n";
			break;

		case $grade2 <= 63 && $grade2 >= 54:
			echo "C4";
			echo "<h3 style='color:blue'>", "Fair", "</h3>";
			echo "\n";
			break;

		case $grade2 <= 55 && $grade2 >= 51:
			echo "C5";
			echo "<h3 style='color:blue'>", "Tried", "</h3>";
			echo "\n";
			break;


		case $grade2 <= 50 && $grade2 >= 44:
			echo "C6";
			echo "<h3 style='color:blue'>", "Fair Trial", "</h3>";
			echo "\n";
			break;

		case $grade2 <= 45 && $grade2 >= 41:
			echo "P7 ";
			echo "<h3 style='color:blue'>", "Work Hard", "</h3>";
			echo "\n";
			break;

		case $grade2 <= 40 && $grade2 >= 30:
			echo "P8";
			echo "<h3 style='color:blue'>", "Poor", "</h3>";
			echo "\n";
			break;
		case $grade2 <= 29 && $grade2 >=00:
			echo "F9";
			echo "<h3 style='color:blue'>", "Very poor", "</h3>";
			echo "\n";
			break;

		default:
			echo "<b style='color:red'>", " Error warning!
	Please Try again a number from 0-100.", "</b1>";
	}
}
