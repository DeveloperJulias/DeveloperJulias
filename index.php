<?php

// // php datatype
// // strings
// $name = 'Julias';
// echo $name;
// // integer
// echo "<br />";
// $number = 123;
// echo $number;
// // float
// $float = 123.1233;
// // double
// $double = 1233344.334555555555;
// boolean
// array
// collection items
echo "<br />";
// $array = array(1, 2, 3, 4);
// $array = ['apple', 'orange', 'eggs', 'bananas'];
// // associative array
// $food = ['Julias' => 'Posho', 'John Doe' => 'Rice', 'Jane Doe' => 'Matooke', 'Allan Muntu' => 'Meat'];
// echo "<br />";

// // echo $food['meat'];

// // $food['Jane Smith'] = 'Chicken';

// var_dump($food);

// object
// future
// Arithmetic operators
// multiplication, division, subtraction, additon, modulus

// echo "<br />";

// // $a = 10;
// // $b = 3;

// // echo $a % $b;
// echo "<br />";

// logical operators
// AND && ampersand
// OR || pipes

// conditions
// if, if-else, else;

// $name = 'Julia';
// $age = 109;

// if ($name == 'Julias') {
//     echo "That's my name";
// } else {
//     echo "That's not mine, that is {$name}";
// }



// echo "<br />";

// Loops - Repeat
// Examples
// While loop
// do...while loop
// for loop
// foreach loop
// break
// continue

// while
// $i = 1;
// while ($i == 7) {
//     echo $i++;
//     if ($i < 3) {
//         continue;
//     }

//     echo "<br />";
// }

// do...while
// $i = 1;
// do {
//     echo $i++;
//     echo "<br />";
// } while ($i <= 8);

// for looop
// for(expression1, expression2, expression3){
//     statement
// }

// for ($j = 1; $j <= 12; $j++) {
//     echo "This number is: $j";
// //     echo "<br />";
// // }

// // foreach
// $fruits = ['banana', 'apple', 'mango', 'Orange','pineapples','coconut'];

// foreach ($fruits as $fruit) {
//     echo $fruit;
//     echo "<br />";
// }

echo "<b>default argunent value</b>";
function setheight($minheight=50){
	echo "The height is:$minheight <br />";

}
echo "<br />";
 setheight(345);
 setheight();
 setheight(233);
 setheight(200);
echo "<br />"; 

function familyname($fname){
	echo "$fname is already countered<br />";
}
familyname('Ab ');
familyname('Kato');
familyname('Tania');
familyname('Kamp');
familyname('John');

echo "<br /";

//echo "<b>two arguments</b>"

function family_tribe($tribe,$year){
	
echo "This family is of $tribe which existed in $year";
echo "<br />";

}
family_tribe("Banyankole", "1996");
family_tribe("Banyarwanda", "1897");
family_tribe("Bafumbira", "1989");
family_tribe("Bakonjo", "1889");
family_tribe("Basoga", "2000");
family_tribe("Bagisu", "2005");
family_tribe("Batooro", "1822");

echo "<br />";

echo "<b>Returning values</b>";
function sum($x,$y){
	
	$f=$x+$y;
	echo "<br />";
	return $f;
	
}

echo "6+7=" .sum(6,7);echo "<br />";
echo "61+17=" .sum(61,17);echo "<br />";
echo "16+11=" .sum(16,11);echo "<br />";
echo "12+77=" .sum(12,77);echo "<br />";
echo "67+67=" .sum(67,67);



echo "<br />";

echo "<b>pass_by_reference argument</b>";

function add_forty(&$value){
$value+=40;
}
$num=5;
add_forty($num);
echo "<br />";
echo $num;

echo "<br />";

function family($lastname,...$firstname){

	$txt = "";
	$len=count($firstname);
	for($i=0; $i < $len; $i++) {
	$txt=$txt."Hi,$firstname[$i] $lastname</br>";
	

}

return $txt;
}
	

$a =  family("Muyambi","Julie","Julias","lovin",);


echo $a;

// function addnumbers(int $w, int $y){
// 	return $w + $y;
// }
// echo addnumbers(5,"5 days");

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, 5 ); 
echo "<br />";

function addNumber(float $a, float $b) :float{
	return $a + $b;
  }
  echo addNumber(8.9, 0.7 ); 

echo "\n";

// // Prints the day
// echo date("l") . "<br>";

// // Prints the day, date, month, year, time, AM or PM
// echo date("l jS \of F Y h:i:s A") . "<br>";

// // Prints October 3, 1975 was on a Friday
// echo "Oct 3,1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br>";

// // Use a constant in the format parameter
// echo date(DATE_RFC822) . "<br>";

// // prints something like: 1975-10-03T00:00:00+00:00
// echo date(DATE_ATOM,mktime(0,0,0,10,3,1975));





?>
