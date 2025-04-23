// to create the multiple table
<!DOCTYPE html>
<html>
<head>
    <title>Simple Table Calculator</title>
</head>
<body>

<h2>Simple Table Calculator</h2>

<form method="post">
    Enter a Number: <input type="number" name="num" required><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if (isset($_POST['num']))
{
    $num = $_POST['num'];

    for ($i = 1; $i <= 10; $i++) {
        $result = $num * $i;
        echo "<h3>$num x $i = $result</h3>";
    }
}
?>
</body>
</html>
