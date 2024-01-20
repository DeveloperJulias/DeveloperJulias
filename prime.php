


<h2>Prime numbers less than 100</h2>


<?php
    
function prime($number){
    if($number==1)
    return 0;
for($i=2;$i<=$number/2;$i++){

if ($number%$i==0)
return 0;
}
return 1;
}
for($number=2;$number<100;$number++){
    $flag=prime($number);
    if ($flag==1){
    echo  $number ." ";
    }
}









?>