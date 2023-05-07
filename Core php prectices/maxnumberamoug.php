<?php
      $num1=86;
      $num2=90;
      $num3=98;
      if($num1>$num2 && $num1>$num3){
      	echo $num1;
      }
      else{
      	if($num2>$num1 && $num2>$num3){
      		echo $num2;
      	}
      	else
      		echo "<h2 align='center'>The avrage mark is: $num3. <h2>";
      }

?>