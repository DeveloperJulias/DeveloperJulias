<!DOCTYPE html>
<html>
<?php
$answer = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first = $_POST['first'];
    $second = $_POST['second'];
    $operator = $_POST['operator'];


    switch ($operator) {
        case "Add":
            $answer = $first + $second;

            break;
        case "Subtract":
            $answer = $first - $second;

            break;
        case "Multiply":
            $answer = $first * $second;

            break;
        case "Divide":
            $answer = $first / $second;

            break;
    }
}


function checkPrime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}

echo '<h2>Prime Numbers between 1 and 100</h2> ';
for($num = 1; $num <= 100; $num++) {
	$flag = checkPrime($num);
	if ($flag == 1) {
		echo $num." ";
	}	
}  







?>

<body>

    <h1> Simple-Calculator </h1>
    <form action="" method="post">

        <input type="number" name="first" id="first" value="<?php echo $first; ?>" />
        <b>First Number</b>
<br><br>

        <input type="number" name="second" id="second" value="<?php echo $second; ?>" />
        <b>Second Number</b>
<br><br>

        <input type="" name="Answer" value="<?php echo "$answer"; ?>"/>
        <b>Answer</b>

        <br><br>

        <input type="submit" name="operator" value="Add" />

        <input type="submit" name="operator" value="Subtract" />

        <input type="submit" name="operator" value="Multiply" />

        <input type="submit" name="operator" value="Divide" />

    </form>

</body>

</html>