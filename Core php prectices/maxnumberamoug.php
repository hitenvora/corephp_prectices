<?php
if(isset($_POST["check"]))
      $num1=$_POST["fv"];
      $num2=$_POST["sv"];
      $num3=$_POST["lv"];
      if($num1>$num2 && $num1>$num3){
      	echo "<h2 align='center'>The maximum number is: $num1. <h2>";
      }
      else{
      	if($num2>$num1 && $num2>$num3){
      		echo "<h2 align='center'>The maximum number is: $num2. <h2>";
      	}
      	else{

                  if($num3>$num1 && $num3>$num2){
      		echo "<h2 align='center'>The maximum number is: $num3. <h2>";
                  }
            }
      }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1 align='center'>To Check maximumnuber</h1>
    <form method="post" align='center'>
        <input type="text" name="fv" placeholder="Enter first number" required><br><br>
        <input type="text" name="sv" placeholder="Enter second number" required><br><br>
        <input type="text" name="lv" placeholder="Enter third number" required><br><br>

        <input type="submit" name="check" value="check year">
    </form>
    <?php
  
    ?>
</body>
</html>
