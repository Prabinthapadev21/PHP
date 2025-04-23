<!DOCTYPE html>
<html>
<head>
    <title>Simple Area Calculator</title>
</head>
<body>

<h2>Simple Area Calculator</h2>

<form method="post">
    Enter the radius: <input type="number" name="num" required><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if (isset($_POST['num']))
{
    $num = $_POST['num'];

    $area = 3.14*$num*$num;
    echo "<h3>Area of circle is $area</h3>";
}
?>
</body>
</html>
