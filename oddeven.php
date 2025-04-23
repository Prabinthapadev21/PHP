<!DOCTYPE html>
<html>
<head>
    <title>Simple OddEven Calculator</title>
</head>
<body>

<h2>OddEven Calculator</h2>

<form method="post">
    Enter a Number: <input type="number" name="num" required><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if (isset($_POST['num']))
{
    $num = $_POST['num'];

    if($num%2==0)
    {
        echo "<h3>$num is Even Number</h3>";
    }
    else
    {
        echo "<h3>$num is Odd Number</h3>";
    }
}
?>
</body>
</html>
