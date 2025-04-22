<html>
    <!-- sum for oue html form -->
    <head><title>Simple Calculator</title>
</head>
    <body>
        <?php
        if(isset($_REQUEST['num1']))
{
    $n1 = intval($_REQUEST["num1"]);
    $n2 = intval($_REQUEST["num2"]);
    $result =0.0;
    $opr = $_REQUEST["opr"];
    switch($opr)
    {
        case "+":
            $result = $n1+$n2;
            echo "Sum of $n1 and $n2 is $result";
            break;
        case "-":
            $result = $n1-$n2;
            echo "Subtraction of $n1 and $n2 is $result";
            break;
        case "*":
            $result = $n1*$n2;
            echo "Multiplication of $n1 and $n2 is $result";
            break;
        case "/":   
            if($n2 != 0)
            {
            $result = $n1/$n2;
            echo " Division of $n1 and $n2 is $result";
            }
            else
            {
                echo "Division by zero is not allowed";
            }
            break;
        default:
            echo "Invalid operator selected";
    }

}
        ?>
        <form method="post" action="sum.php">
            <label for="num1">Number1</label>
            <input type="text" name="num1" id="num1"><br><br>
            <label for="num2">Number2</label>
            <input type="text" name="num2" id="num2"><br><br>
            <label for="opr">Operator</label>
            <select name="opr" id="opr">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>