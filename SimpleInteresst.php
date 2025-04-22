<!-- simple_interest.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Simple Interest Calculator</title>
</head>
<body>

<h2>Simple Interest Calculator</h2>

<form method="post">
    Amount: <input type="number" name="amount" required><br><br>
    Rate (%): <input type="number" name="rate" step="0.01" required><br><br>
    Time (years): <input type="number" name="time" required><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if (isset($_POST['amount'])) {
    $amount = $_POST['amount'];
    $rate = $_POST['rate'];
    $time = $_POST['time'];

    $si = ($amount * $rate * $time) / 100;
    echo "<h3>Simple Interest is: ₹$si</h3>";
}
?>

</body>
</html>
