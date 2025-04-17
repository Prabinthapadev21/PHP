<html>
    <!-- sum for oue html form -->
    <head><title>Sum</title></head>
    <body>
        <?php
        if(isset($_GET['num1']))
{
    $n1 = intval($_GET["num1"]);
    $n2 = intval($_GET["num2"]);
    $sum = $n1 + $n2;
    echo  " <h1>Sum of $n1 and $n2 is: $sum</h1>";

}
else
{
    echo "Please enter a number";
}
        ?>
    </body>
</html>