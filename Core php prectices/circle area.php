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
        <h2>Calculate circle area</h2>
        <form method="post">
         Enter a principle ammount :<input type="text" name="pname" required><br><br>
         Enter a numbers of Years :<input type="text" name="year" required><br><br>
         Enter ROI :<input type="text" name="roi" required><br><br>
         <input type="submit" name="claculate_si" value="Calculate >>">
        </form>




        
    <?php 

if(isset($_POST["claculate_si"]))
{
    $π=$_POST["pname"];
    $r=$_POST["year"];
    $r=$_POST["roi"];
    $si= 3.14*$r*$r."<br>";
    
    echo "<h2>circle area is :".$si."<h2>";

}
    ?>
    </center>

</body>
</html>