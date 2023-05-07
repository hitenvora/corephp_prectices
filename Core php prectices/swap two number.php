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



<center>
    <form method="post">
        <h2>Calculate swap and before swap numbers</h2>
         Enter a number for swap :<input type="text" name="sq" required><br><br>
         Enter a number for before swap :<input type="text" name="qb" required><br><br>
         <input type="submit" name="og" value="Calculate >>">
        </form>
    </center>


    <?php 
      if(isset($_POST["og"]))
      {
        $a=$_POST["sq"];
        $b=$_POST["qb"];
        echo "before swap"."is &nbsp" .$a. " &nbsp is ".$b."<br>";
       
       
        $a=$a+$b;
       $b=$a-$b;
       $a=$a-$b;

        echo "after swap"."is &nbsp" .$a. " &nbsp is ".$b."<br>";
      }

    ?>

    
</body>
</html>