


<h2>Muliplication_Table</h2>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  background-color: violet;
  color: black;
}
</style>

<?php 



 
$multiplication_table_of_12 = [1,2,3,4,5,6,7,8,9,10,11,12];
$factor = 1;
echo "<table>";
foreach($multiplication_table_of_12 as $multiples){
    echo "<th>$multiples</th>";
};

while($factor<=12){
   
 echo "<tr>";for($i=0; $i < 12; $i++ ){
                   echo"<td>";
                   echo "$multiplication_table_of_12[$i] * $factor=",$multiplication_table_of_12[$i] * $factor;
                          
       echo "</td>";
       
       
    }
    echo "<tr>";
    $factor++;
 }

 echo "</table>";

?>

