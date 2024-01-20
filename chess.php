<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>chess.com</title>
</head>
<body style="text-align: left;">
  <h3 style="color:blueviolet">Enjoy Chess!@omesoft!</h3>
  <table width="400px" cellspacing="0px"cellheight="30px"cellwidth="30px" border="1px">
  <?php
for($row=1;$row<=8;$row++)
{

echo "<tr>";
for($col=1;$col<=8;$col++){


  $total=$row+$col;
  if($total%2==0){
echo "<td height=30px width=30px bgcolorwhite=></td>";



  }
  else{


    echo "<td height=30px width=30px bgcolor=black ></td>";
  }

}
echo "</tr>";


}



?>




</table>
<h4>For more information visit <b style="color:red">https://www.omesoftgames.com</b>&get your favourite games</h4>
</body>
</html>
