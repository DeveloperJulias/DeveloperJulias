<?php
 function area_rectangle($length,$width){

 return $length*$width;

 }
 echo "The area of arectangle if the length is  21  and width is 16  is ";
echo area_rectangle(21,16);
echo "<br />";
//echo "from string to anarray";

echo "<h2>From Astring to an array</h2>";

$r="Burch Jr Philip.H The American establishment research in political economy 6(1983) 83-156"
;
echo "$r";
echo "<br>";
echo "<br>";


// print_r( str_word_count( $r, 1, '1..9ü' ) );
var_dump( str_word_count( $r, 1, '1..9ü' ) );



// var_dump($arr);





?>