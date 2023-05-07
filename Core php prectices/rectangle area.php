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
        <h2>rectangle area</h2>
        <form method="post">
         Enter a height:<input type="text" name="pname" required><br><br>
         Enter a width :<input type="text" name="year" required><br><br>

         <input type="submit" name="claculate_si" value="Calculate >>">
        </form>




        
    <?php 

if(isset($_POST["claculate_si"]))
{
    $x=$_POST["pname"];
    $y=$_POST["year"];
    $si=$x*$y."<br>";
    
    echo "<h2>ractangle area is :".$si."<h2>";

}
    ?>
    </center>

</body>
</html>