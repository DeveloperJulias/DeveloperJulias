

<h2>Division_Table</h2>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  background-color: orange;
  color: white;
}
</style>

<?php 
$divisors = [1,2,3,4,5,6,7,8,9,10,11,12];
$factor = 1;


echo "<table>"; 
foreach($divisors as $divider_number){
echo"<th>$divider_number</th>";
}

while($factor<=12){
   

    
 echo "<tr>";
 for($i=0; $i < 12; $i++ ){
        echo"<td style=\"color:black\">";
        echo "$divisors[$i] / $factor=", round($divisors[$i] / $factor,1);
        echo "</td>";
   
    }
    "</tr>";    
    $factor++;

    
 }
 echo "</table>";
?>

</body>
</html>

