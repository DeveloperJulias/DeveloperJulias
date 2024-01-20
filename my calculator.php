<!DOCTYPE html>
<html lang="en">


<body style="background-color:#ccc">


        <?php


        echo "<h1 style=\"color:blue;\"> My Original Calculator</h1>";
        $result='';                 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $firstnumber = $_POST['firstnumber'];
            $lastnumber = $_POST['lastnumber'];
            $calculator = $_POST['calculator'];

            if(!empty($firstnumber) && !empty($lastnumber)){

            switch ($calculator) {
                case "Add":
            
                    $result = $firstnumber + $lastnumber;
                   
                    break;

                case "Subtract":
                    $result = $firstnumber - $lastnumber;
                    break;

                case "Multiply":
                    $result = $firstnumber * $lastnumber;
                    break;

                case "Divide":
              
                    $result = $firstnumber / $lastnumber;
                    break;

                  
            }
            
        }else{
            echo "<h4 style=\"color:red\">You need to provide values</h4>";      
        }
        }
      

        ?>



<div class="form">

        <form action="" method="post">

            <input type="number" id="fistnumber" name="firstnumber" id="firstnumber" value="<?= $firstnumber ?>"/>
            <b>First Number</b>
            <br>
            <br>

            <input type="number" id="Lastnumber" name="lastnumber" id="lastnumber" value="<?= $lastnumber ?>"/>
            <b>Last Number</b>
            <br><br>

            <input type="text" id="result" name="result" value="<?= $result ?>"/>
            <b>Result</b>

            <br><br>
            <input type="submit" name="calculator"value="Add"/>
            <input type="submit" name="calculator" value="Subtract"/>
            <input type="submit" name="calculator" value="Multiply"/>
            <input type="submit" name="calculator" value="Divide"/>
        </form>
        </div>

</body>

</html>