<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
</head>
<body>
    <table cellpadding="0px" cellspacing="30px"cellwidth="30px" border="1px" width="400px" cellheight="30px">
<?php
for($row=1;$row<=8;$row++)
{

  echo  "<tr>";
    for($col=1;$col<=8;$col++){
$total=$row+$col;
if($total%2==0){

echo "<td>height=30px width=30px bgcolor=#fffff</td>";



}
else{
   
 
echo "<td>height=30px width=30px bgcolor=#000000</td>";  


}

    }
    echo "</tr>";
}


?>


    </table>
</body>
</html>