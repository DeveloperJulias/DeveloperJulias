<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
  <h1>Electricity Bill Calculator</h1>
    <form method="post" action="">
  <input type="number"  step="0.1" name="units" placeholder="Enter  the no.of units">
  <input type="submit" value="Submit" name="submitBtn">
</form>

 
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
  $i=$_POST['units'];
  if($i<=50){
    echo "Total amount of $i costs UGX "; 
    echo $i*3.50;
    
  
  }elseif($i>50 && $i<=100){
    echo " Total amount of $i units costs UGX";
    echo $i*4.0; 
  }
  elseif($i>100 && $i<=250){
  
    echo "Total amount of $i units costs UGX ";
    echo $i*5.20;
  }
  elseif($i>250){
  
    echo "Total amount of $i units costs UGX";
    echo $i*6.50;
  }


}


?>
</body>
</html>


