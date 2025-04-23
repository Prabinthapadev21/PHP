<!DOCTYPE html>
<html>
<head>
    <title>Simple Fahrenheit Calculator</title>
</head>
<body>

<h2>Simple Fahrenheit Calculator</h2>

<form method="post">
    Enter temperature in Celsius: <input type="number" name="celcius" required><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if (isset($_POST['celcius'])) {
    $celcius = $_POST['celcius'];
    $farenheit = 32 + (9 / 5) * $celcius;
    echo "Temperature from $celcius°C to Fahrenheit is $farenheit°F";
}
?>
</body>
</html>
